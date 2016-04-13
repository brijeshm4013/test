<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_route_cities".
 *
 * @property integer $id
 * @property string $booking_id
 * @property string $source_city_id
 * @property string $destination_city_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property Booking $booking
 * @property City $sourceCity
 * @property City $destinationCity
 */
class BookingRouteCities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_route_cities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['booking_id', 'source_city_id', 'destination_city_id', 'create_at'], 'required'],
            [['booking_id', 'source_city_id', 'destination_city_id', 'is_active'], 'integer'],
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
            'source_city_id' => 'Source City ID',
            'destination_city_id' => 'Destination City ID',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSourceCity()
    {
        return $this->hasOne(City::className(), ['id' => 'source_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDestinationCity()
    {
        return $this->hasOne(City::className(), ['id' => 'destination_city_id']);
    }
}
