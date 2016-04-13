<?php

namespace common\modules\vendorManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\VendorDriver as VendorDriverModel;

/**
 * VendorDriver represents the model behind the search form about `common\models\VendorDriver`.
 */
class VendorDriver extends VendorDriverModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'driver_id'], 'required'],
            [['vendor_id', 'driver_id'], 'integer']
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
        $query = VendorDriverModel::find();

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
            'vendor_id' => $this->vendor_id,
            'driver_id' => $this->driver_id,
        ]);

        return $dataProvider;
    }
}
