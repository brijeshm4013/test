<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "route".
 *
 * @property integer $id
 * @property string $source_city_id
 * @property string $destination_city_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property City $sourceCity
 * @property City $destinationCity
 * @property VendorOneWayRate[] $vendorOneWayRates
 */
class Route extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'route';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['source_city_id', 'destination_city_id', 'create_at'], 'required'],
            [['source_city_id', 'destination_city_id', 'is_active'], 'integer'],
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
            'source_city_id' => 'Source City ID',
            'destination_city_id' => 'Destination City ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSourceCity()
    {
        return $this->hasOne(City::className(), ['id' => 'source_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDestinationCity()
    {
        return $this->hasOne(City::className(), ['id' => 'destination_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorOneWayRates()
    {
        return $this->hasMany(VendorOneWayRate::className(), ['route_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWiwigoCustomerOneWayRates()
    {
        return $this->hasMany(WiwigoCustomerOneWayRate::className(), ['route_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWiwigoVendorOneWayRates()
    {
        return $this->hasMany(WiwigoVendorOneWayRate::className(), ['route_id' => 'id']);
    }
}
