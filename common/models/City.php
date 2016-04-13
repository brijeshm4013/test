<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property string $id
 * @property string $state_id
 * @property string $name
 * @property integer $std_code
 * @property string $default_pincode
 * @property string $city_class_type
 * @property string $default_display
 * @property integer $is_active
 *
 * @property BookingRouteCities[] $bookingRouteCities
 * @property BookingRouteCities[] $bookingRouteCities0
 * @property State $state
 * @property Region[] $regions
 * @property Route[] $routes
 * @property Route[] $routes0
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'name'], 'required'],
            [['state_id', 'std_code', 'default_pincode', 'default_display', 'is_active'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['city_class_type'], 'string', 'max' => 1],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_id' => 'State ID',
            'name' => 'Name',
            'std_code' => 'Std Code',
            'default_pincode' => 'Default Pincode',
            'city_class_type' => 'City Class Type',
            'default_display' => 'Default Display',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRouteCities()
    {
        return $this->hasMany(BookingRouteCities::className(), ['source_city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRouteCities0()
    {
        return $this->hasMany(BookingRouteCities::className(), ['destination_city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasMany(Region::className(), ['city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoutes()
    {
        return $this->hasMany(Route::className(), ['source_city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoutes0()
    {
        return $this->hasMany(Route::className(), ['destination_city_id' => 'id']);
    }
}
