-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour nerf-battle
CREATE DATABASE IF NOT EXISTS `nerf-battle` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `nerf-battle`;

-- Listage de la structure de la table nerf-battle. form_data
CREATE TABLE IF NOT EXISTS `form_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL DEFAULT '0',
  `adress` varchar(255) NOT NULL DEFAULT '0',
  `adress_info` varchar(255) NOT NULL DEFAULT '0',
  `city` varchar(255) NOT NULL DEFAULT '0',
  `postal_code` varchar(255) NOT NULL DEFAULT '0',
  `location` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) NOT NULL DEFAULT '0',
  `mail` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table nerf-battle. form_data_adress
CREATE TABLE IF NOT EXISTS `form_data_adress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT '0',
  `last_name` varchar(255) DEFAULT '0',
  `adress` varchar(255) DEFAULT '0',
  `adress_info` varchar(255) DEFAULT '0',
  `city` varchar(255) DEFAULT '0',
  `postal_code` varchar(255) DEFAULT '0',
  `location` varchar(255) DEFAULT '0',
  `phone` varchar(255) DEFAULT '0',
  KEY `FK_form_data_adress_form_data` (`id`),
  CONSTRAINT `FK_form_data_adress_form_data` FOREIGN KEY (`id`) REFERENCES `form_data` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table nerf-battle. paiment


-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table nerf-battle. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `offer` int(10) DEFAULT NULL,
  `price_offer` int(10) DEFAULT NULL,
  `fake_price` int(10) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `offer_popularity` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `paiment` (
  `id_form` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  KEY `id_form` (`id_form`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `id_form` FOREIGN KEY (`id_form`) REFERENCES `form_data` (`id`),
  CONSTRAINT `id_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
