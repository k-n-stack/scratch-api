-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2021 at 08:46 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `image_url` varchar(512) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image_url`, `price`) VALUES
(1, 'salade', 'http://blabla.com', 1.4),
(2, 'salade', 'http://blabla.com', 1.4),
(3, 'salade', 'http://blabla.com', 1.4),
(4, 'salade', 'http://blabla.com', 1.4),
(5, 'tropmegalol', 'http://amazon.com', 199.4),
(6, 'salade', 'http://blabla.com', 1.4),
(7, 'salade', 'http://blabla.com', 1.4),
(8, 'salade', 'http://blabla.com', 1.4),
(9, 'salade', 'http://blabla.com', 1.4),
(10, 'salade', 'http://blabla.com', 1.4),
(11, 'salade', 'http://blabla.com', 1.4),
(12, 'salade', 'http://blabla.com', 1.4),
(13, 'pogg', 'http://blabla.com', 1.4),
(14, 'pogg', 'http://blabla.com', 1.4),
(15, 'pogg', 'http://blabla.com', 1.4),
(16, 'pogg', 'http://google.com', 1.4),
(17, 'megalol', 'http://kekland.com', 1.4),
(18, 'megalol', 'http://kekland.com', 1.4);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_list`
--

CREATE TABLE `shopping_list` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `id_user` mediumint(8) UNSIGNED NOT NULL,
  `id_shopping_list_element` mediumint(8) UNSIGNED NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_archived` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping_list`
--

INSERT INTO `shopping_list` (`id`, `id_user`, `id_shopping_list_element`, `date`, `is_archived`) VALUES
(1, 1, 1, '2021-09-10 08:01:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_list_element`
--

CREATE TABLE `shopping_list_element` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `id_shopping_list` mediumint(8) UNSIGNED NOT NULL,
  `id_product` mediumint(8) UNSIGNED NOT NULL,
  `quantity` smallint(5) UNSIGNED NOT NULL,
  `temp_name` varchar(64) NOT NULL,
  `temp_description` varchar(1024) NOT NULL,
  `is_checked` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping_list_element`
--

INSERT INTO `shopping_list_element` (`id`, `id_shopping_list`, `id_product`, `quantity`, `temp_name`, `temp_description`, `is_checked`) VALUES
(1, 1, 1, 25, 'megalol', 'kekland', 1),
(2, 1, 1, 5, 'megalol', 'troplolololololo', 0),
(3, 1, 1, 5, 'test', 'mega description c\'est trop lol', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'francis', 'lalane', 'f.lalane@gmail.com', 'shittymdp'),
(2, 'Omegalul', 'kekland', 'kekomegalul@yahoo.fr', 'shittyMDP'),
(3, 'gandalf', 'legris', 'g.legris@gmail.com', 'shittypass'),
(4, 'gandalf', 'lenoir', 'G.lebanc@gmail.com', 'shittypass'),
(5, 'thomas', 'wow', 'thomas@gmail.com', 'shittypass'),
(6, 'frodon', 'lehobbit', 'frodonlehobit@gmail.com', 'shittypass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_list`
--
ALTER TABLE `shopping_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_list_element`
--
ALTER TABLE `shopping_list_element`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shopping_list`
--
ALTER TABLE `shopping_list`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shopping_list_element`
--
ALTER TABLE `shopping_list_element`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
