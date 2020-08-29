-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 07:09 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinity_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_infinity`
--

CREATE TABLE `db_infinity` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_infinity`
--

INSERT INTO `db_infinity` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Saad ', 'saadmansuri249@gmail.com', '6353121872'),
(2, 'Saad ', 'saad@gmail.com', '8733954598'),
(3, 'tirthjain', 'tirth886@gmail.com', '9090909090'),
(4, 'tirthjain', 'saadmansuri249@gmail.com', '6353121872'),
(5, 'Infinity Market', 'infinitymarket11@gmail.com', '1234567890'),
(6, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_infinity`
--
ALTER TABLE `db_infinity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_infinity`
--
ALTER TABLE `db_infinity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
