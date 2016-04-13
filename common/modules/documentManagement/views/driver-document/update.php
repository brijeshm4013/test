<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\modules\documentManagement\models\DriverDocument */

$this->title = 'Update Driver Document: ' . ' ' . $model->documentType->document_title;
$this->params['breadcrumbs'][] = ['label' => 'Driver Documents', 'url' => ['index','DriverDocument[driver_id]'=>$model->driver_id]];
$this->params['breadcrumbs'][] = ['label' => $model->documentType->document_title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="driver-document-update">
<div class="driver-document-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
