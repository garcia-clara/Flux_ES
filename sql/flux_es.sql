-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 17 fév. 2023 à 13:20
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
  `nbutilisateurs` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tsp`
--

INSERT INTO `tsp` (`id`, `cuid`, `prenom`, `nom`, `mdp`, `nbutilisateurs`) VALUES
(74, 'Q', 'q', 'Q', 'q', 1),
(73, 'X', 'x', 'X', 'x', 1),
(72, 'CYGP3115', 'Clara', 'GARCIA', '0909', 1),
(75, 'W', 'w', 'W', 'w', 1),
(76, 'C', 'c', 'C', 'c', 1),
(77, 'VV', 'v', 'V', 'v', 1);

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
  `heure` time NOT NULL,
  `motif` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `prisencharge` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `cuid`, `heure`, `motif`, `numero`, `commentaire`, `prisencharge`) VALUES
(24, 'd', 'd', 'd', '18:20:00', 'PILAF', 'd', 'd', ''),
(23, 'Salim', 'Alarcon', 'DOCK5390', '16:43:00', 'ROADMAP', 'INC00002355', 'Ecran HS', '');

DELIMITER $$
--
-- Évènements
--
DROP EVENT `delete_users_at_midnight`$$
CREATE DEFINER=`root`@`localhost` EVENT `delete_users_at_midnight` ON SCHEDULE EVERY 1 DAY STARTS '2023-02-10 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM utilisateurs$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
