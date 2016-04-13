<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\City */

$this->title = 'Create Master City';
$this->params['breadcrumbs'][] = ['label' => 'Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
