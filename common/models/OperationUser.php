<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "operation_user".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $email
 * @property string $create_at
 * @property string $update_at
 * @property integer $is_active
 *
 * @property User $user
 */
class OperationUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operation_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'email', 'create_at'], 'required'],
            [['user_id', 'is_active'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'email'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'email' => 'Email',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
