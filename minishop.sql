/*
 Navicat MySQL Data Transfer

 Source Server         : MAMP
 Source Server Type    : MySQL
 Source Server Version : 50642
 Source Host           : localhost:3307
 Source Schema         : minishop

 Target Server Type    : MySQL
 Target Server Version : 50642
 File Encoding         : 65001

 Date: 20/01/2019 22:10:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `img` varchar(255) DEFAULT 'img/no-image.png',
  `category` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of items
-- ----------------------------
BEGIN;
INSERT INTO `items` VALUES ('Jacket Ot Boga', 1000000, 'no-image.png', 'jacket', 2);
INSERT INTO `items` VALUES ('qwer', 1230, 'no-image.png', 'TV', 5);
INSERT INTO `items` VALUES ('IPhone XR', 29999, 'iphone_xr.jpg', 'phones', 37);
INSERT INTO `items` VALUES ('IPhoneXR-1', 30000, 'iphone_xr.jpg', 'phones', 38);
INSERT INTO `items` VALUES ('IPhone XR', 29999, 'iphone_xr.jpg', 'phones', 39);
INSERT INTO `items` VALUES ('IPhone XR', 29999, 'iphone_xr.jpg', 'phones', 40);
INSERT INTO `items` VALUES ('TELEK', 29999, 'no-image.png', 'phones, tv', 55);
INSERT INTO `items` VALUES ('TElevision', 29999, 'no-image.png', 'phones, tv', 57);
INSERT INTO `items` VALUES ('Samsung Galaxy 8+', 29999, 'no-image.png', 'Novaya Cagegoriya', 58);
COMMIT;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `user` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
BEGIN;
INSERT INTO `orders` VALUES ('test', 'IPhone XR', '2', 34);
INSERT INTO `orders` VALUES ('test5', 'IPhoneXR2', '1', 36);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('admin', '6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94');
INSERT INTO `users` VALUES ('awdawd', '0fad8c4e9d4f37fe15418f282446ccb2659c9345ac7eff2a98ac6ad16fe243eba64472937d4291b14b699b0a0ffa994a9a6feeaeddc13c5f87988927b8d09d14');
INSERT INTO `users` VALUES ('test', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f');
INSERT INTO `users` VALUES ('test1', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f');
INSERT INTO `users` VALUES ('test123', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f');
INSERT INTO `users` VALUES ('test2', '2f9959b230a44678dd2dc29f037ba1159f233aa9ab183ce3a0678eaae002e5aa6f27f47144a1a4365116d3db1b58ec47896623b92d85cb2f191705daf11858b8');
INSERT INTO `users` VALUES ('test3', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f');
INSERT INTO `users` VALUES ('yochered', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
