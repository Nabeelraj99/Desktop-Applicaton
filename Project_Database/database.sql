-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 04:51 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receptionist`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_med`
--

CREATE TABLE `add_med` (
  `id` int(11) NOT NULL,
  `med_name` varchar(50) NOT NULL,
  `med_nature` varchar(50) NOT NULL,
  `med_grade` varchar(50) NOT NULL,
  `med_symp` varchar(200) NOT NULL,
  `med_desc` varchar(500) NOT NULL,
  `med_loc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_med`
--

INSERT INTO `add_med` (`id`, `med_name`, `med_nature`, `med_grade`, `med_symp`, `med_desc`, `med_loc`) VALUES
(1, 'astic', 'Cold', 'First', ' pain and swolling', 'it could minimize your pain', 'cabin 2 row 3'),
(3, 'beculoin', 'Warm', 'Second', 'eye pain', 'very pain full', '343wdfsfcsdcx');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`) VALUES
(15, 'adeel', 'adeel123');

-- --------------------------------------------------------

--
-- Table structure for table `login_doc`
--

CREATE TABLE `login_doc` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_doc`
--

INSERT INTO `login_doc` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE `patient_record` (
  `id` int(11) NOT NULL,
  `p_id` varchar(30) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `weight` int(50) NOT NULL,
  `number` int(15) NOT NULL,
  `date` date NOT NULL,
  `p_fee` int(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `symp` varchar(100) NOT NULL,
  `presc` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_record`
--

INSERT INTO `patient_record` (`id`, `p_id`, `p_name`, `age`, `weight`, `number`, `date`, `p_fee`, `dob`, `gender`, `address`, `symp`, `presc`, `status`) VALUES
(20, '2021-hp-03', 'Nabeel raj', '34', 54, 7878787, '2021-06-08', 43, '2021-06-16', 'Male', 'erjejrhej', 'head pain', 'Acetic Acid', 'Checked'),
(21, '2021-hp-01', 'adeel', '22', 44, 2147483647, '2021-06-09', 1000, '2021-06-17', 'Male', '204 c block gm abad fsd', 'sscs', 'sfsf', 'Checked'),
(22, '2021-hp-02', 'Nabeel raj', '22', 60, 320228456, '2021-06-21', 1000, '2021-06-19', 'Male', 'asfasfsdfdsfdgfdgd', '', '', 'unchecked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_med`
--
ALTER TABLE `add_med`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_doc`
--
ALTER TABLE `login_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_med`
--
ALTER TABLE `add_med`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login_doc`
--
ALTER TABLE `login_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_record`
--
ALTER TABLE `patient_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
