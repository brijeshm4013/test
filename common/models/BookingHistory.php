<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_history".
 *
 * @property string $id
 * @property integer $create_by_user_id
 * @property string $booking_id
 * @property integer $customer_id
 * @property integer $price_engine_id
 * @property integer $booking_type_id
 * @property integer $booking_status_id
 * @property integer $vendor_driver_id
 * @property integer $vendor_vehicle_id
 * @property double $customer_rate
 * @property double $vendor_rate
 * @property string $start_date
 * @property string $end_date
 * @property string $pickup_time
 * @property string $pickup_address
 * @property string $booking_remarks
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 * @property integer $is_cancel_by_ops
 * @property integer $is_cancel_by_cust
 * @property integer $is_cancel_by_vendor
 *
 * @property Booking $booking
 * @property User $createByUser
 */
class BookingHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_by_user_id', 'booking_id', 'customer_id', 'price_engine_id', 'booking_type_id', 'booking_status_id', 'start_date', 'pickup_time', 'create_at'], 'required'],
            [['create_by_user_id', 'booking_id', 'customer_id', 'price_engine_id', 'booking_type_id', 'booking_status_id', 'vendor_driver_id', 'vendor_vehicle_id', 'is_active', 'is_cancel_by_ops', 'is_cancel_by_cust', 'is_cancel_by_vendor'], 'integer'],
            [['customer_rate', 'vendor_rate'], 'number'],
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
            'create_by_user_id' => 'Create By User ID',
            'booking_id' => 'Booking ID',
            'customer_id' => 'Customer ID',
            'price_engine_id' => 'Price Engine ID',
            'booking_type_id' => 'Booking Type ID',
            'booking_status_id' => 'Booking Status ID',
            'vendor_driver_id' => 'Vendor Driver ID',
            'vendor_vehicle_id' => 'Vendor Vehicle ID',
            'customer_rate' => 'Customer Rate',
            'vendor_rate' => 'Vendor Rate',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'pickup_time' => 'Pickup Time',
            'pickup_address' => 'Pickup Address',
            'booking_remarks' => 'Booking Remarks',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
            'is_cancel_by_ops' => 'Is Cancel By Ops',
            'is_cancel_by_cust' => 'Is Cancel By Cust',
            'is_cancel_by_vendor' => 'Is Cancel By Vendor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking()
    {
        return $this->hasOne(Booking::className(), ['id' => 'booking_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreateByUser()
    {
        return $this->hasOne(User::className(), ['id' => 'create_by_user_id']);
    }
}
