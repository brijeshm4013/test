<?php

namespace common\modules\vendorProfileManagement\controllers;

use common\models\User;
use common\modules\vendorManagement\models\Vendor;
use common\utils\ProjectUtils;
use Yii;
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
                'class' => 'backend\modules\UserManagement\components\GhostAccessControl',
            ],

        ];
    }

    /**
     * vendor can view his profile
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        $user=$this->findModel();
        if(User::hasRole('vendor',false)){
            $model=$user->vendor;
            return $this->render('view', [
                'model'=>$model
            ]);
        }else{
            throw new NotFoundHttpException('Invalid User.');
        }

    }

    /**
     * Vendor can update his profile.
     * @return array|string|Response
     * @throws NotFoundHttpException
     */
    public function actionUpdate()
    {
        $user=$this->findModel();
        if(User::hasRole('vendor',false)){
            $model=$user->vendor;
            $model->setScenario(Vendor::VENDOR_PROFILE);
            $user=$model->user;
            $user->setScenario(User::SCENARIO_UPDATE_USER);
            $view='update';
            $message="Profile has been save successfully";
            return $this->save($user,$model,$view,$message);

        }else{
            throw new NotFoundHttpException('Invalid User.');
        }
    }

    /**
     * Finds the session User model.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel()
    {
        $model=User::getCurrentUser();
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Invalid User.');
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
                    return $this->redirect('index');
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
