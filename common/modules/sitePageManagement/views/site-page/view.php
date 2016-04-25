<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SitePage */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Site Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'page_type',
            'title',
            'seo_title',
            'page_content:html',
            'meta_key_words:html',
            'meta_key_phrase:html',
            'meta_descriptions:html',
            'is_active:boolean',
            'create_at:datetime',
            'update_at:datetime',
        ],
    ]) ?>

</div>
