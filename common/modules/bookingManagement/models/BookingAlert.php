<?php

namespace common\modules\bookingManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BookingAlert as BookingAlertModel;

/**
 * BookingAlert represents the model behind the search form about `common\models\BookingAlert`.
 */
class BookingAlert extends BookingAlertModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    public function rules()
    {
        return [
            [['alert_title', 'alert_msg', 'alert_time_in_minutes', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['alert_time_in_minutes', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['alert_title','alert_msg'], 'string', 'max' => 255]
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'alert_time_in_minutes' => $this->alert_time_in_minutes,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'alert_title', $this->alert_title]);
        $query->andFilterWhere(['like', 'alert_msg', $this->alert_msg]);


        return $dataProvider;
    }
}
