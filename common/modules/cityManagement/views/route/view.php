<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\cityManagement\models\base\Route */

$title='Route From: ' . ' ' . $model->sourceCity->name.' to '.$model->destinationCity->name;
$this->title = 'View '.$title;
$this->params['breadcrumbs'][] = ['label' => 'Routes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $title;
?>
<div class="route-view">

    <p>
        <?php
        echo \backend\modules\userManagement\components\GhostHtml::a(
            \backend\modules\userManagement\UserManagementModule::t('back', 'Update Route'),
        ['/city-management/route/update','id'=>$model->id],
        ['data-pjax'=>0,'class' => 'btn btn-primary']
        );
        ?>
        <?php
        echo \backend\modules\userManagement\components\GhostHtml::a(
        '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create New Route'),
        ['/city-management/route/create'],
        ['data-pjax'=>0,'class' => 'btn btn-success']
        );
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'source_city_id',
                'value'=>$model->sourceCity->name,
            ],
            [
                'attribute'=>'destination_city_id',
                'value'=>$model->destinationCity->name,
            ],
            'create_at:dateTime',
            'update_at:dateTime',
            'is_active:boolean',
        ],
    ]) ?>

</div>
