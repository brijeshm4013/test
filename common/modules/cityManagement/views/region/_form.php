<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\Region */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="region-state-city-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true
    ]); ?>
    <div class="col-lg-12">

        <div class="col-lg-4">
            <?= $form->field($model, 'region_name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-4">
            <?php
            $states=\yii\helpers\ArrayHelper::map(\common\modules\cityManagement\models\State::getAllActiveStates(),'id','name');
            echo $form->field($model, 'state_id')->widget(\kartik\widgets\Select2::classname(), [
                 'data' => $states,
                 'attribute'=>'name',
                 'language' => 'en',
                 'options' => ['placeholder' => 'Select a State ...'],
                 'pluginOptions' => [
                     'allowClear' => true
                 ],
             ]);
            ?>
        </div>
        <div class="col-lg-4">
            <?php
            $cities=\yii\helpers\ArrayHelper::map(\common\modules\cityManagement\models\City::getAllActiveCities(),'id','name');

            echo $form->field($model, 'city_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $cities,
                'attribute'=>'name',
                'language' => 'en',
                'options' => ['placeholder' => 'Select a City ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);

            ?>
        </div>

        <div class="col-lg-12">
            <div class="col-md-4">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
