<?php

namespace common\modules\sitePageManagement\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SitePage as SitePageModel;

/**
 * SitePage represents the model behind the search form about `common\models\SitePage`.
 */
class SitePage extends SitePageModel
{
    CONST SCENARIO_CREATE='_sc_create';
    CONST SCENARIO_UPDATE='_sc_update';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_type', 'title', 'seo_title', 'page_content', 'meta_key_words', 'meta_descriptions', 'is_active', 'create_at'], 'required', 'on'=>[self::SCENARIO_CREATE,self::SCENARIO_UPDATE]],
            [['page_type', 'page_content', 'meta_key_words', 'meta_descriptions'], 'string'],
            [['is_active'], 'integer'],
            [['title'],'unique','message'=>'Page with this title already exist'],
            [['create_at', 'update_at'], 'safe'],
            [['title', 'seo_title'], 'string', 'max' => 45]
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
            'is_active' => $this->is_active,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'page_type', $this->page_type])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'page_content', $this->page_content])
            ->andFilterWhere(['like', 'meta_key_words', $this->meta_key_words])
            ->andFilterWhere(['like', 'meta_descriptions', $this->meta_descriptions]);

        return $dataProvider;
    }
}
