/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-11-09 17:16:10
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of backend_menu
-- ----------------------------
INSERT INTO `backend_menu` VALUES ('50', '0', 'Menu Admin', 'backend/backend-menu', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('51', '0', 'Quản lý Banner', 'aaaa', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('52', '0', 'Quản lý sản phẩm', 'aaaaa', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('53', '50', 'Danh sách menu', 'http://localhost:803/index.php/backend/backend-menu/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('54', '50', 'Thêm menu', 'http://localhost:803/backend/backend-menu/create', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('55', '51', 'Thêm mới banner', 'http://localhost:803/backend/banner/create', null, '1', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('56', '51', 'Danh sách banner', 'http://localhost:803/backend/banner/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('57', '52', 'Thêm mới sản phẩm', 'http://localhost:803/backend/product/create', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('58', '52', 'Danh sách sản phẩm', 'http://localhost:803/backend/product/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('59', '0', 'Quản lý user', 'http://localhost:803/backend/user', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('60', '59', 'Danh sách user', 'http://localhost:803/backend/user/index', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('61', '59', 'Thêm mới user', 'http://localhost:803/backend/user/create', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('62', '0', 'Quản lý nhóm sản phẩm', 'http://localhost:803/1', null, '0', null, null, null, 'app');
INSERT INTO `backend_menu` VALUES ('64', '62', 'Danh sách nhóm sản phẩm', 'http://localhost:803/backend/product-group', null, '1', null, null, null, 'app');
