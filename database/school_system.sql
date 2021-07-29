/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : school_system

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 29/07/2021 19:31:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `country_id` int NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp,
  `updated_at` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES (1, 'Karachi', 1, 'Active', '2021-07-15 18:49:44', '2021-07-29 18:27:51');
INSERT INTO `city` VALUES (2, 'Lahore', 1, 'Active', '2021-07-15 18:49:50', '2021-07-29 18:27:52');
INSERT INTO `city` VALUES (3, 'Hyderabad', 2, 'Active', '2021-07-15 18:50:02', '2021-07-29 18:27:52');
INSERT INTO `city` VALUES (4, 'Mumbai', 2, 'Active', '2021-07-17 13:55:27', '2021-07-29 18:27:53');
INSERT INTO `city` VALUES (5, 'Hong Kong', 3, 'Active', '2021-07-17 13:57:27', '2021-07-29 18:27:55');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp,
  `updated_at` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES (1, 'Class One', 'Active', '2021-07-15 18:49:44', '2021-07-15 18:49:46');
INSERT INTO `class` VALUES (2, 'Class Two', 'Deactive', '2021-07-15 18:49:50', '2021-07-27 13:55:46');
INSERT INTO `class` VALUES (3, 'Class Threee', 'Active', '2021-07-15 18:50:02', '2021-07-17 18:35:23');
INSERT INTO `class` VALUES (4, 'Class Ten', 'Active', '2021-07-17 13:55:27', '2021-07-27 18:19:58');
INSERT INTO `class` VALUES (5, 'Class Five', 'Deactive', '2021-07-17 13:57:27', '2021-07-17 13:57:27');

-- ----------------------------
-- Table structure for country
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp,
  `updated_at` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES (1, 'Pakistan', 'Active', '2021-07-15 18:49:44', '2021-07-29 18:23:06');
INSERT INTO `country` VALUES (2, 'India', 'Active', '2021-07-15 18:49:50', '2021-07-29 18:23:31');
INSERT INTO `country` VALUES (3, 'China', 'Active', '2021-07-15 18:50:02', '2021-07-29 18:23:20');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2021_07_13_134102_create_teachers_table', 2);
INSERT INTO `migrations` VALUES (5, '2021_07_29_130519_create_students_table', 3);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` int NOT NULL,
  `country_id` int NOT NULL,
  `city_id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES (1, 'Ali Raza', '2021-07-09', 'asdflkjasdlfasdlj', 13213, 1, 1, 11, 'Active', '2021-07-29 13:44:07', '2021-07-29 13:44:07');

-- ----------------------------
-- Table structure for teachers
-- ----------------------------
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` int NOT NULL,
  `class_id` int NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teachers
-- ----------------------------
INSERT INTO `teachers` VALUES (4, 'test2', '1234562@gmailo.com', 1234567892, 4, '1231321', '2021-07-13 14:48:26', '2021-07-15 14:19:07');
INSERT INTO `teachers` VALUES (5, 'Teacher123', '123@gmail.ccom123', 123456789, 3, '123456789', '2021-07-27 13:14:57', '2021-07-27 13:14:57');
INSERT INTO `teachers` VALUES (6, 'Teacher1231', '1231@gmail.ccom123', 123456789, 3, '1234567891', '2021-07-27 13:14:57', '2021-07-27 13:14:57');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'ALI RAZA', 'alriaza@gmail.com', NULL, '123123', NULL, 'default.png', '2021-07-10 13:17:36', '2021-07-10 13:17:36');
INSERT INTO `users` VALUES (2, 'test', 'test@gmail.com', NULL, '$2y$10$q88Y7K1pKeh0qK4kawgae.yiTu6rbI2JBA6TcPzmXJP34mpSMksyO', NULL, 'default.png', '2021-07-10 13:20:08', '2021-07-10 13:20:08');
INSERT INTO `users` VALUES (3, 'ALI RAZA 32', 'test@test.com', NULL, '$2y$10$HbL1b7vFlI3WFinowCqh3e7rWRolMpiGb9EjYVOyH0fyBjXZihR1i', NULL, 'default.png', '2021-07-10 13:37:59', '2021-07-10 13:37:59');
INSERT INTO `users` VALUES (4, 'test', 'test@gmailo.com', NULL, '$2y$10$MCI9VJy7C6oYqsXwVGjcbuoni1Kv/Bn8YAnfcu.qJk0G4LM3rERTS', NULL, 'default.png', '2021-07-10 13:45:34', '2021-07-10 13:45:34');
INSERT INTO `users` VALUES (5, 'ali raza', 'aliraza@gmail.com', NULL, '$2y$10$LPMlgZDQPulnQGPs.MzWtuUSDLlXhN0BOasal1V0e7HiLDgiEfLC.', NULL, 'default.png', '2021-07-10 13:51:27', '2021-07-10 13:51:27');
INSERT INTO `users` VALUES (6, 'aliraza1', 'aliraza1@gmail.com', NULL, '$2y$10$VJoD1/FmIKjNc6PDEAkqAe.Zda1gDdoXFITAZI54eLBTzVG9LZHUi', NULL, 'default.png', '2021-07-10 14:27:37', '2021-07-10 14:27:37');
INSERT INTO `users` VALUES (7, 'Ali Raza', 'aliraza12@gmail.com', NULL, '$2y$10$JKDgHLIyoesmu0UuUtu4Meh7x5wtUq6CpKa5po4cLD8ui0ZCRokQC', NULL, 'default.png', '2021-07-15 13:25:26', '2021-07-15 13:25:26');
INSERT INTO `users` VALUES (8, 'Ali Raza', 'aliraza@yopmail.com', NULL, '$2y$10$rc.FkSedGBr/4nbBF6LWLee1RBemfSHIyhi3wus7vo3zoyuxMY72O', NULL, 'default.png', '2021-07-17 13:00:21', '2021-07-17 13:00:21');
INSERT INTO `users` VALUES (9, 'Ali raza', 'testtest@gmail.com', NULL, '$2y$10$LNGJM00StB6PJqHksId.tufSXUTymX.RVQ5wpYhxHVdPBbfkuU3gG', NULL, 'default.png', '2021-07-27 13:10:15', '2021-07-27 13:10:15');
INSERT INTO `users` VALUES (11, 'Ali Raza', 'alirazatest@gmail.com', NULL, '$2y$10$0FvzTS9rbivO12N5lVb/oeIzSV8MjZJkIRXZRLuTx.3ympXtrIwee', NULL, 'default.png', '2021-07-29 13:44:07', '2021-07-29 13:44:07');

SET FOREIGN_KEY_CHECKS = 1;
