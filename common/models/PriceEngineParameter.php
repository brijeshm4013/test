<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "price_engine_parameter".
 *
 * @property integer $id
 * @property integer $price_engine_id
 * @property string $field_name
 * @property string $field_value
 *
 * @property PriceEngine $priceEngine
 */
class PriceEngineParameter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_engine_parameter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_engine_id', 'field_name', 'field_value'], 'required'],
            [['price_engine_id'], 'integer'],
            [['field_name', 'field_value'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price_engine_id' => 'Price Engine ID',
            'field_name' => 'Field Name',
            'field_value' => 'Field Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceEngine()
    {
        return $this->hasOne(PriceEngine::className(), ['id' => 'price_engine_id']);
    }
}
