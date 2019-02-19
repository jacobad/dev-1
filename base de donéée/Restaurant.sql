-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 19 Février 2019 à 16:23
-- Version du serveur :  5.7.25-0ubuntu0.16.04.2
-- Version de PHP :  7.0.33-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `Booking`
--

CREATE TABLE `Booking` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `SeatNumber` int(3) NOT NULL,
  `CreationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Booking`
--

INSERT INTO `Booking` (`Id`, `Date`, `Time`, `SeatNumber`, `CreationDate`) VALUES
(1, '2018-02-01', '12:00:00', 1, '2019-02-06 10:06:39'),
(2, '2018-08-01', '18:00:00', 1, '2019-02-06 10:08:39');

-- --------------------------------------------------------

--
-- Structure de la table `Meal`
--

CREATE TABLE `Meal` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `QuantityInStock` int(4) NOT NULL,
  `BuyPrice` double NOT NULL,
  `SalePrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Meal`
--

INSERT INTO `Meal` (`Id`, `Name`, `Photo`, `Description`, `QuantityInStock`, `BuyPrice`, `SalePrice`) VALUES
(1, 'Coca-Cola', 'coca.jpg', 'Mmmm, le Coca-Cola avec 10 morceaux de sucres et tout plein de caféine !', 72, 0.6, 3),
(2, 'Bagel Thon', 'bagel_thon.jpg', 'Notre bagel est constitué d\'un pain moelleux avec des grains de sésame et du thon albacore, accompagné de feuilles de salade fraîche du jour  et d\'une sauce renversante :-)', 18, 2.75, 5.5),
(3, 'Bacon Cheeseburger', 'bacon_cheeseburger.jpg', 'Ce délicieux cheeseburger contient un steak haché viande française de 150g ainsi que d\'un buns grillé juste comme il faut, le tout accompagné de frites fraîches maison !', 14, 6, 12.5),
(4, 'Carrot Cake', 'carrot_cake.jpg', 'Le carrot cake maison ravira les plus gourmands et les puristes : tous les ingrédients sont naturels !\r\nÀ consommer sans modération', 9, 3, 6.75),
(5, 'Donut Chocolat', 'chocolate_donut.jpg', 'Les donuts sont fabriqués le matin même et sont recouvert d\'une délicieuse sauce au chocolat !', 16, 3, 6.2),
(6, 'Dr. Pepper', 'drpepper.jpg', 'Son goût sucré avec de l\'amande vous ravira !', 53, 0.5, 2.9),
(7, 'Milkshake', 'milkshake.jpg', 'Notre milkshake bien crémeux contient des morceaux d\'Oréos et est accompagné de crème chantilly et de smarties en guise de topping. Il éblouira vos papilles !', 12, 2, 5.35);

-- --------------------------------------------------------

--
-- Structure de la table `Order`
--

CREATE TABLE `Order` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `TotalAmount` double DEFAULT NULL,
  `TaxeRate` float DEFAULT NULL,
  `TaxeAmount` double DEFAULT NULL,
  `CreationTimestamp` datetime DEFAULT NULL,
  `CompleteTimestamp` datetime DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Order`
--

INSERT INTO `Order` (`Id`, `User_Id`, `TotalAmount`, `TaxeRate`, `TaxeAmount`, `CreationTimestamp`, `CompleteTimestamp`, `Status`) VALUES
(65, 4, 775, 0.2, 155, '2019-02-07 11:21:13', '2019-02-07 12:27:54', NULL),
(66, 4, 775, 0.2, 155, '2019-02-07 11:33:05', '2019-02-07 12:27:54', NULL),
(67, 4, 775, 0.2, 155, '2019-02-07 11:35:58', '2019-02-07 12:27:54', NULL),
(68, 4, 775, 0.2, 155, '2019-02-07 12:19:10', '2019-02-07 12:27:54', NULL),
(69, 4, 775, 0.2, 155, '2019-02-07 12:26:32', '2019-02-07 12:27:54', NULL),
(70, 4, 775, 0.2, 155, '2019-02-07 12:27:54', '2019-02-07 12:27:54', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `OrderLine`
--

CREATE TABLE `OrderLine` (
  `Id` int(11) NOT NULL,
  `QuantityOrdered` int(11) NOT NULL,
  `Meal_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `PriceEach` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `OrderLine`
--

INSERT INTO `OrderLine` (`Id`, `QuantityOrdered`, `Meal_Id`, `Order_Id`, `PriceEach`) VALUES
(47, 2, 4, 65, 6.75),
(48, 9, 6, 65, 2.9),
(49, 9, 1, 65, 3),
(50, 2, 4, 66, 6.75),
(51, 9, 6, 66, 2.9),
(52, 9, 1, 66, 3),
(53, 2, 4, 67, 6.75),
(54, 9, 6, 67, 2.9),
(55, 9, 1, 67, 3),
(56, 2, 4, 68, 6.75),
(57, 9, 6, 68, 2.9),
(58, 9, 1, 68, 3),
(59, 2, 4, 69, 6.75),
(60, 9, 6, 69, 2.9),
(61, 9, 1, 69, 3),
(62, 50, 3, 70, 12.5),
(63, 50, 1, 70, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(60) NOT NULL,
  `LastName` varchar(60) NOT NULL,
  `BirthDate` date NOT NULL,
  `Adress` text NOT NULL,
  `City` varchar(60) NOT NULL,
  `PostalCode` varchar(5) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Mail` varchar(60) NOT NULL,
  `Psw` varchar(60) NOT NULL,
  `CreationTimeStamps` datetime NOT NULL,
  `LoginTimeStamps` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`Id`, `FirstName`, `LastName`, `BirthDate`, `Adress`, `City`, `PostalCode`, `Phone`, `Mail`, `Psw`, `CreationTimeStamps`, `LoginTimeStamps`) VALUES
(1, 'EMMANUEL', 'sangah', '1940-01-01', 'jiàiojpoo,', 'evry', '91000', 753260046, 'test2@mail.fr', 'azerty', '2019-01-29 16:06:07', NULL),
(2, 'EMMANUEL', 'sangah', '1940-01-01', 'jiàiojpoo,', 'evry', '91000', 753260046, 'test2@mail.fr', '$2y$11$ec5d2daa46842d929e10du6dV7FTPygwpMBAI5/pEzxjT70.ZcSSi', '2019-01-29 16:12:45', NULL),
(3, 'emmanuel', 'bell', '2010-01-01', 'que la night', 'evry', '91000', 753260046, 'test@mail.fr', '$2y$11$3f79c535eadd74368cd7cuE9KThMdphu9TIz7XK1HQ58gSHtCAjOK', '2019-01-29 16:12:58', NULL),
(4, 'emmanuel', 'bell', '2010-01-01', 'que la night', 'evry', '91000', 753260046, 'LEtest@mail.fr', '$2y$11$6cb522d8f847adf07114fuq2nfJe8tM3bsG7vZzO90C/SYu40Qeqi', '2019-02-04 16:16:30', NULL),
(5, 'emmanuel', 'bell', '2010-01-01', 'que la night', 'evry', '91000', 753260046, 'LEtest@mail.fr', '$2y$11$284c45abcf8a3a94cbbe7eYeTM8l3dtLSOvOsLVVFqJQVvmw/o6kq', '2019-02-04 16:16:45', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Meal`
--
ALTER TABLE `Meal`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `OrderLine`
--
ALTER TABLE `OrderLine`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Meal`
--
ALTER TABLE `Meal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `Order`
--
ALTER TABLE `Order`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT pour la table `OrderLine`
--
ALTER TABLE `OrderLine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
