-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 10 oct. 2021 à 12:07
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moviecollection`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movieName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `supportType` varchar(255) COLLATE utf8_bin NOT NULL,
  `coverImg` varchar(255) COLLATE utf8_bin NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `nickname`, `email`, `pwd`) VALUES
(1, 'bonito', 'linard.jeremy.5@gmail.com', '$2y$10$sHCrlPTWizIbYR3I8xs16u5pbu6xfUrzyt8dqrYPZ6G8zNYBiHMFW'),
(2, 'bonito2', 'linard.jeremy.5@gmail.com', '$2y$10$IbweHCEe6ZY8VGsciCrgQO4k18ZC4N6fKAzgymc6.G7dZ6Xw.l0.W'),
(3, 'bonito2', 'linard.jeremy.5@gmail.com', '$2y$10$9E02UO6WjvqTaii7avgV9eB1dVF4126BIIxHLFKMtYk6/dx4cEc6y'),
(4, 'bonito2', 'linard.jeremy.5@gmail.com', '$2y$10$Dw7/NUF0ToM0PtWtHffytOWegEdccpq5Gvw.yn.UbG2ABpl5ci0yS'),
(5, 'admin', 'linard.jeremy.5@gmail.com', '$2y$10$CBusZiywnM7saIGZCw1Lw.IFmhW2fZHKlx3zsNhdg.rzrFfNjC8N2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
