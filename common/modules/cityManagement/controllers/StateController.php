<?php

namespace common\modules\cityManagement\controllers;

use common\traits\base\AjaxAddUpdateTrait;
use kartik\widgets\ActiveForm;
use Yii;
use common\modules\cityManagement\models\State;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * StateController implements the CRUD actions for BaseState model.
 */
class StateController extends Controller
{

    //use \common\modules\cityManagement\traits\AjaxAddUpdateTrait;

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
     * Lists all BaseState models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new State();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BaseState model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BaseState model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new State();
        $model->setScenario(State::SCENARIO_CREATE);
        $view='create';
        $message='State "'.$model->name.'" has been add successfully';
        return $this->save($model,$view,$message);
    }

    /**
     * Updates an existing BaseState model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->setScenario(State::SCENARIO_UPDATE);
        $view='update';
        $message='State "'.$model->name.'" has been update successfully';
        return $this->save($model,$view,$message);
    }



    /**
     * Deletes an existing BaseState model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }*/

    protected function save($model,$view,$message) {
        if (Yii::$app->request->isAjax) {
            $model->load(Yii::$app->request->post());
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }elseif ($model->load(Yii::$app->request->post()) && $model->save()){
            $message=sprintf($message,$model->name);
            Yii::$app->session->setFlash('success',Yii::t('app', $message));
            return $this->redirect(['view', 'id' => $model->id]);
        }else{
            return $this->render($view, [
                'model' => $model,
            ]);
        }
    }
    /**
     * Finds the BaseState model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return State the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = State::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
