<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\sitePageManagement\models\SitePage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'page_type') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'seo_title') ?>

    <?= $form->field($model, 'page_content') ?>

    <?php // echo $form->field($model, 'meta_key_words') ?>

    <?php // echo $form->field($model, 'meta_descriptions') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
