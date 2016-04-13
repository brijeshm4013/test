<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BookingRouteCities */

$this->title = 'Create Booking Route Cities';
$this->params['breadcrumbs'][] = ['label' => 'Booking Route Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-route-cities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
