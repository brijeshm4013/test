<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\VendorVehicle */
/* @var $form yii\widgets\ActiveForm */

//Ajax for autofill
//                    'ajax' => [
//                        'url' => \yii\helpers\Url::to(['vendor-management/vendor/vendor-list']),
//                        'dataType' => 'json',
//                        'data' => new \yii\web\JsExpression('function(params) { return {q:params.term}; }')
//                    ],
//                    'escapeMarkup' => new \yii\web\JsExpression('function (markup) { return markup; }'),
//                    'templateResult' => new \yii\web\JsExpression('function(city) { return city.text; }'),
//                    'templateSelection' => new \yii\web\JsExpression('function (city) { return city.text; }'),

?>

<div class="vendor-vehicle-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,
    ]); ?>

    <div class="col-lg-12">
        <div class="col-md-6">
            <?php
            $vendorList=\common\modules\vendorManagement\models\Vendor::getVendorList();
            $vendorList=\yii\helpers\ArrayHelper::map($vendorList,'id','vendorName');
            echo $form->field($model, 'vendor_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $vendorList,
                'language' => 'en',
                'options' => [
                    'placeholder' => 'Select Vendor...',
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
            <?php
            $vehicleList=\common\modules\vehicleManagement\models\Vehicle::getVehicleList();
            $vehicleList=\yii\helpers\ArrayHelper::map($vehicleList,'id','vehicleName');
            echo $form->field($model, 'vehicle_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $vehicleList,
                'language' => 'en',
                'options' => [
                    'placeholder' => 'Select Vehicle...',
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
            <?= $form->field($model, 'is_available')->checkbox() ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-md-3">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
