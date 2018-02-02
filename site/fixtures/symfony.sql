-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 fév. 2018 à 14:38
-- Version du serveur :  5.7.19
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
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `conseil`
--

DROP TABLE IF EXISTS `conseil`;
CREATE TABLE IF NOT EXISTS `conseil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `degre_conseil_id` int(11) DEFAULT NULL,
  `type_conseil_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3F3F06819D7DF994` (`degre_conseil_id`),
  KEY `IDX_3F3F06817B89E826` (`type_conseil_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `conseil`
--

INSERT INTO `conseil` (`id`, `titre`, `contenu`, `degre_conseil_id`, `type_conseil_id`) VALUES
(1, 'Géré la consommation de votre micro-ondes', 'Ne pas utiliser le micro ondes tous les jours ...', 3, 1),
(11, 'bughiuhgiu', 'kjgiu', 3, 1),
(12, 'Privilégié le mode économie d\'énergie', 'Dans les paramètres ...', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `degre_conseil`
--

DROP TABLE IF EXISTS `degre_conseil`;
CREATE TABLE IF NOT EXISTS `degre_conseil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `degre_conseil`
--

INSERT INTO `degre_conseil` (`id`, `libelle`) VALUES
(1, 'Bas'),
(2, 'Moyen'),
(3, 'Haut');

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

DROP TABLE IF EXISTS `objet`;
CREATE TABLE IF NOT EXISTS `objet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_objet_id` int(11) DEFAULT NULL,
  `consommation` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46CD4C3838DFE8A6` (`type_objet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`id`, `nom`, `type_objet_id`, `consommation`) VALUES
(1, 'PANASONIC NN-E486MMUPG', 1, 1000),
(2, 'Acer Aspire 7', 2, 500);

-- --------------------------------------------------------

--
-- Structure de la table `objet_conseil`
--

DROP TABLE IF EXISTS `objet_conseil`;
CREATE TABLE IF NOT EXISTS `objet_conseil` (
  `objet_id` int(11) NOT NULL,
  `conseil_id` int(11) NOT NULL,
  PRIMARY KEY (`objet_id`,`conseil_id`),
  KEY `IDX_E43110BAF520CF5A` (`objet_id`),
  KEY `IDX_E43110BA668A3E03` (`conseil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `objet_conseil`
--

INSERT INTO `objet_conseil` (`objet_id`, `conseil_id`) VALUES
(1, 1),
(1, 11),
(2, 12);

-- --------------------------------------------------------

--
-- Structure de la table `type_objet`
--

DROP TABLE IF EXISTS `type_objet`;
CREATE TABLE IF NOT EXISTS `type_objet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_objet`
--

INSERT INTO `type_objet` (`id`, `nom`) VALUES
(1, 'Micro-Onde'),
(2, 'PC Portable');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conseil`
--
ALTER TABLE `conseil`
  ADD CONSTRAINT `FK_3F3F06817B89E826` FOREIGN KEY (`type_conseil_id`) REFERENCES `type_objet` (`id`),
  ADD CONSTRAINT `FK_3F3F06819D7DF994` FOREIGN KEY (`degre_conseil_id`) REFERENCES `degre_conseil` (`id`);

--
-- Contraintes pour la table `objet`
--
ALTER TABLE `objet`
  ADD CONSTRAINT `FK_46CD4C3838DFE8A6` FOREIGN KEY (`type_objet_id`) REFERENCES `type_objet` (`id`);

--
-- Contraintes pour la table `objet_conseil`
--
ALTER TABLE `objet_conseil`
  ADD CONSTRAINT `FK_E43110BA668A3E03` FOREIGN KEY (`conseil_id`) REFERENCES `conseil` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E43110BAF520CF5A` FOREIGN KEY (`objet_id`) REFERENCES `objet` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
