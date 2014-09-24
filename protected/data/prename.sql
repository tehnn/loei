/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306-appserv
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : loei

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2014-09-24 12:53:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `prename`
-- ----------------------------
DROP TABLE IF EXISTS `prename`;
CREATE TABLE `prename` (
  `code` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `prename` varchar(255) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of prename
-- ----------------------------
INSERT INTO `prename` VALUES ('01', 'นาย');
INSERT INTO `prename` VALUES ('02', 'นาง');
INSERT INTO `prename` VALUES ('03', 'นางสาว');
INSERT INTO `prename` VALUES ('04', 'เด็กชาย');
INSERT INTO `prename` VALUES ('05', 'เด็กหญิง');
INSERT INTO `prename` VALUES ('06', 'พระภิกษุ');
