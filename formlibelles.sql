-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 23 mars 2018 à 14:02
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
