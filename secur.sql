-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 mars 2023 à 15:14
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `secur`
--

-- --------------------------------------------------------

--
-- Structure de la table `habilitation`
--

DROP TABLE IF EXISTS `habilitation`;
CREATE TABLE IF NOT EXISTS `habilitation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` text COLLATE utf8mb4_general_ci NOT NULL,
  `HabilitationId` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_FK` (`HabilitationId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Prenom` text COLLATE utf8mb4_general_ci NOT NULL,
  `Nom` text COLLATE utf8mb4_general_ci NOT NULL,
  `Mail` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `MotDePasse` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `RoleId` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_FK` (`RoleId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
