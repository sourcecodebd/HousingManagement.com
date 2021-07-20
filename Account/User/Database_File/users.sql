-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 10:59 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `date` datetime DEFAULT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `gender`, `profession`, `date`, `file`) VALUES
(1, 'nafi99', 'Nafi', 'Mahmud', '1234', 'nafiaiubian17@gmail.com', 'Male', 'Engineer', '2020-02-02 00:00:00', 'aiub_logo_92x92.png'),
(2, 'rafi99', 'Rafi', 'Mahmud', '123', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-12-01 00:00:00', 'Screenshot (465).png'),
(3, 'safi99', 'Safi', 'Mahmud', '12345', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '1999-09-15 00:00:00', 'chrome_200_percent.pak'),
(4, 'Jaman99', 'Jaman', 'Islam', '123', 'nafimahmud420@gmail.com', 'Male', 'Engineer', '2020-11-29 00:00:00', 'Screenshot (484).png'),
(5, 'Jannat99', 'Jannat', 'Jubair', '12', 'uzugessy-7559@yopmail.com', 'Female', 'Doctor', '2020-12-02 00:00:00', 'Screenshot (485).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
