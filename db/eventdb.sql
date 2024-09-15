-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 08:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE eventdb;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_tickets`
--

CREATE TABLE eventdb.booked_tickets(
  `order_no` int(11) NOT NULL,
  `event_name` varchar(30) DEFAULT NULL,
  `UniqueId` int(11) DEFAULT NULL,
  `no_of_tickets` int(11) DEFAULT NULL,
  `userId` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_tickets`
--

INSERT INTO eventdb.booked_tickets (`order_no`, `event_name`, `UniqueId`, `no_of_tickets`, `userId`) VALUES
(2, 'Saturnalia', 27908828, 10, '3'),
(3, 'Saturnalia', 83519241, 10, '3'),
(4, 'Virsa', 98092184, 10, '3'),
(7, 'TFF', 77875896, 1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `eventlist`
--

CREATE TABLE eventdb.eventlist(
  `eventId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Short_desc` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `Venue` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlist`
--
CREATE TABLE eventdb.admins (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL
);

INSERT INTO eventdb.eventlist (`eventId`, `Name`, `Description`, `Short_desc`, `image`, `seats`, `Venue`, `price`) VALUES
(1, 'Saturnalia', 'Tap your feet and hold your heartbeat! Let the winds of his voice take you on a journey to the far and beyond! Gear up for a power-packed on-stage performance and a truly memorable night as Saturnalia arrives soon.', 'A fest that will leave you with million memories.', 'sat.jpg', 400, 'OAT Thapar', 650),
(2, 'Thapar Food Festival', 'Experience a fusion of gaming nostalgia and gourmet delights at the Thapar Food Festival. From pixel-perfect burgers to joystick-themed desserts, every plate is a flavor-packed playfield.', 'Unfurling a flavoursome saga of cinematic temptation!', 'ff.jpg', 450, 'Cos Ground', 4000),
(3, 'MudraNite', 'Step into a realm of pure enchantment under the starry night sky, where every moment ignites with the irresistible allure of dance, the riveting drama of storytelling, the enthralling symphony of music, and the stunning elegance of fashion.', 'To the stars through desires!', 'mudra.jpg', 1000, 'OAT Thapar', 50),
(4, 'VirsaMela', 'VIRSA MELA is a stage to showcase the most assorted and vivid culture in India. It will disclose you in elation and illuminate the festive mood. The village sight and the glint of lamps make the evening more stunning.', 'Virsa\'s annual extravaganza \'MELA\' is back.', 'vv.jpeg', 0, 'K-lawns', 200),
(5, 'Izhaar', 'MUDRA is here to give you the push you need with our exhilarating events on their way which will provide you with the opportunity you just needed to shine and sparkle!', 'The most mirthful event of our college, IZHAAR, is back!! ', 'izhaar.jpg', 0, 'MainAudi OAT', 370);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE eventdb.user(
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO eventdb.user (`userId`, `userName`, `password`, `status`) VALUES
(1, 'admin', 'admin', 101),
(3, 'user', 'user', 202);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_tickets`
--
ALTER TABLE eventdb.booked_tickets
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `eventlist`
--
ALTER TABLE eventdb.eventlist
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `user`
--
ALTER TABLE eventdb.user
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_tickets`
--
ALTER TABLE eventdb.booked_tickets
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `eventlist`
--
ALTER TABLE eventdb.eventlist
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE eventdb.user
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
DESCRIBE eventdb.eventlist;

