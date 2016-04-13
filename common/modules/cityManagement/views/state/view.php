<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\base\State */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?php
    echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute'=>'popular_city_1_id',
                'value'=>isset($model->popularCity1)? $model->popularCity1->name:null,
            ],

            [
                'attribute'=>'popular_city_2_id',
                'value'=>isset($model->popularCity2)? $model->popularCity2->name:null
            ],

            'is_active:boolean',
        ],
    ]) ?>

</div>
