<?php

namespace common\modules\documentManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DocumentType as DocumentTypeModel;

/**
 * DocumentType represents the model behind the search form about `common\models\DocumentType`.
 */
class DocumentType extends DocumentTypeModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';


    /**
     * Document Type
     *
     */
    const DOCUMENT_TYPE_VENDOR='Vendor';
    const DOCUMENT_TYPE_VEHICLE='Vehicle';
    const DOCUMENT_TYPE_DRIVER='Driver';
    const DOCUMENT_TYPE_OTHER='Other';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document_title', 'document_type'], 'required','on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['document_title',], 'unique', 'targetAttribute' =>['document_title',],'message'=>"Document type '{value}' already exist",  'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['document_title'], 'string', 'max' => 45],
            [['document_type'], 'string'],
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

        $query->andFilterWhere(['like', 'document_type', $this->document_type])
            ->andFilterWhere(['like', 'document_title', $this->document_title]);

        return $dataProvider;
    }

    public static function getAllDocumentType(){
        return [
            self::DOCUMENT_TYPE_VENDOR=>self::DOCUMENT_TYPE_VENDOR,
            self::DOCUMENT_TYPE_VEHICLE=>self::DOCUMENT_TYPE_VEHICLE,
            self::DOCUMENT_TYPE_DRIVER=>self::DOCUMENT_TYPE_DRIVER,
            self::DOCUMENT_TYPE_OTHER=>self::DOCUMENT_TYPE_OTHER,
        ];
    }

    public static function getAllDocuments($type){
        return self::findAll(['document_type'=>$type]);
    }
}
