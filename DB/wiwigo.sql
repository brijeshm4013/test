-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 11:50 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiwigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('MMT', 3, 1456840202),
('OPERATOR_USER', 2, 1456483652),
('SuperAdmin', 1, 1455774030),
('vendor', 4, 1457593222),
('vendor', 7, 1457591351);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `group_code` varchar(64) DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `group_code`, `rule_name`, `type`, `description`, `data`, `created_at`, `updated_at`) VALUES
('/*', NULL, NULL, 3, NULL, NULL, 1455546499, 1455546499),
('/booking-management/*', NULL, NULL, 3, NULL, NULL, 1457008268, 1457008268),
('/booking-management/booking-alert/*', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-alert/create', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/booking-management/booking-alert/delete', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-alert/index', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/booking-management/booking-alert/update', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/booking-management/booking-alert/view', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/booking-management/booking-route-cities/*', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-route-cities/create', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-route-cities/delete', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-route-cities/index', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-route-cities/update', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-route-cities/view', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-status/*', NULL, NULL, 3, NULL, NULL, 1457008268, 1457008268),
('/booking-management/booking-status/create', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-status/delete', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-status/index', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-status/update', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-status/view', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking-type/*', NULL, NULL, 3, NULL, NULL, 1457008268, 1457008268),
('/booking-management/booking-type/create', NULL, NULL, 3, NULL, NULL, 1457008268, 1457008268),
('/booking-management/booking-type/delete', NULL, NULL, 3, NULL, NULL, 1457008268, 1457008268),
('/booking-management/booking-type/index', NULL, NULL, 3, NULL, NULL, 1457008268, 1457008268),
('/booking-management/booking-type/update', NULL, NULL, 3, NULL, NULL, 1457008268, 1457008268),
('/booking-management/booking-type/view', NULL, NULL, 3, NULL, NULL, 1457008268, 1457008268),
('/booking-management/booking/*', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking/create', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking/delete', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking/index', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking/update', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/booking-management/booking/view', NULL, NULL, 3, NULL, NULL, 1457008269, 1457008269),
('/city-management/*', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/city/*', NULL, NULL, 3, NULL, NULL, 1456482935, 1456482935),
('/city-management/city/create', NULL, NULL, 3, NULL, NULL, 1456482935, 1456482935),
('/city-management/city/index', NULL, NULL, 3, NULL, NULL, 1456482935, 1456482935),
('/city-management/city/update', NULL, NULL, 3, NULL, NULL, 1456482935, 1456482935),
('/city-management/city/view', NULL, NULL, 3, NULL, NULL, 1456482935, 1456482935),
('/city-management/region-state-city/*', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region-state-city/create', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region-state-city/delete', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region-state-city/index', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region-state-city/update', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region-state-city/view', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region/*', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region/create', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region/delete', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region/index', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region/update', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/region/view', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/city-management/route/*', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/route/create', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/route/index', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/route/update', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/route/view', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/state/*', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/state/create', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/state/index', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/state/update', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/city-management/state/view', NULL, NULL, 3, NULL, NULL, 1456482934, 1456482934),
('/datecontrol/*', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/datecontrol/parse/*', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/datecontrol/parse/convert', NULL, NULL, 3, NULL, NULL, 1457008270, 1457008270),
('/gii/*', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/gii/default/*', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/gii/default/action', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/gii/default/diff', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/gii/default/index', NULL, NULL, 3, NULL, NULL, 1455861916, 1455861916),
('/gii/default/preview', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/gii/default/view', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/gridview/*', NULL, NULL, 3, NULL, NULL, 1455861916, 1455861916),
('/gridview/export/*', NULL, NULL, 3, NULL, NULL, 1455861916, 1455861916),
('/gridview/export/download', NULL, NULL, 3, NULL, NULL, 1455861916, 1455861916),
('/site/*', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/site/error', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/site/index', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/site/login', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/site/logout', NULL, NULL, 3, NULL, NULL, 1455861915, 1455861915),
('/user-management/*', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/*', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/bulk-activate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/bulk-deactivate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/bulk-delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/create', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/grid-page-size', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/grid-sort', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/index', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/toggle-attribute', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/update', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth-item-group/view', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/*', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/captcha', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/change-own-password', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/confirm-email', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/confirm-email-receive', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/confirm-registration-email', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/login', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/logout', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/password-recovery', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/password-recovery-receive', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/auth/registration', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/*', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/bulk-activate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/bulk-deactivate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/bulk-delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/create', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/grid-page-size', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/grid-sort', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/index', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/refresh-routes', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/set-child-permissions', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/set-child-routes', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/toggle-attribute', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/update', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/permission/view', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/*', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/bulk-activate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/bulk-deactivate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/bulk-delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/create', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/grid-page-size', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/grid-sort', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/index', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/set-child-permissions', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/set-child-roles', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/toggle-attribute', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/update', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/role/view', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-permission/*', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-permission/set', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-permission/set-roles', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/*', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/bulk-activate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/bulk-deactivate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/bulk-delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/create', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/grid-page-size', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/grid-sort', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/index', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/toggle-attribute', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/update', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user-visit-log/view', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/*', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/bulk-activate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/bulk-deactivate', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/bulk-delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/change-password', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/create', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/delete', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/grid-page-size', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/grid-sort', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/index', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/toggle-attribute', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/update', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('/user-management/user/view', NULL, NULL, 3, NULL, NULL, 1455546500, 1455546500),
('assignRolesToUsers', 'userManagement', NULL, 2, 'Assign roles to users', NULL, 1455546500, 1455546500),
('bindUserToIp', 'userManagement', NULL, 2, 'Bind user to IP', NULL, 1455546500, 1455546500),
('changeOwnPassword', 'userCommonPermissions', NULL, 2, 'Change own password', NULL, 1455546500, 1455546500),
('changeUserPassword', 'userManagement', NULL, 2, 'Change user password', NULL, 1455546500, 1455546500),
('commonPermission', NULL, NULL, 2, 'Common permission', NULL, 1455546494, 1455546494),
('createUsers', 'userManagement', NULL, 2, 'Create users', NULL, 1455546500, 1455546500),
('deleteUsers', 'userManagement', NULL, 2, 'Delete users', NULL, 1455546500, 1455546500),
('editUserEmail', 'userManagement', NULL, 2, 'Edit user email', NULL, 1455546500, 1455546500),
('editUsers', 'userManagement', NULL, 2, 'Edit users', NULL, 1455546500, 1455546500),
('MMT', NULL, NULL, 1, 'MMT USER', NULL, 1456839963, 1456839963),
('mMTUserPermission', 'MMT_USER_PERMISION', NULL, 2, 'MMT User Permission', NULL, 1456841278, 1456841278),
('OPERATOR_USER', NULL, NULL, 1, 'Operation User', NULL, 1456483305, 1456489099),
('SuperAdmin', NULL, NULL, 1, 'Super Admin', NULL, 1455546500, 1456895971),
('vendor', NULL, NULL, 1, 'Vendor', NULL, 1457098730, 1457098730),
('viewRegistrationIp', 'userManagement', NULL, 2, 'View registration IP', NULL, 1455546500, 1455546500),
('viewUserEmail', 'userManagement', NULL, 2, 'View user email', NULL, 1455546500, 1455546500),
('viewUserRoles', 'userManagement', NULL, 2, 'View user roles', NULL, 1455546500, 1455546500),
('viewUsers', 'userManagement', NULL, 2, 'View users', NULL, 1455546500, 1455546500),
('viewVisitLog', 'userManagement', NULL, 2, 'View visit log', NULL, 1455546500, 1455546500);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('assignRolesToUsers', 'viewUserRoles'),
('assignRolesToUsers', 'viewUsers'),
('changeOwnPassword', '/city-management/*'),
('changeOwnPassword', '/city-management/route/*'),
('changeOwnPassword', '/city-management/state/*'),
('changeOwnPassword', '/user-management/auth/change-own-password'),
('changeUserPassword', '/user-management/user/change-password'),
('changeUserPassword', 'viewUsers'),
('createUsers', '/user-management/user/create'),
('createUsers', 'viewUsers'),
('deleteUsers', '/user-management/user/bulk-delete'),
('deleteUsers', '/user-management/user/delete'),
('deleteUsers', 'viewUsers'),
('editUserEmail', 'viewUserEmail'),
('editUsers', '/city-management/*'),
('editUsers', 'changeOwnPassword'),
('MMT', 'changeOwnPassword'),
('MMT', 'mMTUserPermission'),
('mMTUserPermission', '/city-management/*'),
('mMTUserPermission', '/site/*'),
('mMTUserPermission', '/site/index'),
('OPERATOR_USER', 'changeOwnPassword'),
('OPERATOR_USER', 'changeUserPassword'),
('OPERATOR_USER', 'createUsers'),
('OPERATOR_USER', 'editUserEmail'),
('OPERATOR_USER', 'editUsers'),
('OPERATOR_USER', 'viewRegistrationIp'),
('OPERATOR_USER', 'viewUserEmail'),
('OPERATOR_USER', 'viewUserRoles'),
('OPERATOR_USER', 'viewUsers'),
('OPERATOR_USER', 'viewVisitLog'),
('SuperAdmin', 'assignRolesToUsers'),
('SuperAdmin', 'bindUserToIp'),
('SuperAdmin', 'changeOwnPassword'),
('SuperAdmin', 'changeUserPassword'),
('SuperAdmin', 'createUsers'),
('SuperAdmin', 'deleteUsers'),
('SuperAdmin', 'editUserEmail'),
('SuperAdmin', 'editUsers'),
('SuperAdmin', 'viewRegistrationIp'),
('SuperAdmin', 'viewUserEmail'),
('SuperAdmin', 'viewUsers'),
('SuperAdmin', 'viewVisitLog'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('viewUsers', '/user-management/user/view'),
('viewVisitLog', '/user-management/user-visit-log/grid-page-size'),
('viewVisitLog', '/user-management/user-visit-log/index'),
('viewVisitLog', '/user-management/user-visit-log/view');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_group`
--

CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('MMT_USER_PERMISION', 'MMT USER PERMISION', 1456840281, 1456840294),
('operationManagement', 'Operation management', 1456484065, 1456484065),
('userCommonPermissions', 'User common permission', 1455546500, 1456311166),
('userManagement', 'User management', 1455546500, 1455546500);

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `booking_type_id` int(11) NOT NULL,
  `price_engine_id` int(11) NOT NULL,
  `booking_status_id` int(11) NOT NULL,
  `vendor_driver_id` int(11) DEFAULT NULL,
  `vendor_vehicle_id` int(11) DEFAULT NULL,
  `customer_rate` float(7,3) DEFAULT NULL,
  `vendor_rate` float(7,3) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL COMMENT 'if booking is one way then it wil be NULL',
  `pickup_time` time NOT NULL,
  `pickup_address` varchar(255) DEFAULT NULL,
  `booking_remarks` text,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1',
  `is_cancel_by_ops` tinyint(1) DEFAULT '0',
  `is_cancel_by_cust` tinyint(1) DEFAULT '0',
  `is_cancel_by_vendor` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_alert`
--

CREATE TABLE `booking_alert` (
  `id` int(11) NOT NULL,
  `alert_title` varchar(255) NOT NULL,
  `alert_msg` varchar(255) NOT NULL,
  `alert_time_in_minutes` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_alert`
--

INSERT INTO `booking_alert` (`id`, `alert_title`, `alert_msg`, `alert_time_in_minutes`, `create_at`, `update_at`, `is_active`) VALUES
(1, 'This is Alert 1', 'This is test Message', 123, '2016-03-03 18:30:17', '2016-03-03 18:30:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking_alert_send`
--

CREATE TABLE `booking_alert_send` (
  `id` int(11) NOT NULL,
  `booking_id` bigint(20) NOT NULL,
  `booking_alert_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_history`
--

CREATE TABLE `booking_history` (
  `id` bigint(20) NOT NULL,
  `create_by_user_id` int(11) NOT NULL,
  `booking_id` bigint(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price_engine_id` int(11) NOT NULL,
  `booking_type_id` int(11) NOT NULL,
  `booking_status_id` int(11) NOT NULL,
  `vendor_driver_id` int(11) DEFAULT NULL,
  `vendor_vehicle_id` int(11) DEFAULT NULL,
  `customer_rate` float(7,3) DEFAULT NULL,
  `vendor_rate` float(7,3) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL COMMENT 'if booking is one way then it wil be NULL',
  `pickup_time` time NOT NULL,
  `pickup_address` varchar(255) DEFAULT NULL,
  `booking_remarks` text,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1',
  `is_cancel_by_ops` tinyint(1) DEFAULT '0',
  `is_cancel_by_cust` tinyint(1) DEFAULT '0',
  `is_cancel_by_vendor` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_route_cities`
--

CREATE TABLE `booking_route_cities` (
  `id` int(11) NOT NULL,
  `booking_id` bigint(20) NOT NULL,
  `source_city_id` int(7) UNSIGNED NOT NULL,
  `destination_city_id` int(7) UNSIGNED NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_status`
--

CREATE TABLE `booking_status` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `default_remark` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_type`
--

CREATE TABLE `booking_type` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(7) UNSIGNED NOT NULL,
  `state_id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `std_code` int(5) DEFAULT NULL,
  `default_pincode` int(6) UNSIGNED DEFAULT NULL COMMENT 'Default Pincode of the City',
  `city_class_type` char(1) DEFAULT NULL COMMENT 'City Class(A,B,O=>Others)',
  `default_display` int(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `name`, `std_code`, `default_pincode`, `city_class_type`, `default_display`, `is_active`) VALUES
(1, 28, 'Chandigarh', 172, 140133, 'B', 1, 1),
(3, 13, 'Gurgaon', 124, 122001, NULL, 2, 1),
(4, 28, 'Jalandhar', 181, 144410, NULL, 1, 1),
(5, 28, 'Ludhiana', 161, 142036, NULL, 1, 1),
(7, 33, 'Lucknow', 532, 227125, NULL, 1, 1),
(8, 12, 'Ahmedabad', 79, 382150, 'B', 1, 1),
(11, 18, 'Kochi', 484, 682022, 'B', 0, 1),
(12, 17, 'Bengaluru', 80, 560001, 'A', 2, 1),
(13, 31, 'Chennai', 44, 600036, 'A', 2, 1),
(14, 2, 'Hyderabad', 40, 500076, 'B', 2, 1),
(15, 21, 'Mumbai', 22, 400059, 'A', 2, 1),
(16, 21, 'Pune', 20, 412101, 'B', 2, 1),
(17, 32, 'Agartala', 381, 799211, NULL, 0, 1),
(18, 24, 'Aizwal', 389, 796190, NULL, 0, 1),
(19, 21, 'Akola', 724, 444001, NULL, 0, 1),
(20, 33, 'Allahabad', 532, 212106, NULL, 1, 1),
(21, 13, 'Ambala', 171, 134203, NULL, 0, 1),
(22, 28, 'Amritsar', 183, 143601, NULL, 1, 1),
(23, 2, 'Anantapur', 8554, 515154, NULL, 0, 1),
(24, 35, 'Asansol', 341, NULL, NULL, 0, 1),
(25, 26, 'Balasore', 6782, NULL, NULL, 0, 1),
(27, 17, 'Belgaum', 831, 591147, NULL, 1, 1),
(28, 12, 'Bharuch', 2642, 392180, NULL, 0, 1),
(29, 12, 'Bhavnagar', 278, 364275, NULL, 0, 1),
(30, 29, 'Bhilwara', 1482, 311001, NULL, 0, 1),
(32, 17, 'Bijapur', 8352, 586111, NULL, 0, 1),
(33, 20, 'Chhindwara', 7162, 480559, NULL, 0, 1),
(34, 31, 'Coimbatore', 422, 642109, 'B', 1, 1),
(35, 2, 'Cuddapah', 8562, 516003, NULL, 0, 1),
(36, 16, 'Dhanbad', 326, 828122, NULL, 0, 1),
(37, 25, 'Dimapur', 3862, 797106, NULL, 0, 1),
(38, 35, 'Durgapur', 343, 123456, NULL, 0, 1),
(39, 13, 'Faridabad', 129, 121101, NULL, 2, 1),
(40, 30, 'Gangtok', 3592, 737134, NULL, 0, 1),
(41, 33, 'Ghaziabad', 120, 201003, NULL, 2, 1),
(42, 17, 'Gulbarga', 8472, 585323, NULL, 0, 1),
(43, 20, 'Gwalior', 751, 474008, NULL, 0, 1),
(44, 16, 'Hazaribagh', 6546, 825411, NULL, 0, 1),
(45, 13, 'Hissar', 1662, 125047, NULL, 0, 1),
(46, 17, 'Hospet', 8394, 584134, NULL, 0, 1),
(47, 17, 'Hubli', 836, 580020, NULL, 1, 1),
(48, 20, 'Indore', 731, 473443, NULL, 1, 1),
(49, 29, 'Jaipur', 141, 303107, 'B', 1, 1),
(50, 29, 'Jalgaon', 2908, 424101, NULL, 0, 1),
(51, 12, 'Jamnagar', 288, 360531, NULL, 0, 1),
(52, 26, 'Jeypore', 764, NULL, NULL, 0, 1),
(53, 29, 'Jodhpur', 291, 342006, NULL, 1, 1),
(54, 12, 'Junagadh', 285, 362620, NULL, 0, 1),
(55, 14, 'Kangra', 1892, 176036, NULL, 0, 1),
(56, 33, 'Kanpur', 512, 208011, NULL, 1, 1),
(57, 20, 'Khargone', 7282, 451111, NULL, 0, 1),
(58, 35, 'Kolkata', 33, 700047, 'B', 2, 1),
(59, 18, 'Kottayam', 481, 686533, NULL, 0, 1),
(61, 31, 'Madurai', 452, 625207, NULL, 1, 1),
(62, 35, 'Malda', 3512, 732102, NULL, 0, 1),
(63, 17, 'Mangalore', 824, 574172, NULL, 1, 1),
(64, 28, 'Mohali', 172, 160062, NULL, 1, 1),
(65, 17, 'Mysore', 821, 571315, NULL, 1, 1),
(66, 31, 'Nagercoil', 4652, NULL, NULL, 0, 1),
(67, 21, 'Nagpur', 712, 441302, NULL, 1, 1),
(68, 21, 'Nashik', 253, 422606, NULL, 1, 1),
(69, 2, 'Nellore', 861, 524343, NULL, 0, 1),
(70, 3, 'Nirjuli', 360, NULL, NULL, 0, 1),
(71, 33, 'Noida', 120, 201203, NULL, 2, 1),
(72, 18, 'Palakkad', 491, 679503, NULL, 0, 1),
(73, 11, 'Panaji', 832, 403001, NULL, 0, 1),
(74, 28, 'Pathankot', 186, NULL, NULL, 0, 1),
(75, 5, 'Patna', 612, 801110, NULL, 1, 1),
(76, 18, 'Pondicherry', 413, 533000, NULL, 1, 1),
(77, 7, 'Raipur', 771, 493101, NULL, 1, 1),
(78, 12, 'Rajkot', 281, 363641, NULL, 1, 1),
(79, 20, 'Ratlam', 7412, 457550, NULL, 0, 1),
(80, 33, 'Renukoot', 5446, NULL, NULL, 0, 1),
(81, 13, 'Rohtak', 1262, 124142, NULL, 0, 1),
(82, 26, 'Rourkela', 661, NULL, NULL, 0, 1),
(83, 33, 'Saharanpur', 832, 247452, NULL, 0, 1),
(84, 26, 'Sambalpur', 663, 768112, NULL, 0, 1),
(85, 21, 'Satara', 2162, 415501, NULL, 0, 1),
(86, 2, 'Secunderabad', 40, 500003, NULL, 2, 1),
(87, 17, 'Shimoga', 8182, 577401, NULL, 0, 1),
(88, 4, 'Silchar', 3842, 788014, NULL, 0, 1),
(89, 14, 'Solan', 1792, 174101, NULL, 0, 1),
(90, 13, 'Sonepat', 130, 131302, NULL, 1, 1),
(91, 12, 'Surat', 261, 394421, NULL, 1, 1),
(92, 31, 'Thanjavur', 4362, 614202, NULL, 0, 1),
(93, 4, 'Tinsukia', 374, 786155, NULL, 0, 1),
(94, 2, 'Tirupati', 877, 517501, NULL, 0, 1),
(95, 17, 'Tumkur', 816, 572115, NULL, 0, 1),
(96, 31, 'Tuticorin', 461, 628103, NULL, 0, 1),
(97, 17, 'Udupi', 820, 574105, NULL, 1, 1),
(98, 12, 'Vapi', 260, 396191, NULL, 1, 1),
(99, 31, 'Vellore', 416, 632011, NULL, 1, 1),
(101, 13, 'Yamunanagar', 1732, 135102, NULL, 0, 1),
(102, 33, 'Agra', 562, 283126, NULL, 1, 1),
(103, 21, 'Ahmednagar', 241, 413705, NULL, 0, 1),
(104, 29, 'Ajmer', 145, 305622, NULL, 1, 1),
(105, 33, 'Aligarh', 571, 202001, NULL, 0, 1),
(106, 29, 'Alwar', 144, 321607, NULL, 1, 1),
(107, 21, 'Amravati', 721, 442302, NULL, 0, 1),
(108, 12, 'Anand', 2692, 388170, NULL, 1, 1),
(109, 26, 'Angul', 6764, 759123, NULL, 0, 1),
(110, 21, 'Aurangabad', 240, 824113, NULL, 0, 1),
(111, 21, 'Beed', 244, 431127, NULL, 0, 1),
(112, 5, 'Bhagalpur', 641, 813214, NULL, 0, 1),
(113, 28, 'Bathinda', 164, 151102, NULL, 0, 1),
(114, 7, 'Bhilai', 788, 494337, NULL, 1, 1),
(115, 20, 'Bhopal', 755, 462044, NULL, 1, 1),
(116, 12, 'Bhuj', 2832, 370015, NULL, 0, 1),
(117, 29, 'Bikaner', 151, 334302, NULL, 1, 1),
(118, 16, 'Bokaro', 6542, 828134, NULL, 1, 1),
(119, 18, 'Cochin', 484, 682037, NULL, 1, 1),
(120, 35, 'Coochbehar', 3582, 736131, NULL, 0, 1),
(121, 34, 'Dehradun', 135, 248252, NULL, 1, 1),
(122, 21, 'Dhule', 2562, 424305, NULL, 0, 1),
(123, 4, 'Duliajan', 374, 786602, NULL, 0, 1),
(124, 31, 'Erode', 424, 638311, NULL, 0, 1),
(125, 12, 'Gandhinagar', 79, 382421, NULL, 0, 1),
(126, 5, 'Gaya', 631, 824211, NULL, 0, 1),
(127, 33, 'Gorakhpur', 551, 273158, NULL, 0, 1),
(128, 2, 'Guntur', 863, 522410, NULL, 0, 1),
(129, 4, 'Guwahati', 361, 781015, NULL, 1, 1),
(130, 34, 'Haldwani', 5946, NULL, NULL, 0, 1),
(131, 12, 'Himmatnagar', 2772, NULL, NULL, 0, 1),
(132, 28, 'Hoshiarpur', 1882, 146022, NULL, 0, 1),
(133, 31, 'Hosur', 4344, NULL, NULL, 0, 1),
(134, 20, 'Jabalpur', 761, 483220, NULL, 1, 1),
(136, 15, 'Jammu', 191, 181203, NULL, 1, 1),
(137, 16, 'Jamshedpur', 657, 833102, NULL, 1, 1),
(138, 33, 'Jhansi', 510, 284002, NULL, 0, 1),
(139, 4, 'Jorhat', 376, 785004, NULL, 0, 1),
(140, 21, 'Kalyan', 22, NULL, NULL, 1, 1),
(141, 18, 'Kannur', 497, 670693, NULL, 0, 1),
(142, 2, 'Karimnagar', 878, 505531, NULL, 0, 1),
(143, 35, 'Kharagpur', 3222, NULL, NULL, 0, 1),
(144, 21, 'Kolhapur', 231, 416112, NULL, 0, 1),
(145, 29, 'Kota', 744, 325001, NULL, 1, 1),
(146, 21, 'Latur', 2382, 413515, NULL, 0, 1),
(148, 2, 'Mahbubnagar', 8542, 509327, NULL, 0, 1),
(149, 14, 'Mandi', 1905, 175032, NULL, 0, 1),
(150, 33, 'Meerut', 121, 245206, NULL, 1, 1),
(151, 33, 'Moradabad', 591, 202411, NULL, 0, 1),
(152, 5, 'Mazaffarpur', 621, NULL, NULL, 0, 1),
(153, 4, 'Nagaon', 3672, 782136, NULL, 0, 1),
(154, 29, 'Nagaur', 1582, 341551, NULL, 0, 1),
(155, 21, 'Nanded', 2462, 431712, NULL, 0, 1),
(156, 21, 'Navi mumbai', 22, 400001, NULL, 2, 1),
(157, 10, 'Delhi', 11, 110036, 'A', 2, 1),
(158, 2, 'Nizamabad', 8462, 503174, NULL, 0, 1),
(159, 2, 'Ongole', 8592, 523001, NULL, 0, 1),
(160, 12, 'Palanpur', 2742, 385001, NULL, 0, 1),
(161, 13, 'Panipat', 180, 132104, NULL, 0, 1),
(162, 28, 'Patiala', 175, 147105, NULL, 1, 1),
(163, 18, 'Perintalmanna', 4933, 679322, NULL, 0, 1),
(164, 1, 'Port blair', 3192, NULL, NULL, 0, 1),
(165, 5, 'Purnia', 6454, 854202, NULL, 0, 1),
(166, 2, 'Rajahmundry', 883, 533101, NULL, 0, 1),
(167, 16, 'Ranchi', 651, 835225, NULL, 1, 1),
(168, 21, 'Ratnagiri', 2352, 415616, NULL, 0, 1),
(169, 13, 'Rewari', 1274, 123102, NULL, 0, 1),
(170, 34, 'Roorkee', 1332, NULL, NULL, 0, 1),
(171, 20, 'Sagar', 7582, 470228, NULL, 0, 1),
(172, 31, 'Salem', 427, 636501, NULL, 0, 1),
(173, 21, 'Sangli', 233, 415307, NULL, 0, 1),
(174, 20, 'Satna', 7672, 485226, NULL, 0, 1),
(175, 23, 'Shillong', 364, NULL, NULL, 0, 1),
(176, 29, 'Sikar', 1572, 332705, NULL, 0, 1),
(177, 13, 'Sirsa', 166, 125055, NULL, 0, 1),
(178, 21, 'Solapur', 217, 413208, NULL, 0, 1),
(179, 15, 'Srinagar', 194, 191515, NULL, 0, 1),
(180, 4, 'Tezpur', 3712, 784001, NULL, 0, 1),
(181, 18, 'Thrissur', 487, 680306, NULL, 0, 1),
(182, 31, 'Tiruchirapalli', 431, 621006, NULL, 0, 1),
(183, 18, 'Trivandrum', 471, NULL, NULL, 1, 1),
(184, 23, 'Tura', 3651, NULL, NULL, 0, 1),
(185, 29, 'Udaipur', 294, 313001, NULL, 1, 1),
(186, 12, 'Vadodara', 265, 391240, NULL, 1, 1),
(187, 33, 'Varanasi', 542, 221105, NULL, 0, 1),
(188, 2, 'Vijayawada', 866, 520015, NULL, 1, 1),
(189, 2, 'Warangal', 870, 506101, NULL, 0, 1),
(191, 28, 'Abohar', 1634, NULL, NULL, 0, 1),
(193, 18, 'Alappuzha', 471, 690105, NULL, 0, 1),
(194, 18, 'Aluva', 471, 683101, NULL, 0, 1),
(195, 7, 'Ambikapur', 7774, 497001, NULL, 0, 1),
(196, 12, 'Ankleshwar', 265, 393001, NULL, 0, 1),
(197, 5, 'Arrah', 6182, 852121, NULL, 0, 1),
(198, 33, 'Azamgarh', 5462, 276122, NULL, 0, 1),
(199, 29, 'Banswara', 2962, 327605, NULL, 0, 1),
(201, 35, 'Barddhman', 342, 713146, NULL, 0, 1),
(202, 12, 'Bardoli', 2622, 394601, NULL, 0, 1),
(203, 33, 'Bareilly', 581, 262406, NULL, 1, 1),
(204, 7, 'Bastar', 778, 494001, NULL, 0, 1),
(205, 33, 'Basti', 5542, 272128, NULL, 0, 1),
(206, 5, 'Begusarai', 6243, 851211, NULL, 0, 1),
(207, 17, 'Bellary', 8392, 583218, NULL, 0, 1),
(208, 35, 'Berhampore', 342, NULL, NULL, 0, 1),
(209, 26, 'Berhampur', 680, NULL, NULL, 0, 1),
(210, 2, 'Bhimavaram', 8816, 534364, NULL, 0, 1),
(211, 29, 'Bhiwadi', 1493, 301019, NULL, 1, 1),
(212, 13, 'Bhiwani', 1664, 127043, NULL, 0, 1),
(213, 26, 'Bhubaneswar', 674, NULL, NULL, 1, 1),
(214, 33, 'Bijnor', 5342, 246745, NULL, 0, 1),
(215, 7, 'Bilaspur', 7752, 174021, NULL, 0, 1),
(216, 5, 'Bodh Gaya', 631, NULL, NULL, 0, 1),
(217, 4, 'Bokakhat', 3776, 785612, NULL, 0, 1),
(218, 4, 'Bongaigaon', 3664, 783383, NULL, 0, 1),
(219, 18, 'Calicut', 495, 673079, NULL, 1, 1),
(220, 18, 'Cannanore (Kannur)', 498, NULL, NULL, 0, 1),
(221, 20, 'Chaindwara', 7162, NULL, NULL, 0, 1),
(222, 21, 'Chandrapur', 7172, 442916, NULL, 0, 1),
(223, 29, 'Chittaurgarh', 147, 312901, NULL, 0, 1),
(225, 31, 'Cuddalore', 4142, 608002, NULL, 0, 1),
(226, 26, 'Cuttack', 671, 754004, NULL, 1, 1),
(227, 16, 'Daltonganj', 656, 822102, NULL, 0, 1),
(228, 5, 'Darbhanga', 6272, 847407, NULL, 0, 1),
(229, 17, 'Davangere', 8192, 577513, NULL, 0, 1),
(230, 4, 'Dibrugarh', 373, 785676, NULL, 0, 1),
(231, 31, 'Dindigul', 451, 624215, NULL, 0, 1),
(232, 16, 'Dumka', 656, 814119, NULL, 0, 1),
(233, 2, 'East godavari', 883, 533284, NULL, 0, 1),
(234, 18, 'Ernakulam', 484, 686673, NULL, 0, 1),
(235, 33, 'Etawah', 5688, 206001, NULL, 0, 1),
(236, 33, 'Faizabad', 5278, 224207, NULL, 0, 1),
(237, 13, 'Fatehabad', 1667, 125051, NULL, 0, 1),
(238, 28, 'Ferozepur', 1852, 142047, NULL, 0, 1),
(239, 12, 'Gandhidham', 2836, 370201, NULL, 1, 1),
(240, 11, 'Goa', 832, 403801, NULL, 0, 1),
(242, 12, 'Godhara', 2672, NULL, NULL, 0, 1),
(243, 4, 'Golaghat', 3774, 785626, NULL, 0, 1),
(244, 4, 'Gossaigaon', 3774, 783360, NULL, 0, 1),
(245, 20, 'Guna', 7542, 473101, NULL, 0, 1),
(247, 33, 'Hamirpur', 1972, 176109, NULL, 0, 1),
(248, 34, 'Haridwar', 1334, 247661, NULL, 0, 1),
(249, 17, 'Hassan', 8172, 573217, NULL, 0, 1),
(250, 20, 'Hoshangabad', 7574, 461228, NULL, 0, 1),
(251, 35, 'Howrah', 33, 711111, NULL, 0, 1),
(252, 22, 'Imphal', 385, 795010, NULL, 0, 1),
(253, 3, 'Itanagar', 360, NULL, NULL, 0, 1),
(254, 26, 'Jagdalpur', 7782, NULL, NULL, 0, 1),
(256, 33, 'Jaunpur', 545, 222125, NULL, 0, 1),
(257, 29, 'Jhunjhunun', 1592, NULL, NULL, 0, 1),
(260, 13, 'Karnal', 184, 132039, NULL, 0, 1),
(261, 18, 'Kasaragod', 4994, 671121, NULL, 0, 1),
(262, 18, 'Kayamkulam', 4994, NULL, NULL, 0, 1),
(263, 20, 'Khandwa', 733, 450116, NULL, 0, 1),
(264, 28, 'Khanna', 162, NULL, NULL, 0, 1),
(265, 18, 'Kollam', 474, 690546, NULL, 0, 1),
(266, 7, 'Korba', 7759, 495449, NULL, 0, 1),
(267, 2, 'Kurnool', 8518, 518221, NULL, 0, 1),
(268, 13, 'Kurukshetra', 1744, 136156, NULL, 0, 1),
(269, 12, 'Mahesana', 2762, 382715, NULL, 0, 1),
(270, 18, 'Malappuram', 4994, 673639, NULL, 0, 1),
(271, 21, 'Mandgaon', 832, NULL, NULL, 0, 1),
(272, 28, 'Mandi gobindghar', 1765, NULL, NULL, 0, 1),
(274, 35, 'Midnapore', 322, 721157, NULL, 0, 1),
(275, 33, 'Mirzapur', 544, 231302, NULL, 0, 1),
(276, 28, 'Moga', 1636, 142053, NULL, 0, 1),
(277, 12, 'Morbi', 2822, 363641, NULL, 0, 1),
(278, 5, 'Motihari', 625, 845401, NULL, 0, 1),
(279, 28, 'Mukatsar', 1633, NULL, NULL, 0, 1),
(280, 17, 'Murudeshwar', 8385, NULL, NULL, 0, 1),
(281, 18, 'Muvattupuzha', 485, 686673, NULL, 0, 1),
(282, 33, 'Muzaffarnagar', 131, 247775, NULL, 0, 1),
(283, 5, 'Muzaffarpur', 621, 843109, NULL, 0, 1),
(284, 14, 'Nagrota', 1892, 176027, NULL, 0, 1),
(285, 2, 'Nalgonda', 868, 508248, NULL, 0, 1),
(286, 31, 'Namakkal', 4286, 637503, NULL, 0, 1),
(287, 13, 'Narnaul', 1282, 123001, NULL, 0, 1),
(288, 12, 'Navsari', 2637, 396590, NULL, 0, 1),
(289, 5, 'Nawadah', 632, 805107, NULL, 0, 1),
(290, 28, 'Nawanshahr', 1823, 144532, NULL, 0, 1),
(291, 11, 'North Goa', 832, 403508, NULL, 0, 1),
(292, 4, 'North Lakhimpur', 3752, 787001, NULL, 0, 1),
(293, 29, 'Pali', 141, 306709, NULL, 0, 1),
(294, 13, 'Palwal', 1275, 123456, NULL, 0, 1),
(295, 13, 'Panchkula', 172, 134203, NULL, 0, 1),
(296, 21, 'Panvel', 22, NULL, NULL, 0, 1),
(297, 18, 'Pathanamthitta', 468, 689660, NULL, 0, 1),
(298, 12, 'Porbandar', 286, 360545, NULL, 0, 1),
(299, 18, 'Quilon', 474, NULL, NULL, 0, 1),
(300, 29, 'Rajasmand', 2952, NULL, NULL, 0, 1),
(301, 33, 'Robertsganj', 5444, NULL, NULL, 0, 1),
(302, 28, 'Roop Nagar', 0, NULL, NULL, 0, 1),
(303, 34, 'Rudrapur', 5944, NULL, NULL, 0, 1),
(305, 33, 'Sahibabad', 120, NULL, NULL, 0, 1),
(306, 28, 'Sangrur', 1672, 147204, NULL, 0, 1),
(307, 33, 'Shahjahanpur', 5842, 242307, NULL, 0, 1),
(308, 14, 'Shimla', 177, 171012, NULL, 0, 1),
(309, 35, 'Siliguri', 353, NULL, NULL, 0, 1),
(310, 31, 'Sivakasi', 4562, NULL, NULL, 0, 1),
(311, 5, 'Siwan', 615, 841406, NULL, 0, 1),
(312, 33, 'Sonebhadra', 544, 231212, NULL, 0, 1),
(313, 29, 'Sriganganagar', 154, NULL, NULL, 0, 1),
(314, 2, 'Srikakulam', 8942, 532213, NULL, 0, 1),
(315, 21, 'Thane', 22, 421505, NULL, 1, 1),
(316, 18, 'Thiruvananthapuram', 481, 695103, NULL, 0, 1),
(318, 31, 'Tirunelveli', 462, 627117, NULL, 0, 1),
(320, 15, 'Udhampur', 192, 182101, NULL, 0, 1),
(321, 20, 'Ujjain', 734, 456776, NULL, 0, 1),
(322, 11, 'Verna', 832, 403722, NULL, 0, 1),
(324, 2, 'Visakhapatnam', 891, 531162, NULL, 1, 1),
(325, 2, 'Vizag', 891, NULL, NULL, 0, 1),
(326, 21, 'Yavatmal', 7232, 445307, NULL, 0, 1),
(327, 28, 'Zirakpur', 1762, NULL, NULL, 0, 1),
(328, 21, 'Baramati', 2112, 413102, NULL, 0, 1),
(329, 31, 'Trinulveli', 462, NULL, NULL, 0, 1),
(332, 33, 'Mathura', 565, 281501, NULL, 1, 1),
(333, 13, 'Kaithal', 1746, 136027, NULL, 0, 1),
(335, 4, 'Sibsagar', 3772, 785667, NULL, 0, 1),
(336, 18, 'Trichur', 487, NULL, NULL, 0, 1),
(337, 18, 'Alleppey', 477, NULL, NULL, 0, 1),
(338, 29, 'Bharatpur', 5644, 321401, NULL, 0, 1),
(339, 15, 'Leh (Ladakh)', 1982, 194106, NULL, 0, 1),
(340, 2, 'Ramagundam', 8728, 505208, NULL, 0, 1),
(341, 20, 'Sidhi', 7822, 486886, NULL, 0, 1),
(342, 31, 'Tiruppur', 421, NULL, NULL, 0, 1),
(343, 33, 'Farrukhabad', 0, 209724, NULL, 0, 1),
(344, 31, 'Cheruthazham', 497, NULL, NULL, 0, 1),
(346, 17, 'Dharwad', 836, 581204, NULL, 0, 1),
(347, 13, 'Manesar', 124, 122051, NULL, 1, 1),
(348, 33, 'Greater Noida', 120, 201310, NULL, 2, 1),
(349, 13, 'Bahadurgarh', 1276, 124507, NULL, 1, 1),
(350, 17, 'Theni', 4546, 625528, NULL, 0, 1),
(351, 12, 'Baroda', 265, NULL, NULL, 1, 1),
(352, 4, 'Abhayapuri', 3669, 783384, NULL, 0, 1),
(353, 34, 'Rishikesh', 1364, NULL, NULL, 0, 1),
(354, 33, 'Sitapur', 5862, 261145, NULL, 0, 1),
(355, 13, 'Kundli', 130, 131028, NULL, 0, 1),
(356, 35, 'Mohanpur', 0, NULL, NULL, 0, 1),
(357, 21, 'Rahuri', 0, NULL, NULL, 0, 1),
(358, 21, 'Parbhani', 0, 431503, NULL, 0, 1),
(359, 5, 'Samastipur', 0, 848130, NULL, 0, 1),
(360, 12, 'Banaskantha', 0, 385560, NULL, 0, 1),
(361, 21, 'Wardha', 0, 442306, NULL, 0, 1),
(362, 25, 'Kohima', 0, 797109, NULL, 0, 1),
(363, 35, 'Birbhum', 0, 731302, NULL, 0, 1),
(364, 17, 'Manipal', 0, 576104, NULL, 0, 1),
(365, 5, 'Nalanda', 6112, 801303, NULL, 0, 1),
(366, 18, 'Kozhikode', 495, 673613, NULL, 1, 1),
(367, 18, 'Kunnamangalam', 0, 673571, NULL, 0, 1),
(368, 21, 'Lonavla', 0, NULL, NULL, 0, 1),
(369, 31, 'Trichy', 0, NULL, NULL, 1, 1),
(370, 31, 'Nagapattinam', 4365, 609307, NULL, 0, 1),
(371, 2, 'Dharmapuri', 8727, 636801, NULL, 0, 1),
(372, 31, 'Ariyalur', 4329, 621719, NULL, 0, 1),
(373, 31, 'Tiruvarur', 4367, 613705, NULL, 0, 1),
(374, 31, 'Kanyakumari', 4652, 629160, NULL, 0, 1),
(375, 20, 'Amarkantak', 0, 484886, NULL, 0, 1),
(376, 33, 'Sultanpur', 5362, 228155, NULL, 0, 1),
(377, 2, 'Bapatla', 0, 522101, NULL, 0, 1),
(378, 2, 'Pagolu', 0, 521126, NULL, 0, 1),
(379, 2, 'Nagulapalem', 0, 523169, NULL, 0, 1),
(380, 2, 'Vinukonda', 0, 522647, NULL, 0, 1),
(381, 2, 'Godavari', 0, 534312, NULL, 0, 1),
(382, 31, 'Karaikudi', 0, NULL, NULL, 0, 1),
(383, 31, 'Tirupur', 421, 123456, NULL, 0, 1),
(384, 31, 'Sivagangai', 4575, 630501, NULL, 0, 1),
(385, 31, 'Chengalpattu', 4114, NULL, NULL, 0, 1),
(386, 33, 'Baghpat', 0, 250601, NULL, 0, 1),
(387, 31, 'Kilakarai', 0, NULL, NULL, 0, 1),
(388, 31, 'Kamuthi', 0, NULL, NULL, 0, 1),
(389, 31, 'Ramanathapuram', 0, 623530, NULL, 0, 1),
(390, 31, 'Devakottai', 0, NULL, NULL, 0, 1),
(391, 31, 'Mayiladuthurai', 0, NULL, NULL, 0, 1),
(392, 33, 'Barabanki', 5248, 227131, NULL, 0, 1),
(393, 33, 'Rihand Nagar', 0, NULL, NULL, 0, 1),
(394, 17, 'Chitradurga', 0, 577545, NULL, 0, 1),
(395, 31, 'Villupuram', 0, 604102, NULL, 0, 1),
(396, 18, 'Kazhakuttom', 471, NULL, NULL, 0, 1),
(397, 33, 'Modinagar', 1232, NULL, NULL, 0, 1),
(398, 21, 'Washim', 7252, 444507, NULL, 0, 1),
(399, 21, 'Buldhana', 0, 444312, NULL, 0, 1),
(400, 28, 'Daulatpur', 1875, NULL, NULL, 0, 1),
(401, 2, 'Vizianagaram', 0, 535148, NULL, 0, 1),
(402, 2, 'Tekkali', 8945, 535003, NULL, 0, 1),
(403, 2, 'Kathipudi', 0, 533449, NULL, 0, 1),
(404, 2, 'Munganda', 0, 533214, NULL, 0, 1),
(405, 2, 'Amalapuram', 0, 533201, NULL, 0, 1),
(406, 2, 'Kakinada', 0, 533003, NULL, 0, 1),
(407, 2, 'Gantyada', 0, 535215, NULL, 0, 1),
(408, 31, 'Karur', 0, 639118, NULL, 0, 1),
(409, 31, 'Thiruvannamalai', 0, 631702, NULL, 0, 1),
(410, 31, 'Tholudur', 4143, NULL, NULL, 0, 1),
(411, 31, 'Thiruvallur', 0, NULL, NULL, 0, 1),
(412, 31, 'Coonoor', 0, NULL, NULL, 0, 1),
(413, 31, 'Chidambaram', 0, NULL, NULL, 0, 1),
(414, 31, 'Parangipettai', 0, NULL, NULL, 0, 1),
(416, 4, 'Karimganj', 0, 788701, NULL, 0, 1),
(417, 4, 'Diphu', 0, 782462, NULL, 0, 1),
(418, 4, 'Hailakandi', 0, 788150, NULL, 0, 1),
(419, 4, 'Cachar', 3842, 788109, NULL, 0, 1),
(420, 33, 'Izatnagar', 0, NULL, NULL, 0, 1),
(421, 34, 'Almora', 0, 263645, NULL, 0, 1),
(422, 33, 'Bahraich', 2642, 271882, NULL, 0, 1),
(423, 28, 'Ropar', 0, 140118, NULL, 0, 1),
(424, 18, 'Thiruvalla', 469, NULL, NULL, 0, 1),
(425, 11, 'Nuvem', 832, 403604, NULL, 0, 1),
(426, 16, 'Deoghar', 0, 814152, NULL, 0, 1),
(427, 15, 'Anantnag', 193, 192201, NULL, 0, 1),
(428, 18, 'Attingal', 470, 695101, NULL, 0, 1),
(429, 28, 'Barnala', 167, NULL, NULL, 0, 1),
(430, 18, 'Changanacherry', 484, 686101, NULL, 0, 1),
(431, 18, 'Cherthala', 478, 688524, NULL, 0, 1),
(432, 28, 'Gurdaspur', 1874, 143534, NULL, 0, 1),
(433, 13, 'Jhajjar', 1251, 124103, NULL, 0, 1),
(434, 13, 'Jind', 681, 126116, NULL, 0, 1),
(435, 18, 'Kalpetta', 4936, 673121, NULL, 0, 1),
(436, 18, 'Karunagappally', 476, 690544, NULL, 0, 1),
(437, 34, 'Kashipur', 594, NULL, NULL, 0, 1),
(438, 18, 'Kattappana', 4868, 685508, NULL, 0, 1),
(439, 2, 'Khammam', 8742, 507316, NULL, 0, 1),
(440, 18, 'Mavelikkara', 479, NULL, NULL, 0, 1),
(441, 18, 'Pala', 4822, 686575, NULL, 0, 1),
(442, 18, 'Talayolaparambu', 4829, NULL, NULL, 0, 1),
(443, 18, 'Thodupuzha', 4862, 685584, NULL, 0, 1),
(444, 18, 'Tirur', 494, 680581, NULL, 0, 1),
(445, 2, 'Elura', 8812, NULL, NULL, 0, 1),
(446, 33, 'Hardoi', 5852, 241001, NULL, 0, 1),
(447, 5, 'Hajipur', 6224, 844101, NULL, 0, 1),
(448, 28, 'Rajpura', 1762, NULL, NULL, 0, 1),
(449, 29, 'Rajsamand', 2952, 313332, NULL, 0, 1),
(450, 16, 'Ramgarh', 6553, 829109, NULL, 0, 1),
(451, 21, 'Sangamner', 2425, NULL, NULL, 0, 1),
(452, 20, 'Shahdol', 7652, 484771, NULL, 0, 1),
(453, 12, 'Surendranagar', 2752, 363410, NULL, 0, 1),
(454, 9, 'Daman and Diu', 2875, 396210, NULL, 0, 1),
(455, 19, 'Lakshadweep', 4896, 682553, NULL, 0, 1),
(456, 8, 'Dadra and Nagar Haveli', 260, 396230, NULL, 0, 1),
(457, 27, 'Puducherry', 413, NULL, NULL, 0, 1),
(458, 1, 'Andaman and Nicobar Islands', 3192, 744302, NULL, 0, 1),
(459, 33, 'Bulandshahr', 5732, 245405, NULL, 0, 1),
(460, 21, 'Karad', 2164, NULL, NULL, 0, 1),
(461, 2, 'Adilabad', 8732, 504311, NULL, 0, 1),
(462, 12, 'Ambavadi', 79, 361305, NULL, 0, 1),
(463, 17, 'Anekal', 8110, 562106, NULL, 0, 1),
(464, 18, 'Balarampuram', 471, NULL, NULL, 0, 1),
(465, 33, 'Ballia', 5498, 277501, NULL, 0, 1),
(466, 35, 'Bankura', 3242, 722206, NULL, 0, 1),
(467, 15, 'Baramulla', 1952, 193501, NULL, 0, 1),
(468, 35, 'Barasat', 3228, NULL, NULL, 0, 1),
(469, 26, 'Bargarh', 6646, 768033, NULL, 0, 1),
(470, 33, 'Shakti Nagar', 0, NULL, NULL, 0, 1),
(471, 26, 'Behrampur', 680, NULL, NULL, 0, 1),
(472, 21, 'Bhandara', 7184, 441909, NULL, 0, 1),
(473, 17, 'Bidar', 8482, 585227, NULL, 0, 1),
(474, 35, 'Burdwan', 342, NULL, NULL, 0, 1),
(475, 2, 'Chittoor', 8572, 517194, NULL, 0, 1),
(476, 35, 'Darjeeling', 354, 734434, NULL, 0, 1),
(477, 20, 'Dewas', 7272, 455339, NULL, 0, 1),
(478, 28, 'Faridkot', 1639, 151204, NULL, 0, 1),
(479, 33, 'Firozabad', 5612, 205151, NULL, 0, 1),
(480, 17, 'Gadag', 8372, 582112, NULL, 0, 1),
(481, 4, 'Goalpara', 3663, 783120, NULL, 0, 1),
(482, 33, 'Gonda', 7182, 271312, NULL, 0, 1),
(483, 21, 'Gondia', 7182, 441614, NULL, 0, 1),
(484, 29, 'Hanumangarh', 1552, 335524, NULL, 0, 1),
(485, 21, 'Hingoli', 2456, 431512, NULL, 0, 1),
(486, 35, 'Hooghly', 3213, 712304, NULL, 0, 1),
(487, 26, 'Jagatsinghpur', 6724, 754119, NULL, 0, 1),
(488, 26, 'Jajpur', 6728, 755006, NULL, 0, 1),
(489, 21, 'Jalna', 2482, 431203, NULL, 0, 1),
(490, 35, 'Jalpaiguri', 3561, 735122, NULL, 0, 1),
(491, 29, 'Jhalawar', 7432, 326003, NULL, 0, 1),
(492, 2, 'Kadapa', 8562, 517415, NULL, 0, 1),
(493, 12, 'Kalol', 2764, 389330, NULL, 0, 1),
(494, 31, 'Kanchipuram', 4112, 603104, NULL, 0, 1),
(495, 28, 'Kapurthala', 1822, 144601, NULL, 0, 1),
(496, 18, 'Kasargod', 4994, 671541, NULL, 0, 1),
(497, 26, 'Kendrapara', 8152, 754153, NULL, 0, 1),
(498, 17, 'Kolar', 8152, 562103, NULL, 0, 1),
(499, 17, 'Koppal', 8539, 583235, NULL, 0, 1),
(500, 31, 'Krishnagiri', 4343, 635207, NULL, 0, 1),
(501, 14, 'Kullu', 1902, 175123, NULL, 0, 1),
(502, 31, 'Kumbakonam', 435, NULL, NULL, 0, 1),
(503, 33, 'Kushinagar', 5564, 274302, NULL, 0, 1),
(504, 2, 'Machilipatnam', 8672, 521001, NULL, 0, 1),
(505, 33, 'Mahoba', 5281, 210425, NULL, 0, 1),
(506, 17, 'Mandya', 8231, 571421, NULL, 0, 1),
(507, 18, 'Moothakunnam', 484, 683516, NULL, 0, 1),
(508, 28, 'Muktsar', 1633, 152114, NULL, 0, 1),
(509, 12, 'Mundra', 2838, 370421, NULL, 0, 1),
(510, 12, 'Nadiad', 268, 741152, NULL, 0, 1),
(511, 4, 'Nalbari', 3624, 781355, NULL, 0, 1),
(512, 21, 'Nandurbar', 2567, 425411, NULL, 0, 1),
(513, 2, 'Nandyal', 8514, 518672, NULL, 0, 1),
(514, 18, 'Nedumkandam', 486, 685553, NULL, 0, 1),
(515, 31, 'Nungambakkam', 0, NULL, NULL, 0, 1),
(516, 21, 'Pirangut', 2139, NULL, NULL, 0, 1),
(517, 33, 'Pratapgarh', 5342, 230301, NULL, 0, 1),
(518, 26, 'Puri', 6752, 752105, NULL, 0, 1),
(519, 17, 'Puttur', 8251, 576105, NULL, 0, 1),
(520, 17, 'Raichur', 8532, 584125, NULL, 0, 1),
(521, 7, 'Raigarh', 2140, 402105, NULL, 0, 1),
(522, 31, 'Rajapalayam', 4563, NULL, NULL, 0, 1),
(523, 7, 'Rajnandgaon', 7744, 491441, NULL, 0, 1),
(524, 33, 'Rampur', 595, 244927, NULL, 0, 1),
(525, 2, 'Rangasaipet', 0, NULL, NULL, 0, 1),
(526, 15, 'Rehari', 191, 180005, NULL, 0, 1),
(527, 21, 'Sindhudurg', 2362, 416620, NULL, 0, 1),
(528, 16, 'Sindri', 6549, 828122, NULL, 0, 1),
(529, 26, 'Sonepur', 6654, NULL, NULL, 0, 1),
(530, 15, 'Sopore', 1954, 193201, NULL, 0, 1),
(531, 29, 'Sri Ganganagar', 154, NULL, NULL, 0, 1),
(532, 18, 'Sulthan Bathery', 4936, 673592, NULL, 0, 1),
(533, 2, 'Tanuku', 8819, 534211, NULL, 0, 1),
(534, 18, 'Tellicherry', 490, NULL, NULL, 0, 1),
(535, 14, 'Una', 1975, 174301, NULL, 0, 1),
(536, 33, 'Unnao', 515, 229504, NULL, 0, 1),
(537, 35, 'Uttarpara', 0, NULL, NULL, 0, 1),
(538, 12, 'Valsad', 2632, 396125, NULL, 0, 1),
(539, 31, 'Velachery', 0, NULL, NULL, 0, 1),
(540, 31, 'Virudhunagar', 4562, 626203, NULL, 0, 1),
(541, 33, 'Lakhimpur Kheri', 0, 787160, NULL, 0, 1),
(542, 28, 'Jagraon', 0, NULL, NULL, 0, 1),
(543, 29, 'Behror', 0, NULL, NULL, 0, 1),
(544, 31, 'Neyveli', 0, NULL, NULL, 0, 1),
(545, 31, 'Panruti', 0, NULL, NULL, 0, 1),
(546, 31, 'Rameshwaram', 0, NULL, NULL, 0, 1),
(547, 21, 'Raigad', 2141, NULL, NULL, 0, 1),
(548, 11, 'Margao', 0, 403601, NULL, 0, 1),
(549, 18, 'Irinjalakuda', 480, 680121, NULL, 0, 1),
(550, 10, 'Soniput', 0, NULL, NULL, 0, 1),
(551, 13, 'Ballabgarh', 0, 121004, NULL, 0, 1),
(552, 12, 'Memnagar', 0, 380052, NULL, 0, 1),
(553, 33, 'Ambedkar Nagar', NULL, 224176, NULL, 0, 1),
(554, 12, 'Amreli', NULL, 365540, NULL, 0, 1),
(555, 29, 'Antela', NULL, NULL, NULL, 0, 1),
(556, 20, 'Anuppur', NULL, 484440, NULL, 0, 1),
(557, 5, 'Araria', NULL, 854331, NULL, 0, 1),
(558, 33, 'Auraiya', NULL, 206250, NULL, 0, 1),
(559, 33, 'Badaun', NULL, NULL, NULL, 0, 1),
(560, 17, 'Bagalkot', NULL, 587207, NULL, 0, 1),
(561, 34, 'Bageshwar', NULL, 263641, NULL, 0, 1),
(562, 20, 'Balaghat', NULL, 481001, NULL, 0, 1),
(563, 26, 'Balangir', NULL, 767041, NULL, 0, 1),
(564, 26, 'Baleswar', NULL, 756047, NULL, 0, 1),
(565, 29, 'Balotra', NULL, NULL, NULL, 0, 1),
(566, 33, 'Balrampur', NULL, 271206, NULL, 0, 1),
(567, 33, 'Banda', NULL, 210001, NULL, 0, 1),
(568, 5, 'Banka', NULL, 813102, NULL, 0, 1),
(569, 29, 'Baran', NULL, 325218, NULL, 0, 1),
(570, 33, 'Baraut', NULL, NULL, NULL, 0, 1),
(571, 29, 'Barmer', NULL, 344037, NULL, 0, 1),
(572, 4, 'Barpeta', NULL, 781352, NULL, 0, 1),
(573, 20, 'Barwani', NULL, 451556, NULL, 0, 1),
(574, 20, 'Begamganj', NULL, NULL, NULL, 0, 1),
(575, 35, 'Behrampore', NULL, NULL, NULL, 0, 1),
(576, 20, 'Betul', NULL, 460668, NULL, 0, 1),
(577, 26, 'Bhadrak', NULL, 756135, NULL, 0, 1),
(578, 20, 'Bhind', NULL, 475115, NULL, 0, 1),
(579, 29, 'Bhinmal', NULL, NULL, NULL, 0, 1),
(580, 5, 'Bhojpur', NULL, 802311, NULL, 0, 1),
(581, 29, 'Bilara', NULL, NULL, NULL, 0, 1),
(582, 22, 'Bishnupur', NULL, 795133, NULL, 0, 1),
(583, 26, 'Boudh', NULL, 762023, NULL, 0, 1),
(584, 33, 'Budaun', NULL, 243632, NULL, 0, 1),
(585, 15, 'Budgam', NULL, 193401, NULL, 0, 1),
(586, 29, 'Bundi', NULL, 323301, NULL, 0, 1),
(587, 20, 'Burhanpur', NULL, 450331, NULL, 0, 1),
(588, 5, 'Buxar', NULL, 802119, NULL, 0, 1),
(589, 29, 'Chaksu', NULL, NULL, NULL, 0, 1),
(590, 14, 'Chamba', NULL, 176324, NULL, 0, 1),
(591, 34, 'Chamoli', NULL, 246446, NULL, 0, 1),
(592, 34, 'Champawat', NULL, 262525, NULL, 0, 0),
(593, 24, 'Champhai', NULL, 796321, NULL, 0, 1),
(594, 17, 'Chamrajnagar', NULL, 571313, NULL, 0, 1),
(595, 33, 'Chandauli', NULL, 232105, NULL, 0, 1),
(596, 22, 'Chandel', NULL, 795000, NULL, 0, 1),
(597, 3, 'Changlang', NULL, 792120, NULL, 0, 1),
(598, 16, 'Chatra', NULL, 825408, NULL, 0, 1),
(599, 20, 'Chhatarpur', NULL, 471510, NULL, 0, 1),
(600, 17, 'Chickmagalur', NULL, 577101, NULL, 0, 1),
(601, 29, 'Chirawa', NULL, NULL, NULL, 0, 1),
(602, 33, 'Chitrakoot', NULL, 210208, NULL, 0, 1),
(603, 29, 'Chomu', NULL, NULL, NULL, 0, 1),
(604, 22, 'Churachandpur', NULL, 795143, NULL, 0, 1),
(605, 29, 'Churu', NULL, 331802, NULL, 0, 1),
(606, 12, 'Dahod', NULL, 389180, NULL, 0, 1),
(607, 17, 'Dakshina Kannada', NULL, 575011, NULL, 0, 1),
(608, 20, 'Damoh', NULL, 470661, NULL, 0, 1),
(609, 7, 'Dantewada', NULL, 494556, NULL, 0, 1),
(610, 4, 'Darrang', NULL, 784125, NULL, 0, 1),
(611, 20, 'Datia', NULL, 475675, NULL, 0, 1),
(612, 29, 'Dausa', NULL, 303313, NULL, 0, 1),
(613, 26, 'Debagarh', NULL, 768109, NULL, 0, 1),
(614, 33, 'Deoria', NULL, 274404, NULL, 0, 1),
(615, 32, 'Dhalai', NULL, 799000, NULL, 0, 1),
(616, 7, 'Dhamtari', NULL, 493773, NULL, 0, 1),
(617, 20, 'Dhar', NULL, 454660, NULL, 0, 1),
(618, 4, 'Dhemaji', NULL, 787059, NULL, 0, 1),
(619, 26, 'Dhenkanal', NULL, 759120, NULL, 0, 1),
(620, 29, 'Dholpur', NULL, 328028, NULL, 0, 1),
(621, 4, 'Dhubri', NULL, 783334, NULL, 0, 1),
(622, 3, 'Dibang Valley', NULL, 792101, NULL, 0, 1),
(623, 20, 'Dindori', NULL, 481884, NULL, 0, 1),
(624, 15, 'Doda', NULL, 182205, NULL, 0, 1),
(625, 29, 'Dungarpur', NULL, 314024, NULL, 0, 1),
(626, 7, 'Durg', NULL, 491221, NULL, 0, 1),
(627, 5, 'Champaran', NULL, 855456, NULL, 0, 1),
(628, 23, 'Garo Hills', NULL, 794111, NULL, 0, 1),
(629, 3, 'Kameng', NULL, 790102, NULL, 0, 1),
(630, 23, 'Khasi Hills', NULL, 793109, NULL, 0, 1),
(631, 3, 'Siang', NULL, 791102, NULL, 0, 1),
(632, 33, 'Etah', NULL, 207301, NULL, 0, 1),
(633, 28, 'Fatehgarh Sahib', NULL, 147203, NULL, 0, 1),
(634, 33, 'Fatehpur', NULL, 212601, NULL, 0, 1),
(635, 21, 'Gadchiroli', NULL, 442505, NULL, 0, 1),
(636, 26, 'Gajapati', NULL, 761215, NULL, 0, 1),
(637, 29, 'Ganganagar', NULL, 335002, NULL, 0, 1),
(638, 29, 'Gangasahar', NULL, NULL, NULL, 0, 1),
(639, 26, 'Ganjam', NULL, 761019, NULL, 0, 1),
(640, 16, 'Garhwa', NULL, 822125, NULL, 0, 1),
(641, 33, 'Gautam Buddha Nagar', NULL, 203141, NULL, 0, 1),
(642, 33, 'Ghazipur', NULL, 233311, NULL, 0, 1),
(643, 16, 'Giridh', NULL, 815301, NULL, 0, 1),
(644, 16, 'Godda', NULL, 814153, NULL, 0, 1),
(645, 5, 'Gopalganj', NULL, 841423, NULL, 0, 1),
(646, 20, 'Gotegaon', NULL, 487118, NULL, 0, 1),
(647, 29, 'Gudamalani', NULL, NULL, NULL, 0, 1),
(648, 16, 'Gumla', NULL, 835220, NULL, 0, 1),
(649, 20, 'Harda', NULL, 461444, NULL, 0, 1),
(650, 33, 'Hathras', NULL, 204101, NULL, 0, 1),
(651, 17, 'Haveri', NULL, 581101, NULL, 0, 1),
(652, 18, 'Idukki', NULL, 685510, NULL, 0, 1),
(653, 23, 'Jaintia Hills', NULL, 793151, NULL, 0, 1),
(654, 29, 'Jaisalmer', NULL, 345001, NULL, 0, 1),
(655, 33, 'Jalaun', NULL, 285130, NULL, 0, 1),
(656, 29, 'Jalor', NULL, 343029, NULL, 0, 1),
(657, 16, 'Jamtara', NULL, 815359, NULL, 0, 1),
(658, 5, 'Jamui', NULL, 805124, NULL, 0, 1),
(659, 7, 'Janjgir', NULL, 495695, NULL, 0, 1),
(660, 7, 'Jashpur', NULL, 496331, NULL, 0, 1),
(661, 5, 'Jehanabad', NULL, 804425, NULL, 0, 1),
(662, 20, 'Jhabua', NULL, 457779, NULL, 0, 1),
(663, 29, 'Jhalrapatan', NULL, NULL, NULL, 0, 1),
(664, 26, 'Jharsuguda', NULL, 768215, NULL, 0, 1),
(665, 29, 'Jhujhunu', NULL, 333026, NULL, 0, 1),
(666, 33, 'Jyotiba Phule Nagar', NULL, 244255, NULL, 0, 1),
(667, 2, 'Rangareddy', NULL, 501510, NULL, 0, 1),
(668, 12, 'Kachchh', NULL, 370450, NULL, 0, 1),
(669, 5, 'Bhabua', NULL, 802132, NULL, 0, 1),
(670, 26, 'Kalahandi', NULL, 766011, NULL, 0, 1),
(671, 4, 'Kamrup', NULL, 781121, NULL, 0, 1),
(672, 26, 'Kandhamal', NULL, 762112, NULL, 0, 1),
(673, 7, 'Kanker', NULL, 494670, NULL, 0, 1),
(674, 29, 'Kankroli', NULL, NULL, NULL, 0, 1),
(675, 33, 'Kannauj', NULL, 209728, NULL, 0, 1),
(676, 33, 'Ramabai Nagar', NULL, 209310, NULL, 0, 1),
(677, 27, 'Karaikal', NULL, 609604, NULL, 0, 1),
(678, 29, 'Karauli', NULL, 322218, NULL, 0, 1),
(679, 4, 'Karbi Anglong', NULL, 782485, NULL, 0, 1),
(680, 15, 'Kargil', NULL, 194102, NULL, 0, 1),
(681, 33, 'Karwi', NULL, NULL, NULL, 0, 1),
(682, 15, 'Kathua', NULL, 184102, NULL, 0, 1),
(683, 5, 'Katihar', NULL, 855102, NULL, 0, 1),
(684, 20, 'Katni', NULL, 483331, NULL, 0, 1),
(685, 33, 'Kaushambi', NULL, 212207, NULL, 0, 1),
(686, 7, 'Kawardha', NULL, 491559, NULL, 0, 1),
(687, 26, 'Kendujhar', NULL, 758027, NULL, 0, 1),
(688, 5, 'Khagaria', NULL, 851205, NULL, 0, 1),
(689, 12, 'Kheda', NULL, 387001, NULL, 0, 1),
(690, 33, 'Kheri', NULL, 262722, NULL, 0, 1),
(691, 29, 'Kherwara', NULL, NULL, NULL, 0, 1),
(692, 29, 'Khichan', NULL, NULL, NULL, 0, 1),
(693, 26, 'Khorda', NULL, 752030, NULL, 0, 1),
(694, 33, 'Khurja', NULL, NULL, NULL, 0, 1),
(695, 14, 'Kinnaur', NULL, 172116, NULL, 0, 1),
(696, 25, 'Kiphire', NULL, 798611, NULL, 0, 1),
(697, 5, 'Kishanganj', NULL, 855101, NULL, 0, 1),
(698, 17, 'Kodagu', NULL, 571248, NULL, 0, 1),
(699, 16, 'Koderma', NULL, 825418, NULL, 0, 1),
(700, 4, 'Kokrajhar', NULL, 783337, NULL, 0, 1),
(701, 24, 'Kolasib', NULL, 796000, NULL, 0, 1),
(702, 26, 'Koraput', NULL, 763008, NULL, 0, 1),
(703, 7, 'Koriya', NULL, 497447, NULL, 0, 1),
(704, 34, 'Kotdwara', NULL, NULL, NULL, 0, 1),
(705, 29, 'Kotputli', NULL, NULL, NULL, 0, 1),
(706, 2, 'Krishna', NULL, 521286, NULL, 0, 1),
(707, 15, 'Kupwara', NULL, 193222, NULL, 0, 1),
(708, 3, 'Kurung Kumey', NULL, 791118, NULL, 0, 1),
(709, 14, 'Spiti', NULL, 175142, NULL, 0, 1),
(710, 5, 'Lakhisarai', NULL, 811112, NULL, 0, 1),
(711, 33, 'Lalitpur', NULL, 284406, NULL, 0, 1),
(712, 16, 'Latehar', NULL, 822122, NULL, 0, 1),
(713, 24, 'Lawngtlai', NULL, 796000, NULL, 0, 1),
(714, 16, 'Lohardaga', NULL, 835302, NULL, 0, 1),
(715, 3, 'Lohit', NULL, 792102, NULL, 0, 1),
(716, 25, 'Longleng', NULL, 798000, NULL, 0, 1),
(717, 3, 'Lower Dibang Valley', NULL, 792110, NULL, 0, 1),
(718, 3, 'Lower Subansiri', NULL, 791120, NULL, 0, 1),
(719, 24, 'Lunglei', NULL, 796730, NULL, 0, 1),
(720, 5, 'Madhepura', NULL, 852121, NULL, 0, 1),
(721, 5, 'Madhubani', NULL, 847211, NULL, 0, 1),
(722, 33, 'Maharajganj', NULL, 273155, NULL, 0, 1),
(723, 7, 'Mahasamund', NULL, 493551, NULL, 0, 1),
(724, 27, 'Mahe', NULL, 673000, NULL, 0, 1),
(725, 13, 'Mahendragarh', NULL, 123303, NULL, 0, 1),
(726, 20, 'Maihar', NULL, 485771, NULL, 0, 1),
(727, 33, 'Mainpuri', NULL, 205261, NULL, 0, 1),
(728, 26, 'Malkangiri', NULL, 764041, NULL, 0, 1),
(729, 24, 'Mammit', NULL, 796000, NULL, 0, 1),
(730, 20, 'Mandla', NULL, 481768, NULL, 0, 1),
(731, 20, 'Mandsaur', NULL, 458558, NULL, 0, 1),
(732, 28, 'Mansa', NULL, 151504, NULL, 0, 1),
(733, 4, 'Marigaon', NULL, 782411, NULL, 0, 1),
(734, 33, 'Mau', NULL, 276402, NULL, 0, 1),
(735, 26, 'Mayurbhanj', NULL, 757031, NULL, 0, 1),
(736, 2, 'Medak', NULL, 502381, NULL, 0, 1),
(737, 13, 'Mewat', NULL, 123456, NULL, 0, 1),
(738, 25, 'Mokokchung', NULL, 798618, NULL, 0, 1),
(739, 25, 'Mon', NULL, 798603, NULL, 0, 1),
(740, 29, 'Morak', NULL, NULL, NULL, 0, 1),
(741, 20, 'Morena', NULL, 476115, NULL, 0, 1),
(742, 5, 'Munger', NULL, 811214, NULL, 0, 1),
(743, 35, 'Murshidabad', NULL, 742301, NULL, 0, 1),
(744, 26, 'Nabarangapur', NULL, 764071, NULL, 0, 1),
(745, 34, 'Nainital', NULL, 263157, NULL, 0, 1),
(746, 13, 'Naraingarh', NULL, 134203, NULL, 0, 1),
(747, 7, 'Narayanpur', NULL, 494661, NULL, 0, 1),
(748, 12, 'Narmada', NULL, 391120, NULL, 0, 1),
(749, 20, 'Narsinghpur', NULL, 487114, NULL, 0, 1),
(750, 26, 'Nayagarh', NULL, 752069, NULL, 0, 1),
(751, 20, 'Neemuch', NULL, 458228, NULL, 0, 1),
(752, 31, 'Nilgiris', NULL, 643217, NULL, 0, 1),
(753, 29, 'Nimbahera', NULL, NULL, NULL, 0, 1),
(754, 35, '24 Parganas', NULL, 743370, NULL, 0, 1),
(755, 35, 'Uttar Dinajpur', NULL, 733127, NULL, 0, 1),
(756, 26, 'Nuapada', NULL, 766106, NULL, 0, 1),
(757, 13, 'Nuh', NULL, 122107, NULL, 0, 1),
(758, 21, 'Osmanabad', NULL, 413405, NULL, 0, 1),
(759, 16, 'Pakur', NULL, 814111, NULL, 0, 1),
(760, 16, 'Palamau', NULL, 822113, NULL, 0, 1),
(761, 12, 'Panchmahal', NULL, 389341, NULL, 0, 1),
(762, 20, 'Panna', NULL, 488442, NULL, 0, 1),
(763, 29, 'Paota', NULL, NULL, NULL, 0, 1),
(764, 3, 'Papum Pare', NULL, 791110, NULL, 0, 1),
(765, 20, 'Parasia', NULL, 480441, NULL, 0, 1),
(766, 12, 'Patan', NULL, 385360, NULL, 0, 1),
(767, 34, 'Pauri Garhwal', NULL, 246155, NULL, 0, 1),
(768, 31, 'Perambalur', NULL, 621716, NULL, 0, 1),
(769, 25, 'Peren', NULL, 797110, NULL, 0, 1),
(770, 25, 'Phek', NULL, 797114, NULL, 0, 1),
(771, 33, 'Pilibhit', NULL, 262122, NULL, 0, 1),
(772, 34, 'Pithoragarh', NULL, 262501, NULL, 0, 1),
(773, 31, 'Pollachi', NULL, NULL, NULL, 0, 1),
(774, 15, 'Poonch', NULL, 185101, NULL, 0, 1),
(775, 2, 'Prakasam', NULL, 523292, NULL, 0, 1),
(776, 31, 'Pudukkottai', NULL, 622201, NULL, 0, 1),
(777, 15, 'Pulwama', NULL, 192305, NULL, 0, 1),
(778, 35, 'Puruliya', NULL, 723201, NULL, 0, 1),
(779, 13, 'Radaur', NULL, 135133, NULL, 0, 1),
(780, 33, 'Raebareli', NULL, 229001, NULL, 0, 1),
(781, 20, 'Raisen', NULL, 464884, NULL, 0, 1),
(782, 15, 'Rajauri', NULL, 185132, NULL, 0, 1),
(783, 20, 'Rajgarh', NULL, 465679, NULL, 0, 1),
(784, 17, 'Ramanagar', NULL, 562108, NULL, 0, 1),
(785, 29, 'Ramganj Mandi', NULL, NULL, NULL, 0, 1),
(786, 26, 'Rayagada', NULL, 765001, NULL, 0, 1),
(787, 20, 'Rewa', NULL, 486123, NULL, 0, 1),
(788, 23, 'Ri Bhoi', NULL, 793102, NULL, 0, 1),
(789, 5, 'Rohtas', NULL, 802215, NULL, 0, 1),
(790, 34, 'Rudraprayag', NULL, 246442, NULL, 0, 1),
(791, 12, 'Sabarkantha', NULL, 383245, NULL, 0, 1),
(792, 5, 'Saharsa', NULL, 852129, NULL, 0, 1),
(793, 16, 'Sahibganj', NULL, 816101, NULL, 0, 1),
(794, 24, 'Saiha', NULL, 796000, NULL, 0, 1),
(795, 29, 'Sanchore', NULL, NULL, NULL, 0, 1),
(796, 33, 'St Kabir Nagar', NULL, 272162, NULL, 0, 1),
(797, 33, 'Sant Ravidas Nagar', NULL, 221304, NULL, 0, 1),
(798, 5, 'Saran', NULL, 841216, NULL, 0, 1),
(799, 29, 'Sardarsahar', NULL, NULL, NULL, 0, 1),
(800, 29, 'Sawai Madhopur', NULL, 322021, NULL, 0, 1),
(801, 33, 'Sehani', NULL, NULL, NULL, 0, 1),
(802, 20, 'Sehore', NULL, 466331, NULL, 0, 1),
(803, 22, 'Senapati', NULL, 795007, NULL, 0, 1),
(804, 20, 'Seoni', NULL, 480881, NULL, 0, 1),
(805, 16, 'Seraikela', NULL, 832403, NULL, 0, 1),
(806, 24, 'Serchhip', NULL, 796000, NULL, 0, 1),
(807, 29, 'Shahpura', NULL, NULL, NULL, 0, 1),
(808, 20, 'Shajapur', NULL, 465226, NULL, 0, 1),
(809, 5, 'Sheikhpura', NULL, 811105, NULL, 0, 1),
(810, 5, 'Sheohar', NULL, 843329, NULL, 0, 1),
(811, 20, 'Sheopur', NULL, 476332, NULL, 0, 1),
(812, 20, 'Shivpuri', NULL, 473662, NULL, 0, 1),
(813, 33, 'Shrawasti', NULL, 271831, NULL, 0, 1),
(814, 33, 'Siddharth Nagar', NULL, 272204, NULL, 0, 1),
(815, 16, 'Simdega', NULL, 835211, NULL, 0, 1),
(816, 14, 'Sirmaur', NULL, 173101, NULL, 0, 1),
(817, 29, 'Sirohi', NULL, 307026, NULL, 0, 1),
(818, 5, 'Sitamarhi', NULL, 843332, NULL, 0, 1),
(819, 26, 'Sonapur', NULL, 767000, NULL, 0, 1),
(820, 4, 'Sonitpur', NULL, 784110, NULL, 0, 1),
(824, 26, 'Sundergarh', NULL, 770035, NULL, 0, 1),
(825, 5, 'Supaul', NULL, 852125, NULL, 0, 1),
(826, 7, 'Surguja', NULL, 497223, NULL, 0, 1),
(827, 22, 'Tamenglong', NULL, 795141, NULL, 0, 1),
(828, 3, 'Tawang', NULL, 790104, NULL, 0, 1),
(829, 34, 'Tehri Garhwal', NULL, 249123, NULL, 0, 1),
(830, 12, 'The Dangs', NULL, 394710, NULL, 0, 1),
(831, 22, 'Thoubal', NULL, 795103, NULL, 0, 1),
(832, 20, 'Tikamgarh', NULL, 472338, NULL, 0, 1),
(833, 31, 'Tindivanam', NULL, NULL, NULL, 0, 1),
(834, 3, 'Tirap', NULL, 786630, NULL, 0, 1),
(835, 31, 'Tiruvallur', NULL, 631205, NULL, 0, 1),
(836, 29, 'Tonk', NULL, 304502, NULL, 0, 1),
(837, 25, 'Tuensang', NULL, 798616, NULL, 0, 1),
(838, 34, 'Udham Singh Nagar', NULL, 263148, NULL, 0, 1),
(839, 22, 'Ukhrul', NULL, 795145, NULL, 0, 1),
(840, 20, 'Umaria', NULL, 484660, NULL, 0, 1),
(841, 3, 'Upper Siang', NULL, 791002, NULL, 0, 1),
(842, 3, 'Upper Subansiri', NULL, 791122, NULL, 0, 1),
(843, 17, 'Uttara Kannada', NULL, 581342, NULL, 0, 1),
(844, 34, 'Uttarkashi', NULL, 249196, NULL, 0, 1),
(845, 5, 'Vaishali', NULL, 843114, NULL, 0, 1),
(846, 20, 'Vidisha', NULL, 464001, NULL, 0, 1),
(847, 18, 'Wayanad', NULL, 670644, NULL, 0, 1),
(853, 25, 'Wokha', NULL, 797000, NULL, 0, 1),
(854, 25, 'Zunhebotto', NULL, 798000, NULL, 0, 1),
(855, 13, 'Adampur', NULL, NULL, NULL, 0, 1),
(856, 18, 'Adoor', NULL, NULL, NULL, 0, 1),
(857, 28, 'Ajnala', NULL, NULL, NULL, 0, 1),
(858, 21, 'Akluj', NULL, 413101, NULL, 0, 1),
(859, 18, 'Alathur', NULL, 678541, NULL, 0, 1),
(860, 35, 'Alipur Dawar', NULL, NULL, NULL, 0, 1),
(861, 20, 'Alirajpur', NULL, 457887, NULL, 0, 1),
(862, 3, 'Along', NULL, NULL, NULL, 0, 1),
(863, 14, 'Amb', NULL, 177203, NULL, 0, 1),
(864, 21, 'Ambejogai', NULL, 431517, NULL, 0, 1),
(865, 28, 'Amloh', NULL, NULL, NULL, 0, 1),
(866, 28, 'Anandpur Sahib', NULL, NULL, NULL, 0, 1),
(867, 3, 'Anini', NULL, NULL, NULL, 0, 1),
(868, 14, 'Anni', NULL, 172026, NULL, 0, 1),
(869, 14, 'Arki', NULL, 173208, NULL, 0, 1),
(870, 13, 'Assandh', NULL, 132039, NULL, 0, 1),
(871, 28, 'Baba Bakala', NULL, NULL, NULL, 0, 1),
(872, 28, 'Bagha Purana', NULL, NULL, NULL, 0, 1),
(873, 14, 'Baijnath', NULL, 176125, NULL, 0, 1),
(874, 7, 'Baikunthpur', NULL, 841409, NULL, 0, 1),
(875, 17, 'Bailhongal', NULL, 591102, NULL, 0, 1),
(876, 28, 'Balachaur', NULL, NULL, NULL, 0, 1),
(877, 35, 'Balurghat', NULL, NULL, NULL, 0, 1),
(878, 14, 'Banjar', NULL, 175123, NULL, 0, 1),
(879, 35, 'Barrackpore', NULL, NULL, NULL, 0, 1),
(880, 14, 'Barsar', NULL, 174305, NULL, 0, 1),
(881, 28, 'Bassi Pathana', NULL, NULL, NULL, 0, 1),
(882, 28, 'Batala', NULL, NULL, NULL, 0, 1),
(883, 29, 'Beawar', NULL, NULL, NULL, 0, 1),
(884, 5, 'Bettiah', NULL, 845438, NULL, 0, 1),
(885, 33, 'Bhadohi', NULL, NULL, NULL, 0, 1),
(886, 17, 'Bhalki', NULL, 585328, NULL, 0, 1),
(887, 14, 'Bharmour', NULL, 176315, NULL, 0, 1),
(888, 14, 'Bhoranj', NULL, 176045, NULL, 0, 1),
(889, 28, 'Bhulath', NULL, NULL, NULL, 0, 1),
(890, 11, 'Bicholim', NULL, 403504, NULL, 0, 1),
(892, 20, 'BilaspurÂ¿ Datia', NULL, NULL, NULL, 0, 1),
(893, 26, 'Bolangir', NULL, NULL, NULL, 0, 1),
(894, 3, 'Bomdila', NULL, NULL, NULL, 0, 1),
(895, 28, 'Budhlada', NULL, NULL, NULL, 0, 1),
(896, 1, 'Car Nicobar Nicobar', NULL, NULL, NULL, 0, 1),
(897, 5, 'Chaibasa', NULL, NULL, NULL, 0, 1),
(898, 26, 'Chandikhole', NULL, NULL, NULL, 0, 1),
(899, 5, 'Chapra', NULL, 841301, NULL, 0, 1),
(900, 13, 'Charkhi Dadri', NULL, 127306, NULL, 0, 1),
(901, 14, 'Chaupal', NULL, NULL, NULL, 0, 1),
(902, 18, 'Chengannur', NULL, 689121, NULL, 0, 1),
(903, 17, 'Chikkaballapur', NULL, NULL, NULL, 0, 1),
(904, 17, 'Chikkodi', NULL, NULL, NULL, 0, 1),
(905, 24, 'Chimtuipui', NULL, NULL, NULL, 0, 1),
(906, 14, 'Chowari', NULL, 176302, NULL, 0, 1),
(907, 14, 'Churah', NULL, NULL, NULL, 0, 1),
(908, 35, 'Contai', NULL, NULL, NULL, 0, 1),
(909, 13, 'Dabwali', NULL, 125104, NULL, 0, 1),
(910, 14, 'Dalhousie', NULL, 176304, NULL, 0, 1),
(911, 3, 'Daporijo', NULL, NULL, NULL, 0, 1),
(912, 28, 'Dasuya', NULL, NULL, NULL, 0, 1),
(913, 14, 'Dehra', NULL, 176321, NULL, 0, 1),
(914, 5, 'Dehri', NULL, 821307, NULL, 0, 1),
(915, 28, 'Dera Baba Nanak', NULL, NULL, NULL, 0, 1),
(916, 28, 'Dera Bassi', NULL, NULL, NULL, 0, 1),
(918, 14, 'Dharamsala', NULL, 176216, NULL, 0, 1),
(919, 14, 'Dharamshala', NULL, 176216, NULL, 0, 1),
(920, 29, 'Dhungarpur', NULL, NULL, NULL, 0, 1),
(921, 28, 'Dhuri', NULL, NULL, NULL, 0, 1),
(922, 29, 'Didwana', NULL, NULL, NULL, 0, 1),
(923, 4, 'Dispur', NULL, 781005, NULL, 0, 1),
(924, 14, 'Dodrakwar', NULL, NULL, NULL, 0, 1),
(925, 13, 'Ellanabad', NULL, NULL, NULL, 0, 1),
(926, 28, 'Fazilka', NULL, NULL, NULL, 0, 1),
(927, 2, 'Gajuwaka', NULL, 530026, NULL, 0, 1),
(928, 13, 'Ganaur', NULL, 131101, NULL, 0, 1),
(929, 28, 'Garhshankar', NULL, NULL, NULL, 0, 1),
(930, 14, 'Ghumarwin', NULL, 174021, NULL, 0, 1),
(931, 28, 'Gidderbaha', NULL, NULL, NULL, 0, 1),
(932, 31, 'Gobichettipalayam', NULL, NULL, NULL, 0, 1),
(933, 13, 'Gohana', NULL, 131301, NULL, 0, 1),
(934, 17, 'Gokak', NULL, 591307, NULL, 0, 1),
(935, 13, 'Gulah', NULL, NULL, NULL, 0, 1),
(936, 18, 'Guruvayur', NULL, 680101, NULL, 0, 1),
(938, 13, 'Hansi', NULL, 125033, NULL, 0, 1),
(939, 13, 'Hodal', NULL, 121106, NULL, 0, 1),
(940, 17, 'Honnavar', NULL, 571802, NULL, 0, 1),
(941, 17, 'Hunsur', NULL, 571105, NULL, 0, 1),
(942, 13, 'Jagadhari', NULL, NULL, NULL, 0, 1),
(944, 14, 'Jaisinghpur', NULL, 176095, NULL, 0, 1),
(945, 28, 'Jaitu', NULL, NULL, NULL, 0, 1),
(946, 28, 'Jalalabad', NULL, NULL, NULL, 0, 1),
(948, 29, 'Jalore', NULL, NULL, NULL, 0, 1),
(949, 17, 'Jamkhandi', NULL, 585416, NULL, 0, 1),
(950, 14, 'Jawali', NULL, 176023, NULL, 0, 1),
(951, 28, 'Jhunir  Sardulgarh', NULL, NULL, NULL, 0, 1),
(952, 14, 'Jogindernagar', NULL, NULL, NULL, 0, 1),
(953, 32, 'Kailshahar', NULL, NULL, NULL, 0, 1),
(954, 35, 'Kalimpong', NULL, NULL, NULL, 0, 1),
(955, 13, 'Kalka', NULL, 133302, NULL, 0, 1),
(956, 14, 'Kalpa', NULL, 172108, NULL, 0, 1),
(957, 14, 'Kandaghat', NULL, 173215, NULL, 0, 1),
(958, 22, 'Kangpokpi', NULL, NULL, NULL, 0, 1),
(959, 18, 'Kanhangad', NULL, 671315, NULL, 0, 1),
(960, 18, 'Kanjirappally', NULL, NULL, NULL, 0, 1),
(961, 14, 'Karsog', NULL, 171304, NULL, 0, 1),
(962, 17, 'Karwar', NULL, 581301, NULL, 0, 1),
(963, 19, 'Kavaratti', NULL, NULL, NULL, 0, 1),
(964, 14, 'Kaza', NULL, 172114, NULL, 0, 1),
(965, 26, 'Keonjhar', NULL, NULL, NULL, 0, 1),
(966, 14, 'Keylong', NULL, 175132, NULL, 0, 1),
(967, 28, 'Khadoor Sahib', NULL, NULL, NULL, 0, 1),
(968, 2, 'Khairtabad', NULL, NULL, NULL, 0, 1),
(969, 28, 'Khamono', NULL, NULL, NULL, 0, 1),
(970, 28, 'Kharar', NULL, NULL, NULL, 0, 1),
(971, 3, 'Khonsa', NULL, NULL, NULL, 0, 1),
(972, 18, 'Kodungalloor', NULL, NULL, NULL, 0, 1),
(973, 18, 'Koduvally', NULL, NULL, NULL, 0, 1),
(974, 13, 'Kosli', NULL, 123302, NULL, 0, 1),
(975, 18, 'Kothamangalam', NULL, 686691, NULL, 0, 1),
(976, 18, 'Kottarakara', NULL, 691506, NULL, 0, 1),
(977, 18, 'Koyilandy', NULL, NULL, NULL, 0, 1),
(978, 21, 'Kudal', NULL, NULL, NULL, 0, 1),
(979, 5, 'Laluji', NULL, NULL, NULL, 0, 1),
(980, 13, 'Loharu', NULL, 127201, NULL, 0, 1),
(981, 17, 'Madikeri', NULL, 571201, NULL, 0, 1),
(982, 31, 'Madurantakam', NULL, NULL, NULL, 0, 1),
(983, 33, 'Mahamaya Nagar', NULL, NULL, NULL, 0, 1),
(984, 21, 'Malegaon', NULL, NULL, NULL, 0, 1),
(985, 28, 'Malerkotla', NULL, NULL, NULL, 0, 1),
(986, 18, 'Mallappally', NULL, 689594, NULL, 0, 1),
(987, 28, 'Malout', NULL, NULL, NULL, 0, 1),
(988, 14, 'Manali', NULL, 175131, NULL, 0, 1),
(989, 20, 'Mandsor', NULL, NULL, NULL, 0, 1),
(990, 18, 'Mannarkkad', NULL, 678582, NULL, 0, 1),
(991, 11, 'Mapuca', NULL, NULL, NULL, 0, 1),
(992, 31, 'Marthandam', NULL, NULL, NULL, 0, 1),
(993, 18, 'Mattancherry', NULL, 682002, NULL, 0, 1),
(994, 31, 'Meenambakkam', NULL, NULL, NULL, 0, 1),
(995, 13, 'Meham', NULL, NULL, NULL, 0, 1),
(996, 31, 'Mettupalayam', NULL, NULL, NULL, 0, 1),
(997, 13, 'Mohindergarh', NULL, 123029, NULL, 0, 1),
(998, 5, 'Monghyr', NULL, NULL, NULL, 0, 1),
(999, 28, 'Moonak', NULL, NULL, NULL, 0, 1),
(1000, 28, 'Mukerian', NULL, NULL, NULL, 0, 1),
(1001, 28, 'Nabha', NULL, NULL, NULL, 0, 1),
(1002, 14, 'Nadaun  Hamirpur', NULL, NULL, NULL, 0, 1),
(1003, 35, 'Nadia', NULL, NULL, NULL, 0, 1),
(1004, 14, 'Nahan', NULL, 173001, NULL, 0, 1),
(1005, 28, 'Nakodar', NULL, NULL, NULL, 0, 1),
(1006, 14, 'Nalagarh', NULL, 174101, NULL, 0, 1),
(1007, 28, 'Nangal', NULL, NULL, NULL, 0, 1),
(1008, 13, 'Narwana', NULL, 126116, NULL, 0, 1),
(1009, 26, 'Nawarangpur', NULL, NULL, NULL, 0, 1),
(1010, 18, 'Nedumangad', NULL, 695541, NULL, 0, 1),
(1011, 18, 'Neyyattinkara', NULL, NULL, NULL, 0, 1),
(1012, 14, 'Nichar', NULL, 172103, NULL, 0, 1),
(1013, 28, 'Nihal Singh Wala', NULL, NULL, NULL, 0, 1),
(1014, 18, 'North Paravur', NULL, NULL, NULL, 0, 1),
(1015, 14, 'Nurpur', NULL, 176202, NULL, 0, 1),
(1016, 18, 'Ottappalam', NULL, NULL, NULL, 0, 1),
(1017, 33, 'Padrauna', NULL, NULL, NULL, 0, 1),
(1018, 14, 'Palampur', NULL, 176061, NULL, 0, 1),
(1019, 14, 'Pangi', NULL, 172107, NULL, 0, 1),
(1020, 14, 'Paonta Sahib', NULL, NULL, NULL, 0, 1),
(1021, 18, 'Parassala', NULL, 695502, NULL, 0, 1),
(1022, 14, 'Parwanoo', NULL, 173220, NULL, 0, 1),
(1023, 3, 'Pasighat', NULL, NULL, NULL, 0, 1),
(1024, 28, 'Patran', NULL, NULL, NULL, 0, 1),
(1025, 18, 'Pattambi', NULL, 679303, NULL, 0, 1),
(1026, 28, 'Patti', NULL, NULL, NULL, 0, 1),
(1027, 28, 'Payal', NULL, NULL, NULL, 0, 1),
(1028, 13, 'Pehowa', NULL, 136128, NULL, 0, 1),
(1029, 21, 'Pen', NULL, NULL, NULL, 0, 1),
(1030, 31, 'Periyakulam  Theni', NULL, NULL, NULL, 0, 1),
(1031, 18, 'Perumbavoor', NULL, 683542, NULL, 0, 1),
(1032, 28, 'Phagwara', NULL, NULL, NULL, 0, 1),
(1033, 28, 'Phillaur', NULL, NULL, NULL, 0, 1),
(1034, 26, 'Phulbani', NULL, NULL, NULL, 0, 1),
(1035, 21, 'Pimpri-Chinchwad', NULL, NULL, NULL, 0, 1),
(1036, 11, 'Ponda', NULL, 403401, NULL, 0, 1),
(1037, 18, 'Ponnani', NULL, NULL, NULL, 0, 1),
(1039, 31, 'Pudukottai', NULL, NULL, NULL, 0, 1),
(1040, 18, 'Punalur', NULL, 691305, NULL, 0, 1),
(1041, 11, 'Queepem', NULL, NULL, NULL, 0, 1),
(1042, 5, 'Rabdidevi', NULL, NULL, NULL, 0, 1),
(1043, 28, 'Raikot', NULL, NULL, NULL, 0, 1),
(1045, 35, 'Rajganj', NULL, NULL, NULL, 0, 1),
(1047, 14, 'Rampur Bushar', NULL, NULL, NULL, 0, 1),
(1048, 28, 'Rampura Phul', NULL, NULL, NULL, 0, 1),
(1049, 31, 'Ranipet', NULL, NULL, NULL, 0, 1),
(1050, 23, 'Ri-Bhoi', NULL, NULL, NULL, 0, 1),
(1051, 14, 'Rla Paddhar', NULL, NULL, NULL, 0, 1),
(1052, 14, 'Rla Pooh', NULL, NULL, NULL, 0, 1),
(1053, 14, 'Rohru', NULL, 171207, NULL, 0, 1),
(1054, 5, 'Sadu Baba', NULL, NULL, NULL, 0, 1),
(1055, 13, 'Safidon', NULL, 126112, NULL, 0, 1),
(1057, 5, 'Sahebganj', NULL, NULL, NULL, 0, 1),
(1058, 17, 'Sakaleshapur', NULL, NULL, NULL, 0, 1),
(1059, 28, 'Samana', NULL, NULL, NULL, 0, 1),
(1060, 28, 'Samrala', NULL, NULL, NULL, 0, 1),
(1061, 31, 'Sankagiri', NULL, NULL, NULL, 0, 1),
(1062, 33, 'Sant Kabir Nagar', NULL, NULL, NULL, 0, 1),
(1063, 14, 'Sarkaghat', NULL, 175024, NULL, 0, 1),
(1064, 3, 'Seppa', NULL, NULL, NULL, 0, 1),
(1065, 28, 'Shahkot', NULL, NULL, NULL, 0, 1),
(1066, 21, 'Shrirampur', NULL, NULL, NULL, 0, 1),
(1067, 8, 'Silvassa', NULL, NULL, NULL, 0, 1),
(1068, 17, 'Sirsi', NULL, 581401, NULL, 0, 1),
(1069, 13, 'Siwani', NULL, 127046, NULL, 0, 1),
(1070, 23, 'South Garo Hills', NULL, NULL, NULL, 0, 1),
(1071, 31, 'Sri Rangam', NULL, NULL, NULL, 0, 1),
(1072, 28, 'Sultanpur Lodhi', NULL, NULL, NULL, 0, 1),
(1073, 28, 'Sunam', NULL, NULL, NULL, 0, 1),
(1074, 14, 'Sundernagar', NULL, NULL, NULL, 0, 1),
(1075, 18, 'Taliparamba', NULL, 670141, NULL, 0, 1),
(1076, 28, 'Talwandi Sabo', NULL, NULL, NULL, 0, 1),
(1077, 35, 'Tamluk', NULL, NULL, NULL, 0, 1),
(1078, 12, 'Tapi', NULL, NULL, NULL, 0, 1),
(1079, 28, 'Tarn Taran', NULL, NULL, NULL, 0, 1),
(1080, 33, 'Tehri', NULL, NULL, NULL, 0, 1),
(1081, 31, 'Tenkasi', NULL, NULL, NULL, 0, 1),
(1082, 3, 'Tezu', NULL, NULL, NULL, 0, 1),
(1083, 18, 'Thalassery', NULL, 679532, NULL, 0, 1),
(1084, 14, 'Theog', NULL, 171201, NULL, 0, 1),
(1085, 31, 'Thiruchengode', NULL, NULL, NULL, 0, 1),
(1086, 17, 'Tiptur', NULL, 572201, NULL, 0, 1),
(1087, 13, 'Tobhama', NULL, NULL, NULL, 0, 1),
(1088, 13, 'Tohana', NULL, 125120, NULL, 0, 1),
(1091, 31, 'Uthagamandalam', NULL, NULL, NULL, 0, 1),
(1092, 18, 'Vaikom', NULL, 686141, NULL, 0, 1),
(1093, 18, 'Vandiperiyar', NULL, 685533, NULL, 0, 1),
(1094, 11, 'Vasco', NULL, 403802, NULL, 0, 1),
(1095, 18, 'Vatakara', NULL, NULL, NULL, 0, 1),
(1096, 18, 'Wadakkancherry', NULL, NULL, NULL, 0, 1),
(1097, 23, 'West Garo Hills', NULL, NULL, NULL, 0, 1),
(1098, 23, 'West Khasi Hills', NULL, NULL, NULL, 0, 1),
(1099, 17, 'Yadgir', NULL, 585202, NULL, 0, 1),
(1100, 27, 'Yanam', NULL, NULL, NULL, 0, 1),
(1101, 3, 'Yingkiong', NULL, NULL, NULL, 0, 1),
(1102, 3, 'Ziro', NULL, NULL, NULL, 0, 1),
(1103, 25, 'Zunheboto', NULL, NULL, NULL, 0, 1),
(1104, 20, 'Jagdalpur  Sheopur', NULL, NULL, NULL, 0, 1),
(1105, 20, 'Ambikapur  Shivpuri', NULL, NULL, NULL, 0, 1),
(1106, 13, 'Ferozepur Zhirka', NULL, NULL, NULL, 0, 1),
(1107, 18, 'Thripunithura', NULL, NULL, NULL, 0, 1),
(1108, 2, 'Visakhapatnam  Gajuwaka  Anakapalli', NULL, NULL, NULL, 0, 1),
(1118, 20, 'Adhartal', NULL, 482004, NULL, 0, 1),
(1120, 31, 'Agastheeswaram', NULL, NULL, NULL, 0, 1),
(1121, 28, 'Ahmedgarm', NULL, NULL, NULL, 0, 1),
(1122, 21, 'Airoli', NULL, 400708, NULL, 0, 1),
(1123, 2, 'Amadalavalasa', NULL, 532185, NULL, 0, 1),
(1124, 21, 'Amalner', NULL, 413207, NULL, 0, 1),
(1125, 21, 'Ambajogai', NULL, 431517, NULL, 0, 1),
(1126, 31, 'Ambur', NULL, NULL, NULL, 0, 1),
(1127, 2, 'Anakapalle', NULL, 531001, NULL, 0, 1),
(1128, 31, 'Anamalai', NULL, NULL, NULL, 0, 1),
(1129, 18, 'Anchal', NULL, 691306, NULL, 0, 1),
(1130, 18, 'Angamaly', NULL, NULL, NULL, 0, 1),
(1131, 31, 'Anthiyur', NULL, NULL, NULL, 0, 1),
(1132, 2, 'Aragonda', NULL, 517129, NULL, 0, 1),
(1133, 31, 'Aranthangi', NULL, NULL, NULL, 0, 1),
(1134, 31, 'Aravakurichi', NULL, NULL, NULL, 0, 1),
(1135, 18, 'Aroor', NULL, NULL, NULL, 0, 1),
(1136, 17, 'Arsikere', NULL, 573103, NULL, 0, 1),
(1137, 31, 'Aruppukottai', NULL, NULL, NULL, 0, 1),
(1138, 31, 'Attur', NULL, NULL, NULL, 0, 1),
(1139, 14, 'Baddi', NULL, 173205, NULL, 0, 1);
INSERT INTO `city` (`id`, `state_id`, `name`, `std_code`, `default_pincode`, `city_class_type`, `default_display`, `is_active`) VALUES
(1142, 35, 'Bally', NULL, NULL, NULL, 0, 1),
(1143, 17, 'Bangarapet', NULL, NULL, NULL, 0, 1),
(1144, 17, 'Bantwal', NULL, NULL, NULL, 0, 1),
(1145, 21, 'Barshi', NULL, 413401, NULL, 0, 1),
(1146, 31, 'Batlagundu', NULL, NULL, NULL, 0, 1),
(1147, 18, 'Bathery', NULL, NULL, NULL, 0, 1),
(1148, 17, 'Bhadravathi', NULL, 577301, NULL, 0, 1),
(1149, 21, 'Bhandup', NULL, NULL, NULL, 0, 1),
(1150, 31, 'Bhavani', NULL, NULL, NULL, 0, 1),
(1151, 21, 'Bhusawal', NULL, 425201, NULL, 0, 1),
(1152, 21, 'Bibwewadi', NULL, NULL, NULL, 0, 1),
(1153, 2, 'Bobbili', NULL, 535558, NULL, 0, 1),
(1154, 31, 'Bodinayakanur', NULL, NULL, NULL, 0, 1),
(1155, 31, 'Bommidi', NULL, NULL, NULL, 0, 1),
(1156, 21, 'Bopodi', NULL, NULL, NULL, 0, 1),
(1157, 17, 'Brahmavar', NULL, 576213, NULL, 0, 1),
(1158, 11, 'Calangute', NULL, 403516, NULL, 0, 1),
(1159, 18, 'Chadayamangalam', NULL, NULL, NULL, 0, 1),
(1160, 21, 'Chakan', NULL, NULL, NULL, 0, 1),
(1161, 18, 'Chalakudy', NULL, NULL, NULL, 0, 1),
(1162, 21, 'Chalisgaon', NULL, NULL, NULL, 0, 1),
(1163, 17, 'Chamarajanagar', NULL, 571313, NULL, 0, 1),
(1164, 12, 'Chandkheda', NULL, 382424, NULL, 0, 1),
(1165, 18, 'Changaramkulam', NULL, NULL, NULL, 0, 1),
(1166, 17, 'Channarayapatna', NULL, 562135, NULL, 0, 1),
(1167, 18, 'Chavara', NULL, 691583, NULL, 0, 1),
(1168, 18, 'Chelakkara', NULL, 680586, NULL, 0, 1),
(1169, 31, 'Chengam', NULL, NULL, NULL, 0, 1),
(1171, 18, 'Cherpulachery', NULL, NULL, NULL, 0, 1),
(1172, 17, 'Chikmagalur', NULL, 577101, NULL, 0, 1),
(1173, 21, 'Chinchwad', NULL, NULL, NULL, 0, 1),
(1174, 31, 'Chinnalapatti', NULL, NULL, NULL, 0, 1),
(1175, 31, 'Chinnamanur', NULL, NULL, NULL, 0, 1),
(1176, 35, 'Hooghly-Chinsurah', NULL, NULL, NULL, 0, 1),
(1177, 17, 'Chintamani', NULL, 563125, NULL, 0, 1),
(1178, 2, 'Chirala', NULL, 523155, NULL, 0, 1),
(1179, 18, 'Chirayinkeezhu', NULL, 695304, NULL, 0, 1),
(1180, 31, 'Kolachal', NULL, NULL, NULL, 0, 1),
(1181, 21, 'Daund', NULL, NULL, NULL, 0, 1),
(1183, 31, 'Denkanikottai', NULL, NULL, NULL, 0, 1),
(1184, 12, 'Dharampur', NULL, 361170, NULL, 0, 1),
(1186, 2, 'Dharmavaram', NULL, 522612, NULL, 0, 1),
(1187, 13, 'Dharuhera', NULL, 122106, NULL, 1, 1),
(1188, 12, 'Dholka', NULL, 387810, NULL, 0, 1),
(1189, 17, 'Doddaballapur', NULL, NULL, NULL, 0, 1),
(1190, 21, 'Dombivli', NULL, NULL, NULL, 0, 1),
(1192, 31, 'Eathamozhi', NULL, NULL, NULL, 0, 1),
(1193, 18, 'Eloor', NULL, NULL, NULL, 0, 1),
(1194, 18, 'Engandiyur', NULL, NULL, NULL, 0, 1),
(1195, 18, 'Eramalloor', NULL, NULL, NULL, 0, 1),
(1196, 18, 'Eranad', NULL, NULL, NULL, 0, 1),
(1197, 31, 'Gandhigram', NULL, NULL, NULL, 0, 1),
(1198, 17, 'Gangavathi', NULL, 583227, NULL, 0, 1),
(1199, 12, 'Ghatlodia', NULL, 380061, NULL, 0, 1),
(1200, 31, 'Gingee', NULL, NULL, NULL, 0, 1),
(1202, 2, 'Godavarikhani', NULL, 505209, NULL, 0, 1),
(1204, 20, 'Govindpura', NULL, 462023, NULL, 0, 1),
(1205, 31, 'Gudalur', NULL, NULL, NULL, 0, 1),
(1206, 2, 'Gudur', NULL, 524445, NULL, 0, 1),
(1207, 31, 'Guziliamparai', NULL, NULL, NULL, 0, 1),
(1208, 21, 'Hadapsar', NULL, NULL, NULL, 0, 1),
(1209, 2, 'Hanamkonda', NULL, 506001, NULL, 0, 1),
(1210, 33, 'Hapur', NULL, NULL, NULL, 0, 1),
(1211, 17, 'Harapanahalli', NULL, 583131, NULL, 0, 1),
(1213, 18, 'Haripad', NULL, 690514, NULL, 0, 1),
(1214, 31, 'Harur', NULL, NULL, NULL, 0, 1),
(1215, 35, 'Hindmotor', NULL, NULL, NULL, 0, 1),
(1216, 2, 'Hindupur', NULL, 509352, NULL, 0, 1),
(1217, 21, 'Ichalkaranji', NULL, NULL, NULL, 0, 1),
(1218, 31, 'Edappadi', NULL, NULL, NULL, 0, 1),
(1219, 21, 'Islampur', NULL, NULL, NULL, 0, 1),
(1220, 20, 'Itarsi', NULL, 461111, NULL, 0, 1),
(1221, 13, 'Jagadhri', NULL, 135003, NULL, 0, 1),
(1222, 2, 'Jagtial', NULL, 505327, NULL, 0, 1),
(1223, 21, 'Jamkhed', NULL, NULL, NULL, 0, 1),
(1224, 2, 'Jammikunta', NULL, 505122, NULL, 0, 1),
(1225, 31, 'Jayankondam', NULL, NULL, NULL, 0, 1),
(1226, 18, 'Kakkanad', NULL, 682030, NULL, 0, 1),
(1227, 31, 'Kaliakkavilai', NULL, NULL, NULL, 0, 1),
(1228, 31, 'Kallakurichi', NULL, NULL, NULL, 0, 1),
(1229, 21, 'Kalam', NULL, NULL, NULL, 0, 1),
(1230, 18, 'Kallambalam', NULL, 695605, NULL, 0, 1),
(1231, 31, 'Kallikulam', NULL, NULL, NULL, 0, 1),
(1232, 21, 'Kamthi', NULL, NULL, NULL, 0, 1),
(1233, 18, 'Karuvannoor', NULL, NULL, NULL, 0, 1),
(1234, 21, 'Kankavli', NULL, NULL, NULL, 0, 1),
(1235, 31, 'Kangayam', NULL, NULL, NULL, 0, 1),
(1237, 12, 'Kankaria', NULL, 394248, NULL, 0, 1),
(1238, 12, 'Kapadwanj', NULL, 387620, NULL, 0, 1),
(1240, 18, 'Karamana', NULL, 695002, NULL, 0, 1),
(1241, 17, 'Karkala', NULL, 574104, NULL, 0, 1),
(1242, 12, 'Karnavati', NULL, NULL, NULL, 0, 1),
(1243, 31, 'Karungal', NULL, NULL, NULL, 0, 1),
(1244, 21, 'Karveer', NULL, NULL, NULL, 0, 1),
(1247, 18, 'Kattakada', NULL, 695572, NULL, 0, 1),
(1248, 31, 'Kattathurai', NULL, NULL, NULL, 0, 1),
(1249, 31, 'Kavindapadi', NULL, NULL, NULL, 0, 1),
(1250, 21, 'Khandala', NULL, NULL, NULL, 0, 1),
(1251, 12, 'Khedbrahma', NULL, 383255, NULL, 0, 1),
(1252, 21, 'Khopoli', NULL, NULL, NULL, 0, 1),
(1253, 2, 'Kodad', NULL, 508206, NULL, 0, 1),
(1254, 31, 'Kodaikanal', NULL, NULL, NULL, 0, 1),
(1255, 18, 'Kodencheri', NULL, NULL, NULL, 0, 1),
(1256, 18, 'Kodungallur', NULL, 680664, NULL, 0, 1),
(1257, 18, 'Kolenchery', NULL, 682311, NULL, 0, 1),
(1258, 31, 'Kollidam', NULL, NULL, NULL, 0, 1),
(1259, 31, 'Komarapalayam', NULL, NULL, NULL, 0, 1),
(1260, 18, 'Konni', NULL, NULL, NULL, 0, 1),
(1261, 17, 'Koppa', NULL, 587116, NULL, 0, 1),
(1262, 31, 'Kotagiri', NULL, NULL, NULL, 0, 1),
(1263, 2, 'Kothagudem', NULL, 507101, NULL, 0, 1),
(1264, 28, 'Kotkapura', NULL, NULL, NULL, 0, 1),
(1265, 18, 'Kottakkal', NULL, 676503, NULL, 0, 1),
(1266, 18, 'Kottarakkara', NULL, 691506, NULL, 0, 1),
(1267, 31, 'Kottaram', NULL, NULL, NULL, 0, 1),
(1268, 31, 'Kovilpatti', NULL, NULL, NULL, 0, 1),
(1269, 18, 'Kozhencherry', NULL, 689641, NULL, 0, 1),
(1270, 35, 'Krishnagar', NULL, NULL, NULL, 0, 1),
(1271, 31, 'Kulasekharam', NULL, NULL, NULL, 0, 1),
(1272, 31, 'Kulithalai', NULL, NULL, NULL, 0, 1),
(1273, 31, 'Kumarapalayam', NULL, NULL, NULL, 0, 1),
(1274, 17, 'Kundapura', NULL, 576201, NULL, 0, 1),
(1275, 12, 'Kutch', NULL, NULL, NULL, 0, 1),
(1276, 31, 'Kuzhithurai', NULL, NULL, NULL, 0, 1),
(1277, 20, 'Lakhnadon', NULL, 480886, NULL, 0, 1),
(1278, 20, 'Lashkar', NULL, 465669, NULL, 0, 1),
(1279, 31, 'Lakshmipuram', NULL, NULL, NULL, 0, 1),
(1280, 31, 'Lalgudi', NULL, NULL, NULL, 0, 1),
(1281, 29, 'Lalsot', NULL, NULL, NULL, 0, 1),
(1282, 2, 'Madanapalle', NULL, 517325, NULL, 0, 1),
(1283, 2, 'Madhira', NULL, 507203, NULL, 0, 1),
(1284, 2, 'Mahabubabad', NULL, 506101, NULL, 0, 1),
(1285, 2, 'Mahabubnagar', NULL, NULL, NULL, 0, 1),
(1286, 18, 'Malakkara', NULL, NULL, NULL, 0, 1),
(1288, 2, 'Malikipuram', NULL, 533253, NULL, 0, 1),
(1289, 17, 'Malur', NULL, 563130, NULL, 0, 1),
(1290, 31, 'Manamelkudi', NULL, NULL, NULL, 0, 1),
(1291, 18, 'Mananthavady', NULL, 670645, NULL, 0, 1),
(1292, 31, 'Manapparai', NULL, NULL, NULL, 0, 1),
(1293, 2, 'Mandapeta', NULL, 533308, NULL, 0, 1),
(1294, 20, 'Manideep', NULL, NULL, NULL, 0, 1),
(1295, 2, 'Mangalagiri', NULL, 522503, NULL, 0, 1),
(1296, 12, 'Maninagar', NULL, 380008, NULL, 0, 1),
(1297, 18, 'Manjeri', NULL, 676122, NULL, 0, 1),
(1298, 31, 'Mannachanallur', NULL, NULL, NULL, 0, 1),
(1299, 18, 'Manakkad', NULL, 685584, NULL, 0, 1),
(1301, 17, 'Manvi', NULL, 584123, NULL, 0, 1),
(1303, 21, 'Maval', NULL, NULL, NULL, 0, 1),
(1304, 35, 'Mecheda', NULL, NULL, NULL, 0, 1),
(1306, 35, 'Medinipur', NULL, NULL, NULL, 0, 1),
(1307, 18, 'Meenangadi', NULL, 673591, NULL, 0, 1),
(1308, 18, 'Meeyyannoor', NULL, NULL, NULL, 0, 1),
(1309, 12, 'Mehsana', NULL, NULL, NULL, 0, 1),
(1310, 31, 'Melmaruvathur', NULL, NULL, NULL, 0, 1),
(1311, 2, 'Metpalli', NULL, 504219, NULL, 0, 1),
(1313, 20, 'Mhow', NULL, 453441, NULL, 0, 1),
(1314, 31, 'Minjur', NULL, NULL, NULL, 0, 1),
(1315, 21, 'Miraj', NULL, NULL, NULL, 0, 1),
(1316, 2, 'Miryalaguda', NULL, NULL, NULL, 0, 1),
(1317, 12, 'Modasa', NULL, 383315, NULL, 0, 1),
(1318, 33, 'Mughalsarai', NULL, NULL, NULL, 0, 1),
(1319, 18, 'Mukkoottuthara', NULL, 686510, NULL, 0, 1),
(1320, 18, 'Mukundapuram', NULL, 691585, NULL, 0, 1),
(1321, 17, 'Mulbagal', NULL, 563131, NULL, 0, 1),
(1322, 31, 'Musiri', NULL, NULL, NULL, 0, 1),
(1323, 35, 'Naihati', NULL, NULL, NULL, 0, 1),
(1324, 12, 'Navrangpura', NULL, 380009, NULL, 0, 1),
(1325, 18, 'Nellipoyil', NULL, NULL, NULL, 0, 1),
(1327, 31, 'Neyyoor', NULL, NULL, NULL, 0, 1),
(1328, 18, 'Nilambur', NULL, 679329, NULL, 0, 1),
(1329, 18, 'Nileshwar', NULL, 671314, NULL, 0, 1),
(1330, 21, 'Niphad', NULL, NULL, NULL, 0, 1),
(1331, 21, 'Nira', NULL, NULL, NULL, 0, 1),
(1332, 12, 'Nirnaynagar', NULL, 382481, NULL, 0, 1),
(1333, 31, 'Nithiravilai', NULL, NULL, NULL, 0, 1),
(1334, 31, 'Oddanchatram', NULL, NULL, NULL, 0, 1),
(1335, 31, 'Omalur', NULL, NULL, NULL, 0, 1),
(1336, 31, 'Ooty', NULL, NULL, NULL, 0, 1),
(1337, 31, 'Padappai', NULL, NULL, NULL, 0, 1),
(1338, 31, 'Palakkodu', NULL, NULL, NULL, 0, 1),
(1339, 31, 'Palani', NULL, NULL, NULL, 0, 1),
(1340, 31, 'Palani Chettipatti', NULL, NULL, NULL, 0, 1),
(1341, 18, 'Pallichal', NULL, 695020, NULL, 0, 1),
(1342, 31, 'Pallipalayam', NULL, NULL, NULL, 0, 1),
(1343, 18, 'Pandalam', NULL, 689501, NULL, 0, 1),
(1344, 11, 'Panjai', NULL, 403001, NULL, 0, 1),
(1345, 35, 'Panskura', NULL, NULL, NULL, 0, 1),
(1346, 31, 'Paramakudi', NULL, NULL, NULL, 0, 1),
(1348, 18, 'Paravoor', NULL, NULL, NULL, 0, 1),
(1349, 2, 'Parvathipuram', NULL, NULL, NULL, 0, 1),
(1351, 2, 'Patancheru', NULL, 502319, NULL, 0, 1),
(1352, 31, 'Pattukkottai', NULL, NULL, NULL, 0, 1),
(1353, 2, 'Payakaraopeta', NULL, 531126, NULL, 0, 1),
(1354, 18, 'Payyanur', NULL, 670307, NULL, 0, 1),
(1355, 2, 'Pedakakani', NULL, 522509, NULL, 0, 1),
(1356, 2, 'Pedana', NULL, 521366, NULL, 0, 1),
(1359, 31, 'Perundurai', NULL, NULL, NULL, 0, 1),
(1360, 21, 'Phaltan', NULL, NULL, NULL, 0, 1),
(1361, 33, 'Phaphamau', NULL, NULL, NULL, 0, 1),
(1362, 2, 'Piduguralla', NULL, 522413, NULL, 0, 1),
(1363, 21, 'Pimpri', NULL, NULL, NULL, 0, 1),
(1364, 13, 'Pinjore', NULL, 134102, NULL, 0, 1),
(1366, 18, 'Ponkunnam', NULL, 686506, NULL, 0, 1),
(1368, 2, 'Ponnur (Nidubrolu)', NULL, NULL, NULL, 0, 1),
(1369, 2, 'Proddatur', NULL, 501203, NULL, 0, 1),
(1371, 31, 'Pallippuram', NULL, NULL, NULL, 0, 1),
(1372, 31, 'Pullambadi', NULL, NULL, NULL, 0, 1),
(1373, 18, 'Pullurampara', NULL, NULL, NULL, 0, 1),
(1375, 31, 'Punjai Puliampatti', NULL, NULL, NULL, 0, 1),
(1376, 35, 'Purba Medinipur', NULL, NULL, NULL, 0, 1),
(1377, 21, 'Pusad', NULL, NULL, NULL, 0, 1),
(1378, 31, 'Pudukkadai', NULL, NULL, NULL, 0, 1),
(1380, 21, 'Rajgurunagar', NULL, NULL, NULL, 0, 1),
(1381, 16, 'Ramgarh Cantt', NULL, 829122, NULL, 0, 1),
(1382, 12, 'Ranip', NULL, 382480, NULL, 0, 1),
(1383, 31, 'Rasipuram', NULL, NULL, NULL, 0, 1),
(1384, 2, 'Rayavaram', NULL, 522426, NULL, 0, 1),
(1385, 2, 'Razole', NULL, 533242, NULL, 0, 1),
(1386, 2, 'Repalle', NULL, 504272, NULL, 0, 1),
(1387, 12, 'Sabarmati', NULL, 380005, NULL, 0, 1),
(1388, 12, 'Sagrampura', NULL, 395002, NULL, 0, 1),
(1390, 2, 'Sangareddy', NULL, 502001, NULL, 0, 1),
(1391, 31, 'Sankarankovil', NULL, NULL, NULL, 0, 1),
(1392, 18, 'Sasthamkotta', NULL, NULL, NULL, 0, 1),
(1393, 21, 'Saswad', NULL, NULL, NULL, 0, 1),
(1394, 31, 'Sathyamangalam', NULL, NULL, NULL, 0, 1),
(1395, 2, 'Sattenapalli', NULL, NULL, NULL, 0, 1),
(1396, 31, 'Sattur', NULL, NULL, NULL, 0, 1),
(1397, 31, 'Sawyerpuram', NULL, NULL, NULL, 0, 1),
(1399, 31, 'Sendamangalam', NULL, NULL, NULL, 0, 1),
(1400, 35, 'Serampore', NULL, NULL, NULL, 0, 1),
(1401, 33, 'Shamli', NULL, NULL, NULL, 0, 1),
(1402, 2, 'Shamshabad', NULL, 501218, NULL, 0, 1),
(1403, 35, 'Sheoraphuli', NULL, NULL, NULL, 0, 1),
(1404, 21, 'Shirur', NULL, NULL, NULL, 0, 1),
(1405, 21, 'Shirwal', NULL, NULL, NULL, 0, 1),
(1407, 12, 'Sidhpur', NULL, NULL, NULL, 0, 1),
(1409, 17, 'Sindhanur', NULL, NULL, NULL, 0, 1),
(1410, 2, 'Singarayakonda', NULL, NULL, NULL, 0, 1),
(1411, 21, 'Sinnar', NULL, NULL, NULL, 0, 1),
(1412, 28, 'Sirhind', NULL, NULL, NULL, 0, 1),
(1413, 31, 'Sirkazhi', NULL, NULL, NULL, 0, 1),
(1415, 31, 'Sivaganga', NULL, NULL, NULL, 0, 1),
(1416, 35, 'Sonarpur', NULL, NULL, NULL, 0, 1),
(1418, 2, 'Srikalahasti', NULL, 517644, NULL, 0, 1),
(1419, 17, 'Srinivaspur', NULL, 563135, NULL, 0, 1),
(1420, 31, 'Sriperumbudur', NULL, NULL, NULL, 0, 1),
(1421, 31, 'Srirangam', NULL, NULL, NULL, 0, 1),
(1422, 31, 'Srivilliputhur', NULL, NULL, NULL, 0, 1),
(1423, 35, 'Subi', NULL, NULL, NULL, 0, 1),
(1424, 17, 'Sullia', NULL, 574239, NULL, 0, 1),
(1425, 31, 'Surandai', NULL, NULL, NULL, 0, 1),
(1426, 31, 'Swamiyar madam', NULL, NULL, NULL, 0, 1),
(1429, 18, 'Tanur', NULL, 676302, NULL, 0, 1),
(1430, 2, 'Tenali', NULL, 522201, NULL, 0, 1),
(1432, 31, 'Thalikulam', NULL, NULL, NULL, 0, 1),
(1433, 18, 'Thamarassery', NULL, NULL, NULL, 0, 1),
(1434, 18, 'Thengana', NULL, NULL, NULL, 0, 1),
(1435, 31, 'Thickanamcode', NULL, NULL, NULL, 0, 1),
(1436, 31, 'Thiruthangal', NULL, NULL, NULL, 0, 1),
(1437, 31, 'Thiruthuraipoondi', NULL, NULL, NULL, 0, 1),
(1438, 2, 'Thorrur', NULL, NULL, NULL, 0, 1),
(1439, 31, 'Thovalai', NULL, NULL, NULL, 0, 1),
(1440, 31, 'Thuckalay', NULL, NULL, NULL, 0, 1),
(1441, 18, 'Thuravoor', NULL, 688532, NULL, 0, 1),
(1443, 17, 'Tirthahalli', NULL, NULL, NULL, 0, 1),
(1444, 31, 'Tiruchendur', NULL, NULL, NULL, 0, 1),
(1445, 31, 'Tiruchengode', NULL, NULL, NULL, 0, 1),
(1446, 31, 'Tirupattur', NULL, NULL, NULL, 0, 1),
(1448, 31, 'Tiruvannamalai', NULL, NULL, NULL, 0, 1),
(1449, 17, 'Tarikere', NULL, 577228, NULL, 0, 1),
(1450, 18, 'Thrippunithura', NULL, NULL, NULL, 0, 1),
(1451, 21, 'Tumsar', NULL, NULL, NULL, 0, 1),
(1452, 31, 'Udumalaipettai', NULL, NULL, NULL, 0, 1),
(1453, 17, 'Ujire', NULL, 574240, NULL, 0, 1),
(1454, 21, 'Ulhasnagar', NULL, NULL, NULL, 0, 1),
(1455, 12, 'Upleta', NULL, 360490, NULL, 0, 1),
(1456, 21, 'Uran', NULL, NULL, NULL, 0, 1),
(1457, 31, 'Usilampatti', NULL, NULL, NULL, 0, 1),
(1458, 31, 'Vazhapadi', NULL, NULL, NULL, 0, 1),
(1459, 31, 'Vallioor', NULL, NULL, NULL, 0, 1),
(1460, 31, 'Vaniyambadi', NULL, NULL, NULL, 0, 1),
(1461, 21, 'Vasai', NULL, NULL, NULL, 0, 1),
(1463, 21, 'Vashi', NULL, NULL, NULL, 0, 1),
(1464, 12, 'Vejalpur', NULL, 389340, NULL, 0, 1),
(1465, 12, 'Veraval', NULL, 362265, NULL, 0, 1),
(1467, 21, 'Vikhroli', NULL, NULL, NULL, 0, 1),
(1468, 17, 'Virajpet', NULL, 571218, NULL, 0, 1),
(1469, 21, 'Wai', NULL, NULL, NULL, 0, 1),
(1471, 31, 'Cumbum', NULL, NULL, NULL, 0, 1),
(1472, 18, 'Adimaly', NULL, NULL, NULL, 0, 1),
(1473, 21, 'Chiplun', NULL, NULL, NULL, 0, 1),
(1474, 18, 'Elanthoor', NULL, NULL, NULL, 0, 1),
(1475, 18, 'Ettumanoor', NULL, NULL, NULL, 0, 1),
(1477, 18, 'Guruvayoor', NULL, NULL, NULL, 0, 1),
(1478, 2, 'Hanuman Junction', NULL, 521105, NULL, 0, 1),
(1480, 12, 'Idar', NULL, 383430, NULL, 0, 1),
(1481, 2, 'Jangareddigudem', NULL, 534447, NULL, 0, 1),
(1482, 18, 'Kalady', NULL, 683574, NULL, 0, 1),
(1483, 18, 'Kalamassery', NULL, 683104, NULL, 0, 1),
(1485, 2, 'Kavali', NULL, 524201, NULL, 0, 1),
(1486, 26, 'Khurda', NULL, NULL, NULL, 0, 1),
(1488, 18, 'Kunnamkulam', NULL, 680523, NULL, 0, 1),
(1489, 18, 'Malapuram', NULL, NULL, NULL, 0, 1),
(1490, 18, 'Mavelikara', NULL, 690101, NULL, 0, 1),
(1491, 18, 'Moovattupuzha', NULL, NULL, NULL, 0, 1),
(1495, 2, 'Nandigama', NULL, 521185, NULL, 0, 1),
(1496, 21, 'Nerul', NULL, NULL, NULL, 0, 1),
(1497, 18, 'Pathirappally', NULL, 688521, NULL, 0, 1),
(1499, 11, 'Porvorim', NULL, 403501, NULL, 0, 1),
(1500, 21, 'Powai', NULL, NULL, NULL, 0, 1),
(1501, 18, 'Punaloor', NULL, NULL, NULL, 0, 1),
(1502, 21, 'Rahata', NULL, NULL, NULL, 0, 1),
(1503, 2, 'Rajamundry', NULL, 533101, NULL, 0, 1),
(1504, 35, 'Raniganj', NULL, NULL, NULL, 0, 1),
(1505, 21, 'Sakoli', NULL, NULL, NULL, 0, 1),
(1506, 31, 'Sankari', NULL, NULL, NULL, 0, 1),
(1507, 21, 'Sawantwadi', NULL, NULL, NULL, 0, 1),
(1508, 35, 'Srirampur', NULL, NULL, NULL, 0, 1),
(1509, 18, 'Sulthanbathery', NULL, 673592, NULL, 0, 1),
(1510, 2, 'Tadepalligudem', NULL, 534101, NULL, 0, 1),
(1512, 18, 'Triparayar', NULL, NULL, NULL, 0, 1),
(1513, 18, 'Vadakara', NULL, 673103, NULL, 0, 1),
(1515, 11, 'Bardez', NULL, NULL, NULL, 0, 1),
(1516, 11, 'Mapusa', NULL, NULL, NULL, 0, 1),
(1518, 12, 'Chikhli', NULL, 393135, NULL, 0, 1),
(1520, 12, 'Deesa', NULL, NULL, NULL, 0, 1),
(1523, 12, 'Mandvi', NULL, 384245, NULL, 0, 1),
(1524, 12, 'Padra', NULL, 388180, NULL, 0, 1),
(1526, 12, 'Siddhpur', NULL, NULL, NULL, 0, 1),
(1527, 12, 'Unjha', NULL, 384170, NULL, 0, 1),
(1528, 12, 'Viramgam', NULL, 382150, NULL, 0, 1),
(1530, 18, 'Alwaye', NULL, NULL, NULL, 0, 1),
(1531, 18, 'Chungathara', NULL, 679334, NULL, 0, 1),
(1533, 20, 'Bina', NULL, 470113, NULL, 0, 1),
(1534, 20, 'Mandideep', NULL, 462040, NULL, 0, 1),
(1536, 21, 'Jaysingpur', NULL, NULL, NULL, 0, 1),
(1537, 21, 'Mahad', NULL, NULL, NULL, 0, 1),
(1538, 31, 'Thuraiyur', NULL, NULL, NULL, 0, 1),
(1541, 16, 'Singhbhum', NULL, NULL, NULL, 0, 1),
(1542, 20, 'Ashok Nagar', NULL, NULL, NULL, 0, 1),
(1545, 28, 'Firozpur', NULL, NULL, NULL, 0, 1),
(1546, 30, 'Sikkim', NULL, NULL, NULL, 0, 1),
(1548, 32, 'Tripura', NULL, NULL, NULL, 0, 1),
(1549, 20, 'Singrauli', NULL, 486889, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_type_id` int(11) NOT NULL,
  `coupon_amount` float(7,3) NOT NULL,
  `code` varchar(32) NOT NULL,
  `valid_from_date` datetime NOT NULL,
  `valid_to_date` datetime NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_type`
--

CREATE TABLE `coupon_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_has_coupon`
--

CREATE TABLE `customer_has_coupon` (
  `id` bigint(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `is_redeem` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_wallet`
--

CREATE TABLE `customer_wallet` (
  `id` bigint(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` float(7,3) NOT NULL DEFAULT '0.000',
  `txn_type` enum('DR','CR') NOT NULL,
  `txn_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `txn_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

CREATE TABLE `document_type` (
  `id` int(11) NOT NULL,
  `documet_type` enum('vendor','vehicle','driver') NOT NULL,
  `document_title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(45) NOT NULL,
  `can_speek_english` tinyint(1) DEFAULT '0',
  `is_approved` tinyint(1) DEFAULT '0',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver_document`
--

CREATE TABLE `driver_document` (
  `id` int(11) NOT NULL,
  `document_type_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `file_name` varchar(45) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `end_city_has_coupon`
--

CREATE TABLE `end_city_has_coupon` (
  `id` int(11) NOT NULL,
  `end_city_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `end_state_has_coupon`
--

CREATE TABLE `end_state_has_coupon` (
  `id` int(11) NOT NULL,
  `end_state_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1455539910),
('m140608_173539_create_user_table', 1455546488),
('m140611_133903_init_rbac', 1455546490),
('m140808_073114_create_auth_item_group_table', 1455546492),
('m140809_072112_insert_superadmin_to_user', 1455546494),
('m140809_073114_insert_common_permisison_to_auth_item', 1455546495),
('m141023_141535_create_user_visit_log', 1455546495),
('m141116_115804_add_bind_to_ip_and_registration_ip_to_user', 1455546496),
('m141121_194858_split_browser_and_os_column', 1455546498),
('m141201_220516_add_email_and_email_confirmed_to_user', 1455546499),
('m141207_001649_create_basic_user_permissions', 1455546500);

-- --------------------------------------------------------

--
-- Table structure for table `operation_user`
--

CREATE TABLE `operation_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_engine`
--

CREATE TABLE `price_engine` (
  `id` int(11) NOT NULL,
  `wiwigo_customer_price_group_id` int(11) NOT NULL,
  `booking_type_id` int(11) NOT NULL,
  `price_engine_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_engine_expression`
--

CREATE TABLE `price_engine_expression` (
  `id` varchar(45) NOT NULL,
  `price_engine_id` int(11) NOT NULL,
  `expression` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_engine_master_parameter`
--

CREATE TABLE `price_engine_master_parameter` (
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_engine_parameter`
--

CREATE TABLE `price_engine_parameter` (
  `id` int(11) NOT NULL,
  `price_engine_id` int(11) NOT NULL,
  `parameter_name` varchar(45) NOT NULL,
  `parameter_value` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referral_has_coupon`
--

CREATE TABLE `referral_has_coupon` (
  `id` bigint(20) NOT NULL,
  `referral_customer_id` int(11) NOT NULL COMMENT 'referral customer get coupon amount if referral_customer_id not equal to referral_to_customer_id and referral_device_id not equal to  referral_to_device_id',
  `referral_device_id` int(11) NOT NULL,
  `referral_to_customer_id` int(11) DEFAULT NULL,
  `referral_to_device_id` int(11) DEFAULT NULL,
  `referral_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL,
  `state_id` int(5) UNSIGNED DEFAULT NULL,
  `city_id` int(7) UNSIGNED DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `region_name`, `state_id`, `city_id`, `create_at`, `update_at`, `is_active`) VALUES
(1, 'All Delhi-NCR Vendor', 10, NULL, '2016-03-09 17:49:10', '2016-03-09 18:04:50', 1),
(2, 'All Chandigarh Vendor', NULL, 1, '2016-03-09 18:32:19', '2016-03-09 18:32:19', 1),
(3, 'MMT DELHI', 10, NULL, '2016-03-10 09:07:16', '2016-03-10 09:07:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `source_city_id` int(7) UNSIGNED NOT NULL,
  `destination_city_id` int(7) UNSIGNED NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `source_city_id`, `destination_city_id`, `create_at`, `update_at`, `is_active`) VALUES
(1, 157, 1, '2016-02-24 15:39:43', '2016-02-24 15:40:43', 1),
(2, 15, 16, '2016-02-25 11:40:02', '2016-02-25 11:40:02', 1),
(3, 157, 102, '2016-03-01 12:25:55', '2016-03-01 12:25:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `route_has_coupon`
--

CREATE TABLE `route_has_coupon` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `start_city_has_coupon`
--

CREATE TABLE `start_city_has_coupon` (
  `id` int(11) NOT NULL,
  `start_city` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `start_state_has_coupon`
--

CREATE TABLE `start_state_has_coupon` (
  `id` int(11) NOT NULL,
  `start_state_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'State Name',
  `popular_city_1_id` int(7) UNSIGNED NOT NULL COMMENT 'Most Popular City, mapped with city Table',
  `popular_city_2_id` int(7) UNSIGNED NOT NULL COMMENT 'Most Popular City 2, mapped with city Table',
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `popular_city_1_id`, `popular_city_2_id`, `is_active`) VALUES
(1, 'Andaman and Nicobar', 168, 458, 0),
(2, 'Andhra Pradesh', 14, 189, 1),
(3, 'Arunachal Pradesh', 253, 70, 1),
(4, 'Assam', 129, 230, 1),
(5, 'Bihar', 75, 126, 1),
(6, 'Chandigarh', 1, 0, 0),
(7, 'Chhattisgarh', 77, 114, 1),
(8, 'Dadra and Nagar haveli', 456, 1067, 0),
(9, 'Daman and Diu', 454, 0, 1),
(10, 'Delhi-NCR', 157, 3, 1),
(11, 'Goa', 240, 73, 1),
(12, 'Gujarat', 8, 91, 1),
(13, 'Haryana', 21, 260, 1),
(14, 'Himachal Pradesh', 308, 501, 1),
(15, 'Jammu and Kashmir', 136, 179, 1),
(16, 'Jharkhand', 167, 118, 1),
(17, 'Karnataka', 12, 65, 1),
(18, 'Kerala', 119, 183, 1),
(19, 'Lakshadweep', 455, 963, 1),
(20, 'Madhya Pradesh', 115, 48, 1),
(21, 'Maharashtra', 15, 16, 1),
(22, 'Manipur', 252, 803, 1),
(23, 'Meghalaya', 175, 653, 1),
(24, 'Mizoram', 18, 593, 1),
(25, 'Nagaland', 362, 37, 1),
(26, 'Orissa', 213, 226, 1),
(27, 'Pondicherry', 457, 677, 1),
(28, 'Punjab', 5, 22, 1),
(29, 'Rajasthan', 49, 185, 1),
(30, 'Sikkim', 40, 0, 1),
(31, 'Tamil Nadu', 13, 34, 1),
(32, 'Tripura', 17, 615, 1),
(33, 'Uttar Pradesh', 7, 20, 1),
(34, 'Uttaranchal', 121, 248, 1),
(35, 'West Bengal', 58, 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `superadmin` smallint(6) DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
(1, 'superadmin', 'QueMiO-a_rCM3CN52gXENXq5U3lwM87G', '$2y$13$GDLDFwGDySjWR1NTZUm9xO5wwjwJvgF.VskDZy53YObZpvLkp4fuy', 'eIABKkolZxndYC8innBLJdgGfYnhEclj_1455606156', 1, 1, 1455546493, 1455606156, NULL, NULL, 'brijesh.singh@wiwigo.com', 0),
(2, '7503461395', 'q0-FNGxHHJD3O9bupdjlqFYKwG0MrFs2', '$2y$13$eW2CdtDRMUY0RTBNdvh/B.jieCdKHZu01ZhpLPacTdiuRdky2O.US', NULL, 1, 0, 1455861609, 1456391123, '127.0.0.1', '', 'brijesh.singh@wiwigo.com', 1),
(3, '1234567890', 'XKaSwp8uonbbamaGzJUah9cvuojytCj8', '$2y$13$3tlJ/Co.G.PmZZ7qSVNl6OrfIvuC5vztTl9xFsS696YIuRn7pFY0e', NULL, 1, 0, 1456840106, 1456840106, '127.0.0.1', '', 'mmt@test.com', 0),
(4, '7777777777', 'Byqqjk9NJ3j7pjz8aF4VoqrcdoLbkpbn', '$2y$13$Ky2l67QihvdiQkwlpQMxrOgHzcToc0L111KKZoEWkl7zAFnqUf3Ey', NULL, 1, 0, 1457531924, 1457531924, '127.0.0.1', '', NULL, 0),
(7, '8888888888', '{4BB9D0E5-9E3B-553A-DF5B-3FCA362', '$2y$13$EC9Go6/V2m16fDTIK6fPvehLqJiDmUpM55bg31NJwomb.5UClx3Ba', NULL, 1, 0, 1457592526, 1457592526, '127.0.0.1', '', 'test@test.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_visit_log`
--

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_visit_log`
--

INSERT INTO `user_visit_log` (`id`, `user_id`, `token`, `ip`, `language`, `user_agent`, `visit_time`, `browser`, `os`) VALUES
(1, 1, '56c1e3d182892', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', 1455547345, 'Chrome', 'Windows'),
(2, 1, '56c1e41a9c415', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', 1455547418, 'Chrome', 'Windows'),
(3, 1, '56c1e46ec8db4', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', 1455547502, 'Chrome', 'Windows'),
(4, 1, '56c2bc80b4428', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455602816, 'Firefox', 'Windows'),
(5, 1, '56c2ddf5109bc', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455611381, 'Firefox', 'Windows'),
(6, 1, '56c2ec5bf392c', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455615067, 'Firefox', 'Windows'),
(7, 1, '56c2ef75a4f9e', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455615861, 'Firefox', 'Windows'),
(8, 1, '56c314ab07a90', '192.168.0.8', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455625387, 'Firefox', 'Windows'),
(9, 1, '56c314cf9cf34', '192.168.0.8', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455625423, 'Firefox', 'Windows'),
(10, 1, '56c318857d9a3', '192.168.0.8', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455626373, 'Firefox', 'Windows'),
(11, 1, '56c32310baafb', '192.168.0.8', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455629072, 'Firefox', 'Windows'),
(12, 1, '56c32f5b7a01f', '192.168.0.8', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455632219, 'Firefox', 'Windows'),
(13, 1, '56c33168c5dc0', '192.168.0.8', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455632744, 'Firefox', 'Windows'),
(14, 1, '56c331d193d70', '192.168.0.8', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455632849, 'Firefox', 'Windows'),
(15, 1, '56c35f7184594', '192.168.43.140', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455644529, 'Firefox', 'Windows'),
(16, 1, '56c41a31d4996', '192.168.0.8', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455692337, 'Firefox', 'Windows'),
(17, 1, '56c47307a35e1', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455715079, 'Firefox', 'Windows'),
(18, 1, '56c47622c8a54', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455715874, 'Firefox', 'Windows'),
(19, 1, '56c4785401c2e', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455716436, 'Firefox', 'Windows'),
(20, 1, '56c478a7eab48', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455716519, 'Firefox', 'Windows'),
(21, 1, '56c47926e19e0', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455716646, 'Firefox', 'Windows'),
(22, 1, '56c4794157941', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455716673, 'Firefox', 'Windows'),
(23, 1, '56c47b94c0ee5', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455717268, 'Firefox', 'Windows'),
(24, 1, '56c47ce0d9aa8', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455717600, 'Firefox', 'Windows'),
(25, 1, '56c47df5f0549', '192.168.0.111', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455717877, 'Firefox', 'Windows'),
(26, 1, '56c4b85950770', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455732825, 'Firefox', 'Windows'),
(27, 1, '56c4ba8150041', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455733377, 'Firefox', 'Windows'),
(28, 1, '56c5552fbc906', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455772975, 'Firefox', 'Windows'),
(29, 1, '56c5b6f6b8f7c', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455798006, 'Firefox', 'Windows'),
(30, 1, '56c5d01d50fa4', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455804445, 'Firefox', 'Windows'),
(31, 1, '56c5d53163f93', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455805745, 'Firefox', 'Windows'),
(32, 1, '56c5d53b136b3', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455805755, 'Firefox', 'Windows'),
(33, 1, '56c5fda6130b2', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455816102, 'Firefox', 'Windows'),
(34, 1, '56c6015d9bccf', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455817053, 'Firefox', 'Windows'),
(35, 1, '56c6090cc4ed4', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455819020, 'Firefox', 'Windows'),
(36, 1, '56c6aef939698', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455861497, 'Firefox', 'Windows'),
(37, 1, '56c6b059c2575', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455861849, 'Firefox', 'Windows'),
(38, 1, '56c6c53740c23', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455867191, 'Firefox', 'Windows'),
(39, 1, '56c7f8be1893e', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1455945918, 'Firefox', 'Windows'),
(40, 1, '56cab0d50fcd8', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456124117, 'Firefox', 'Windows'),
(41, 1, '56cbe966d0b89', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456204134, 'Firefox', 'Windows'),
(42, 1, '56cc4470a8041', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456227440, 'Firefox', 'Windows'),
(43, 1, '56cd4380c6524', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456292736, 'Firefox', 'Windows'),
(44, 1, '56cd52d929a74', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456296665, 'Firefox', 'Windows'),
(45, 1, '56cd561ee5413', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', 1456297502, 'Chrome', 'Windows'),
(46, 1, '56cd56a47292f', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', 1456297636, 'Chrome', 'Windows'),
(47, 1, '56cd5f5b2fa27', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456299867, 'Firefox', 'Windows'),
(48, 1, '56cd62df46a7b', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', 1456300767, 'Chrome', 'Windows'),
(49, 1, '56cd63e4e6db0', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', 1456301028, 'Chrome', 'Windows'),
(50, 1, '56ce99e1c0c28', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456380385, 'Firefox', 'Windows'),
(51, 1, '56cec3b664838', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456391094, 'Firefox', 'Windows'),
(52, 2, '56cec3e5b3fd5', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456391141, 'Firefox', 'Windows'),
(53, 1, '56cec40e39f6d', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456391182, 'Firefox', 'Windows'),
(54, 1, '56cec4b38ad5c', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456391347, 'Firefox', 'Windows'),
(55, 1, '56cec5fe6cb5e', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456391678, 'Firefox', 'Windows'),
(56, 1, '56d02a1831770', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456482840, 'Firefox', 'Windows'),
(57, 2, '56d042c74bb36', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456489159, 'Firefox', 'Windows'),
(58, 1, '56d0439139443', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456489361, 'Firefox', 'Windows'),
(59, 1, '56d55dd6bb90a', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456823766, 'Firefox', 'Windows'),
(60, 3, '56d5a2ac34d85', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456841388, 'Firefox', 'Windows'),
(61, 1, '56d5a2cbd00ae', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456841419, 'Firefox', 'Windows'),
(62, 3, '56d5a2de3734d', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456841438, 'Firefox', 'Windows'),
(63, 1, '56d670cccf3de', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456894156, 'Firefox', 'Windows'),
(64, 3, '56d671c155008', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456894401, 'Firefox', 'Windows'),
(65, 1, '56d671d27cff5', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456894418, 'Firefox', 'Windows'),
(66, 3, '56d67233dc29a', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456894515, 'Firefox', 'Windows'),
(67, 3, '56d674c0219ed', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456895168, 'Firefox', 'Windows'),
(68, 3, '56d67548d17c7', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456895304, 'Firefox', 'Windows'),
(69, 3, '56d6758ed8dea', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456895374, 'Firefox', 'Windows'),
(70, 3, '56d675dc2b761', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456895452, 'Firefox', 'Windows'),
(71, 3, '56d675fd8405c', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456895485, 'Firefox', 'Windows'),
(72, 3, '56d67c89edfec', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456897161, 'Firefox', 'Windows'),
(73, 1, '56d6e74246221', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456924482, 'Firefox', 'Windows'),
(74, 1, '56d6e7be87487', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456924606, 'Firefox', 'Windows'),
(75, 1, '56d6e7daa5d74', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456924634, 'Firefox', 'Windows'),
(76, 1, '56d6e7fe718d9', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456924670, 'Firefox', 'Windows'),
(77, 1, '56d6e981638b0', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456925057, 'Firefox', 'Windows'),
(78, 1, '56d6e9b8b85ad', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456925112, 'Firefox', 'Windows'),
(79, 1, '56d6e9d1ddce4', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456925137, 'Firefox', 'Windows'),
(80, 1, '56d6ea4e9813e', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456925262, 'Firefox', 'Windows'),
(81, 1, '56d6ea680d320', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456925288, 'Firefox', 'Windows'),
(82, 1, '56d6ea8ae6331', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456925322, 'Firefox', 'Windows'),
(83, 1, '56d6ead16be08', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456925393, 'Firefox', 'Windows'),
(84, 1, '56d6eb011c43e', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456925441, 'Firefox', 'Windows'),
(85, 3, '56d6f037bc4fe', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456926775, 'Firefox', 'Windows'),
(86, 1, '56d6fd4a8b42a', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456930122, 'Firefox', 'Windows'),
(87, 1, '56d6fe190a083', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456930329, 'Firefox', 'Windows'),
(88, 3, '56d6fef6b070f', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456930550, 'Firefox', 'Windows'),
(89, 1, '56d6ff46cda63', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456930630, 'Firefox', 'Windows'),
(90, 3, '56d7008462e6e', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456930948, 'Firefox', 'Windows'),
(91, 1, '56d70327183c4', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456931623, 'Firefox', 'Windows'),
(92, 1, '56d7c95a6298c', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1456982362, 'Firefox', 'Windows'),
(93, 1, '56d88a87513a9', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1457031815, 'Firefox', 'Windows'),
(94, 3, '56d88ac804f4c', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1457031880, 'Firefox', 'Windows'),
(95, 1, '56d97cb67503d', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1457093814, 'Firefox', 'Windows'),
(96, 1, '56dfbd506d3c6', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1457503568, 'Firefox', 'Windows'),
(97, 1, '56e28362bb231', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0', 1457685346, 'Firefox', 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `vehicle_model_id` int(11) NOT NULL,
  `rc_number` varchar(45) NOT NULL,
  `total_seats` int(3) NOT NULL,
  `has_air_conditioning` tinyint(1) DEFAULT '0',
  `has_gps` tinyint(1) DEFAULT '0',
  `has_luggage_carrier` tinyint(1) DEFAULT '0',
  `has_lcd` tinyint(1) DEFAULT '0',
  `is_approved` tinyint(1) DEFAULT '0',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_category`
--

CREATE TABLE `vehicle_category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_document`
--

CREATE TABLE `vehicle_document` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1',
  `document_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_model`
--

CREATE TABLE `vehicle_model` (
  `id` int(11) NOT NULL,
  `vehicle_category_id` int(11) NOT NULL,
  `model_name` varchar(45) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `agency_name` varchar(45) NOT NULL,
  `area` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(6) DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT '0',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `user_id`, `name`, `agency_name`, `area`, `address`, `pincode`, `is_approved`, `create_at`, `update_at`, `is_active`) VALUES
(1, 7, 'Brijesh Vendor 1', 'Brijesh Agency 1', 'Delhi', 'This is test address', 213213, 1, '2016-03-10 12:18:46', '2016-03-10 12:18:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_document`
--

CREATE TABLE `vendor_document` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `document_type_id` int(11) NOT NULL,
  `file_name` varchar(45) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_driver`
--

CREATE TABLE `vendor_driver` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_has_region`
--

CREATE TABLE `vendor_has_region` (
  `vendor_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_has_region`
--

INSERT INTO `vendor_has_region` (`vendor_id`, `region_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_one_way_rate`
--

CREATE TABLE `vendor_one_way_rate` (
  `id` int(11) NOT NULL,
  `vendor_vehicle_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `rate` float(5,3) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_round_trip_rate`
--

CREATE TABLE `vendor_round_trip_rate` (
  `id` int(11) NOT NULL,
  `vendor_vehicle_id` int(11) NOT NULL,
  `min_km` int(5) NOT NULL,
  `rate_per_km` float(5,2) NOT NULL,
  `rate_per_hour` float(5,2) NOT NULL,
  `ta_da_per_day` float(5,2) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_vehicle`
--

CREATE TABLE `vendor_vehicle` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wiwigo_customer_price_group`
--

CREATE TABLE `wiwigo_customer_price_group` (
  `id` int(11) NOT NULL,
  `vehicle_category_id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`),
  ADD KEY `fk_auth_item_group_code` (`group_code`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_item_group`
--
ALTER TABLE `auth_item_group`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_vendor_driver1_idx` (`vendor_driver_id`),
  ADD KEY `fk_booking_vendor_vehicle1_idx` (`vendor_vehicle_id`),
  ADD KEY `fk_booking_customer1_idx` (`customer_id`),
  ADD KEY `fk_booking_booking_status1_idx` (`booking_status_id`),
  ADD KEY `fk_booking_price_engine1_idx` (`price_engine_id`),
  ADD KEY `fk_booking_booking_type1_idx` (`booking_type_id`);

--
-- Indexes for table `booking_alert`
--
ALTER TABLE `booking_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_alert_send`
--
ALTER TABLE `booking_alert_send`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_alert_send_booking_alert1_idx` (`booking_alert_id`),
  ADD KEY `fk_booking_alert_send_booking1_idx` (`booking_id`);

--
-- Indexes for table `booking_history`
--
ALTER TABLE `booking_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_history_user1_idx` (`create_by_user_id`),
  ADD KEY `fk_booking_history_booking1_idx` (`booking_id`);

--
-- Indexes for table `booking_route_cities`
--
ALTER TABLE `booking_route_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_route_cities_city1_idx` (`source_city_id`),
  ADD KEY `fk_booking_route_cities_city2_idx` (`destination_city_id`),
  ADD KEY `fk_booking_route_cities_booking1_idx` (`booking_id`);

--
-- Indexes for table `booking_status`
--
ALTER TABLE `booking_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_type`
--
ALTER TABLE `booking_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `city_category_type` (`city_class_type`),
  ADD KEY `fk_city_state1_idx` (`state_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_coupen_coupen_type1_idx` (`coupon_type_id`);

--
-- Indexes for table `coupon_type`
--
ALTER TABLE `coupon_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title_UNIQUE` (`title`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_user1_idx` (`user_id`);

--
-- Indexes for table `customer_has_coupon`
--
ALTER TABLE `customer_has_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_has_coupen_coupen1_idx` (`coupon_id`),
  ADD KEY `fk_customer_has_coupen_customer1_idx` (`customer_id`);

--
-- Indexes for table `customer_wallet`
--
ALTER TABLE `customer_wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_wallet_customer1_idx` (`customer_id`);

--
-- Indexes for table `document_type`
--
ALTER TABLE `document_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_driver_user1_idx` (`user_id`);

--
-- Indexes for table `driver_document`
--
ALTER TABLE `driver_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_driver_driver1_idx` (`driver_id`),
  ADD KEY `fk_driver_document_type1_idx` (`document_type_id`);

--
-- Indexes for table `end_city_has_coupon`
--
ALTER TABLE `end_city_has_coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `end_city_id_UNIQUE` (`end_city_id`),
  ADD KEY `fk_end_city_has_coupen_coupen1_idx` (`coupon_id`);

--
-- Indexes for table `end_state_has_coupon`
--
ALTER TABLE `end_state_has_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_end_state_has_coupen_coupen1_idx` (`coupon_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `operation_user`
--
ALTER TABLE `operation_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operator_user1_idx` (`user_id`);

--
-- Indexes for table `price_engine`
--
ALTER TABLE `price_engine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_price_engine_wiwigo_customer_price_group1_idx` (`wiwigo_customer_price_group_id`),
  ADD KEY `fk_price_engine_booking_type1_idx` (`booking_type_id`);

--
-- Indexes for table `price_engine_expression`
--
ALTER TABLE `price_engine_expression`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_price_engine_expression_price_engine1_idx` (`price_engine_id`);

--
-- Indexes for table `price_engine_master_parameter`
--
ALTER TABLE `price_engine_master_parameter`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `price_engine_parameter`
--
ALTER TABLE `price_engine_parameter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `price_engine_id_UNIQUE` (`price_engine_id`),
  ADD UNIQUE KEY `parameter_name_UNIQUE` (`parameter_name`),
  ADD KEY `fk_price_engine_parameter_price_engine1_idx` (`price_engine_id`),
  ADD KEY `fk_price_engine_parameter_price_engine_master_parameter1_idx` (`parameter_name`);

--
-- Indexes for table `referral_has_coupon`
--
ALTER TABLE `referral_has_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_referral_has_coupon_customer1_idx` (`referral_customer_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title_UNIQUE` (`region_name`),
  ADD KEY `fk_region_state_city_state1_idx` (`state_id`),
  ADD KEY `fk_region_state_city_city1_idx` (`city_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_route_city1_idx` (`source_city_id`),
  ADD KEY `fk_route_city2_idx` (`destination_city_id`);

--
-- Indexes for table `route_has_coupon`
--
ALTER TABLE `route_has_coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `route_id_UNIQUE` (`route_id`),
  ADD KEY `fk_route_has_copen_coupen1_idx` (`coupon_id`),
  ADD KEY `fk_route_has_copen_route1_idx` (`route_id`);

--
-- Indexes for table `start_city_has_coupon`
--
ALTER TABLE `start_city_has_coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `start_city_UNIQUE` (`start_city`),
  ADD KEY `fk_start_city_has_coupen_coupen1_idx` (`coupon_id`);

--
-- Indexes for table `start_state_has_coupon`
--
ALTER TABLE `start_state_has_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_start_state_has_coupen_coupen1_idx` (`coupon_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `state_name` (`name`),
  ADD KEY `state_popular_city_id_1` (`popular_city_1_id`),
  ADD KEY `state_popular_city_id_2` (`popular_city_2_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rc_number_UNIQUE` (`rc_number`),
  ADD KEY `fk_vehicle_vehicle_model1_idx` (`vehicle_model_id`);

--
-- Indexes for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vehicle_document_vehicle1_idx` (`vehicle_id`),
  ADD KEY `fk_vehicle_document_document_type1_idx` (`document_type_id`);

--
-- Indexes for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vehicle_model_vehicle_category1_idx` (`vehicle_category_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vendor_user1_idx` (`user_id`);

--
-- Indexes for table `vendor_document`
--
ALTER TABLE `vendor_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vendor_document_vendor1_idx` (`vendor_id`),
  ADD KEY `fk_vendor_document_document_type1_idx` (`document_type_id`);

--
-- Indexes for table `vendor_driver`
--
ALTER TABLE `vendor_driver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vendor_driver_vendor1_idx` (`vendor_id`),
  ADD KEY `fk_vendor_driver_driver1_idx` (`driver_id`);

--
-- Indexes for table `vendor_has_region`
--
ALTER TABLE `vendor_has_region`
  ADD PRIMARY KEY (`vendor_id`,`region_id`),
  ADD KEY `fk_vendor_has_region_region1_idx` (`region_id`),
  ADD KEY `fk_vendor_has_region_vendor1_idx` (`vendor_id`);

--
-- Indexes for table `vendor_one_way_rate`
--
ALTER TABLE `vendor_one_way_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vendor_one_way_rate_vendor_vehicle1_idx` (`vendor_vehicle_id`),
  ADD KEY `fk_vendor_one_way_rate_route1_idx` (`route_id`);

--
-- Indexes for table `vendor_round_trip_rate`
--
ALTER TABLE `vendor_round_trip_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vendor_round_trip_reate_vendor_vehicle1_idx` (`vendor_vehicle_id`);

--
-- Indexes for table `vendor_vehicle`
--
ALTER TABLE `vendor_vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vendor_vehicle_vehicle1_idx` (`vehicle_id`),
  ADD KEY `fk_vendor_vehicle_vendor1_idx` (`vendor_id`);

--
-- Indexes for table `wiwigo_customer_price_group`
--
ALTER TABLE `wiwigo_customer_price_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wiwigo_customer_price_group_vehicle_category1_idx` (`vehicle_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking_alert`
--
ALTER TABLE `booking_alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking_alert_send`
--
ALTER TABLE `booking_alert_send`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking_history`
--
ALTER TABLE `booking_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking_route_cities`
--
ALTER TABLE `booking_route_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking_status`
--
ALTER TABLE `booking_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking_type`
--
ALTER TABLE `booking_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1550;
--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupon_type`
--
ALTER TABLE `coupon_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_has_coupon`
--
ALTER TABLE `customer_has_coupon`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `document_type`
--
ALTER TABLE `document_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `driver_document`
--
ALTER TABLE `driver_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `end_city_has_coupon`
--
ALTER TABLE `end_city_has_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operation_user`
--
ALTER TABLE `operation_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `price_engine`
--
ALTER TABLE `price_engine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `price_engine_parameter`
--
ALTER TABLE `price_engine_parameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `referral_has_coupon`
--
ALTER TABLE `referral_has_coupon`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `route_has_coupon`
--
ALTER TABLE `route_has_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `start_city_has_coupon`
--
ALTER TABLE `start_city_has_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `start_state_has_coupon`
--
ALTER TABLE `start_state_has_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor_document`
--
ALTER TABLE `vendor_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_driver`
--
ALTER TABLE `vendor_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_one_way_rate`
--
ALTER TABLE `vendor_one_way_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_round_trip_rate`
--
ALTER TABLE `vendor_round_trip_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_vehicle`
--
ALTER TABLE `vendor_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wiwigo_customer_price_group`
--
ALTER TABLE `wiwigo_customer_price_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_auth_item_group_code` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_booking_status1` FOREIGN KEY (`booking_status_id`) REFERENCES `booking_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_booking_type1` FOREIGN KEY (`booking_type_id`) REFERENCES `booking_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_price_engine1` FOREIGN KEY (`price_engine_id`) REFERENCES `price_engine` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_vendor_driver1` FOREIGN KEY (`vendor_driver_id`) REFERENCES `vendor_driver` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_vendor_vehicle1` FOREIGN KEY (`vendor_vehicle_id`) REFERENCES `vendor_vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `booking_alert_send`
--
ALTER TABLE `booking_alert_send`
  ADD CONSTRAINT `fk_booking_alert_send_booking1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_alert_send_booking_alert1` FOREIGN KEY (`booking_alert_id`) REFERENCES `booking_alert` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `booking_history`
--
ALTER TABLE `booking_history`
  ADD CONSTRAINT `fk_booking_history_booking1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_history_user1` FOREIGN KEY (`create_by_user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `booking_route_cities`
--
ALTER TABLE `booking_route_cities`
  ADD CONSTRAINT `fk_booking_route_cities_booking1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_route_cities_city1` FOREIGN KEY (`source_city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_route_cities_city2` FOREIGN KEY (`destination_city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_city_state1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `coupon`
--
ALTER TABLE `coupon`
  ADD CONSTRAINT `fk_coupen_coupen_type1` FOREIGN KEY (`coupon_type_id`) REFERENCES `coupon_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer_has_coupon`
--
ALTER TABLE `customer_has_coupon`
  ADD CONSTRAINT `fk_customer_has_coupen_coupen1` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_has_coupen_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer_wallet`
--
ALTER TABLE `customer_wallet`
  ADD CONSTRAINT `fk_customer_wallet_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `fk_driver_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `driver_document`
--
ALTER TABLE `driver_document`
  ADD CONSTRAINT `fk_driver_document_type1` FOREIGN KEY (`document_type_id`) REFERENCES `document_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_driver_driver1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `end_city_has_coupon`
--
ALTER TABLE `end_city_has_coupon`
  ADD CONSTRAINT `fk_end_city_has_coupen_coupen1` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `end_state_has_coupon`
--
ALTER TABLE `end_state_has_coupon`
  ADD CONSTRAINT `fk_end_state_has_coupen_coupen1` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `operation_user`
--
ALTER TABLE `operation_user`
  ADD CONSTRAINT `fk_operator_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `price_engine`
--
ALTER TABLE `price_engine`
  ADD CONSTRAINT `fk_price_engine_booking_type1` FOREIGN KEY (`booking_type_id`) REFERENCES `booking_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_price_engine_wiwigo_customer_price_group1` FOREIGN KEY (`wiwigo_customer_price_group_id`) REFERENCES `wiwigo_customer_price_group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `price_engine_expression`
--
ALTER TABLE `price_engine_expression`
  ADD CONSTRAINT `fk_price_engine_expression_price_engine1` FOREIGN KEY (`price_engine_id`) REFERENCES `price_engine` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `price_engine_parameter`
--
ALTER TABLE `price_engine_parameter`
  ADD CONSTRAINT `fk_price_engine_parameter_price_engine1` FOREIGN KEY (`price_engine_id`) REFERENCES `price_engine` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_price_engine_parameter_price_engine_master_parameter1` FOREIGN KEY (`parameter_name`) REFERENCES `price_engine_master_parameter` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `referral_has_coupon`
--
ALTER TABLE `referral_has_coupon`
  ADD CONSTRAINT `fk_referral_has_coupon_customer1` FOREIGN KEY (`referral_customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `fk_region_state_city_city1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_region_state_city_state1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `fk_route_city1` FOREIGN KEY (`source_city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_route_city2` FOREIGN KEY (`destination_city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `route_has_coupon`
--
ALTER TABLE `route_has_coupon`
  ADD CONSTRAINT `fk_route_has_copen_coupen1` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_route_has_copen_route1` FOREIGN KEY (`route_id`) REFERENCES `route` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `start_city_has_coupon`
--
ALTER TABLE `start_city_has_coupon`
  ADD CONSTRAINT `fk_start_city_has_coupen_coupen1` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `start_state_has_coupon`
--
ALTER TABLE `start_state_has_coupon`
  ADD CONSTRAINT `fk_start_state_has_coupen_coupen1` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicle_vehicle_model1` FOREIGN KEY (`vehicle_model_id`) REFERENCES `vehicle_model` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  ADD CONSTRAINT `fk_vehicle_document_document_type1` FOREIGN KEY (`document_type_id`) REFERENCES `document_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_document_vehicle1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  ADD CONSTRAINT `fk_vehicle_model_vehicle_category1` FOREIGN KEY (`vehicle_category_id`) REFERENCES `vehicle_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `fk_vendor_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor_document`
--
ALTER TABLE `vendor_document`
  ADD CONSTRAINT `fk_vendor_document_document_type1` FOREIGN KEY (`document_type_id`) REFERENCES `document_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendor_document_vendor1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor_driver`
--
ALTER TABLE `vendor_driver`
  ADD CONSTRAINT `fk_vendor_driver_driver1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendor_driver_vendor1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor_has_region`
--
ALTER TABLE `vendor_has_region`
  ADD CONSTRAINT `fk_vendor_has_region_region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendor_has_region_vendor1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor_one_way_rate`
--
ALTER TABLE `vendor_one_way_rate`
  ADD CONSTRAINT `fk_vendor_one_way_rate_route1` FOREIGN KEY (`route_id`) REFERENCES `route` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendor_one_way_rate_vendor_vehicle1` FOREIGN KEY (`vendor_vehicle_id`) REFERENCES `vendor_vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor_round_trip_rate`
--
ALTER TABLE `vendor_round_trip_rate`
  ADD CONSTRAINT `fk_vendor_round_trip_reate_vendor_vehicle1` FOREIGN KEY (`vendor_vehicle_id`) REFERENCES `vendor_vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor_vehicle`
--
ALTER TABLE `vendor_vehicle`
  ADD CONSTRAINT `fk_vendor_vehicle_vehicle1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendor_vehicle_vendor1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wiwigo_customer_price_group`
--
ALTER TABLE `wiwigo_customer_price_group`
  ADD CONSTRAINT `fk_wiwigo_customer_price_group_vehicle_category1` FOREIGN KEY (`vehicle_category_id`) REFERENCES `vehicle_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
