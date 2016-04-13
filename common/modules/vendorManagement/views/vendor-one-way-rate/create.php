<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\VendorOneWayRate */

$this->title = 'Create Vendor One Way Rate';
$this->params['breadcrumbs'][] = ['label' => 'Vendor One Way Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-one-way-rate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
