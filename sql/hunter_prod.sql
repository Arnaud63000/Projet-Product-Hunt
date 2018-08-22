-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2018 at 04:27 PM
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
  `id_produits` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `commentaires` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id_like` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `photo_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `description`, `logo`, `id_messages`, `lien_site`, `id_like`, `id_categories`, `photo_description`) VALUES
(1, 'Youtube', 'La meilleure plateforme de partages de vidéos!', 'images/youtube.png', 0, 'http://www.Youtube.com', 0, 4, 'images/Youtube-modal.PNG'),
(2, 'Facebook', 'Le meilleur réseaux social!', 'images/facebook.png', 0, 'http://www.facebook.com', 0, 1, 'images/facebook_screen.PNG'),
(3, 'Deezer', 'La meilleure plateforme de musiques!', 'images/deezer.png', 0, 'http://www.deezer.com', 0, 2, 'images/deezer-screen.PNG'),
(4, 'Twitter', 'Decouvrez ce qui se passe dans le monde réel!', 'images/twitter.png', 0, 'http://www.twitter.com', 0, 1, 'images/twitter-screen.PNG'),
(5, 'FuturaTech', 'La meilleure plateforme de musiques!', 'images/futura.png', 0, 'http://www.futura-sciences.com', 0, 1, 'images/futura-screen.PNG'),
(6, 'Spotify', 'De la musique pour tous!', 'images/spotify.png', 0, 'http://www.spotify.com', 0, 2, 'images/spotify_screen.PNG'),
(7, 'Typos', 'Ecoutez de la musique avec passion', 'images/Logo_TYPOS.png', 0, '', 0, 2, 'images/screen_Typos.png'),
(8, 'JeuxVideo.com', 'Forum de jeux vidéo', 'images/jeuxvideopointcom.png', 0, 'http://www.jeuxvideo.com', 0, 3, 'images/jvc-screen.PNG'),
(9, 'G2A', 'Clés jeux instantanées pas cher', 'images/logoG2A.png', 0, 'http://g2a.com', 0, 3, 'images/g2a-screen.PNG'),
(10, 'Instant Gaming', 'Vos jeux PC & MAC jusqu\'à -70%', 'images/instantgaming.png', 0, 'http://www.instant-gaming.com', 0, 3, 'images/instant-gaming-screen.PNG'),
(11, 'Twitch', 'Le meilleur du stream', 'images/twitch.png', 0, 'http://www.twitch.com', 0, 4, 'images/twitch-screen.PNG'),
(12, 'Dailymotion', 'Explorez et regardez des vidéos en ligne', 'images/dailymotion.png', 0, 'http://www.dailymotion.com', 0, 4, 'images/daily-screen.PNG'),
(13, 'Instagram', 'Mettez en ligne vos photos!', 'images/insta.png', 0, 'http://www.instagram.com', 0, 5, 'images/Instagram-screen.PNG'),
(14, 'Picsart', 'Explorez plus de 100.000.000 de photos sur Picsart !', 'images/picsart.png', 0, 'http://www.picsart.com', 0, 5, 'images/Picsart_screen.png'),
(15, 'Instatram', 'La meilleure plateforme de musiques!', 'images/instatram.png', 0, '', 0, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `up` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_produits`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`up`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_produits` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `up` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
