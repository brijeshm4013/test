<?php

namespace common\modules\bookingManagement\controllers;

use Yii;
use common\modules\bookingManagement\models\BookingAlert;
use yii\base\Response;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\widgets\ActiveForm;

/**
 * BookingAlertController implements the CRUD actions for BookingAlert model.
 */
class BookingAlertController extends Controller
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
     * Lists all BookingAlert models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookingAlert;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single BookingAlert model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $model->setScenario(BookingAlert::SCENARIO_UPDATE);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('view', ['model' => $model]);
        }
    }

    /**
     * Creates a new BookingAlert model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BookingAlert;
        $model->setScenario(BookingAlert::SCENARIO_CREATE);
        $view='create';
        $message="Booking Alert '%s' has been create successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Updates an existing BookingAlert model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->setScenario(BookingAlert::SCENARIO_UPDATE);
        $view='update';
        $message="Booking Alert '%s' has been update successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Deletes an existing BookingAlert model.
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
     * Finds the BookingAlert model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BookingAlert the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BookingAlert::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function save(BookingAlert $model,$view,$message) {
        if($model->isNewRecord || empty($model->create_at)){
            $model->create_at=Yii::$app->formatter->asDatetime('NOW','php: Y-m-d H:i:s');
        }

        if (Yii::$app->request->isAjax) {
            $model->load(Yii::$app->request->post());
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }elseif ($model->load(Yii::$app->request->post()) && $model->save()){
            $message=sprintf($message,$model->alert_title);
            Yii::$app->session->setFlash('success',Yii::t('app', $message));
            return $this->redirect(['view', 'id' => $model->id]);
        }else{
            return $this->render($view, [
                'model' => $model,
            ]);
        }
    }
}
