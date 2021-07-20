-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 06:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `refcode` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `date` datetime DEFAULT NULL,
  `file` varchar(50) NOT NULL,
  `file_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `refcode`, `username`, `firstname`, `lastname`, `password`, `email`, `gender`, `profession`, `date`, `file`, `file_path`) VALUES
(1, 'nafi0186', 'nafi99', 'Nafi', 'Mahmud', '123', 'nafiaiubian17@gmail.com', 'Male', 'Doctor', '1999-09-15 00:00:00', 'Nafi Mahmud_Formal Photo.jpg', '../Received/Nafi Mahmud_Formal Photo.jpg'),
(2, '', 'jaman99', 'Jaman', 'Rahman', '1234', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-12-18 00:00:00', 'aiub_logo_92x92.png', '');

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
(3, 'shimanto99', 'Shimanto', 'Haque', '123456', 'nativetube71@gmail.com', 'Male', 'Doctor', '2020-11-02 00:00:00', 'aiub_logo_92x92.png'),
(4, 'robi99', 'Robi', 'Chowdhury', '12345', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-11-17 00:00:00', 'Screenshot (436).png'),
(5, 'raju99', 'Raju', 'Islam', '123', 'nativetube71@gmail.com', 'Male', 'Engineer', '2020-12-16 00:00:00', 'aiub_logo_92x92.png'),
(6, 'arif99', 'Arif', 'Rabbani', '1234', 'nafimahmud420@gmail.com', 'Male', 'Engineer', '2020-11-18 00:00:00', 'FileZilla_3.51.0_win64-setup.exe'),
(7, 'Siraj99', 'Siraj', 'Ahmed', '12', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-12-04 00:00:00', 'aiub_logo_92x92.png'),
(8, 'Rifat99', 'Rifat', 'Hossain', '12', 'uzugessy-7559@yopmail.com', 'Male', 'Engineer', '2020-12-06 00:00:00', 'aiub_logo_92x92.png'),
(9, 'Shihab99', 'Shihab', 'Shahariar', '12', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-11-29 00:00:00', 'Screenshot (484).png'),
(10, 'Chota99', 'Chota', 'Shakeel', '12345', 'uzugessy-7559@yopmail.com', 'Male', 'Engineer', '2021-01-05 00:00:00', 'Screenshot (508).png'),
(11, 'jaman99', 'Jaman', 'Mia', '12', 'uzugessy-7559@yopmail.com', 'Male', 'Engineer', '2020-12-04 00:00:00', 'W11_Lec13_JS_HTML_Operations.pdf'),
(12, 'Shimanto99', 'Shimanto', 'Das', '1234', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-12-03 00:00:00', 'Screenshot (508).png');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `post` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `date`, `post`) VALUES
(5, 'Nafi Mahmud, CEO', '2020-12-17', 'This website is under maintenance. So there might be seen some limitation. We are deeply sorry for that inconvenience. All rights reserved by Mahmud, Nafi (17-33793-1)'),
(8, 'Javed Rana, Chief Executive', '2020-12-28', 'There will be meeting at Friday. Everyone is requested to attend the meeting.');

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
(1, 'Apon Nibash', 'Dhanmondi', '700000', 'New', 'Brand new', '2020-11-30', 'Nafi Mahmud', 'readonly', '', '', NULL, '', '', NULL),
(2, 'Home Sweet Home', 'Dhanmondi', '700000', 'New', 'Brand new', '2020-12-03', 'Nafi Mahmud', 'Tarek', '', '', NULL, '', '', NULL),
(3, 'Moniko Tower', 'Agargaon,', '800000', 'New', '7 years old', '2020-11-12', 'Nafi Mahmud', 'Tarek', '', '', NULL, '', '', NULL),
(8, 'Rajuk Vobon', 'Dhanmondi', '13000000', 'New', 'Brand new', '2020-02-05', 'Tarek Uddin', 'Riaz Hossain', '', '', NULL, '', '', NULL),
(9, 'Darul Makam', 'Khilgaon', '800000', 'Old', '7 years old', '2020-11-29', 'Nafi Mahmud', 'Riaz Hossain', '690000', '650000', '2020-11-29', 'No', 'Yes', NULL),
(10, 'Mansion Rabbi', 'Agargaon', '13000000', 'New', 'Brand new', '2020-12-17', 'Nafi Mahmud', 'readonly', '', '', NULL, '', '', NULL),
(14, 'Shanti Niketon', 'Agargaon, Dhaka', '13000000', 'New', 'Brand new', '2020-12-23', 'Rafi Mahmud', '', '', '', NULL, '', '', NULL),
(15, 'LandMark Monsoon Blue', 'Banani,Dhaka', '10000000', 'New', 'well', '2020-12-16', 'Nafi Mahmud', 'Riaz', '9700000', '9600000', '2020-12-16', 'No', 'Yes', NULL),
(17, 'Miranda Tower', 'NewYork', '99500000', 'New', 'well decorated', '2020-12-10', 'John Cena', '', '', '', NULL, '', '', NULL),
(18, 'Suhashi', 'Dhanmondi', '10000000', 'New', 'Brand new', '2020-12-10', 'Tarek Uddin', '', '', '', NULL, '', '', NULL),
(19, 'Nafi Tower', 'Mirpur', '10000000', 'New', 'well decorated', '2020-12-16', 'Nafi Mahmud', '', '', '', NULL, '', '', NULL),
(31, 'Rakib Mansion', 'Dhanmondi', '10000000', 'New', 'Brand new', '2020-12-07', 'Rakib Chowdhury', '', '', '', NULL, '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
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
(1, 'nafi99', 'Nafi', 'Mahmud', '123', 'nafimahmud1999@gmail.com', 'Male', 'Engineer', '1999-09-15 00:00:00', 'aiub_logo_92x92.png'),
(2, 'rafi99', 'Rafi', 'Mahmud', '123', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-12-01 00:00:00', 'Screenshot (465).png'),
(3, 'safi99', 'Safi', 'Mahmud', '12345', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '1999-09-15 00:00:00', 'chrome_200_percent.pak'),
(15, 'jaman99', 'Jaman', 'Ahmed', '12345', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-11-17 00:17:29', 'app.ico'),
(16, 'jannat99', 'Jannat', 'Jubair', '12345', 'uzugessy-7559@yopmail.com', 'Female', 'Doctor', '2020-11-17 00:00:00', 'embed.txt'),
(17, 'rajib82', 'Rajib', 'Rahman', '12345', 'nativetube73@gmail.com', 'Male', 'Engineer', '2020-11-18 00:00:00', 'Screenshot (437).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbuy`
--
ALTER TABLE `userbuy`
  ADD UNIQUE KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userbuy`
--
ALTER TABLE `userbuy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
