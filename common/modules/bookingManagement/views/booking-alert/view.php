<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BookingAlert */

$this->title = $model->alert_title;
$this->params['breadcrumbs'][] = ['label' => 'Booking Alerts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-alert-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'alert_title',
            'alert_msg',
            'alert_time_in_minutes',
            'create_at:datetime',
            'update_at:datetime',
            'is_active:boolean',
        ],
    ]) ?>

</div>
