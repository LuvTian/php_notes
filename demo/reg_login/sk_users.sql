/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-04-17 12:33:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sk_users
-- ----------------------------
DROP TABLE IF EXISTS `sk_users`;
CREATE TABLE `sk_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET gbk NOT NULL,
  `password` varchar(32) CHARACTER SET gbk NOT NULL,
  `lastlogin` int(11) DEFAULT NULL,
  `is_manager` tinyint(1) DEFAULT NULL,
  `session_id` char(32) CHARACTER SET gbk DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sk_users
-- ----------------------------
INSERT INTO `sk_users` VALUES ('1', 'admin', 'caa3aae8e8c978310d84e3196c8d923b', '0', '2', '3b9a9d4670e649ec878ea07119becf18', '0');
