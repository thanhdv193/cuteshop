/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-10-20 15:44:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for backend_menu
-- ----------------------------
DROP TABLE IF EXISTS `backend_menu`;
CREATE TABLE `backend_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(10) unsigned DEFAULT '0',
  `added_by_ext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rbac_check` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `css_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `translation_category` varchar(120) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'app',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
