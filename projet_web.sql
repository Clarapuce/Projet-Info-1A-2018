-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 22 mars 2018 à 18:36
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
  `id_perso` int(11) NOT NULL,
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

INSERT INTO `perso` (`id_perso`, `auteur`, `nom`, `prenom`, `image`, `age`, `type`, `session_perso`) VALUES
(3, 'user1', 'Labeille', 'Maya', 'images.duckduckgo.com.png', 10, 'Élève', 'Session 1'),
(4, 'user2', 'Lourson', 'Winnie', 'images.duckduckgo.com.jpg', 11, 'Élève ', 'Session 1'),
(5, 'user1', 'Rouveur', 'Samumu', 'Samumu.jpg', 9, 'Élève', 'Session 1'),
(6, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(7, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(8, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(9, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(10, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(11, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(12, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(13, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(14, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(15, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(16, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(17, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(18, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(19, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(20, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(21, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(22, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(23, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(24, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(25, 'Clarapuce', 'Durand', 'Eva', 'Koala.jpg', 15, 'Élève', 'Session 2'),
(26, 'Clarapuce', 'Mathieu', 'Mireille', 'Desert.jpg', 97, 'Professeur', 'Session 3'),
(27, 'Clarapuce', 'Mathieu', 'Mireille', 'Desert.jpg', 97, 'Professeur', 'Session 3'),
(28, 'Clarapuce', 'Mathieu', 'Mireille', 'Desert.jpg', 97, 'Professeur', 'Session 3'),
(29, 'Clarapuce', 'Mathieu', 'Mireille', 'Desert.jpg', 97, 'Professeur', 'Session 3'),
(30, 'Clarapuce', 'Ohnonjtedirien', 'Noemie', 'Koala.jpg', 26, 'Élève', 'Session 4'),
(31, 'Clarapuce', 'numero1', 'pute', 'Jellyfish.jpg', 12, 'Élève', 'Session 4'),
(32, 'Clarapuce', 'Sorita', 'Clara', '11237891.png', 21, 'Élève', 'Session 4');

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
('Session 1', 'Admin', 1, 1, 'Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant praeter orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.'),
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
('Clarapuce', 'opencat30', 0),
('user1', 'user1', 0),
('user2', 'user2', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `perso`
--
ALTER TABLE `perso`
  ADD PRIMARY KEY (`id_perso`);

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
  MODIFY `id_perso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
