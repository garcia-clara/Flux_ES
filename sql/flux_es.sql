-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 02 fév. 2023 à 18:48
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

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
  `nbutilisateurs` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tsp`
--

INSERT INTO `tsp` (`id`, `cuid`, `prenom`, `nom`, `mdp`, `nbutilisateurs`) VALUES
(69, '270', 'Tom', 'LAU', 'tom', 4);

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
  `prisencharge` tinyint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `cuid`, `heure`, `motif`, `numero`, `commentaire`, `prisencharge`) VALUES
(13, 'Clara', 'GARCIA', 'dd', '14:15:00.0000', 'Incident', 'dad', 'adad', 1),
(14, 'ezfezf', 'zefzef', 'fzef', '16:43:00.0000', 'Incident', 'zefezf', 'zefezf', 1),
(15, 'cdc', 'sc', 'sc', '17:43:00.0000', 'Autre', 'scsc', 'scsc', 1),
(16, 'ze', 'ze', 'ze', '17:12:00.0000', 'DMI', 'ze', 'ze', 1),
(17, 'cdc', 'sc', 'sc', '17:43:00.0000', 'Autre', 'scsc', 'scsc', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
