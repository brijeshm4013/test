<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\VendorRoundTripRate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-round-trip-rate-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,
    ]); ?>
    <div class="col-lg-12">
        <div class="col-md-6">
            <?php
            $allVendorList=\common\modules\vendorManagement\models\Vendor::getVendorList();
            $allVendorList=\yii\helpers\ArrayHelper::map($allVendorList,'id','vendorName');
            echo $form->field($model, 'vendor_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $allVendorList,
                'language' => 'en',
                'options' => ['placeholder' => 'Select Vendor...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
        <div class="col-md-6">
            <?php
            $allVehicleCategoryList=\common\modules\vehicleManagement\models\VehicleCategory::getVehicleCategoryList();
            $allVehicleCategoryList=\yii\helpers\ArrayHelper::map($allVehicleCategoryList,'id','name');
            echo $form->field($model, 'vehicle_category_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $allVehicleCategoryList,
                'attribute'=>'vehicle_category_id',
                'language' => 'en',
                'options' => [
                    'placeholder' => 'Select Vehicle Category...',
                    'multiple' => false
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]);
            ?>
        </div>

    </div>
    <div class="col-lg-12">
        <div class="col-md-6">
            <?= $form->field($model, 'min_km')->textInput() ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'rate_per_km')->textInput() ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-6">
            <?= $form->field($model, 'rate_per_hour')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'ta_da_per_day')->textInput() ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-6">
            <?= $form->field($model, 'driver_night_charges')->textInput() ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-6">
            <?= $form->field($model, 'is_active')->checkbox() ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-md-6">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
