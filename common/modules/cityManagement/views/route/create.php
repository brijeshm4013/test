<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\Route */

$this->title = 'Create Route';
$this->params['breadcrumbs'][] = ['label' => 'Routes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="route-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
