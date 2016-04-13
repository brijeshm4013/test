<?php

namespace common\modules\vendorManagement\controllers;

use Yii;
use common\modules\vendorManagement\models\VendorRoundTripRate;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * VendorRoundTripRateController implements the CRUD actions for VendorRoundTripRate model.
 */
class VendorRoundTripRateController extends Controller
{
    public function behaviors()
    {
        return [
            'ghost-access'=> [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
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
     * Lists all VendorRoundTripRate models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VendorRoundTripRate();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VendorRoundTripRate model.
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
     * Creates a new VendorRoundTripRate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VendorRoundTripRate();
        $model->setScenario(VendorRoundTripRate::SCENARIO_CREATE);
        $view='create';
        $message="Vendor 'Vendor Round Trip Rate' has been create successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Updates an existing VendorRoundTripRate model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->setScenario(VendorRoundTripRate::SCENARIO_UPDATE);
        $view='update';
        $message="Vendor 'Vendor Round Trip Rate' has been create successfully";
        return $this->save($model,$view,$message);

    }

    /**
     * Deletes an existing VendorRoundTripRate model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the VendorRoundTripRate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return VendorRoundTripRate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = VendorRoundTripRate::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @param VendorRoundTripRate $model
     * @param $view
     * @param string $message
     * @return string|\yii\web\Response
     */
    protected function save(VendorRoundTripRate $model, $view, $message='') {
        $model->load(Yii::$app->request->post());
        if($model->isNewRecord || empty($model->create_at)){
            $model->create_at=Yii::$app->formatter->asDatetime('NOW','php: Y-m-d H:i:s');
        }

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }elseif ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success',Yii::t('app',$message));
            return $this->redirect(['view', 'id' => $model->id]);
        }else{
            return $this->render($view, [
                'model' => $model,
            ]);
        }
    }
}
