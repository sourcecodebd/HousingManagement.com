-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 07:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housingmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `userbuy`
--

CREATE TABLE `userbuy` (
  `id` int(11) NOT NULL,
  `flatname` varchar(50) NOT NULL,
  `flataddress` varchar(500) NOT NULL,
  `price` varchar(255) NOT NULL,
  `flatstatus` varchar(50) NOT NULL,
  `aboutflat` varchar(500) NOT NULL,
  `dateoflaunching` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `bargainbyowner` varchar(50) NOT NULL,
  `bargainbyuser` varchar(50) NOT NULL,
  `dateofbargaining` date DEFAULT NULL,
  `agreementbyowner` varchar(50) NOT NULL,
  `agreementbyuser` varchar(50) NOT NULL,
  `dateofbuying` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userbuy`
--

INSERT INTO `userbuy` (`id`, `flatname`, `flataddress`, `price`, `flatstatus`, `aboutflat`, `dateoflaunching`, `owner`, `buyer`, `bargainbyowner`, `bargainbyuser`, `dateofbargaining`, `agreementbyowner`, `agreementbyuser`, `dateofbuying`) VALUES
(1, 'Apon Nibash', 'Dhanmondi', '700000', 'New', 'Brand new', '2020-11-30', 'Rafi Mahmud', 'readonly', '', '', NULL, '', '', NULL),
(2, 'Home Sweet Home', 'Dhanmondi', '700000', 'New', 'Brand new', '2020-12-03', 'Nafi Mahmud', 'Tarek', '', '', NULL, '', '', NULL),
(3, 'Moniko Tower', 'Agargaon, Dhaka', '800000', 'Old', '7 years old', '2020-11-30', 'Tarek Uddin', 'John', '', '', NULL, '', '', NULL),
(8, 'Rajuk Vobon', 'Dhanmondi', '13000000', 'New', 'Brand new', '2020-02-05', 'Tarek Uddin', 'Riaz Hossain', '', '', NULL, '', '', NULL),
(9, 'Darul Makam', 'Khilgaon', '800000', 'New', '7', '2020-11-29', 'Nafi Mahmud', 'Riaz', '690000', '650000', '2020-11-29', 'No', 'Yes', NULL),
(10, 'Mansion Rabbi', 'Agargaon', '13000000', 'New', 'Brand new', '2020-12-17', 'Nafi Mahmud', 'readonly', '', '', NULL, '', '', NULL),
(14, 'Shanti Niketon', 'Agargaon, Dhaka', '13000000', 'New', 'Brand new', '2020-12-23', 'Rafi Mahmud', '', '', '', NULL, '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userbuy`
--
ALTER TABLE `userbuy`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userbuy`
--
ALTER TABLE `userbuy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
