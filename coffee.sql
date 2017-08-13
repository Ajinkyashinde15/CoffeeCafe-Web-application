-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 05:01 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Administrator', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coffees`
--

CREATE TABLE `coffees` (
  `cid` int(11) NOT NULL,
  `cfname` varchar(110) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffees`
--

INSERT INTO `coffees` (`cid`, `cfname`, `size`, `price`) VALUES
(1, 'Aztec Coffee', 'Tall', 150),
(2, 'Aztec Coffee', 'Small', 90);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `coffeetype` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `size` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `odatetime` datetime NOT NULL,
  `deliveres` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `cname`, `coffeetype`, `quantity`, `size`, `address`, `price`, `odatetime`, `deliveres`) VALUES
(1, 'ajinkyas', 'Expresso', 5, 'Large', 'Ireland', 500, '2017-05-05 00:00:00', 'Delivered'),
(2, 'ajinkyas', 'Aztec Coffee', 1, 'Tall', 'ireland', 150, '2017-07-31 20:19:54', 'Not Delivered'),
(3, 'ajinkyas', 'Aztec Coffee', 12, 'Small', 'tfghbn', 1080, '2017-07-31 20:20:54', 'Not Delivered'),
(4, 'ajinkyas', 'Aztec Coffee', 12, 'Small', 'tfghbn', 1080, '2017-07-31 20:21:42', 'Not Delivered'),
(5, 'ajinkyas', 'Aztec Coffee', 10, 'Small', 'ghjb', 900, '2017-07-31 20:22:25', 'Not Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `phone`, `address`, `uname`, `password`) VALUES
('aparna', 'aparna@a.com', '9999999999', 'sedfghb', 'aparna', 'aparna'),
('tygh', 'aparna.janwalkar@gmail.com', '9874563210', 'yfhg', 'aparnah', '63a9f0ea7bb98050796b649e85481845'),
('Aparna Janwalkar', 'aparna.janwalkar@gmail.com', '9874563211', 'Ireland', 'aparnajan', '08ad1ee26eb720c77fb5470b77372f51'),
('ajinkya', 'abhijeet.janwalkar@gmail.com', '9874563211', 'serdfghb', 'ajinkya', 'FA3Hur01.0DCY'),
('aji', 'abhijeet.janwalkar@gmail.com', '9874563210', 'uygh', 'ajinkyas', 'myQcKj5fHrBFE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffees`
--
ALTER TABLE `coffees`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffees`
--
ALTER TABLE `coffees`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
