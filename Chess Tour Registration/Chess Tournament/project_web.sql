-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2024 at 03:49 PM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

DROP TABLE IF EXISTS `admininfo`;
CREATE TABLE IF NOT EXISTS `admininfo` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`username`, `password`) VALUES
('admin', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `blitz`
--

DROP TABLE IF EXISTS `blitz`;
CREATE TABLE IF NOT EXISTS `blitz` (
  `Username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `User_id` int NOT NULL,
  `total_participant_limit` int NOT NULL DEFAULT '20',
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blitz`
--

INSERT INTO `blitz` (`Username`, `Email`, `Phone Number`, `User_id`, `total_participant_limit`) VALUES
('rasyid', 'rasyid@gmail.com', '325446', 11, 20);

-- --------------------------------------------------------

--
-- Table structure for table `bullet`
--

DROP TABLE IF EXISTS `bullet`;
CREATE TABLE IF NOT EXISTS `bullet` (
  `Username` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `User_id` int NOT NULL,
  `total_participant_limit` int NOT NULL DEFAULT '20',
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chess960`
--

DROP TABLE IF EXISTS `chess960`;
CREATE TABLE IF NOT EXISTS `chess960` (
  `User_id` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone Number` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rapid`
--

DROP TABLE IF EXISTS `rapid`;
CREATE TABLE IF NOT EXISTS `rapid` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `User_id` int NOT NULL,
  `total_participant_limit` int NOT NULL DEFAULT '20',
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rapid`
--

INSERT INTO `rapid` (`Username`, `Email`, `Phone Number`, `User_id`, `total_participant_limit`) VALUES
('adlin', 'muhd.adlin2003@gmail', '12121212', 4, 20),
('hisyam', 'hisyam@gmail.com', '234324', 22, 20);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `User_id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(10) NOT NULL,
  `Full Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Phone Number` (`Phone Number`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`User_id`, `Username`, `Full Name`, `Email`, `Phone Number`, `Password`) VALUES
(3, 'adlyzm', 'Muhd Adlin', 'adlin8539@gmail.com', '1158638593', 'asasasas'),
(4, 'adlin', 'Muhd Adlin', 'muhd.adlin2003@gmail.com', '12121212', 'test'),
(5, 'adlyzm22', 'Muhd Adlin', 'muhammad.adlin0771@gmail.com', '12123345', 'adlin'),
(6, 'is01082209', 'Adlin', 'muhammad@gmail.com', '123123123', 'rfrfrfrf'),
(7, 'adeem slay', 'Kamal Adeem', 'kamaladeembinkam@gmail.com', '999', 'adeem'),
(8, 'amir', 'Amir je', 'amir@gmail.com', '12212445', 'test'),
(10, 'sholeh321', 'sholeh', 'sholeh@gmail.com', '23456', 'test'),
(11, 'rasyid', 'rasyid', 'rasyid@gmail.com', '325446', 'test'),
(12, 'mirultakpr', 'amirul', 'amirul@gmail.com', '24135354', 'test'),
(19, 'adlin321', 'adlin321', 'adlin321@gmail.com', '235647', 'test'),
(21, 'yazid', 'akmal yazid', 'akmalyazidklcc@gmail.com', '233434', 'test'),
(22, 'hisyam', 'hisyam', 'hisyam@gmail.com', '234324', 'test'),
(27, 'sholehudin', 'sholehudin', 'sholehudin@gmail.com', '0129457945', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
