<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\modules\sitePageManagement\models\SitePage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-page-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,

    ]); ?>

    <div class="col-lg-12">
        <div class="col-md-12">
            <?php echo $form->errorSummary([$model],['class'=>'required has-error']); ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'page_type')->dropDownList([ 'Site Page' => 'Site Page', 'Seo Page' => 'Seo Page', ], ['prompt' => '--Select--']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'title')->textInput([
                'maxlength' => true,
                'onblur'=>'createSeoTitle(this)'
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true,'readonly'=>true]) ?>
        </div>

    </div>

    <div class="col-lg-12">
        <div class="col-md-12">
            <?= $form->field($model, 'page_content')->widget(\dosamigos\ckeditor\CKEditor::className(), [
                'options' => [
                    'rows' => 3,
                ],
                'clientOptions'=>[
                    'height'=>'200px',
                ]
            ]) ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-12">
            <?= $form->field($model, 'meta_key_words')->widget(\dosamigos\ckeditor\CKEditor::className(), [
                'options' => [
                    'rows' => 3
                ],
                'clientOptions'=>[
                    'height'=>'200px',
                ]
            ]) ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-12">
            <?= $form->field($model, 'meta_descriptions')->widget(\dosamigos\ckeditor\CKEditor::className(), [
                'options' => [
                    'rows' => 3,
                ],
                'clientOptions'=>[
                    'height'=>'200px',
                ]
            ]) ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-3">
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

<script>

    function createSeoTitle(obj){
        var title = $(obj).val();
        title=title.replace(/  +/g, ' ');
        $(obj).val(title);
        var titleArr=title.split(" ");
        var seoTitleArr=[];
        $(titleArr).each(function(k,v){
            seoTitleArr.push(v.toLowerCase());
        });
        var seoTitle=seoTitleArr.join("-");

        $("#sitepage-seo_title").val(seoTitle);
    }

</script>

