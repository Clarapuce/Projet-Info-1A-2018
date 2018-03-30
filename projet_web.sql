-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 30 mars 2018 à 19:34
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
-- Structure de la table `perso`
--

CREATE TABLE `perso` (
  `id` int(11) NOT NULL,
  `auteur` varchar(40) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL,
  `age` int(5) NOT NULL,
  `type` text NOT NULL,
  `session_perso` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `perso`
--

INSERT INTO `perso` (`id`, `auteur`, `nom`, `prenom`, `image`, `age`, `type`, `session_perso`) VALUES
(40, 'Admin', 'Potter', 'Harry', 'occhiali-harry-potter.jpg', 11, 'Élève', 'Promo 1990'),
(41, 'Admin', 'Granger', 'Hermione', 'hermione-granger-hermione-granger-20053436-936-1197.jpg', 11, 'Élève', 'Promo 1990'),
(42, 'Admin', 'Malefoy', 'Drago', 'tom-felton-alias-drago-malefoy-a-ses-debuts-dans-harry-potter_146874_w620.jpg', 11, 'Élève', 'Promo 1990'),
(43, 'Admin', 'Abott', 'Hannah', 'tumblr_inline_nak4l3nd7f1reg6lt.jpg', 11, 'Élève', 'Promo 1990'),
(48, 'Clarapuce', 'Mcgonagall', 'Minerva', 'Primerafoto.jpg', 68, 'Professeur', 'Promo 1990');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `nom_session` varchar(50) NOT NULL,
  `auteur` varchar(40) NOT NULL,
  `formcourt` tinyint(1) NOT NULL DEFAULT '1',
  `formlong` tinyint(1) NOT NULL DEFAULT '1',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`nom_session`, `auteur`, `formcourt`, `formlong`, `description`) VALUES
('Promo 1990', 'Admin', 1, 1, 'Promotion de l\'année 1990. Année où se déroule le début de l\'histoire du fameux Harry Potter.'),
('Session 2', 'Admin', 1, 1, 'Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.'),
('Session 3', 'admin', 1, 1, 'Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.'),
('Session 4', 'admin', 1, 1, 'Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `pseudo` varchar(40) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  `statutStaff` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`pseudo`, `mdp`, `statutStaff`) VALUES
('Admin', 'admin', 1),
('user1', 'user1', 0),
('user2', 'user2', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `perso`
--
ALTER TABLE `perso`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`nom_session`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `perso`
--
ALTER TABLE `perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
