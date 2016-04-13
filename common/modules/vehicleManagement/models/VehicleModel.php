<?php

namespace common\modules\vehicleManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\VehicleModel as VehicleModelModel;
use yii\helpers\ArrayHelper;

/**
 * VehicleModel represents the model behind the search form about `common\models\VehicleModel`.
 */
class VehicleModel extends VehicleModelModel
{

    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_category_id', 'model_name', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['vehicle_category_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['model_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels(){
        $labels=parent::attributeLabels();
        return ArrayHelper::merge($labels,[
            'vehicle_category_id' => 'Vehicle category',
        ]);
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
        $query = VehicleModelModel::find();

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
            'vehicle_category_id' => $this->vehicle_category_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'model_name', $this->model_name]);

        return $dataProvider;
    }

    public static function getAllActVehicleModels(){
        return self::findAll(['is_active'=>1]);
    }
}
