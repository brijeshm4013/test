<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\Region */

$this->title = 'Update Region: ' . ' ' . $model->region_name;
$this->params['breadcrumbs'][] = ['label' => 'Region', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->region_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="region-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
