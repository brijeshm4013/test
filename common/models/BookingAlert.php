<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_alert".
 *
 * @property integer $id
 * @property string $alert_title
 * @property string $alert_msg
 * @property integer $alert_time_in_minutes
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property BookingAlertSend[] $bookingAlertSends
 */
class BookingAlert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_alert';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alert_title', 'alert_msg', 'alert_time_in_minutes', 'create_at'], 'required'],
            [['alert_time_in_minutes', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['alert_title', 'alert_msg'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alert_title' => 'Alert Title',
            'alert_msg' => 'Alert Msg',
            'alert_time_in_minutes' => 'Alert Time In Minutes',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingAlertSends()
    {
        return $this->hasMany(BookingAlertSend::className(), ['booking_alert_id' => 'id']);
    }
}
