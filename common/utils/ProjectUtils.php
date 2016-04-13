<?php
namespace common\utils;
use yii\db\BaseActiveRecord;
use yii\db\QueryInterface;
use yii\web\UploadedFile;

/**
 * Created by PhpStorm.
 * User: Brijesh Singh
 * Date: 23-02-2016
 * Time: 12:37
 */
class ProjectUtils
{

    const DIR_IMAGES='images/';
    const DIR_DOCS=self::DIR_IMAGES.'documents/';
    const DIR_VEHICLE_DOCS=self::DIR_DOCS.'vehicle/';
    const DIR_DRIVER_DOCS=self::DIR_DOCS.'driver/';



    /**
     * @param bool $reverse
     * @return array
     */
    public static function getYesNoList($reverse=false){
        $list=[0=>'No',1=>'Yes'];
        if($reverse)
            krsort($list);
        return $list;
    }

    /**
     * @param BaseActiveRecord $model
     * @param QueryInterface $query
     * @param $attr
     * @param null $val
     */
    public static function addDateFilter(BaseActiveRecord $model,QueryInterface $query,$attr,$val=null){

        if(!empty($val)){
            $dateRange=urldecode($val);
        }elseif (isset($model->{$attr}) && !empty($model->{$attr})) {
            //Url Encode the value for filter and show in form field
            $model->{$attr}=urldecode($model->{$attr});
            $dateRange=$model->{$attr};
        }

        if(!empty($dateRange)){
            //For strtotime function we have to replace '/' to '-' because
            $dateRange=str_replace('/','-',$dateRange);
            if(isset($dateRange) && !empty($dateRange)) {
                //For Filter Start Date Time should be '00:00:00' and End Date Time Should be '23:59:59'
                $fromDateTs = strtotime(trim($dateRange.' 00:00:00'));
                $fromDate = date('Y-m-d H:i:s', $fromDateTs);
                $toDateTs = strtotime(trim($dateRange.' 23:59:59'));
                $toDate = date('Y-m-d H:i:s', $toDateTs);
                $query->andFilterWhere(['between', $attr, $fromDate, $toDate]);
            }
        }
    }

    /**
     * @param bool $opt
     * @return string
     */
    public static function getGuid($opt = true){

        if( function_exists('com_create_guid') ){
            if( $opt ){
                return com_create_guid();
            }
            else {
                return trim( com_create_guid(), '{}' );
            }
        }
        else {
            mt_srand( (double)microtime() * 10000 );
            $charid = strtoupper( md5(uniqid(rand(), true)) );
            $hyphen = chr( 45 );
            $left_curly = $opt ? chr(123) : "";
            $right_curly = $opt ? chr(125) : "";
            $uuid = $left_curly
                . substr( $charid, 0, 8 ) . $hyphen
                . substr( $charid, 8, 4 ) . $hyphen
                . substr( $charid, 12, 4 ) . $hyphen
                . substr( $charid, 16, 4 ) . $hyphen
                . substr( $charid, 20, 12 )
                . $right_curly;
            return $uuid;
        }

    }

    public static function uploadFile($model, $modelFileAttr,$localDir,$fileName){
        $tempSave = UploadedFile::getInstance($model, $modelFileAttr);
        if($fileName != '' && !$model->isNewRecord && !$tempSave) {
            //pr('hello1');
            $model->{$modelFileAttr} = $fileName;
            return $fileName;
        }elseif($tempSave && !$tempSave->error){

            if (!is_dir($localDir)) {
                $model->addError($modelFileAttr, "Please assign local directory '<b>$localDir</b>' to upload file.");
                return false;
            }

            if($model->isNewRecord){
                $fileInfo=pathinfo($tempSave->name);
                $extension=$fileInfo['extension'];
                $fileName=$fileName.'.'.$extension;
            }

            $uploadedFile = $localDir . $fileName;
            if($tempSave->saveAs($uploadedFile, false)){
                chmod($uploadedFile, 0755);
                $model->{$modelFileAttr} = $fileName;
                return $fileName;

            }else{
                $model->addError($modelFileAttr, 'There is some problem to uploading file. Please try again.' );
                return false;
            }
        }elseif($tempSave->error && empty($tempSave)){
            //pr('hello3');
            $model->addError($modelFileAttr, 'There is some problem to uploading file. Please try again.' );
            return false;
        }else{
            //pr('hello4');
            $model->addError($modelFileAttr, 'There is some problem to uploading file. Please try again.' );
            return false;
        }
    }
}