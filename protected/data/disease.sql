/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306-appserv
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : loei

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2014-09-24 12:53:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `disease`
-- ----------------------------
DROP TABLE IF EXISTS `disease`;
CREATE TABLE `disease` (
  `code` varchar(100) NOT NULL default '',
  `disease` varchar(255) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of disease
-- ----------------------------
INSERT INTO `disease` VALUES ('E', 'เบาหวาน');
INSERT INTO `disease` VALUES ('I', 'ความดัน');
INSERT INTO `disease` VALUES ('IE', 'เบาหวานและความดัน');
