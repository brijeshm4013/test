<?php

use yii\helpers\Html;
use common\modules\documentManagement\models\DriverDocument;
use common\models\User;

/* @var $this yii\web\View */
/* @var $searchModel \common\modules\documentManagement\models\DriverDocument */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Documents';

if(User::hasRole('vendor',false)){
    $this->params['breadcrumbs'][] = ['label' => 'My Drivers', 'url' => ['/vendor-profile-management/driver/index','id'=>$searchModel->driver_id]];
    $this->params['breadcrumbs'][] = ['label' => $searchModel->driver->name, 'url' => ['/vendor-profile-management/driver/view','id'=>$searchModel->driver_id]];

}


$this->params['breadcrumbs'][] = $this->title;


?>
<div class="driver-document-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute'=>'driver_id',
            'value'=>function(DriverDocument $model){
                $driver=$model->driver;
                return $driver->name;
            },
            'filter' => false,
        ],
        [
            'attribute'=>'document_type_id',
            'value'=>'documentType.document_title',
        ],
        [
            'attribute' => 'file',
            'filter' => false,
            'format' => 'html',
            'value' => function($model) {
                return Html::img('@web/'.\common\utils\ProjectUtils::DIR_DRIVER_DOCS.$model->file, ['width'=>'100']);
            },
        ],
        [
            'attribute'=>'is_active',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_active',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'create_at',
            'filterType'=>\kartik\grid\GridView::FILTER_DATE,
            'format'=>'datetime',
            'filterWidgetOptions'=>[
                'readonly' => true,
                'pluginOptions'=>[
                    'format'=>'yyyy-mm-dd',
                    'allowClear' => true,
                    'autoclose' => true,
                    'endDate'=>"+0d",
                ]
            ],
        ],

        [
            'attribute'=>'update_at',
            'filterType'=>\kartik\grid\GridView::FILTER_DATE,
            'format'=>'datetime',
            'filterWidgetOptions'=>[
                'readonly' => true,
                'pluginOptions'=>[
                    'format'=>'yyyy-mm-dd',
                    'allowClear' => true,
                    'autoclose' => true,
                    'endDate'=>"+0d",
                ]
            ],
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {delete}'
        ],
    ];

    $gridId='driver-document-grid';
    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Upload Driver Document'),
            ['/document-management/driver-document/create', 'DriverDocument[driver_id]'=>$searchModel->driver->id],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),
    ];
    $fullExportMenu=\common\components\kartik\ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId);

    echo $this->render('//layouts/common/_kartikGridView',[
        'gridId'=>$gridId,
        'dataProvider' => $dataProvider,
        'searchModel' => $searchModel,
        'gridColumns' =>$gridColumns,
        'gridPanel'=>$gridPanel,
        'fullExportMenu'=>$fullExportMenu
    ]);
    ?>

</div>
