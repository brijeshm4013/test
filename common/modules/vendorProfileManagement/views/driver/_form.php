<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\Driver */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="driver-form">


    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'=>true,
    ]); ?>

    <div class="col-lg-12">
        <?php echo $form->errorSummary([$user,$model],['class'=>'required has-error']); ?>
    </div>

    <div class="col-lg-12">
        <h2><?= Html::encode('User Details') ?></h2>
    </div>

    <div class="col-lg-12">
        <div class="col-md-3">
            <?= $form->field($user, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($user, 'email')->textInput(['maxlength' => true]) ?>
        </div>

    </div>

    <?php if (!$user->isNewRecord ): ?>
        <div class="col-lg-12">
            <div class="col-md-4">
                <?php
                echo  \backend\modules\userManagement\components\GhostHtml::a(
                    \backend\modules\userManagement\UserManagementModule::t('back', 'Change Driver Password '),
                    ['/user-management/user/change-password','id'=>$user->id],
                    ['data-pjax'=>0,]
                );
                ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="col-lg-12">
        <h2><?= Html::encode('Driver Details') ?></h2>
    </div>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'address')->textarea(['maxlength' => true]) ?>
        </div>

    </div>

    <div class="col-lg-12">

        <div class="col-md-3">
            <?= $form->field($model, 'can_speak_english')->checkbox() ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
