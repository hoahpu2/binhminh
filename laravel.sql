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

 Date: 13/11/2021 14:28:35
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
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (8, 0, 'Danh muc 1', 'danh-muc-1', 1, '2021-11-10 13:04:32', '2021-11-10 13:04:32', 1);
INSERT INTO `category` VALUES (9, 8, 'Danh muc 2', 'danh-muc-2', 1, '2021-11-10 13:04:44', '2021-11-10 13:04:44', 2);
INSERT INTO `category` VALUES (10, 9, 'Danh muc 3', 'danh-muc-3', 1, '2021-11-10 13:04:53', '2021-11-10 13:04:53', 3);
INSERT INTO `category` VALUES (11, 8, 'Danh muc 4', 'danh-muc-4', 1, '2021-11-10 13:20:49', '2021-11-12 12:15:58', 2);
INSERT INTO `category` VALUES (12, 8, 'Danh muc 5', 'danh-muc-5', 1, '2021-11-10 13:21:24', '2021-11-12 12:15:46', 2);
INSERT INTO `category` VALUES (13, 0, 'Me nu chaaaaa', 'me-nu-chaaaaa', 1, '2021-11-12 12:59:42', '2021-11-12 12:59:42', 1);

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
  `CT_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`CT_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, '1', '1', '1', '1', '1', '1', '2021-09-18 21:51:14', '2021-11-11 15:29:33', '<h2>Về C&ocirc;ng Ty IPE 1</h2>\r\n\r\n<p>C&ocirc;ng Ty TNHH IPE Việt Nam (IPE) chuy&ecirc;n cung cấp c&aacute;c giải ph&aacute;p tự động ho&aacute; th&ocirc;ng minh v&agrave; thiết bị phụ trợ sản xuất trong ng&agrave;nh c&ocirc;ng nghiệp điện tử, oto,&hellip; (Xem chi tiết&nbsp;Hồ sơ năng lực C&ocirc;ng ty IPE).</p>\r\n\r\n<p>Với hơn 5 năm kinh nghiệm nhập khẩu, ph&acirc;n phối v&agrave; nghi&ecirc;n cứu c&aacute;c giải ph&aacute;p về thiết bị tự động ho&aacute;, c&ugrave;ng đội ngũ nh&acirc;n vi&ecirc;n kinh doanh v&agrave; kỹ thuật nhiệt huyết, gi&agrave;u kinh nghiệm.</p>\r\n\r\n<p><img alt=\"\" src=\"http://ipe.vn/wp-content/uploads/2021/08/ve-cong-ty-ipe-1024x678.jpg\" style=\"height:675px; width:1020px\" /></p>\r\n\r\n<p>Lĩnh vực hoạt động</p>\r\n\r\n<p>IPE l&agrave; c&ocirc;ng ty chuy&ecirc;n tư vấn v&agrave; cung cấp c&aacute;c giải ph&aacute;p c&ocirc;ng nghệ để gi&uacute;p c&aacute;c doanh nghiệp tăng năng suất sản xuất. Ch&uacute;ng t&ocirc;i cung cấp c&aacute;c sản phẩm, giải ph&aacute;p v&agrave; dịch vụ sau:</p>\r\n\r\n<p><img alt=\"f64e097ee25716094f46\" src=\"http://ipe.vn/wp-content/uploads/elementor/thumbs/f64e097ee25716094f46-pahcqzv2gelcg8nwslnh8u4jt6ed535pus2svrw1yw.jpg\" /></p>\r\n\r\n<p><em><strong>System Integration</strong></em></p>\r\n\r\n<ul>\r\n	<li>Ch&uacute;ng t&ocirc;i tạo ra những m&aacute;y m&oacute;c, thiết bị nhằm thay thế sức lao động của con nhiều , cải thiện hoạt động sản xuất.</li>\r\n</ul>\r\n\r\n<p><img alt=\"007c50e9bbc04f9e16d1\" src=\"http://ipe.vn/wp-content/uploads/elementor/thumbs/007c50e9bbc04f9e16d1-pahdbt0frd2vhgfqa3h4y32x99twjursds0sdb1a7s.jpg\" /></p>\r\n\r\n<p><strong><em>Machine Vision</em></strong></p>\r\n\r\n<ul>\r\n	<li>Lắp đặt, triển khai hệ thống gi&aacute;m s&aacute;t lỗi sản phẩm tr&ecirc;n d&acirc;y chuyền sản xuất với c&ocirc;ng nghệ ti&ecirc;n tiến đến từ Cognex.</li>\r\n</ul>\r\n\r\n<p><img alt=\"98f98e3e7f178b49d206\" src=\"http://ipe.vn/wp-content/uploads/elementor/thumbs/98f98e3e7f178b49d206-paj4q4wq9hf1zt832n9t85b36ciiibgri9jy4f01yw.jpg\" /></p>\r\n\r\n<p><em><strong>High Quality &amp; Precision Product</strong></em></p>\r\n\r\n<ul>\r\n	<li>Cung cấp da dạng c&aacute;c thiết bị tự động h&oacute;a chất lượng tốt nhằm đ&aacute;p ứng nhu cầu ng&agrave;y c&agrave;ng cao của kh&aacute;ch h&agrave;ng.</li>\r\n</ul>');

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
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `N_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `N_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `N_alias` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `N_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `N_status` tinyint(1) NULL DEFAULT NULL,
  `N_avatar` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`N_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'tiêu đề tin tức nhé', 'tieu-de-tin-tuc-nhe-121121114905', '<h2>Về C&ocirc;ng Ty IPE 1</h2>\r\n\r\n<p>C&ocirc;ng Ty TNHH IPE Việt Nam (IPE) chuy&ecirc;n cung cấp c&aacute;c giải ph&aacute;p tự động ho&aacute; th&ocirc;ng minh v&agrave; thiết bị phụ trợ sản xuất trong ng&agrave;nh c&ocirc;ng nghiệp điện tử, oto,&hellip; (Xem chi tiết&nbsp;Hồ sơ năng lực C&ocirc;ng ty IPE).</p>\r\n\r\n<p>Với hơn 5 năm kinh nghiệm nhập khẩu, ph&acirc;n phối v&agrave; nghi&ecirc;n cứu c&aacute;c giải ph&aacute;p về thiết bị tự động ho&aacute;, c&ugrave;ng đội ngũ nh&acirc;n vi&ecirc;n kinh doanh v&agrave; kỹ thuật nhiệt huyết, gi&agrave;u kinh nghiệm.</p>\r\n\r\n<p><img alt=\"\" src=\"http://ipe.vn/wp-content/uploads/2021/08/ve-cong-ty-ipe-1024x678.jpg\" /></p>\r\n\r\n<p>Lĩnh vực hoạt động</p>\r\n\r\n<p>IPE l&agrave; c&ocirc;ng ty chuy&ecirc;n tư vấn v&agrave; cung cấp c&aacute;c giải ph&aacute;p c&ocirc;ng nghệ để gi&uacute;p c&aacute;c doanh nghiệp tăng năng suất sản xuất. Ch&uacute;ng t&ocirc;i cung cấp c&aacute;c sản phẩm, giải ph&aacute;p v&agrave; dịch vụ sau:</p>\r\n\r\n<p><img alt=\"f64e097ee25716094f46\" src=\"http://ipe.vn/wp-content/uploads/elementor/thumbs/f64e097ee25716094f46-pahcqzv2gelcg8nwslnh8u4jt6ed535pus2svrw1yw.jpg\" /></p>', 1, '2NfF247377382_640455167120352_7794492591420000256_n.jpg', '2021-11-12 11:49:05', '2021-11-12 11:27:10');

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 9, 'sdasdsadasd', 'sdasdsadasd-121121122007', '<p><img alt=\"10STLBF Van bi gang dùng cho gas\" src=\"http://valveskitz.com/hinh/10STLBF-Van-bi-gang-dung-cho-gas.jpg\" /></p>\r\n\r\n<p>C&ocirc;ng ty ch&uacute;ng t&ocirc;i chuy&ecirc;n cung cấp c&aacute;c sản phẩm v&agrave; thiết bị ni&ecirc;m phong van cho c&aacute;c dự &aacute;n, c&ocirc;ng tr&igrave;nh, nh&agrave; m&aacute;y lớn trong cả nước v&agrave; dịch vụ bảo tr&igrave; v&agrave; sửa chữa. Ch&uacute;ng t&ocirc;i sẽ s&aacute;t c&aacute;nh v&agrave; sẵn s&agrave;ng hỗ trợ v&agrave; tư vấn cho kh&aacute;ch h&agrave;ng của ch&uacute;ng t&ocirc;i để chọn giải ph&aacute;p tối ưu; Đảm bảo chất lượng cho việc mua sắm thiết bị v&agrave; vật tư cho dự &aacute;n, nhu cầu cụ thể của kh&aacute;ch h&agrave;ng về sử dụng c&ocirc;ng nghiệp cho lĩnh vực nồi hơi, h&oacute;a chất, thực phẩm, xử l&yacute; nước thải, cung cấp thiết bị v&agrave; nước, dầu, kh&iacute; đốt, đ&oacute;ng t&agrave;u, điện lạnh C&aacute;c sản phẩm chất lượng cao n&agrave;y được sản xuất theo ti&ecirc;u chuẩn quốc tế như ống ISO 9001- 2000, 4064, mặt b&iacute;ch van &ndash; hai chiều &ndash; một chiều &ndash; van Kỹ thuật &ndash; van bướm, van cầu, van bằng đồng, van hợp kim, van vườn; Đồng hồ nước, ren mạ kẽm Phụ kiện, phụ kiện SCH h&agrave;n chất lượng cao, mặt b&iacute;ch, m&otilde;m bơm, ổn định khớp, lọc y tế, van cứu hỏa, ph&ograve;ng ch&aacute;y chữa ch&aacute;y Sản phẩm ti&ecirc;u chuẩn BS, ASTM, JIS, ANSI, API</p>', 0, 0, '1', '9zwj266444_11d51ca0-49b3-4fef-8007-2d6a27315d1b.jpg', '11', 0, 0, 0, ' ', 1, '2021-09-18 15:06:12', '2021-11-12 12:20:07', NULL);
INSERT INTO `product` VALUES (2, 9, '16329 – Acti 9 Iprf1, PRD1', '16329-acti-9-iprf1-prd1-121121122120', '<p><strong>C&aacute;c d&ograve;ng sản phẩm của Acti 9 iprf1, PRD1:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.schneider-electric.com.vn/en/product-range/61706-acti-9-iprf1%2C--prd1/?N=1301045116+3019932533&amp;Nr=AND%28OR%28product.catalogId%3Acatalog250014%29%2Cproduct.siteId%3A3300006%29&amp;parent-category-id=1600&amp;parent-subcategory-id=1615#tabs\">Surge arrester</a></li>\r\n	<li><a href=\"https://www.schneider-electric.com.vn/en/product-range/61706-acti-9-iprf1%2C--prd1/?N=1301045116+2051900386&amp;Nr=AND%28OR%28product.catalogId%3Acatalog250014%29%2Cproduct.siteId%3A3300006%29&amp;parent-category-id=1600&amp;parent-subcategory-id=1615#tabs\">Surge arrester với pluggable cartridge</a></li>\r\n</ul>\r\n\r\n<p><strong>Sản phẩm đại diện:</strong></p>\r\n\r\n<p><img alt=\"16329 Hình ảnh sản phẩm Schneider Electric \" src=\"https://download.schneider-electric.com/files?p_Doc_Ref=PB104257&amp;p_File_Type=rendition_288_png&amp;default_image=DefaultProductImage.png\" /></p>\r\n\r\n<p>Phạm vi: Acti 9 iPRF1, PRD1</p>\r\n\r\n<p>-m&aacute;y chống s&eacute;t kiểu m&ocirc;-đun</p>\r\n\r\n<p>Bộ tăng đột biến m&ocirc;-đun PRD1 25r&nbsp;&ndash;&nbsp;1 cực&nbsp;&ndash; 350V &ndash;&nbsp;với điều khiển từ xa</p>\r\n\r\n<p><strong>Sản phẩm thuộc d&ograve;ng:</strong>&nbsp;<strong>Surge arrester</strong></p>\r\n\r\n<p><strong>T&iacute;nh năng, đặc điểm &amp; th&ocirc;ng số kĩ thuật:</strong></p>\r\n\r\n<p><strong>Main</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>RANGE OF PRODUCT</th>\r\n			<td>\r\n			<p>Multi 9</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>PRODUCT NAME</th>\r\n			<td>\r\n			<p>Multi 9 PRD1</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>PRODUCT OR COMPONENT TYPE</th>\r\n			<td>\r\n			<p>Surge arrester with pluggable cartridge</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>DEVICE SHORT NAME</th>\r\n			<td>\r\n			<p>PRD1 25r</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>DEVICE APPLICATION</th>\r\n			<td>\r\n			<p>Distribution</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>POLES DESCRIPTION</th>\r\n			<td>\r\n			<p>1P</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>REMOTE SIGNALLING</th>\r\n			<td>\r\n			<p>With</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SIGNAL CONTACTS COMPOSITION</th>\r\n			<td>\r\n			<p>1 SD (1 C/O)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SURGE ARRESTER TYPE</th>\r\n			<td>\r\n			<p>Electrical distribution network</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>EARTHING SYSTEM</th>\r\n			<td>\r\n			<p>IT 230<br />\r\n			TN-C</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Environment</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>STANDARDS</th>\r\n			<td>\r\n			<p>EN 61643-11 : 2012<br />\r\n			IEC 61643-11 : 2011</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>PRODUCT CERTIFICATIONS</th>\r\n			<td>\r\n			<p>CE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>QUALITY LABELS</th>\r\n			<td>\r\n			<p>KEMA-KEUR</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>IP DEGREE OF PROTECTION</th>\r\n			<td>\r\n			<p>On front face : IP40 conforming to IEC 60529<br />\r\n			Built-in : IP20 conforming to IEC 60529</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>IK DEGREE OF PROTECTION</th>\r\n			<td>\r\n			<p>IK05 conforming to IEC 62262</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>RELATIVE HUMIDITY</th>\r\n			<td>\r\n			<p>5&hellip;95 %</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>OPERATING ALTITUDE</th>\r\n			<td>\r\n			<p>2000 m</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>AMBIENT AIR TEMPERATURE FOR OPERATION</th>\r\n			<td>\r\n			<p>-25&hellip;60 &deg;C</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>AMBIENT AIR TEMPERATURE FOR STORAGE</th>\r\n			<td>\r\n			<p>-40&hellip;80 &deg;C</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Complementary</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>SURGE ARRESTER CLASS TYPE</th>\r\n			<td>\r\n			<p>Type 1 + 2</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SURGE ARRESTER TECHNOLOGY</th>\r\n			<td>\r\n			<p>MOV<br />\r\n			Spark gap</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[UE] RATED OPERATIONAL VOLTAGE</th>\r\n			<td>\r\n			<p>230 V (+/- 10 %) AC 50 Hz</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[IN] NOMINAL DISCHARGE CURRENT</th>\r\n			<td>\r\n			<p>Common mode : 25 kA L/PE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[IMAX] MAXIMUM DISCHARGE CURRENT</th>\r\n			<td>\r\n			<p>Common mode : 40 kA L/PE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[IIMP] IMPULSE CURRENT</th>\r\n			<td>\r\n			<p>Common mode : 25 kA L/PE 12.5 A.s</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[UC] MAXIMUM CONTINUOUS OPERATING VOLTAGE</th>\r\n			<td>\r\n			<p>Common mode : 350 V L/PE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[UP] VOLTAGE PROTECTION LEVEL</th>\r\n			<td>\r\n			<p>1.5 kV type 2 common mode L/PE</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[UT] TEMPORARY OVERVOLTAGE</th>\r\n			<td>\r\n			<p>Withstand : 1200 V N/PE for 200 ms<br />\r\n			Withstand : 415 V L/N for 5 s<br />\r\n			Safe failure mode : 440 V L/N for 7200 s</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[IF] FOLLOW CURRENT</th>\r\n			<td>\r\n			<p>3 kA differential mode L/N<br />\r\n			100 A common mode N/PE<br />\r\n			25 kA differential mode L/N</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>DISCONNECTOR DEVICE TYPE</th>\r\n			<td>\r\n			<p>Associated fuse gG 315 A according to standard<br />\r\n			Associated circuit breaker Compact NSX100B 100 A curve C &ndash; Icu 10 kA<br />\r\n			Associated circuit breaker Compact NSX100B 100 A curve C &ndash; Icu 15 kA<br />\r\n			Associated circuit breaker Compact NSX100B 100 A curve C &ndash; Icu 25 kA</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>[ISCCR] SHORT-CIRCUIT CURRENT RATING</th>\r\n			<td>\r\n			<p>25 kA</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>LOCAL SIGNALLING</th>\r\n			<td>\r\n			<p>Flag color: white/red</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SIGNALLING CIRCUIT VOLTAGE</th>\r\n			<td>\r\n			<p>1 A/250 V AC<br />\r\n			1 A/30 V DC</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>MOUNTING MODE</th>\r\n			<td>\r\n			<p>Clip-on</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>MOUNTING SUPPORT</th>\r\n			<td>\r\n			<p>DIN rail</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>9 MM PITCHES</th>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HEIGHT</th>\r\n			<td>\r\n			<p>90 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>WIDTH</th>\r\n			<td>\r\n			<p>36 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>DEPTH</th>\r\n			<td>\r\n			<p>71 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>PRODUCT WEIGHT</th>\r\n			<td>\r\n			<p>334 g</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>COLOUR</th>\r\n			<td>\r\n			<p>Anthracite grey ( RAL 7016 )</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>MATERIAL</th>\r\n			<td>\r\n			<p>PBT (polybutylene terephthalate)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>RESPONSE TIME</th>\r\n			<td>\r\n			<p>&lt;= 25 ns</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>CONNECTIONS &ndash; TERMINALS</th>\r\n			<td>\r\n			<p>Tunnel type terminal, top or bottom 10&hellip;35 mm&sup2; cable(s) rigid<br />\r\n			Tunnel type terminal, top or bottom 10&hellip;25 mm&sup2; cable(s) flexible</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>TIGHTENING TORQUE</th>\r\n			<td>\r\n			<p>4.5 N.m</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>C&aacute;c sản phẩm kh&aacute;c của d&ograve;ng:</strong></p>\r\n\r\n<table style=\"width:822px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3><strong><a href=\"https://www.schneider-electric.com.vn/en/product/16330/prd1-25r-modular-surge-arrester---1-pole-%2B-n---350v---with-remote-transfer/?range=61706-acti-9-iprf1%252c--prd1&amp;node=166377288-modular-surge-arrester&amp;filter=business-5-residential-and-small-business&amp;parent-category-id=1600\" target=\"_blank\">16330</a></strong></h3>\r\n			</td>\r\n			<td>\r\n			<h3><strong><a href=\"https://www.schneider-electric.com.vn/en/product/16331/prd1-25r-modular-surge-arrester---3-poles---350v---with-remote-transfer/?range=61706-acti-9-iprf1%252c--prd1&amp;node=166377288-modular-surge-arrester&amp;filter=business-5-residential-and-small-business&amp;parent-category-id=1600\" target=\"_blank\">16331</a></strong></h3>\r\n			</td>\r\n			<td>\r\n			<h3><strong><a href=\"https://www.schneider-electric.com.vn/en/product/16332/prd1-25r-modular-surge-arrester---3-poles-%2B-n---350v---with-remote-transfer/?range=61706-acti-9-iprf1%252c--prd1&amp;node=166377288-modular-surge-arrester&amp;filter=business-5-residential-and-small-business&amp;parent-category-id=1600\" target=\"_blank\">16332</a></strong></h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h3><strong><a href=\"https://www.schneider-electric.com.vn/en/product/16360/prd1-master-modular-surge-arrester---1-pole---350v---with-remote-transfer/?range=61706-acti-9-iprf1%252c--prd1&amp;node=166377288-modular-surge-arrester&amp;filter=business-5-residential-and-small-business&amp;parent-category-id=1600\" target=\"_blank\">16360</a></strong></h3>\r\n			</td>\r\n			<td>\r\n			<h3><strong><a href=\"https://www.schneider-electric.com.vn/en/product/16361/prd1-master-modular-surge-arrester---1-pole-%2B-n---350v---with-remote-transfer/?range=61706-acti-9-iprf1%252c--prd1&amp;node=166377288-modular-surge-arrester&amp;filter=business-5-residential-and-small-business&amp;parent-category-id=1600\" target=\"_blank\">16361</a></strong></h3>\r\n			</td>\r\n			<td>\r\n			<h3><strong><a href=\"https://www.schneider-electric.com.vn/en/product/16362/prd1-master-modular-surge-arrester---3-poles---350v---with-remote-transfer/?range=61706-acti-9-iprf1%252c--prd1&amp;node=166377288-modular-surge-arrester&amp;filter=business-5-residential-and-small-business&amp;parent-category-id=1600\" target=\"_blank\">16362</a></strong></h3>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 0, '1', 'mHG2jis_10k_rising.jpg', 'Bộ tăng đột biến mô-đun PRD1 25r – 1 cực – 350V – với điều khiển từ xa', 0, 0, 0, ' ', 1, '2021-11-10 16:35:56', '2021-11-12 12:21:20', NULL);
INSERT INTO `product` VALUES (3, 9, 'Bộ Điều Khiển Tốc Độ AirTAC Dòng PSL', 'bo-dieu-khien-toc-do-airtac-dong-psl-121121045043', '<p>1. Vật liệu th&eacute;p kh&ocirc;ng gỉ 304 c&oacute; thể được sử dụng trong việc cấm điều kiện đồng.</p>\r\n\r\n<p>2. Bộ giảm thanh c&oacute; k&iacute;ch thước nhỏ v&agrave; trọng lượng nhẹ với kh&ocirc;ng gian lắp đặt nhỏ.</p>\r\n\r\n<p>3. Chất lượng d&ograve;ng chảy tuyệt vời, độ nhạy cao v&agrave; dễ điều chỉnh.</p>\r\n\r\n<p>4. Th&acirc;n đồng thau giảm thanh &aacute;p dụng quy tr&igrave;nh mạ niken đặc biệt, c&oacute; khả năng chống ăn m&ograve;n v&agrave; chống &ocirc; nhiễm tốt.</p>\r\n\r\n<p>5. Cấu tr&uacute;c chống rơi được thiết kế tr&ecirc;n thanh điều chỉnh.</p>\r\n\r\n<p>6. Chất tr&aacute;m được phủ tr&ecirc;n phần ren c&oacute; thể đảm bảo kh&ocirc;ng r&ograve; rỉ phần kết nối ren.</p>\r\n\r\n<p>7. Hướng ing của bộ điều khiển tốc độ phổ qu&aacute;t c&oacute; thể được điều chỉnh trong 360 &deg;.</p>\r\n\r\n<p><img alt=\"\" src=\"http://ipe.vn/wp-content/uploads/2019/04/%C4%90%E1%BA%A7u-N%E1%BB%91i-AirTAC-D%C3%B2ng-PKG-2.jpg\" style=\"height:145px; width:638px\" /></p>', 0, 0, 'xxxxx', 'UC4yBộ-Điều-Khiển-Tốc-Độ-AirTAC-Dòng-PSL.jpg', 'Bộ Điều Khiển Tốc Độ AirTAC Dòng PSL', 0, 0, 0, ' ', 1, '2021-11-12 16:50:43', '2021-11-12 16:50:43', NULL);

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `SL_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `SL_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `SL_alt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `SL_status` tinyint(4) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `SL_detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`SL_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, 'clB31.jpeg', 'Ứng dụng vào dây chuyền lắp ráp điện thoại di động', 1, '2021-11-11 14:43:29', '2021-11-11 14:52:43', '<p>Trong một thị trường sản xuất điện thoại di động to&agrave;n cầu đầy cạnh tranh, c&aacute;c nh&agrave; sản xuất phải nhanh nhẹn khi đưa ra c&aacute;c quyết định cải tiến chất lượng v&agrave; năng suất, do đ&oacute; việc mở rộng sản xuất l&agrave; điều cần thiết.</p>\r\n\r\n<p>xxx</p>');
INSERT INTO `slider` VALUES (2, 'uZSW7a53a05c3dedc9b390fc.jpg', 'Máy Kiểm Tra Lắp Ráp Điện Thoại Di Động', 1, '2021-11-11 14:46:12', '2021-11-11 14:46:12', '<p>V&agrave;o cuối d&acirc;y chuyền lắp r&aacute;p, c&ocirc;ng nh&acirc;n sẽ phải d&agrave;nh nhiều thời gian để kiểm tra xem c&aacute;c linh kiện điện tử đ&atilde; đ&uacute;ng, c&oacute; đầy đủ hay chưa. Kiểm tra trực quan bằng mắt như vậy dễ xảy ra thiếu s&oacute;t.</p>');
INSERT INTO `slider` VALUES (3, 'PKeqe05cb4392f88dbd68299.jpg', 'Máy Kiểm Tra Khung, Khuôn Điện Thoại Di Động', 1, '2021-11-11 14:46:44', '2021-11-11 14:46:44', '<p>Trong một thị trường sản xuất điện thoại di động to&agrave;n cầu đầy cạnh tranh, c&aacute;c nh&agrave; sản xuất phải nhanh nhẹn khi đưa ra c&aacute;c quyết định cải tiến chất lượng v&agrave; năng suất, do đ&oacute; việc mở rộng sản xuất l&agrave; điều cần thiết.</p>');

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
INSERT INTO `users` VALUES (1, '1', 'admin@gmail.com', '1sdfsdfsd', '0000-00-00 00:00:00', 1, '$2y$10$/V6uqjkxPUbErapu445p6.zpuILhu6kcwoJm9oPUREl1in2kMjqXG', '1', '2021-09-18 21:53:15', '2021-09-24 21:53:20');

SET FOREIGN_KEY_CHECKS = 1;
