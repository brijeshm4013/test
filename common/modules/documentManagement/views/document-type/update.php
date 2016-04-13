<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DocumentType */

$this->params['breadcrumbs'][] = ['label' => 'Document Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->document_title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="document-type-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
