<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\vendorManagement\models\VendorVehicle */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendor Vehicles';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="vendor-vehicle-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    $vendor=new \common\modules\vendorManagement\models\Vendor();
    $user=new \common\models\User();
    $vehicle=new \common\modules\vehicleManagement\models\Vehicle();
    $gridId='vendor-vehicles-grid';
    $vendorList=\common\modules\vendorManagement\models\Vendor::getVendorList();
    $vendorList=\yii\helpers\ArrayHelper::map($vendorList,'id','vendorName');
    $vehicleList=\common\modules\vehicleManagement\models\Vehicle::getVehicleList();
    $vehicleList=\yii\helpers\ArrayHelper::map($vehicleList,'id','vehicleName');

    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],

        [
            'attribute'=>'vendor_id',
            'value'=>'vendor.vendorName',
            'filterType'=>\kartik\grid\GridView::FILTER_SELECT2,
            'filter'=>$vendorList,
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                'options' => ['placeholder' => 'Select',],

            ],
        ],
        [
            'attribute'=>'vehicle_id',
            'value'=>'vehicle.vehicleName',
            'filterType'=>\kartik\grid\GridView::FILTER_SELECT2,
            'filter'=>$vehicleList,
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
                'options' => ['placeholder' => 'Select',],

            ],
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Action',
            'template'=>'{view} {update}'
        ],
    ];

    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Vendor Vehicle'),
            ['/vendor-management/vendor-vehicle/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),
    ];
    $exportMenuConfig=[
        'noExportColumns'=>[count($gridColumns)-1,count($gridColumns)-2],
    ];

    $fullExportMenu=\common\components\kartik\ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId,$exportMenuConfig);
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
