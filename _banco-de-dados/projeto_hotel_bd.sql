-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 03:45 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_hotel_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `email`, `senha`) VALUES
(3, 'mayolo.caue@gmail.com', '$2y$10$VDpOVdVkHLKHF.ihQ2GwQO.XYuY5Rln34nQ/kc/xCRjnGhpkvHa7e'),
(4, 'falcaocaue@gmail.com', '$2y$10$OXbazO7WJpDe1vu1Ln5dJ.ST8aC8ujQRyv85c4ETVAH8ynl1ckSVS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
