-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2018 at 12:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hunter_prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `categories`) VALUES
(1, 'Technologies'),
(2, 'Musiques'),
(3, 'Jeux Video'),
(4, 'Videos'),
(5, 'Photographies');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `commentaires` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `pseudo`, `commentaires`) VALUES
('4', 'hello', 'yoyo'),
('4', 'hello', 'yoyo'),
('4', 'hello', 'yoyo'),
('4', 'hello', 'yoyo'),
('4', 'hello', 'yoyo'),
('4', 'hello', 'yoyo'),
('1', '', ''),
('1', 'Arnaud', 'hello'),
('4', '', ''),
('12', '', ''),
('12', 'yve', 'dhsqjfdhqjkd'),
('1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `id_messages` int(11) NOT NULL,
  `lien_site` varchar(255) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `photo_description` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `lien_categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `description`, `logo`, `id_messages`, `lien_site`, `id_categories`, `photo_description`, `categories`, `lien_categories`) VALUES
(1, 'Youtube', 'La meilleure plateforme de partages de vidéos!', 'images/youtube.png', 0, 'http://www.Youtube.com', 4, 'images/Youtube-modal.PNG', 'Video', 'video.php?id_categories=4'),
(2, 'Facebook', 'Le meilleur réseaux social!', 'images/facebook.png', 0, 'http://www.facebook.com', 1, 'images/facebook_screen.PNG', 'Techno', 'techno.php?id_categories=1'),
(3, 'Deezer', 'La meilleure plateforme de musiques!', 'images/deezer.png', 0, 'http://www.deezer.com', 2, 'images/deezer-screen.PNG', 'Music', 'music.php?id_categories=2'),
(4, 'Twitter', 'Decouvrez ce qui se passe dans le monde réel!', 'images/twitter.png', 0, 'http://www.twitter.com', 1, 'images/twitter-screen.PNG', 'Techno', 'techno.php?id_categories=1'),
(5, 'FuturaTech', 'La meilleure plateforme de musiques!', 'images/futura.png', 0, 'http://www.futura-sciences.com', 1, 'images/futura-screen.PNG', 'Techno', 'techno.php?id_categories=1'),
(6, 'Spotify', 'De la musique pour tous!', 'images/spotify.png', 0, 'http://www.spotify.com', 2, 'images/spotify_screen.PNG', 'Music', 'music.php?id_categories=2'),
(7, 'Typos', 'Ecoutez de la musique avec passion', 'images/Logo_TYPOS.png', 0, '', 2, 'images/screen_Typos.png', 'Music', 'music.php?id_categories=2'),
(8, 'JeuxVideo.com', 'Forum de jeux vidéo', 'images/jeuxvideopointcom.png', 0, 'http://www.jeuxvideo.com', 3, 'images/jvc-screen.PNG', 'Games', 'games.php?id_categories=3'),
(9, 'G2A', 'Clés jeux instantanées pas cher', 'images/logoG2A.png', 0, 'http://g2a.com', 3, 'images/g2a-screen.PNG', 'Games', 'games.php?id_categories=3'),
(10, 'Instant Gaming', 'Vos jeux PC & MAC jusqu\'à -70%', 'images/instantgaming.png', 0, 'http://www.instant-gaming.com', 3, 'images/instant-gaming-screen.PNG', 'Games', 'games.php?id_categories=3'),
(11, 'Twitch', 'Le meilleur du stream', 'images/twitch.png', 0, 'http://www.twitch.com', 4, 'images/twitch-screen.PNG', 'Video', 'video.php?id_categories=4'),
(12, 'Dailymotion', 'Explorez et regardez des vidéos en ligne', 'images/dailymotion.png', 0, 'http://www.dailymotion.com', 4, 'images/daily-screen.PNG', 'Video', 'video.php?id_categories=4'),
(13, 'Instagram', 'Mettez en ligne vos photos!', 'images/insta.png', 0, 'http://www.instagram.com', 5, 'images/Instagram-screen.PNG', 'Photo', 'picture.php?id_categories=5'),
(14, 'Picsart', 'Explorez plus de 100.000.000 de photos sur Picsart !', 'images/picsart.png', 0, 'http://www.picsart.com', 5, 'images/Picsart_screen.png', 'Photo', 'picture.php?id_categories=5'),
(15, 'Instatram', 'La meilleure plateforme de musiques!', 'images/instatram.png', 0, '', 5, '', 'Photo', 'picture.php?id_categories=5');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `nom_produit` varchar(255) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`nom_produit`, `vote`) VALUES
('Dailymotion', 0),
('Deezer', 7),
('Facebook', 13),
('FuturaTech', 0),
('G2A', 23),
('Instagram', 7),
('Instant Gaming', 31),
('Instatram', 1),
('JeuxVideo.com', 15),
('Picsart', 3),
('Spotify', 0),
('Twitch', 3),
('Twitter', 2),
('Typos', 0),
('Youtube', 57);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`nom_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
