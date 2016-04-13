<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vendor_round_trip_rate".
 *
 * @property integer $id
 * @property integer $vendor_id
 * @property integer $vehicle_category_id
 * @property integer $min_km
 * @property integer $rate_per_km
 * @property integer $rate_per_hour
 * @property integer $ta_da_per_day
 * @property integer $driver_night_charges
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property VehicleCategory $vehicleCategory
 * @property Vendor $vendor
 */
class VendorRoundTripRate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor_round_trip_rate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'vehicle_category_id', 'min_km', 'rate_per_km', 'rate_per_hour', 'ta_da_per_day', 'create_at'], 'required'],
            [['vendor_id', 'vehicle_category_id', 'min_km', 'rate_per_km', 'rate_per_hour', 'ta_da_per_day', 'driver_night_charges', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vendor_id' => 'Vendor ID',
            'vehicle_category_id' => 'Vehicle Category ID',
            'min_km' => 'Min Km',
            'rate_per_km' => 'Rate Per Km',
            'rate_per_hour' => 'Rate Per Hour',
            'ta_da_per_day' => 'Ta Da Per Day',
            'driver_night_charges' => 'Driver Night Charges',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
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
}
