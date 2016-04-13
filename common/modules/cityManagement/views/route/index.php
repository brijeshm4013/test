<?php

use backend\modules\userManagement\components\GhostHtml;
use backend\modules\userManagement\UserManagementModule;
use common\modules\cityManagement\models\City;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\cityManagement\models\Route */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Routes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="route-index">
    <?php
    $gridId='route-grid';
    $gridPanel=[

        'before'=>GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . UserManagementModule::t('back', 'Create New Route'),
            ['/city-management/route/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),
    ];

    $cities=ArrayHelper::map(City::getAllActiveCities(),'id','name');
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],

        [
            'attribute'=>'source_city_id',
            'value'=>'sourceCity.name',
            'filterType'=>\kartik\grid\GridView::FILTER_SELECT2,
            'filter'=>$cities,
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                'options' => ['placeholder' => 'Select a Source City ...',],

            ],

        ],
        [
            'attribute'=>'destination_city_id',
            'value'=>'destinationCity.name',
            'filterType'=>\kartik\grid\GridView::FILTER_SELECT2,
            'filter'=>$cities,
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                'options' => ['placeholder' => 'Select a Destination City ...',],

            ],

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

    $sort=$dataProvider->getSort();
    $sort->attributes=array_merge($sort->attributes,
        [
            'source_city_id'=>[
                'asc' => ['sourceCity.name' => SORT_ASC, 'sourceCity.name' => SORT_ASC],
                'desc' => ['sourceCity.name' => SORT_DESC, 'sourceCity.name' => SORT_DESC],
                'default' => SORT_ASC
            ],
            'destination_city_id'=>[
                'asc' => ['destinationCity.name' => SORT_ASC, 'destinationCity.name' => SORT_ASC],
                'desc' => ['destinationCity.name' => SORT_DESC, 'destinationCity.name' => SORT_DESC],
                'default' => SORT_ASC
            ],
        ]);

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
