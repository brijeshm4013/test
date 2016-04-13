<?php
namespace backend\modules\userManagement\components;

/**
 * Class GhostNav
 *
 * Show only those items in navigation menu which user can see
 * If item has no "visible" key, than "visible"=>User::canRoute($item['url') will be added
 *
 * @package webvimark\modules\UserManagement\components
 */
class GhostNav extends \webvimark\modules\UserManagement\components\GhostNav
{

} 
