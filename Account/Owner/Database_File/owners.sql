-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 11:00 AM
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
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
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
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `gender`, `profession`, `date`, `file`) VALUES
(1, 'jafor99', 'Jafor', 'Sadek', '1234', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-11-10 00:00:00', 'keymaker.exe'),
(2, 'babu99', 'Babu', 'Sarder', '12345', 'nativetube71@gmail.com ', 'Male', 'Doctor', '2020-11-10 00:00:00', 'embed.txt'),
(3, 'shimanto99', 'Shimanto', 'Das', '12', 'nativetube71@gmail.com', 'Male', 'Doctor', '2020-11-10 00:00:00', 'app.ico'),
(4, 'robi99', 'Robi', 'Chowdhury', '12345', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-11-17 00:00:00', 'Screenshot (436).png'),
(5, 'raju99', 'Raju', 'Islam', '12', 'uzugessy-7559@yopmail.com', 'Male', 'Engineer', '2020-11-02 00:00:00', 'chrome_100_percent.pak'),
(6, 'arif99', 'Arif', 'Rabbani', '1234', 'nafimahmud420@gmail.com', 'Male', 'Engineer', '2020-11-18 00:00:00', 'FileZilla_3.51.0_win64-setup.exe'),
(7, 'Siraj99', 'Siraj', 'Ahmed', '12', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-12-04 00:00:00', 'aiub_logo_92x92.png'),
(8, 'Rifat99', 'Rifat', 'Hossain', '12', 'uzugessy-7559@yopmail.com', 'Male', 'Engineer', '2020-12-06 00:00:00', 'aiub_logo_92x92.png'),
(9, 'Shihab99', 'Shihab', 'Shahariar', '12', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-11-29 00:00:00', 'Screenshot (484).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
