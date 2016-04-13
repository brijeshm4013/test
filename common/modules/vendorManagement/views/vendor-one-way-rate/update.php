<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VendorOneWayRate */


$this->params['breadcrumbs'][] = ['label' => 'Vendor One Way Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>$model->vendor->vendorName.' - Vendor One Way Rate:'.$model->rate
, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vendor-one-way-rate-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
