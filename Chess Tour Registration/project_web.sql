-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2024 at 11:38 AM
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
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `User_id` int NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blitz`
--

INSERT INTO `blitz` (`Username`, `Email`, `Phone Number`, `User_id`) VALUES
('mason_ross', 'mason.ross@example.com', '1234567890', 4),
('olivia_tay', 'olivia.taylor@example.com', '6547890127', 9),
('liam_cruz', 'liam.cruz@example.com', '7890123457', 26),
('adlin', 'adlin@gmail.com', '234521', 76),
('adeem', 'adeem@gmail.com', '235536', 77);

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
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Quota` int NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `Name`, `Quota`) VALUES
(1, 'Rapid', 20),
(2, 'Bullet', 10),
(3, 'Blitz', 20),
(4, 'Chess960', 20);

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
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rapid`
--

INSERT INTO `rapid` (`Username`, `Email`, `Phone Number`, `User_id`) VALUES
('adlin', 'adlin@gmail.com', '234521', 76);

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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`User_id`, `Username`, `Full Name`, `Email`, `Phone Number`, `Password`) VALUES
(1, 'emma_wilso', 'Emma Wilson', 'emma.wilson@example.com', '5556667777', 'emmaPass12'),
(2, 'jack_carte', 'Jack Carter', 'jack.carter@example.com', '7778889999', 'jackPass45'),
(4, 'mason_ross', 'Mason Ross', 'mason.ross@example.com', '1234567890', 'masonPass9'),
(5, 'sophia_dav', 'Sophia Davis', 'sophia.davis@example.com', '9876543212', 'sophiaPass'),
(6, 'liam_ander', 'Liam Anderson', 'liam.anderson@example.com', '9871234563', 'liamPass78'),
(7, 'ava_martin', 'Ava Martin', 'ava.martin@example.com', '1239876544', 'avaPass345'),
(8, 'noah_jacks', 'Noah Jackson', 'noah.jackson@example.com', '4567890126', 'noahPass56'),
(9, 'olivia_tay', 'Olivia Taylor', 'olivia.taylor@example.com', '6547890127', 'oliviaPass'),
(10, 'ethan_wilk', 'Ethan Wilkins', 'ethan.wilkins@example.com', '3216549878', 'ethanPass1'),
(11, 'emma_baker', 'Emma Baker', 'emma.baker@example.com', '5556667778', 'emmaPass12'),
(12, 'henry_garc', 'Henry Garcia', 'henry.garcia@example.com', '7778889997', 'henryPass4'),
(13, 'zoey_hall', 'Zoey Hall', 'zoey.hall@example.com', '9998887776', 'zoeyPass78'),
(14, 'aiden_mart', 'Aiden Martinez', 'aiden.martinez@example.com', '1234567899', 'aidenPass9'),
(15, 'olivia_dav', 'Olivia Davis', 'olivia.davis@example.com', '9876543213', 'oliviaPass'),
(16, 'liam_smith', 'Liam Smith', 'liam.smith@example.com', '9871234564', 'liamPass78'),
(17, 'ava_perez', 'Ava Perez', 'ava.perez@example.com', '1239876545', 'avaPass345'),
(18, 'noah_herna', 'Noah Hernandez', 'noah.hernandez@example.com', '4567890128', 'noahPass56'),
(19, 'olivia_kin', 'Olivia King', 'olivia.king@example.com', '6547890129', 'oliviaPass'),
(20, 'ethan_morr', 'Ethan Morris', 'ethan.morris@example.com', '3216549870', 'ethanPass1'),
(21, 'emma_watso', 'Emma Watson', 'emma.watson@example.com', '5551234569', 'emmaPass45'),
(22, 'jack_jones', 'Jack Jones', 'jack.jones@example.com', '7890123454', 'jackPass78'),
(23, 'lily_marti', 'Lily Martin', 'lily.martin@example.com', '5551234561', 'lilyPass23'),
(24, 'mason_brow', 'Mason Brown', 'mason.brown@example.com', '7890123453', 'masonPass5'),
(25, 'sophia_hal', 'Sophia Hall', 'sophia.hall@example.com', '5551234562', 'sophiaPass'),
(26, 'liam_cruz', 'Liam Cruz', 'liam.cruz@example.com', '7890123457', 'liamPass12'),
(27, 'ava_wilson', 'Ava Wilson', 'ava.wilson@example.com', '5551234564', 'avaPass456'),
(28, 'noah_turne', 'Noah Turner', 'noah.turner@example.com', '7890123455', 'noahPass78'),
(29, 'olivia_mil', 'Olivia Miller', 'olivia.miller@example.com', '5551234566', 'oliviaPass'),
(30, 'emma_robin', 'Emma Robinson', 'emma.robinson@example.com', '7890123458', 'emmaPass56'),
(61, 'oliver_wil', 'Oliver Wilson', 'oliver.wilson@example.com', '5556667770', 'oliverPass'),
(62, 'grace_jone', 'Grace Jones', 'grace.jones@example.com', '7778889991', 'gracePass4'),
(63, 'samuel_tho', 'Samuel Thomas', 'samuel.thomas@example.com', '9998887772', 'samuelPass'),
(64, 'ella_marti', 'Ella Martinez', 'ella.martinez@example.com', '1234567893', 'ellaPass98'),
(65, 'ethan_davi', 'Ethan Davis', 'ethan.davis@example.com', '9876543214', 'ethanPass6'),
(66, 'ava_smith', 'Ava Smith', 'ava.smith@example.com', '9871234565', 'avaPass789'),
(67, 'mason_pere', 'Mason Perez', 'mason.perez@example.com', '1239876546', 'masonPass3'),
(68, 'mia_hernan', 'Mia Hernandez', 'mia.hernandez@example.com', '4567890127', 'miaPass567'),
(69, 'noah_king', 'Noah King', 'noah.king@example.com', '6547890128', 'noahPass89'),
(70, 'olivia_mor', 'Olivia Morris', 'olivia.morris@example.com', '3216549879', 'oliviaPass'),
(71, 'liam_watso', 'Liam Watson', 'liam.watson@example.com', '5541234560', 'liamPass45'),
(72, 'ava_brown', 'Ava Brown', 'ava.brown@example.com', '7890123451', 'avaPass789'),
(73, 'noah_marti', 'Noah Martin', 'noah.martin@example.com', '5557234562', 'noahPass23'),
(74, 'olivia_cru', 'Olivia Cruz', 'olivia.cruz@example.com', '78901221453', 'oliviaPass'),
(75, 'ethan_hall', 'Ethan Hall', 'ethan.hall@example.com', '5551234164', 'ethanPass8'),
(76, 'adlin', 'adlin', 'adlin@gmail.com', '1345465', 'test'),
(77, 'adeem', 'adeem', 'adeem@gmail.com', '235536', 'test'),
(78, 'yazid slay', 'Akmal yazid bin abdul rahim', 'akmalyazdiklccje@gmail.com', '999', 'test'),
(79, 'amir', 'amir haiqal', 'amir@gmail.com', '23423334', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
