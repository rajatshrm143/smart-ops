-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 05:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`id`, `cat_name`, `status`) VALUES
(1, 'Software', 1),
(2, 'Hardware', 1),
(3, 'Operations', 1),
(4, 'Accounts', 1),
(5, 'Sales', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `id` int(11) NOT NULL,
  `coun_name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`id`, `coun_name`, `status`) VALUES
(1, 'India', 1),
(2, 'Australia', 1),
(3, 'Russia', 1),
(4, 'UK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supl_name` varchar(250) NOT NULL,
  `coun_id` int(11) NOT NULL DEFAULT 0,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active, 0 = inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supl_name`, `coun_id`, `cat_id`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Rajat', 3, 3, '2020-11-26 15:26:02', '2020-11-26 15:26:02', 0),
(2, 'sdvds', 3, 2, '2020-11-26 15:26:49', '2020-11-26 15:26:49', 0),
(3, 'Rajat', 3, 3, '2020-11-26 15:28:33', '2020-11-26 15:28:33', 0),
(4, 'Farman', 4, 2, '2020-11-26 15:30:08', '2020-11-26 15:30:08', 0),
(5, 'sddfvsf', 2, 3, '2020-11-26 15:31:24', '2020-11-26 15:31:24', 0),
(6, 'dfbgrb', 3, 2, '2020-11-26 15:32:12', '2020-11-26 15:32:12', 0),
(7, 'Tejas Kumar', 2, 4, '2020-11-26 16:05:35', '2020-11-26 16:05:35', 1),
(8, 'Jyotsana', 4, 1, '2020-11-26 16:06:21', '2020-11-26 16:06:21', 1),
(9, 'Viru', 2, 4, '2020-11-26 16:06:30', '2020-11-26 16:06:30', 0),
(10, 'Lalit', 3, 4, '2020-11-26 16:06:47', '2020-11-26 16:06:47', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
