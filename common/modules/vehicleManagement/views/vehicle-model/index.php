<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\vehicleManagement\models\VehicleModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicle Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-model-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    $vehicleCategories=\common\modules\vehicleManagement\models\VehicleCategory::getVehicleCategoryList();
    $vehicleCategoriesList=\yii\helpers\ArrayHelper::map($vehicleCategories,'id','name');

    $gridId='vehicle-model-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        'model_name',
        [
            'attribute'=>'vehicle_category_id',
            'value'=>'vehicleCategory.name',
            'filterType'=>\kartik\grid\GridView::FILTER_SELECT2,
            'filter'=>$vehicleCategoriesList,
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                'options' => ['placeholder' => 'Select a Source City ...','class'=>'form-control', 'style'=>'width:300px'],


            ],

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
            'header'=>'Action',
            'template'=>'{view} {update}'
        ],
    ];


    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create'),
            ['/vehicle-management/vehicle-model/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),
    ];

    $exportMenuConfig=[
        'noExportColumns'=>[count($gridColumns)-1],
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
