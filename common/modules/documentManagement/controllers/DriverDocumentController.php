<?php

namespace common\modules\documentManagement\controllers;

use common\models\User;
use common\modules\vendorManagement\models\Driver;
use common\utils\ProjectUtils;
use Yii;
use common\modules\documentManagement\models\DriverDocument;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DriverDocumentController implements the CRUD actions for DriverDocument model.
 */
class DriverDocumentController extends Controller
{
    public function behaviors()
    {
        return [
            'ghost-access'=> [
                'class' => 'backend\modules\UserManagement\components\GhostAccessControl',
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @param DriverDocument $model
     * @return mixed
     * @throws NotFoundHttpException
     */
    private function getDriverId(DriverDocument $model){
        $params=Yii::$app->request->queryParams;
        $driver_id=$params['DriverDocument']['driver_id'];
        $model->driver_id=$driver_id;

        if(User::hasRole('vendor',false)){
            $query=Driver::find();
            $model=null;
            $query->joinWith([
                'vendorDrivers' => function ($query) {
                    $query->from('vendor_driver vendorDrivers');
                },
            ]);
            $user=User::getCurrentUser();
            $vendor=$user->vendor;
            $query->andWhere(['vendorDrivers.vendor_id'=>$vendor->id]);
            $query->andWhere(['vendorDrivers.driver_id'=>$model->driver_id]);
            $driver=$query->one();
        }elseif(User::hasRole('SuperAdmin') || User::hasRole('OperationUser')){
            $driver=$model->driver;
        }



        if(!$driver) {
            throw new NotFoundHttpException("There is no driver exist for driver_id {$driver_id}.");
        }
        return $driver_id;
    }

    /**
     * Lists all DriverDocument models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DriverDocument();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this->getDriverId($searchModel);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DriverDocument model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new VehicleDocument model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DriverDocument();
        $this->getDriverId($model);
        $model->setScenario(DriverDocument::SCENARIO_CREATE);
        $view='create';
        $message="Driver Document '%s' has been uploaded successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Updates an existing DocumentType model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->setScenario(DriverDocument::SCENARIO_UPDATE);
        $view='update';
        $message="Driver Document '%s' has been updated successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Deletes an existing DriverDocument model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model=$this->findModel($id);
        $model->delete();

        return $this->redirect(['index','DriverDocument[driver_id]' => $model->driver_id]);
    }

    /**
     * Finds the DriverDocument model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DriverDocument the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DriverDocument::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @param $model
     * @param $view
     * @param string $message
     * @return array|string|Response
     *
     * This function is use to validate and save by Ajax
     */
    protected function save(DriverDocument $model,$view,$message='') {
        $oldFileName=$model->file;

        if ($model->load(Yii::$app->request->post())){
            if($model->isNewRecord || empty($model->create_at)){
                $model->create_at=Yii::$app->formatter->asDatetime('NOW','php: Y-m-d H:i:s');
            }

            if(!$model->isNewRecord && $oldFileName!=''){
                $fileName=$oldFileName;
            }else{
                $fileName=$model->documentType->document_type.'_'.
                    $model->driver_id.'_'.
                    $model->driver->name.'_'.
                    $model->documentType->document_title;
            }
            ProjectUtils::uploadFile($model,'file',ProjectUtils::DIR_DRIVER_DOCS,$fileName);
            if($model->validate() && $model->save()){
                $message=sprintf($message,$model->documentType->document_title);
                Yii::$app->session->setFlash('success',Yii::t('app',$message));
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render($view, [
            'model' => $model,
        ]);
    }
}
