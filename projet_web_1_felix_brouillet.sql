-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 04:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_web_1_felix_brouillet`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnes_infolettre`
--

CREATE TABLE `abonnes_infolettre` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `courriel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abonnes_infolettre`
--

INSERT INTO `abonnes_infolettre` (`id`, `nom`, `prenom`, `courriel`) VALUES
(2, 'test5', 'test5', 'test5@outlook.com'),
(3, 'test4', 'test4', 'test4@outlook.com'),
(4, 'test2', 'test2', 'test2@outlook.com'),
(5, 'test4', 'test4', 'test4@outlook.com'),
(6, 'test2', 'test2', 'test2@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories_principales`
--

CREATE TABLE `categories_principales` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories_principales`
--

INSERT INTO `categories_principales` (`id`, `nom`) VALUES
(1, 'Entrées'),
(2, 'Repas'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `plats`
--

CREATE TABLE `plats` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `categorie_principale_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `vegetarien` varchar(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plats`
--

INSERT INTO `plats` (`id`, `nom`, `description`, `prix`, `categorie_principale_id`, `image`, `vegetarien`, `date_creation`) VALUES
(38, 'Salade du jour', 'Fermentum lacinia lorem amet sit. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi. Fusce dignissim magna eu ante tincidunt consectetur.', '10.99', 1, 'uploads/salade_du_jour.jpg', 'oui', '2023-06-18 20:09:35'),
(39, 'Potage du moment', 'Fermentum lacinia lorem amet sit. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi. Fusce dignissim magna eu ante tincidunt consectetur.', '8.99', 1, 'uploads/potage_du_moment.jpg', 'non', '2023-06-18 20:10:31'),
(40, 'Ailes de lapin', 'Ut interdum viverra lacinia. Pellentesque ac nunc a nulla rutrum dictum ac ac diam. Cras vel justo ligula.  Proin ut ex et elit dapibus tempus vitae vitae magna. Nam a arcu sed ante efficitur semper. ', '16.49', 1, 'uploads/ailes_de_lapin.jpg', 'non', '2023-06-18 20:11:24'),
(41, 'Calamar', 'Proin ut ex et elit dapibus tempus vitae vitae magna. Nam a arcu sed ante efficitur semper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '16.99', 1, 'uploads/calamar.jpg', 'non', '2023-06-18 20:11:55'),
(42, 'Nachos', 'Nunc et ipsum ut nisl ultricies fermentum lacinia lorem amet sit. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi. Fusce dignissim magna eu ante tincidunt consectetur.', '18.99', 1, NULL, 'non', '2023-06-18 20:12:25'),
(43, 'Poutine', 'Morbi tincidunt fermentum lacinia. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi. Fusce dignissim magna eu ante tincidunt consectetur.', '14.99', 1, NULL, 'non', '2023-06-18 20:13:00'),
(44, 'Burger double classique avec frites', 'Deux galettes de bœuf, cheddar, bacon, tomate, laitue romaine, ognon rouge, sauce maison, servi avec frites', '15.99', 2, 'uploads/burger.jpg', 'oui', '2023-06-18 20:14:11'),
(45, 'Filets de poulet avec frites', 'Filets de poulet pané avec un mélange d’épices maison, servis avec frites', '13.99', 2, 'uploads/filets_de_poulet.jpg', 'non', '2023-06-18 20:14:38'),
(46, 'Burger au poulet', 'Morbi tincidunt fermentum lacinia. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi.', '15.99', 2, NULL, 'oui', '2023-06-18 20:15:19'),
(47, 'Salade grecque', 'Donec at nisi tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. In vitae rutrum arcu. ', '18.99', 2, 'uploads/salade_grecque.jpg', 'non', '2023-06-18 20:15:48'),
(48, 'Salade végétarienne', 'Donec et neque quis purus cursus mattis eu pulvinar velit. Praesent commodo rutrum nisl, at ultrices sem iaculis tincidunt. Nunc molestie accumsan porta. ', '14.99', 2, NULL, 'oui', '2023-06-18 20:16:17'),
(49, 'Tartare de bœuf', 'Proin faucibus quam lorem, non condimentum turpis blandit non. ', '24.99', 2, 'uploads/tartare_boeuf.jpg', 'non', '2023-06-18 20:16:47'),
(50, 'Tartare de légume', 'Etiam ut tincidunt lectus. Curabitur gravida est in finibus ultricies. Vestibulum volutpat erat vel libero ultrices placerat. ', '22.99', 2, 'uploads/tartare_legume.jpg', 'oui', '2023-06-18 20:17:18'),
(51, 'Côtes levées (Ribs)', 'Etiam dictum purus justo, at mattis justo bibendum in. In aliquam elementum enim, quis pretium purus efficitur ac. Curabitur in pretium leo.', '19.99', 2, NULL, 'non', '2023-06-18 20:17:41'),
(52, 'Un bon p’tit steak', 'Praesent aliquam a dolor eu rutrum. Sed at efficitur enim. Morbi quis placerat risus. Aenean ipsum massa, hendrerit eu molestie sit amet, mollis quis ante.  ', '14.99', 2, NULL, 'non', '2023-06-18 20:18:08'),
(54, 'Brownie', 'Vestibulum vel ex dolor. Maecenas et turpis nibh. Aliquam in imperdiet tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. ', '7.99', 3, 'uploads/brownie.jpg', 'non', '2023-06-18 20:19:34'),
(55, 'Cupcake style ferrero', 'Suspendisse id fringilla turpis. Aenean eleifend vulputate lacus, a pharetra metus. Sed eget pharetra sem. Proin tristique fringilla urna id pharetra. Vivamus sed pellentesque orci.', '8.99', 3, 'uploads/cupcake_style_ferrero.jpg', 'non', '2023-06-18 20:19:58'),
(56, 'Gâteau au fromage et caramel', 'Proin tristique fringilla urna id pharetra. Vivamus sed pellentesque orci.  ', '10.99', 3, 'uploads/gateau_fromage_caramel.jpg', 'non', '2023-06-18 20:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `courriel` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `courriel`, `mot_de_passe`, `admin`) VALUES
(11, 'test', 'test', 'test@outlook.com', '$2y$10$bgnCyd1yjLzdOo3wlc9TnOmDpMfq659ZRECeArrkpswpgx6sGtKDu', 'oui'),
(14, 'test2', 'test2', 'test2@outlook.com', '$2y$10$CwZqyprkDQBdsfMz4HAkfuM4lWAMc3GkIF1Dp9B/Epklgn47bWI5K', 'oui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnes_infolettre`
--
ALTER TABLE `abonnes_infolettre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_principales`
--
ALTER TABLE `categories_principales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_principale_id` (`categorie_principale_id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonnes_infolettre`
--
ALTER TABLE `abonnes_infolettre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories_principales`
--
ALTER TABLE `categories_principales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_ibfk_2` FOREIGN KEY (`categorie_principale_id`) REFERENCES `categories_principales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
