/*
 Navicat Premium Data Transfer

 Source Server         : unica
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : laravel

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 10/11/2021 23:52:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for catecontent
-- ----------------------------
DROP TABLE IF EXISTS `catecontent`;
CREATE TABLE `catecontent`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CC_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `CC_number` int(11) NULL DEFAULT NULL,
  `CC_alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `CC_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `CC_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of catecontent
-- ----------------------------
INSERT INTO `catecontent` VALUES (1, 'dsfsdf', 1, 'dsfsdf', '0', '2021-09-18 15:04:00', '2021-09-18 15:04:00', NULL);

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `CA_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CA_parentId` tinyint(4) NOT NULL,
  `CA_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CA_alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CA_status` tinyint(4) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `CA_number` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`CA_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (8, 0, 'Danh muc 1', 'danh-muc-1', 1, '2021-11-10 13:04:32', '2021-11-10 13:04:32', 1);
INSERT INTO `category` VALUES (9, 8, 'Danh muc 2', 'danh-muc-2', 1, '2021-11-10 13:04:44', '2021-11-10 13:04:44', 2);
INSERT INTO `category` VALUES (10, 9, 'Danh muc 3', 'danh-muc-3', 1, '2021-11-10 13:04:53', '2021-11-10 13:04:53', 3);
INSERT INTO `category` VALUES (11, 9, 'Danh muc 4', 'danh-muc-4', 1, '2021-11-10 13:20:49', '2021-11-10 13:20:49', 3);
INSERT INTO `category` VALUES (12, 8, 'Danh muc 5', 'danh-muc-5', 1, '2021-11-10 13:21:24', '2021-11-10 13:21:24', 2);

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `CT_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CT_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CT_address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CT_linkFace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CT_linkYoutu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CT_linkGoogle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CT_Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`CT_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, '1', '1', '1', '1', '1', '1', '2021-09-18 21:51:14', '2021-09-15 21:51:18');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `IM_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `IM_PR_id` int(11) NOT NULL,
  `IM_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`IM_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (1, 1, 'Im1VWIN_20210907_18_25_49_Pro.jpg', '2021-09-18 15:06:12', '2021-09-18 15:06:12');
INSERT INTO `images` VALUES (2, 1, 'JrlxWIN_20210907_18_26_12_Pro.jpg', '2021-09-18 15:06:12', '2021-09-18 15:06:12');
INSERT INTO `images` VALUES (4, 1, 'Og7gWIN_20210907_18_29_36_Pro.jpg', '2021-09-18 15:06:47', '2021-09-18 15:06:47');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_03_03_232410_create_category_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_03_03_232433_create_product_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_03_03_232450_create_contact_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_03_03_232506_create_images_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_03_03_232520_create_silder_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `PR_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `PR_CA_id` int(11) NOT NULL,
  `PR_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PR_alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PR_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PR_price` int(11) NOT NULL,
  `PR_quantity` int(11) NOT NULL,
  `PR_SKU` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PR_avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PR_sortDesc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PR_sale` int(11) NOT NULL,
  `PR_view` int(11) NOT NULL,
  `PR_numberBuy` int(11) NOT NULL,
  `PR_producer` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PR_status` tinyint(4) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `PR_CC_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`PR_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 2, 'sdasdsadasd', 'sdasdsadasd-180921030647', '<p>&nbsp;</p>\r\n\r\n<p>gsfgdfgdfg</p>\r\n\r\n<p>fdgdfgdfg</p>', 111, 1, '1', '40UeWIN_20210907_18_25_34_Pro.jpg', '11', 1, 0, 0, '1', 1, '2021-09-18 15:06:12', '2021-09-18 15:06:47', NULL);
INSERT INTO `product` VALUES (2, 9, 'aaaaa', 'aaaaa-101121043556', '<h2>Về C&ocirc;ng Ty IPE</h2>\r\n\r\n<p>C&ocirc;ng Ty TNHH IPE Việt Nam (IPE) chuy&ecirc;n cung cấp c&aacute;c giải ph&aacute;p tự động ho&aacute; th&ocirc;ng minh v&agrave; thiết bị phụ trợ sản xuất trong ng&agrave;nh c&ocirc;ng nghiệp điện tử, oto,&hellip; (Xem chi tiết&nbsp;Hồ sơ năng lực C&ocirc;ng ty IPE).</p>\r\n\r\n<p>Với hơn 5 năm kinh nghiệm nhập khẩu, ph&acirc;n phối v&agrave; nghi&ecirc;n cứu c&aacute;c giải ph&aacute;p về thiết bị tự động ho&aacute;, c&ugrave;ng đội ngũ nh&acirc;n vi&ecirc;n kinh doanh v&agrave; kỹ thuật nhiệt huyết, gi&agrave;u kinh nghiệm.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/wp-content/uploads/2021/08/ve-cong-ty-ipe-1024x678.jpg\" style=\"height:675px; width:1020px\" /></p>\r\n\r\n<p>Lĩnh vực hoạt động</p>\r\n\r\n<p>IPE l&agrave; c&ocirc;ng ty chuy&ecirc;n tư vấn v&agrave; cung cấp c&aacute;c giải ph&aacute;p c&ocirc;ng nghệ để gi&uacute;p c&aacute;c doanh nghiệp tăng năng suất sản xuất. Ch&uacute;ng t&ocirc;i cung cấp c&aacute;c sản phẩm, giải ph&aacute;p v&agrave; dịch vụ sau:</p>\r\n\r\n<p><img alt=\"f64e097ee25716094f46\" src=\"http://127.0.0.1:8000/wp-content/uploads/elementor/thumbs/f64e097ee25716094f46-pahcqzv2gelcg8nwslnh8u4jt6ed535pus2svrw1yw.jpg\" /></p>\r\n\r\n<p>System Integration</p>\r\n\r\n<ul>\r\n	<li>Ch&uacute;ng t&ocirc;i tạo ra những m&aacute;y m&oacute;c, thiết bị nhằm thay thế sức lao động của con nhiều , cải thiện hoạt động sản xuất.</li>\r\n</ul>\r\n\r\n<p><img alt=\"007c50e9bbc04f9e16d1\" src=\"http://127.0.0.1:8000/wp-content/uploads/elementor/thumbs/007c50e9bbc04f9e16d1-pahdbt0frd2vhgfqa3h4y32x99twjursds0sdb1a7s.jpg\" /></p>\r\n\r\n<p>Machine Vision</p>\r\n\r\n<ul>\r\n	<li>Lắp đặt, triển khai hệ thống gi&aacute;m s&aacute;t lỗi sản phẩm tr&ecirc;n d&acirc;y chuyền sản xuất với c&ocirc;ng nghệ ti&ecirc;n tiến đến từ Cognex.</li>\r\n</ul>\r\n\r\n<p><img alt=\"98f98e3e7f178b49d206\" src=\"http://127.0.0.1:8000/wp-content/uploads/elementor/thumbs/98f98e3e7f178b49d206-paj4q4wq9hf1zt832n9t85b36ciiibgri9jy4f01yw.jpg\" /></p>\r\n\r\n<p>High Quality &amp; Precision Product</p>\r\n\r\n<ul>\r\n	<li>Cung cấp da dạng c&aacute;c thiết bị tự động h&oacute;a chất lượng tốt nhằm đ&aacute;p ứng nhu cầu ng&agrave;y c&agrave;ng cao của kh&aacute;ch h&agrave;ng.</li>\r\n</ul>', 1, 1, '1', 'AqYv247205242_278867517445810_6420386554087066421_n.jpg', 'aaaa', 1, 0, 0, '1', 1, '2021-11-10 16:35:56', '2021-11-10 16:35:56', NULL);

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `SL_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `SL_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SL_alt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SL_status` tinyint(4) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`SL_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `permission` tinyint(4) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '1', '1', '1sdfsdfsd', '0000-00-00 00:00:00', 1, '1', '1', '2021-09-18 21:53:15', '2021-09-24 21:53:20');

SET FOREIGN_KEY_CHECKS = 1;
