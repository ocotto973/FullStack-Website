-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 04:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dessert_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `dessertID` int(11) NOT NULL,
  `dessertCategoryID` int(11) NOT NULL,
  `dessertCode` varchar(10) NOT NULL,
  `dessertName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`dessertID`, `dessertCategoryID`, `dessertCode`, `dessertName`, `description`, `price`, `dateAdded`) VALUES
(1, 1, 'RVC', 'Red Velvet Cake', 'Delicious red velvet with cream cheese frosting.', '30.00', '2023-03-01 18:48:07'),
(2, 2, 'MCIC', 'Mint Chocolate Chip Ice Cream', ' Mint ice cream with chocolate chips spread across.', '5.00', '2023-03-01 18:50:01'),
(3, 3, 'CCP', 'Coconut Custard Pie', 'Fresh out of the oven Coconut custard Pie.', '10.00', '2023-03-01 18:51:44'),
(7, 1, 'TLC', 'Tres Leches Cake', 'A delicious three milk sponge cake.', '30.00', '2023-03-20 12:46:08'),
(9, 2, 'VAN', 'Vanilla Ice Cream', 'Classic Vanilla Ice Cream.', '5.00', '2023-03-20 12:48:25'),
(11, 3, 'APP', 'Apple Pie', 'Classic Apple Pie', '10.00', '2023-03-24 10:07:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`dessertID`),
  ADD UNIQUE KEY `dessertCode` (`dessertCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `dessertID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
