<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\bookingManagement\models\BookingRouteRate */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booking Route Rates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-route-rate-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    $gridId='booking-route-rate-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute'=>'booking_type_id',
            'value'=>'bookingType.title',
        ],
        [
            'attribute'=>'route_id',
            'value'=>'route.routeName',
        ],
        [
            'attribute'=>'vehicle_category_id',
            'value'=>'vehicleCategory.name',
        ],
        [
            'attribute'=>'rate',
            'value'=>function($model){
                return $model->rate.' Rs.';
            },
        ],
        [
            'attribute'=>'commission_rate',
            'value'=>function($model){
                return $model->commission_rate.' Rs.';
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
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Booking Route Rate'),
            ['/booking-management/booking-route-rate/create'],
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
