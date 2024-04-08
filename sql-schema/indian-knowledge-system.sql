-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2024 at 07:33 AM
-- Server version: 11.2.2-MariaDB
-- PHP Version: 8.3.2

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indian-knowledge-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `art-form-details`
--

CREATE TABLE `art-form-details` (
  `name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `type` varchar(500) NOT NULL
) ;

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

CREATE TABLE `details` (
  `plant` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `disease` varchar(200) NOT NULL,
  `usagedetails` longtext NOT NULL
) ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`plant`, `category`, `disease`, `usagedetails`) VALUES
('Thulasi', 'shrub', 'fever', 'boil leaves of thulasi breathe it in'),
('Neem', 'grass', 'fever', 'boil neem leaves');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `name` varchar(500) NOT NULL
) ;

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

CREATE TABLE `first-aid` (
  `injury-id` int(11) NOT NULL,
  `injury-type` varchar(500) NOT NULL,
  `first-aid-procedure` text NOT NULL,
  `precautions` text NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `name` varchar(255) NOT NULL,
  `scientific_name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`name`, `scientific_name`, `description`) VALUES
('Neem', 'Azadirachta indica', '<p>\r\nAzadirachta indica, commonly known as neem, margosa, nimtree or Indian lilac, is a tree in the mahogany family Meliaceae. It is one of two species in the genus Azadirachta.\r\n</p>\r\n<p>\r\n It is native to the Indian subcontinent and to parts of Southeast Asia, but is naturalized and grown around the world in tropical and subtropical areas. Its fruits and seeds are the source of neem oil. Nim is a Hindustani noun derived from Sanskrit nimba\r\n</p>'),
('Thulasi', 'Ocimum tenuiflorum', '<p>\r\nOcimum tenuiflorum, commonly known as holy basil or tulsi, is an aromatic perennial plant in the family Lamiaceae.It is native to tropical and subtropical regions of Australia, Malesia, Asia, and the western Pacific. It is widely cultivated throughout the Southeast Asian tropics.This plant has escaped from cultivation and has naturalized in many tropical regions of the Americas.\r\n</p>\r\n<p>\r\n It is an agricultural and environmental weed.Tulasi is cultivated for religious and traditional medicine purposes, and also for its essential oil. It is widely used as a herbal tea, commonly used in Ayurveda, and has a place within the Vaishnava tradition of Hinduism, in which devotees perform worship involving holy basil plants or leaves.\r\n</p>\r\n');

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
