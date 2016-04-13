<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "price_engine".
 *
 * @property integer $id
 * @property integer $booking_type_id
 * @property integer $region_id
 * @property string $price_engine_name
 *
 * @property BookingHasPriceEngine[] $bookingHasPriceEngines
 * @property BookingType $bookingType
 * @property Region $region
 * @property PriceEngineExpression[] $priceEngineExpressions
 * @property PriceEngineParameter $priceEngineParameter
 */
class PriceEngine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_engine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['booking_type_id', 'region_id', 'price_engine_name'], 'required'],
            [['booking_type_id', 'region_id'], 'integer'],
            [['price_engine_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'booking_type_id' => 'Booking Type ID',
            'region_id' => 'Region ID',
            'price_engine_name' => 'Price Engine Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingHasPriceEngines()
    {
        return $this->hasMany(BookingHasPriceEngine::className(), ['price_engine_id' => 'id']);
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
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceEngineExpressions()
    {
        return $this->hasMany(PriceEngineExpression::className(), ['price_engine_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceEngineParameter()
    {
        return $this->hasOne(PriceEngineParameter::className(), ['price_engine_id' => 'id']);
    }
}
