<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\modules\bookingManagement\models\BookingRouteRate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-route-rate-form">
    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,
    ]); ?>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?php
            $allBookingTypeList=\common\modules\bookingManagement\models\BookingType::getBookingTypeList();
            $allBookingTypeList=\yii\helpers\ArrayHelper::map($allBookingTypeList,'id','title');
            echo $form->field($model, 'booking_type_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $allBookingTypeList,
                'attribute'=>'booking_type_id',
                'language' => 'en',
                'options' => [
                    'placeholder' => 'Select Booking Type...',
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
    </div>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'rate')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'commission_rate')->textInput() ?>
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
