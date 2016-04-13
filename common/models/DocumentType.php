<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "document_type".
 *
 * @property integer $id
 * @property string $document_type
 * @property string $document_title
 */
class DocumentType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document_type', 'document_title'], 'required'],
            [['document_type'], 'string'],
            [['document_title'], 'string', 'max' => 45],
            [['document_title'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'document_type' => 'Document Type',
            'document_title' => 'Document Title',
        ];
    }
}
