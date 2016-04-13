<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model \common\modules\documentManagement\models\VehicleDocument */

$this->title = 'Upload Vehicle Document';
$this->params['breadcrumbs'][] = ['label' => 'Vehicle Documents', 'url' => ['index','VehicleDocument[vehicle_id]'=>$model->vehicle_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-document-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
