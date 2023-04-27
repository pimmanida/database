-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2023 at 06:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_application_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(32, 'Pancake', 100, 'pancake.png', 4),
(33, 'Cheese Burger', 100, 'burger.png', 5),
(34, 'Pad Kaprao', 80, 'kaprao.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `code` text NOT NULL,
  `imgindex` text CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `name`, `code`, `imgindex`, `price`, `type`) VALUES
(1, 'Salad', '01', 'salad.png', 100, 'vegetarian'),
(2, 'Pizza', '02', 'pizza.png', 100, 'italian'),
(3, 'Cheese Burger', '03', 'burger.png', 100, 'fastfood'),
(4, 'Pad Kaprao', '04', 'kaprao.png', 100, 'thai'),
(5, 'Pancake', '05', 'pancake.png', 100, 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'kgje', '6', 'pfjrjkpe@gmail.com', 'cash on delivery', 'pore', 'fkwmfe', 'l;gjfw', 'wgelrj', 'wfelkfmjwp', '10160', 'Salad (4) , Cheese Burger (3) , Pizza (1) , Pad Kaprao (1) ', '1280'),
(2, 'kgje', '6', 'pfjrjkpe@gmail.com', 'cash on delivery', 'pore', 'fkwmfe', 'l;gjfw', 'wgelrj', 'wfelkfmjwp', '10160', 'Salad (4) , Cheese Burger (3) , Pizza (1) , Pad Kaprao (1) ', '1280'),
(3, 'kgje', '857', 'ffl@gmail.com', 'cash on delivery', 'em', 'lfwikf', 'game', 'owpfk', 'qkdm', 'rorow', 'Salad (5) ', '625'),
(4, 'ti4jt', '48049', 'itij@gmail.com', 'cash on delivery', 'fewji', 'fowefj', 'idjqejdo', 'fef', '39393ndkg', '3932', 'Salad (5) , Pizza (1) , Cheese Burger (1) , Pad Kaprao (1) ', '1105'),
(5, 'kgje', '493', 'pimmanida@hotmail.com', 'cash on delivery', 'pore', 'ewlfijwoifwoe[flw', 'pr', 'ro', 'r3p', '32p[', 'Salad (5) , Pizza (3) , Pad Kaprao (3) , Cheese Burger (4) ', '2215'),
(6, 'fe', '234567', 'pim@gmail.com', 'cash on delivery', 'qew', 'awsd', 'asdf', 'sdfg', 'dfg', 'dog', 'Salad (5) , Pizza (3) , Pad Kaprao (3) , Cheese Burger (4) ', '2215'),
(7, 'camel', '00000', 'camel@gmail.com', 'cash on delivery', '5', 'caramel st.', 'caramel', 'bangkok', 'Thailand', '00000', 'Salad (5) , Pizza (3) , Pad Kaprao (3) , Cheese Burger (4) ', '2215'),
(8, 'l;m', '98', 'p@gmail.com', 'cash on delivery', 'jkl', 'hiu', 'ij', 'uh', 'iuh', 'join', 'Salad (7) , Pizza (3) , Pad Kaprao (3) , Cheese Burger (4) ', '2465'),
(9, 'pp', '456', 'o@gmail.com', 'cash on delivery', 'dfgbh', 'dfghb', 'dfgh', 'fg', 'edfgb ', 'fog', 'Salad (7) , Pizza (4) , Pad Kaprao (3) , Cheese Burger (4) , Pancake (1) ', '1816'),
(10, 'caramel', '36457', 'pim@gmail.com', 'cash on delivery', '900', 'caramel', 'caramel', 'bangkok', 'thailand', '10160', 'Salad (6) , Pad Kaprao (1) , Pancake (1) ', '930'),
(11, 'pim', '0925695592', 'p@gmail.com', 'cash on delivery', '19', 'phetkasem', 'bangkok', 'bangkok', 'thailand', '10160', 'Pizza (3) , Cheese Burger (1) ', '900'),
(12, 'pim', '0000', 'pim@gmail.com', 'cash on delivery', 'dld34', 'dk', 'dk', 'dkd', 'dk', '12345', 'Pancake (4) , Cheese Burger (5) , Pad Kaprao (1) ', '980');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(6) UNSIGNED NOT NULL,
  `customer` varchar(30) NOT NULL,
  `table_number` int(2) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `date_of_reservation` date NOT NULL,
  `time_of_reservation` time NOT NULL,
  `booked_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `customer`, `table_number`, `phone_number`, `date_of_reservation`, `time_of_reservation`, `booked_at`) VALUES
(1, 'dddkkd', 1, '27272', '2023-04-27', '00:00:00', '2023-04-14 10:06:11'),
(2, 'togog', 1, '38484', '2023-04-20', '00:00:00', '2023-04-14 10:06:29'),
(3, 'kjkjkj', 2, '878787', '2023-04-12', '00:00:00', '2023-04-14 10:07:49'),
(4, 'lll', 3, '39393', '2023-04-28', '05:07:00', '2023-04-26 04:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `fullname`, `username`, `useremail`, `password`, `regdate`) VALUES
(1, 'Manida', 'Bhonsawanwong', 'ppimmanidaa@gmail.com', 'a0f867d3fbbd27faca2c24e6b39b60cf', '2023-04-11 08:29:41'),
(2, 'manida', 'pim', 'ppimmanidaa@gmail.com', 'a0f867d3fbbd27faca2c24e6b39b60cf', '2023-04-17 17:33:59'),
(3, 'Pkease', 'elek', 'skskks@gmail.com', '7b7a53e239400a13bd6be6c91c4f6c4e', '2023-04-18 07:02:27'),
(4, 'Maniz', 'pf', 'ppim@gmail.com', 'a0f867d3fbbd27faca2c24e6b39b60cf', '2023-04-26 04:15:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`),
  ADD UNIQUE KEY `code` (`code`) USING HASH;

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
