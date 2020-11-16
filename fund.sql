-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2020 at 11:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fund`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `year` varchar(50) NOT NULL,
  `dependency1` varchar(50) NOT NULL,
  `dependency2` varchar(50) NOT NULL,
  `constituency` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `id` int(15) NOT NULL,
  `applicant` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`year`, `dependency1`, `dependency2`, `constituency`, `amount`, `id`, `applicant`, `status`, `applied_date`) VALUES
('45677', '56778', '6786', '6687', 67587, 25, 'qwerty@g.c', 'applied', '2020-11-16 09:37:16'),
('3', '234567', '12345', 'sdfghj', 12345, 23, 'oluochp6@gmail.com', 'applied', '2020-11-16 08:33:15'),
('Y3', '23456789', '23456789', 'ERERUYG', 23456, 22, 'hello@gmail.com', 'applied', '2020-11-16 08:27:41'),
('Y3S2', '77676767', '8878778', 'kisumu', 10000, 13, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00'),
('Y2S1', '77676767', '8878778', 'Webuye west', 36678, 14, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00'),
('Y1S2', '077676767', '071455627', 'Kisumu North', 63773, 15, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00'),
('Y2S2', '077676767', '0788228', 'Nairobi South', 55363, 16, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00'),
('Y3S2', '0977676767', '0787787778', 'Makadara', 88999, 17, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00'),
('Y3S2', '0977676767', '0787787778', 'Makadara', 88999, 18, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00'),
('Y3S2', '0977676767', '0787787778', 'Makadara', 88999, 19, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00'),
('Y3S2', '77676767', '8878778', 'kisumu', 57776, 20, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00'),
('Y3S2', '77676767', '8878778', 'kisumu', 57776, 21, 'mulongodancan25@gmail.com', 'applied', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(34) NOT NULL,
  `stud_mail` varchar(34) NOT NULL,
  `pass` varchar(34) NOT NULL,
  `id` varchar(34) NOT NULL,
  `gender` varchar(34) NOT NULL,
  `phone` varchar(43) NOT NULL,
  `rank` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_name`, `stud_mail`, `pass`, `id`, `gender`, `phone`, `rank`) VALUES
(1, 'wq', 'AsS@D.V', '123456', '2234', 'male', '12321', ''),
(2, 'Duncan', 'mulongopdancan25@gmail.com', '@Dun0714757251', '34426795', 'male', '0714757251', ''),
(6, 'hello', 'hello@gmail.com', '123456', '1234555', 'male', '12224214332', 'administrator'),
(7, 'patrick', 'oluochp6@gmail.com', '1234567', '123456', 'male', '23455667', ''),
(8, 'Ian', 'oluochp6@gmail.com', 'hello', '12345678', 'male', '1234567788', ''),
(9, 'qwerty', 'qwerty@g.c', '123456', '1234567', 'male', '2345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
