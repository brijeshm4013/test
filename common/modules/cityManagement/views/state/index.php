<?php

use yii\helpers\Html;
use backend\modules\userManagement\components\GhostHtml;
use backend\modules\userManagement\UserManagementModule;
use common\components\kartik\ProjectExportMenu;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\cityManagement\models\State */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'States';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $gridId='state-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        'name',
        [
            'attribute'=>'popular_city_1_id',
            'value'=>function($model){
                return isset($model->popularCity1)? $model->popularCity1->name:null;
            },
            'filter'=>false,
        ],
        [
            'attribute'=>'popular_city_2_id',
            'value'=>function($model){
                return isset($model->popularCity2)? $model->popularCity2->name:null;
            },
            'filter'=>false,
        ],

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
        'before'=>GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . UserManagementModule::t('back', 'Create'),
            ['/city-management/state/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),

    ];


    $fullExportMenu=ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId);

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
