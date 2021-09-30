-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 05:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leafnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdb`
--

CREATE TABLE `contactdb` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(10) NOT NULL,
  `address` varchar(200) NOT NULL
  'Assistance' varchar(200)NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdb`
--

INSERT INTO `contactdb` (`name`, `email`, `number`, `address`,'Assistance') VALUES
('Anirudh', 'anirudhmys004@gmail.com', 7894561258, 'sjdsbfghdbfg','buy'),
('Tejas', 'smtejas@gmail.com', 4455887733, 'asdfghjklqwefghjklqwertyuio','sell');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdb`
--
ALTER TABLE `contactdb`
  ADD PRIMARY KEY (`name`,`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
