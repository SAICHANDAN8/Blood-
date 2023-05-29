-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 08:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `name`, `email`, `blood_group`, `contact`, `address`) VALUES
(1, 'sai123444444444444444444444444444444', 'sai@gmail.com', 'A+', '333', 'gggg'),
(2, 'Maddi saichandan', 'sai@gmail.com', 'A-', 'sss', 'sss'),
(3, 'Maddi saichandan', 'sai@gmail.com', 'A-', 'sss', 'sss'),
(4, 'sao', 'sai@gmail.com', 'A-', '444', 'rrr');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `name`, `email`, `phone`, `blood_group`, `address`) VALUES
(1, 'sai', 'sai@gmail.com', 'B+', '84639', 'sssss'),
(2, 'M saichandan', 'sai@gmail.com', 'A+', '84639', 'ssss'),
(3, 'zz', 'sai@gamil.com', 'A+', 'zzzz', 'zzz'),
(4, 'zz', 'sai@gamil.com', 'A+', 'zzzz', 'zzz'),
(5, 's', 'sai@gamil.com', 'A+', '88333', '3333'),
(6, 'Maddi saichandan', 'sai@gamil.com', 'A-', '555', 'cccc'),
(7, 'sai', 'sai@gamil.com', '8463928916', 'A-', 'sss'),
(8, 'sai', 'sai@gamil.com', '8463928916', 'A-', 'sss'),
(9, 'sai123444444444444444444444444444444', 'sai@gamil.com', '8463928916', 'A-', 'sss'),
(10, 'sai123444444444444444444444444444444', 'sai@gamil.com', '8463928916', 'A-', 'sss'),
(11, 'sai123444444444444444444444444444444', 'sai@gamil.com', '8463928916', 'A-', 'sss'),
(12, 'sai123444444444444444444444444444444', 'sai@gamil.com', '8463928916', 'A-', 'sss'),
(13, 'sai123444444444444444444444444444444', 'sai@gamil.com', '8463928916', 'A-', 'sss'),
(14, 'sai123444444444444444444444444444444', 'sai@gamil.com', '8463928916', 'A+', 'zz'),
(15, 'sai123444444444444444444444444444444', 'sai@gmail.com', '8888', 'A-', 'sss'),
(16, 'zz', 'sai@gamil.com', '88333', 'A-', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `age`, `blood_group`, `contact`, `address`) VALUES
(1, 'Maddi saichandan', 'sai@gamil.com', 122, '[[', 'pp', 'pp'),
(2, 'Maddi saichandan', 'sai@gamil.com', 5, 'ss', '9988', 'ffff');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `email`, `blood_group`, `contact`, `address`) VALUES
(1, 'Maddi saichandan', 'sai@gmail.com', 'A+', '84555555', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `paitents`
--

CREATE TABLE `paitents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `diseases` varchar(50) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paitents`
--

INSERT INTO `paitents` (`id`, `name`, `email`, `age`, `blood_group`, `diseases`, `contact`, `address`) VALUES
(1, 'sai123444444444444444444444444444444', 'sai@gamil.com', 12, 'B-', 'Dengue', '888', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `email`, `blood_group`, `description`) VALUES
(1, 'sai', 'sai@gamil.com', 'A-', 'tttt');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `blood_group`, `address`) VALUES
(1, 'aa', 'aa', '11', 'a', 'aaa'),
(2, 'w', 'sai@gmail.com', '2', 'AB+', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'sai123456', '$2y$10$RrDlgJNLfSPdwndrIl6meeoFdkbXnHCpiZ9K8PF8MyIws3TTaBITq', '2023-05-28 12:28:48'),
(2, 'sai123456789', '$2y$10$nntIUSI7m9eY3rQ4AKZ1luewI9CWZ10bkpjq9tUtc1JTbQ4w.tf1O', '2023-05-28 12:37:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paitents`
--
ALTER TABLE `paitents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paitents`
--
ALTER TABLE `paitents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
