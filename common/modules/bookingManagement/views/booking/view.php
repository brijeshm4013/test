<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Booking */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'customer_id',
            'booking_type_id',
            'booking_status_id',
            'vendor_id',
            'vehicle_id',
            'driver_id',
            'coupon_id',
            'customer_rate',
            'vendor_rate',
            'start_date',
            'end_date',
            'pickup_time',
            'pickup_address',
            'booking_remarks:ntext',
            'create_at',
            'update_at',
            'is_active',
            'is_cancel_by_ops',
            'is_cancel_by_cust',
            'is_cancel_by_vendor',
        ],
    ]) ?>

</div>
