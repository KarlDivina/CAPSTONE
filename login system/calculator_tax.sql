-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 09:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calculator_tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagibig_variables`
--

CREATE TABLE `pagibig_variables` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pagibig_variables`
--

INSERT INTO `pagibig_variables` (`id`, `name`, `value`) VALUES
(1, 'FLOOR', 1500),
(2, 'CEILING', 5000),
(3, 'RATE_MIN', 0.01),
(4, 'RATE_MAX', 0.02);

-- --------------------------------------------------------

--
-- Table structure for table `philhealth_variables`
--

CREATE TABLE `philhealth_variables` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `philhealth_variables`
--

INSERT INTO `philhealth_variables` (`id`, `name`, `value`) VALUES
(1, 'FLOOR', 10000),
(2, 'CEILING', 80000),
(3, 'RATE', 0.04);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `name`, `value`) VALUES
(1, 'CGT', 0.06),
(2, 'VAT', 0.12),
(3, 'VAT_GROSS', 1.12);

-- --------------------------------------------------------

--
-- Table structure for table `sss_variables`
--

CREATE TABLE `sss_variables` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss_variables`
--

INSERT INTO `sss_variables` (`id`, `name`, `value`) VALUES
(1, 'FLOOR', 4249.99),
(2, 'CEILING', 4750),
(3, 'REGULAR_MIN', 180),
(4, 'REGULAR_MAX', 900),
(5, 'REGULAR_CUTOFF', 19750),
(6, 'MPF_MIN', 22.5),
(7, 'MPF_MAX', 450),
(8, 'MPF_CUTOFF', 29750),
(9, 'RANGE', 500),
(10, 'INCREASE', 22.5);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Karl Divina', 'karl@mail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'Kyle Sison', 'kyle@mail.com', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagibig_variables`
--
ALTER TABLE `pagibig_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `philhealth_variables`
--
ALTER TABLE `philhealth_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_variables`
--
ALTER TABLE `sss_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagibig_variables`
--
ALTER TABLE `pagibig_variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `philhealth_variables`
--
ALTER TABLE `philhealth_variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sss_variables`
--
ALTER TABLE `sss_variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
