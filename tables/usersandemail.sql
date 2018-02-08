-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 05:37 AM
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
-- Table structure for table `usersandemail`
--

CREATE TABLE `usersandemail` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersandemail`
--

INSERT INTO `usersandemail` (`user_id`, `user_firstname`, `user_lastname`, `username`, `user_email`, `user_password`, `email_verified`, `token`) VALUES
(9, 'Poop', 'poop', 'poop', 'poop@gmail.com', 'Passw0rd', 0, 'qazzwsxedcrfvtg'),
(10, 'mzm', 'mzm', 'mzm', 'mzm@gmail.com', 'Passw0rd', 0, 'qazzwsxedcrfvtg'),
(11, 'mzmm', 'mzmm', 'mzmm', 'mzmm@gmail.com', 'Passw0rd', 0, 'qazzwsxedcrfvtg'),
(12, 'mzmzm', 'mzmzm', 'mzmzm', 'mzmzm@gmail.com', 'Passw0rd', 0, 'qazzwsxedcrfvtg'),
(13, 'lol', 'lol', 'lol', 'lol@gmail.com', 'Passw0rd', 0, 'vgabrqzxcjskmfuydneiwohlzpt'),
(14, 'mama', 'mama', 'mama', 'mama@gmail.com', 'Passw0rd', 0, 'tsdiqxflzoegbwkuzpmyahcvnrj'),
(15, 'mamama', 'mamama', 'mamama', 'mamama@gmail.com', 'Passw0rd', 0, 'ovyrupzlqkjenxzcfawmhgibtds'),
(16, 'alice', 'chew', 'Alice', 'mcchew1608@gmail.com', 'Passw0rd', 0, 'mofucernjvdhlzzwikqpxbsatgy'),
(17, 'alicea', 'chewa', 'Alicea', 'mcchewa1608@gmail.com', 'Passw0rd', 0, 'airulyztqdzswgoxjvnephmfbkc'),
(18, 'aliceaa', 'chewaa', 'Aliceaa', 'mcchewaa1608@gmail.com', 'Passw0rd', 0, 'pbzhlkxnedfuomqwjatgcyvrsiz'),
(19, 'polly', 'pop', 'polly', 'polly@gmail.com', 'Passw0rd', 0, 'eidvwqcnorymfbxuhtzzaspjgkl'),
(20, 'Mason', 'Tan', 'mason', 'mason@gmail.com', '$2y$10$4Da1iAx4aNcaauLO4du2ZOhFyXm2Pzjp6vaMo1MzACAiH2QQ6XXx6', 0, 'zukgavnjysheoczdqxwmpfriltb'),
(21, 'lmao', 'lmao', 'lmao', 'lmao@gmail.com', '$2y$10$5eCg7qQwdtEzO3pXojwWvuWPit5f.rcBF.2fhebLVSHJmPV3YHw7u', 0, 'sjaioegykbzurcfdntqwmvzlxph'),
(22, 'lmmmm', 'lmmmm', 'lmmmm', 'lmmmm@gmail.com', '$2y$10$0hFN7UQU2h.Bqs5.52t9m.8fz4cB6jyZ56DQu7plVUE1jKVIdLgci', 0, 'hqbswvxikjpfaotuzmnreyzgcdl'),
(23, 'nicole', 'tan', 'nicnicnic', 'nicolet1224@gmail.com', '$2y$10$kQklIjmiDhxFhLFxmUFIce9ALNKj91p9NaNzGOTAY0WtRb.6Jw7Ky', 0, 'vbftejchwlsodqrunakxgmpizzy'),
(24, 'momo', 'momo', 'momo', 'momo@gmail.com', '$2y$10$kcMrUJf7kCmfUHPv8Q.xAeurki7KVb4YqGNMxj4kTNZs36M214saG', 0, 'mlxjzfwkzvdyaqptceihobsugnr'),
(25, 'momo', 'momo', 'momo', 'mom1o@gmail.com', '$2y$10$OCUHCxxUziRMBVztZixjme0bn9YNtxlPt.IVU0egY.gvZSbXBHg9.', 0, 'haojmspkungycxbwderzfltivqz'),
(26, 'momoo', 'momoo', 'momoo', 'mom1oo@gmail.com', '$2y$10$JFdRI2Z9xwYhyNMM7mEf3O4efYcM/jfxiMNupgRZn84EmCRFZhyAS', 0, 'qhrebadstpgwxjcnzlyuivzmkof');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usersandemail`
--
ALTER TABLE `usersandemail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersandemail`
--
ALTER TABLE `usersandemail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
