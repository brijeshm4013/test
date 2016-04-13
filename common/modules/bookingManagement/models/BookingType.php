<?php

namespace common\modules\bookingManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BookingType as BookingTypeModel;

/**
 * BookingType represents the model behind the search form about `common\models\BookingType`.
 */
class BookingType extends BookingTypeModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE,]],
            [['create_at', 'update_at'], 'safe'],
            [['is_active'], 'integer'],
            [['title'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 255]
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
        $query = self::find();

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
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }

    public static function getBookingTypeList(){
        return self::findAll(['is_active'=>1]);
    }

}
