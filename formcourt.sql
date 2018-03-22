-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 21 mars 2018 à 19:10
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
(3, '1', 'Serdaigle', 'Ville', 'jkyrdj', 'Saule', 'Ventricule de dragon', 'Rat', 2, 1, 'jtrdj', 'Né-Moldu', 1, 'jtrds', 'jtrd', 'jhtd', 'Bleus', 'Brun', 'jtdj', 'Cicatrices', 'puteputeputepute', 'Aventure', 0, 2, 2, 1, 2, 3, 2, 1, 2, 1, 'La violence', 'lalalalala', 'Lecture', 'leuleuleuleu', 'jtd', 'hgst');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formcourt`
--
ALTER TABLE `formcourt`
  ADD PRIMARY KEY (`id_court`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formcourt`
--
ALTER TABLE `formcourt`
  MODIFY `id_court` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;