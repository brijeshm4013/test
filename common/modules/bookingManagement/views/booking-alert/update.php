<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BookingAlert */

$this->title = 'Update Booking Alert:'.$model->alert_title;
$this->params['breadcrumbs'][] = ['label' => 'Booking Alerts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->alert_title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-alert-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
