-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2023 at 10:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `basketData` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{"products": [], "customProducts": []}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `userId`, `basketData`) VALUES
(1, 1, '{\"products\":[],\"customProducts\":[]}'),
(2, 2, '{\"products\":[],\"customProducts\":[{\"count\":1,\"ingredients\":[{\"id\":2,\"count\":3},{\"id\":4,\"count\":4}]}]}'),
(3, 3, '{\"products\": [{\"id\": 1, \"size\": 60, \"count\": 1}, {\"id\": 4, \"size\": 30, \"count\": 1}], \"customProducts\": []}'),
(4, 4, '{\"products\": [], \"customProducts\": []}'),
(5, 8, '{\"products\":[{\"id\":3,\"count\":1,\"size\":45}],\"customProducts\":[]}');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `price`, `image`) VALUES
(1, 'Cebula', 2, 'img/ingredients/onion.jpg'),
(2, 'Sos Ostry', 5, 'img/ingredients/sauce.jpg'),
(3, 'Oliwki', 1, 'img/ingredients/olives.jpg'),
(4, 'Ser Żółty', 4, 'img/ingredients/cheese.jpg'),
(5, 'Bekon', 3, 'img/ingredients/bacon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `shortDescription` varchar(50) NOT NULL,
  `ingredients` varchar(150) NOT NULL,
  `sold` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `shortDescription`, `ingredients`, `sold`, `image`) VALUES
(1, 'Peperoni', 'Pizza z peperoni to bardzo smaczny wybór na ciepłe wieczory', 37, 'Pizza z peperoni', 'Sos Pomidorowy, Ser Mozzarella, Pepperoni', 12, 'img/products/peperoni.png'),
(2, 'Hawajska', 'Pizza z ananasem to bardzo smaczny wybór na ciepłe wieczory', 34, 'Pizza z ananasem', 'Sos Pomidorowy, Ser Mozzarella, Szynka, Ananas', 2, 'img/products/hawai.png'),
(3, 'Mięsna PRO', 'Pizza z mięsem to bardzo smaczny wybór na zimne wieczory', 52, 'Pizza z mięsem', 'Sos Pomidorowy, Ser Mozzarella, Pepperoni, Wolowina, Wieprzowina', 20, 'img/products/meat.png'),
(4, 'Mięsna', 'Pizza z mięsem to bardzo smaczny wybór na zimne wieczory', 42, 'Pizza z mięsem', 'Sos Pomidorowy, Ser Mozzarella, Pepperoni, Wolowina, Wieprzowina', 21, 'img/products/meat.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'img/users/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `password`, `name`, `surname`, `image`) VALUES
(1, 'ps@example.net', '507337591', '1a1dc91c907325c69271ddf0c944bc72', 'Patryk', 'Sawicki', 'img/users/default.png'),
(2, 'lw@example.net', '368522188', '1a1dc91c907325c69271ddf0c944bc72', 'Łukasz', 'Włodarczyk', 'img/users/user1.png'),
(3, 'bw@example.net', '368522188', '1a1dc91c907325c69271ddf0c944bc72', 'Blanka', 'Wójcik', 'img/users/user2.png'),
(4, 'as@example.net', '132140954', '1a1dc91c907325c69271ddf0c944bc72', 'Agata', 'Szulc', 'img/users/user3.png'),
(8, 'test@mail.com', '12345678', 'dcebbce69bab3b12ae6c9a7d6cfbbd9f', 'Test', 'Te', 'img/users/default.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
