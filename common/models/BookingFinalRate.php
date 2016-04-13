<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_final_rate".
 *
 * @property string $id
 * @property string $booking_id
 * @property double $customer_rate
 * @property double $vendor_rate
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property Booking $booking
 */
class BookingFinalRate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_final_rate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['booking_id', 'customer_rate', 'vendor_rate', 'create_at'], 'required'],
            [['booking_id', 'is_active'], 'integer'],
            [['customer_rate', 'vendor_rate'], 'number'],
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
            'booking_id' => 'Booking ID',
            'customer_rate' => 'Customer Rate',
            'vendor_rate' => 'Vendor Rate',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking()
    {
        return $this->hasOne(Booking::className(), ['id' => 'booking_id']);
    }
}
