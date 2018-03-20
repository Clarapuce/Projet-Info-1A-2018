-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 20 mars 2018 à 17:12
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
  `Rapport_a_autrui` int(11) NOT NULL,
  `Maniere_de_penser` int(11) NOT NULL,
  `Ouverture` int(11) NOT NULL,
  `Habitudes` int(11) NOT NULL,
  `Nature` int(11) NOT NULL,
  `Stratégie` int(11) NOT NULL,
  `Confiance_en_soi` int(11) NOT NULL,
  `Anxiété` int(11) NOT NULL,
  `Influence_du_regard_des_autres` int(11) NOT NULL,
  `peur` varchar(30) NOT NULL,
  `peur_autre` text NOT NULL,
  `hobby` varchar(30) NOT NULL,
  `hobby_autre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formcourt`
--

INSERT INTO `formcourt` (`id_court`, `id_perso`, `maison`, `lieu_naissance`, `nom_naissance`, `bois_baguette`, `contenu_baguette`, `animal`, `sante`, `niveau_scolaire`, `patronus`, `statut`, `freres_soeurs`, `peau`, `taille`, `poids`, `yeux`, `couleur_cheveux`, `coupe`, `particularite`, `precisions`, `objectif`, `objectif_autre`, `Rapport_a_autrui`, `Maniere_de_penser`, `Ouverture`, `Habitudes`, `Nature`, `Stratégie`, `Confiance_en_soi`, `Anxiété`, `Influence_du_regard_des_autres`, `peur`, `peur_autre`, `hobby`, `hobby_autre`) VALUES
(1, '1', 'Serdaigle', 'Campagne', 'vds<d', 'Saule', 'Ventricule de dragon', 'Hiboux', 3, 2, 'vds<v', 'Né-Moldu', 1, 'vds<v', 'vds<v', 'vd<v', 'Bleus', 'Brun', 'vd<v', '', '', '', 0, 0, 0, 2, 3, 2, 3, 2, 3, 2, '', '', '', '');

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
  MODIFY `id_court` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
