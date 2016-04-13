<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\Region */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="region-state-city-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'region_name') ?>

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

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
