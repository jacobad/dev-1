-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 19 Février 2019 à 16:21
-- Version du serveur :  5.7.25-0ubuntu0.16.04.2
-- Version de PHP :  7.0.33-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `Author`
--

CREATE TABLE `Author` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Author`
--

INSERT INTO `Author` (`Id`, `FirstName`, `LastName`) VALUES
(1, 'Piraté', 'Piraté'),
(2, 'sangah', 'jacob'),
(3, 'sangah', 'jacob');

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Comment`
--

CREATE TABLE `Comment` (
  `Id` int(10) NOT NULL,
  `Pseudo` varchar(100) NOT NULL,
  `Contents` text NOT NULL,
  `CreationDate` datetime NOT NULL,
  `Post_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Comment`
--

INSERT INTO `Comment` (`Id`, `Pseudo`, `Contents`, `CreationDate`, `Post_Id`) VALUES
(1, 'a', 'a', '2019-01-10 11:43:31', 1),
(2, 'barth', 'dssds', '2019-01-10 11:43:54', 2),
(3, 'barth', 'dssds', '2019-01-10 11:49:25', 2),
(4, 'barth', 'dssds', '2019-01-10 11:57:26', 2),
(5, 'barth', 'j\'aime amel', '2019-01-10 11:57:42', 2),
(6, 'gerard', 'je ne crois en rien\r\n', '2019-01-10 12:07:39', 6),
(7, 'gerard', 'je ne crois en rien\r\n', '2019-01-10 12:21:35', 6),
(8, 'gerard', 'je ne crois en rien\r\n', '2019-01-10 12:22:38', 6),
(9, 'gerard', 'je ne crois en rien', '2019-01-10 12:35:11', 5);

-- --------------------------------------------------------

--
-- Structure de la table `Post`
--

CREATE TABLE `Post` (
  `Id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Contents` text NOT NULL,
  `CreationDate` date NOT NULL,
  `Author_Id` int(10) NOT NULL,
  `Category_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Post`
--

INSERT INTO `Post` (`Id`, `Title`, `Contents`, `CreationDate`, `Author_Id`, `Category_Id`) VALUES
(14, 'jacob ça va ?', 'qsaasa', '2019-01-15', 1, 1),
(15, '', '', '2019-01-15', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `role` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `mail`, `psw`, `firstName`, `lastName`, `pseudo`, `role`) VALUES
(1, 'manu@bell', '1234', 'jacob', 'sangah', 'sango', 'admin'),
(4, 'megan@love', 'jacobaimemegane', 'EMMANUEL', 'bell', 'j\'aime megane', 'user'),
(5, 'manu@bell', '$2y$11$3dbd88dee5d6b40ec2f0cuM0T5fwJZuVZWOCaVWYcBZoAgDegGRye', 'EMMANUEL', 'bell', 'j\'aime megane', 'user'),
(6, 'manu@bell', '$2y$11$e1909cc18e1cf85c8942cusQyHuAmPuZQIxL0f6UDWOE9Q8gOW1q.', 'EMMANUEL', 'bell', 'j\'aime megane', 'user'),
(7, 'megan@love', '$2y$11$839a80fe89a7487b5e85fu.ObBGVpDjHA.qAmoerzN5NZjvjREc6m', 'EMMANUEL', 'bell', 'j\'aime megane', 'user'),
(8, 'que@night', '$2y$11$ad08b7105fe5fb8e09559OWXLvBrzCz/84UmRPn4qQjjEjNXwaIyW', 'dan', 'sangah', 'j\'aime ', 'user'),
(9, 'admin@', '$2y$11$e1c3fd2db50b27f96aa07Oz4ty7fIRxshiNYDmzLDB1f9tt0mgcMu', 'manu', 'la bellance', 'ad', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Author`
--
ALTER TABLE `Author`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `Post`
--
ALTER TABLE `Post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
