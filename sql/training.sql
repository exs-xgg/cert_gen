-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 01:54 PM
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
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `train_name` varchar(250) NOT NULL,
  `fac_name` varchar(100) NOT NULL,
  `module_type` varchar(11) DEFAULT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `date_started` date DEFAULT NULL,
  `date_ended` date DEFAULT NULL,
  `topic_name` varchar(800) NOT NULL,
  `facility_id` varchar(5) NOT NULL,
  `lgu_assigntory` varchar(100) NOT NULL,
  `date_awarded` varchar(20) NOT NULL,
  `venue_awarded` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `train_name`, `fac_name`, `module_type`, `venue`, `date_started`, `date_ended`, `topic_name`, `facility_id`, `lgu_assigntory`, `date_awarded`, `venue_awarded`) VALUES
(2, ' Pagudpod Training', 'Pagudpod', '2 ', 'Pagudpod Event Center', '2019-01-09', '2019-01-09', 'PhilHealth eClaims SubMission<br>DOH\'s Child Care Program<br>DOH\'s Family Planning Program<br>DOH\'s National Tuberculosis Program<br>DOH\'s Animal Bite Program<br>DOH\'s Malaria Program<br>DOH\'s Maternal Care Program', '194', 'Hon. Edgardo Dimagiba', '2019-01-09', 'Pagudpod Event Center');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
