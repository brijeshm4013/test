<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\modules\documentManagement\models\VehicleDocument */

$this->title = 'Update Vehicle Document: ' . ' ' . $model->documentType->document_title;
$this->params['breadcrumbs'][] = ['label' => 'Vehicle Documents', 'url' => ['index','VehicleDocument[vehicle_id]'=>$model->vehicle_id]];
$this->params['breadcrumbs'][] = ['label' => $model->documentType->document_title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicle-document-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
