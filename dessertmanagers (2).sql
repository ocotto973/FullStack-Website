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
-- Table structure for table `dessertmanagers`
--

CREATE TABLE `dessertmanagers` (
  `dessertManagerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dessertmanagers`
--

INSERT INTO `dessertmanagers` (`dessertManagerID`, `emailAddress`, `password`, `firstName`, `lastName`) VALUES
(1, 'johnsmith@gmail.com', '$2y$10$gcyH3Z56HkycnJke5fi0D.frV1eCaff0snd.Gl/V9zeguicz.oP5e', 'John', 'Smith'),
(2, 'janedoe@gmail.com', '$2y$10$lNorf1ovbvdIj43cF71DFOnK3Hd22mI8FbN6yW9KFQ1G3UW1ckbd6', 'Jane', 'Doe'),
(3, 'bobjones@gmail.com', '$2y$10$sElaIsQbThWfEyve1blENOmMR/7.Xo62uHY9VesbdqE.WahCcIScO', 'Bob', 'Jones');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
