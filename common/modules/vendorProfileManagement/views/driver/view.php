<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;
/* @var $this yii\web\View */
/* @var $model \common\modules\vendorManagement\models\Driver */

$this->title = $model->name;
if(User::hasRole('vendor',false)){
    $this->params['breadcrumbs'][] = ['label' => 'My Drivers', 'url' => ['/vendor-profile-management/driver/index','id'=>$model->id]];
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= \backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Create'),
            ['/vendor-management/vendor/create'],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'user_id',
                'value'=>$model->user->username,
                'label'=>'Phone No.'
            ],
            'name',
            'address',
            'can_speak_english:boolean',
            'is_approved:boolean',
            'is_active:boolean',
            'create_at:datetime',
            'update_at:datetime',

        ],
    ]) ?>

</div>

<div class="driver-document">
    <h1>Driver Documents</h1>
    <?php
    $gridId='driver-document-grid';
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
                return Html::img('@web/'.\common\utils\ProjectUtils::DIR_DRIVER_DOCS.$model->file, ['width'=>'100']);
            },
        ]
    ];

    $dataProvider=new \yii\data\ArrayDataProvider(['allModels' =>$model->driverDocuments]);
    $gridPanel=[
        'before'=>\backend\modules\userManagement\components\GhostHtml::a(
            '<span class="glyphicon glyphicon-plus-sign"></span> ' . \backend\modules\userManagement\UserManagementModule::t('back', 'Upload Driver Document'),
            ['/document-management/driver-document/create', 'DriverDocument[driver_id]'=>$model->id],
            ['data-pjax'=>0,'class' => 'btn btn-success']
        ),
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
