<?php

namespace common\modules\bookingManagement\models;

use common\modules\vehicleManagement\models\Vehicle;
use common\modules\vendorManagement\models\Driver;
use common\modules\vendorManagement\models\Vendor;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Booking as BookingModel;
use yii\helpers\ArrayHelper;

/**
 * Booking represents the model behind the search form about `common\models\Booking`.
 */
class Booking extends BookingModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'booking_type_id', 'booking_status_id', 'start_date', 'pickup_time', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['customer_id', 'booking_type_id', 'booking_status_id', 'vendor_id', 'vehicle_id', 'driver_id', 'coupon_id', 'customer_rate', 'vendor_rate', 'commission_rate', 'is_active', 'is_cancel_by_ops', 'is_cancel_by_customer', 'is_cancel_by_vendor'], 'integer'],
            [['start_date', 'end_date', 'pickup_time', 'create_at', 'update_at'], 'safe'],
            [['booking_remarks'], 'string'],
            [['pickup_address'], 'string', 'max' => 255]
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['id' => 'vendor_id']);
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
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['id' => 'driver_id']);
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        $attributeLabels= parent::attributeLabels();
        return ArrayHelper::merge($attributeLabels,[
            'customer_id' => 'Customer Name',
            'booking_type_id' => 'Booking Type',
            'booking_status_id' => 'Booking Status',
            'vendor_id' => 'Vendor',
            'vehicle_id' => 'Vehicle',
            'driver_id' => 'Driver',
            'coupon_id' => 'Coupon Code',
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
            'customer_id' => $this->customer_id,
            'booking_type_id' => $this->booking_type_id,
            'booking_status_id' => $this->booking_status_id,
            'vendor_id' => $this->vendor_id,
            'vehicle_id' => $this->vehicle_id,
            'driver_id' => $this->driver_id,
            'coupon_id' => $this->coupon_id,
            'customer_rate' => $this->customer_rate,
            'vendor_rate' => $this->vendor_rate,
            'commission_rate' => $this->commission_rate,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'pickup_time' => $this->pickup_time,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
            'is_cancel_by_ops' => $this->is_cancel_by_ops,
            'is_cancel_by_customer' => $this->is_cancel_by_customer,
            'is_cancel_by_vendor' => $this->is_cancel_by_vendor,
        ]);

        $query->andFilterWhere(['like', 'pickup_address', $this->pickup_address])
            ->andFilterWhere(['like', 'booking_remarks', $this->booking_remarks]);

        return $dataProvider;
    }
}
