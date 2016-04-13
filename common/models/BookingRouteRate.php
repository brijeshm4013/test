<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_route_rate".
 *
 * @property integer $id
 * @property integer $vehicle_category_id
 * @property integer $booking_type_id
 * @property integer $route_id
 * @property integer $rate
 * @property integer $commission_rate
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property BookingType $bookingType
 * @property Route $route
 * @property VehicleCategory $vehicleCategory
 */
class BookingRouteRate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_route_rate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_category_id', 'booking_type_id', 'route_id', 'rate', 'commission_rate', 'create_at'], 'required'],
            [['vehicle_category_id', 'booking_type_id', 'route_id', 'rate', 'commission_rate', 'is_active'], 'integer'],
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
            'vehicle_category_id' => 'Vehicle Category ID',
            'booking_type_id' => 'Booking Type ID',
            'route_id' => 'Route ID',
            'rate' => 'Rate',
            'commission_rate' => 'Commission Rate',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
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
    public function getRoute()
    {
        return $this->hasOne(Route::className(), ['id' => 'route_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleCategory()
    {
        return $this->hasOne(VehicleCategory::className(), ['id' => 'vehicle_category_id']);
    }
}
