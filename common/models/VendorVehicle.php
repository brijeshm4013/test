<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vendor_vehicle".
 *
 * @property integer $id
 * @property integer $vehicle_id
 * @property integer $vendor_id
 *
 * @property Booking[] $bookings
 * @property VendorOneWayRate[] $vendorOneWayRates
 * @property VendorRoundTripRate[] $vendorRoundTripRates
 * @property Vehicle $vehicle
 * @property Vendor $vendor
 */
class VendorVehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor_vehicle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_id', 'vendor_id'], 'required'],
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
            'vehicle_id' => 'Vehicle ID',
            'vendor_id' => 'Vendor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['vendor_vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorOneWayRates()
    {
        return $this->hasMany(VendorOneWayRate::className(), ['vendor_vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorRoundTripRates()
    {
        return $this->hasMany(VendorRoundTripRate::className(), ['vendor_vehicle_id' => 'id']);
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
