<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\vendorManagement\models\VendorDriver */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendor Drivers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-driver-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vendor Driver', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vendor_id',
            'driver_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
