<?php

namespace common\models;

use common\modules\vendorManagement\models\Driver;
use common\modules\vendorManagement\models\Vendor;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property integer $email_confirmed
 * @property string $auth_key
 * @property string $password_hash
 * @property string $confirmation_token
 * @property string $bind_to_ip
 * @property string $registration_ip
 * @property integer $status
 * @property integer $superadmin
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Customer $customer
 * @property Driver $driver
 * @property OperationUser $operationUser
 * @property Vendor $vendor
 */
class User extends \webvimark\modules\UserManagement\models\User
{

    CONST SCENARIO_NEW_USER='newUser';
    CONST SCENARIO_CHANGE_PASS='changePassword';
    CONST SCENARIO_UPDATE_USER='updateUser';
    public function rules()
    {
        return [
            ['username', 'required','on'=>[self::SCENARIO_NEW_USER,self::SCENARIO_UPDATE_USER]],
            ['username', 'unique','on'=>[self::SCENARIO_NEW_USER, self::SCENARIO_CHANGE_PASS],'message'=>"{attribute} already exist"],
            ['repeat_password', 'required', 'on'=>[self::SCENARIO_NEW_USER, self::SCENARIO_CHANGE_PASS]],
            ['password', 'required', 'on'=>[self::SCENARIO_NEW_USER, self::SCENARIO_CHANGE_PASS]],
            ['password', 'string', 'max' => 255, 'on'=>[self::SCENARIO_NEW_USER, self::SCENARIO_CHANGE_PASS]],
            ['password', 'trim', 'on'=>[self::SCENARIO_NEW_USER, self::SCENARIO_CHANGE_PASS]],
            [['status', 'email_confirmed'], 'integer'],
            ['email', 'email','on'=>[self::SCENARIO_NEW_USER, self::SCENARIO_CHANGE_PASS]],
            ['email', 'unique','on'=>[self::SCENARIO_NEW_USER,self::SCENARIO_UPDATE_USER],'message'=>"User email '{value}' already exist"],
            ['username', 'trim'],
            [['username'],'number','message'=>'Invalid Phone Number'],
            ['username', 'string','min' =>10, 'max'=>10],
            ['email', 'validateEmailConfirmedUnique'],
            ['bind_to_ip', 'validateBindToIp'],
            ['bind_to_ip', 'trim'],
            ['bind_to_ip', 'string', 'max' => 255],
            ['repeat_password', 'compare', 'compareAttribute'=>'password','on'=>[self::SCENARIO_NEW_USER, self::SCENARIO_CHANGE_PASS]],
        ];
    }

    public function attributeLabels()
    {
        $attributeLabels=parent::attributeLabels();
        return ArrayHelper::merge($attributeLabels,
                    [
                        'username'=>'Phone Number',
                        'repeat_password'=>'Repeat Password'
                    ]
            );

    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperationUser()
    {
        return $this->hasOne(OperationUser::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['user_id' => 'id']);
    }


}
