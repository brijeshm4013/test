<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
        'font/font-awesome/css/font-awesome.min.css',
        'css/materialize.css',
        'css/prism.css',
        'css/site.css',
    ];
    public $js = [

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'frontend\assets\BootstrapPluginAsset',
    ];

}
