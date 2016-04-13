<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\modules\cityManagement\models\City;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\State */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="state-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    //$form->field($model, 'state_id')->textInput(['maxlength' => true])
    // With a model and without ActiveForm
    $cities=ArrayHelper::map(City::find(['is_active'=>1])->asArray()->all(),'id','name');

    echo $form->field($model, 'popular_city_1_id')->widget(Select2::classname(), [
        'data' => $cities,
        'attribute'=>'name',
        'language' => 'en',
        'options' => ['placeholder' => 'Select a city ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>


    <?php
    echo $form->field($model, 'popular_city_2_id')->widget(Select2::classname(), [
        'data' => $cities,
        'attribute'=>'name',
        'language' => 'en',
        'options' => ['placeholder' => 'Select a city ...'],
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
