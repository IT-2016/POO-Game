-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 05 Avril 2016 à 19:46
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
-- Structure de la table `perso`
--

CREATE TABLE IF NOT EXISTS `perso` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ptype` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pforce` tinyint(3) unsigned NOT NULL,
  `pdefense` tinyint(3) unsigned NOT NULL,
  `pvitesse` tinyint(3) unsigned NOT NULL,
  `pvie` tinyint(3) unsigned NOT NULL DEFAULT '100',
  `pprecision` tinyint(3) unsigned NOT NULL,
  `penergy` tinyint(3) unsigned NOT NULL,
  `pspec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `ptype` (`ptype`),
  KEY `pname` (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
