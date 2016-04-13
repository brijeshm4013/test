<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\VendorVehicle */

$this->title = 'Update Vendor Vehicle: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vendor Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>'Vendor:'. $model->vendor->name.' - Vehicle:'.$model->vehicle->rc_number, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vendor-vehicle-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
