-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 03:41 PM
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
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `size` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `size`) VALUES
(1, 'Nike Windbreaker', 'https://i.pinimg.com/736x/0e/bd/ba/0ebdba406d4071dff993ae5b9ea48f72--black-nike-windbreaker-nike-vintage-windbreaker.jpg', 100.00, 'M'),
(8, 'Nike Vintage Jacket', 'https://cdn1.thehunt.com/app/public/system/zine_images/11086238/original/0b05ecc22e1141e7b16888c89ebdafac.jpeg', 20.00, 'S'),
(6, 'San Jose Sharks Jersey', 'https://images-na.ssl-images-amazon.com/images/I/71CN9lGs6nL._SY355_.jpg', 40.00, 'M'),
(5, 'Champion Sweater', 'http://picture-cdn.wheretoget.it/gvm5on-i.jpg', 50.00, 'M'),
(7, 'Vintage Puma Windbreaker', 'https://shop.r10s.jp/penguintripper/cabinet/10501-10750/aa10516-2.jpg', 60.00, 'Free Size'),
(11, 'Nike Maroon Vintage Jacket', 'https://cdn-img-2.wanelo.com/p/a07/5e8/874/6851d12e6dca922dd690e6c/x354-q80.jpg', 40.00, 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
