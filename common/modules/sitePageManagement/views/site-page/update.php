<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SitePage */

$this->title = 'Update Site Page: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Site Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-page-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
