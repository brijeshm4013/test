<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\modules\bookingManagement\models\BookingRouteRate */

$this->title = 'Booking Type : '.$model->bookingType->title.' : Route : '.$model->route->routeName.' : Vehicle Type : '.$model->vehicleCategory->name.' : Rate : '.$model->rate.' Rs.';
$this->params['breadcrumbs'][] = ['label' => 'Booking Route Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title , 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-route-rate-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
