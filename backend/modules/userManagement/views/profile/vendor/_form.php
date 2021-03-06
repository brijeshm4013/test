<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\vendorManagement\models\Vendor */
/* @var $user  common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-form">

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

        <?php if ($user->isNewRecord ): ?>
        <div class="col-md-3">
            <?= $form->field($user, 'password')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($user, 'repeat_password')->textInput(['maxlength' => true]) ?>
        </div>
        <?php endif; ?>
    </div>

    <?php if (!$user->isNewRecord ): ?>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?php
            echo  \backend\modules\userManagement\components\GhostHtml::a(
                \backend\modules\userManagement\UserManagementModule::t('back', 'Change Vendor Password '),
                ['/user-management/user/change-password','id'=>$user->id],
                ['data-pjax'=>0,]
            );
            ?>
        </div>
    </div>
    <?php endif; ?>

    <div class="col-lg-12">
        <h2><?= Html::encode('Vendor Details') ?></h2>
    </div>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?php
            $allRegions=\yii\helpers\ArrayHelper::map(\common\modules\cityManagement\models\Region::getAllRegions(),'id','region_name');
            //For Update model to show selected vendor regions.
            $model->vendor_regions=\yii\helpers\ArrayHelper::map($model->getRegions()->all(),'id','id');
            echo $form->field($model, 'vendor_regions')->widget(\kartik\widgets\Select2::classname(), [
                'data' => $allRegions,
                'attribute'=>'vendor_regions',
                'language' => 'en',
                'options' => [
                    'placeholder' => 'Select one or more Region ...',
                    'multiple' => true
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]);

            ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'agency_name')->textInput(['maxlength' => true]) ?>
        </div>

    </div>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'address')->textarea(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
        <?= $form->field($model, 'pincode')->textInput(['maxlength' => 6]) ?>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-md-3">
            <?= $form->field($model, 'is_approved')->checkbox() ?>
        </div>
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

    <div class="col-lg-12 margin-top">&nbsp;</div>
</div>
