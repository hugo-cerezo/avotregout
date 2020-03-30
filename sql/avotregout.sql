-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 30 mars 2020 à 13:23
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
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `texte` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `categorie`, `titre`, `texte`) VALUES
(1, 'Particulier', 'brunch', '<h1>Brunch</h1><p>Ce n’est plus l’heure de petit déjeuner mais il est  encore trop tôt pour déjeuner. C’est le moment parfait pour partager un BRUNCH idéal !!</p>\r\n									<p><strong>qu’est-ce qu’on mange ?</strong></p>\r\n									<p>Pancakes, brioches au chocolat, muffins anglais aux œufs brouillés, blinis au saumon fumé,  bagels fromage et jambon, salade roquettes, crevettes et avocat, plateaux de charcuteries et de fromage, céréales et fruits, tartes salées ou sucrées qui s’adapteront au saison… Et bien sur toutes les boissons chaudes ou froides pour accompagner tout ça : thé, café, chocolat, chocolat a la tazza, smoothies ou jus de fruits, vins, champagne….</p>\r\n									<p>A partir de 10 personnes, de l’entrée au dessert, avec ou sans boissons, classique, végétarien ou sans gluten, disponible tous les jours, dès 23 euros par personne (tarifs et menu adaptés pour les enfants sur demande)…Nous préparerons la compositions de votre brunch A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux.</p>'),
(2, 'Particulier', 'Aperos clefs en main', '<h1>Apéros clefs en main</h1><p>La soirée conviviale commence naturellement par un apéritif singulier. En provence, ce n’est pas juste une habitude : c’est un temps fort du repas. Il peut être thématique, traditionnel, s’appuyer sur l’incontournable tapenade tout en incorporant des saveurs plus exotiques…</p>\r\n									<p><strong>qu’est-ce qu’on mange ?</strong></p>\r\n									<p>Assortiment de terrines maison, des coquetas, Toasts fromage frais et saumon, pain à l’ail, Hamburgers de saison, Navettes chèvre miel, Focaccia aux légumes de saison, Gambas kadaïf, Choux de mousse de crevette, Navettes saumon gourmand, Choux de mousse de légume...et bien sûr olives des baux, tapenade à l’huile d’olive de Provence, pains et fromages d’ici…</p>\r\n									<p>A partir de 10 personnes, avec ou sans boissons, végétarien ou sans gluten, disponible tous les jours, dès 10 euros par personne …Nous préparerons la compositions de votre apéro A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux. Ils sera livré clé en main, sur plateaux de présentation, serviettes comprises.</p>\r\n									\r\n									<p><strong>Formule PROVENCE</strong></p>\r\n									<p>¼ Antipasti (en fonction saison : tomates séchées, artichauts, champignons, variantes…)</br>¼ Charcuterie fine (en fonction arrivage : jambon cru, brésaola, coppa, mortadella…)</br>¼ Fromage (pecorino, parmesan…)</br>¼ Focaccia (olives, fromages, ail et herbes…)</br>Olives et gessini</p>\r\n                                    <p>50 bouchées environ</br>65 euros (livraison comprise)</p>\r\n									\r\n									<p><strong>Formule TAPAS y PINTXOS</strong></p>\r\n									<p>¼ Croquetas de jamon Serrano</br>¼ Charcuterie fine (en fonction arrivage : jamon Serrano, chorizon doux et fort, belota avec supplément)</br>¼ Manchego et gelée de coing</br>¼ Tortilla</br>Picos et fruits</p>\r\n									<p>50 bouchées environ</br>65 euros (livraison comprise)</p>\r\n\r\n									<p><strong>Formule TOSCANE</strong></p>\r\n									<p>¼ Antipasti (en fonction saison : tomates séchées, artichauts, champignons, variantes…)</br>¼ Charcuterie fine (en fonction arrivage : jambon cru, brésaola, coppa, mortadella…)</br>¼ Fromage (pecorino, parmesan…)</br>¼ Focaccia (olives, fromages, ail et herbes…)</br>Olives et gessini</p>\r\n									<p>50 bouchées environ</br>65 euros (livraison comprise)</p>\r\n\r\n									<p>Ils seront livrés clé en main, sur plateaux de présentation, serviettes comprises.</p>'),
(3, 'Particulier', 'Buffets', '<h1>buffets</h1><p><strong>Choisir un Buffet à thème</strong></p>\r\n									<p>Idéal pour un repas de famille très nombreuse dans une ambiance chalereuse et conviviale. Le buffet proposera des mets variés que chacun pourra choisir sans chichi et à son goût pour autant qu’on aura bien su assortir les propositions : crudités, dips, cake salée, charcuterie, viande froide, fromage, Le buffet crée une ambiance chaleureuse et conviviale.</p>\r\n									<p><strong>qu’est-ce qu’on mange ?</strong></p>\r\n									<p>D’abord quelques mises en bouche (anchoïade, pain a l ail, pizza, pissaladière, tapenade, feuilletés…), assortiments de cakes salés et salades de saison en entrée. Le tout peut être suivi de Daube provençale, encornets farcis, blanquette de veau, saumon en croute, aioli, divers curry en plat. Pains et fromages de saison. Assortiments de dessert parmi les grands classiques ou quelques idées plus exotiques (tarte aux pomme, crumble, fraisier ( en saison ), carot cake, moelleux chocolat, flan aux œufs maison... )</p>\r\n									<p>A partir de 20 personnes,  chaud ou froid, de l’entrée au dessert, Avec ou sans fromage , Avec ou sans boissons Avec ou sans Café, ...tout sera concocté selon votre budget !Nous préparerons la compositions de votre buffet A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux. Ils sera livré clé en main, sur plateaux de présentation.</p>\r\n									<p><strong>Choisir un cocktail dinatoire</strong></p>\r\n									<p><strong>PIECES CHAUDES</strong> Verrine de lentilles du Puy au lard, Gambas kadaif, Samossa de bœuf aux légumes, Croustillant de St Jacques et poireaux, tortilla, Brochette poulet, Brochette canard, Verrine cœur de canard, brochette de chorizo, Polenta au foie gras...</br><strong>CANAPES FROIDS</strong> Roulé d’aubergine au bœuf, Croustillant de chèvres et légumes, Toast de foie gras et gelée de poire, Brochette de gambas et agrumes, Involtini de courgette à la menthe, Brochette de saumon et tomates confites, Toast de terrine maison...</br><strong>SANDWICHES</strong>, Club Poulet curry et roquette, Hamburger de foie gras, Mini focaccia roquette et gorgonzolla Club bagna, Mini cheese burger, Navettes saumon, Club vegan...</br><strong>LES VERRINES SALEES</strong> Verrine de flan de carottes au chèvre,  Crumble de saumon et avocat, Tartare de tomates et féta, Salmonejo, Gazpacho, Verrine de pois à la menthe...</br><strong>LES VERRINES SUCREES</strong> Mousse 3 chocolats, Tarte citron, Crème de fruit au choix, Tiramisu spéculoos, Cheese cake...</br><strong>MIGNARDISES</strong> Chou caramel, Mini macarons, Mini cookies...</p>\r\n									<p><strong>2 formules:</strong></br><strong> Formule 1 </strong>: 14 pcs / pers. – 9 salés, 5 sucrés pour 19€ pers.</br><strong> formule 2 </strong>: 17 pcs / pers. – 12 salés, 5 sucrés pour 21€ pers.</p>\r\n									<p><strong>Spécialiste de la gastronomie espagnole, laissez vous tenter par le BAR A TAPAS Y CAZUELAS</strong></p>\r\n									<p><strong>Les classiques</strong></p>\r\n									<p>Tortilla de patata individual acompañada de ali oli, cebolla caramelizada</br>Jamón ibérico con tomate natural y aceite de oliva virgen</br>Pisto de la Vera con huevos de codorniz y crujiente de patata</br>Salmorejo ó consomé de ave con picadito de huevo y jamón ibérico </p>\r\n                                    <p><strong>Recettes du terroir </strong></p>\r\n									<p>Secreto con cebolla caramelizada y torta del Casar</br>Solomillo ibérico con setas a la crema y queso azul</br>Burrito de pollo cocido a baja temperatura con dip de jalapeños</br>Ventresca de atún con guacamole, cherrys y totopos</br>Salmón ahumado con cangrejo, mahonesa y cebollita picada</br>Chipirones a la plancha con cebolla caramelizada, rúcula y toque de ali ol…</p>\r\n                                    <p><strong>Para compartir…o no !</strong></p>\r\n									<p>Rabas de calamar acompañadas de ali oli</br>Huevos de corral para romper con jamón ibérico y aceite de trufa</br>Solomillo de vaca troceada al ajo tostado con fritas y padrón</br>Pulpo a la parrilla con nuestra revolcona…</p>'),
(4, 'Pro', 'brunch', '<h1>Brunch</h1><p>Ce n’est plus l’heure de petit déjeuner mais il est  encore trop tôt pour déjeuner. C’est le moment parfait pour partager un BRUNCH idéal !!</p>\r\n									<p><strong>qu’est-ce qu’on mange ?</strong></p>\r\n									<p>Pancakes, brioches au chocolat, muffins anglais aux œufs brouillés, blinis au saumon fumé,  bagels fromage et jambon, salade roquettes, crevettes et avocat, plateaux de charcuteries et de fromage, céréales et fruits, tartes salées ou sucrées qui s’adapteront au saison… Et bien sur toutes les boissons chaudes ou froides pour accompagner tout ça : thé, café, chocolat, chocolat a la tazza, smoothies ou jus de fruits, vins, champagne….</p>\r\n									<p>A partir de 10 personnes, de l’entrée au dessert, avec ou sans boissons, classique, végétarien ou sans gluten, disponible tous les jours, dès 23 euros par personne (tarifs et menu adaptés pour les enfants sur demande)…Nous préparerons la compositions de votre brunch A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux.</p>'),
(5, 'Pro', 'Aperos clefs en main', '<h1>Apéros clefs en main</h1><p>La soirée conviviale commence naturellement par un apéritif singulier. En provence, ce n’est pas juste une habitude : c’est un temps fort du repas. Il peut être thématique, traditionnel, s’appuyer sur l’incontournable tapenade tout en incorporant des saveurs plus exotiques…</p>\r\n									<p><strong>qu’est-ce qu’on mange ?</strong></p>\r\n									<p>Assortiment de terrines maison, des coquetas, Toasts fromage frais et saumon, pain à l’ail, Hamburgers de saison, Navettes chèvre miel, Focaccia aux légumes de saison, Gambas kadaïf, Choux de mousse de crevette, Navettes saumon gourmand, Choux de mousse de légume...et bien sûr olives des baux, tapenade à l’huile d’olive de Provence, pains et fromages d’ici…</p>\r\n									<p>A partir de 10 personnes, avec ou sans boissons, végétarien ou sans gluten, disponible tous les jours, dès 10 euros par personne …Nous préparerons la compositions de votre apéro A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux. Ils sera livré clé en main, sur plateaux de présentation, serviettes comprises.</p>\r\n									\r\n									<p><strong>Formule PROVENCE</strong></p>\r\n									<p>¼ Antipasti (en fonction saison : tomates séchées, artichauts, champignons, variantes…)</br>¼ Charcuterie fine (en fonction arrivage : jambon cru, brésaola, coppa, mortadella…)</br>¼ Fromage (pecorino, parmesan…)</br>¼ Focaccia (olives, fromages, ail et herbes…)</br>Olives et gessini</p>\r\n                                    <p>50 bouchées environ</br>65 euros (livraison comprise)</p>\r\n									\r\n									<p><strong>Formule TAPAS y PINTXOS</strong></p>\r\n									<p>¼ Croquetas de jamon Serrano</br>¼ Charcuterie fine (en fonction arrivage : jamon Serrano, chorizon doux et fort, belota avec supplément)</br>¼ Manchego et gelée de coing</br>¼ Tortilla</br>Picos et fruits</p>\r\n									<p>50 bouchées environ</br>65 euros (livraison comprise)</p>\r\n\r\n									<p><strong>Formule TOSCANE</strong></p>\r\n									<p>¼ Antipasti (en fonction saison : tomates séchées, artichauts, champignons, variantes…)</br>¼ Charcuterie fine (en fonction arrivage : jambon cru, brésaola, coppa, mortadella…)</br>¼ Fromage (pecorino, parmesan…)</br>¼ Focaccia (olives, fromages, ail et herbes…)</br>Olives et gessini</p>\r\n									<p>50 bouchées environ</br>65 euros (livraison comprise)</p>\r\n\r\n									<p>Ils seront livrés clé en main, sur plateaux de présentation, serviettes comprises.</p>'),
(6, 'Pro', 'Buffets', '<h1>buffets</h1><p><strong>Choisir un Buffet à thème</strong></p>\r\n									<p>Idéal pour un repas de famille très nombreuse dans une ambiance chalereuse et conviviale. Le buffet proposera des mets variés que chacun pourra choisir sans chichi et à son goût pour autant qu’on aura bien su assortir les propositions : crudités, dips, cake salée, charcuterie, viande froide, fromage, Le buffet crée une ambiance chaleureuse et conviviale.</p>\r\n									<p><strong>qu’est-ce qu’on mange ?</strong></p>\r\n									<p>D’abord quelques mises en bouche (anchoïade, pain a l ail, pizza, pissaladière, tapenade, feuilletés…), assortiments de cakes salés et salades de saison en entrée. Le tout peut être suivi de Daube provençale, encornets farcis, blanquette de veau, saumon en croute, aioli, divers curry en plat. Pains et fromages de saison. Assortiments de dessert parmi les grands classiques ou quelques idées plus exotiques (tarte aux pomme, crumble, fraisier ( en saison ), carot cake, moelleux chocolat, flan aux œufs maison... )</p>\r\n									<p>A partir de 20 personnes,  chaud ou froid, de l’entrée au dessert, Avec ou sans fromage , Avec ou sans boissons Avec ou sans Café, ...tout sera concocté selon votre budget !Nous préparerons la compositions de votre buffet A VOTRE GOUT ensemble à partir des produits de saison que nous choisirons chez les producteurs et artisans locaux. Ils sera livré clé en main, sur plateaux de présentation.</p>\r\n									<p><strong>Choisir un cocktail dinatoire</strong></p>\r\n									<p><strong>PIECES CHAUDES</strong> Verrine de lentilles du Puy au lard, Gambas kadaif, Samossa de bœuf aux légumes, Croustillant de St Jacques et poireaux, tortilla, Brochette poulet, Brochette canard, Verrine cœur de canard, brochette de chorizo, Polenta au foie gras...</br><strong>CANAPES FROIDS</strong> Roulé d’aubergine au bœuf, Croustillant de chèvres et légumes, Toast de foie gras et gelée de poire, Brochette de gambas et agrumes, Involtini de courgette à la menthe, Brochette de saumon et tomates confites, Toast de terrine maison...</br><strong>SANDWICHES</strong>, Club Poulet curry et roquette, Hamburger de foie gras, Mini focaccia roquette et gorgonzolla Club bagna, Mini cheese burger, Navettes saumon, Club vegan...</br><strong>LES VERRINES SALEES</strong> Verrine de flan de carottes au chèvre,  Crumble de saumon et avocat, Tartare de tomates et féta, Salmonejo, Gazpacho, Verrine de pois à la menthe...</br><strong>LES VERRINES SUCREES</strong> Mousse 3 chocolats, Tarte citron, Crème de fruit au choix, Tiramisu spéculoos, Cheese cake...</br><strong>MIGNARDISES</strong> Chou caramel, Mini macarons, Mini cookies...</p>\r\n									<p><strong>2 formules:</strong></br><strong> Formule 1 </strong>: 14 pcs / pers. – 9 salés, 5 sucrés pour 19€ pers.</br><strong> formule 2 </strong>: 17 pcs / pers. – 12 salés, 5 sucrés pour 21€ pers.</p>\r\n									<p><strong>Spécialiste de la gastronomie espagnole, laissez vous tenter par le BAR A TAPAS Y CAZUELAS</strong></p>\r\n									<p><strong>Les classiques</strong></p>\r\n									<p>Tortilla de patata individual acompañada de ali oli, cebolla caramelizada</br>Jamón ibérico con tomate natural y aceite de oliva virgen</br>Pisto de la Vera con huevos de codorniz y crujiente de patata</br>Salmorejo ó consomé de ave con picadito de huevo y jamón ibérico </p>\r\n                                    <p><strong>Recettes du terroir </strong></p>\r\n									<p>Secreto con cebolla caramelizada y torta del Casar</br>Solomillo ibérico con setas a la crema y queso azul</br>Burrito de pollo cocido a baja temperatura con dip de jalapeños</br>Ventresca de atún con guacamole, cherrys y totopos</br>Salmón ahumado con cangrejo, mahonesa y cebollita picada</br>Chipirones a la plancha con cebolla caramelizada, rúcula y toque de ali ol…</p>\r\n                                    <p><strong>Para compartir…o no !</strong></p>\r\n									<p>Rabas de calamar acompañadas de ali oli</br>Huevos de corral para romper con jamón ibérico y aceite de trufa</br>Solomillo de vaca troceada al ajo tostado con fritas y padrón</br>Pulpo a la parrilla con nuestra revolcona…</p>');

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
(1, 'tapas', 'Croquetas au jambon', 1, 6, ''),
(2, 'tapas', 'Croquetas morue', 1, 6, ''),
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
