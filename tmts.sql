-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Février 2018 à 14:34
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tmts`
--

-- --------------------------------------------------------

--
-- Structure de la table `places`
--

CREATE TABLE `places` (
  `Id` int(16) NOT NULL,
  `UserId` int(16) NOT NULL,
  `Longitude` varchar(32) NOT NULL,
  `Latitude` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id` int(8) NOT NULL,
  `FirstName` varchar(16) NOT NULL,
  `LastName` varchar(16) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(32) DEFAULT NULL,
  `Monday` varchar(16) DEFAULT NULL,
  `Tuesday` varchar(16) DEFAULT NULL,
  `Wednesday` varchar(16) DEFAULT NULL,
  `Thursday` varchar(16) DEFAULT NULL,
  `Friday` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `Phone`, `Email`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`) VALUES
(1, 'Antoine', 'Picard', 620626906, 'a@gmail.com', '9h', '9h', '9h', '9h', '9h');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `places`
--
ALTER TABLE `places`
  MODIFY `Id` int(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `fk_UserPLace` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
