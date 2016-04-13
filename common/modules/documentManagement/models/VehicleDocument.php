<?php

namespace common\modules\documentManagement\models;

use common\models\VehicleDocument as VehicleDocumentModel;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/**
 * VehicleDocument represents the model behind the search form about `common\models\VehicleDocument`.
 *
 *
 * @property DocumentType $documentType
 *
 */
class VehicleDocument extends VehicleDocumentModel
{

    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_id', 'document_type_id', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['file'], 'required','on'=>[self::SCENARIO_CREATE]],
            [['vehicle_id', 'document_type_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['file'], 'string', 'max' => 45],
            [['ext'], 'string', 'max' => 5],
            ['file', 'file', 'extensions' => ['png', 'jpg', 'gif'],],
            [['vehicle_id','document_type_id',], 'unique', 'targetAttribute' =>['document_type_id',],'message'=>"Document type already exist",  'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentType()
    {
        return $this->hasOne(DocumentType::className(), ['id' => 'document_type_id']);
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        $attributeLabels=parent::attributeLabels();
        return ArrayHelper::merge($attributeLabels,[
            'vehicle_id' => 'Vehicle',
            'document_type_id'=>'Document Type'
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

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'vehicle_id' => $this->vehicle_id,
            'document_type_id' => $this->document_type_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'ext', $this->ext]);

        return $dataProvider;
    }
}
