<?php

namespace common\modules\cityManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * State represents the model behind the search form about `common\modules\cityManagement\models\base\BaseState`.
 */
class State extends \common\models\State
{

    const SCENARIO_CREATE='_sc_create';
    const SCENARIO_UPDATE='_sc_update';


    /**
     * @inheritdoc
     * This property define for to get only active stats handle buy
     * @see common\traits\base\BeforeFindTrait
     */


    public function rules()
    {
        return [
            [['name'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['name'], 'unique','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['id', 'popular_city_1_id', 'popular_city_2_id', 'is_active'], 'integer'],
            [['name'], 'safe'],
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
     * @return \yii\db\ActiveQuery
     */
    public function getPopularCity1()
    {
        return $this->hasOne(City::className(), ['id' => 'popular_city_1_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPopularCity2()
    {
        return $this->hasOne(City::className(), ['id' => 'popular_city_2_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'State Name',
            'popular_city_1_id' => 'First Popular City',
            'popular_city_2_id' => 'Second Popular City',
            'is_active' => 'Is Active',
        ];
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
            'popular_city_1_id' => $this->popular_city_1_id,
            'popular_city_2_id' => $this->popular_city_2_id,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }

    public static function getAllActiveStates(){
        return self::find()->andWhere(['is_active'=>1])->orderBy(['name'=>SORT_ASC])->all();
    }

}
