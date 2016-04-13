<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\VendorVehicle */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vendor Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>'Vendor:'. $model->vendor->name.' - Vehicle:'.$model->vehicle->rc_number, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="vendor-vehicle-view">
    <p>
        <?php echo  \backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Update'),
            ['/vendor-management/vendor-vehicle/update','id'=>$model->id],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        );
        ?>
       <?php echo  \backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Delete'),
            ['/vendor-management/vendor-vehicle/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        );
        ?>
        <?php echo  \backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Delete'),
            ['/vendor-management/vendor-vehicle/delete','id'=>$model->id],
            [
                'data-pjax'=>0,'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]
        );
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'vendor_id',
                'value'=>$model->vendor->vendorName,
            ],
            [
                'attribute'=>'vehicle_id',
                'value'=>$model->vehicle->vehicleName,
            ],
            'is_available:boolean',
        ],
    ]) ?>

</div>
