<?php
/**
 * Yii console bootstrap file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

defined('YII_DEBUG') or define('YII_DEBUG', false);


// fcgi doesn't have STDIN and STDOUT defined by default
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
defined('STDOUT') or define('STDOUT', fopen('php://stdout', 'w'));

require(YII_CONSOLE_DIR . '/../../vendor/autoload.php');
require(YII_CONSOLE_DIR . '/../../vendor/yiisoft/yii2/Yii.php');
require(YII_CONSOLE_DIR . '/../../common/config/bootstrap.php');
require(YII_CONSOLE_DIR . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(YII_CONSOLE_DIR . '/../../common/config/main.php'),
    require(YII_CONSOLE_DIR . '/../../common/config/env/'.PROJECT_ENV.'.php'),
    require(YII_CONSOLE_DIR . '/../config/main.php'),
    require(YII_CONSOLE_DIR . '/../config/env/'.PROJECT_ENV.'.php')
);

$config= yii\helpers\ArrayHelper::merge($config,[
    'id' => 'yii-console',
    'basePath' => dirname(YII_CONSOLE_DIR),
    'controllerNamespace' => YII_CONSOLE_CONTROLLER_NS,
]);

$config['components']['errorHandler']= null;
$config['components']['user']= null;
$config['components']['request']= null;

$application = new yii\console\Application($config);

$exitCode = $application->run();
exit($exitCode);