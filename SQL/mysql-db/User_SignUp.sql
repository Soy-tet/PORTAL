-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2023 at 06:56 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `User`
--

-- --------------------------------------------------------

--
-- Table structure for table `User_SignUp`
--

CREATE TABLE `User_SignUp` (
  `username` varchar(100) NOT NULL,
  `age` varchar(3) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(300) NOT NULL,
  `time` datetime NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User_SignUp`
--

INSERT INTO `User_SignUp` (`username`, `age`, `email`, `password`, `time`, `id`) VALUES
('soy tet', '21', 'easti4419@gmail.com', 'Easti1449', '2023-02-25 00:12:07', 1),
('soy vitou', '21', 'powertvtv1449@gmail.com', 'vitou2023', '2023-02-25 00:15:54', 2),
('soy vitou', '21', 'powertvtv1449@gmail.com', 'vitou2023', '2023-02-25 00:18:30', 3),
('vitou', '21', '9ball2019@gmail.com', 'vitou2023', '2023-02-25 00:24:47', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User_SignUp`
--
ALTER TABLE `User_SignUp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User_SignUp`
--
ALTER TABLE `User_SignUp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
