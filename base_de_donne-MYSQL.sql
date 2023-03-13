-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 02 mars 2023 à 07:38
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
-- Base de données : `escat`
--

-- --------------------------------------------------------

--
-- Structure de la table `abf_1`
--

DROP TABLE IF EXISTS `abf_1`;
CREATE TABLE IF NOT EXISTS `abf_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abf_1`
--

INSERT INTO `abf_1` (`id`, `jours`, `cours`, `heures`, `professeurs`, `image_prof`) VALUES
(23, 'MARDI', 'TP Mesure', '14h40mn-16h10', 'Mr WILLIAM Martin', NULL),
(22, 'MARDI', 'HISTOIRE-GEOGRAPHI', '08h40mn-09h10', 'Mr LINO', NULL),
(21, 'LUNDI', 'MATHEMATIQUE', '14h40mn-16h10', 'Mr LINO', NULL),
(20, 'LUNDI', 'FRANCAIS', '14h40mn-16h10', 'Mr WILLIAM Martin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `abf_2`
--

DROP TABLE IF EXISTS `abf_2`;
CREATE TABLE IF NOT EXISTS `abf_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `abf_3`
--

DROP TABLE IF EXISTS `abf_3`;
CREATE TABLE IF NOT EXISTS `abf_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `mot_de_passe`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `cgf_1`
--

DROP TABLE IF EXISTS `cgf_1`;
CREATE TABLE IF NOT EXISTS `cgf_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cgf_1`
--

INSERT INTO `cgf_1` (`id`, `jours`, `cours`, `heures`, `professeurs`, `image_prof`) VALUES
(1, 'lundi', 'DIABA', '14h40mn-16h10', 'Mr LINO', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cgf_2`
--

DROP TABLE IF EXISTS `cgf_2`;
CREATE TABLE IF NOT EXISTS `cgf_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cgf_3`
--

DROP TABLE IF EXISTS `cgf_3`;
CREATE TABLE IF NOT EXISTS `cgf_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cit_1`
--

DROP TABLE IF EXISTS `cit_1`;
CREATE TABLE IF NOT EXISTS `cit_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cit_2`
--

DROP TABLE IF EXISTS `cit_2`;
CREATE TABLE IF NOT EXISTS `cit_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cit_3`
--

DROP TABLE IF EXISTS `cit_3`;
CREATE TABLE IF NOT EXISTS `cit_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cours_pdf`
--

DROP TABLE IF EXISTS `cours_pdf`;
CREATE TABLE IF NOT EXISTS `cours_pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cours` varchar(200) NOT NULL,
  `file` text NOT NULL,
  `alias` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours_pdf`
--

INSERT INTO `cours_pdf` (`id`, `cours`, `file`, `alias`) VALUES
(17, 'FRANCAIS', 'OTSIAYI Amour.jpg', 'ABF_1'),
(18, 'HISTOIRE-GEOGRAPHI', 'informatique.jpg', 'ABF_1'),
(19, 'MATHEMATIQUE', 'reseau.pdf', 'EI_3'),
(10, '', '', ''),
(15, 'TP Mesure', 'reseau.pdf', 'ABF_1');

-- --------------------------------------------------------

--
-- Structure de la table `cp1`
--

DROP TABLE IF EXISTS `cp1`;
CREATE TABLE IF NOT EXISTS `cp1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

DROP TABLE IF EXISTS `diplome`;
CREATE TABLE IF NOT EXISTS `diplome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `matricule` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplome`
--

INSERT INTO `diplome` (`id`, `nom`, `prenom`, `alias`, `matricule`, `file`, `type`) VALUES
(15, 'DIABA', 'LIN MARRION DAILY', 'ABF_1', '1017', 'imag4.jpg', 'BULLETIN');

-- --------------------------------------------------------

--
-- Structure de la table `dm_1`
--

DROP TABLE IF EXISTS `dm_1`;
CREATE TABLE IF NOT EXISTS `dm_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dm_2`
--

DROP TABLE IF EXISTS `dm_2`;
CREATE TABLE IF NOT EXISTS `dm_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dm_3`
--

DROP TABLE IF EXISTS `dm_3`;
CREATE TABLE IF NOT EXISTS `dm_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ei_1`
--

DROP TABLE IF EXISTS `ei_1`;
CREATE TABLE IF NOT EXISTS `ei_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ei_2`
--

DROP TABLE IF EXISTS `ei_2`;
CREATE TABLE IF NOT EXISTS `ei_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ei_3`
--

DROP TABLE IF EXISTS `ei_3`;
CREATE TABLE IF NOT EXISTS `ei_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ei_3`
--

INSERT INTO `ei_3` (`id`, `jours`, `cours`, `heures`, `professeurs`, `image_prof`) VALUES
(1, 'LUNDI', 'MATHEMATIQUE', '08H:30 à 9H:00', 'Mr WILLIAM Martin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `finance`
--

DROP TABLE IF EXISTS `finance`;
CREATE TABLE IF NOT EXISTS `finance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `matricule` varchar(200) NOT NULL,
  `paie_total` varchar(200) NOT NULL,
  `deja_paye` varchar(200) NOT NULL,
  `reste_paye` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `finance`
--

INSERT INTO `finance` (`id`, `nom`, `prenom`, `alias`, `matricule`, `paie_total`, `deja_paye`, `reste_paye`) VALUES
(1, 'DIABA', 'LIN MARRION', 'ABF_1', '1000', '50000', '35000', '15000'),
(2, 'KOUBEMBA', 'LIFE', 'MGC_1', '1022', '500000', '51214', '448786'),
(3, 'DIABA', 'LIN DON BENIT', 'RI_2', '1023', '20000', '2000', '18000'),
(4, 'LOUBELO', 'LIN MARRION DAILY', 'ABF_1', '1024', '50000', '0', '50000'),
(5, 'NGOMA', 'LOIC', 'EI_2', '1', '300000', '0', '300000'),
(6, 'NGOMA', 'LOIC', 'EI_2', '2', '300000', '0', '300000'),
(7, 'NGOMA', 'LOIC', 'EI_3', '1000', '300000', '0', '300000'),
(8, 'NGOMA', 'LOIC', 'EI_3', '1001', '300000', '0', '300000'),
(9, 'NGOMA', 'LIN MARRION DAILY', 'EI_3', '1000', '300000', '0', '300000'),
(10, 'CHIN', 'LIN', 'EI_3', '1001', '300500', '0', '300500'),
(11, 'DIABA', 'LIN MARRION DAILY', 'EI_3', '1002', '200000', '0', '200000');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `texte` text NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `information_p`
--

DROP TABLE IF EXISTS `information_p`;
CREATE TABLE IF NOT EXISTS `information_p` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `texte` int(225) NOT NULL,
  `matricule` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noms` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `noms`, `email`, `tel`, `message`, `date`) VALUES
(34, 'Lin', 'lindailydiaba@gmail.com', '068477988', 'dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ', '2023-01-01 11:00:21'),
(35, 'Lola', 'lindailydiaba@gmail.com', '064255213', 'dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ', '2023-01-01 11:01:00');

-- --------------------------------------------------------

--
-- Structure de la table `mgc_1`
--

DROP TABLE IF EXISTS `mgc_1`;
CREATE TABLE IF NOT EXISTS `mgc_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mgc_2`
--

DROP TABLE IF EXISTS `mgc_2`;
CREATE TABLE IF NOT EXISTS `mgc_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mgc_3`
--

DROP TABLE IF EXISTS `mgc_3`;
CREATE TABLE IF NOT EXISTS `mgc_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mgrh_1`
--

DROP TABLE IF EXISTS `mgrh_1`;
CREATE TABLE IF NOT EXISTS `mgrh_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mgrh_1`
--

INSERT INTO `mgrh_1` (`id`, `jours`, `cours`, `heures`, `professeurs`, `image_prof`) VALUES
(1, 'lundi', 'DIABA', '14h40mn-16h10', 'Mr LINO', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `mgrh_2`
--

DROP TABLE IF EXISTS `mgrh_2`;
CREATE TABLE IF NOT EXISTS `mgrh_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mgrh_3`
--

DROP TABLE IF EXISTS `mgrh_3`;
CREATE TABLE IF NOT EXISTS `mgrh_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `moyenne`
--

DROP TABLE IF EXISTS `moyenne`;
CREATE TABLE IF NOT EXISTS `moyenne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `trimestre` varchar(200) NOT NULL,
  `matricule` varchar(200) NOT NULL,
  `moyenne` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `moyenne`
--

INSERT INTO `moyenne` (`id`, `nom`, `prenom`, `alias`, `trimestre`, `matricule`, `moyenne`) VALUES
(35, 'NGOMA', 'LIN MARRION DAILY', 'EI_3', '1', '1000', '12.85'),
(36, 'CHIN', 'LIN', 'EI_3', '1', '1001', '12,00');

-- --------------------------------------------------------

--
-- Structure de la table `mo_1`
--

DROP TABLE IF EXISTS `mo_1`;
CREATE TABLE IF NOT EXISTS `mo_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mo_2`
--

DROP TABLE IF EXISTS `mo_2`;
CREATE TABLE IF NOT EXISTS `mo_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mo_3`
--

DROP TABLE IF EXISTS `mo_3`;
CREATE TABLE IF NOT EXISTS `mo_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `note_devoir`
--

DROP TABLE IF EXISTS `note_devoir`;
CREATE TABLE IF NOT EXISTS `note_devoir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `matiere` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `matricule` varchar(200) NOT NULL,
  `mois` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note_devoir`
--

INSERT INTO `note_devoir` (`id`, `nom`, `prenom`, `alias`, `matiere`, `note`, `matricule`, `mois`) VALUES
(83, 'NGOMA', 'LIN MARRION DAILY', 'EI_3', 'Mathématique', '05', '1000', 'OCTOBRE'),
(78, 'DIABA', 'LIN MARRION DAILY', 'ABF_1', 'Mathématique', '10', '1017', 'OCTOBRE'),
(71, 'NOM', 'PRENOM', 'ABF_1', 'Mathématique', '12', '1011', 'OCTOBRE'),
(79, 'DIABA', 'LIN MARRION DAILY', 'ABF_1', 'FRANCAIS', '13.50', '1017', 'NOVEMBRE'),
(84, 'CHIN', 'LIN', 'EI_3', 'Mathématique', '05', '1001', 'OCTOBRE');

-- --------------------------------------------------------

--
-- Structure de la table `profils_etudiant`
--

DROP TABLE IF EXISTS `profils_etudiant`;
CREATE TABLE IF NOT EXISTS `profils_etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) DEFAULT NULL,
  `prenom` varchar(200) DEFAULT NULL,
  `sexe` varchar(200) NOT NULL,
  `date_n` date DEFAULT NULL,
  `lieu_n` varchar(100) NOT NULL,
  `nation` varchar(200) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `Telephone` varchar(100) NOT NULL,
  `niveau` varchar(200) DEFAULT NULL,
  `filiere` varchar(200) DEFAULT NULL,
  `alias` varchar(200) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `mat` varchar(100) NOT NULL,
  `nom_tuteur` varchar(200) NOT NULL,
  `telephone_tuteur` varchar(200) NOT NULL,
  `email_tuteur` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profils_etudiant`
--

INSERT INTO `profils_etudiant` (`id`, `nom`, `prenom`, `sexe`, `date_n`, `lieu_n`, `nation`, `Adresse`, `Ville`, `Telephone`, `niveau`, `filiere`, `alias`, `date`, `image`, `mot_de_passe`, `mat`, `nom_tuteur`, `telephone_tuteur`, `email_tuteur`) VALUES
(67, 'NGOMA', 'LIN MARRION DAILY', 'M', '1999-06-17', 'Brazzaville', 'congolaise', '663 Rue vindza Plateau des 15 ans.', 'Brazzaville', '068477988', '', 'Electricité industrielle', 'EI_3', '2023-02-06 11:59:34', 'lin.jpg', '1234', '1000', 'Ngoma', '', ''),
(68, 'CHIN', 'LIN', 'F', '2014-02-02', 'Mindouli', 'congolaise', '663 Rue vindza Plateau des 15 ans.', 'Brazzaville', '068477988', '', 'Electricité industrielle', 'EI_3', '2023-02-06 12:07:28', '', '1234', '1001', 'Ngoma', '', ''),
(69, 'DIABA', 'LIN MARRION DAILY', 'M', '2023-03-10', 'Brazzaville', 'congolais', 'guil', 'guil', '068477988', '', 'Electricité industrielle', 'EI_3', '2023-03-01 09:23:51', '', '1234', '1002', 'lin marrion daily DIABA', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `qhse_1`
--

DROP TABLE IF EXISTS `qhse_1`;
CREATE TABLE IF NOT EXISTS `qhse_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `qhse_2`
--

DROP TABLE IF EXISTS `qhse_2`;
CREATE TABLE IF NOT EXISTS `qhse_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `qhse_3`
--

DROP TABLE IF EXISTS `qhse_3`;
CREATE TABLE IF NOT EXISTS `qhse_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ri_1`
--

DROP TABLE IF EXISTS `ri_1`;
CREATE TABLE IF NOT EXISTS `ri_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ri_2`
--

DROP TABLE IF EXISTS `ri_2`;
CREATE TABLE IF NOT EXISTS `ri_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ri_3`
--

DROP TABLE IF EXISTS `ri_3`;
CREATE TABLE IF NOT EXISTS `ri_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sd_1`
--

DROP TABLE IF EXISTS `sd_1`;
CREATE TABLE IF NOT EXISTS `sd_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sd_2`
--

DROP TABLE IF EXISTS `sd_2`;
CREATE TABLE IF NOT EXISTS `sd_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sd_3`
--

DROP TABLE IF EXISTS `sd_3`;
CREATE TABLE IF NOT EXISTS `sd_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tl_1`
--

DROP TABLE IF EXISTS `tl_1`;
CREATE TABLE IF NOT EXISTS `tl_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tl_2`
--

DROP TABLE IF EXISTS `tl_2`;
CREATE TABLE IF NOT EXISTS `tl_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tl_3`
--

DROP TABLE IF EXISTS `tl_3`;
CREATE TABLE IF NOT EXISTS `tl_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `télécom_1`
--

DROP TABLE IF EXISTS `télécom_1`;
CREATE TABLE IF NOT EXISTS `télécom_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `télécom_1`
--

INSERT INTO `télécom_1` (`id`, `jours`, `cours`, `heures`, `professeurs`, `image_prof`) VALUES
(1, 'LUNDI', 'FRANCAIS', '08H:30 à 9H:00', 'Mr WILLIAM Martin', NULL),
(2, 'LUNDI', 'MATHEMATIQUE', '08H:30 à 9H:00', 'Mr WILLIAM Martin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `télécom_2`
--

DROP TABLE IF EXISTS `télécom_2`;
CREATE TABLE IF NOT EXISTS `télécom_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `télécom_3`
--

DROP TABLE IF EXISTS `télécom_3`;
CREATE TABLE IF NOT EXISTS `télécom_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vp_1`
--

DROP TABLE IF EXISTS `vp_1`;
CREATE TABLE IF NOT EXISTS `vp_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vp_2`
--

DROP TABLE IF EXISTS `vp_2`;
CREATE TABLE IF NOT EXISTS `vp_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vp_3`
--

DROP TABLE IF EXISTS `vp_3`;
CREATE TABLE IF NOT EXISTS `vp_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `heures` varchar(255) DEFAULT NULL,
  `professeurs` varchar(255) DEFAULT NULL,
  `image_prof` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
