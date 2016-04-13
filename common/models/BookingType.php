<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booking_type".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property PriceEngine[] $priceEngines
 */
class BookingType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'create_at'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['is_active'], 'integer'],
            [['title'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceEngines()
    {
        return $this->hasMany(PriceEngine::className(), ['booking_type_id' => 'id']);
    }
}
