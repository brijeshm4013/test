<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\modules\documentManagement\models\DocumentType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="document-type-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,

    ]);?>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'document_type')->dropDownList(\common\modules\documentManagement\models\DocumentType::getAllDocumentType(), ['prompt' => 'Select Document Tpe']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'document_title')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
     </div>
    <?php ActiveForm::end(); ?>

</div>
