-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2025 at 04:07 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl-sts-sas`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'vinnoalvian17@gmail.com', '$2y$10$2czb80LOEk/3KzjL0a.Ri.H9FL5mXLb6nSU7ilaWCajwUQpj3/iEe', 'Vinno Alvian Chow'),
(2, 'awan123@gmail.com', '$2y$10$KynmU4uOH8CT7i5ZZgn.sO03IDyeHxgT1JYp80feCd0986t4.YScm', 'awan'),
(3, 'vino123@gmail.com', '$2y$10$Cvzh1RJXfHrlAAdPxL1svO31SasCU7kMShqKS5wHIfT9RvGWBxmC6', 'Vino'),
(4, 'user1@gmail.com', '$2y$10$wdxIykE8XNlhv/GbP./vGuXF2ObFpQXG1ROvNHxvtBTQ8iTbwYjTm', 'user1'),
(5, 'user2@gmail.com', '$2y$10$jomEu1xwEeTWjBfcPQYonesv4m9ocUMrVLHsYFyHuFtBSNmh/H.Bm', 'user2'),
(6, 'user3@gmail.com', '$2y$10$exuUJQs85URO34pIpCQKYOF12ePqHyiXmUKmgZde2WCHfS1l7wUfu', 'user3'),
(7, 'Admin@gmail.com', '$2y$10$6i980Q4uTikvikfTai3n5OO.FofUC3iTgajGsU0rYrlt2Ax/ti3Qi', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
