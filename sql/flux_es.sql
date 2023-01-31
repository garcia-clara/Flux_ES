-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 31 jan. 2023 à 19:37
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
-- Base de données : `flux_es`
--

-- --------------------------------------------------------

--
-- Structure de la table `tsp`
--

DROP TABLE IF EXISTS `tsp`;
CREATE TABLE IF NOT EXISTS `tsp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuid` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tsp`
--

INSERT INTO `tsp` (`id`, `cuid`, `prenom`, `nom`, `mdp`) VALUES
(54, 'HGTJ1285', 'Victoria', 'DOUGLAS', '0808'),
(53, 'CYGP3115', 'Clara', 'GARCIA', '0909');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cuid` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `heure` time(4) NOT NULL,
  `motif` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `prisencharge` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `cuid`, `heure`, `motif`, `numero`, `commentaire`, `prisencharge`) VALUES
(13, 'Clara', 'GARCIA', 'dd', '14:15:00.0000', 'Incident', 'dad', 'adad', 1),
(14, 'ezfezf', 'zefzef', 'fzef', '16:43:00.0000', 'Incident', 'zefezf', 'zefezf', 1),
(15, 'cdc', 'sc', 'sc', '17:43:00.0000', 'Autre', 'scsc', 'scsc', 1),
(16, 'ze', 'ze', 'ze', '17:12:00.0000', 'DMI', 'ze', 'ze', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
