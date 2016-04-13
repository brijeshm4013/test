<?php

namespace backend\modules\userManagement\controllers;

use Yii;
use backend\modules\userManagement\models\UserVisitLog;
use backend\modules\userManagement\models\search\UserVisitLogSearch;
use backend\components\AdminDefaultController;

/**
 * UserVisitLogController implements the CRUD actions for UserVisitLog model.
 */
class UserVisitLogController extends AdminDefaultController
{
	/**
	 * @var UserVisitLog
	 */
	public $modelClass = 'webvimark\modules\UserManagement\models\UserVisitLog';

	/**
	 * @var UserVisitLogSearch
	 */
	public $modelSearchClass = 'webvimark\modules\UserManagement\models\search\UserVisitLogSearch';

	public $enableOnlyActions = ['index', 'view', 'grid-page-size'];
}
