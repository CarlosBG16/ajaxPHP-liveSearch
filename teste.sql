-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `USER`;
CREATE TABLE `USER` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `USER` (`ID`, `NOME`) VALUES
(2,	'Carlito Manuel'),
(3,	'Caio Costa'),
(4,	'Domingos OG'),
(5,	'Denilson VG'),
(6,	'Amelia Sebastião'),
(7,	'Amilson JS'),
(8,	'Arminda BT'),
(9,	'Arminda BT'),
(10,	'Carlos Calulo'),
(11,	'Carlos Orlando'),
(12,	'Carlito BR'),
(13,	'Carlito Baciano'),
(14,	'Alceu BG'),
(15,	'Adao Falo');

-- 2020-04-27 16:45:08