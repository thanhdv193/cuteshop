/*
Navicat MySQL Data Transfer

Source Server         : Home
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-10-22 12:24:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for image_type
-- ----------------------------
DROP TABLE IF EXISTS `image_type`;
CREATE TABLE `image_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `object_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `object_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
