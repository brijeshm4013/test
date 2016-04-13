<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Vendor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vendors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'username',
                'label'=>'User Name',
                'value'=>$model->user->username,
            ],
            [
                'attribute'=>'email',
                'value'=>$model->user->email
            ],
            'name',
            'agency_name',
            'area',
            'address',
            'pincode',
            'is_approved',
            'create_at',
            'update_at',
            'is_active',
        ],
    ]) ?>

</div>


<div class="vendor-vehicle-index">
    <h1>Vendor Vehicles</h1>
    <?php
    $gridId='vendor-vehicles-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],

        [
            'label'=>'Vehicle Category',
            'value'=>'vehicle.vehicleModel.vehicleCategory.name',

        ],
        [
            'label'=>'Vehicle Model',
            'value'=>'vehicle.vehicleModel.model_name',

        ],
        [
            'label'=>'Vehicle Rc Number',
            'value'=>'vehicle.rc_number',
        ],

    ];


    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create Vendor'),
            ['/vehicle-management/vehicle/create','vendor_id'=>$model->id],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),
    ];
    $exportMenuConfig=[
        'noExportColumns'=>[count($gridColumns)-1],
    ];
    $dataProvider=new \yii\data\ArrayDataProvider(['allModels' =>$model->vendorVehicles]);
    $fullExportMenu=\common\components\kartik\ProjectExportMenu::defaultExportMenuConfig($dataProvider,$gridColumns,$gridId,$exportMenuConfig);
    echo $this->render('//layouts/common/_kartikGridView',[
        'gridId'=>$gridId,
        'dataProvider' => $dataProvider,
        'searchModel' => $model,
        'gridColumns' =>$gridColumns,
        'gridPanel'=>$gridPanel,
        'fullExportMenu'=>$fullExportMenu
    ]);

    ?>
</div>
