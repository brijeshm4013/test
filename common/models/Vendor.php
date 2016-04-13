<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vendor".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $agency_name
 * @property string $area
 * @property string $address
 * @property integer $pincode
 * @property integer $is_approved
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property User $user
 * @property VendorDocument[] $vendorDocuments
 * @property VendorDriver[] $vendorDrivers
 * @property VendorHasRegion[] $vendorHasRegions
 * @property Region[] $regions
 * @property VendorVehicle[] $vendorVehicles
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'agency_name', 'area', 'address', 'create_at'], 'required'],
            [['user_id', 'pincode', 'is_approved', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'agency_name', 'area'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 100]
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
            'agency_name' => 'Agency Name',
            'area' => 'Area',
            'address' => 'Address',
            'pincode' => 'Pincode',
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
    public function getVendorDocuments()
    {
        return $this->hasMany(VendorDocument::className(), ['vendor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorDrivers()
    {
        return $this->hasMany(VendorDriver::className(), ['vendor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorHasRegions()
    {
        return $this->hasMany(VendorHasRegion::className(), ['vendor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasMany(Region::className(), ['id' => 'region_id'])->viaTable('vendor_has_region', ['vendor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorVehicles()
    {
        return $this->hasMany(VendorVehicle::className(), ['vendor_id' => 'id']);
    }
}
