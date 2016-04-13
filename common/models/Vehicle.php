<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property integer $id
 * @property integer $vehicle_model_id
 * @property string $rc_number
 * @property integer $total_seats
 * @property string $lat
 * @property string $long
 * @property integer $has_air_conditioning
 * @property integer $has_gps
 * @property integer $has_luggage_carrier
 * @property integer $has_lcd
 * @property integer $is_approved
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property VehicleModel $vehicleModel
 * @property VehicleDocument[] $vehicleDocuments
 * @property VendorVehicle[] $vendorVehicles
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_model_id', 'rc_number', 'total_seats', 'create_at'], 'required'],
            [['vehicle_model_id', 'total_seats', 'has_air_conditioning', 'has_gps', 'has_luggage_carrier', 'has_lcd', 'is_approved', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['rc_number', 'lat', 'long'], 'string', 'max' => 45],
            [['rc_number'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vehicle_model_id' => 'Vehicle Model ID',
            'rc_number' => 'Rc Number',
            'total_seats' => 'Total Seats',
            'lat' => 'Lat',
            'long' => 'Long',
            'has_air_conditioning' => 'Has Air Conditioning',
            'has_gps' => 'Has Gps',
            'has_luggage_carrier' => 'Has Luggage Carrier',
            'has_lcd' => 'Has Lcd',
            'is_approved' => 'Is Approved',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleModel()
    {
        return $this->hasOne(VehicleModel::className(), ['id' => 'vehicle_model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleDocuments()
    {
        return $this->hasMany(VehicleDocument::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorVehicles()
    {
        return $this->hasMany(VendorVehicle::className(), ['vehicle_id' => 'id']);
    }
}
