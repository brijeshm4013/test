<?php

namespace common\modules\cityManagement\models;

use common\models\Route as RouteModel;
use common\utils\ProjectUtils;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * Rout represents the model behind the search form about `common\modules\cityManagement\models\base\BaseRout`.
 */
class Route extends RouteModel
{

    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at'], 'required','on'=>[self::SCENARIO_CREATE]],
            [['source_city_id', 'destination_city_id'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['destination_city_id'], 'unique', 'targetAttribute' => ['source_city_id','destination_city_id'],'message'=>"This route already exist. Please change 'Source City' or 'Destination City'",  'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['id', 'source_city_id', 'destination_city_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe']
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
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'source_city_id' => 'Source City',
            'destination_city_id' => 'Destination City',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
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

        $query->joinWith([
            'sourceCity' => function ($query) {
                $query->from('city sourceCity');
            },
            'destinationCity' => function ($query) {
                $query->from('city destinationCity');
            },
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->defaultOrder =[
            'source_city_id'=>SORT_ASC,
            'destination_city_id'=>SORT_ASC,
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'source_city_id' => $this->source_city_id,
            'destination_city_id' => $this->destination_city_id,
            'is_active' => $this->is_active,
        ]);

        ProjectUtils::addDateFilter($this,$query,'create_at');
        ProjectUtils::addDateFilter($this,$query,'update_at');

        return $dataProvider;
    }

    public static function getRouteList(){
        return self::findAll(['is_active'=>1]);
    }

    public function getRouteName(){
        return $this->sourceCity->name.' To '.$this->destinationCity->name;
    }

    public static function getRouteSourceCities(){
        $routes=self::getRouteList();
        $sourceCity=[];
        foreach($routes as $route){
            $sourceCity[$route->id]['id']=$route->sourceCity->id;
            $sourceCity[$route->id]['name']=$route->sourceCity->name;
        }
        return $sourceCity;
    }

    public static function getRouteDestinationCitiesBySourceCity($source_city_id){
        $routes=self::findAll(['is_active'=>1,'source_city_id'=>$source_city_id]);
        $destination=[];
        foreach($routes as $route){
            $destination[]=[
                'id'=>$route->destinationCity->id,
                'text'=>$route->destinationCity->name
            ];
        }
        return $destination;
    }


}
