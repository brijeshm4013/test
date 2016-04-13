<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\vendorManagement\models\VendorRoundTripRate */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendor Round Trip Rates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-round-trip-rate-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    $gridId='vendor-one-way-rate-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute'=>'vendor_id',
            'value'=>'vendor.name',
        ],
        [
            'attribute'=>'vehicle_category_id',
            'value'=>'vehicleCategory.name',
        ],
        [
            'attribute'=>'min_km',
            'value'=>function($model){
               return $model->min_km.' Km.';
            },
        ],
        [
            'attribute'=>'rate_per_km',
            'value'=>function($model){
                return $model->rate_per_km.' Rs.';
            },
        ],
        [
            'attribute'=>'rate_per_hour',
            'value'=>function($model){
                return $model->rate_per_hour.' Rs.';
            },
        ],
        [
            'attribute'=>'ta_da_per_day',
            'value'=>function($model){
                return $model->ta_da_per_day.' Rs.';
            },
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
            'attribute'=>'is_active',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_active',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select Status--',
                'class'=>'form-control'
            ]),
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Action',
            'template'=>'{view} {update}'
        ],
    ];

    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Vendor Round Trip Rate'),
            ['/vendor-management/vendor-round-trip-rate/create'],
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
