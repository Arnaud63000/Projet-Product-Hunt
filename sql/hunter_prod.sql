-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 août 2018 à 19:23
-- Version du serveur :  5.7.19
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hunter_prod`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categories` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categories`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `categories`) VALUES
(1, 'Technologies'),
(2, 'Musiques'),
(3, 'Jeux Video'),
(4, 'Videos'),
(5, 'Photographies');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_produits` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `commentaires` varchar(255) NOT NULL,
  PRIMARY KEY (`id_produits`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `id_messages` int(11) NOT NULL,
  `lien_site` varchar(255) NOT NULL,
  `id_like` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `photo_description` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `lien_categories` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `description`, `logo`, `id_messages`, `lien_site`, `id_like`, `id_categories`, `photo_description`, `categories`, `lien_categories`) VALUES
(1, 'Youtube', 'La meilleure plateforme de partages de vidéos!', 'images/youtube.png', 0, 'http://www.Youtube.com', 0, 4, 'images/Youtube-modal.PNG', 'Video', 'video.php?id_categories=4'),
(2, 'Facebook', 'Le meilleur réseaux social!', 'images/facebook.png', 0, 'http://www.facebook.com', 0, 1, 'images/facebook_screen.PNG', 'Techno', 'techno.php?id_categories=1'),
(3, 'Deezer', 'La meilleure plateforme de musiques!', 'images/deezer.png', 0, 'http://www.deezer.com', 0, 2, 'images/deezer-screen.PNG', 'Music', 'music.php?id_categories=2'),
(4, 'Twitter', 'Decouvrez ce qui se passe dans le monde réel!', 'images/twitter.png', 0, 'http://www.twitter.com', 0, 1, 'images/twitter-screen.PNG', 'Techno', 'techno.php?id_categories=1'),
(5, 'FuturaTech', 'La meilleure plateforme de musiques!', 'images/futura.png', 0, 'http://www.futura-sciences.com', 0, 1, 'images/futura-screen.PNG', 'Techno', 'techno.php?id_categories=1'),
(6, 'Spotify', 'De la musique pour tous!', 'images/spotify.png', 0, 'http://www.spotify.com', 0, 2, 'images/spotify_screen.PNG', 'Music', 'music.php?id_categories=2'),
(7, 'Typos', 'Ecoutez de la musique avec passion', 'images/Logo_TYPOS.png', 0, '', 0, 2, 'images/screen_Typos.png', 'Music', 'music.php?id_categories=2'),
(8, 'JeuxVideo.com', 'Forum de jeux vidéo', 'images/jeuxvideopointcom.png', 0, 'http://www.jeuxvideo.com', 0, 3, 'images/jvc-screen.PNG', 'Games', 'games.php?id_categories=3'),
(9, 'G2A', 'Clés jeux instantanées pas cher', 'images/logoG2A.png', 0, 'http://g2a.com', 0, 3, 'images/g2a-screen.PNG', 'Games', 'games.php?id_categories=3'),
(10, 'Instant Gaming', 'Vos jeux PC & MAC jusqu\'à -70%', 'images/instantgaming.png', 0, 'http://www.instant-gaming.com', 0, 3, 'images/instant-gaming-screen.PNG', 'Games', 'games.php?id_categories=3'),
(11, 'Twitch', 'Le meilleur du stream', 'images/twitch.png', 0, 'http://www.twitch.com', 0, 4, 'images/twitch-screen.PNG', 'Video', 'video.php?id_categories=4'),
(12, 'Dailymotion', 'Explorez et regardez des vidéos en ligne', 'images/dailymotion.png', 0, 'http://www.dailymotion.com', 0, 4, 'images/daily-screen.PNG', 'Video', 'video.php?id_categories=4'),
(13, 'Instagram', 'Mettez en ligne vos photos!', 'images/insta.png', 0, 'http://www.instagram.com', 0, 5, 'images/Instagram-screen.PNG', 'Photo', 'picture.php?id_categories=5'),
(14, 'Picsart', 'Explorez plus de 100.000.000 de photos sur Picsart !', 'images/picsart.png', 0, 'http://www.picsart.com', 0, 5, 'images/Picsart_screen.png', 'Photo', 'picture.php?id_categories=5'),
(15, 'Instatram', 'La meilleure plateforme de musiques!', 'images/instatram.png', 0, '', 0, 5, '', 'Photo', 'picture.php?id_categories=5');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `up` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`up`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
