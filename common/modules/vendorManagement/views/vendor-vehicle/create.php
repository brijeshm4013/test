<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\VendorVehicle */

$this->title = 'Create Vendor Vehicle';
$this->params['breadcrumbs'][] = ['label' => 'Vendor Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-vehicle-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
