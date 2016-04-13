<?php

namespace common\modules\cityManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Region as RegionModel;

/**
 * Region represents the model behind the search form about `common\models\Region`.
 */
class Region extends RegionModel
{

    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_name', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [
                ['state_id',], 'required', 'when' => function ($model) {
                    return $model->city_id == NULL;
                },
                'whenClient' => "function (attribute, value) {
                    return $('#Region-city_id').val() == '';
                }",
                'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]
            ],
            [
                ['city_id',], 'required', 'when' => function ($model) {
                    return $model->state_id == NULL;
                },
                'whenClient' => "function (attribute, value) {
                    return $('#Region-state_id').val() == '';
                }",
                'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]
            ],

            [['region_name'], 'unique','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],

            [['state_id', 'city_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['region_name'], 'string', 'max' => 255],

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
            'state_id' => $this->state_id,
            'city_id' => $this->city_id,
        ]);

        return $dataProvider;
    }

    public static function getAllRegions(){
       return self::find()->andWhere(['is_active'=>1])->orderBy(['region_name'=>SORT_ASC])->all();
    }
}
