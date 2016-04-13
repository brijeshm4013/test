<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vehicle_category".
 *
 * @property integer $id
 * @property string $name
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property VehicleModel[] $vehicleModels
 */
class VehicleCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'create_at'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['is_active'], 'integer'],
            [['name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleModels()
    {
        return $this->hasMany(VehicleModel::className(), ['vehicle_category_id' => 'id']);
    }
}
