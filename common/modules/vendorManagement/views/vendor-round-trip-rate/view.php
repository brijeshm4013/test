<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\VendorRoundTripRate */

$this->title = $model->vendor->vendorName.' - Vehicle Category: '.$model->vehicleCategory->name;
$this->params['breadcrumbs'][] = ['label' => 'Vendor Round Trip Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-round-trip-rate-view">
    <p>
        <?php
        echo \backend\modules\userManagement\components\GhostHtml::a(
            \backend\modules\userManagement\UserManagementModule::t('back', 'Update Vendor Round Trip Rate'),
            ['/vendor-management/vendor-round-trip-rate/update','id'=>$model->id],
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
                'attribute'=>'min_km',
                'value'=>$model->min_km.' Km.'
            ],
            [
                'attribute'=>'rate_per_km',
                'value'=>$model->rate_per_km.' Rs.'
            ],
            [
                'attribute'=>'rate_per_hour',
                'value'=>$model->rate_per_hour.' Rs.'
            ],
            [
                'attribute'=>'ta_da_per_day',
                'value'=>$model->ta_da_per_day.' Rs.'
            ],
            'create_at:datetime',
            'update_at:datetime',
            'is_active:boolean',
        ],
    ]) ?>

</div>
