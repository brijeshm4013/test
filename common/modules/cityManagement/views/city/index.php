<?php

use backend\modules\userManagement\components\GhostHtml;
use backend\modules\userManagement\UserManagementModule;
use common\components\kartik\ProjectExportMenu;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\cityManagement\models\City */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $gridId='master-city-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],

        'name',
        [
            'attribute'=>'state_id',
            'value'=>function($model){
                return isset($model->state)? $model->state->name: null ;
            }

        ],
        'std_code',
        'default_pincode',
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
            ['/city-management/city/create'],
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
