<?php

namespace common\modules\vehicleManagement\models;

use common\models\User;
use common\modules\documentManagement\models\VehicleDocument;
use common\modules\vendorManagement\models\VendorVehicle;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Vehicle as VehicleModel;
use common\modules\vehicleManagement\models\VehicleModel as VehicleModelType;

use yii\helpers\ArrayHelper;

/**
 * Vehicle represents the model behind the search form about `common\models\Vehicle`.
 */
class Vehicle extends VehicleModel
{

    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_model_id', 'rc_number', 'total_seats', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['vehicle_model_id', 'total_seats', 'has_air_conditioning', 'has_gps', 'has_luggage_carrier', 'has_lcd', 'is_approved', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['rc_number', 'lat', 'long'], 'string', 'max' => 45],
            [['rc_number'], 'unique','message'=>"Vehicle with {attribute} '{value}' already exist"]
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleModel()
    {
        return $this->hasOne(VehicleModelType::className(), ['id' => 'vehicle_model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleDocuments()
    {
        return $this->hasMany(VehicleDocument::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorVehicles()
    {
        return $this->hasMany(VendorVehicle::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    /**
     * @inheritdoc
     */
    public function attributeLabels(){
        $labels=parent::attributeLabels();
        return ArrayHelper::merge($labels,[
            'vehicle_model_id' => 'Vehicle Model',
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
        $query = self::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if(User::hasRole('vendor',false)){
            $query->joinWith([
                'vendorVehicles' => function ($query) {
                    $query->from('vendor_vehicle vendorVehicles');
                },

            ]);
            $user=User::getCurrentUser();
            $vendor=$user->vendor;
            $query->andWhere(['vendorVehicles.vendor_id'=>$vendor->id]);
        }

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'vehicle_model_id' => $this->vehicle_model_id,
            'total_seats' => $this->total_seats,
            'has_air_conditioning' => $this->has_air_conditioning,
            'has_gps' => $this->has_gps,
            'has_luggage_carrier' => $this->has_luggage_carrier,
            'has_lcd' => $this->has_lcd,
            'is_approved' => $this->is_approved,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'rc_number', $this->rc_number]);

        return $dataProvider;
    }

    public static function getVehicleList(){
        return self::findAll(['is_active'=>1]);
    }

    public function getVehicleName(){
        return $this->vehicleModel->vehicleCategory->name.':'.$this->vehicleModel->model_name.':'.$this->rc_number;
    }
}
