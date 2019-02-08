-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 08 Février 2019 à 17:30
-- Version du serveur :  5.7.25-0ubuntu0.16.04.2
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smartBuy`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(60) NOT NULL,
  `LastName` varchar(60) NOT NULL,
  `NickName` varchar(60) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `CreationTimeStamp` datetime NOT NULL,
  `Id_Message` int(11) DEFAULT NULL,
  `Id_Product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `NickName`, `Mail`, `Password`, `CreationTimeStamp`, `Id_Message`, `Id_Product`) VALUES
(1, 'emmanuel', 'bell', 'jacob', 'test@mail.fr', 'azerty', '2019-02-08 17:21:20', NULL, NULL),
(2, 'fabien', 'bell', 'cobi', 'test1@mail.fr', '$2y$11$ae7f432b00fd730911e06ur0vMncaOForNHELiXXuFiikpitYVsDG', '2019-02-08 17:27:09', NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
