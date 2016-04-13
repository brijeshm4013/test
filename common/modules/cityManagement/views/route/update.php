<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\Route */


$title='Route From: ' . ' ' . $model->sourceCity->name.' to '.$model->destinationCity->name;
$this->title = 'Update '.$title;

$this->params['breadcrumbs'][] = ['label' => 'Routes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rout-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
