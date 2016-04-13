<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'booking_type_id')->textInput() ?>

    <?= $form->field($model, 'booking_status_id')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'vehicle_id')->textInput() ?>

    <?= $form->field($model, 'driver_id')->textInput() ?>

    <?= $form->field($model, 'coupon_id')->textInput() ?>

    <?= $form->field($model, 'customer_rate')->textInput() ?>

    <?= $form->field($model, 'vendor_rate')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'pickup_time')->textInput() ?>

    <?= $form->field($model, 'pickup_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'booking_remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'is_active')->textInput() ?>

    <?= $form->field($model, 'is_cancel_by_ops')->textInput() ?>

    <?= $form->field($model, 'is_cancel_by_cust')->textInput() ?>

    <?= $form->field($model, 'is_cancel_by_vendor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
