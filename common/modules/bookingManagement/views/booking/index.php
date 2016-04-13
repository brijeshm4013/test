<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\bookingManagement\models\Booking */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $gridId='booking-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute'=>'booking_type_id',
            'value'=>'bookingType.title'
        ],
        [
            'attribute'=>'start_date',
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
            'attribute'=>'end_date',
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
        'pickup_time',
        [
            'attribute'=>'customer_id',
            'value'=>'customer.name'
        ],
        'pickup_address',
        [
            'attribute'=>'vendor_id',
            'value'=>'vendor.vendorName',
        ],
        [
            'attribute'=>'vehicle_id',
            'value'=>'vehicle.vehicleName',
        ],
        [
            'attribute'=>'driver_id',
            'value'=>'driver.name',
        ],
        [
            'attribute'=>'booking_status_id',
            'value'=>'bookingStatus.title',
        ],
        'coupon_id',
        'customer_rate',
        'vendor_rate',
        'commission_rate',
        'booking_remarks:ntext',
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
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'is_cancel_by_ops',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_cancel_by_ops',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'is_cancel_by_customer',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_cancel_by_customer',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'is_cancel_by_vendor',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_cancel_by_vendor',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template'=>'{view}'
        ],
    ];

    $fullExportMenu=\common\components\kartik\ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId);
    echo $this->render('//layouts/common/_kartikGridView',[
        'gridId'=>$gridId,
        'dataProvider' => $dataProvider,
        'searchModel' => $searchModel,
        'gridColumns' =>$gridColumns,
        'fullExportMenu'=>$fullExportMenu
    ]);
    ?>


    ?>

</div>
