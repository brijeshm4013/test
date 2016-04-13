<?php
/**
 * Created by PhpStorm.
 * User: reglobe
 * Date: 7/10/15
 * Time: 3:28 PM
 */

namespace common\components\kartik;


use kartik\export\ExportMenu;
use Yii;
use yii\helpers\ArrayHelper;

class ProjectExportMenu extends  ExportMenu{

    /**
     * Initializes export settings
     *
     * @return void
     */
    public function initExport()
    {
        $this->dataProvider->getPagination()->setPageSize(10);

        if($this->_triggerDownload){
            set_time_limit(300);
            $limit=3000;
            $gridExportLimit=Yii::$app->params['gridExportLimit'];
            if(!empty($gridExportLimit) && is_int($gridExportLimit) && $gridExportLimit > 0 ){
                $limit=$gridExportLimit;
            }

            $this->dataProvider->query->limit($limit);
        }

        parent::initExport();
    }

    public static function defaultExportMenuConfig($dataProvider,$gridColumns,$gridId,$exportMenuConfig=[],$exportConfig=[]){


        $defaultExportMenuConfig=[
            self::FORMAT_PDF => false,
            self::FORMAT_HTML => false,
            self::FORMAT_TEXT => false,
        ];

        $exportConfig=ArrayHelper::merge($defaultExportMenuConfig,$exportConfig);

        $defaultExportMenuConfig=[
            'exportConfig' => $exportConfig,
            'pjaxContainerId' =>  $gridId.'-pjax',
            'asDropdown'=>true,
            'dataProvider' => $dataProvider,
            'showColumnSelector'=>true,
            'columns' => $gridColumns,
            'target' => self::TARGET_SELF,
            'fontAwesome' => true,
            'dropdownOptions' => [
                'label' => 'Export',
                'class' => 'btn btn-default',
                'itemsBefore' => [
                    '<li class="dropdown-header">Export All Data</li>',
                ],
            ]
        ];

        $exportMenuConfig=isset($exportMenuConfig)?$exportMenuConfig:[];
        $fullExportMenuConfig=ArrayHelper::merge($defaultExportMenuConfig,$exportMenuConfig);
        $fullExportMenu = ProjectExportMenu::widget($fullExportMenuConfig);
        return $fullExportMenu;
    }
}