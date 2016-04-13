<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vendor_document_type".
 *
 * @property integer $id
 * @property string $document_title
 *
 * @property VendorDocument[] $vendorDocuments
 */
class VendorDocumentType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor_document_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document_title'], 'required'],
            [['document_title'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'document_title' => 'Document Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorDocuments()
    {
        return $this->hasMany(VendorDocument::className(), ['vendor_document_type_id' => 'id']);
    }
}
