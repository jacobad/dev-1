-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 19 Février 2019 à 16:24
-- Version du serveur :  5.7.25-0ubuntu0.16.04.2
-- Version de PHP :  7.0.33-0ubuntu0.16.04.1

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
-- Structure de la table `positionElement`
--

CREATE TABLE `positionElement` (
  `Id` int(11) NOT NULL,
  `DivName` varchar(60) DEFAULT NULL,
  `DivPositionX` int(4) DEFAULT NULL,
  `DivPositionY` int(4) DEFAULT NULL,
  `user_Id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `ProductName` varchar(60) DEFAULT NULL,
  `ProductDescription` text,
  `ProductPhoto` varchar(255) DEFAULT NULL,
  `user_Id` int(11) DEFAULT NULL,
  `statue` varchar(60) DEFAULT NULL,
  `ProductPrice` double DEFAULT NULL,
  `ProductQuantity` int(11) DEFAULT NULL,
  `PositionX` int(11) DEFAULT NULL,
  `PositionY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`Id`, `ProductName`, `ProductDescription`, `ProductPhoto`, `user_Id`, `statue`, `ProductPrice`, `ProductQuantity`, `PositionX`, `PositionY`) VALUES
(7, 'MOTO', 'c\'est super dangereux quand même je ne saisis pas l\'attrait des gens pour ce genre de vehicule', '2.jpg', 2, NULL, 15, 12, 85, 51),
(8, 'boucle d\'oreille ', 'c\'est nul', '2.jpg', 2, NULL, 45, 15, 332, 441),
(9, 'les bails', 'france', '4.jpg', 2, NULL, 1000, 15, 156, 390),
(10, 'MOTO', 'uigouui', '1.jpg', 2, NULL, 1000, 15, 223, 337),
(11, 'dzdz', '11', '2.jpg', 2, NULL, 15, 15, 697, 336),
(12, 'tr', '1111', '2.jpg', 2, NULL, 1, 15, 886, 336),
(13, 'dzdzghjklm', 'dfsdf', '1.jpg', 2, NULL, 3, 3, 817, 176),
(14, 'dzdzghjklm', 'dfsdf', '1.jpg', 2, NULL, 3, 3, 234, 289),
(15, 'MOTO', 'azerty', '2.jpg', 2, NULL, 15, 15, 442, 112),
(16, 'dzdzc', 'cecezcze', '3.jpg', 2, NULL, 15, 5, 223, 47),
(17, 'MOTO', 'rgerg', '3.jpg', 2, NULL, 15, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Text`
--

CREATE TABLE `Text` (
  `id` int(11) NOT NULL,
  `Text` text NOT NULL,
  `PositionX` int(11) DEFAULT NULL,
  `PositionY` int(11) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Text`
--

INSERT INTO `Text` (`id`, `Text`, `PositionX`, `PositionY`, `User_Id`) VALUES
(1, 'Que vais je bien pouvoir faire de ce projet ?', NULL, NULL, 2),
(2, 'quel bail \r\n\r\nvous', NULL, NULL, 2);

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
  `Id_Product` int(11) DEFAULT NULL,
  `statue` varchar(60) DEFAULT NULL,
  `photoProfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `NickName`, `Mail`, `Password`, `CreationTimeStamp`, `Id_Message`, `Id_Product`, `statue`, `photoProfil`) VALUES
(1, 'emmanuel', 'bell', 'jacob', 'test@mail.fr', 'azerty', '2019-02-08 17:21:20', NULL, NULL, NULL, NULL),
(2, 'fabien', 'bell', 'cobi', 'test1@mail.fr', '$2y$11$ae7f432b00fd730911e06ur0vMncaOForNHELiXXuFiikpitYVsDG', '2019-02-08 17:27:09', NULL, NULL, NULL, '2.jpg'),
(3, 'EMMANUEL', 'sangah', 'jacob', 'test2@mail.fr', '$2y$11$8f6e81601d8adf8b942c2Oo495R9gXVqPA..4PW8xaQSjmpuyojV.', '2019-02-12 14:52:46', NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `positionElement`
--
ALTER TABLE `positionElement`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Text`
--
ALTER TABLE `Text`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `positionElement`
--
ALTER TABLE `positionElement`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `Text`
--
ALTER TABLE `Text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
