-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 04:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team`
--

-- --------------------------------------------------------

--
-- Table structure for table `team_login`
--

CREATE TABLE `team_login` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` longtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_login`
--

INSERT INTO `team_login` (`id`, `name`, `description`, `password`, `image`, `time`) VALUES
(6, 'king', 'this is king of cambodia', '123', 'https://i.pinimg.com/originals/f1/0f/f7/f10ff70a7155e5ab666bcdd1b45b726d.jpg', '2023-02-27 17:39:27'),
(7, 'saf', 'saf', 'asfsfdsaf', 'safsfdasf', '2023-02-27 17:44:52'),
(8, 'fds', 'gdg', 'dhfg', 'dfgh', '2023-02-27 18:08:36'),
(9, 'ggggggggggggggggggggggggg', 'ggggfh', 'fgh', 'fghgggggggggggggg', '2023-02-27 18:16:20'),
(10, 'fgggggggggggggggggggggggg', 'fghhhhhhhhhhhh', 'fghhhhhhhhhhhh', 'hfghhhhhhhhhhhh', '2023-02-27 18:16:43'),
(11, 'hhhhhhhhhhhhhhhhhhhhhtttt', 'fffffffffffffffffgfffffffffffffffffffffffffffffffffffffffffdrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '', '', '2023-02-27 18:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `team_signup`
--
-- Error reading structure for table team.team_signup: #1932 - Table 'team.team_signup' doesn't exist in engine
-- Error reading data for table team.team_signup: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `team`.`team_signup`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team_login`
--
ALTER TABLE `team_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team_login`
--
ALTER TABLE `team_login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
