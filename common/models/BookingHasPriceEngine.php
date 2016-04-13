<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_has_price_engine".
 *
 * @property integer $id
 * @property integer $price_engine_id
 * @property string $booking_id
 *
 * @property Booking $booking
 * @property PriceEngine $priceEngine
 */
class BookingHasPriceEngine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_has_price_engine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price_engine_id', 'booking_id'], 'required'],
            [['id', 'price_engine_id', 'booking_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price_engine_id' => 'Price Engine ID',
            'booking_id' => 'Booking ID',
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
    public function getPriceEngine()
    {
        return $this->hasOne(PriceEngine::className(), ['id' => 'price_engine_id']);
    }
}
