-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 mai 2021 à 08:29
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kevin`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Dedicatus', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
('Dedicatus545', '12345'),
('Dedicatus545', '12345'),
('Dedicatus', 'dedicatus545');

-- --------------------------------------------------------

--
-- Structure de la table `db`
--

DROP TABLE IF EXISTS `db`;
CREATE TABLE IF NOT EXISTS `db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `db`
--

INSERT INTO `db` (`id`, `nom`, `prenom`, `mail`, `password`) VALUES
(1, 'Sonia', 'Rosenthal', 'soniarosenthal@gmail.com', 'sonia'),
(2, 'Alyss', 'Liddel', 'alyssliddel@gmail.com', 'alyss'),
(5, 'Kevin', 'Liddel', 'kevinliddel@gmail.com', 'kevin'),
(6, 'Blawd', 'Coldwell', 'blawdcoldwell@gmail.com', 'blawd'),
(24, 'Boogie', 'Yenon', 'boogieyenon@gmail.com', 'boogie'),
(32, 'Tsiky', 'Valisoa', 'tsikyvalisoa@gmail.com', 'tsiky'),
(41, 'Mickael', 'Maminiaina', 'maminiainamickael@gmail.com', 'mickael'),
(39, 'Mirija', 'Uriah', 'mirijauriah@gmail.com', 'mirija');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
