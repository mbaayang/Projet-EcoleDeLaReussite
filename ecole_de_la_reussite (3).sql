-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 06 oct. 2022 à 16:56
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole_de_la_reussite`
--

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(11) NOT NULL,
  `nom_cours` varchar(50) DEFAULT NULL,
  `duree` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id` int(11) NOT NULL,
  `sujet` varchar(50) DEFAULT NULL,
  `somme` int(11) DEFAULT NULL,
  `date_paiement` date DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(20) DEFAULT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `passwords` varchar(50) DEFAULT NULL,
  `sexe` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `niveau` varchar(50) DEFAULT NULL,
  `note` int(20) DEFAULT NULL,
  `salaire` int(50) DEFAULT NULL,
  `archiver` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `pseudo`, `nom`, `prenom`, `dateNaissance`, `lieuNaissance`, `statut`, `passwords`, `sexe`, `email`, `tel`, `niveau`, `note`, `salaire`, `archiver`) VALUES
(1, 'ZOUKANA', 'DIALLO', 'Assane', '2022-10-13', 'df', 'k', '12345678', 'M', 'assanediallo192@gmail.com', '4454345', 'BTS', 12, 12000, 1),
(2, 'ZOUKANA', 'DIALLO', 'Assane', NULL, NULL, 'professeur', '12345678@', 'M', 'assanediallo192@gmail.com', '5566335', NULL, NULL, 12000, 1),
(3, 'ZOUKANA', 'DIALLO', 'Assane', NULL, NULL, 'professeur', '12345678@', 'M', 'assanediallo192@gmail.com', '5566335', NULL, NULL, 12000, 0),
(4, 'ZOUKANA', 'DIALLO', 'Assane', NULL, NULL, 'surveillant', '12345678@', 'M', 'assanediallo199@gmail.com', '5566335', NULL, NULL, 12000, 0),
(5, 'MalickSy', 'sy', 'malick', NULL, NULL, 'proffeseur', '1222', 'M', 'malicksy@gmail.com', '776666666', NULL, NULL, 20000, 0),
(6, 'Admin', 'DIALLO', 'Assane', NULL, NULL, 'proffeseur', '12345678@', 'M', 'assanediallo192@gmail.com', '5566335', NULL, NULL, 20000, 1),
(7, 'Aicha', 'fall', 'Mame Aissatou', NULL, NULL, 'comptable', 'Fall60211', 'F', 'yafa@gmail.com', '774118356', NULL, NULL, 12000, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

CREATE TABLE `pointage` (
  `id` int(11) NOT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `heures` varchar(50) DEFAULT NULL,
  `retard` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `routine`
--

CREATE TABLE `routine` (
  `id` int(11) NOT NULL,
  `dates` date DEFAULT NULL,
  `cours` varchar(50) DEFAULT NULL,
  `nom_prof` varchar(50) DEFAULT NULL,
  `duréé` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

CREATE TABLE `salaire` (
  `id` int(11) NOT NULL,
  `dates` date DEFAULT NULL,
  `somme` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `pointage`
--
ALTER TABLE `pointage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salaire`
--
ALTER TABLE `salaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `matiere_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personnes` (`id`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personnes` (`id`);

--
-- Contraintes pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD CONSTRAINT `pointage_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personnes` (`id`);

--
-- Contraintes pour la table `routine`
--
ALTER TABLE `routine`
  ADD CONSTRAINT `routine_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personnes` (`id`);

--
-- Contraintes pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD CONSTRAINT `salaire_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personnes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
