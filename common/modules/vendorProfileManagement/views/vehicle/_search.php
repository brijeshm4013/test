<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\vendorManagement\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vehicle_model_id') ?>

    <?= $form->field($model, 'rc_number') ?>

    <?= $form->field($model, 'total_seats') ?>

    <?= $form->field($model, 'has_air_conditioning') ?>

    <?php // echo $form->field($model, 'has_gps') ?>

    <?php // echo $form->field($model, 'has_luggage_carrier') ?>

    <?php // echo $form->field($model, 'has_lcd') ?>

    <?php // echo $form->field($model, 'is_approved') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
