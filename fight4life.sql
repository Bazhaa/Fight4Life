-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 07:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigfire`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryId`, `Name`) VALUES
(1, 'Nutrition'),
(2, 'Fitness'),
(3, 'Sleeping'),
(4, 'Productivity'),
(5, 'Learning'),
(6, 'Relationships'),
(7, 'Money');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `Question` varchar(300) NOT NULL,
  `Answer` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionId`, `CategoryId`, `Question`, `Answer`) VALUES
(1, 1, 'Drinking 2L water/day', 0),
(4, 2, 'Running', 0),
(5, 2, 'Workout', 0),
(8, 1, 'Having enough breakfast', 0),
(9, 1, 'Eating more veggies and fruits', 0),
(11, 1, 'Eating Yogurt', 0),
(12, 2, 'Swimming', 0),
(13, 2, 'Meditation', 0),
(14, 3, 'Taking a nap', 0),
(15, 3, 'Sleeping enough 7 hours', 0),
(16, 4, 'No social media', 0),
(17, 4, 'Plan for tomorrow', 0),
(18, 5, 'Reading more', 0),
(19, 6, 'Call Ex', 0),
(20, 6, 'Call Mama', 0),
(21, 6, 'Say Thanks', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QuestionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`CategoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
