-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 07:11 AM
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
  `shipping_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `postcode` int(6) NOT NULL,
  `mobile` int(8) NOT NULL,
  `delivery` varchar(8) NOT NULL,
  `encrypted_card_no` varchar(255) NOT NULL,
  `card_name` varchar(20) NOT NULL,
  `expiry` varchar(7) NOT NULL,
  `encrypted_ccv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `name`, `address`, `postcode`, `mobile`, `delivery`, `encrypted_card_no`, `card_name`, `expiry`, `encrypted_ccv`) VALUES
(1, 'Syarifah', 'Blk 103C Edgefield Plains', 823103, 91831130, 'Standard', '2147483647', 'Nur Syarifah', '0000-00', '432'),
(2, 'James', 'Blk 419A Hougang Street', 653432, 95634342, 'Express', '2147483647', 'James', '0000-00', '134'),
(3, 'James', 'Blk 419A Hougang Street', 653432, 95634342, 'Express', '2147483647', 'James', '0000-00', '134'),
(4, 'Allie', 'Punggol Road', 317899, 81279123, 'Express', '2147483647', 'Alison', '0000-00', '413'),
(5, 'Nicole', 'Bishan Street 12', 163721, 97879791, 'Standard', '2147483647', 'Nicole Tan', '0000-00', '173'),
(6, 'qwertyuiop', 'asdfghjkl', 123456, 98765432, 'Express', '2147483647', 'zxcvbnm', '0000-00', '456'),
(7, 'asdfghjkl', 'qwertyuiop', 1234567, 76543210, 'Express', '2147483647', 'zxcvbnm', '0000-00', '314'),
(8, 'asdfghjkl', 'qwertyuiop', 1234567, 76543210, 'Express', '2147483647', 'zxcvbnm', '0000-00', '314'),
(9, 'lkjhgfdsa', 'poiuytrewq', 123455, 9876554, 'Express', '2147483647', 'mnbvcxz', '0000-00', '356'),
(10, 'lkjhgfdsa', 'poiuytrewq', 123455, 9876554, 'Express', '2147483647', 'mnbvcxz', '0000-00', '356'),
(11, 'Chris ', 'Temasek Poly #19', 989730, 97681236, 'Standard', '2147483647', 'Chris Tan', '0000-00', '93'),
(12, '123', '157', 0, 0, 'jyuhgvfc', '0', 'nyrthbgefe', '0000-00', '0'),
(13, '123', '157', 0, 0, 'jyuhgvfc', '0', 'nyrthbgefe', '0000-00', '0'),
(14, 'kelly', 'punggol road 18', 87969, 9697579, 'Express', '2147483647', 'kelly lim', '0000-00', '732'),
(15, 'kelly', 'punggol road 18', 87969, 9697579, 'Express', '2147483647', 'kelly lim', '0000-00', '732'),
(16, 'kelly', 'punggol road 18', 87969, 9697579, 'Express', '2147483647', 'kelly lim', '0000-00', '732'),
(17, 'kelly', 'punggol road 18', 87969, 9697579, 'Express', '2147483647', 'kelly lim', '0000-00', '732'),
(18, '', '', 0, 0, '', '0', '', '0000-00', '0'),
(19, '', '', 0, 0, '', '0', '', '0000-00', '0'),
(20, 'Syarifah', 'Marina Bay Street 12', 675457, 98765432, 'Standard', '2147483647', 'Nur Syarifah', '0000-00', '123'),
(21, 'Syarifah', 'Marina Bay Street 12', 675457, 98765432, 'Standard', '2147483647', 'Nur Syarifah', '0000-00', '123'),
(22, '?', '?', 0, 0, '?', '0', '?', '0000-00', '0'),
(23, ' ', ' ', 0, 0, ' ', '0', ' ', '0000-00', '0'),
(24, 'name', 'address', 0, 0, ' ', '0', ' ', '0000-00', '0'),
(25, 'Syarifah', 'Marina Bay Street 12', 675457, 98765432, 'Standard', '2147483647', 'Nur Syarifah', '0000-00', '123'),
(26, '', '', 0, 0, '', '0', '', '0000-00', '0'),
(27, 'name', 'address', 0, 0, 'delivery', '0', 'card_name', '0000-00', '0'),
(28, 'syarifah', 'blk 103c', 823103, 0, '', '0', '', '0000-00', '0'),
(29, 'syarifah', 'blk 103c', 823103, 98767856, 'Standard', '1234', 'Nur Syarifha', '0000-00', '0'),
(30, 'afdsg', 'frgwrgt', 0, 0, 'Standard', '0', 'niu', '0000-00', '0'),
(31, 'ojni', 'biunij', 0, 0, 'Standard', '0', 'uhn', '0000-00', '0'),
(32, 'ojni', 'biunij', 0, 0, 'Standard', '0', 'uhn', '0000-00', '0'),
(33, 'ojni', 'biunij', 0, 0, 'Standard', '0', 'uhn', '0000-00', '0'),
(34, 'ojni', 'biunij', 0, 0, 'Standard', '0', 'uhn', '0000-00', '0'),
(35, 'hbuhb', 'hbhb', 0, 0, 'Standard', '0', 'HBI', '0000-00', '0'),
(36, 'Sya', 'yhijhlin', 0, 0, 'Standard', '0', 'iunh', '0000-00', '0'),
(37, 'Syarifah', 'ijhniun', 0, 0, 'Standard', '0', 'jnj', '0000-00', '0'),
(38, 'Nur Syarifah Shah', 'Blk 103C ', 823103, 91039021, 'jni', '0', 'hni', '0000-00', '0'),
(39, 'Nur Syarifah Shah', 'Bedok Street 12', 823103, 91039021, 'jni', '0', 'hni', '0000-00', '0'),
(40, 'Syarifah', 'Blk 103C Edgefield Plains', 823103, 98767812, 'Standard', '0', 'ibnj', '0000-00', '0'),
(41, 'Syarifah', 'Blk 103C Edgefield Plains', 823103, 98767812, 'Express', '0', 'ibnj', '0000-00', '0'),
(42, 'Syarifah', 'Blk 103C', 823103, 98786771, 'Standard', '1287', 'uihiihu', '0000-00', '0'),
(43, 'Syarifah', 'Blk 103C', 823103, 98786771, 'Standard', '1287', 'Syarifah', '0000-00', '0'),
(44, 'Syarifah', 'Blk 103C', 823103, 98786771, 'Standard', '2147483647', 'Syarifah', '0000-00', '0'),
(45, 'Syarifah', 'Blk 103C', 823103, 98786771, 'Standard', '2147483647', 'Syarifah', '0000-00', '233'),
(46, 'Syarifah', 'Blk 103C', 823103, 98786771, 'Standard', '1287-1234-7678-1283', 'Syarifah', '0000-00', '233'),
(47, 'Shea Shoo', 'Hougang Street 12', 876812, 98893928, 'Express', '1234-5678-9012-3456', 'Shea', '0000-00', '542'),
(48, 'Shea Shoo', 'Hougang Street 12', 876812, 98893928, 'Express', '1234-5678-9012-3456', 'Shea', '0000-00', '542'),
(49, 'Shea Shoo', 'Hougang Street 12', 876812, 98893928, 'Express', '1234-5678-9012-3456', 'Shea', '0000-00', '542'),
(50, 'hello', 'Hougang Street 12', 876812, 98893928, 'Express', '1234-5678-9012-3456', 'Shea', '0000-00', '542'),
(51, 'syarifah', 'house', 872389, 98368729, 'Standard', '1234', 'syarifah house', '0000-00', '325'),
(52, 'syarifah', 'house', 872389, 98368729, 'Standard', '1234', 'syarifah house', '0000-00', '325'),
(53, 'syarifah', 'house', 872389, 98368729, 'Standard', '1234', 'syarifah house', '0000-00', '325'),
(54, 'sya', 'block', 879879, 98797887, 'Standard', '1234', 'sya', '0000-00', '342'),
(55, 'ohnjihn', 'ihi', 0, 0, 'hjjk', '0', 'h', '0000-00', '0'),
(56, '8978', '6987897', 897, 98789, '797', '9879', '8798', '0000-00', '78979'),
(57, 'Syarifah', 'Blk 103C', 987897, 98766577, 'Express', '4356', 'Syarifah', '0000-00', '983'),
(58, 'Alice', 'Blk 342A', 845763, 93681389, 'Express', '5436-6436-3542-7643', 'Syarifah', '0000-00', '432'),
(59, 'Alice', 'Blk 342A', 845763, 93681389, 'Express', '5436-6436-3542-7643', 'Syarifah', '0000-00', '432'),
(60, 'Bob', 'Blk 342A', 845763, 93681389, 'Express', '5436-6436-3542-7643', 'Syarifah', '0000-00', '432'),
(61, 'Bob', 'Blk 342A', 845763, 93681389, 'Express', '5436-6436-3542-7643', 'Syarifah', '0000-00', '432'),
(62, 'Jane', 'Blk 342A', 845763, 93681389, 'Express', '5436-6436-3542-7643', 'Syarifah', '0000-00', '432'),
(63, 'Syahin', 'Blk 342A', 845763, 93681389, 'Express', '5436-6436-3542-7643', 'Syarifah', '0000-00', '432'),
(64, 'Jun Hoe', 'Clarke Quay', 476979, 92873283, 'Standard', '5436-6436-3542-7643', 'JH', '0000-00', '432'),
(65, 'Yong Hyung', 'Clarke Quay', 476979, 92873283, 'Standard', '5436-6436-3542-7643', 'YH', '0000-00', '432'),
(66, 'KWON JY', 'Clarke Quay', 476979, 92873283, 'Standard', '5436-6436-3542-7643', 'KJY', '0000-00', '432'),
(67, 'HP ENVY', 'Clarke Quay', 476979, 92873283, 'Standard', '5436-6436-3542-7643', 'HPE', '0000-00', '432'),
(68, 'HP ENVY', 'Clarke Quay', 476979, 92873283, 'Standard', '5436-6436-3542-7643', 'HPE', '0000-00', '432'),
(69, 'HP ENVY', 'Clarke Quay', 476979, 92873283, 'Standard', '5436-6436-3542-7643', 'HPE', '0000-00', '432'),
(70, 'Mike', 'Blk 432A', 823791, 95763827, 'Express', '1234567890123456', 'Mike Lee', '0000-00', '863'),
(71, 'Nicky', 'Blk 104A', 768732, 98287283, 'Standard', '1234567890123456', 'Nicky', '2012-12', '232'),
(72, 'Daniel', 'Blk 104A', 768732, 98287283, 'Standard', '1234567890123456', 'Daniel', '2012-12', '232'),
(73, 'Daniel', 'Blk 104A', 768732, 98287283, 'Standard', '1234567890123456', 'Daniel', '2012-12', '232'),
(74, 'NICKLE', 'BISHAN HELLO', 855728, 97863183, 'Express', '1234567850123456', 'NICKLE HELLO', '0000-00', '342'),
(75, 'BISH', 'BISHAN HELLO', 855728, 97863183, 'Express', '1234567850123456', 'BISH HELLO', '0000-00', '342'),
(76, 'Whitney', 'Yishun Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'Whitney', '0000-00', '342'),
(77, 'MAROON', 'Yishun Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'MAROON', '0000-00', '342'),
(78, 'MAROON', 'Yishun Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'MAROON', '0000-00', '342'),
(79, 'Syfq', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'sfyq', '0000-00', '342'),
(80, 'Syfq', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'sfyq', '0000-00', '342'),
(81, 'Syfq', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'sfyq', '0000-00', '342'),
(82, 'Syfq', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'sfyq', '0000-00', '342'),
(83, 'Syfq', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'sfyq', '0000-00', '342'),
(84, 'Syarifah', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'Syarifah', '0000-00', '342'),
(85, 'Syarifah', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'Syarifah', '0000-00', '342'),
(86, 'JX', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'JX', '0000-00', '342'),
(87, 'JX', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'JX', '0000-00', '342'),
(88, 'bleh', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'bleh', '0000-00', '342'),
(89, 'ugh', 'Punggol Street 12', 927391, 98293782, 'Standard', '1234567890123456', 'ugh', '0000-00', '342'),
(90, 'Syahin', 'Punggol Road ', 727982, 98293782, 'Standard', '1234567890123456', 'Syahin', '0000-00', '342'),
(91, 'Syarifah', 'Blk 103C Edgefield ', 823103, 98786812, 'Standard', '1234567890123456', 'Syarifah', '0000-00', '123'),
(92, 'alert  hacked  ', 'Blk 103C', 878797, 98786879, 'Standard', '1234567890123456', 'Syarifah', '0000-00', '123'),
(93, 'Asus', 'Gurney Road 12', 837278, 98239847, 'Standard', '1234567890123456', 'Asus', '0000-00', '342'),
(94, 'Belle', 'Yishun Street 12', 738872, 93672873, 'Standard', '1234567890123456', 'Belle Lee', '0000-00', '432'),
(95, 'Havana', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'Havana Ass', '0000-00', '432'),
(96, 'Havana', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'Havana Ass', '0000-00', '432'),
(97, 'Havana', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'Havana Ass', '0000-00', '432'),
(98, 'Havana', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'Havana Ass', '0000-00', '432'),
(99, 'Havana', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'Havana Ass', '0000-00', '432'),
(100, 'Havana', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'Havana Ass', '0000-00', '432'),
(101, 'Havana', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'Havana Ass', '0000-00', '432'),
(102, 'Havana', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'Havana Ass', '0000-00', '432'),
(103, 'bishpls', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'bishno', '0000-00', '432'),
(104, 'pleasepleaseplease', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'plsplspls', '0000-00', '432'),
(105, 'pleasepleaseplease', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'plsplspls', '0000-00', '432'),
(106, 'stop', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'stopla', '0000-00', '432'),
(107, 'stop', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'stopla', '0000-00', '432'),
(108, 'stop', 'Blk 103C', 237819, 97383728, 'Standard', '1234567890123456', 'stopla', '0000-00', '432'),
(109, 'Syarifah', 'fdsfe', 765654, 91082781, 'Standard', '1234567890123456', 'NOPE', '0000-00', '543'),
(110, 'Syarifah', 'fdsfe', 765654, 91082781, 'Standard', '1234567890123456', 'NOPE', '0000-00', '543'),
(111, 'BYE', 'BLK OK', 823456, 98683827, 'Standard', '1234567890123456', 'BYE OK', '0000-00', '432'),
(112, 'KEK', 'BLK KEK', 987898, 98785678, 'Standard', '1234676589372648', 'KEK KEK', '122026', '874'),
(113, 'KEK', 'BLK KEK', 987898, 98785678, 'Standard', '1234676589372648', 'KEK KEK', '12', '874'),
(114, 'KEK', 'BLK KEK', 987898, 98785678, 'Standard', '1234676589372648', 'KEK KEK', '12', '874'),
(115, 'KEK', 'BLK KEK', 987898, 98785678, 'Standard', '1234676589372648', 'KEK KEK', '122026', '874'),
(116, 'KEK', 'BLK KEK', 987898, 98785678, 'Standard', '0', 'KJH', '122026', '654'),
(117, 'NOPE', 'BLK KEK', 987898, 98785678, 'Standard', '0', 'NOPE', '122026', '654'),
(118, 'xzc', 'msam123', 823103, 93781023, 'Standard', '0', 'poop', '122022', '123'),
(119, 'xzccxzcz', 'xzczx213', 823103, 93782107, 'Standard', '0', 'Nur syarifah', '122022', '123'),
(120, 'xzccxzcz', 'xzczx213', 823103, 93782107, 'Standard', '0', 'Nur syarifah', '122022', '123'),
(121, 'IDK', 'xzczx213', 823103, 93782107, 'Standard', '0', 'IDK', '122022', '123'),
(122, 'IDK', 'xzczx213', 823103, 93782107, 'Standard', '0', 'IDK', '122022', '123'),
(123, 'IDK', 'xzczx213', 823103, 93782107, 'Standard', '0', 'IDK', '122022', '123'),
(124, 'IDK', 'xzczx213', 823103, 93782107, 'Standard', '0', 'IDK', '122022', '123'),
(125, 'IDK', 'xzczx213', 823103, 93782107, 'Standard', '0', 'IDK', '122022', '123'),
(126, 'help', 'xzczx213', 823103, 93782107, 'Standard', '0', 'help', '122022', '123'),
(127, 'bye', 'xzczx213', 823103, 93782107, 'Standard', '$2y$10$eZ3SHHJRoeefpVaEKDo1JuLc49TQFxBkIvSQIa2KJ7KvVTYCR2ah.', 'bye', '122022', '123'),
(128, 'nope', 'xzczx213', 823103, 93782107, 'Standard', '$2y$10$/jHqKvFOESin.6DC1yVlZewE7UKAQWNrYA9s7QzeOn1NQT.5VXY2i', 'nope', '122022', '123'),
(129, 'please work', 'xzczx213', 823103, 93782107, 'Standard', '1234567891234562', 'plspls', '122022', '123'),
(130, 'please work', 'xzczx213', 823103, 93782107, 'Standard', 'ì—(äšN\rú9`LÃ£ã¬¬ÄÄñXâhõ ó', 'plspls', '122022', '123'),
(131, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'ì—(äšN\rú9`LÃ£ã¬¬ÄÄñXâhõ ó', 'plspls', '122022', '123'),
(132, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'Ù5ýqíº¡SAŽgÝ‘g©¨Jr¼Af’72HçÒ?h¤', 'plspls', '122022', '123'),
(133, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'Ù5ýqíº¡SAŽgÝ‘g©¨Jr¼Af’72HçÒ?h¤', 'plspls', '122022', '0'),
(134, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '\0yV(äÌ»5æNÆXôkr\r2z‡º¿àÔ£+Ý(s\"', 'plspls', '122022', '2'),
(135, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '\0yV(äÌ»5æNÆXôkr\r2z‡º¿àÔ£+Ý(s\"', 'plspls', '122022', '0'),
(136, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '´™ÖìREÒ{Ê²ñh‡‚À¿Ûê{mrÈ «Ú†9', 'plspls', '122022', '0'),
(137, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '´™ÖìREÒ{Ê²ñh‡‚À¿Ûê{mrÈ «Ú†9', 'plspls', '122022', '0'),
(138, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '´™ÖìREÒ{Ê²ñh‡‚À¿Ûê{mrÈ «Ú†9', 'plspls', '122022', '0'),
(139, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '4237892847929857', 'plspls', '122022', '0'),
(140, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '4237892847929857', 'plspls', '122022', '0'),
(141, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'VF¥dÂ<áìüç²2±³Óò×˜Ó ç™ý#9ÛÜó\'ã', 'plspls', '122022', '438'),
(142, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'VF¥dÂ<áìüç²2±³Óò×˜Ó ç™ý#9ÛÜó\'ã', 'plspls', '122022', '0'),
(143, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'VF¥dÂ<áìüç²2±³Óò×˜Ó ç™ý#9ÛÜó\'ã', 'plspls', '122022', '0'),
(144, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'VF¥dÂ<áìüç²2±³Óò×˜Ó ç™ý#9ÛÜó\'ã', 'plspls', '122022', '0'),
(145, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'VF¥dÂ<áìüç²2±³Óò×˜Ó ç™ý#9ÛÜó\'ã', 'plspls', '122022', '0'),
(146, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '3267384619284759', 'plspls', '122022', '0'),
(147, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '3267384619284759', 'plspls', '122022', '0'),
(148, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '3267384619284759', 'plspls', '122022', '0'),
(149, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', '3267384619284759', 'plspls', '122022', '0'),
(150, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'VF¥dÂ<áìüç²2±³Óò×˜Ó ç™ý#9ÛÜó\'ã', 'plspls', '122022', '0'),
(151, 'NIC PLS', 'xzczx213', 823103, 93782107, 'Standard', 'VF¥dÂ<áìüç²2±³Óò×˜Ó ç™ý#9ÛÜó\'ã', 'plspls', '122022', '$2y$10$yNk28A6hJGtGcN7QFaKWiOYMesuVqqpiG4.ckxLJj45WR5aQJf/l6'),
(152, 'Khai', 'Tampines Street 12', 867382, 95672398, 'Express', 'ƒÕ	gtæzÊ42.ðµòK5¿ÃŸÙðÍÃ’*„Õ~', 'Khai', '122026', '$2y$10$ulZn7WxB.hUUeiUmt88nsOmfoQ0DplCvzThp0B35yj2D555bJS7K2'),
(153, 'Syarifah', 'Blk 103C', 823103, 91074641, 'Express', '‚u4y)¡¾@ÕÎÓ›7,•C„vÏà\"¦=³½	Y', 'Syarifah', '122025', '$2y$10$Vn8nAJATQtYnIV7HcTxQHuPgneRN4i7UbyGqXgN3PJVKUGPpno0wm'),
(154, 'ye', 'ye', 876789, 98789876, 'Standard', 'RN7uÚÐ5´ÒÇ˜ò‹Víë<éÈ^®æNBZÀaÍW', 'ye', '122025', '$2y$10$q6bzuu5dk6BC.bZosK74be2KCQCcA2hR8mXGGIjx9u4GGADVGZ05S'),
(155, 'ye', 'ye', 876789, 98789876, 'Standard', 'Gháã ô¹J†ÇÔË3Åa', 'ye', '122025', '$2y$10$4gOuvmJgEMODaqH84Kdui.XlvJa0zXMLqvJpdyrh6teNXEQFmQiRq'),
(156, 'Syarifah', 'Blk 103', 678372, 98743728, 'Express', 'U©˜æ^¥Ù…MÀ { õ”', 'Syarifah', '122026', '$2y$10$c10dB2WrWxCPDsBFtvtx7ueFUg001PHxztREfZ.A0BkQMuf4hVjq.'),
(157, 'sYA', 'BLK ', 836728, 98783627, 'Standard', 'Åä°í»ƒ“ü’=RW”xàÙBÒÙ‰2c×1x0ÞÙ', 'Sya', '122027', '$2y$10$fsCbpgqBBnAZQlot4aGzmOufn3ds6vh7DPTke/tfXn9YzSBCrljcu'),
(158, 'KHAIRUBI S KADARISMAN', 'BLK 861A TAMPINES AVE 5  12 565', 521861, 91774765, 'Standard', 'U©˜æ^¥Ù…MÀ { õ”', 'Nur Syarifah', '122022', '$2y$10$E2Bx/m4.oCLfTHLxxi4U0un0/p9nIY41FxJVPWXzcHc8cO/SEzATO'),
(159, 'MUHAMMAD TAJUDDIN BIN AB KHALIM', 'BLK 861A TAMPINES AVE 5  12 565', 521861, 98559216, 'Standard', 'U©˜æ^¥Ù…MÀ { õ”', 'Nur Syarifah', '122022', '$2y$10$5ihVMd1XzkAXmnc0c9V.FOEr.XSqYam65CnMrlr1yTdYDGXla88my'),
(160, 'Sya', 'Blk 103', 837281, 96783287, 'Express', '9Æ|–bÉï>ÜTT.é\01È', 'Sya', '122026', '$2y$10$0opuQLkT85vLgqdbig2c8eHYTAl1AL1LG8MQM2OUhM9IGKs66mqx6'),
(161, 'Sya', 'Blk 103', 837281, 96783287, 'Express', '9Æ|–bÉï>ÜTT.é\01È', 'Sya', '122026', '$2y$10$zkk.B/KQBF/NeN8shifYVOrXatofnJ.g9GiUE9dBU4VEHWMhjPYCa'),
(162, 'Sya', 'Blk 103', 837281, 96783287, 'Express', '9Æ|–bÉï>ÜTT.é\01È', 'Sya', '122026', '$2y$10$C4.Cl8gY1mLvoHRV5aRLXOqYn9rmTJ/jcrZnaKzH24xpc9OJdD/e6'),
(163, 'Sya', 'Blk 103', 837281, 96783287, 'Express', '9Æ|–bÉï>ÜTT.é\01È', 'Sya', '122026', '$2y$10$IrsuYM5BrR/5TpMpGWZjy.kx341isonCer.vgs3rP7ugadXb6J85W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
