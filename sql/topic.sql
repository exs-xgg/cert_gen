-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 09:08 AM
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
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `topic_name` varchar(100) DEFAULT NULL,
  `mod_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `topic_name`, `mod_id`) VALUES
(9, 'User and Supervisory Accounts Management', 1),
(10, 'Patient Information Recording and Management', 1),
(11, 'Medical Consultation Recording and Management', 1),
(12, 'Laboratory and Diagnostics Service Management', 1),
(13, 'Philhealth Primary Care Benefit Patient Enlistment and Profiling', 1),
(14, 'Phillipine PEN Risk Assessment Management ', 1),
(15, 'Health Reports Generation and Data Analytics', 1),
(16, 'Dental Services and Management', 1),
(17, 'PhilHealth eClaims SubMission', 2),
(24, 'DOH\'s Child Care Program', 2),
(25, 'DOH\'s Family Planning Program', 2),
(26, 'DOH\'s National Tuberculosis Program', 2),
(27, 'DOH\'s Animal Bite Program', 2),
(28, 'DOH\'s Malaria Program', 2),
(29, 'DOH\'s Maternal Care Program', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
