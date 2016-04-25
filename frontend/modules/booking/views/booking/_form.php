<?php
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$model=new \frontend\modules\booking\models\BookingForm();

$bookingTypeList=\common\modules\bookingManagement\models\BookingType::findAll(['is_active'=>1]);

$bookingTypeList=ArrayHelper::map($bookingTypeList,'id','title');
?>
<div class="booking-default-index">

    <?php $form = ActiveForm::begin([
        //'enableAjaxValidation'=>true
    ]); ?>

    <div class="col-lg-12">
        <div class="col-md-4">
            <?php
            $model->booking_type_id=2;
            echo $form->field($model, 'booking_type_id')->radioList($bookingTypeList);
            ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-md-4">
            <?php
            $url=Yii::$app->getUrlManager()->createUrl(['booking/booking/to-city-list']);
            $sourceCities=\common\modules\cityManagement\models\Route::getRouteSourceCities();
            $fromCities=ArrayHelper::map($sourceCities,'id','name');
            echo $form->field($model, 'source_city_id')->label(false)->widget(\kartik\widgets\Select2::classname(), [
                'data' => $fromCities,
                'attribute'=>'name',
                'language' => 'en',
                'options' => ['placeholder' => 'From City ...'],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
                'pluginEvents'=>[
                    'change'=>'function() {
                          $("#bookingform-destination_city_id").select2("val",null);
                    }',
                ]
            ]);
            ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $form->field($model, 'destination_city_id')->label(false)->widget(\kartik\widgets\Select2::classname(), [
                'attribute'=>'name',
                'language' => 'en',
                'options' => ['placeholder' => 'To City ...'],
                'pluginOptions' => [
                    'allowClear' => true,
                    'depends'=>[\yii\helpers\Html::getInputId($model, 'source_city_id')],
                    'ajax' => [
                        'dataType' => \yii\web\Response::FORMAT_JSON,
                        'url' => $url,
                        'data' =>new \yii\web\JsExpression('function() {
                            var source_city_id=$("#bookingform-source_city_id").val();
                               return {source_city_id:source_city_id};
                            }'),
                        'processResults' => new \yii\web\JsExpression('function (data) {
                                 $("#bookingform-destination_city_id").select2("val",null);
                                 return {results:data};
                        }'),
                    ],
                ],

            ]);
            ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
