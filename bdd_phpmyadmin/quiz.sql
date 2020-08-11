-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 mai 2020 à 09:30
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE `choix` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `choix`
--

INSERT INTO `choix` (`id`, `question_id`, `correct`, `text`) VALUES
(1, 1, 0, 'L\'arbre de vie'),
(2, 1, 0, 'L\'arbre de la génèse'),
(3, 1, 0, 'L\'arbre du passé'),
(4, 1, 1, 'L\'arbre du monde'),
(5, 2, 0, 'Karuto'),
(6, 2, 0, 'Shizuku'),
(7, 2, 1, 'Machi'),
(8, 2, 0, 'Hisoka'),
(9, 3, 1, 'L\'eau est devenue sucrée'),
(10, 3, 0, 'L\'eau déborde'),
(11, 3, 0, 'L\'eau change de couleur'),
(12, 3, 0, 'L\'eau se glace'),
(13, 4, 0, 'Le go'),
(14, 4, 1, 'Le gungi'),
(15, 4, 0, 'Le gunka'),
(16, 4, 0, 'Le shogi'),
(17, 5, 1, 'Le serpent'),
(18, 5, 0, 'Le rat'),
(19, 5, 0, 'Le chien'),
(20, 5, 0, 'Le taureau');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`question_id`, `text`) VALUES
(1, 'Comment s’appelle le lieu de rendez-vous que Jin donne à Gon ?'),
(2, 'Qui est le n°3 de la brigade fantôme ?'),
(3, 'Que se passe-t-il lorsque Kirua teste son Nen sur le verre d’eau ?'),
(4, 'A quel jeu de plateau Meruem n’arrive-t-il pas à gagner ?'),
(5, 'Geru est quel animal des 12 zodiaques ?');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `choix`
--
ALTER TABLE `choix`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `choix`
--
ALTER TABLE `choix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
