<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BookingRouteCities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-route-cities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'booking_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_city_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destination_city_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'is_active')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
