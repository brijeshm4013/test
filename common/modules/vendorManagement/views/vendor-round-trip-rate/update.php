<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VendorRoundTripRate */

$this->title = 'Update Vendor Round Trip Rate: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vendor Round Trip Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vendor-round-trip-rate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
