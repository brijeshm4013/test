<?php
namespace frontend\modules\booking\models;

use yii\base\Model;

/**
 * This is the model class for table "city".
 *
 * @property string $booking_type_id
 * @property string $source_city_id
 * @property string $destination_city_id
 *
 */
class BookingForm extends Model{
    public $booking_type_id;
    public $source_city_id;
    public $destination_city_id;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // booking_type_id, source_city_id, destination_city_id are required
            [['booking_type_id', 'source_city_id', 'destination_city_id'], 'required'],

        ];
    }


    public function attributeLabels()
    {
        return [
            'booking_type_id'=>'',
            'source_city_id'=>'From City',
            'destination_city_id'=>'To City',
        ];
    }
}