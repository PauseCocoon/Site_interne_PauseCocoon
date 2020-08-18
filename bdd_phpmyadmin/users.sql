-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 mai 2020 à 07:56
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
-- Base de données : `loginsystem`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` text NOT NULL,
  `score` int(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateursfaux`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `pseudo`, `email`, `mdp`, `score`, `date`) VALUES
(2, 'Hu', 'Linda', 'Cece', 'linda.hu25@gmail.com', '$2y$12$KgaXq4SskypR6qZlmYqgDelyfsuQcqKC9K2b6bt1h8X4wKd2r1DmW', 0, '2020-05-04 17:15:22'),
(6, 'Hu', 'Rosaline', 'rrr', 'rosaline.hu9@gmail.com', '$2y$12$q2ANvDtwG.G6LoSXMWCFZepWt4S6YsIlPXAzJrjcsJAkW8.j9Doru', 0, '2020-05-05 13:23:46'),
(7, 'Hu', 'Linda', 'Cece12', 'linda.hu25@gmail.com', '$2y$12$zNFaUJ6kPfFjJOy9KjFEkORKuJBC3ctL.De0R3G.bNDVKmOD15lvC', 0, '2020-05-06 15:36:56'),
(8, 'admin', 'admin', 'admin', 'contact@pause-cocoon.fr', '$2y$12$Fm.5oPSqhrpORn2FFHHNRe3KtoMLw82bGoeU/mYmqRs4UgntPhKKy', 100, '2020-08-18 14:38:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
