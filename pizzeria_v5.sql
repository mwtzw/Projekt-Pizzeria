-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2023 at 10:34 PM
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
CREATE DATABASE IF NOT EXISTS `pizzeria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE `pizzeria`;

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `basketData` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`basketData`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `userId`, `basketData`) VALUES
(1, 1, '{\"products\":[],\"customProducts\":[]}'),
(2, 2, '{\"products\":[],\"customProducts\":[]}'),
(3, 3, '{\"products\":[],\"customProducts\":[]}'),
(4, 4, '{\"products\":[],\"customProducts\":[]}'),
(7, 12, '{\"products\":[],\"customProducts\":[]}');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `orderData` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`orderData`)),
  `address` varchar(100) NOT NULL,
  `paymentMethod` int(11) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `orderData`, `address`, `paymentMethod`, `cost`, `date`, `phone`) VALUES
(12, 2, '{\"products\":[{\"id\":3,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Wyszków, Serwerowa 11', 1, 52.00, '2023-04-13 20:05:15', '12345678'),
(13, 2, '{\"products\":[{\"id\":2,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Nieznana 10', 1, 34.00, '2023-04-13 20:05:22', '12345678'),
(14, 2, '{\"products\":[{\"id\":4,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Wyszków, Serwerowa 11', 1, 42.00, '2023-04-13 20:19:47', '12345678'),
(15, 2, '{\"products\":[{\"id\":2,\"count\":1,\"size\":45},{\"id\":4,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Wyszków, Serwerowa 11', 1, 76.00, '2023-04-13 20:21:30', '12345678'),
(16, 2, '{\"products\":[{\"id\":1,\"count\":3,\"size\":45}],\"customProducts\":[]}', 'Nieznana 10', 1, 111.00, '2023-04-13 20:26:40', '12345678'),
(17, 1, '{\"products\":[{\"id\":4,\"count\":1,\"size\":45},{\"id\":2,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Wyszków, Serwerowa 11', 1, 76.00, '2023-04-13 20:39:45', '12345678'),
(18, 1, '{\"products\":[{\"id\":4,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Nieznana 10', 1, 42.00, '2023-04-13 20:39:59', '12345678'),
(19, 1, '{\"products\":[{\"id\":2,\"count\":1,\"size\":45},{\"id\":1,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Nieznana 10', 1, 71.00, '2023-04-13 20:40:21', '12345678'),
(20, 1, '{\"products\":[{\"id\":4,\"count\":1,\"size\":60},{\"id\":2,\"count\":1,\"size\":30},{\"id\":1,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Wyszków, Serwerowa 11', 2, 114.60, '2023-04-13 21:36:23', '12345678'),
(21, 1, '{\"products\":[{\"id\":3,\"count\":1,\"size\":45}],\"customProducts\":[]}', 'Wyszków, Serwerowa 11', 1, 52.00, '2023-04-13 21:37:58', '12345678'),
(22, 1, '{\"products\":[{\"id\":1,\"count\":3,\"size\":45}],\"customProducts\":[]}', 'Wyszków, Serwerowa 11', 3, 111.00, '2023-04-13 21:38:31', '12345678'),
(23, 1, '{\"products\":[{\"id\":4,\"count\":5,\"size\":45}],\"customProducts\":[]}', 'Wyszków, Serwerowa 11', 1, 210.00, '2023-04-14 22:41:50', '12345678'),
(24, 1, '{\"products\":[],\"customProducts\":[{\"count\":1,\"ingredients\":[{\"id\":1,\"count\":5},{\"id\":2,\"count\":5},{\"id\":3,\"count\":5},{\"id\":4,\"count\":5},{\"id\":5,\"count\":5}]},{\"count\":1,\"ingredients\":[{\"id\":2,\"count\":5},{\"id\":4,\"count\":5}]}]}', 'Nieznana 10', 1, 160.00, '2023-04-15 00:37:48', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `paymentMethods`
--

CREATE TABLE `paymentMethods` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `paymentMethods`
--

INSERT INTO `paymentMethods` (`id`, `name`) VALUES
(1, 'Karta Płatnicza'),
(2, 'BLIK'),
(3, 'Gotówka'),
(4, 'DotPay');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `shortDescription` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `shortDescription`, `image`) VALUES
(1, 'Peperoni', 'Pizza z peperoni to bardzo smaczny wybór na ciepłe wieczory', 37.00, 'Pizza z peperoni', 'img/products/peperoni.png'),
(2, 'Hawajska', 'Pizza z ananasem to bardzo smaczny wybór na ciepłe wieczory', 34.00, 'Pizza z ananasem', 'img/products/hawai.png'),
(3, 'Mięsna PRO', 'Pizza z mięsem to bardzo smaczny wybór na zimne wieczory', 52.00, 'Pizza z mięsem', 'img/products/meat.png'),
(4, 'Mięsna', 'Pizza z mięsem to bardzo smaczny wybór na zimne wieczory', 42.00, 'Pizza z mięsem', 'img/products/meat.png'),
(6, 'Margarita', 'Pizza z serem to bardzo smaczny wybór na zimne wieczory', 22.00, 'Pizza z serem', 'img/products/margharita.png'),
(7, 'Wiejska', 'Pizza z oliwkami to bardzo smaczny wybór na zimne wieczory', 45.50, 'Pizza wiejska', 'img/products/wiejska.png'),
(8, 'Capriciosa', 'Pizza z grzybami to bardzo smaczny wybór na ciepłe wieczory', 27.00, 'Pizza z grzybem', 'img/products/capriciosa.png'),
(9, 'Bazyliana', 'Pizza z bazylią to bardzo smaczny wybór na ciepłe wieczory', 52.00, 'Pizza z bazylią', 'img/products/bazyliana.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userId`, `review`) VALUES
(1, 1, 'Pizzeria z cudownym smakiem, obsługą i atmosferą! Wybór pizz imponujący, ciasto cienkie i chrupiące. Świeże składniki. '),
(2, 2, 'Pizzeria z doskonałymi pizzami i przyjazną obsługą! Świeże składniki, cienkie ciasto, niepowtarzalny smak. Polecam!'),
(3, 3, 'Niesamowite pizze, miła obsługa, świeże składniki. Polecam to miejsce!\r\n'),
(4, 4, 'Pyszne pizze, świetna atmosfera, profesjonalna obsługa. Idealne miejsce na spotkania z rodziną i przyjaciółmi. Gorąco polecam!'),
(5, 12, 'Pizza była przeciętna, obsługa nieco nieuprzejma, długi czas oczekiwania na zamówienie. Atmosfera nieco głośna. Nie do końca spełniło oczekiwania.');

