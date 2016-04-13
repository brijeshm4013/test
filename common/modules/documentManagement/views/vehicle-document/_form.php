<?php

use common\modules\documentManagement\models\DocumentType;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\modules\documentManagement\models\VehicleDocument */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-document-form">

    <?php $form = ActiveForm::begin([
            'options' => ['enctype'=>'multipart/form-data'],
        ]
    ); ?>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?php
            $vehicleDocumentType=DocumentType::getAllDocuments(DocumentType::DOCUMENT_TYPE_VEHICLE);
            $vehicleDocumentTypeList=\yii\helpers\ArrayHelper::map($vehicleDocumentType,'id','document_title');
            echo $form->field($model, 'document_type_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $vehicleDocumentTypeList,
                'attribute'=>'name',
                'language' => 'en',
                'options' => ['placeholder' => 'Select Vehicle Document...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'file')->fileInput(['maxlength' => true]) ?>
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
