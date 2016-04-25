<?php
namespace backend\modules\userManagement\components;

use backend\modules\userManagement\UserManagementModule;
use common\models\User;
use Yii;

/**
 * Class GhostNav
 *
 * Show only those items in navigation menu which user can see
 * If item has no "visible" key, than "visible"=>User::canRoute($item['url') will be added
 *
 * @package webvimark\modules\UserManagement\components
 */
class GhostMenu extends \webvimark\modules\UserManagement\components\GhostMenu
{


    public static function getAdminMenu(){

        return [
//            [
//                'label' => '<i class="fa fa-dashboard fa-fw"></i> Dashboard',
//                'url'=>['/'],
//            ],
            [
                'url'=>'#',
                'submenuTemplate'=> "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
                'label' => '<i class="fa fa-sitemap fa-fw"></i> Booking Management<span class="fa arrow"></span>',
                'items'=>self::bookingManagementMenuItems(),
            ],
            [
                'url'=>'#',
                'submenuTemplate'=> "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
                'label' => '<i class="fa fa-sitemap fa-fw"></i> User Management<span class="fa arrow"></span>',
                'items'=>self::userManagementMenuItems(),
            ],

            [
                'url'=>'#',
                'submenuTemplate'=> "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
                'label' => '<i class="fa fa-sitemap fa-fw"></i> Site Page Management<span class="fa arrow"></span>',
                'items'=>self::sitePageManagementMenuItems(),
            ],

            [
                'url'=>'#',
                'submenuTemplate'=> "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
                'label' => '<i class="fa fa-sitemap fa-fw"></i> City Management<span class="fa arrow"></span>',
                'items'=>self::cityManagementMenuItems(),
            ],
            [
                'url'=>'#',
                'submenuTemplate'=> "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
                'label' => '<i class="fa fa-sitemap fa-fw"></i> Vendor Management<span class="fa arrow"></span>',
                'items'=>self::vendorManagementMenuItems(),
            ],

            [
                'url'=>'#',
                'submenuTemplate'=> "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
                'label' => '<i class="fa fa-sitemap fa-fw"></i> Vehicle Management<span class="fa arrow"></span>',
                'items'=>self::vehicleManagementMenuItems(),
            ],
            [
                'url'=>'#',
                'submenuTemplate'=> "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
                'label' => '<i class="fa fa-sitemap fa-fw"></i> Document Management<span class="fa arrow"></span>',
                'items'=>self::documentManagementMenuItems(),
            ],

            [
                'url'=>'#',
                'submenuTemplate'=> "\n<ul class='nav nav-second-level'>\n{items}\n</ul>\n",
                'label' => '<i class="fa fa-sitemap fa-fw"></i> Profile Management<span class="fa arrow"></span>',
                'items'=>self::profileManagementMenuItems(),
            ],
            [
                'label' => '<i class="fa fa-logout fa-fw"></i> ' . UserManagementModule::t('back', 'Logout ('.Yii::$app->user->identity->username.')'),
                'url' => ['/user-management/auth/logout']
            ],
        ];
    }

    /**
     * For User Management Menu Items
     *
     * @return array
     */
    public static function userManagementMenuItems()
    {
        $menu=[
            //User Management
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Users'), 'url' => ['/user-management/user/index']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Roles'), 'url' => ['/user-management/role/index']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Permissions'), 'url' => ['/user-management/permission/index']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Permission groups'), 'url' => ['/user-management/auth-item-group/index']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Visit log'), 'url' => ['/user-management/user-visit-log/index']],
        ];

        return $menu;
    }

    /**
     * For User Management Menu Items
     *
     * @return array
     */
    public static function cityManagementMenuItems()
    {
        $menu=[
            //City Management
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'States'), 'url' => ['/city-management/state']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Cities'), 'url' => ['/city-management/city']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Routes'), 'url' => ['/city-management/route']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Region'), 'url' => ['/city-management/region']],
        ];

        return $menu;
    }

    /**
     * For Booing Management Menu Items
     *
     * @return array
     */
    public static function bookingManagementMenuItems()
    {
        $menu=[
            //Booking Management
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Bookings'), 'url' => ['/booking-management/booking/index']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Booking Type'), 'url' => ['/booking-management/booking-type']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Booking Alert'), 'url' => ['/booking-management/booking-alert']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Booking Route Rate'), 'url' => ['/booking-management/booking-route-rate']],
        ];
        return $menu;
    }

    /**
     * For Vendor Management Menu Items
     *
     * @return array
     */
    public static function vendorManagementMenuItems()
    {
        $menu=[
            //Vendor Management
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Vendors'), 'url' => ['/vendor-management']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Drivers'), 'url' => ['/vendor-management/driver']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Vendor Vehicles'), 'url' => ['/vendor-management/vendor-vehicle']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Vendor One Way Rates'), 'url' => ['/vendor-management/vendor-one-way-rate']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Vendor Round Trip Rates'), 'url' => ['/vendor-management/vendor-round-trip-rate']],

        ];
        return $menu;
    }

    /**
     * For Vehicle Management Menu Items
     *
     * @return array
     */
    public static function vehicleManagementMenuItems()
    {
        $menu=[
            //Vehicle Management
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Vehicle Categories'), 'url' => ['/vehicle-management/vehicle-category']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Vehicle Models'), 'url' => ['/vehicle-management/vehicle-model']],
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Vehicles'), 'url' => ['/vehicle-management/vehicle']],
        ];
        return $menu;
    }

    /**
     * For Document Management Menu Items
     *
     * @return array
     */
    public static function documentManagementMenuItems()
    {
        $menu=[
            //Document Management
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Document Types'), 'url' => ['/document-management/document-type']],
            //['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Vehicle Documents'), 'url' => ['/document-management/vehicle-document']],
            //['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Driver Documents'), 'url' => ['/document-management/driver-document']],

        ];
        return $menu;
    }

    /**
     * For Profile Management Menu Items
     *
     * @return array
     */
    public static function profileManagementMenuItems()
    {
        $menu=[
            //Profile Management
            [
                'label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'My Profile'),
                'url' =>self::getProfileUrl() ,
            ],
            [
                'label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'My Vehicles'),
                'url' =>['/vendor-profile-management/vehicle/index'],
                'visible'=>User::hasRole('vendor',false)
            ],
            [
                'label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'My Drivers'),
                'url' =>['/vendor-profile-management/driver/index'],
                'visible'=>User::hasRole('vendor',false)
            ],
            [
                'label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'My Bookings'),
                'url' =>['/vendor-profile-management/vendor-profile/index'],
                'visible'=>User::hasRole('vendor',false)
            ],

            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Change Password'), 'url' => ['/user-management/auth/change-own-password']],

        ];
        return $menu;
    }

    /**
     * For Site Page Management Menu Items
     *
     * @return array
     */
    public static function sitePageManagementMenuItems()
    {
        $menu=[
            ['label' => '<i class="fa  fa-fw"></i> ' . UserManagementModule::t('back', 'Site Pages'), 'url' => ['/site-page-management/site-page']],
        ];
        return $menu;
    }


    /**
     * This function return the current user profile url
     *
     * @return array
     */
    public static function getProfileUrl(){
        if(User::hasRole('vendor',false)){
            return ['/vendor-profile-management/vendor/index'];
        }
        return ['/vendor-profile-management/vendor/index'];

    }


} 