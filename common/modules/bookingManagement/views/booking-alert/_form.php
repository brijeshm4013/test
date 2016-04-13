<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BookingAlert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-alert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alert_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alert_time_in_minutes')->textInput() ?>

    <?= $form->field($model, 'alert_msg')->textarea() ?>

    <?= $form->field($model, 'is_active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
