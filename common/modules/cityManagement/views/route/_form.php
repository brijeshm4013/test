<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\modules\cityManagement\models\City;
/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\Route */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="route-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true
    ]); ?>

    <?php
    $cities=ArrayHelper::map(City::getAllActiveCities(),'id','name');

    echo $form->field($model, 'source_city_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => $cities,
        'attribute'=>'name',
        'language' => 'en',
        'options' => ['placeholder' => 'Select a Source City ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
   ?>

    <?php
    echo $form->field($model, 'destination_city_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => $cities,
        'attribute'=>'name',
        'language' => 'en',
        'options' => ['placeholder' => 'Select a Destination City ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>


    <?= $form->field($model, 'is_active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
