<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Vendor */

$this->title = 'My Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-view">

   <p>
       <?php
       echo  \backend\modules\userManagement\components\GhostHtml::a(
           \backend\modules\userManagement\UserManagementModule::t('back', 'Update'),
           ['/vendor-profile-management/vendor/update'],
           ['data-pjax'=>0,'class' => 'btn btn-primary']
       );?>
   </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'username',
                'label'=>'User Name',
                'value'=>$model->user->username,
            ],
            [
                'attribute'=>'email',
                'value'=>$model->user->email,
            ],
            'name',
            'agency_name',

            'area',
            'address',
            'pincode',
            [
                'attribute'=>'create_at',
                'label'=>'Profile Created At',
                'format'=>'datetime'
            ],
            [
                'attribute'=>'update_at',
                'label'=>'Profile Update At',
                'format'=>'datetime'
            ],

        ],
    ]) ?>
</div>


<!--<div class="vendor-vehicle-index">-->
<!--    <h1>Vendor Vehicles</h1>-->
<!--    --><?php
//    $gridId='vendor-vehicles-grid';
//    $gridColumns=[
//        ['class' => 'yii\grid\SerialColumn'],
//
//        [
//            'label'=>'Vehicle Category',
//            'value'=>'vehicle.vehicleModel.vehicleCategory.name',
//
//        ],
//        [
//            'label'=>'Vehicle Model',
//            'value'=>'vehicle.vehicleModel.model_name',
//
//        ],
//        [
//            'label'=>'Vehicle Rc Number',
//            'value'=>'vehicle.rc_number',
//        ],
//
//    ];
//
//
//    $gridPanel=[
//        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
//            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Vendor'),
//            ['/vehicle-management/vehicle/create','vendor_id'=>$model->id],
//            ['data-pjax'=>0,'class' => 'btn btn-success']
//        ),
//    ];
//    $exportMenuConfig=[
//        'noExportColumns'=>[count($gridColumns)-1],
//    ];
//    $dataProvider=new \yii\data\ArrayDataProvider(['allModels' =>$model->vendorVehicles]);
//    $fullExportMenu=\common\components\kartik\ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId,$exportMenuConfig);
//    echo $this->render('//layouts/common/_kartikGridView',[
//        'gridId'=>$gridId,
//        'dataProvider' => $dataProvider,
//        'searchModel' => $model,
//        'gridColumns' =>$gridColumns,
//        'gridPanel'=>$gridPanel,
//        'fullExportMenu'=>$fullExportMenu
//    ]);
//
//    ?>
<!--</div>-->
