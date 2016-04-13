<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BookingRouteCities */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Booking Route Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-route-cities-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'booking_id',
            'source_city_id',
            'destination_city_id',
            'create_at',
            'update_at',
            'is_active',
        ],
    ]) ?>

</div>
