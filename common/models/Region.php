<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $id
 * @property string $region_name
 * @property string $state_id
 * @property string $city_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property City $city
 * @property State $state
 * @property VendorHasRegion[] $vendorHasRegions
 * @property Vendor[] $vendors
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_name', 'create_at'], 'required'],
            [['state_id', 'city_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['region_name'], 'string', 'max' => 255],
            [['region_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_name' => 'Region Name',
            'state_id' => 'State ID',
            'city_id' => 'City ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
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
    public function getVendorHasRegions()
    {
        return $this->hasMany(VendorHasRegion::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendors()
    {
        return $this->hasMany(Vendor::className(), ['id' => 'vendor_id'])->viaTable('vendor_has_region', ['region_id' => 'id']);
    }
}
