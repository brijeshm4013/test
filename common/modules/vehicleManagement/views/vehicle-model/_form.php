<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VehicleModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-model-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?php
            $vehicleCategories=\common\modules\vehicleManagement\models\VehicleCategory::getVehicleCategoryList();
            $vehicleCategoriesList=\yii\helpers\ArrayHelper::map($vehicleCategories,'id','name');

            echo $form->field($model, 'vehicle_category_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $vehicleCategoriesList,
                'attribute'=>'name',
                'language' => 'en',
                'options' => ['placeholder' => 'Select a Vehicle Category...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'model_name')->textInput(['maxlength' => true]) ?>
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
