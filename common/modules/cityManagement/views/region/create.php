<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\Region */

$this->title = 'Create Region';
$this->params['breadcrumbs'][] = ['label' => 'Region', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
