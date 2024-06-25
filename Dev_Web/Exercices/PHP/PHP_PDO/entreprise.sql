-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 juin 2024 à 11:49
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `entreprise`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `idEmploye` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `service` varchar(25) DEFAULT NULL,
  `salaire` int DEFAULT NULL,
  `dateContrat` date DEFAULT NULL,
  PRIMARY KEY (`idEmploye`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`idEmploye`, `nom`, `prenom`, `sexe`, `service`, `salaire`, `dateContrat`) VALUES
(1, 'Dupont', 'Robert', 'M', 'Marketing', 25000, '2010-03-21'),
(2, 'Dupont', 'Aline', 'F', 'Communication', 8500, '2013-11-11'),
(3, 'Durand', 'Laurence', 'F', 'Marketing', 14000, '1996-01-02'),
(4, 'Lejeune', 'Sylvie', 'F', 'Marketing', 21500, '2018-09-02'),
(5, 'Lefort', 'Max', 'M', NULL, 12000, '2005-09-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
