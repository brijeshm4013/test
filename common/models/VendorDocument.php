<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vendor_document".
 *
 * @property integer $id
 * @property integer $vendor_id
 * @property integer $document_type_id
 * @property string $file
 * @property string $ext
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property Vendor $vendor
 */
class VendorDocument extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor_document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'document_type_id', 'file', 'create_at'], 'required'],
            [['vendor_id', 'document_type_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['file'], 'string', 'max' => 45],
            [['ext'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vendor_id' => 'Vendor ID',
            'document_type_id' => 'Document Type ID',
            'file' => 'File',
            'ext' => 'Ext',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['id' => 'vendor_id']);
    }
}
