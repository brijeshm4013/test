<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\Region */

$this->title = $model->region_name;
$this->params['breadcrumbs'][] = ['label' => 'Region', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'region_name',
            [
                'attribute'=>'state',
                'value'=>isset($model->state)? $model->state->name:null

            ],
            [
                'attribute'=>'city',
                'value'=>isset($model->city)? $model->city->name:null

            ],
            'create_at:datetime',
            'update_at:datetime',
            'is_active:boolean'
        ],
    ]) ?>

</div>
