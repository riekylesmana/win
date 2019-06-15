/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : win

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2019-06-15 21:07:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for files
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of files
-- ----------------------------
INSERT INTO `files` VALUES ('1', 'test', 'public/files/ojFpJ8POhoQojStGx6kDyvaMQCg0FW6l2M4kSfoK.txt', '2019-06-15 13:29:44', '2019-06-15 13:29:44');
INSERT INTO `files` VALUES ('3', 'test up image', 'public/files/khshjat38gJla7FbwvJ1Iopbaj3xxrQ7k4VksnWv.jpeg', '2019-06-15 13:55:39', '2019-06-15 13:55:39');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2019_06_15_112513_create_product_table', '1');
INSERT INTO `migrations` VALUES ('2', '2019_06_15_131609_create_files_migration', '2');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'product 1', '10', '50000', '2019-06-15 11:50:14', '2019-06-15 11:50:14');
INSERT INTO `products` VALUES ('2', 'donat', '50', '10000', '2019-06-15 11:50:14', '2019-06-15 11:50:14');
SET FOREIGN_KEY_CHECKS=1;
