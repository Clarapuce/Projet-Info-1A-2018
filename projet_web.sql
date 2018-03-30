-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 30 mars 2018 à 19:54
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
-- Structure de la table `formcourt`
--

CREATE TABLE `formcourt` (
  `id_court` int(11) NOT NULL,
  `id_perso` varchar(50) NOT NULL,
  `maison` varchar(15) NOT NULL,
  `lieu_naissance` varchar(20) NOT NULL,
  `nom_naissance` varchar(50) NOT NULL,
  `bois_baguette` varchar(20) NOT NULL,
  `contenu_baguette` varchar(30) NOT NULL,
  `animal` varchar(20) NOT NULL,
  `sante` int(11) NOT NULL,
  `niveau_scolaire` int(11) NOT NULL,
  `patronus` varchar(50) NOT NULL,
  `statut` varchar(30) NOT NULL,
  `freres_soeurs` int(11) NOT NULL,
  `peau` varchar(30) NOT NULL,
  `taille` varchar(6) NOT NULL,
  `poids` varchar(10) NOT NULL,
  `yeux` varchar(15) NOT NULL,
  `couleur_cheveux` varchar(10) NOT NULL,
  `coupe` varchar(30) NOT NULL,
  `particularite` varchar(50) NOT NULL,
  `precisions` text NOT NULL,
  `objectif` varchar(30) NOT NULL,
  `objectif_autre` text NOT NULL,
  `rapport_autrui` int(11) NOT NULL,
  `maniere_de_penser` int(11) NOT NULL,
  `ouverture` int(11) NOT NULL,
  `habitudes` int(11) NOT NULL,
  `nature` int(11) NOT NULL,
  `strategie` int(11) NOT NULL,
  `confiance` int(11) NOT NULL,
  `anxiete` int(11) NOT NULL,
  `influence` int(11) NOT NULL,
  `peur` varchar(30) NOT NULL,
  `peur_autre` text NOT NULL,
  `hobby` varchar(30) NOT NULL,
  `hobby_autre` text NOT NULL,
  `talent` varchar(70) NOT NULL,
  `bete_noire` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formcourt`
--

INSERT INTO `formcourt` (`id_court`, `id_perso`, `maison`, `lieu_naissance`, `nom_naissance`, `bois_baguette`, `contenu_baguette`, `animal`, `sante`, `niveau_scolaire`, `patronus`, `statut`, `freres_soeurs`, `peau`, `taille`, `poids`, `yeux`, `couleur_cheveux`, `coupe`, `particularite`, `precisions`, `objectif`, `objectif_autre`, `rapport_autrui`, `maniere_de_penser`, `ouverture`, `habitudes`, `nature`, `strategie`, `confiance`, `anxiete`, `influence`, `peur`, `peur_autre`, `hobby`, `hobby_autre`, `talent`, `bete_noire`) VALUES
(10, '40', 'Gryffondor', 'Ville', 'Londres', 'Saule', 'Plume de Ph&eacute;nix', 'chouette', 4, 3, 'Biche', 'Sang-pur', 0, 'Blanche', '154', '54', 'Verts', 'Brun', 'En bataille', 'Cicatrices', 'En forme d\'&eacute;clair', 'Amiti&eacute;', '', 1, 2, 3, 5, 4, 4, 1, 4, 5, 'Autre', 'La peur', 'Sport', 'Quidditch', 'Attraper le vif d\'or', 'Voldemort et l\'histoire de la magie'),
(11, '41', 'Gryffondor', 'Ville', 'Londres', 'Vigne', 'Bois de licorne', 'chat', 4, 5, 'Loutre', 'N&eacute;-Moldu', 0, 'Blanche', '152', '47', 'Noisette', 'Brun', 'Longs fris&eacute;s', '', '', 'Savoir', '', 3, 1, 1, 2, 2, 1, 2, 5, 5, 'Le regard des autres', '', 'Autre', 'Travailler', 'Tout ce qui concerne la magie', 'La divination'),
(12, '42', 'Serpentard', 'Campagne', 'Cambridge', 'If', 'Ventricule de dragon', 'hibou', 2, 4, 'Ch&egrave;vre', 'Sang-pur', 0, 'P&acirc;le', '156', '53', 'Bleus', 'Blonds', 'Coiff&eacute; comme un bourgeo', '', '', 'Autre', '', 5, 1, 1, 1, 5, 1, 1, 5, 3, 'Autre', 'Voldemort', 'Autre', 'Ennuyer le monde', 'Ennuyer le monde, avoir l\'air hautain', '&Ecirc;tre gentil'),
(13, '43', 'Poufsouffle', 'Ville', 'Dublin', 'Vigne', 'Bois de licorne', 'chat', 2, 2, 'Cheval', 'Sang-m&ecirc;l&eacute;', 2, 'Blanche', '150', '56', 'Marron', 'Chatain', 'Long lisse', 'Autre', 'T&acirc;ches de rousseurs', 'Aventure', '', 1, 5, 4, 4, 2, 3, 2, 4, 3, 'Le feu', '', 'Musique', '', '&Ecirc;tre invisible', 'Rogue'),
(16, '48', 'Gryffondor', 'Campagne', 'Village People', 'Saule', 'Ventricule de dragon', 'rat', 5, 5, 'Chat', 'Sang-pur', 1, 'Blanche', '167', '64', 'Verts', 'Autre', 'Chignon tir&eacute;', '', 'Cheveux poivre-sel', 'Autre', 'Que Gryffondor gagne la coupe', 3, 1, 1, 1, 1, 1, 5, 1, 1, 'L\'orage', '', 'Ecriture', '', '&Ecirc;tre rigide', 'La flexibilit&eacute;');

-- --------------------------------------------------------

--
-- Structure de la table `formlibelles`
--

CREATE TABLE `formlibelles` (
  `id_court` varchar(50) NOT NULL,
  `id_perso` varchar(50) NOT NULL,
  `maison` varchar(15) NOT NULL,
  `lieu_naissance` varchar(20) NOT NULL,
  `nom_naissance` varchar(50) NOT NULL,
  `bois_baguette` varchar(20) NOT NULL,
  `contenu_baguette` varchar(30) NOT NULL,
  `animal` varchar(20) NOT NULL,
  `sante` varchar(50) NOT NULL,
  `niveau_scolaire` varchar(50) NOT NULL,
  `patronus` varchar(50) NOT NULL,
  `statut` varchar(30) NOT NULL,
  `freres_soeurs` varchar(50) NOT NULL,
  `peau` varchar(30) NOT NULL,
  `taille` varchar(50) NOT NULL,
  `poids` varchar(50) NOT NULL,
  `yeux` varchar(50) NOT NULL,
  `couleur_cheveux` varchar(50) NOT NULL,
  `coupe` varchar(30) NOT NULL,
  `particularite` varchar(50) NOT NULL,
  `precisions` varchar(50) NOT NULL,
  `objectif` varchar(30) NOT NULL,
  `objectif_autre` varchar(50) NOT NULL,
  `rapport_autrui` varchar(50) NOT NULL,
  `maniere_de_penser` varchar(50) NOT NULL,
  `ouverture` varchar(50) NOT NULL,
  `habitudes` varchar(50) NOT NULL,
  `nature` varchar(50) NOT NULL,
  `strategie` varchar(50) NOT NULL,
  `confiance` varchar(50) NOT NULL,
  `anxiete` varchar(50) NOT NULL,
  `influence` varchar(50) NOT NULL,
  `peur` varchar(30) NOT NULL,
  `peur_autre` varchar(50) NOT NULL,
  `hobby` varchar(30) NOT NULL,
  `hobby_autre` varchar(50) NOT NULL,
  `talent` varchar(70) NOT NULL,
  `bete_noire` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formlibelles`
--

INSERT INTO `formlibelles` (`id_court`, `id_perso`, `maison`, `lieu_naissance`, `nom_naissance`, `bois_baguette`, `contenu_baguette`, `animal`, `sante`, `niveau_scolaire`, `patronus`, `statut`, `freres_soeurs`, `peau`, `taille`, `poids`, `yeux`, `couleur_cheveux`, `coupe`, `particularite`, `precisions`, `objectif`, `objectif_autre`, `rapport_autrui`, `maniere_de_penser`, `ouverture`, `habitudes`, `nature`, `strategie`, `confiance`, `anxiete`, `influence`, `peur`, `peur_autre`, `hobby`, `hobby_autre`, `talent`, `bete_noire`) VALUES
('ID du formulaire', 'ID du personnage', 'Maison', 'Lieu de naissance', 'Nom du lieu de naissance', 'Bois de la baguette', 'Contenu de la baguette', 'Animal de compagnie', 'Niveau de santé', 'Niveau scolaire', 'Patronus', 'Statut', 'Nombre de frères et soeurs', 'Couleur de peau', 'Taille', 'Poids', 'Couleur des yeux', 'Couleur des cheveux', 'Coupe de cheveux', 'Particularités', 'Précisions', 'Objectif de vie', 'Objectif', 'Rapport à autrui', 'Manière de penser', 'Ouverture', 'Habitudes', 'Nature', 'Stratégie', 'Confiance en soi', 'Anxiété', 'Influence du regard des autres', 'Grande peur', 'Grande peur', 'Hobbies', 'Hobbies', 'Talent spécial', 'Bête noire');

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
(40, 'Cf Harry Potter &agrave; l\'&eacute;cole des sorciers.', 'Renferm&eacute;, peu confiant', 'Fin, cheveux en bataille, lunettes rondes, yeux verts'),
(41, 'Cf Harry Potter &agrave; l\'&eacute;cole des sorciers', 'Rigide, madame je sais tout, brillante', 'Petite, grandes dents, Cheveux en bataille fris&eacute;s.'),
(42, 'Cf. Harry Potter &agrave; l\'&eacute;cole des sorciers.', 'Snob, casse-pied', 'Hautain, robe de premi&egrave;re main, air noble'),
(43, 'Inconnue au bataillon', 'Gentille mais timide', 'Grassouillette, tresses, dents du bonheur'),
(48, 'Cf &quot;Histoire de Poudlard, Professeurs et mati&egrave;res tome 4&quot;', 'Rigide', 'Traits durs, chignon tir&eacute;, grandes robes vertes');

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
-- Index pour la table `formcourt`
--
ALTER TABLE `formcourt`
  ADD PRIMARY KEY (`id_court`);

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
-- AUTO_INCREMENT pour la table `formcourt`
--
ALTER TABLE `formcourt`
  MODIFY `id_court` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `perso`
--
ALTER TABLE `perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
