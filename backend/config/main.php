<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'defaultRoute' => 'booking-management/booking/index',
    'modules'=>[
        'user-management' => [
            'class' => 'backend\modules\UserManagement\UserManagementModule',
            'enableRegistration' => false,
            // Here you can set your handler to change layout for any controller or action
            // Tip: you can use this event in any module
            'on beforeAction'=>function(yii\base\ActionEvent $event) {
                if ( $event->action->uniqueId == 'user-management/auth/login' )
                {
                    $event->action->controller->layout = 'loginLayout.php';
                };
            },
        ],
        'city-management'=>[
            'class' => 'common\modules\cityManagement\CityManagementModule',
            'defaultRoute' => 'city',
        ],
        'booking-management' => [
            'class' => 'common\modules\bookingManagement\BookingManagementModule',
            'defaultRoute' => 'booking',
        ],
        'vendor-management' => [
            'class' => 'common\modules\vendorManagement\VendorManagement',
            'defaultRoute' => 'vendor',
        ],
        'vehicle-management' => [
            'class' => 'common\modules\vehicleManagement\VehicleManagement',
            'defaultRoute' => 'vehicle',
        ],
        'document-management' => [
            'class' => 'common\modules\documentManagement\DocumentManagement',
            'defaultRoute' => 'document-type',
        ],
        'vendor-profile-management' => [
            'class' => 'common\modules\vendorProfileManagement\VendorProfileManagement',
        ],
        'pages' => [
            'class' => 'infoweb\pages\Module',
        ],

    ],

    'components' => [
        'user' => [
            'class' => 'backend\modules\userManagement\components\UserConfig',
            // Comment this if you don't want to record user logins
            'on afterLogin' => function($event) {
                \backend\modules\UserManagement\models\UserVisitLog::newVisitor($event->identity->id);
                //common\modules\userManagement\models\UserVisitLog::newVisitor($event->identity->id);
            }
        ],


        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],


    'params' => $params,
];
