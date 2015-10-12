/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50544
Source Host           : localhost:3306
Source Database       : webmobil

Target Server Type    : MYSQL
Target Server Version : 50544
File Encoding         : 65001

Date: 2015-10-12 07:38:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for m_about
-- ----------------------------
DROP TABLE IF EXISTS `m_about`;
CREATE TABLE `m_about` (
  `m_about_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_about_desc` mediumtext,
  `m_about_active` enum('T','Y') DEFAULT 'Y',
  `m_about_created_date` timestamp NULL DEFAULT NULL,
  `m_about_created_by` int(11) DEFAULT NULL,
  `m_about_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_about_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_about
-- ----------------------------
INSERT INTO `m_about` VALUES ('1', '<p>test</p>\n\n<p>&nbsp;</p>\n\n<p>sdfasdf</p>\n\n<p><strong>a</strong></p>\n\n<p><strong>a</strong></p>\n\n<p><strong>asdfasfasdfasdfd</strong></p>\n\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/webmobil/Pictures/asdf/5.jpg\" style=\"height:480px; width:480px\" /></p>\n', 'Y', null, null, '2015-10-10 10:10:16', '1');

-- ----------------------------
-- Table structure for m_categories
-- ----------------------------
DROP TABLE IF EXISTS `m_categories`;
CREATE TABLE `m_categories` (
  `m_categories_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_categories_nama` varchar(255) DEFAULT NULL,
  `m_categories_active` enum('T','Y') DEFAULT 'Y',
  `m_categories_created_date` timestamp NULL DEFAULT NULL,
  `m_categories_created_by` int(11) DEFAULT NULL,
  `m_categories_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_categories_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_categories
-- ----------------------------
INSERT INTO `m_categories` VALUES ('1', 'Mobil Sedan', 'Y', null, null, '2015-10-04 20:32:32', '1');

-- ----------------------------
-- Table structure for m_perusahaan
-- ----------------------------
DROP TABLE IF EXISTS `m_perusahaan`;
CREATE TABLE `m_perusahaan` (
  `m_perusahaan_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_perusahaan_nama` varchar(255) DEFAULT NULL,
  `m_perusahaan_alamat` varchar(255) DEFAULT NULL,
  `m_perusahaan_phone` varchar(255) DEFAULT NULL,
  `m_perusahaan_email` varchar(100) DEFAULT NULL,
  `m_perusahaan_fax` varchar(100) DEFAULT NULL,
  `m_perusahaan_longitude` int(20) DEFAULT NULL,
  `m_perusahaan_langitude` int(20) DEFAULT NULL,
  `m_perusahaan_active` enum('T','Y') DEFAULT 'Y',
  `m_perusahaan_created_date` timestamp NULL DEFAULT NULL,
  `m_perusahaan_created_by` int(11) DEFAULT NULL,
  `m_perusahaan_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_perusahaan_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_perusahaan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_perusahaan
-- ----------------------------
INSERT INTO `m_perusahaan` VALUES ('2', 'teste', 'jalan jakarta', '085822328382', 'test', '0293882293', null, null, 'Y', '2015-10-04 20:09:41', '1', '2015-10-09 21:50:05', '1');
INSERT INTO `m_perusahaan` VALUES ('3', 'testttest', 'testsetes', '0993838', 'sese@g.com', '02932323', null, null, 'T', '2015-10-09 21:47:46', '1', '2015-10-09 21:49:54', '1');
INSERT INTO `m_perusahaan` VALUES ('4', 'asdf', 'testsetes', '0993838', 'sese@g.com', '02932323', null, null, 'T', '2015-10-09 21:51:23', '1', '2015-10-09 21:51:23', '1');

-- ----------------------------
-- Table structure for m_product
-- ----------------------------
DROP TABLE IF EXISTS `m_product`;
CREATE TABLE `m_product` (
  `m_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_product_nama` varchar(255) DEFAULT NULL,
  `m_product_desc` mediumtext,
  `m_product_disc` double(5,0) DEFAULT NULL,
  `m_product_price` double(20,0) DEFAULT NULL,
  `m_product_price_disc` double(20,0) DEFAULT NULL COMMENT 'harga setelah diskon',
  `m_categories_id` int(11) DEFAULT NULL,
  `m_product_active` enum('T','Y') DEFAULT 'Y',
  `m_product_created_date` timestamp NULL DEFAULT NULL,
  `m_product_created_by` int(11) DEFAULT NULL,
  `m_product_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_product_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_product
-- ----------------------------
INSERT INTO `m_product` VALUES ('1', 'All New Avanza', 'testest', '10', '2000000', '18000000', '0', 'Y', null, null, '2015-10-11 01:41:20', '1');
INSERT INTO `m_product` VALUES ('2', 'All new xenia', '\n           teste                 ', '1', '12222', '11112', '1', 'Y', null, null, null, null);

-- ----------------------------
-- Table structure for s_user
-- ----------------------------
DROP TABLE IF EXISTS `s_user`;
CREATE TABLE `s_user` (
  `s_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_user_nama` varchar(100) DEFAULT NULL,
  `s_user_pass` varchar(100) DEFAULT NULL,
  `s_user_aktif` enum('N','Y') DEFAULT 'Y',
  `s_user_created_date` timestamp NULL DEFAULT NULL,
  `s_user_created_by` int(11) DEFAULT NULL,
  `s_user_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `s_user_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of s_user
-- ----------------------------
INSERT INTO `s_user` VALUES ('1', 'iqbal', 'e10adc3949ba59abbe56e057f20f883e', 'Y', null, null, null, null);
INSERT INTO `s_user` VALUES ('2', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Y', null, null, null, null);

-- ----------------------------
-- Table structure for t_photoproduct
-- ----------------------------
DROP TABLE IF EXISTS `t_photoproduct`;
CREATE TABLE `t_photoproduct` (
  `t_photoproduct_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_photoproduct_nama` varchar(255) DEFAULT NULL,
  `t_photoproduct_main` int(1) DEFAULT '0' COMMENT 'tampil sebagai foto utama atau bukan',
  `m_product_id` int(11) DEFAULT NULL,
  `t_photoproduct_created_date` timestamp NULL DEFAULT NULL,
  `t_photoproduct_created_by` int(11) DEFAULT NULL,
  `t_photoproduct_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `t_photoproduct_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_photoproduct_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_photoproduct
-- ----------------------------
INSERT INTO `t_photoproduct` VALUES ('2', '5.jpg', '0', '1', '2015-10-11 14:11:29', '1', '2015-10-11 14:11:29', '1');
INSERT INTO `t_photoproduct` VALUES ('7', 'Selection_025.jpg', '0', '2', '2015-10-11 14:30:26', '1', '2015-10-11 14:30:26', '1');
INSERT INTO `t_photoproduct` VALUES ('8', 'video-2012-04-27-17-25-44.mp4', '0', '2', '2015-10-11 14:36:16', '1', '2015-10-11 14:36:16', '1');
INSERT INTO `t_photoproduct` VALUES ('9', 'DSC_3016.JPG', '1', '1', '2015-10-11 14:52:40', '1', '2015-10-11 14:56:24', '1');
