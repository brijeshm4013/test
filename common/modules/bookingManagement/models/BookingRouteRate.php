<?php

namespace common\modules\bookingManagement\models;

use common\modules\cityManagement\models\Route;
use common\modules\vehicleManagement\models\VehicleCategory;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BookingRouteRate as BookingRouteRateModel;
use yii\helpers\ArrayHelper;

/**
 * BookingRouteRate represents the model behind the search form about `common\models\BookingRouteRate`.
 */
class BookingRouteRate extends BookingRouteRateModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_category_id', 'booking_type_id', 'route_id', 'rate', 'commission_rate', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [
                ['booking_type_id','route_id' ,'vehicle_category_id'], 'unique',
                'targetAttribute' => ['booking_type_id','route_id' ,'vehicle_category_id'],
                'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE],
                'message'=>"'Booking Route Rate' already exist for selected 'Booking Type', 'Route' and	'Vehicle Category'"
            ],
            [['vehicle_category_id', 'booking_type_id', 'route_id', 'rate', 'commission_rate', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe']
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingType()
    {
        return $this->hasOne(BookingType::className(), ['id' => 'booking_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoute()
    {
        return $this->hasOne(Route::className(), ['id' => 'route_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleCategory()
    {
        return $this->hasOne(VehicleCategory::className(), ['id' => 'vehicle_category_id']);
    }


    /**
     * @return array
     */

    public function attributeLabels()
    {
        $attributeLabels= parent::attributeLabels();
        return ArrayHelper::merge($attributeLabels,[
            'booking_type_id' => 'Booking Type',
            'route_id' => 'Route',
            'vehicle_category_id' => 'Vehicle Category',

        ]);
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'vehicle_category_id' => $this->vehicle_category_id,
            'booking_type_id' => $this->booking_type_id,
            'route_id' => $this->route_id,
            'rate' => $this->rate,
            'commission_rate' => $this->commission_rate,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        return $dataProvider;
    }
}
