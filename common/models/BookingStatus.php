<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_status".
 *
 * @property integer $id
 * @property string $title
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property Booking[] $bookings
 */
class BookingStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'create_at'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['is_active'], 'integer'],
            [['title'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['booking_status_id' => 'id']);
    }
}
