<?php

use yii\helpers\Html;
use common\modules\documentManagement\models\VehicleDocument;
use common\modules\documentManagement\models\DocumentType;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\documentManagement\models\VehicleDocument */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicle Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-document-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $vehicleDocumentType=DocumentType::getAllDocuments(DocumentType::DOCUMENT_TYPE_VEHICLE);
    $vehicleDocumentTypeList=\yii\helpers\ArrayHelper::map($vehicleDocumentType,'id','document_title');

    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute'=>'vehicle_id',
            'value'=>function(VehicleDocument $model){
                $vehicle=$model->vehicle;
                return $vehicle->vehicleModel->model_name.'-'.$vehicle->rc_number;
            },
            'filter' => false,
        ],

        [
            'attribute'=>'document_type_id',
            'value'=>'documentType.document_title',
            'filterType'=>\kartik\grid\GridView::FILTER_SELECT2,
            'filter'=>$vehicleDocumentTypeList,
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                'options' => ['placeholder' => 'Select a Source City ...',],

            ],

        ],
        [
            'attribute' => 'file',
            'filter' => false,
            'format' => 'html',
            'value' => function($model) {
                return Html::img('@web/'.\common\utils\ProjectUtils::DIR_VEHICLE_DOCS.$model->file, ['width'=>'100']);
            },
        ],
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

    $gridId='vehicle-document-grid';
    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Upload Vehicle Document'),
            ['/document-management/vehicle-document/create', 'VehicleDocument[vehicle_id]'=>$searchModel->vehicle->id],
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
