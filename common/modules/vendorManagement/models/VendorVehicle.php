<?php

namespace common\modules\vendorManagement\models;

use common\modules\vehicleManagement\models\Vehicle;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\VendorVehicle as VendorVehicleModel;

/**
 * VendorVehicle represents the model behind the search form about `common\models\VendorVehicle`.
 */
class VendorVehicle extends VendorVehicleModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_id', 'vendor_id'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['vehicle_id', 'vendor_id'], 'unique','targetAttribute' =>['vehicle_id',],'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE],'message'=>'Vehicle is already exist for Vendor'],

            [['vehicle_id', 'vendor_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vehicle_id' => 'Vehicle',
            'vendor_id' => 'Vendor',
        ];
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
            'vehicle_id' => $this->vehicle_id,
            'vendor_id' => $this->vendor_id,
        ]);

        return $dataProvider;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['id' => 'vendor_id']);
    }

}
