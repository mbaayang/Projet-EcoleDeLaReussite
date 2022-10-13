-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 13 oct. 2022 à 19:42
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
-- Base de données : `ecole_de_la_reussite_3`
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
  `date_inscription` date NOT NULL DEFAULT current_timestamp(),
  `dateArchiver` date NOT NULL,
  `archiver` int(11) DEFAULT 0,
  `matricule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `pseudo`, `nom`, `prenom`, `dateNaissance`, `lieuNaissance`, `statut`, `passwords`, `sexe`, `email`, `tel`, `niveau`, `note`, `salaire`, `date_inscription`, `dateArchiver`, `archiver`, `matricule`) VALUES
(19, 'zoukana', 'DIALLO', 'Assane', NULL, NULL, 'admin', '12345678@', '', 'assanediallo192@gmail.com', NULL, NULL, NULL, NULL, '2022-10-12', '0000-00-00', 1, ''),
(21, 'mg', 'gueye', 'mbayang', NULL, NULL, 'professeur', '1234', 'F', 'mbayangueye07@gmail.com', '7777777777', NULL, NULL, 150000, '2022-10-12', '0000-00-00', 0, ''),
(22, 'fall', 'fall', 'aicha', NULL, NULL, 'surveillant', '0000', 'F', 'yayefallsaliou@gmail.com', '77 000 00 00', NULL, NULL, 50000, '2022-10-12', '0000-00-00', 0, ''),
(23, 'moz', 'fall', 'modou', NULL, NULL, 'comptable', '2222', 'M', 'modoufall@gmail.com', '77 888 33 22', NULL, NULL, 100000, '2022-10-12', '0000-00-00', 0, ''),
(25, 'khouz', 'Badiane', 'Khoudia', '2022-09-26', 'dakar', 'Elève', NULL, 'F', NULL, '77 000 00 00', 'CP', NULL, NULL, '2022-10-12', '0000-00-00', 0, '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
