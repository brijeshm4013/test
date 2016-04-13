<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-city-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'std_code') ?>

    <?php // echo $form->field($model, 'default_pincode') ?>

    <?php // echo $form->field($model, 'city_class_type') ?>

    <?php // echo $form->field($model, 'default_display') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
