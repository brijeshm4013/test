<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \common\modules\bookingManagement\models\BookingRouteRate */

$this->title = 'Booking Type : '.$model->bookingType->title.' : Route : '.$model->route->routeName.' : Vehicle Type : '.$model->vehicleCategory->name.' : Rate : '.$model->rate.' Rs.';
$this->params['breadcrumbs'][] = ['label' => 'Booking Route Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-route-rate-view">

    <p>
        <?php
       echo  \backend\modules\userManagement\components\GhostHtml::a(
             \backend\modules\userManagement\UserManagementModule::t('back', 'Update Booking Route Rate'),
            ['/booking-management/booking-route-rate/create'],
            ['data-pjax'=>0,'class' => 'btn btn-primary']
        );?>

        <?php
        echo \backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Booking Route Rate'),
            ['/booking-management/booking-route-rate/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        );?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'booking_type_id',
                'value'=>$model->bookingType->title
            ],
            [
                'attribute'=>'route_id',
                'value'=>$model->route->routeName
            ],
            [
                'attribute'=>'vehicle_category_id',
                'value'=>$model->vehicleCategory->name
            ],
            [
                'attribute'=>'rate',
                'value'=>$model->rate.' Rs.'
            ],
            [
                'attribute'=>'commission_rate',
                'value'=>$model->commission_rate.' Rs.'
            ],
            'create_at:datetime',
            'update_at:datetime',
            'is_active:boolean',
        ],
    ]) ?>

</div>
