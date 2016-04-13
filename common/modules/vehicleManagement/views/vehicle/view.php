<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \common\modules\vehicleManagement\models\Vehicle */

$this->title = $model->vehicleModel->model_name.'-'.$model->rc_number;
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= \backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create'),
            ['/vehicle-management/vehicle/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        );
         ?>
        <?php
       echo $uploadDocuments= \backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Upload Vehicle Document'),
            ['/document-management/vehicle-document/create', 'VehicleDocument[vehicle_id]'=>$model->id],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        );
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'vehicle_model_id',
                'value'=>$model->vehicleModel->model_name
            ],
            'rc_number',
            'total_seats',
            'has_air_conditioning:boolean',
            'has_gps:boolean',
            'has_luggage_carrier:boolean',
            'has_lcd:boolean',
            'is_approved:boolean',
            'is_active:boolean',
            'create_at:datetime',
            'update_at:datetime',
        ],
    ]) ?>

</div>

<div class="driver-document">
    <h1>Vehicle Documents</h1>
    <?php
    $gridId='vehicle-document-grid';
    $gridColumns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute'=>'document_type_id',
            'value'=>'documentType.document_title',
        ],
        [
            'attribute' => 'file',
            'filter' => false,
            'format' => 'html',
            'value' => function($model) {
                return Html::img('@web/'.\common\utils\ProjectUtils::DIR_VEHICLE_DOCS.$model->file, ['width'=>'100']);
            },
        ]
    ];

    $dataProvider=new \yii\data\ArrayDataProvider(['allModels' =>$model->vehicleDocuments]);
    $gridPanel=[
        'before'=>$uploadDocuments,
    ];
    echo $this->render('//layouts/common/_kartikGridView',[
        'gridId'=>$gridId,
        'dataProvider' => $dataProvider,
        'searchModel' => $model,
        'gridColumns' =>$gridColumns,
        'gridPanel'=>$gridPanel,
        'fullExportMenu'=>false
    ]);

    ?>
</div>