<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\sitePageManagement\models\SitePage */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-page-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute'=>'page_type',
            'filter' => Html::activeDropDownList($searchModel, 'page_type',[ 'Site Page' => 'Site Page', 'Seo Page' => 'Seo Page', ], [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        'title',
        'seo_title',
        //'page_content:ntext',
        // 'meta_key_words:ntext',
        // 'meta_descriptions:ntext',

        [
            'attribute'=>'is_active',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_active',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select--',
                'class'=>'form-control'
            ]),
        ],
        [
            'attribute'=>'create_at',
            'filterType'=>\kartik\grid\GridView::FILTER_DATE,
            'format'=>'datetime',
            'filterWidgetOptions'=>[
                'readonly' => true,
                'pluginOptions'=>[
                    'format'=>'yyyy-mm-dd',
                    'allowClear' => true,
                    'autoclose' => true,
                    'endDate'=>"+0d",
                ]
            ],
        ],

        [
            'attribute'=>'update_at',
            'filterType'=>\kartik\grid\GridView::FILTER_DATE,
            'format'=>'datetime',
            'filterWidgetOptions'=>[
                'readonly' => true,
                'pluginOptions'=>[
                    'format'=>'yyyy-mm-dd',
                    'allowClear' => true,
                    'autoclose' => true,
                    'endDate'=>"+0d",
                ]
            ],
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {delete}'
        ],
    ];

    $gridId='site-page-grid';
    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Site Page'),
            ['/site-page-management/site-page/create'],
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
