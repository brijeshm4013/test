<?php
/**
 * Created by PhpStorm.
 * User: Reliance Digital
 * Date: 18-02-2016
 * Time: 20:03
 */

namespace backend\assets;
use yii\web\AssetBundle;

class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';
    public $js = [
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}