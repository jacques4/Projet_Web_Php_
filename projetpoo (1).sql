-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 fév. 2022 à 11:41
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetpoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `approvisionner`
--

CREATE TABLE `approvisionner` (
  `code` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `datecreation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `approvisionner`
--

INSERT INTO `approvisionner` (`code`, `libelle`, `prix`, `quantite`, `datecreation`) VALUES
(1, 'hof', 19, 1444, '2022-01-14'),
(2, 'bkb', 15, 1000, '2022-01-08');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `code` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `datecreation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`code`, `libelle`, `prix`, `quantite`, `datecreation`) VALUES
(3, 'lome', 14, 190000, '2022-01-14'),
(4, 'hof', 19, 454, '2022-01-14'),
(5, 'savon', 500, 200, '2021-01-25'),
(8, 'or', 15000, 400, '2022-01-16'),
(9, 'riz', 15000, 200, '2022-01-22'),
(10, 'poule', 1500, 152, '2022-01-01'),
(11, 'bkb', 360, 14, '2022-01-08'),
(12, 'papier', 500, 200, '2021-01-25'),
(13, 'portable', 50000, 1, '2022-02-11');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'jacques', 'jacques2002');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `code` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL,
  `prix` double NOT NULL,
  `quantite` int(11) NOT NULL,
  `datecreation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`code`, `libelle`, `prix`, `quantite`, `datecreation`) VALUES
(1, 'bkb', 15, 1, '2022-01-08'),
(2, 'bkb', 15, 11, '2022-01-08'),
(3, 'bkb', 15, 11, '2022-01-08'),
(4, 'bkb', 15, 11, '2022-01-08'),
(5, 'lome', 14, 1000, '2022-01-14'),
(6, 'lome', 14, 10000, '2022-01-14'),
(7, 'hof', 19, 1000, '2022-01-14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `approvisionner`
--
ALTER TABLE `approvisionner`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `approvisionner`
--
ALTER TABLE `approvisionner`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
