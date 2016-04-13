<?php

namespace common\modules\bookingManagement\controllers;

use Yii;
use common\modules\bookingManagement\models\BookingRouteRate;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * BookingRouteRateController implements the CRUD actions for BookingRouteRate model.
 */
class BookingRouteRateController extends Controller
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
     * Lists all BookingRouteRate models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookingRouteRate();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BookingRouteRate model.
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
     * Creates a new BookingRouteRate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BookingRouteRate();
        $model->setScenario(BookingRouteRate::SCENARIO_CREATE);
        $view='create';
        $message="'Booking Route Rate' has been create successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Updates an existing BookingRouteRate model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->setScenario(BookingRouteRate::SCENARIO_UPDATE);
        $view='update';
        $message="'Booking Route Rate' has been update successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Deletes an existing BookingRouteRate model.
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
     * Finds the BookingRouteRate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BookingRouteRate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BookingRouteRate::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @param BookingRouteRate $model
     * @param $view
     * @param string $message
     * @return array|string|Response
     */
    protected function save(BookingRouteRate $model, $view, $message='') {
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
