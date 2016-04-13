<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\VendorRoundTripRate */

$this->title = 'Create Vendor Round Trip Rate';
$this->params['breadcrumbs'][] = ['label' => 'Vendor Round Trip Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-round-trip-rate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
