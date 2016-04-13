<?php

namespace common\modules\documentManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DriverDocument as DriverDocumentModel;
use yii\data\ArrayDataProvider;

/**
 * DriverDocument represents the model behind the search form about `common\models\DriverDocument`.
 *
 * @property DocumentType $documentType
 */
class DriverDocument extends DriverDocumentModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'document_type_id', 'create_at'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['file'], 'required','on'=>[self::SCENARIO_CREATE]],
            [['driver_id', 'document_type_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['file'], 'string', 'max' => 45],
            [['ext'], 'string', 'max' => 5],
            ['file', 'file', 'extensions' => ['png', 'jpg', 'gif'],'maxSize' => 1024 * 1024 * 10 ],
            [['driver_id','document_type_id',], 'unique', 'targetAttribute' =>['driver_id','document_type_id',],'message'=>"Document type already exist",  'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],

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

        $da=new ArrayDataProvider();

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'driver_id' => $this->driver_id,
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
