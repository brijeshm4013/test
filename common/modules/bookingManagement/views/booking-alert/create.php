<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BookingAlert */

$this->title = 'Create Booking Alert';
$this->params['breadcrumbs'][] = ['label' => 'Booking Alerts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-alert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
