-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 30 avr. 2018 à 18:26
-- Version du serveur :  10.1.24-MariaDB
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cdc`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_administ` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_administ`, `login`, `password`) VALUES
(2, 'aminafaris', 'amina'),
(6, 'aminafaris', '123456'),
(9, 'amina', 'aminaamina'),
(17, '123br', 'amin'),
(18, '123br', 'amin');

-- --------------------------------------------------------

--
-- Structure de la table `appels_offres`
--

CREATE TABLE `appels_offres` (
  `Id_appel_Offres` int(11) NOT NULL,
  `Num_Appels_Offres` varchar(40) NOT NULL,
  `Objet` text NOT NULL,
  `Date_Heure_Pub` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Date_Heure_limit_depot_offrApre_Report` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appels_offres`
--

INSERT INTO `appels_offres` (`Id_appel_Offres`, `Num_Appels_Offres`, `Objet`, `Date_Heure_Pub`, `Date_Heure_limit_depot_offrApre_Report`) VALUES
(1, '340', 'Construction d\'un site web', '2018-04-15 09:30:00', '2018-04-17 18:00:00'),
(2, '370', 'Tester le site de traitement des boues de curage ', '2018-04-18 09:00:00', '2018-04-19 18:30:00'),
(3, 'A00320', 'marché cadre : fournitures de lampes et ballasts lots 1 à 4', '2018-04-16 18:00:00', '2018-04-11 09:30:00'),
(4, 'AOO-320', 'marché cadre : fournitures de lampes et ballasts lots 1 à 4', '2017-01-15 18:00:00', '2017-01-17 09:30:00'),
(5, 'QOO320', 'DGLLKJ?NHBVC', '2018-04-23 13:19:19', '2018-04-23 00:00:00'),
(6, 'QOO320', 'DGLLKJ?NHBVC', '2018-04-23 13:19:22', '2018-04-23 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Ref_Client` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Service` varchar(30) NOT NULL,
  `Email_Prof` varchar(30) NOT NULL,
  `Confirm_Email` varchar(30) NOT NULL,
  `Fax_Prof` varchar(30) NOT NULL,
  `Tele_Prof` varchar(30) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Confirm_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Ref_Client`, `Nom`, `Prenom`, `Service`, `Email_Prof`, `Confirm_Email`, `Fax_Prof`, `Tele_Prof`, `Login`, `password`, `Confirm_password`) VALUES
