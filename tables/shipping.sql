-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 11:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `havana`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `SHIPPING_ID` int(5) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `ADDRESS` text NOT NULL,
  `POSTCODE` int(6) NOT NULL,
  `MOBILE` int(8) NOT NULL,
  `DELIVERY` varchar(8) NOT NULL,
  `CARD_NO` int(16) NOT NULL,
  `CARD_NAME` varchar(20) NOT NULL,
  `EXPIRY` varchar(7) NOT NULL,
  `CCV` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`SHIPPING_ID`, `NAME`, `ADDRESS`, `POSTCODE`, `MOBILE`, `DELIVERY`, `CARD_NO`, `CARD_NAME`, `EXPIRY`, `CCV`) VALUES
(1, 'Syarifah', 'Blk 103C Edgefield Plains', 823103, 91831130, 'Standard', 2147483647, 'Nur Syarifah', '12', 432),
(2, 'James', 'Blk 419A Hougang Street', 653432, 95634342, 'Express', 2147483647, 'James', '12', 134),
(3, 'James', 'Blk 419A Hougang Street', 653432, 95634342, 'Express', 2147483647, 'James', '12', 134),
(4, 'Allie', 'Punggol Road', 317899, 81279123, 'Express', 2147483647, 'Alison', '12', 413),
(5, 'Nicole', 'Bishan Street 12', 163721, 97879791, 'Standard', 2147483647, 'Nicole Tan', '03', 173),
(6, 'qwertyuiop', 'asdfghjkl', 123456, 98765432, 'Express', 2147483647, 'zxcvbnm', '12', 456),
(7, 'asdfghjkl', 'qwertyuiop', 1234567, 76543210, 'Express', 2147483647, 'zxcvbnm', '08', 314),
(8, 'asdfghjkl', 'qwertyuiop', 1234567, 76543210, 'Express', 2147483647, 'zxcvbnm', '08', 314),
(9, 'lkjhgfdsa', 'poiuytrewq', 123455, 9876554, 'Express', 2147483647, 'mnbvcxz', '04', 356),
(10, 'lkjhgfdsa', 'poiuytrewq', 123455, 9876554, 'Express', 2147483647, 'mnbvcxz', '04', 356),
(11, 'Chris ', 'Temasek Poly #19', 989730, 97681236, 'Standard', 2147483647, 'Chris Tan', '12', 93),
(12, '123', '157', 0, 0, 'jyuhgvfc', 0, 'nyrthbgefe', 'nbvc', 0),
(13, '123', '157', 0, 0, 'jyuhgvfc', 0, 'nyrthbgefe', 'nbvc', 0),
(14, 'kelly', 'punggol road 18', 87969, 9697579, 'Express', 2147483647, 'kelly lim', '98', 732),
(15, 'kelly', 'punggol road 18', 87969, 9697579, 'Express', 2147483647, 'kelly lim', '98', 732),
(16, 'kelly', 'punggol road 18', 87969, 9697579, 'Express', 2147483647, 'kelly lim', '98', 732),
(17, 'kelly', 'punggol road 18', 87969, 9697579, 'Express', 2147483647, 'kelly lim', '98', 732),
(18, '', '', 0, 0, '', 0, '', '', 0),
(19, '', '', 0, 0, '', 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`SHIPPING_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `SHIPPING_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
