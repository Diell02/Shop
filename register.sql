-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 04:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastN` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`id`, `name`, `lastN`, `address`, `email`, `message`) VALUES
('Glauk433', 'Glauk', 'Konjufca', 'Kalabria', 'glaukkonjuca@rks-gov.net', 'Faqe fantastike, suksese.'),
('Bill635', 'Bill', 'Gates', 'Karrshi Microsoft', 'billbill@hotmail.com', 'You rock!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastN` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `zipcode` int(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `passc` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastN`, `address`, `phone`, `username`, `email`, `zipcode`, `pass`, `passc`, `role`) VALUES
('diell584', 'Diell', 'Kepuska', 'Nena Tereze', 2147483647, 'diell', 'asdasds@gmail.com', 23123123, 'diell123', 'diell123', 'admin'),
('Albin822', 'Albin', 'Kurti', 'Mbreteresha Teuta', 2147483647, 'Albin', 'albinkurti@rks-gov.net', 10000, 'vetvendosje123', 'vetvendosje123', 'user'),
('asdasdasd360', 'Dion', 'Nura', 'Shefki Shasivari', 2147483647, 'Dion', 'dionnura@gmail.com', 13123123, 'dion123', 'dion123', 'admin'),
('RalphW939', 'Ralph', 'Watson', 'Red Lake 21', 134472881, 'RalphW', 'ralphwatson@gmail.com', 10000, 'ralph3443', 'ralph3443', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
