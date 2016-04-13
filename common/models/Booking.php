<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property string $id
 * @property integer $customer_id
 * @property integer $booking_type_id
 * @property integer $booking_status_id
 * @property integer $vendor_id
 * @property integer $vehicle_id
 * @property integer $driver_id
 * @property integer $coupon_id
 * @property integer $customer_rate
 * @property integer $vendor_rate
 * @property integer $commission_rate
 * @property string $start_date
 * @property string $end_date
 * @property string $pickup_time
 * @property string $pickup_address
 * @property string $booking_remarks
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 * @property integer $is_cancel_by_ops
 * @property integer $is_cancel_by_customer
 * @property integer $is_cancel_by_vendor
 *
 * @property BookingStatus $bookingStatus
 * @property BookingType $bookingType
 * @property Customer $customer
 * @property BookingAlertSend[] $bookingAlertSends
 * @property BookingHasCities[] $bookingHasCities
 * @property BookingHasPriceEngine[] $bookingHasPriceEngines
 * @property BookingHistory[] $bookingHistories
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'booking_type_id', 'booking_status_id', 'start_date', 'pickup_time', 'create_at'], 'required'],
            [['customer_id', 'booking_type_id', 'booking_status_id', 'vendor_id', 'vehicle_id', 'driver_id', 'coupon_id', 'customer_rate', 'vendor_rate', 'commission_rate', 'is_active', 'is_cancel_by_ops', 'is_cancel_by_customer', 'is_cancel_by_vendor'], 'integer'],
            [['start_date', 'end_date', 'pickup_time', 'create_at', 'update_at'], 'safe'],
            [['booking_remarks'], 'string'],
            [['pickup_address'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'booking_type_id' => 'Booking Type ID',
            'booking_status_id' => 'Booking Status ID',
            'vendor_id' => 'Vendor ID',
            'vehicle_id' => 'Vehicle ID',
            'driver_id' => 'Driver ID',
            'coupon_id' => 'Coupon ID',
            'customer_rate' => 'Customer Rate',
            'vendor_rate' => 'Vendor Rate',
            'commission_rate' => 'Commission Rate',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'pickup_time' => 'Pickup Time',
            'pickup_address' => 'Pickup Address',
            'booking_remarks' => 'Booking Remarks',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
            'is_cancel_by_ops' => 'Is Cancel By Ops',
            'is_cancel_by_customer' => 'Is Cancel By Customer',
            'is_cancel_by_vendor' => 'Is Cancel By Vendor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingStatus()
    {
        return $this->hasOne(BookingStatus::className(), ['id' => 'booking_status_id']);
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
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingAlertSends()
    {
        return $this->hasMany(BookingAlertSend::className(), ['booking_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingHasCities()
    {
        return $this->hasMany(BookingHasCities::className(), ['booking_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingHasPriceEngines()
    {
        return $this->hasMany(BookingHasPriceEngine::className(), ['booking_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingHistories()
    {
        return $this->hasMany(BookingHistory::className(), ['booking_id' => 'id']);
    }
}
