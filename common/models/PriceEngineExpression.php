<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "price_engine_expression".
 *
 * @property string $id
 * @property integer $price_engine_id
 * @property string $expression
 *
 * @property PriceEngine $priceEngine
 */
class PriceEngineExpression extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_engine_expression';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price_engine_id', 'expression'], 'required'],
            [['price_engine_id'], 'integer'],
            [['expression'], 'string'],
            [['id'], 'string', 'max' => 45]
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
            'expression' => 'Expression',
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
