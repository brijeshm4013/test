<?php

namespace common\modules\documentManagement\controllers;

use common\models\User;
use common\modules\vehicleManagement\models\Vehicle;
use common\utils\ProjectUtils;
use Yii;
use common\modules\documentManagement\models\VehicleDocument;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * VehicleDocumentController implements the CRUD actions for VehicleDocument model.
 */
class VehicleDocumentController extends Controller
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
     * @param VehicleDocument $model
     * @return mixed
     * @throws NotFoundHttpException
     */
    private function getVehicleId(VehicleDocument $model){
        $params=Yii::$app->request->queryParams;
        $vehicle_id=$params['VehicleDocument']['vehicle_id'];
        $model->vehicle_id=$vehicle_id;
        $query = Vehicle::find();

        if(User::hasRole('vendor',false)){
            $query->joinWith([
                'vendorVehicles' => function ($query) {
                    $query->from('vendor_vehicle vendorVehicles');
                },
            ]);
            $user=User::getCurrentUser();
            $vendor=$user->vendor;
            $query->andWhere(['vendorVehicles.vendor_id'=>$vendor->id]);
            $query->andWhere(['vendorVehicles.vehicle_id'=>$model->vehicle_id]);
            $vehicle = $query->one();
        }elseif(User::hasRole('SuperAdmin') || User::hasRole('OperationUser')){
            $vehicle=$model->vehicle;
        }

        if(!$vehicle) {
            throw new NotFoundHttpException("There is no vehicle exist for vehicle_id {$vehicle_id}.");
        }
        return $vehicle_id;
    }

    /**
     * Lists all VehicleDocument models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VehicleDocument();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this->getVehicleId($searchModel);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VehicleDocument model.
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
        $model = new VehicleDocument();
        $this->getVehicleId($model);
        $model->setScenario(VehicleDocument::SCENARIO_CREATE);
        $view='create';
        $message="Vehicle Document '%s' has been uploaded successfully";
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
        $model->setScenario(VehicleDocument::SCENARIO_UPDATE);
        $view='update';
        $message="Vehicle Document '%s' has been updated successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Deletes an existing VehicleDocument model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model=$this->findModel($id);
        $model->delete();

        return $this->redirect(['index','VehicleDocument[vehicle_id]' => $model->vehicle_id]);
    }

    /**
     * Finds the VehicleDocument model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return VehicleDocument the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = VehicleDocument::findOne($id)) !== null) {
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
    protected function save(VehicleDocument $model,$view,$message='') {
        $oldFileName=$model->file;

        if ($model->load(Yii::$app->request->post())){
            if($model->isNewRecord || empty($model->create_at)){
                $model->create_at=Yii::$app->formatter->asDatetime('NOW','php: Y-m-d H:i:s');
            }

            if(!$model->isNewRecord && $oldFileName!=''){
                $fileName=$oldFileName;
            }else{
                $fileName=$model->documentType->document_type.'_'.
                    $model->vehicle_id.'_'.
                    $model->vehicle->rc_number.'_'.
                    $model->documentType->document_title;
            }
            ProjectUtils::uploadFile($model,'file',ProjectUtils::DIR_VEHICLE_DOCS,$fileName);
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
