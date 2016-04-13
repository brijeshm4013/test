<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $address
 * @property integer $can_speak_english
 * @property integer $is_approved
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property User $user
 * @property DriverDocument[] $driverDocuments
 * @property VendorDriver[] $vendorDrivers
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'address', 'create_at'], 'required'],
            [['user_id', 'can_speak_english', 'is_approved', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'address'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'address' => 'Address',
            'can_speak_english' => 'Can Speak English',
            'is_approved' => 'Is Approved',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriverDocuments()
    {
        return $this->hasMany(DriverDocument::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorDrivers()
    {
        return $this->hasMany(VendorDriver::className(), ['driver_id' => 'id']);
    }
}
