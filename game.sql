-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 06 Avril 2016 à 15:29
-- Version du serveur: 5.5.37
-- Version de PHP: 5.4.4-14+deb7u10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `game`
--

-- --------------------------------------------------------

--
-- Structure de la table `armory`
--

CREATE TABLE IF NOT EXISTS `armory` (
  `aid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `atype` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `aperso` int(10) unsigned NOT NULL,
  `aimg` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aatk` tinyint(4) NOT NULL DEFAULT '0',
  `adfs` tinyint(4) NOT NULL DEFAULT '0',
  `avit` tinyint(4) NOT NULL DEFAULT '0',
  `aprec` tinyint(4) NOT NULL DEFAULT '0',
  `aactif` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`aid`),
  KEY `aperso` (`aperso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `armory`
--

INSERT INTO `armory` (`aid`, `aname`, `atype`, `aperso`, `aimg`, `aatk`, `adfs`, `avit`, `aprec`, `aactif`) VALUES
(1, 'arc', 'atk', 1, 'arc.png', 5, 0, 2, 3, 1),
(2, 'bouclier archer', 'dfs', 1, 'arc_shield.png', 0, 4, 3, 7, 1),
(3, 'hache', 'atk', 2, 'hache.png', 8, 3, 4, 2, 1),
(4, 'bouclier guerier', 'dfs', 2, 'gur_shield', 1, 7, 2, 0, 1),
(5, 'spectre', 'atk', 5, 'spectre.png', 7, 3, 9, 5, 1),
(6, 'bouclier magicien', 'dfs', 5, 'mag_shield.png', 2, 7, 4, 3, 1),
(7, 'epee', 'atk', 4, 'epee.png', 4, 1, 3, 5, 1),
(8, 'bouclier soldat', 'dfs', 4, 'sol_shield.png', 2, 5, 1, 2, 1),
(9, 'lance', 'atk', 3, 'lance.png', 6, 2, 3, 4, 1),
(10, 'bouclier cavalier', 'dfs', 3, 'cav_shield.png', 3, 5, 2, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `battle`
--

CREATE TABLE IF NOT EXISTS `battle` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bperso_atk` int(10) unsigned NOT NULL,
  `bperso_dfs` int(10) unsigned NOT NULL,
  `bdegat` tinyint(3) unsigned NOT NULL,
  `bwin` int(10) unsigned NOT NULL,
  `btime` int(11) NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `bperso_atk` (`bperso_atk`,`bperso_dfs`),
  KEY `bwin` (`bwin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Contenu de la table `battle`
--

INSERT INTO `battle` (`bid`, `bperso_atk`, `bperso_dfs`, `bdegat`, `bwin`, `btime`) VALUES
(1, 5, 3, 10, 0, 1459949205),
(2, 1, 2, 5, 2, 1459949338),
(3, 1, 2, 5, 2, 1459949844),
(4, 1, 2, 5, 2, 1459950030),
(5, 1, 2, 5, 2, 1459950042),
(6, 1, 2, 5, 2, 1459950072),
(7, 1, 2, 5, 2, 1459950100),
(8, 1, 2, 5, 2, 1459950107),
(9, 4, 2, 10, 4, 1459952509),
(10, 4, 2, 10, 4, 1459952591),
(11, 1, 2, 5, 2, 1459952801),
(12, 1, 2, 5, 2, 1459952823),
(13, 1, 2, 5, 2, 1459952829),
(14, 1, 2, 5, 2, 1459952846),
(15, 1, 2, 5, 2, 1459956131),
(16, 1, 2, 5, 2, 1459956140),
(17, 1, 2, 5, 2, 1459956146),
(18, 2, 1, 30, 2, 1459956149),
(19, 2, 1, 30, 2, 1459956156),
(20, 2, 1, 25, 2, 1459956158),
(21, 5, 1, 25, 5, 1459956207),
(22, 5, 1, 25, 5, 1459956219),
(23, 5, 1, 25, 5, 1459956284),
(24, 4, 1, 20, 4, 1459956299),
(25, 4, 1, 5, 4, 1459956303),
(26, 4, 2, 10, 4, 1459956324),
(27, 4, 2, 10, 4, 1459956327),
(28, 4, 2, 10, 4, 1459956329),
(29, 4, 2, 10, 4, 1459956332),
(30, 4, 2, 10, 4, 1459956334),
(31, 5, 2, 15, 5, 1459956336),
(32, 3, 2, 10, 3, 1459956338),
(33, 5, 2, 15, 5, 1459956341),
(34, 3, 2, 10, 3, 1459956343),
(35, 4, 3, 15, 3, 1459956350),
(36, 4, 3, 15, 3, 1459956353),
(37, 5, 4, 20, 5, 1459956357),
(38, 5, 4, 20, 5, 1459956360),
(39, 5, 4, 20, 5, 1459956363),
(40, 3, 4, 10, 3, 1459956378),
(41, 5, 3, 10, 3, 1459956385),
(42, 5, 3, 10, 3, 1459956388),
(43, 5, 3, 10, 3, 1459956391),
(44, 5, 3, 10, 3, 1459956395),
(45, 5, 3, 10, 3, 1459956402),
(46, 3, 5, 10, 3, 1459956408),
(47, 3, 5, 10, 3, 1459956411),
(48, 3, 5, 10, 3, 1459956413),
(49, 5, 3, 10, 3, 1459956418),
(50, 3, 5, 10, 3, 1459956427);

-- --------------------------------------------------------

--
-- Structure de la table `perso`
--

CREATE TABLE IF NOT EXISTS `perso` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ptype` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pclass` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pforce` tinyint(3) unsigned NOT NULL,
  `pdefense` tinyint(3) unsigned NOT NULL,
  `pvitesse` tinyint(3) unsigned NOT NULL,
  `pvie` tinyint(3) unsigned NOT NULL DEFAULT '100',
  `pprecision` tinyint(3) unsigned NOT NULL,
  `penergy` tinyint(3) unsigned NOT NULL,
  `pspec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `psup` tinyint(4) DEFAULT '0',
  `pimg` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `ptype` (`ptype`),
  KEY `pname` (`pname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `perso`
--

INSERT INTO `perso` (`pid`, `ptype`, `pclass`, `pname`, `pforce`, `pdefense`, `pvitesse`, `pvie`, `pprecision`, `penergy`, `pspec`, `psup`, `pimg`) VALUES
(1, '_ARC', 'Archers', 'Fayzen', 25, 20, 65, 0, 80, 3, 'precision', 5, 'arc.png'),
(2, '_GUR', 'Guerriers', 'Archonte', 50, 30, 20, 0, 45, 3, 'force', 20, 'guer.png'),
(3, '_CVL', 'Cavaliers', 'Mayze', 40, 55, 70, 100, 55, 3, 'defense', 10, 'cavl.png'),
(4, '_SOL', 'Soldats', 'Enrico', 40, 25, 35, 0, 40, 3, '', 0, 'sol.png'),
(5, '_MAG', 'Magiciens', 'Zerglin', 45, 30, 70, 0, 20, 3, 'vitesse', 20, 'mag.png');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `armory`
--
ALTER TABLE `armory`
  ADD CONSTRAINT `armory_ibfk_1` FOREIGN KEY (`aperso`) REFERENCES `perso` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
