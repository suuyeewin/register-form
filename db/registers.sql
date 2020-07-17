-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 01:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registers`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(2, 'suu', '123456'),
(3, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `township` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `DeliveryStatus` varchar(15) NOT NULL DEFAULT 'Undelivery'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `email`, `township`, `address`, `created`, `DeliveryStatus`) VALUES
(1, 'suu yeewin ', '09456101020', 'suuyeewin.sss@gmail.com', 'Pyinmana', 'No. 6 Road ,Pyinmana', '0000-00-00 00:00:00', 'delivery'),
(2, 'ei ei', '09964961020', 'suuyeewin.sss@gmail.com', 'Pyinmana', 'No.7,Pyinmana', '0000-00-00 00:00:00', 'delivery'),
(10, 'bo paing', '09451274584', 'bopaing@gmail.com', 'Yanogn', 'NO.14, Rose road', '2020-05-21 06:01:40', 'delivery'),
(11, 'moe', '095846621414', 'moe@gmail.com', 'dfsffdf', 'fdfdfdf', '2020-05-24 20:52:22', 'delivery'),
(12, 'moehay', '09578885210', 'moe@gmail.com', 'dfdfdfd', 'fdfdfd', '2020-05-26 14:04:30', 'delivery'),
(13, 'eefdf', '09545621147', 'moe@gmail.com', 'dfdfdfd', 'fdfdfd', '2020-05-26 14:08:08', 'delivery'),
(14, 'kopaing', '01245011000', 'kopaing@gmil.com', 'Yangon', 'Insein,yangon', '2020-05-26 14:45:27', 'delivery'),
(15, 'fdfdf', '096547788', 'dfdfd', 'dfdf', 'dfdf', '2020-05-26 14:55:17', 'delivery'),
(16, 'wint', '095547778', 'dfdf', 'dfdfd', 'dfdfd', '2020-05-26 15:31:22', 'delivery'),
(17, 'dfdfd', '09f8d844', 'dfdf', 'dfdfdf', 'dfdf', '2020-05-26 15:42:59', 'Undelivery'),
(18, 'fdsf', '16165415', 'fdf', 'fsdf', 'dsfds', '2020-05-26 16:01:33', 'Undelivery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
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
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
