-- --------------------------------------------------------
-- 主机:                           101.200.83.150
-- 服务器版本:                        10.3.17-MariaDB - MariaDB Server
-- 服务器操作系统:                      Linux
-- HeidiSQL 版本:                  11.0.0.5992
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 kblog 的数据库结构
DROP DATABASE IF EXISTS `kblog`;
CREATE DATABASE IF NOT EXISTS `kblog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `kblog`;

-- 导出  表 kblog.blog 结构
DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 数据导出被取消选择。

-- 导出  表 kblog.user 结构
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 数据导出被取消选择。

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
