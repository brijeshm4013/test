<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property string $id
 * @property string $name
 * @property string $popular_city_1_id
 * @property string $popular_city_2_id
 * @property integer $is_active
 *
 * @property City[] $cities
 * @property Region[] $regions
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'popular_city_1_id', 'popular_city_2_id'], 'required'],
            [['popular_city_1_id', 'popular_city_2_id', 'is_active'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique']
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
            'popular_city_1_id' => 'Popular City 1 ID',
            'popular_city_2_id' => 'Popular City 2 ID',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['state_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasMany(Region::className(), ['state_id' => 'id']);
    }
}
