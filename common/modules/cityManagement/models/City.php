<?php

namespace common\modules\cityManagement\models;

use common\utils\ProjectUtils;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\City as CityModel;

/**
 * City represents the model behind the search form about `common\modules\cityManagement\models\base\BaseCity`.
 */
class City extends CityModel
{

    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','state_id'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['state_id', 'std_code', 'default_pincode', 'default_display','is_active'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['city_class_type'], 'string', 'max' => 1],
            [['name', 'state_id'], 'unique', 'targetAttribute' => ['name', 'state_id'], 'message' => 'The combination of Name and State ID has already been taken.']
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
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'City Name',
            'state_id' => 'State',
            'std_code' => 'Std Code',
            'default_pincode' => 'Default Pincode',
            'city_class_type' => 'City Class Type',
            'default_display' => 'Default Display',
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
            'state_id' => $this->state_id,
            'std_code' => $this->std_code,
            'default_pincode' => $this->default_pincode,
            'default_display' => $this->default_display,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'city_class_type', $this->city_class_type])
            ->andFilterWhere(['like', 'is_active', $this->is_active]);



        return $dataProvider;
    }

    public static function getAllActiveCities(){
        return self::find()->andWhere(['is_active'=>1])->orderBy(['name'=>SORT_ASC])->all();

    }

}
