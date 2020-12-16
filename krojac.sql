-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 05:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krojac`
--
CREATE DATABASE IF NOT EXISTS `krojac` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `krojac`;

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `kategorijaID` int(11) NOT NULL,
  `nazivKategorije` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`kategorijaID`, `nazivKategorije`) VALUES
(1, 'Krojenje'),
(2, 'Sečenje'),
(3, 'Merenje'),
(4, 'Restauracija');

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `proizvodID` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cena` double NOT NULL,
  `kategorijaID` int(11) NOT NULL,
  `velicinaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`proizvodID`, `naziv`, `cena`, `kategorijaID`, `velicinaID`) VALUES
(1, 'Celo Odelo', 30000, 1, 1),
(2, 'Celo Odelo', 40000, 1, 2),
(3, 'Celo Odelo', 50000, 1, 3),
(4, 'Sako', 17000, 1, 1),
(5, 'Sako', 22000, 1, 2),
(6, 'Sako', 27000, 1, 3),
(7, 'Pantalone', 15000, 1, 1),
(8, 'Pantalone', 20000, 1, 2),
(9, 'Pantalone', 25000, 1, 3),
(10, 'Košulja', 10000, 1, 1),
(11, 'Košulja', 12000, 1, 2),
(12, 'Košulja', 14000, 1, 3),
(13, 'Celo Odelo', 20000, 2, 1),
(14, 'Celo Odelo', 30000, 2, 2),
(15, 'Celo Odelo', 40000, 2, 3),
(16, 'Sako', 12000, 2, 1),
(17, 'Sako', 17000, 2, 2),
(18, 'Sako', 22000, 2, 3),
(19, 'Pantalone', 10000, 2, 1),
(20, 'Pantalone', 15000, 4, 2),
(21, 'Pantalone', 20000, 2, 3),
(22, 'Celo Odelo', 3000, 3, 1),
(23, 'Celo Odelo', 3000, 3, 2),
(24, 'Celo Odelo', 3000, 3, 3),
(25, 'Sako', 2000, 3, 1),
(26, 'Sako', 3000, 3, 2),
(27, 'Sako', 3000, 3, 3),
(28, 'Pantalone', 3000, 3, 1),
(29, 'Pantalone', 3000, 3, 2),
(30, 'Pantalone', 3000, 3, 3),
(31, 'Celo Odelo', 10000, 4, 1),
(32, 'Celo Odelo', 15000, 4, 2),
(33, 'Celo Odelo', 20000, 4, 3),
(34, 'Sako', 7000, 4, 1),
(35, 'Sako', 10000, 4, 2),
(36, 'Sako', 13000, 4, 3),
(37, 'Pantalone', 9000, 4, 1),
(38, 'Pantalone', 12000, 4, 2),
(39, 'Pantalone', 15000, 4, 3),
(40, 'Košulja', 5000, 4, 1),
(41, 'Košulja', 7000, 4, 2),
(42, 'Košulja', 9000, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `velicina`
--

CREATE TABLE `velicina` (
  `velicinaID` int(11) NOT NULL,
  `nazivVelicine` varchar(255) COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `velicina`
--

INSERT INTO `velicina` (`velicinaID`, `nazivVelicine`) VALUES
(1, 'M'),
(2, 'L'),
(3, 'XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`kategorijaID`);

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`proizvodID`),
  ADD KEY `kategorijaID` (`kategorijaID`),
  ADD KEY `velicinaID` (`velicinaID`);

--
-- Indexes for table `velicina`
--
ALTER TABLE `velicina`
  ADD PRIMARY KEY (`velicinaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `kategorijaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `proizvodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `velicina`
--
ALTER TABLE `velicina`
  MODIFY `velicinaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD CONSTRAINT `proizvod_ibfk_1` FOREIGN KEY (`kategorijaID`) REFERENCES `kategorija` (`kategorijaID`),
  ADD CONSTRAINT `proizvod_ibfk_2` FOREIGN KEY (`velicinaID`) REFERENCES `velicina` (`velicinaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
