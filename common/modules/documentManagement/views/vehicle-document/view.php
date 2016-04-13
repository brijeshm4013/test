<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \common\modules\documentManagement\models\VehicleDocument */

$this->title = $model->vehicle->rc_number.':'.$model->documentType->document_title;
$this->params['breadcrumbs'][] = ['label' => 'Vehicle Documents', 'url' => ['index','VehicleDocument[vehicle_id]'=>$model->vehicle_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-document-view">
   <p>
       <?= \backend\modules\userManagement\components\GhostHtml::a(
           '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Upload Vehicle Document'),
           ['/document-management/vehicle-document/create', 'VehicleDocument[vehicle_id]'=>$model->vehicle->id],
           ['data-pjax'=>0,'class' => 'btn btn-success']
       ) ?>

       <?= \backend\modules\userManagement\components\GhostHtml::a(
           '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Delete'),
           ['/document-management/vehicle-document/delete', 'id'=>$model->id],
           [
               'data-pjax'=>0,
               'class' => 'btn btn-danger',
               'data' => [
                   'confirm' => 'Are you sure you want to delete this item?',
                   'method' => 'post',
               ],
           ]
       ) ?>


   </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'vehicle_id',
                'value'=>$model->vehicle->rc_number,

            ],
            [
                'attribute' => 'document_type_id',
                'value'=>$model->documentType->document_title,
            ],
            [
                'attribute' => 'file',
                'format' => 'html',
                'value' => Html::img('@web/'.\common\utils\ProjectUtils::DIR_VEHICLE_DOCS.$model->file, ['width'=>'100']),
            ],
            'create_at:datetime',
            'update_at:datetime',
            'is_active:boolean',
        ],
    ]) ?>

</div>
