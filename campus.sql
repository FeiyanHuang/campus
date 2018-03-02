/*
 Navicat MySQL Data Transfer

 Source Server         : root
 Source Server Type    : MySQL
 Source Server Version : 50717
 Source Host           : localhost:3306
 Source Schema         : campus

 Target Server Type    : MySQL
 Target Server Version : 50717
 File Encoding         : 65001

 Date: 02/03/2018 20:47:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `admin_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tel` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'user1', '123', '黄飞燕', '17858952904');

-- ----------------------------
-- Table structure for companys
-- ----------------------------
DROP TABLE IF EXISTS `companys`;
CREATE TABLE `companys`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `boss` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tel` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `c_content` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `disable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`, `company_name`) USING BTREE,
  INDEX `company_name`(`company_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of companys
-- ----------------------------
INSERT INTO `companys` VALUES (1, '公司A', '123', '黄飞燕1', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司1', '公司简介1', 0);
INSERT INTO `companys` VALUES (2, '公司B', '123', '黄飞燕2', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司', '公司简介2', 0);
INSERT INTO `companys` VALUES (3, '公司c', '123', '黄飞燕3', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司', '公司简介3', 1);
INSERT INTO `companys` VALUES (4, '公司D', '123', '黄飞燕4', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司4', '公司简介4', 1);
INSERT INTO `companys` VALUES (5, '公司F', '123', '黄飞燕F', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司', '公司简介', 0);

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `j_content` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `persons` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `c_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `c_name`(`c_name`) USING BTREE,
  CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`c_name`) REFERENCES `companys` (`company_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------
INSERT INTO `jobs` VALUES (1, '前端开发', '1000-2000', '职位要求', '1', '公司B', 1);
INSERT INTO `jobs` VALUES (2, '后台开发', '1000-2000', '职位要求', '2', '公司A', 0);
INSERT INTO `jobs` VALUES (4, 'java实习生', '1000-2000', '职位要求', '5', '公司A', 1);

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `student_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `class` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tel` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `student_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES (1, '2014014884', '217627', '黄飞燕', '信息工程141', '17858952904');

SET FOREIGN_KEY_CHECKS = 1;
