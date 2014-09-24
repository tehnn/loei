/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306-appserv
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : loei

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2014-09-24 10:37:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(255) NOT NULL default '',
  `password` varchar(255) default NULL,
  `fullname` varchar(255) default NULL,
  `officeid` varchar(255) default NULL,
  `role` enum('admin','user') default NULL,
  `lastlogin` varchar(255) default NULL,
  `countlogin` int(11) default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('admin', '112233', 'ADMIN01', 'อายุรกรรมชาย', null, '2014-09-24 10:37:40', '1');
INSERT INTO `user` VALUES ('user', '112233', 'USER01', 'งานIT', null, null, null);
