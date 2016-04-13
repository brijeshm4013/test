<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\vehicleManagement\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,

    ]);?>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?php
            $vehicleModels=common\modules\vehicleManagement\models\VehicleModel::getAllActVehicleModels();
            $vehicleModelsList=\yii\helpers\ArrayHelper::map($vehicleModels,'id','model_name');
            echo $form->field($model, 'vehicle_model_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $vehicleModelsList,
                'attribute'=>'name',
                'language' => 'en',
                'options' => ['placeholder' => 'Select a Vehicle Model...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'rc_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'total_seats')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'has_air_conditioning')->checkbox() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'has_gps')->checkbox() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'has_luggage_carrier')->checkbox() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'has_lcd')->checkbox() ?>
        </div>
        <?php
            if(!$model->isNewRecord && \backend\modules\userManagement\models\User::hasPermission('driverApprove') ):
        ?>
        <div class="col-md-4">
            <?= $form->field($model, 'is_approved')->checkbox() ?>
        </div
        ><? endif; ?>

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
