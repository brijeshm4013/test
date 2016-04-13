<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BookingRouteCities */

$this->title = 'Update Booking Route Cities: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Booking Route Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-route-cities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
