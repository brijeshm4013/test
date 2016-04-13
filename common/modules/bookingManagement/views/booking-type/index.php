<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\bookingManagement\models\BookingType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booking Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?php

    $gridId='booking-alert-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        'title',
        'description',
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
            'attribute'=>'is_active',
            'format'=>'boolean',
            'filter' => Html::activeDropDownList($searchModel, 'is_active',\common\utils\ProjectUtils::getYesNoList(), [
                'prompt'=>'--Select Status--',
                'class'=>'form-control'
            ]),
        ],

        [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Action',
            'template'=>'{view} {update}'
        ],
    ];

    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create'),
            ['/booking-management/booking-type/create'],
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



//
//    GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
//            'title',
//            'description',
//            'create_at',
//            'update_at',
//            // 'is_active',
//
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]); ?>

</div>
