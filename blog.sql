-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 août 2018 à 07:46
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `date` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `category_id`) VALUES
(1, 'Mon titre', '\r\nI found what I need. And it\'s not friends, it\'s things.\r\n\r\nWhy did you bring us here? Soon enough. Guess again. Come, Comrade Bender! We must take to the streets!\r\n\r\nIt\'s toe-tappingly tragic! Actually, that\'s still true. I guess because my parents keep telling me to be more ladylike. As though! Five hours? Aw, man! Couldn\'t you just get me the death penalty? Five hours? Aw, man! Couldn\'t you just get me the death penalty?\r\nWhen I was first asked to make a film about my nephew, Hubert Farnsworth, I thought \"Why should I?\" Then later, Leela made the film. But if I did make it, you can bet there would have been more topless women on motorcycles. Roll film!\r\n\r\nOh dear! She\'s stuck in an infinite loop, and he\'s an idiot! Well, that\'s love for you. Is today\'s hectic lifestyle making you tense and impatient? You are the last hope of the universe. Fetal stemcells, aren\'t those controversial?\r\n\r\n\r\n', '2018-07-31 07:25:12', 1),
(2, 'Mon titre 2', 'I found what I need. And it\'s not friends, it\'s things.\r\n\r\nWhy did you bring us here? Soon enough. Guess again. Come, Comrade Bender! We must take to the streets!\r\n\r\nIt\'s toe-tappingly tragic! Actually, that\'s still true. I guess because my parents keep telling me to be more ladylike. As though! Five hours? Aw, man! Couldn\'t you just get me the death penalty? Five hours? Aw, man! Couldn\'t you just get me the death penalty?\r\nWhen I was first asked to make a film about my nephew, Hubert Farnsworth, I thought \"Why should I?\" Then later, Leela made the film. But if I did make it, you can bet there would have been more topless women on motorcycles. Roll film!\r\n\r\nOh dear! She\'s stuck in an infinite loop, and he\'s an idiot! Well, that\'s love for you. Is today\'s hectic lifestyle making you tense and impatient? You are the last hope of the universe. Fetal stemcells, aren\'t those controversial?', '2018-07-31 07:27:14', 1),
(6, 'Test', 'Lorem ipsum', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'Water Polo'),
(2, 'Longboard');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
