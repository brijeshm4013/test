<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BookingRouteRate */

$this->title = 'Create Booking Route Rate';
$this->params['breadcrumbs'][] = ['label' => 'Booking Route Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-route-rate-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
