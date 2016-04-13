<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vehicle_model".
 *
 * @property integer $id
 * @property integer $vehicle_category_id
 * @property string $model_name
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property Vehicle[] $vehicles
 * @property VehicleCategory $vehicleCategory
 */
class VehicleModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle_model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_category_id', 'model_name', 'create_at'], 'required'],
            [['vehicle_category_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['model_name'], 'string', 'max' => 45]
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
            'model_name' => 'Model Name',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['vehicle_model_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleCategory()
    {
        return $this->hasOne(VehicleCategory::className(), ['id' => 'vehicle_category_id']);
    }
}
