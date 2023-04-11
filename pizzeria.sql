-- phpMyAdmin SQL Dump
-- version 5.1.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2023 at 02:53 PM
-- Server version: 8.0.32-0ubuntu0.22.10.2
-- PHP Version: 8.1.7-1ubuntu3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzeria`
--
CREATE DATABASE IF NOT EXISTS `pizzeria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE `pizzeria`;

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` int NOT NULL,
  `userId` int NOT NULL,
  `basketData` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `userId`, `basketData`) VALUES
(1, 1, '{\"products\": [], \"customProducts\": []}'),
(2, 2, '{\"products\": [], \"customProducts\": []}'),
(3, 3, '{\"products\": [{\"id\": 1, \"size\": 60, \"count\": 1}, {\"id\": 4, \"size\": 30, \"count\": 1}], \"customProducts\": []}'),
(4, 4, '{\"products\": [], \"customProducts\": []}');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `price`, `image`) VALUES
(1, 'Cebula', '2', 'img/ingredients/onion.jpg'),
(2, 'Sos Ostry', '5', 'img/ingredients/sauce.jpg'),
(3, 'Oliwki', '1', 'img/ingredients/olives.jpg'),
(4, 'Ser Żółty', '4', 'img/ingredients/cheese.jpg'),
(5, 'Bekon', '3', 'img/ingredients/bacon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `shortDescription` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `ingredients` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `sold` int NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `shortDescription`, `ingredients`, `sold`, `image`) VALUES
(1, 'Peperoni', 'Pizza z peperoni to bardzo smaczny wybór na ciepłe wieczory', '37', 'Pizza z peperoni', 'Sos Pomidorowy, Ser Mozzarella, Pepperoni', 12, 'img/products/peperoni.png'),
(2, 'Hawajska', 'Pizza z ananasem to bardzo smaczny wybór na ciepłe wieczory', '34', 'Pizza z ananasem', 'Sos Pomidorowy, Ser Mozzarella, Szynka, Ananas', 2, 'img/products/hawai.png'),
(3, 'Mięsna PRO', 'Pizza z mięsem to bardzo smaczny wybór na zimne wieczory', '52', 'Pizza z mięsem', 'Sos Pomidorowy, Ser Mozzarella, Pepperoni, Wolowina, Wieprzowina', 20, 'img/products/meat.png'),
(4, 'Mięsna', 'Pizza z mięsem to bardzo smaczny wybór na zimne wieczory', '42', 'Pizza z mięsem', 'Sos Pomidorowy, Ser Mozzarella, Pepperoni, Wolowina, Wieprzowina', 21, 'img/products/meat.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL,
  `phone` varchar(9) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL,
  `postcode` varchar(6) COLLATE utf8mb4_polish_ci NOT NULL,
  `city` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL,
  `street` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL,
  `houseNumber` varchar(10) COLLATE utf8mb4_polish_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `password`, `name`, `surname`, `postcode`, `city`, `street`, `houseNumber`, `image`) VALUES
(1, 'ps@example.net', '507337591', '1a1dc91c907325c69271ddf0c944bc72', 'Patryk', 'Sawicki', '34-732', 'Częstochowa', 'Stawowa', '57/91', 'img/users/default.png'),
(2, 'lw@example.net', '368522188', '1a1dc91c907325c69271ddf0c944bc72', 'Łukasz', 'Włodarczyk', '49-098', 'Zamość', 'Dożynkowa', '10', 'img/users/user1.png'),
(3, 'bw@example.net', '368522188', '1a1dc91c907325c69271ddf0c944bc72', 'Blanka', 'Wójcik', '50-064', 'Boguszów-Gorce', 'Dąbrowszczaków', '46', 'img/users/user2.png'),
(4, 'as@example.net', '132140954', '1a1dc91c907325c69271ddf0c944bc72', 'Agata', 'Szulc', '91-101', 'Sulejówek', 'Olchowa', '44', 'img/users/user3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `baskets_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
