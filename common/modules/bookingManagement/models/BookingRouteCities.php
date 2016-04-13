<?php

namespace common\modules\bookingManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BookingRouteCities as BookingRouteCitiesModel;

/**
 * BookingRouteCities represents the model behind the search form about `common\models\BookingRouteCities`.
 */
class BookingRouteCities extends BookingRouteCitiesModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'booking_id', 'source_city_id', 'destination_city_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = BookingRouteCitiesModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'booking_id' => $this->booking_id,
            'source_city_id' => $this->source_city_id,
            'destination_city_id' => $this->destination_city_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        return $dataProvider;
    }
}
