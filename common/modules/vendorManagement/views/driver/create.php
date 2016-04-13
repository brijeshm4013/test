<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Driver */

$this->title = 'Create Driver';
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user'=>$user
    ]) ?>

</div>
