-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2024 at 02:42 PM
-- Server version: 11.2.2-MariaDB
-- PHP Version: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indian-knowledge-system`
--
CREATE DATABASE IF NOT EXISTS `indian-knowledge-system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `indian-knowledge-system`;

-- --------------------------------------------------------

--
-- Table structure for table `art-form-details`
--

DROP TABLE IF EXISTS `art-form-details`;
CREATE TABLE `art-form-details` (
  `name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='details about various art forms in india';

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`type`) VALUES
('grass'),
('shrub');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `plant` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `disease` varchar(200) NOT NULL,
  `usagedetails` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`plant`, `category`, `disease`, `usagedetails`) VALUES
('thulasi', 'grass', 'fever', 'test data'),
('thulasi', 'grass', 'fever', 'test data'),
('thulasi', 'grass', 'fever', 'test data'),
('thulasi', 'grass', 'fever', 'hello'),
('thulasi', 'grass', 'fever', 'test data'),
('thulasi', 'grass', 'fever', 'hekkiidfhdjfhjlf\r\n'),
('thulasi', 'grass', 'cough', 'hello'),
('thulasi', 'grass', 'cough', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

DROP TABLE IF EXISTS `diseases`;
CREATE TABLE `diseases` (
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='list of diseases';

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`name`) VALUES
('cough'),
('fever');

-- --------------------------------------------------------

--
-- Table structure for table `first-aid`
--

DROP TABLE IF EXISTS `first-aid`;
CREATE TABLE `first-aid` (
  `injury-id` int(11) NOT NULL,
  `injury-type` varchar(500) NOT NULL,
  `first-aid-procedure` text NOT NULL,
  `precautions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='details for first aid procedures';

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

DROP TABLE IF EXISTS `plants`;
CREATE TABLE `plants` (
  `name` varchar(255) NOT NULL,
  `scientific_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='list of plant names';

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`name`, `scientific_name`) VALUES
('thulasi', 'Ocimum tenuiflorum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`type`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD KEY `plant_FK` (`plant`),
  ADD KEY `category_FK` (`category`),
  ADD KEY `disease_FK` (`disease`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `first-aid`
--
ALTER TABLE `first-aid`
  ADD PRIMARY KEY (`injury-id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`scientific_name`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `scientific_name` (`scientific_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `category_FK` FOREIGN KEY (`category`) REFERENCES `categories` (`type`),
  ADD CONSTRAINT `disease_FK` FOREIGN KEY (`disease`) REFERENCES `diseases` (`name`),
  ADD CONSTRAINT `plant_FK` FOREIGN KEY (`plant`) REFERENCES `plants` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
