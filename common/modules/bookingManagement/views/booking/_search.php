<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\bookingManagement\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'booking_type_id') ?>

    <?= $form->field($model, 'booking_status_id') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?php // echo $form->field($model, 'vehicle_id') ?>

    <?php // echo $form->field($model, 'driver_id') ?>

    <?php // echo $form->field($model, 'coupon_id') ?>

    <?php // echo $form->field($model, 'customer_rate') ?>

    <?php // echo $form->field($model, 'vendor_rate') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'pickup_time') ?>

    <?php // echo $form->field($model, 'pickup_address') ?>

    <?php // echo $form->field($model, 'booking_remarks') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'is_cancel_by_ops') ?>

    <?php // echo $form->field($model, 'is_cancel_by_cust') ?>

    <?php // echo $form->field($model, 'is_cancel_by_vendor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
