<?php
/**
 * Created by PhpStorm.
 * User: Brijesh Singh
 * Date: 15/9/15
 * Time: 12:12 PM
 */
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use common\components\kartik\ProjectExportMenu;

$queryString=Yii::$app->request->getQueryString();
$reloadUrl=Yii::$app->request->getPathInfo();

if($queryString!=''){
    $reloadUrl=$reloadUrl.'?'.$queryString;
}

$reloadUrl=['/'.$reloadUrl];
$reloadLink=Html::a('<i class="glyphicon glyphicon-repeat"></i>',$reloadUrl,[
        'data-pjax'=>0,
        'class' => 'btn btn-success btn btn-default', 'title'=>'Reset Grid'
    ]
);

$gridId=isset($gridId)? $gridId : 'kv-grid';
$gridContent=isset($gridContent)? $gridContent : '';
$gridContent = $gridContent.'  '.$reloadLink;

$gridDefaultPjaxSettings=['neverTimeout'=>true, 'options' => ['id' => $gridId.'-container']];

$gridPjaxSettings=(isset($pjaxSettings) && is_array($gridPjaxSettings))? $gridPjaxSettings : $gridDefaultPjaxSettings;

$gridFilter= isset($gridFilter)? $gridFilter: true;

if(!isset($exportPerPageMenu) || !$exportPerPageMenu){
    $exportPerPageMenu=null;
}

$gridPanel=isset($gridPanel)?$gridPanel:[];
$defaultGridPanel=[
    'type' => GridView::TYPE_PRIMARY,
    'heading' => '<i class="glyphicon glyphicon-book"></i> '.$this->title,
];

$fullGridPanel=ArrayHelper::merge($defaultGridPanel,$gridPanel);


$exportPerPageMenu='{export}';

if(!isset($fullExportMenu) ||  !$fullExportMenu){
    $fullExportMenu=null;
}

?>
<div class="panel panel-default" style="margin-top:10px ">
    <div class="panel-body">
            <div class="dataTable_wrapper">
                <?php
                echo GridView::widget([
                    'id'=>$gridId,
                    'dataProvider' => $dataProvider,
                    'filterModel' => isset($gridFilter) && $gridFilter? $searchModel:null,
                    'columns' =>$gridColumns,
                    'exportConfig' => [
                        GridView::CSV=>true,
                        GridView::EXCEL=>true,
                    ],
                    'toolbar' =>[
                        'content'=>$reloadLink,
                        $exportPerPageMenu,
                        $fullExportMenu,
                    ],
                    'pjax' => true,
                    'pjaxSettings' => $gridPjaxSettings,

                    'panel' => $fullGridPanel,

                    // set a label for default menu
                    'export' => [
                        'label' => 'Page',
                        'fontAwesome' => true,
                    ],
                    'pager'=>[
                        'options'=>['class'=>'pagination pagination-sm'],
                        'hideOnSinglePage'=>true,
                    ],

                    'responsive'=>false,
                    'hover'=>false,
                    'condensed'=>true,
                    'floatHeader'=>false,

                    'options' => (isset($girdOptions) && is_array($girdOptions)) ? $girdOptions:[],
                    'containerOptions' => (isset($girdContainerOptions) && is_array($girdContainerOptions)) ? $girdContainerOptions:[],
                ]);
                ?>
            </div>
        </div>
</div>

