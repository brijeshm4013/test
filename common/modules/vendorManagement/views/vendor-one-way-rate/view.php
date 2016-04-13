<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\VendorOneWayRate */

$this->title = $model->vendor->vendorName.' - Vendor One Way Rate:'.$model->rate;

$this->params['breadcrumbs'][] = ['label' => 'Vendor One Way Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-one-way-rate-view">
    <p>
        <?php
        echo \backend\modules\userManagement\components\GhostHtml::a(
             \backend\modules\userManagement\UserManagementModule::t('back', 'Update Vendor One Way Rate'),
            ['/vendor-management/vendor-one-way-rate/update','id'=>$model->id],
            ['data-pjax'=>0,'class' => 'btn btn-primary']
        );
        ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'vendor_id',
                'value'=>$model->vendor->vendorName
            ],
            [
                'attribute'=>'vehicle_category_id',
                'value'=>$model->vehicleCategory->name
            ],
            [
                'attribute'=>'route_id',
                'value'=>$model->route->routeName
            ],
            'rate',
            'create_at:datetime',
            'update_at:datetime',
            'is_active:boolean',
        ],
    ]) ?>

</div>