(1, 'amina', 'faris', 'HDJJ', 'aminafaris10@gmail.com', 'aminafaris10@gmail.com', '12345', '345', 'aminafaris', '1234', '1234'),
(11, 'anas', 'faris', 'JK', 'anasdaghai@gmail.com', 'anasdaghai@gmail.com', '12345', '345', 'aminafaris', '1234567890', '1234567890'),
(12, 'amina', 'faris', 'LD', 'aminafaris10@gmail.com', 'aminafaris10@gmail.com', '12345', '07-56-90-34', 'amina.faris', 'aminaamina1997', 'aminaamina1997'),
(13, 'leila', 'chourouk', 'LKJ', 'leilachrk@gmail.com', 'leilachrk@gmail.com', '12-76-98', '07-62-44-47-65', 'leila-chrk', 'leilachrk123', 'leilachrk123'),
(14, 'leila', 'chourouk', 'LKJ', 'leilachrk@gmail.com', 'leilachrk@gmail.com', '12-76-98', '07-62-44-47-65', 'leila-chrk', 'leilaleila', 'leilaleila'),
(15, 'imane', 'yassimi', 'GFH', 'imaneyasi@gmail.com', 'imaneyasi@gmail.com', '12-76-98', '07-62-44-47-65', 'imaneyasimi', 'imane123456', 'imane123456'),
(16, 'lamia', 'zouri', 'KJL', 'lamiawouri@gmail.com', 'lamiawouri@gmail.com', '12-76-98', '07-56-90-34', 'lamiazouri', 'lamia1234567', 'lamia1234567'),
(17, 'oumaima', 'kara', 'LD', 'oumaima.kara@gmail.com', 'oumaima.kara@gmail.com', '12-76-98', '07-56-90-34', 'oumaima.kara', '1234567890', '1234567890'),
(18, 'bK', 'na', 'JK', 'leilachrk@gmail.com', 'leilachrk@gmail.com', '56-45-80', '07-56-90-34', 'aminafaris', '0987654321', '0987654321'),
(19, 'issam', 'abderahmane', 'JK', 'issa.abd@gmail.com', 'issa.abd@gmail.com', '56-45-80', '07-56-90-34', 'issam.abd', '1234567890', '1234567890'),
(20, 'yassmine', 'malik', 'HDJJ', 'yassmine.malik@gmail.com', 'yassmine.malik@gmail.com', '12-76-98', '07-56-90-34', 'yassminemalik', 'yassmine123', 'yassmine123');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `Num_Entrp` int(20) NOT NULL,
  `Num_R_Comm` int(20) NOT NULL,
  `Adresse_S_Social` varchar(30) NOT NULL,
  `Num_tele` int(12) NOT NULL,
  `Num_Fax` int(12) NOT NULL,
  `Adresse_Email` varchar(20) NOT NULL,
  `Confirm_Email` varchar(20) NOT NULL,
  `Nom_Interlcoteur` varchar(20) NOT NULL,
  `GSM_Interlocuteur` int(12) NOT NULL,
  `Ref_Client` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`Num_Entrp`, `Num_R_Comm`, `Adresse_S_Social`, `Num_tele`, `Num_Fax`, `Adresse_Email`, `Confirm_Email`, `Nom_Interlcoteur`, `GSM_Interlocuteur`, `Ref_Client`) VALUES
(15, 97468, 'lydec diouri ', 7654289, 876498, 'lydec.di@gmail.com', 'lydec.di@gmail.com', 'Anas', 765429, 7),
(16, 0, '', 0, 0, '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id_inscr` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `Email_Address` varchar(30) NOT NULL,
  `Confirm_Email` varchar(30) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `Confirm_Password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_inscr`, `user`, `Email_Address`, `Confirm_Email`, `Password`, `Confirm_Password`) VALUES
(0, '', '', '', '', ''),
(1, 'amina.faris', 'amina_faris@gmail.com', 'amina_faris@gmail.com', 'amina', 'amina');

-- --------------------------------------------------------

--
-- Structure de la table `telechargement`
--

CREATE TABLE `telechargement` (
  `Id_telechrg_Clt` int(20) NOT NULL,
  `Num_Entrp` int(20) NOT NULL,
  `Num_Appels_Offres` varchar(20) NOT NULL,
  `Date_Telechergt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `telechargement`
--

INSERT INTO `telechargement` (`Id_telechrg_Clt`, `Num_Entrp`, `Num_Appels_Offres`, `Date_Telechergt`) VALUES
(2, 16, 'AOO 360-2017', '2018-04-23 16:40:23'),
(3, 19, 'A00321', '2018-04-30 11:37:28'),
(4, 15, '12', '2018-04-30 13:10:07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_administ`);

--
-- Index pour la table `appels_offres`
--
ALTER TABLE `appels_offres`
  ADD PRIMARY KEY (`Id_appel_Offres`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Ref_Client`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`Num_Entrp`),
  ADD KEY `client` (`Ref_Client`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id_inscr`);

--
-- Index pour la table `telechargement`
--
ALTER TABLE `telechargement`
  ADD PRIMARY KEY (`Id_telechrg_Clt`),
  ADD KEY `entreprise` (`Num_Entrp`),
  ADD KEY `Num_Appels_Offres_2` (`Num_Appels_Offres`),
  ADD KEY `appels_offres` (`Num_Appels_Offres`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_administ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `appels_offres`
--
ALTER TABLE `appels_offres`
  MODIFY `Id_appel_Offres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Ref_Client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `Num_Entrp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `telechargement`
--
ALTER TABLE `telechargement`
  MODIFY `Id_telechrg_Clt` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
