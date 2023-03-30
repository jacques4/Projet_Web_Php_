-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 01 fév. 2022 à 10:59
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
-- Base de données : `admins`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscrisption`
--

CREATE TABLE `inscrisption` (
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `date_nais` date NOT NULL,
  `sexe` varchar(8) NOT NULL,
  `serie_bac` varchar(8) NOT NULL,
  `pays` varchar(8) NOT NULL,
  `releve` varchar(300) NOT NULL,
  `id` int(11) NOT NULL,
  `annee` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscrisption`
--

INSERT INTO `inscrisption` (`nom`, `prenom`, `date_nais`, `sexe`, `serie_bac`, `pays`, `releve`, `id`, `annee`) VALUES
('ASSIH', 'JACQUUES', '2022-01-28', 'M', 'F', 'burkina', 'files/www.cours-gratuit.com--coursinformatique-id3274.pdf', 11, 2019),
('NABEDE', 'Jacques', '2022-01-22', 'M', 'F', 'togo', 'files/Projet_web.pdf', 12, 2000),
('AGBODJI', 'Jeremie', '2022-01-21', 'M', 'C', 'Togolais', 'files/2-coursUML2.pdf', 14, 2021),
('BOCCO', 'Imelda', '2022-01-21', 'F', 'D', 'Ghaneenn', 'files/4_DiagrammesDeSequence.pdf', 15, 2017),
('AGBODJI', 'jacques', '2022-01-30', 'M', 'C', 'Togolais', 'files/archivetempBD.pdf', 18, 2020),
('AWESSO', 'Espoir', '2022-01-21', 'M', 'E', 'Cameroun', 'files/Exercice_Prerequis__POO_JAVA (2).pdf', 19, 2016),
('rock', 'Imelda', '2006-12-22', 'F', 'C', 'Togolais', 'files/www.cours-gratuit.com--coursinformatique-id3274.pdf', 20, 2022),
('AGBODJI', 'jeremie', '2002-06-19', 'M', 'C', 'Togolais', 'files/www.cours-gratuit.com--coursinformatique-id3274.pdf', 21, 2020);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('jeremie', 'jeremie2002'),
('IAI', 'IAI@1234'),
('jeremie', 'jeremie2002'),
('IAI', 'IAI@1234');

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

CREATE TABLE `publier` (
  `id` int(11) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `libelle` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publier`
--

INSERT INTO `publier` (`id`, `contenu`, `libelle`) VALUES
(8, 'communiquer/cerfa_15994-01.pdf', 'certa'),
(9, 'communiquer/1. Chiffrement affine.pdf', 'chiffrement affine'),
(10, 'communiquer/cerfa_15994-01.pdf', 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE `texte` (
  `id` int(11) NOT NULL,
  `texte` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`id`, `texte`) VALUES
(2, '   salut iai'),
(3, 'bonjour');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscrisption`
--
ALTER TABLE `inscrisption`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publier`
--
ALTER TABLE `publier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `texte`
--
ALTER TABLE `texte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscrisption`
--
ALTER TABLE `inscrisption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `publier`
--
ALTER TABLE `publier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `texte`
--
ALTER TABLE `texte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
