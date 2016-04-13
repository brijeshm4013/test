<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\vendorManagement\models\VendorRoundTripRate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-round-trip-rate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?= $form->field($model, 'vehicle_category_id') ?>

    <?= $form->field($model, 'min_km') ?>

    <?= $form->field($model, 'rate_per_km') ?>

    <?php // echo $form->field($model, 'rate_per_hour') ?>

    <?php // echo $form->field($model, 'ta_da_per_day') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
