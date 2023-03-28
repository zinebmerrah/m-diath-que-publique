-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 mars 2023 à 13:22
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mediatheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `code_adherent` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `CIN` varchar(8) NOT NULL,
  `date_de_naissance` varchar(12) NOT NULL,
  `type` varchar(20) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_creation_compte` date NOT NULL,
  `score` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`code_adherent`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `CIN`, `date_de_naissance`, `type`, `user_name`, `password`, `date_creation_compte`, `score`) VALUES
(1, 'merrah', 'zineb', 'tanger', 'zineb@gmail.com', '0645454545', 'Z123456', '27-10-2002', 'etudiante', 'zineb_mer', 'zineb@2002', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `code_emprunt` int(11) NOT NULL,
  `date_emprunt` date NOT NULL,
  `date_retour` date NOT NULL,
  `code_reservation` int(11) NOT NULL,
  `code_gerant_emprunt` int(11) NOT NULL,
  `code_gerant_retour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gerant`
--

CREATE TABLE `gerant` (
  `code_gerant` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gerant`
--

INSERT INTO `gerant` (`code_gerant`, `user_name`, `password`) VALUES
(1, 'zineb_mer', 'zineb@2002');

-- --------------------------------------------------------

--
-- Structure de la table `ouvrage`
--

CREATE TABLE `ouvrage` (
  `code_ouvrage` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `nom_auteur` varchar(30) NOT NULL,
  `image` varchar(225) NOT NULL,
  `etat` varchar(225) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date_edition` date NOT NULL,
  `date_achat` date NOT NULL,
  `nombre_pages` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ouvrage`
--

INSERT INTO `ouvrage` (`code_ouvrage`, `titre`, `nom_auteur`, `image`, `etat`, `type`, `date_edition`, `date_achat`, `nombre_pages`) VALUES
(1, 'La fille de papier', 'Guillaume Musso', 'images/fille_de_papier.jpg', 'bon', ' roman', '2010-04-01', '2022-10-27', '376'),
(2, 'Antigone', 'Jean Anouilh', 'images/antigone.jpg', 'bon', ' roman', '1944-02-04', '2022-10-27', '128'),
(3, 'Et après', 'Guillaume Musso', 'images/apres.jpg', 'Acceptable', ' roman', '2004-02-22', '2016-10-27', ' 512'),
(4, 'maroc', 'Milan Presse', 'images/maroc.jpg', 'Assez usé', 'magazine', '2011-12-24', '2016-01-01', '');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `code_reservation` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `code_adherent` int(11) NOT NULL,
  `code_ouvrage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`code_adherent`);

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`code_emprunt`),
  ADD KEY `code_reservation` (`code_reservation`),
  ADD KEY `code_gerant_emprunt` (`code_gerant_emprunt`),
  ADD KEY `code_gerant_retour` (`code_gerant_retour`);

--
-- Index pour la table `gerant`
--
ALTER TABLE `gerant`
  ADD PRIMARY KEY (`code_gerant`);

--
-- Index pour la table `ouvrage`
--
ALTER TABLE `ouvrage`
  ADD PRIMARY KEY (`code_ouvrage`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`code_reservation`),
  ADD KEY `code_adherent` (`code_adherent`),
  ADD KEY `code_ouvrage` (`code_ouvrage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `code_adherent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `emprunt`
--
ALTER TABLE `emprunt`
  MODIFY `code_emprunt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gerant`
--
ALTER TABLE `gerant`
  MODIFY `code_gerant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ouvrage`
--
ALTER TABLE `ouvrage`
  MODIFY `code_ouvrage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `code_reservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`code_reservation`) REFERENCES `reservation` (`code_reservation`),
  ADD CONSTRAINT `emprunt_ibfk_2` FOREIGN KEY (`code_gerant_emprunt`) REFERENCES `gerant` (`code_gerant`),
  ADD CONSTRAINT `emprunt_ibfk_3` FOREIGN KEY (`code_gerant_retour`) REFERENCES `gerant` (`code_gerant`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`code_adherent`) REFERENCES `adherent` (`code_adherent`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`code_ouvrage`) REFERENCES `ouvrage` (`code_ouvrage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
