<?php

use yii\helpers\Html;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Driver */

$this->title = 'Create Driver';

if(User::hasRole('vendor',false)){
    $this->params['breadcrumbs'][] = ['label' => 'My Drivers', 'url' => ['/vendor-profile-management/driver/index','id'=>$model->id]];
}

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user'=>$user
    ]) ?>

</div>
