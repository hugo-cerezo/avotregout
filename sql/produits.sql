-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 mars 2020 à 09:08
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `avotregout`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produits` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom produits` varchar(255) COLLATE utf8_bin NOT NULL,
  `quantites` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_produits`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produits`, `categorie`, `nom produits`, `quantites`, `prix`, `description`) VALUES
(1, 'tapas', 'Croquetas au jambon', 1, 6, 'Anneaux de calamars frits'),
(2, 'tapas', 'Croquetas morue', 1, 6, 'Calamars,Ail,Oeuf,Moutarde,Huile'),
(3, 'tapas', 'Croquetas au chorizo', 1, 6, ''),
(4, 'tapas', 'tortilla', 1, 6, ''),
(5, 'tapas', 'poivrons de padron', 1, 4, ''),
(6, 'tapas', 'patatas bravas', 1, 4, ''),
(7, 'tapas', 'Pan con tomate', 1, 3, ''),
(8, 'tapas', 'Pan con tomate et jambon serano', 1, 4, ''),
(9, 'tapas', 'albondigas chaudo', 1, 5, ''),
(10, 'tapas', 'calamars à l\'aioli', 1, 10, ''),
(11, 'tapas', 'calamars a la romaine', 1, 6, ''),
(12, 'plateau', 'plateau formage', 1, 15, 'Assortiment de fromages ibériques & français'),
(13, 'plateau', 'plateau charcuterie', 1, 17, 'Assortiment de charcuteries, fromages ibériques & français'),
(14, 'plateau', 'plateau charcuterie', 1, 20, 'Assortiment de charcuteries ibériques: jambon Serrano, Chorizo, Lomo & Fuet'),
(15, 'dessert', 'ASSORTIMENT DE FROMAGES', 1, 5, ''),
(16, 'dessert', 'churos', 1, 4, ''),
(17, 'dessert', 'MOELLEUX AU CHOCOLAT', 1, 4, ''),
(18, 'dessert', 'SALADE DE FRUITS FRAIS', 1, 4, ''),
(19, 'sur-demande', 'paella', 1, 0, ''),
(20, 'sur-demande', 'couscous', 1, 0, ''),
(21, 'sur-demande', 'mechoui', 1, 0, ''),
(22, 'sur-demande', 'cochon de lait', 1, 0, ''),
(23, 'sur-demande', 'barbeuque', 1, 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
