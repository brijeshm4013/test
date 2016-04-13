<?php

namespace backend\modules\userManagement\controllers;

use backend\components\AdminDefaultController;
use Yii;
use backend\modules\userManagement\models\User;
use backend\modules\userManagement\models\search\UserSearch;
use yii\web\NotFoundHttpException;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends AdminDefaultController
{
	/**
	 * @var User
	 */
	public $modelClass = 'backend\modules\userManagement\models\User';

	/**
	 * @var UserSearch
	 */
	public $modelSearchClass = 'backend\modules\UserManagement\models\search\UserSearch';

	/**
	 * @return mixed|string|\yii\web\Response
	 */
	public function actionCreate()
	{
		$model = new User(['scenario'=>'newUser']);
		if ( $model->load(Yii::$app->request->post()) && $model->save() )
		{
			return $this->redirect(['view',	'id' => $model->id]);
		}

		return $this->renderIsAjax('create', compact('model'));
	}

	/**
	 * @param int $id User ID
	 *
	 * @throws \yii\web\NotFoundHttpException
	 * @return string
	 */
	public function actionChangePassword($id)
	{
		$model = User::findOne($id);

		if ( !$model )
		{
			throw new NotFoundHttpException('User not found');
		}

		$model->scenario = 'changePassword';

		if ( $model->load(Yii::$app->request->post()) && $model->save() )
		{
			return $this->redirect(['view',	'id' => $model->id]);
		}

		return $this->renderIsAjax('changePassword', compact('model'));
	}

	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		$model->scenario=User::SCENARIO_UPDATE_USER;

		if ( $model->load(Yii::$app->request->post()) AND $model->save())
		{
			$redirect = $this->getRedirectPage('update', $model);

			return $redirect === false ? '' : $this->redirect($redirect);
		}
		return $this->renderIsAjax('update', compact('model'));
	}


}
