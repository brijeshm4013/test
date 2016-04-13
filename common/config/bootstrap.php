<?php require(__DIR__ . '/setenv.php'); ?>
<?php
//Define Debug Function
function pr($arr, $die = true){
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
    if ($die) die();
}

function dump($arr, $die = true){
    echo '<pre>';
    var_dump($arr);
    echo '<pre>';
    if ($die) die();
}

Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
