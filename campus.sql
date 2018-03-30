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

 Date: 30/03/2018 20:26:43
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
  `c_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `disable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`, `company_name`) USING BTREE,
  INDEX `company_name`(`company_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of companys
-- ----------------------------
INSERT INTO `companys` VALUES (1, '公司A', '123', '黄飞燕233', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司1', '2016年上半年互联网最佳产品。A+轮。中国知识服务行业知名品牌；\r\n\r\n中国最大的知识行家网络，国内最大的行家成长生态。严选超过2万名各领域行家；', 0);
INSERT INTO `companys` VALUES (2, '公司B', '123', '黄飞燕2', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司', '无人机领域核心模块供应商、国际化团队、空中数据搬运工。杭州若联科技有限公司由欧洲海归博士组建，在机器人控制和计算机网络领域拥有多项专利和创新技术，核心产品致力于为工业客户提供高性能无人机飞控模块和无人机整体解决方案。我们聚焦在人工智能技术在工业物联网，无线通信和嵌入式计算领域的应用，开发高可靠性、高性能、高集成度的机器人核心组件。未来，我们的产品将应用于空中、陆地、水面等移动机器人，推动智能机器人的发展。', 0);
INSERT INTO `companys` VALUES (3, '公司c', '123', '黄飞燕3', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司', '我们是一群怀揣梦想的年轻人，我们有激情、有动力将梦想实现。期待你的加入！致力于为移动应用开发者提供高效易用的工具和服务来提高中国软件研发的效率和水平。通过蒲公英分发托管，开发者可以快速发布应用, 极大简化了内测分发流程；通过Tracup轻量级Bug管理平台，开发者可以便捷管理项目、追踪Bug，更加理想地无缝工作；通过FrongtJS网站错误监控平台，开发者可以快速追踪并修复网站故障。', 1);
INSERT INTO `companys` VALUES (4, '公司D', '123', '黄飞燕4', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司4', '我的生活in记，每个生活瞬间都值得被记录。成立2010年，位于浙江杭州，目前有两百多位员工，是一个致力于构建一个让人与人联接更美好的社交网络平台的团队，公司创始人清水、黑羽。 \r\n\r\n我们的行为准则：\r\n\r\n直心对事直心对人\r\n\r\n一件事儿要么不接，接了就需要有100%的信心去搞定它。\r\n\r\n付出不亚于别人的努力，是否真正尽到了最后1%的努力。', 1);
INSERT INTO `companys` VALUES (5, '公司F', '123', '黄飞燕F', '17858952904', '515978951@qq.com', '浙江湖州', '科技有限公司', '国内最大的礼物电商，拥有2000万用户，获得红杉、腾讯共3000多万美金融资。双休13薪、五险一金。国内最大的礼物电商，获得红杉、腾讯共3000多万美金融资，包括导购、新零售、企业礼品定制、小程序四大业务。礼物说app，拥有2000万用户，全网粉丝超100万的短视频内容媒体。新零售，3个月覆盖五大省市，30家礼物直营店月销售额近200万。企业礼品定制，有超过100家定制大客户，如万科、雪佛兰、商汤、脉脉、拉勾等。小程序，在春节期间新增10万用户，创造了全新送礼方式。', 0);

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `j_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `persons` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `c_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date_time` datetime(0) NOT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `c_name`(`c_name`) USING BTREE,
  CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`c_name`) REFERENCES `companys` (`company_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------
INSERT INTO `jobs` VALUES (1, '前端开发', '1000-2000', '1、计算机相关专业本科及以上学历；2、了解HTML5、CSS3、Javascript，对es6/ts等新技术栈有涉猎者优先；3、至少了解并使用过Vue/React/AngularJS/等新式主流框架中的一种或多种；4、精通浏览器调试工具的各种功能及利用它的调试方法；5、计算机专业基础扎实，对算法、数据结构、网络等有一定的理解 ；6、热爱前端技术、有高度的技术敏感度、广阔的技术视野；7、沟通能力强，良好的团队合作意识 ； \r\n', '1', '公司B', '2018-03-24 18:55:35', 1);
INSERT INTO `jobs` VALUES (2, 'UI设计', '1000-2000', '1、参与产品PC、移动端UI设计，包括视觉交互规范设计，及产品日常迭代的设计更新；2、参与产品PC、移动端产品设计中的交互及用户体验优化；3、团队日常其他设计', '2', '公司A', '2018-03-25 18:55:48', 0);
INSERT INTO `jobs` VALUES (4, 'java实习生', '1000-2000', '1. 熟练使用 Python/Java/Ruby 中的任何一门语言;2. 熟悉 RESTful 服务，深刻理解 MVC、OOP、AOP 等概念, 了解微服务架构理念以及实现技术;3. 熟练使用关系、文档性数据库;4. 熟悉缓存、消息队列、定时任务等相关技术;5. 能独立分析问题, 善于研究业务, 分析产品;6. 为人踏实, 善良正直, 热爱学习技术, 长期关注技术的发展趋势;7. github 与 stackoverflow 贡献者优先，对开源社区有贡献者优', '5', '公司A', '2018-03-30 18:55:53', 1);
INSERT INTO `jobs` VALUES (20, '1', '2', '4', '3', '公司A', '2018-03-30 19:48:03', NULL);

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
