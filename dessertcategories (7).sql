-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 04:38 AM
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
-- Table structure for table `dessertcategories`
--

CREATE TABLE `dessertcategories` (
  `dessertCategoryID` int(11) NOT NULL,
  `dessertCategoryName` varchar(255) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dessertcategories`
--

INSERT INTO `dessertcategories` (`dessertCategoryID`, `dessertCategoryName`, `dateAdded`) VALUES
(1, 'CAKE', '2023-03-01 18:36:48'),
(2, 'ICE CREAM', '2023-03-01 18:38:37'),
(3, 'PIE', '2023-03-01 18:39:16'),
(4, 'CREPE', '2023-03-01 18:39:34'),
(5, 'COOKIES', '2023-03-01 18:39:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dessertcategories`
--
ALTER TABLE `dessertcategories`
  ADD PRIMARY KEY (`dessertCategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dessertcategories`
--
ALTER TABLE `dessertcategories`
  MODIFY `dessertCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
