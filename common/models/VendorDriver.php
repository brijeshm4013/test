<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vendor_driver".
 *
 * @property integer $id
 * @property integer $vendor_id
 * @property integer $driver_id
 *
 * @property Booking[] $bookings
 * @property Driver $driver
 * @property Vendor $vendor
 */
class VendorDriver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor_driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'driver_id'], 'required'],
            [['vendor_id', 'driver_id'], 'integer']
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
            'driver_id' => 'Driver ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['vendor_driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['id' => 'driver_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['id' => 'vendor_id']);
    }
}
