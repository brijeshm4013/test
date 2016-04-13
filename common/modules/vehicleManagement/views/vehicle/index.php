<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\vendorManagement\models\Vehicle */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $gridId='vehicle-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute'=>'vehicle_model_id',
            'value'=>'vehicleModel.model_name'
        ],
        'rc_number',
        'total_seats',
        [
            'attribute'=>'has_air_conditioning',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'has_air_conditioning',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'has_gps',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'has_gps',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'has_luggage_carrier',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'has_luggage_carrier',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'has_lcd',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'has_lcd',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'is_approved',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_approved',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
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
            'label'=>'Documents',
            'value'=>function($model){
                return \backend\modules\userManagement\components\GhostHtml::a(
                    \backend\modules\userManagement\UserManagementModule::t('back', 'Uploaded Document'),
                    ['/document-management/vehicle-document', 'VehicleDocument[vehicle_id]'=>$model->id],
                    ['class'=>'btn btn-sm btn-primary', 'data-pjax'=>0]);
            },

            'format'=>'raw',
            'visible'=>\backend\modules\userManagement\models\User::canRoute('/document-management/vehicle-document'),
            'options'=>[
                'width'=>'10px',
            ],
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Action',
            'template'=>'{view} {update}'
        ],
    ];

    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Vehicle'),
            ['/vehicle-management/vehicle/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),
    ];

    $exportMenuConfig=[
        'noExportColumns'=>[count($gridColumns)-1,count($gridColumns)-2],
    ];

        $fullExportMenu=\common\components\kartik\ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId,$exportMenuConfig);
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
