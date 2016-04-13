<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\VendorDriver */

$this->title = 'Create Vendor Driver';
$this->params['breadcrumbs'][] = ['label' => 'Vendor Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-driver-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
