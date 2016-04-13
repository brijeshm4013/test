<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 17-Jul-15
 * Time: 4:00PM
 */
$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'YQS8dGGK0zehN1m1ZQoYoqCmHRQr1Tef',
        ],

    ],



];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = 'yii\debug\Module';

    /*$config['bootstrap'][] = 'gii';
    //$config['modules']['gii'] = 'yii\gii\Module';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.112', '192.168.178.20'],
    ];*/
}

return $config;