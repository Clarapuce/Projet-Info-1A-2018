-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 23 mars 2018 à 16:00
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `formlong`
--

CREATE TABLE `formlong` (
  `id_perso` int(11) NOT NULL,
  `histoire` text NOT NULL,
  `mental` text NOT NULL,
  `physique` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formlong`
--

INSERT INTO `formlong` (`id_perso`, `histoire`, `mental`, `physique`) VALUES
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(31, 'lalala', 'lalala', 'lalala'),
(32, 'Quand je suis petite, je mangeais la queue de mon chat. Gnignigniiiii', 'TEUBÉ - GENTILLE -CHIANTE - NE SAIT PAS PRENDRE DE DECISIONS', 'ROUSSE'),
(33, 'fez', 'fezf', 'fezf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
