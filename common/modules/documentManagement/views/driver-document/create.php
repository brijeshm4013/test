<?php

use yii\helpers\Html;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model \common\modules\documentManagement\models\DriverDocument*/

$this->title = 'Upload Driver Document';
if(User::hasRole('vendor',false)){
    $this->params['breadcrumbs'][] = ['label' => 'My Drivers', 'url' => ['/vendor-profile-management/driver/index','id'=>$model->id]];
}
$this->params['breadcrumbs'][] = ['label' => 'Driver Documents', 'url' => ['index','DriverDocument[driver_id]'=>$model->driver_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-document-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
