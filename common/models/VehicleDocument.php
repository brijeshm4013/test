<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vehicle_document".
 *
 * @property integer $id
 * @property integer $vehicle_id
 * @property integer $document_type_id
 * @property string $file
 * @property string $ext
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property Vehicle $vehicle
 */
class VehicleDocument extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle_document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_id', 'document_type_id', 'file', 'create_at'], 'required'],
            [['vehicle_id', 'document_type_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['file'], 'string', 'max' => 45],
            [['ext'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vehicle_id' => 'Vehicle ID',
            'document_type_id' => 'Document Type ID',
            'file' => 'File',
            'ext' => 'Ext',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id']);
    }
}
