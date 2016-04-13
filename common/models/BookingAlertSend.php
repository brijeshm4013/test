<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_alert_send".
 *
 * @property integer $id
 * @property string $booking_id
 * @property integer $booking_alert_id
 *
 * @property Booking $booking
 * @property BookingAlert $bookingAlert
 */
class BookingAlertSend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_alert_send';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['booking_id', 'booking_alert_id'], 'required'],
            [['booking_id', 'booking_alert_id'], 'integer']
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
            'booking_alert_id' => 'Booking Alert ID',
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
    public function getBookingAlert()
    {
        return $this->hasOne(BookingAlert::className(), ['id' => 'booking_alert_id']);
    }
}
