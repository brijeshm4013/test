<?php
namespace backend\modules\userManagement\components;

class AbstractItemEvent extends \webvimark\modules\UserManagement\components\AbstractItemEvent
{
    public $parentName;
    public $childrenNames;
    public $throwException = false;
}
