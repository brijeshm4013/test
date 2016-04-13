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

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.1.108;dbname=wiwigo;port=3306',
            'username' => 'brijesh',
            'password' => 'reglobe',
            'charset' => 'utf8',
        ],
    ],

    'modules'=>[
        // uncomment the following to enable the Gii tool
        'gii'=>[
            'class'=>'yii\gii\Module',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'allowedIPs'=>['127.0.0.1', '::1', '192.168.1.119', '192.168.178.20'],
            'generators'=>[
                'mongoDbModel' => [
                    'class' => 'yii\mongodb\gii\model\Generator'
                ]
            ],
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