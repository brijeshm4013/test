<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $sourcePath = '@bower/bootstrap/dist';
    public $css = [
        'css/metisMenu.min.css',
        'css/sb-admin-2.css',
        'css/font-awesome.min.css',
        'css/style.css',
    ];
    public $js =[
        'js/metisMenu.min.js',
        'js/sb-admin-2.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'backend\assets\BootstrapPluginAsset',
    ];
}
