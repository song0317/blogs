/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-08-15 19:14:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_type_id` int(11) DEFAULT NULL,
  `t_title` varchar(255) DEFAULT NULL,
  `t_content` varchar(255) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `t_source` varchar(255) DEFAULT NULL,
  `t_author` varchar(255) DEFAULT NULL,
  `t_status` varchar(255) DEFAULT NULL,
  `t_top` varchar(255) DEFAULT NULL,
  `t_time` datetime DEFAULT NULL,
  `t_up_time` datetime DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', 'yii框架的CURD实用篇', 'yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇', null, null, 'admin', null, null, '2016-08-14 20:05:03', '2016-08-14 20:04:55');
INSERT INTO `article` VALUES ('2', '1', 'yii框架的CURD基础篇', 'yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇', null, '', 'admin', '', '', '2016-08-08 20:05:03', '2016-08-14 20:04:55');
INSERT INTO `article` VALUES ('3', '1', 'yii框架的CURD技能篇', 'yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇	', null, '', 'admin', '', '', '2016-08-03 20:05:03', '2016-08-14 20:04:55');
INSERT INTO `article` VALUES ('4', '1', 'yii框架的CURD1篇', 'yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇	', null, '', 'admin', '', '', '2016-08-05 20:05:03', '2016-08-14 20:04:55');
INSERT INTO `article` VALUES ('5', '1', 'yii框架的CURD实用篇1', 'yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇	', null, '', 'admin', '', '', '2016-08-06 20:05:03', '2016-08-14 20:04:55');
INSERT INTO `article` VALUES ('6', '1', 'yii框架的CURD实用篇2', 'yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇	', null, '', 'admin', '', '', '2016-08-10 20:05:03', '2016-08-14 20:04:55');
INSERT INTO `article` VALUES ('7', '1', 'yii框架的CURD实用篇3', 'yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇yii框架的CURD基础篇	', null, '', 'admin', '', '', '2016-08-13 20:05:03', '2016-08-14 20:04:55');

-- ----------------------------
-- Table structure for clcik
-- ----------------------------
DROP TABLE IF EXISTS `clcik`;
CREATE TABLE `clcik` (
  `c_id` int(11) NOT NULL,
  `c_num` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clcik
-- ----------------------------

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_content` varchar(255) DEFAULT NULL,
  `c_time` datetime DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_in_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for session
-- ----------------------------
DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `session_id` varchar(50) NOT NULL,
  `session_data` varchar(50) DEFAULT NULL,
  `session_time` datetime DEFAULT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of session
-- ----------------------------
INSERT INTO `session` VALUES ('1sn39c551c5tp6l2ouok0jsik1', 'admin', '2016-08-15 18:44:59');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tags
-- ----------------------------

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `t_type_id` int(11) NOT NULL,
  `t_type_name` varchar(255) DEFAULT NULL,
  `t_type_order` varchar(255) DEFAULT NULL,
  `t_type_source` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', 'yii框架实战', null, null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) DEFAULT NULL,
  `u_pass` varchar(255) DEFAULT NULL,
  `u_phone` varchar(255) DEFAULT NULL,
  `u_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin', '1111111111', '111111111111');
