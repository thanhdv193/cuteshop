/*
Navicat MySQL Data Transfer

Source Server         : shop
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-10-26 21:02:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_category_id` int(10) unsigned NOT NULL,
  `product_group_id` int(10) unsigned NOT NULL,
  `product_node_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view_count` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `announce` text COLLATE utf8_unicode_ci,
  `sort_order` int(11) DEFAULT '0',
  `active` tinyint(4) DEFAULT '1',
  `price` float unsigned DEFAULT '0',
  `old_price` float unsigned DEFAULT '0',
  `quantity_current` int(10) unsigned DEFAULT NULL,
  `image_id` int(10) DEFAULT NULL,
  `create_date` int(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
