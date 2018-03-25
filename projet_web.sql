-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 25 mars 2018 à 19:09
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

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
  `objectif_autre` int(11) NOT NULL,
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
(4, '33', 'Gryffondor', 'Campagne', 'Pays trop mignon', 'Aubépine', 'Bois de licorne', 'chat', 5, 5, 'Grenouille', 'Sang-mêlé', 3, 'Verte', '1m20', '10kg', 'Verts', 'Autre', 'pas de cheveux', '', '', 'Amitié', 0, 5, 5, 1, 5, 5, 5, 5, 5, 5, 'La solitude', '', '', 'Jouer', 'Se transformer en bad Kaeloo', 'Monsieur chaaaaaaat'),
(5, '34', 'Serdaigle', 'Campagne', 'Pays trop mignon', 'If', 'Plume de Phénix', 'chouette', 5, 5, 'Canard', 'Né-Moldu', 1, 'Jaune', '1m30', '12kg', 'Noisette', 'Autre', 'pas de cheveux', 'Cicatrices', '', 'Savoir', 0, 1, 1, 5, 5, 1, 5, 2, 1, 1, 'Le noir', '', '', 'Manger des yaourt', 'Tout', 'Coin?'),
(6, '35', 'Serpentard', 'Campagne', 'Pays trop mignon', 'Saule', 'Ventricule de dragon', 'chat', 2, 2, 'Chat', 'Né-Moldu', 1, 'orange rayures marrons', '1m20', '34kg', 'Rouge', 'Autre', 'Pas de cheveux', '', 'Mitaines', 'Pouvoir', 0, 5, 2, 1, 5, 3, 1, 5, 2, 1, 'Le vide', '', 'Autre', 'La violence', 'Bazooka', 'Bad kaeloo'),
(7, '36', 'Serpentard', 'Ville', 'Monster City', 'Chêne', 'Ventricule de dragon', 'rat', 2, 1, 'Une crotte', 'Sang-pur', 1, 'Vert', '1m00', '120kg', 'Marron', 'Autre', 'chauve', '', 'Moche', 'Autre', 0, 1, 2, 3, 4, 5, 3, 2, 1, 2, 'Le regard des autres', '', 'Autre', 'Violence', 'Etre moche', 'Les gens'),
(8, '37', 'Poufsouffle', 'Banlieu', 'Saussetlespins', 'Aubépine', 'Bois de licorne', 'chat', 1, 5, 'Blonde', 'Né-Moldu', 1, 'rfe', 'fre', 'fre', 'Bleus', 'Brun', 'fre', '', '', 'Amitié', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'La solitude', '', 'Voyage', '', 'Gentillesse', 'Mechanceté'),
(9, '39', 'Poufsouffle', 'Campagne', 'gregre', 'Saule', 'Ventricule de dragon', 'chouette', 2, 3, 'gre', 'Né-Moldu', 1, 'gre', 'gre', 'gre', 'Bleus', 'Brun', 'gre', '', '', 'Aventure', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Le noir', '', 'Lecture', '', 'greg', 'greg');

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
  `taille` varchar(6) NOT NULL,
  `poids` varchar(10) NOT NULL,
  `yeux` varchar(15) NOT NULL,
  `couleur_cheveux` varchar(10) NOT NULL,
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
('ID du formulaire', 'ID du personnage', 'Maison', 'Lieu de naissance', 'Nom du lieu de naissance', 'Bois de la baguette', 'Contenu de la baguette', 'Animal de compagnie', 'Niveau de santé', 'Niveau scolaire', 'Patronus', 'Statut', 'Nombre de frères et soeurs', 'Couleur de peau', 'Taille', 'Poids', 'Couleur des yeu', 'Couleur de', 'Coupe de cheveux', 'Particularités', 'Précisions', 'Objectif de vie', 'Objectif de vie', 'Rapport à autrui', 'Manière de penser', 'Ouverture', 'Habitudes', 'Nature', 'Stratégie', 'Confiance en soi', 'Anxiété', 'Influence du regard des autres', 'Grande peur', 'Grande peur', 'Hobbies', 'Hobbies', 'Talent spécial', 'Bête noire');

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
(33, 'Pays trop mignon', 'toute joyeuse mais bipolaire', 'Grenouille souriante'),
(33, 'Pays trop mignon', 'toute joyeuse mais bipolaire', 'Grenouille souriante'),
(34, 'Pays trop mignon', 'Coin', 'Canard'),
(35, 'Pays trop mignon', 'Violent', 'Chat'),
(36, 'Moi, moche et mechant', 'Mechant', 'Moche'),
(37, 'Vis près de Marseille', 'gentille', 'Blonde'),
(39, 'gregggr', 'greggr', 'gregr');

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
(28, 'Clarapuce', 'Mathieu', 'Mireille', 'Desert.jpg', 97, 'Professeur', 'Session 3'),
(29, 'Clarapuce', 'Mathieu', 'Mireille', 'Desert.jpg', 97, 'Professeur', 'Session 3'),
(30, 'Clarapuce', 'Ohnonjtedirien', 'Noemie', 'Koala.jpg', 26, 'Élève', 'Session 4'),
(31, 'Clarapuce', 'numero1', 'pute', 'Jellyfish.jpg', 12, 'Élève', 'Session 4'),
(32, 'Clarapuce', 'Sorita', 'Clara', '11237891.png', 21, 'Élève', 'Session 4'),
(33, 'Clarapuce', 'Dupaystromignon', 'Kaeloo', '94xew5u9ouhpgl2khc3k.jpg', 10, 'Élève', 'Session 1'),
(34, 'Clarapuce', 'Coin', 'Coin', 'Kaeloo02.jpg', 10, 'Élève', 'Session 1'),
(35, 'Clarapuce', 'Chat', 'Monsieur', 'Cool_dear.jpg', 10, 'Élève', 'Session 1'),
(36, 'Clarapuce', 'M&eacute;chant', 'Monsieur', 'mike_wazowski_by_disse86-dab828i-768x858.jpg', 10, 'Élève', 'Session 1'),
(37, 'Clarapuce', 'Leleu', 'Ma&iuml;a', '705a3fbd040be6a0c5bdf63dbd62d29b.jpg', 21, 'Professeur', 'Session 1'),
(39, 'Clarapuce', 'Crush', 'Candy', 'SD011.jpg', 12, 'Élève', 'Session 1');

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
  MODIFY `id_court` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `perso`
--
ALTER TABLE `perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
