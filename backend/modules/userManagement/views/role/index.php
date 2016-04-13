<?php
use webvimark\extensions\GridPageSize\GridPageSize;
use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\models\rbacDB\AuthItemGroup;
use webvimark\modules\UserManagement\models\rbacDB\Role;
use webvimark\modules\UserManagement\UserManagementModule;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
/**
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var webvimark\modules\UserManagement\models\rbacDB\search\RoleSearch $searchModel
 * @var yii\web\View $this
 */
$this->title = UserManagementModule::t('back', 'Roles');
$this->params['breadcrumbs'][] = $this->title;

?>

<?php
Pjax::begin([
	'id'=>'role-grid-pjax',
])?>
		<?php
		$gridId='role-grid';
		$gridPanel=[

			'before'=>GhostHtml::a(
				'<span class="glyphicon glyphicon-plus-sign"></span> ' . UserManagementModule::t('back', 'Create'),
				['/user-management/role/create'],
				['class' => 'btn btn-success']
			),
		];
		$gridColumns=[
			['class' => 'yii\grid\SerialColumn', 'options'=>['style'=>'width:10px'] ],

			[
				'attribute'=>'description',
				'value'=>function(Role $model){
					return Html::a($model->description, ['view', 'id'=>$model->name], ['data-pjax'=>0]);
				},
				'format'=>'raw',
			],
			'name',
			[
				'class' => 'yii\grid\ActionColumn',
				'template'=>'{view} {update}'
			],
		];
		echo $this->render('//layouts/common/_kartikGridView',[
			'gridId'=>$gridId,
			'dataProvider' => $dataProvider,
			'searchModel' => $searchModel,
			'gridColumns' =>$gridColumns,
			'gridPanel'=>$gridPanel,

		])
		?>

<?php Pjax::end() ?>
