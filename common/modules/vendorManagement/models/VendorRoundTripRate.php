<?php

namespace common\modules\vendorManagement\models;

use common\modules\vehicleManagement\models\VehicleCategory;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\VendorRoundTripRate as VendorRoundTripRateModel;
use yii\helpers\ArrayHelper;

/**
 * VendorRoundTripRate represents the model behind the search form about `common\models\VendorRoundTripRate`.
 */
class VendorRoundTripRate extends VendorRoundTripRateModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'vehicle_category_id', 'min_km', 'rate_per_km', 'rate_per_hour', 'ta_da_per_day', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['vendor_id', 'vehicle_category_id', 'min_km', 'rate_per_km', 'rate_per_hour', 'ta_da_per_day', 'driver_night_charges','is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe']
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        $attributeLabels=parent::attributeLabels();
        return ArrayHelper::merge($attributeLabels,[
            'vendor_id' => 'Vendor',
            'vehicle_category_id' => 'Vehicle Category',
            'min_km' => 'Minimum Km.',
            'rate_per_km' => 'Rate Per Km.',
            'rate_per_hour' => 'Rate Per Hour',
            'ta_da_per_day' => 'Ta/Da Per Day',
        ]);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleCategory()
    {
        return $this->hasOne(VehicleCategory::className(), ['id' => 'vehicle_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['id' => 'vendor_id']);
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
            'vendor_id' => $this->vendor_id,
            'vehicle_category_id' => $this->vehicle_category_id,
            'min_km' => $this->min_km,
            'rate_per_km' => $this->rate_per_km,
            'rate_per_hour' => $this->rate_per_hour,
            'ta_da_per_day' => $this->ta_da_per_day,
            'driver_night_charges'=>$this->driver_night_charges,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        return $dataProvider;
    }
}
