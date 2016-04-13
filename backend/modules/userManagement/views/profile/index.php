<?php

use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\models\rbacDB\Role;
use webvimark\modules\UserManagement\models\User;
use webvimark\modules\UserManagement\UserManagementModule;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\User $model
 */

$this->title = 'My Profile';
?>
<div class="user-view">

	<h2 class="lte-hide-title"><?= $this->title ?></h2>

	<div class="panel panel-default">
		<div class="panel-body">

		    <p>
			<?= GhostHtml::a(UserManagementModule::t('back', 'Edit'), ['update', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']) ?>
			<?= GhostHtml::a(UserManagementModule::t('back', 'Create'), ['create'], ['class' => 'btn btn-sm btn-success']) ?>
			<?= GhostHtml::a(
				UserManagementModule::t('back', 'Roles and permissions'),
				['/user-management/user-permission/set', 'id'=>$model->id],
				['class' => 'btn btn-sm btn-default']
			) ?>

		    </p>

			<?= DetailView::widget([
				'model'      => $model,
				'attributes' => [
					'id',
					[
						'attribute'=>'status',
						'value'=>User::getStatusValue($model->status),
					],
					'username',
					'email',
					[
						'label'=>UserManagementModule::t('back', 'Roles'),
						'value'=>implode('<br>', ArrayHelper::map(Role::getUserRoles($model->id), 'name', 'description')),
						'format'=>'raw',
					],
					'created_at:datetime',
					'updated_at:datetime',
				],
			])
			?>

		</div>
	</div>
</div>
