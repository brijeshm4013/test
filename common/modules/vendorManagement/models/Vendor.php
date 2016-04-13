<?php

namespace common\modules\vendorManagement\models;

use common\models\User;
use common\models\VendorHasRegion;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Vendor as VendorModel;

/**
 * Vendor represents the model behind the search form about `common\models\Vendor`.
 */
class Vendor extends VendorModel
{

    CONST VENDOR_ROLE='vendor';
    CONST VENDOR_PROFILE='vendor_profile';

    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';


    public $vendor_regions=[];

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'agency_name', 'area', 'address', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE,self::VENDOR_PROFILE]],
            [['vendor_regions',], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],

            [['user_id', 'pincode', 'is_approved', 'is_active'], 'integer'],
            [['create_at', 'update_at','vendor_regions'], 'safe'],
            [['name', 'agency_name', 'area'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 100]
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
            'user_id' => $this->user_id,
            'pincode' => $this->pincode,
            'is_approved' => $this->is_approved,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'agency_name', $this->agency_name])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }

    private function saveVendorRole(){
        User::assignRole($this->user_id,self::VENDOR_ROLE);
    }

    private function saveVendorRegions(){
        $vendor_regions=$this->vendor_regions;
        if(!empty($vendor_regions)){
            VendorHasRegion::deleteAll(['vendor_id'=>$this->id]);
            foreach($vendor_regions as $vendor_region){
                $region=new VendorHasRegion();
                $region->vendor_id=$this->id;
                $region->region_id=$vendor_region;
                $region->save();
            }
        }
    }


    public function afterSaveVendor(){
        $this->saveVendorRole();
        $this->saveVendorRegions();
    }

    public static function getVendorList(){
        return self::findAll(['is_active'=>1]);
    }

    public function getVendorName(){
        return $this->name.':'.$this->agency_name.':'.$this->user->username;
    }

}
