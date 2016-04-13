<?php

namespace backend\modules\userManagement\models;

use Yii;

/**
 * This is the model class for table "user_visit_log".
 *
 * @property integer $id
 * @property string $token
 * @property string $ip
 * @property string $language
 * @property string $browser
 * @property string $os
 * @property string $user_agent
 * @property integer $user_id
 * @property integer $visit_time
 *
 * @property User $user
 */
class UserVisitLog extends \webvimark\modules\UserManagement\models\UserVisitLog
{

}
