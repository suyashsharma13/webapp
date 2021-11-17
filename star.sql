-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 28, 2021 at 12:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `star`
--

CREATE TABLE `star` (
  `stock_code` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `rating` bigint(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `star`
--

INSERT INTO `star` (`stock_code`, `product_name`, `rating`, `description`) VALUES
(21212, 'Pack Of 72 Retrospot Cake Cases', 5, 'Good Quality Of Paper.'),
(22197, 'Popcorn Holder', 3, 'Good Product.'),
(23166, 'Medium Ceramic Top Storage Jar', 4, 'Very Satisfied , Very Nice.'),
(23843, 'Paper Craft Little Birdie', 5, 'Loved This Product'),
(84077, 'World War 2 Gliders Asstd Designs', 5, 'Loved This Product , Very Good Product.'),
(84879, 'Assorted Color Bird Ornament', 3, 'Average Quality . '),
(850998, 'Jumbo Bag Red Retrospot', 3, 'May Recommend This product to others .'),
(851234, 'White Hanging Heart T-Light Holder', 5, 'Very Pleasing , good for decoration.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`stock_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `star`
--
ALTER TABLE `star`
  MODIFY `stock_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=851235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
