/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306-appserv
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : loei

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2014-09-24 09:56:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `password` varchar(255) collate utf8_unicode_ci default NULL,
  `fullname` varchar(255) collate utf8_unicode_ci default NULL,
  `role` enum('admin','user') collate utf8_unicode_ci default NULL,
  `countlogin` int(8) default NULL,
  `lastlogin` varchar(255) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('admin', '11223', 'ADMIN01', 'admin', null, null);
INSERT INTO `user` VALUES ('user', '112233', 'USER01', 'user', null, null);
