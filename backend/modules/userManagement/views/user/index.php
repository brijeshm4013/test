<?php

use backend\modules\userManagement\components\GhostHtml;
use backend\modules\userManagement\models\rbacDB\Role;
use backend\modules\userManagement\models\User;
use backend\modules\userManagement\UserManagementModule;
use common\components\kartik\ProjectExportMenu;
use webvimark\extensions\GridBulkActions\GridBulkActions;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var webvimark\modules\UserManagement\models\search\UserSearch $searchModel
 */

$this->title = UserManagementModule::t('back', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$gridId='user-grid';
$gridColumns=[

	[
		'class'=>'backend\components\StatusColumn',
		'attribute'=>'superadmin',
		'visible'=>Yii::$app->user->isSuperadmin,
	],

	[
		'attribute'=>'username',
		'value'=>function(User $model){
			return Html::a($model->username,['view', 'id'=>$model->id],['data-pjax'=>0]);
		},
		'format'=>'raw',
	],
	[
		'attribute'=>'email',
		'format'=>'raw',
		'visible'=>User::hasPermission('viewUserEmail'),
	],
	[
		'class'=>'backend\components\StatusColumn',
		'attribute'=>'email_confirmed',
		'visible'=>User::hasPermission('viewUserEmail'),
	],
	[
		'attribute'=>'gridRoleSearch',
		'filter'=>ArrayHelper::map(Role::getAvailableRoles(Yii::$app->user->isSuperAdmin),'name', 'description'),
		'value'=>function(User $model){
			return implode(', ', ArrayHelper::map($model->roles, 'name', 'description'));
		},
		'format'=>'raw',
		'visible'=>User::hasPermission('viewUserRoles'),
	],
	[
		'attribute'=>'registration_ip',
		'value'=>function(User $model){
			return Html::a($model->registration_ip, "http://ipinfo.io/" . $model->registration_ip, ["target"=>"_blank"]);
		},
		'format'=>'raw',
		'visible'=>User::hasPermission('viewRegistrationIp'),
	],

	[
		'class'=>'backend\components\StatusColumn',
		'attribute'=>'status',
		'optionsArray'=>[
			[User::STATUS_ACTIVE, UserManagementModule::t('back', 'Active'), 'success'],
			[User::STATUS_INACTIVE, UserManagementModule::t('back', 'Inactive'), 'warning'],
			[User::STATUS_BANNED, UserManagementModule::t('back', 'Banned'), 'danger'],
		],
	],
	['class' => 'yii\grid\CheckboxColumn', 'options'=>['style'=>'width:10px'] ],

	[
		'label'=>'Roles and Permissions',
		'value'=>function(User $model){
			return GhostHtml::a(
				UserManagementModule::t('back', 'Roles and Permissions'),
				['/user-management/user-permission/set', 'id'=>$model->id],
				['class'=>'btn btn-sm btn-primary', 'data-pjax'=>0]);
		},

		'format'=>'raw',
		'visible'=>User::canRoute('/user-management/user-permission/set'),
		'options'=>[
			'width'=>'10px',
		],
	],
	[

		'label'=>'Change Password',
		'value'=>function(User $model){
			return GhostHtml::a(
				UserManagementModule::t('back', 'Change Password'),
				['change-password', 'id'=>$model->id],
				['class'=>'btn btn-sm btn-default label-info', 'data-pjax'=>0]);
		},
		'format'=>'raw',

		'options'=>[
			'width'=>'10px',
		],
	],
	[
		'class' => 'yii\grid\ActionColumn',
		'template'=>'{view} {update}'
	],
];

$gridPanel=[

	'before'=>GhostHtml::a(
		'<span class="glyphicon glyphicon-plus-sign"></span> ' . UserManagementModule::t('back', 'Create'),
		['/user-management/user/create'],
		['class' => 'btn btn-success']
	),
	'after'=>GridBulkActions::widget([
		'gridId'=>$gridId,
		'actions'=>[
			Url::to(['bulk-activate', 'attribute'=>'status'])=>GridBulkActions::t('app', 'Activate'),
			Url::to(['bulk-deactivate', 'attribute'=>'status'])=>GridBulkActions::t('app', 'Deactivate'),
			'----'=>[
				Url::to(['bulk-delete'])=>GridBulkActions::t('app', 'Delete'),
			],
		],
	])
];

$gridColumnCount=count($gridColumns);

$exportMenuConfig=[
		'noExportColumns'=>[$gridColumnCount-1,$gridColumnCount-2,$gridColumnCount-3,$gridColumnCount-4],
	];
?>
<?php
	Pjax::begin([
		'id'=>'user-grid-pjax',
	]);
?>
<?php

$fullExportMenu=ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId,$exportMenuConfig);
echo $this->render('//layouts/common/_kartikGridView',[
	'gridId'=>$gridId,
	'dataProvider' => $dataProvider,
	'searchModel' => $searchModel,
	'gridColumns' =>$gridColumns,
	'gridPanel'=>$gridPanel,
	'fullExportMenu'=>$fullExportMenu
]);

?>

<?php Pjax::end() ?>

