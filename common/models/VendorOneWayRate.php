<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vendor_one_way_rate".
 *
 * @property integer $id
 * @property integer $vendor_id
 * @property integer $vehicle_category_id
 * @property integer $route_id
 * @property integer $rate
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property Route $route
 * @property VehicleCategory $vehicleCategory
 * @property Vendor $vendor
 */
class VendorOneWayRate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor_one_way_rate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'vehicle_category_id', 'route_id', 'rate', 'create_at'], 'required'],
            [['vendor_id', 'vehicle_category_id', 'route_id', 'rate', 'is_active'], 'integer'],
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
            'vendor_id' => 'Vendor ID',
            'vehicle_category_id' => 'Vehicle Category ID',
            'route_id' => 'Route ID',
            'rate' => 'Rate',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['id' => 'vendor_id']);
    }
}
