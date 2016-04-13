<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VehicleCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-category-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,

    ]); ?>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>

    </div>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'is_active')->checkbox() ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
