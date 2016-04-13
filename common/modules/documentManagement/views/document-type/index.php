<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\documentManagement\models\DocumentType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Document Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-type-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php

    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        'document_type',
        'document_title',
        [
            'class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {update}'
        ],
    ];

    $gridId='document-type-grid';
    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Document Type'),
            ['/document-management/document-type/create'],
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
