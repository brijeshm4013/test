<?php

namespace common\modules\vendorManagement\models;

use common\models\User;
use common\modules\documentManagement\models\DriverDocument;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Driver as DriverModel;
use yii\helpers\ArrayHelper;

/**
 * Driver represents the model behind the search form about `common\models\Driver`.
 */
class Driver extends DriverModel
{
    CONST DRIVER_ROLE='driver';
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE,]],
            [['user_id', 'can_speak_english', 'is_approved', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'address',], 'string', 'max' => 45]
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
    public function getDriverDocuments()
    {
        return $this->hasMany(DriverDocument::className(), ['driver_id' => 'id']);
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

        if(User::hasRole('vendor',false)){
            $query->joinWith([
                'vendorDrivers' => function ($query) {
                    $query->from('vendor_driver vendorDrivers');
                },

            ]);
            $user=User::getCurrentUser();
            $vendor=$user->vendor;
            $query->andWhere(['vendorDrivers.vendor_id'=>$vendor->id]);
        }

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
            'can_speak_english' => $this->can_speak_english,
            'is_approved' => $this->is_approved,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }

    public function afterSaveDriver()
    {
        $this->saveDriverRole();
    }

    private function saveDriverRole(){
        User::assignRole($this->user_id,self::DRIVER_ROLE);
    }

    public function attributeLabels()
    {
        $attributeLabels=parent::attributeLabels();

        return ArrayHelper::merge($attributeLabels,[
            'user_id'=>'User'
        ]);


    }

}
