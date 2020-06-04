-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 mai 2020 à 14:47
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

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
CREATE DATABASE IF NOT EXISTS `avotregout` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `avotregout`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `text` mediumtext NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `cat` tinytext NOT NULL,
  `page_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `start`, `end`, `cat`, `page_order`) VALUES
(1, 'Choisir un Buffet à thème', 'Idéal pour un repas de famille très nombreuse dans une ambiance chalereuse et conviviale. Le buffet proposera des mets variés que chacun pourra choisir sans chichi et à son goût pour autant qu’on aura bien su assortir les propositions : crudités, dips, cake salée, charcuterie, viande froide, fromage, Le buffet crée une ambiance chaleureuse et conviviale.', NULL, NULL, 'Buffets', 1),
(2, 'qu’est-ce qu’on mange ?', 'D’abord quelques mises en bouche (anchoïade, pain a l\'ail, pizza, pissaladière, tapenade, feuilletés…), assortiments de cakes salés et salades de saison en entrée. Le tout peut être suivi de Daube provençale, encornets farcis, blanquette de veau, saumon en croute, aioli, divers curry en plat. Pains et fromages de saison. Assortiments de desserts parmi les grands classiques ou quelques idées plus exotiques (tarte aux pommes, crumble, fraisier en saison, carot cake, moelleux chocolat, flan aux œufs maison... )\r\n\r\n\r\nA partir de 20 personnes, chaud ou froid, de l’entrée au dessert, Avec ou sans fromage , Avec ou sans boissons Avec ou sans Café, ...tout sera concocté selon votre budget ! Nous préparerons la composition de votre buffet A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux. Il sera livré clé en main, sur plateaux de présentation.', NULL, NULL, 'Buffets', 2),
(3, 'Choisir un cocktail dînatoire', '', NULL, NULL, 'Buffets', 3),
(4, 'Pièces chaudes', 'Verrine de lentilles du Puy au lard, Gambas kadaif, Samossa de bœuf aux légumes, Croustillant de St Jacques et poireaux, tortilla, Brochette poulet, Brochette canard, Verrine cœur de canard, brochette de chorizo, Polenta au foie gras...\r\n\r\n', NULL, NULL, 'Buffets', 4),
(5, 'Canapés froids', 'Roulé d’aubergine au bœuf, Croustillant de chèvres et légumes, Toast de foie gras et gelée de poire, Brochette de gambas et agrumes, Involtini de courgette à la menthe, Brochette de saumon et tomates confites, Toast de terrine maison...', NULL, NULL, 'Buffets', 5),
(6, 'Sandwiches', 'Club Poulet curry et roquette, Hamburger de foie gras, Mini focaccia roquette et gorgonzolla Club bagna, Mini cheese burger, Navettes saumon, Club vegan...', NULL, NULL, 'Buffets', 6),
(7, 'Les vérinnes salées', 'Verrine de flan de carottes au chèvre, Crumble de saumon et avocat, Tartare de tomates et féta, Salmonejo, Gazpacho, Verrine de pois à la menthe...', NULL, NULL, 'Buffets', 7),
(8, 'Les vérinnes sucrées', 'Mousse 3 chocolats, Tarte citron, Crème de fruit au choix, Tiramisu spéculoos, Cheese cake...', NULL, NULL, 'Buffets', 8),
(9, 'Mignardises', 'Chou caramel, Mini macarons, Mini cookies...', NULL, NULL, 'Buffets', 9),
(10, 'Formules', '\r\n- 14 pcs / pers. – 9 salés, 5 sucrés.\r\n\r\n- 17 pcs / pers. – 12 salés, 5 sucrés.', NULL, NULL, 'Buffets', 10),
(11, 'Spécialiste de la gastronomie espagnole, laissez vous tenter par le \"BAR A TAPAS Y CAZUELAS\"', '', NULL, NULL, 'Buffets', 11),
(12, 'Les classiques', 'Tortilla de patata individual acompañada de ali oli, cebolla caramelizada.\r\n\r\nJamón ibérico con tomate natural y aceite de oliva virgen.\r\n\r\nPisto de la Vera con huevos de codorniz y crujiente de patata.\r\n\r\nSalmorejo ó consomé de ave con picadito de huevo y jamón ibérico.', NULL, NULL, 'Buffets', 12),
(13, 'Recettes du terroir', 'Secreto con cebolla caramelizada y torta del Casar.\r\n\r\nSolomillo ibérico con setas a la crema y queso azul.\r\n\r\nBurrito de pollo cocido a baja temperatura con dip de jalapeños.\r\n\r\nVentresca de atún con guacamole, cherrys y totopos.\r\n\r\nSalmón ahumado con cangrejo, mahonesa y cebollita picada.\r\n\r\nChipirones a la plancha con cebolla caramelizada, rúcula y toque de ali ol…', NULL, NULL, 'Buffets', 13),
(14, 'Para compartir…o no !', 'Rabas de calamar acompañadas de ali oli.\r\n\r\nHuevos de corral para romper con jamón ibérico y aceite de trufa.\r\n\r\nSolomillo de vaca troceada al ajo tostado con fritas y padrón.\r\n\r\nPulpo a la parrilla con nuestra revolcona…', NULL, NULL, 'Buffets', 14),
(15, 'Ce n’est plus l’heure de petit déjeuner mais il est encore trop tôt pour déjeuner. C’est le moment parfait pour partager un BRUNCH idéal !!', '', NULL, NULL, 'Brunchs', 1),
(16, 'qu’est-ce qu’on mange ?', 'Pancakes, brioches au chocolat, muffins anglais aux œufs brouillés, blinis au saumon fumé, bagels fromage et jambon, salade roquettes, crevettes et avocat, plateaux de charcuteries et de fromage, céréales et fruits, tartes salées ou sucrées qui s’adapteront aux saisons… Et bien sûr toutes les boissons chaudes ou froides pour accompagner tout ça : thé, café, chocolat, chocolat à la tazza, smoothies ou jus de fruits, vins, champagne….\r\n\r\n\r\nA partir de 10 personnes, de l’entrée au dessert, avec ou sans boissons, classique, végétarien ou sans gluten, disponible tous les jours, dès 23 euros par personne (tarifs et menus adaptés pour les enfants sur demande)…Nous préparerons la compositions de votre brunch A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux.', NULL, NULL, 'Brunchs', 2),
(17, 'La soirée conviviale commence naturellement par un apéritif singulier', 'En Provence, ce n’est pas juste une habitude : c’est un temps fort du repas. Il peut être thématique, traditionnel, s’appuyer sur l’incontournable tapenade tout en incorporant des saveurs plus exotiques…', NULL, NULL, 'Apero', 1),
(18, 'qu’est-ce qu’on mange ?', 'Assortiment de terrines maison, des croquetas, Toasts fromage frais et saumon, pain à l’ail, Hamburgers de saison, Navettes chèvre miel, Focaccia aux légumes de saison, Gambas kadaïf, Choux de mousse de crevette, Navettes saumon gourmand, Choux de mousse de légume...et bien sûr olives des baux, tapenade à l’huile d’olive de Provence, pains et fromages d’ici…\r\n\r\n\r\nA partir de 10 personnes, avec ou sans boissons, végétarien ou sans gluten, disponible tous les jours, dès 10 euros par personne …Nous préparerons la compositions de votre apéro A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux. Ils sera livré clé en main, sur plateaux de présentation, serviettes comprises.', NULL, NULL, 'Apero', 2),
(19, 'Nos Formules', '', NULL, NULL, 'Apero', 3),
(20, 'Formule Provence', '½ Crudités, fruits de saison et sauce au choix (roquefort, saumon, light, crème ou mousse de légumes…)\r\n\r\n¼ Charcuterie fine (en fonction saison terrine maison, caillettes, saucisson d’Arles…)\r\n\r\n¼ Fromages\r\n\r\n50 bouchées environ', NULL, NULL, 'Apero', 4),
(21, 'Formule TAPAS y PINTXOS', '¼ Croquetas de jambon Serrano\r\n\r\n¼ Charcuterie fine (en fonction arrivage : jamon Serrano, chorizon doux et fort, belota avec supplément)\r\n\r\n¼ Manchego et gelée de coing\r\n\r\n¼ Tortilla\r\n\r\nPicots et fruits\r\n\r\n50 bouchées environ', NULL, NULL, 'Apero', 5),
(22, 'Formule TOSCANE', '¼ Antipastis (tomates séchées, artichauts, champignons, variantes…)\r\n\r\n¼ Charcuterie fine (en fonction arrivage : jambon cru, brésaola, coppa, mortadella…)\r\n\r\n¼ Fromage (pecorino, parmesan…)\r\n\r\n¼ Focaccia (olives, fromages, ail et herbes…)\r\n\r\nOlives et gressin\r\n\r\n50 bouchées environ', NULL, NULL, 'Apero', 6),
(23, 'Toutes nos formules sont livrées clé en main, sur plateaux de présentation, serviettes comprises.', '', NULL, NULL, 'Apero', 7),
(24, 'Pour les organisateurs d\'événements', 'Du cochon de lait grillé de Espagne à l\'agneau des Alpes en passant par la traditionnelle paella, faites-vous plaisir avec une cuisine conviviale...\r\n\r\nMon crédo : une cuisine simple mais de saison, des fournisseurs locaux passionnés par leur métier et leurs produits, d\'un engagement anti-gaspi et une démarche eco-responsable pour l\'organisation des événements.\r\n\r\nNous ferons une proposition en fonction du lieu, du nombre de convives, de vos goûts et de votre budget.', NULL, NULL, 'Evenements', 1),
(25, 'Mes références clients :', 'des festivals : Cinéhorizontes, Espagne des 3 cultures…des équipements culturels : Mucem, Théatre Toursky, Cinéma Le Prado, Cinéma le Variété Marseille…\r\n\r\ndes Associations : La Cigale Puyloubier, Cinépage Marseille, Regard 13 Arles,\r\n\r\ndes évènements sportifs : les Etoiles de Pau (concours hypique), Course Cycliste La Marseillaise…\r\n\r\nDes Centres de Formation : Ecole Doctorale en Mathématiques et Informatiques St Jérôme, CROUS Aix en Provence, Ecole ALBERIC LAURENT Aix en Provence…\r\n\r\nDes évènements privés : au domaine de Puyfond Aix en Provence\r\n\r\nDes évènements d’entreprises : KIA (circuit Sambuc), GOODHOTEL Marseille Aubagne, France Fermeture Rousset…', NULL, NULL, 'Evenements', 2);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `text` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `promo` tinytext,
  `note` text NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_address` tinytext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `description` mediumtext NOT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `promos`
--

DROP TABLE IF EXISTS `promos`;
CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` tinytext NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `address` tinytext NOT NULL,
  `phone` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
