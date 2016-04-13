<?php

namespace common\modules\vehicleManagement\controllers;

use Yii;
use common\modules\vehicleManagement\models\VehicleCategory;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * VehicleCategoryController implements the CRUD actions for VehicleCategory model.
 */
class VehicleCategoryController extends Controller
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
     * Lists all VehicleCategory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VehicleCategory();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VehicleCategory model.
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
     * Creates a new VehicleCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VehicleCategory();
        $model->setScenario(VehicleCategory::SCENARIO_CREATE);
        $view='create';
        $message="Vehicle Category '%s' has been created successfully";
        return $this->save($model,$view,$message);

    }

    /**
     * Updates an existing VehicleCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->setScenario(VehicleCategory::SCENARIO_UPDATE);
        $view='update';
        $message="Vehicle Category '%s' has been updated successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Deletes an existing VehicleCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
//
//    public function actionDelete($id)
//    {
//        $this->findModel($id)->delete();
//
//        return $this->redirect(['index']);
//    }

    /**
     * Finds the VehicleCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return VehicleCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = VehicleCategory::findOne($id)) !== null) {
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
    protected function save(VehicleCategory $model, $view, $message='') {
        $model->load(Yii::$app->request->post());

        if($model->isNewRecord || empty($model->create_at)){
            $model->create_at=Yii::$app->formatter->asDatetime('NOW','php: Y-m-d H:i:s');
        }
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }elseif ($model->load(Yii::$app->request->post()) && $model->save()){
            $message=sprintf($message,$model->name);
            Yii::$app->session->setFlash('success',Yii::t('app',$message));
            return $this->redirect(['view', 'id' => $model->id]);
        }else{
            return $this->render($view, [
                'model' => $model,
            ]);
        }
    }

}
