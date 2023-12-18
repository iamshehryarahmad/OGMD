-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 03:54 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinegmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `companyimage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `user_id`, `name`, `contact`, `address`, `companyimage`) VALUES
(26, 0, 'new', 'last', 'aokana', '../uploads/admin.png'),
(27, 0, 'asdf', 'asdf', 'adsf', '../uploads/brufen.webp'),
(28, 57, 'asdfa', 'adsf', 'asdf', '../uploads/brufen.webp'),
(29, 58, 'omer', 'ali', 'ali', '../uploads/brufen.webp');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `formula` varchar(300) NOT NULL,
  `disease` varchar(300) NOT NULL,
  `alternative` varchar(300) NOT NULL,
  `side_effects` varchar(300) NOT NULL,
  `usage_details` varchar(300) NOT NULL,
  `precautions` varchar(300) NOT NULL,
  `med_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_id`, `user_id`, `name`, `company_name`, `formula`, `disease`, `alternative`, `side_effects`, `usage_details`, `precautions`, `med_image`) VALUES
(18, 0, 'Omer Panadol', 'adfadf', 'adfadf', 'adfa', 'adf', 'adfadfsa', 'adfadf', 'adfaf', '../uploads/calpol.jpg'),
(20, 0, 'ali', 'adf', 'adf', 'adf', 'adf', 'adfe', 'rqwer', 'acvzcv', '../uploads/brufen.webp'),
(21, 0, 'panadol', 'asd', 'asd', 'asd', 'asd', '', '', '', '../uploads/brufen.webp'),
(23, 0, 'Ali', 'adf', 'adf', 'adf', 'adf', 'adf', 'adf', 'adffafad', '../uploads/brufen.webp'),
(24, 0, 'adfadf', 'adf', 'adf', '', 'adf', '', '', '', '../uploads/admin.png'),
(25, 0, 'af', 'g', 'h', '', 'h', '', '', '', '../uploads/DSC_0566.JPG'),
(26, 58, 'ali', 'asdf', 'asdf', '', 'adsf', '', '', '', '../uploads/calpol.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `userimage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `firstname`, `lastname`, `useremail`, `userpassword`, `gender`, `userimage`) VALUES
(35, '1', 'Asim', 'Alam', 'asim@gmail.com', 'asim', 'male', '../uploads/admin.png'),
(52, '2', 'Shehryar', 'Ahmad', 'shehryarahmad277@gmail.com', 'sheri123', 'male', '../uploads/sheri.jpg'),
(57, '1', 'Admin', 'Admin', 'admin@gmail.com', 'admin123', 'male', '../uploads/admin.png'),
(58, '2', 'asdf', 'asdf', 'ali@gmail.com', 'ali12345', 'male', '../uploads/admin.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
