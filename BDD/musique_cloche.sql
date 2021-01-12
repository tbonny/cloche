-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 12 Janvier 2021 à 02:51
-- Version du serveur :  10.1.45-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `musique_cloche`
--

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

CREATE TABLE `enregistrement` (
  `ID` int(11) NOT NULL,
  `Trame` varchar(20) NOT NULL,
  `ID_M` int(20) NOT NULL,
  `passage` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `enregistrement`
--

INSERT INTO `enregistrement` (`ID`, `Trame`, `ID_M`, `passage`) VALUES
(3, 'CH03', 1, 2),
(4, 'CH02', 1, 1),
(9, '1200', 1, 3),
(10, 'CH03', 1, 4),
(11, 'CH01', 1, 5),
(12, '3000', 1, 6),
(13, 'CH04', 1, 7),
(14, 'CH01', 2, 1),
(15, '1000', 2, 2),
(16, 'CH01', 2, 3),
(17, '2000', 2, 4),
(18, 'CH03', 2, 5),
(19, '1000', 2, 6),
(20, 'CH02', 2, 7),
(21, '3000', 2, 8),
(22, 'CH03', 2, 9),
(23, 'CH01', 2, 10),
(28, 'CH01', 4, 1),
(29, 'CH04', 4, 2),
(30, 'CH01', 4, 1),
(50, 'CH01', 20, 1),
(51, 'CH01', 20, 2),
(52, 'CH01', 20, 3),
(53, 'CH01', 20, 4),
(54, 'CH01', 20, 5),
(55, 'CH04', 24, 1),
(56, 'CH01', 24, 2),
(57, 'CH03', 24, 3),
(58, 'CH01', 24, 4),
(59, 'CH04', 24, 5);

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

CREATE TABLE `musique` (
  `ID_M` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `musique`
--

INSERT INTO `musique` (`ID_M`, `Nom`) VALUES
(1, 'Edouard'),
(2, 'TestMusique'),
(4, 'teTS'),
(20, 'kijuçu'),
(21, 'e'),
(22, 'zzz'),
(23, 'edouardf'),
(24, 'julien');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_M` (`ID_M`);

--
-- Index pour la table `musique`
--
ALTER TABLE `musique`
  ADD PRIMARY KEY (`ID_M`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `musique`
--
ALTER TABLE `musique`
  MODIFY `ID_M` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD CONSTRAINT `enregistrement_ibfk_1` FOREIGN KEY (`ID_M`) REFERENCES `musique` (`ID_M`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
