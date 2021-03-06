<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\VendorOneWayRate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-one-way-rate-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,
    ]); ?>
    <div class="col-lg-12">
        <div class="col-md-4">
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
        <div class="col-md-4">
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

        <div class="col-md-4">
                <?php
                $allRouteList=\common\modules\cityManagement\models\Route::getRouteList();
                $allRouteList=\yii\helpers\ArrayHelper::map($allRouteList,'id','routeName');
                echo $form->field($model, 'route_id')->widget(\kartik\widgets\Select2::classname(), [
                    'data' => $allRouteList,
                    'attribute'=>'route_id',
                    'language' => 'en',
                    'options' => [
                        'placeholder' => 'Select Route...',
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
        <div class="col-md-4">
            <?= $form->field($model, 'rate')->textInput() ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'is_active')->checkbox() ?>
        </div>
    </div>

    <div class="col-lg-12">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
