<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_page".
 *
 * @property integer $id
 * @property string $page_type
 * @property string $title
 * @property string $seo_title
 * @property string $page_content
 * @property string $meta_key_words
 * @property string $meta_descriptions
 * @property integer $is_active
 * @property string $create_at
 * @property string $update_at
 */
class SitePage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_type', 'title', 'seo_title', 'page_content', 'meta_key_words', 'meta_descriptions', 'is_active', 'create_at'], 'required'],
            [['page_type', 'page_content', 'meta_key_words', 'meta_descriptions'], 'string'],
            [['is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['title', 'seo_title'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_type' => 'Page Type',
            'title' => 'Title',
            'seo_title' => 'Seo Title',
            'page_content' => 'Page Content',
            'meta_key_words' => 'Meta Key Words',
            'meta_descriptions' => 'Meta Descriptions',
            'is_active' => 'Is Active',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
