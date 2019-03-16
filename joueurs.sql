-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 16 mars 2019 à 17:15
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `joueurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` char(30) NOT NULL,
  `pass` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

DROP TABLE IF EXISTS `joueurs`;
CREATE TABLE IF NOT EXISTS `joueurs` (
  `num_joueur` int(11) NOT NULL AUTO_INCREMENT,
  `sexe` char(1) NOT NULL,
  `nom_joueur` char(30) NOT NULL,
  `prenom_joueur` char(30) NOT NULL,
  `adresse` char(50) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` char(30) NOT NULL,
  `adresse_email` char(30) NOT NULL,
  `telephone` char(10) NOT NULL,
  `date_naissance` date NOT NULL,
  `valide` int(1) DEFAULT NULL,
  PRIMARY KEY (`num_joueur`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `joueurs`
--

INSERT INTO `joueurs` (`num_joueur`, `sexe`, `nom_joueur`, `prenom_joueur`, `adresse`, `code_postal`, `ville`, `adresse_email`, `telephone`, `date_naissance`, `valide`) VALUES
(4, 'h', 'Amiel', 'Baptiste', 'Avenue du midi', 87000, 'LIMOGES', 'amielbaptiste@gmail.com', '0123456789', '1999-09-25', 1),
(15, 'h', 'Amiel', 'Baptiste', 'Avenue du midi', 87000, 'LIMOGES', 'amielbaptiste@gmail.com', '0675911906', '1999-09-25', 1),
(9, 'h', 'Farge', 'Marien', 'rue eric satie', 87350, 'PANAZOL', 'marien.farge@gmail.com', '1274512346', '1999-04-09', 1),
(10, 'h', 'Chapuis', 'Matthieu', '12 rue d\'allemagne', 87350, 'PANAZOL', 'chapuismat@orange.fr', '0123456789', '2000-10-13', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
