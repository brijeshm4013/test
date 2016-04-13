<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use common\modules\cityManagement\models\State;
/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-city-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    //$form->field($model, 'state_id')->textInput(['maxlength' => true])
    // With a model and without ActiveForm
    $states=ArrayHelper::map(State::find()->asArray()->all(),'id','name');

    echo $form->field($model, 'state_id')->widget(Select2::classname(), [
        'data' => $states,
        'attribute'=>'name',
        'language' => 'en',
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'std_code')->textInput() ?>

    <?= $form->field($model, 'default_pincode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
