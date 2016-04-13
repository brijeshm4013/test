<?php
namespace backend\modules\userManagement\components;

use Yii;

/**
 * Parent class for User model
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $confirmation_token
 * @property integer $status
 * @property integer $superadmin
 * @property integer $created_at
 * @property integer $updated_at
 */
abstract class UserIdentity extends \webvimark\modules\UserManagement\components\UserIdentity
{

}