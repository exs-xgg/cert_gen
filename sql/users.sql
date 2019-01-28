-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 02:25 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cert_gen`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `is_admin` varchar(1) DEFAULT NULL,
  `is_active` varchar(1) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `mname`, `lname`, `is_admin`, `is_active`, `date_created`) VALUES
(25, 'lilbags', '81dc9bdb52d04dc20036dbd8313ed055', 'kingd', '', 'bagsic', 'y', 'y', '2018-11-24 16:49:20'),
(28, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'a', 'admin', 'y', 'y', '2018-12-04 08:11:04'),
(33, 'users', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', '', 'user', '', 'y', '2018-12-06 01:22:55'),
(34, 'kingdrel', 'b26986ceee60f744534aaab928cc12df', 'darrel', 't', 'bagsic', 'y', 'y', '2018-12-13 03:24:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
