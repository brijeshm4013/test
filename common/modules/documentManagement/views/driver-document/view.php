<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;
/* @var $this yii\web\View */
/* @var $model \common\modules\documentManagement\models\DriverDocument */

$this->title = 'Document View';
if(User::hasRole('vendor',false)){
    $this->params['breadcrumbs'][] = ['label' => 'My Drivers', 'url' => ['profile-management/driver/index','id'=>$model->driver_id]];
}
$this->params['breadcrumbs'][] = ['label' => 'Driver Documents', 'url' => ['index','DriverDocument[driver_id]'=>$model->driver_id]];

if(User::canRoute('/vendor-management/driver/view')){
    $this->params['breadcrumbs'][] = ['label' => $model->driver->name, 'url' => ['/vendor-management/driver/view','id'=>$model->driver_id]];
}elseif(User::hasRole('vendor',false)){
    $this->params['breadcrumbs'][] = ['label' => $model->driver->name, 'url' => ['/profile-management/driver/view','id'=>$model->driver_id]];
}

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-document-view">
   <p>
       <?= \backend\modules\userManagement\components\GhostHtml::a(
           '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Upload Driver Document'),
           ['/document-management/driver-document/create', 'DriverDocument[driver_id]'=>$model->driver->id],
           ['data-pjax'=>0,'class' => 'btn btn-success']
       ) ?>

       <?= \backend\modules\userManagement\components\GhostHtml::a(
           '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Delete'),
           ['/document-management/driver-document/delete', 'id'=>$model->id],
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
                'attribute' => 'driver_id',
                'value'=>$model->driver->name,

            ],
            [
                'attribute' => 'document_type_id',
                'value'=>$model->documentType->document_title,
            ],
            [
                'attribute' => 'file',
                'format' => 'html',
                'value' => Html::img('@web/'.\common\utils\ProjectUtils::DIR_DRIVER_DOCS.$model->file, ['width'=>'100']),
            ],
            'create_at:datetime',
            'update_at:datetime',
            'is_active:boolean',
        ],
    ]) ?>
</div>

