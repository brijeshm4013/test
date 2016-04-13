<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params/'.PROJECT_ENV.'.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params/'.PROJECT_ENV.'.php')
);



return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'timezone' => 'Asia/Kolkata',
    'modules'=>[
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],

        'gii'=>[
            'class'=>'yii\gii\Module',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'allowedIPs'=>['127.0.0.1', '::1', '192.168.0.111'],
            'generators'=>[
                'kartikgii-crud' => [
                    'class' => 'warrence\kartikgii\crud\Generator',

                ],
            ],
        ],

        'datecontrol' =>  [
            'class' => 'kartik\datecontrol\Module',

            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'd-m-Y',
                'time' => 'H:i:s A',
                'datetime' => 'd-m-Y H:i:s A',
            ],

            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'Y-m-d',
                'time' => 'H:i:s',
                'datetime' => 'Y-m-d H:i:s',
            ],
            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,

        ]
    ],

    'components' => [

        'formatter' => [
            'defaultTimeZone' => 'Asia/Kolkata',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

//        'user' => [
//            'class' => 'webvimark\modules\UserManagement\components\UserConfig',
//            // Comment this if you don't want to record user logins
//            'on afterLogin' => function($event) {
//                \webvimark\modules\UserManagement\models\UserVisitLog::newVisitor($event->identity->id);
//            }
//        ],

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=book_my_taxi;port=3306',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],

        'urlManager' => [
            'baseUrl' => '/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ]
        ],
    ],



    'params' => $params,
];
