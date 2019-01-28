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
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `fac_name` varchar(100) NOT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `fac_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL,
  `cert_no` varchar(100) DEFAULT NULL,
  `yr` int(2) NOT NULL,
  `hrs` int(11) NOT NULL,
  `type_of_cert` varchar(15) NOT NULL,
  `topic` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `fname`, `mname`, `lname`, `title`, `suffix`, `fac_name`, `designation`, `fac_id`, `train_id`, `cert_no`, `yr`, `hrs`, `type_of_cert`, `topic`) VALUES
(1, 'John', '', 'Doe', 'Mr.', ' ', 'Pagudpod', 'Dentist', 194, 2, '19-194-001E', 19, 14, 'Excellence', 'PhilHealth eClaims SubMission<br>DOH\'s Child Care Program<br>DOH\'s Family Planning Program<br>DOH\'s National Tuberculosis Program<br>DOH\'s Animal Bite Program<br>DOH\'s Malaria Program<br>DOH\'s Maternal Care Program'),
(2, 'S', 'D.', 'S', '', '  ', 'Pagudpod', 'Medical Technologist', 194, 2, '19-194-002C', 19, 8, 'Completion', 'PhilHealth eClaims SubMission<br>DOH\'s Child Care Program<br>DOH\'s Family Planning Program<br>DOH\'s National Tuberculosis Program<br>DOH\'s Animal Bite Program<br>DOH\'s Malaria Program<br>DOH\'s Maternal Care Program'),
(3, 'A', 'A.', 'A', '', '', 'Pagudpod', 'Lab Aide', 194, 2, '19-194-003E', 19, 8, 'Excellence', 'PhilHealth eClaims SubMission<br>DOH\'s Child Care Program<br>DOH\'s Family Planning Program<br>DOH\'s National Tuberculosis Program<br>DOH\'s Animal Bite Program<br>DOH\'s Malaria Program<br>DOH\'s Maternal Care Program'),
(4, 'S', 'S.', 'S', '', '', 'Pagudpod', 'Lab Aide', 194, 2, '19-194-004P', 19, 9, 'Participation', 'PhilHealth eClaims SubMission<br>DOH\'s Child Care Program<br>DOH\'s Family Planning Program<br>DOH\'s National Tuberculosis Program<br>DOH\'s Animal Bite Program<br>DOH\'s Malaria Program<br>DOH\'s Maternal Care Program');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
