-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 05:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital_info`
--

CREATE TABLE `hospital_info` (
  `id` int(255) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_address` varchar(255) NOT NULL,
  `ph1` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Crt_tbed` int(255) NOT NULL,
  `Crt_ocbed` int(255) NOT NULL,
  `Crt_avlbed` int(255) NOT NULL,
  `Crt_to2` int(100) NOT NULL,
  `Crt_oco2` int(255) NOT NULL,
  `Crt_avlo2` int(255) NOT NULL,
  `username` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_info`
--

INSERT INTO `hospital_info` (`id`, `h_name`, `h_address`, `ph1`, `email`, `Crt_tbed`, `Crt_ocbed`, `Crt_avlbed`, `Crt_to2`, `Crt_oco2`, `Crt_avlo2`, `username`, `password`, `password_2`) VALUES
(2, 'lora hospital', 'BAZARPARA ROAD', 3256262, 'admin@gmail.com', 245, 22, 223, 155, 15, 140, 123, '123', ''),
(3, 'habibpur govt hospital', 'NATHPARA, DIST. NADIA', 27272727, 'admin44@gmail.com', 142, 15, 127, 51, 15, 36, 0, 'test', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital_info`
--
ALTER TABLE `hospital_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital_info`
--
ALTER TABLE `hospital_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
