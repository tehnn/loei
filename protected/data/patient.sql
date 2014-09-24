/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306-appserv
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : loei

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2014-09-24 12:53:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `patient`
-- ----------------------------
DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `cid` varchar(13) collate utf8_unicode_ci NOT NULL default '',
  `prename` varchar(255) collate utf8_unicode_ci default NULL,
  `name` varchar(255) collate utf8_unicode_ci default NULL,
  `lname` varchar(255) collate utf8_unicode_ci default NULL,
  `sex` varchar(255) collate utf8_unicode_ci default NULL,
  `age` int(8) default NULL,
  `disease` varchar(255) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of patient
-- ----------------------------
