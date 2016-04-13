<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\bookingManagement\models\BookingRouteCities */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booking Route Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-route-cities-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Booking Route Cities', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'booking_id',
            'source_city_id',
            'destination_city_id',
            'create_at',
            // 'update_at',
            // 'is_active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
