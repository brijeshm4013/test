<?php

namespace frontend\modules\booking\controllers;

use common\modules\cityManagement\models\Route;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class BookingController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @param $source_city_id
     * @return array
     *
     */
   public function actionToCityList($source_city_id){
       Yii::$app->response->format = Response::FORMAT_JSON;
       return Route::getRouteDestinationCitiesBySourceCity($source_city_id);
   }
}
