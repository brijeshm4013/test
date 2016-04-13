<?php

namespace common\modules\bookingManagement\controllers;

use Yii;

use common\modules\bookingManagement\models\BookingType;
use yii\console\Response;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\widgets\ActiveForm;

/**
 * BookingTypeController implements the CRUD actions for BookingType model.
 */
class BookingTypeController extends Controller
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
     * Lists all BookingType models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookingType();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BookingType model.
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
     * Creates a new BookingType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BookingType();
        $model->setScenario(BookingType::SCENARIO_CREATE);
        $view='create';
        $message="Booking Type '%s' has been create successfully";
        return $this->save($model,$view,$message);

    }

    /**
     * Updates an existing BookingType model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->setScenario(BookingType::SCENARIO_UPDATE);
        $view='create';
        $message="Booking Type '%s' has been update successfully";
        return $this->save($model,$view,$message);
    }

    /**
     * Deletes an existing BookingType model.
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
     * Finds the BookingType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BookingType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BookingType::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function save(BookingType $model,$view,$message) {
        if($model->isNewRecord || empty($model->create_at)){
            $model->create_at=Yii::$app->formatter->asDatetime('NOW','php: Y-m-d H:i:s');
        }

        if (Yii::$app->request->isAjax) {
            $model->load(Yii::$app->request->post());
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }elseif ($model->load(Yii::$app->request->post()) && $model->save()){
            $message=sprintf($message,$model->title);
            Yii::$app->session->setFlash('success',Yii::t('app', $message));
            return $this->redirect(['view', 'id' => $model->id]);
        }else{
            return $this->render($view, [
                'model' => $model,
            ]);
        }
    }
}
