<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\cityManagement\models\Region */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Region';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-state-city-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $gridId='region-state-city-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],

        'region_name',
        'state.name',
        'city.name',
        'create_at:datetime',
        'update_at:datetime',
        [
            'attribute'=>'is_active',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_active',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select Status--',
                'class'=>'form-control'
            ]),
        ],

        [
            'class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {update}'
        ],
    ];

    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\UserManagement\UserManagementModule::t('back', 'Create'),
            ['/city-management/region/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),
    ];

    $fullExportMenu=\common\components\kartik\ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId);
    echo $this->render('//layouts/common/_kartikGridView',[
        'gridId'=>$gridId,
        'dataProvider' => $dataProvider,
        'searchModel' => $searchModel,
        'gridColumns' =>$gridColumns,
        'gridPanel'=>$gridPanel,
        'fullExportMenu'=>$fullExportMenu
    ]);
    ?>

</div>
