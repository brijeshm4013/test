<?php

namespace common\modules\vendorManagement\controllers;

use common\models\User;
use common\modules\vendorManagement\models\Vendor;
use common\utils\ProjectUtils;
use Yii;
use yii\base\Exception;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * VendorController implements the CRUD actions for Vendor model.
 */
class VendorController extends Controller
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
                    //'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Vendor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Vendor();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vendor model.
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
     * Creates a new Vendor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vendor();
        $model->setScenario(Vendor::SCENARIO_CREATE);
        $user=new User();
        $user->setScenario(User::SCENARIO_NEW_USER);
        $view='create';
        $message="Vendor '%s' has been save successfully";
        return $this->save($user,$model,$view,$message);
    }

    /**
     * Updates an existing Vendor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->setScenario(Vendor::SCENARIO_UPDATE);
        $user=$model->user;
        $user->setScenario(User::SCENARIO_UPDATE_USER);
        $view='update';
        $message="Vendor '%s' has been save successfully";
        return $this->save($user,$model,$view,$message);

    }

    /**
     * Deletes an existing Vendor model.
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
     * List of all active vendors.

     * @return mixed
     */
    public function actionVendorList($q)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        return Vendor::getVendor($q);
    }

    /**
     * Finds the Vendor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vendor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vendor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @param $user
     * @param $model
     * @param $view
     * @param string $message
     * @return array|string|Response
     *
     * This function is use to validate and save by Ajax
     */
    protected function save(User $user,Vendor $model,$view,$message='') {

        if($user->isNewRecord || empty($user->create_at)){
            $user->auth_key=ProjectUtils::getGuid();
            $user->created_at=time();
            $user->updated_at=time();
            $model->create_at=Yii::$app->formatter->asDatetime('NOW','php: Y-m-d H:i:s');
        }

        $user->status=!empty($model->is_active)? $model->is_active : 0;

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $user->load(Yii::$app->request->post());
            $model->load(Yii::$app->request->post());
            $user->superadmin=0;
            $validate=ArrayHelper::merge(ActiveForm::validate($user),ActiveForm::validate($model));
            return $validate;
        }elseif ($user->load(Yii::$app->request->post()) &&  $model->load(Yii::$app->request->post()) && $user->validate() && $model->validate()){

            $transaction=Yii::$app->getDb()->beginTransaction();
            try{
                if($user->save()){
                    $model->user_id=$user->id;
                    if($model->save()){
                        $model->afterSaveVendor();
                    }
                }
                $transaction->commit();
                if($model->id){
                    $message=sprintf($message,$model->name);
                    Yii::$app->session->setFlash('success',Yii::t('app',$message));
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }catch(Exception  $e){
                $transaction->rollBack();
                $message=$e->getMessage();
                Yii::$app->session->setFlash('error',Yii::t('app',$message));
            }
        }
        return $this->render($view, [
            'model' => $model,
            'user'=>$user
        ]);
    }
}
