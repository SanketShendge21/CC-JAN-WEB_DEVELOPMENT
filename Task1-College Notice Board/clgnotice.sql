-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 02:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clgnotice`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`date`, `title`, `description`) VALUES
('2023-01-26', 'DevCup Hackathon', 'We are thrilled to announce that our college team has won prize in the DevCup Hackathon which held in December 2022, an intercollegiate competition that was hosted as a part of the ACM Convention Event. The team developed an Artificial Intelligence based fitness position and secured rank 1.'),
('2023-01-20', 'Faculty Development Program', 'This Faculty Development Program cum Workshop is designed\r\nto equip the participants with all aspects of Essential oils.\r\nEssential oils are important in various fields like medicine,\r\npharmacy, nutrition, perfumery, textile, biofuels. There is a good\r\nblend of theory and practicals covering classical as well as\r\nadvanced technology coupled with industrial visit in this\r\nprogram.\r\nThe program gives an excellent opportunity to the participants\r\nto interact with experts in industry.'),
('2023-01-23', 'Suspension of Water Supply', 'ATTENTION!\r\nThis notice is to inform all the students regarding the suspension of water supply for 8 hours in hostels. It is being done to clean the water tank. The details are as follows:\r\nDATE- March 6\r\nTIME- 10am – 6 pm\r\nThus, we request you to store the required amount of water beforehand to minimise the difficulty. Thank you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD UNIQUE KEY `title` (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