-- --------------------------------------------------------

--
-- Table structure for table `specialOffers`
--

CREATE TABLE `specialOffers` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `promoCode` varchar(10) NOT NULL,
  `discount` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `isUsed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `specialOffers`
--

INSERT INTO `specialOffers` (`id`, `userId`, `promoCode`, `discount`, `image`, `isUsed`) VALUES
(1, 1, 'D234XS3', 0.2, 'img/specialOffers/promocja.png', 0),
(2, 1, 'A2454XS3', 0.3, 'img/specialOffers/promocja2.png', 0),
(3, 1, 'G23BA34L', 0.1, 'img/specialOffers/promocja3.png', 0);

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
(3, 'bw@example.net', '368522188', '1a1dc91c907325c69271ddf0c944bc72', 'Blanka', 'Wójcik', 'img/users/user3.png'),
(4, 'as@example.net', '132140954', '1a1dc91c907325c69271ddf0c944bc72', 'Andrzej', 'Szulc', 'img/users/user2.png'),
(12, 'an@example.com', '555123456', '1a1dc91c907325c69271ddf0c944bc72', 'Anna', 'Nowak', 'img/users/user4.png');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `paymentMethod` (`paymentMethod`);

--
-- Indexes for table `paymentMethods`
--
ALTER TABLE `paymentMethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `specialOffers`
--
ALTER TABLE `specialOffers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `paymentMethods`
--
ALTER TABLE `paymentMethods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specialOffers`
--
ALTER TABLE `specialOffers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `baskets_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`paymentMethod`) REFERENCES `paymentMethods` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `specialOffers`
--
ALTER TABLE `specialOffers`
  ADD CONSTRAINT `specialOffers_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
