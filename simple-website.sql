-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 04:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `mp_pages`
--

CREATE TABLE `mp_pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_desc` text,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `parent` varchar(255) NOT NULL DEFAULT '0',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `page_alias` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `Offername` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`Offername`) VALUES
('@@ Dominos Offer 500/- OFF !!!'),
('@@!! Paytm OFFER Free 1000/- Voucher !!@@'),
('Avail 40% Discount on Flipkart.com !!!!'),
('Get 2 days Unlimited Airtel 3G Internet!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `ola`
--

CREATE TABLE `ola` (
  `userid` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `date` varchar(12) NOT NULL,
  `address` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ola`
--

INSERT INTO `ola` (`userid`, `mobile`, `city`, `date`, `address`) VALUES
('sushabhardy', '9790008057', 'Bhubaneshwar', '02/11/2016', 'Motinagar'),
('sushabhardy', '8956033777', 'madurai', '02/12/2016', 'sham nagar'),
('srijan', '979000085', 'katpadi', '02/11/2016', 'kanuaght place'),
('asd', '877', 'katpadi', '02/11/2016', 'asd'),
('pulkit', '979078689', 'vellore', '02/11/2016', 'lal kila '),
('sushabh1234', '9790008057', 'vellore', '02/12/2016', 'mangal');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `Name` varchar(15) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `BirthPreference` varchar(10) NOT NULL,
  `Class` varchar(4) NOT NULL,
  `Nationality` varchar(10) NOT NULL,
  `TrainNumber` int(10) NOT NULL,
  `TrainName` varchar(20) NOT NULL,
  `pnr` int(5) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`Name`, `Age`, `Gender`, `BirthPreference`, `Class`, `Nationality`, `TrainNumber`, `TrainName`, `pnr`, `username`) VALUES
('sushabh', 19, '', 'lower', '2A', 'Indian', 12296, 'Yeracud', 25687, 'sushabhardy'),
('sharmila', 22, '', 'lower', '2A', 'Indian', 22562, 'navyug', 25684, 'sharmila'),
('sushabh', 19, '', 'lower', '2A', 'Indian', 12296, 'Yeracud', 25686, 'sushabhardy'),
('sushabh', 19, '', 'lower', '2A', 'Indian', 12296, 'Yeracud', 25685, 'sushabhardy'),
('sashwat', 19, 'm', 'sideupper', '3A', 'Indian', 22652, 'Palani', 25688, 'sashwat'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25689, 'srijan'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25690, 'srijan'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25691, 'srijan'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25692, 'srijan'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25693, 'srijan'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25694, 'srijan'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25695, 'srijan'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25696, 'srijan'),
('ganesh', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25697, 'srijan'),
('ganeshj', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25698, 'srijan'),
('ganeshj', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25699, 'srijan'),
('ganeshj', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25700, 'srijan'),
('ganeshj', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25701, 'srijan'),
('ganeshj', 18, 'm', 'lower', '2A', 'indian', 12509, 'guwahati', 25702, 'srijan'),
('pulkit', 19, 'm', 'lower', '2A', 'Indian', 56214, 'uiy', 25703, 'pulkit');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `TrainNo` int(10) NOT NULL,
  `TrainName` varchar(50) NOT NULL,
  `FromStation` varchar(15) NOT NULL,
  `ToStation` varchar(15) NOT NULL,
  `Departure` time(4) NOT NULL,
  `Arrival` time(4) NOT NULL,
  `Distance` int(5) NOT NULL,
  `SeatsAvailable` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`TrainNo`, `TrainName`, `FromStation`, `ToStation`, `Departure`, `Arrival`, `Distance`, `SeatsAvailable`) VALUES
(22650, 'Yeracud Express', 'Katpadi', 'Chennai', '01:30:00.0000', '04:05:00.0000', 130, 16),
(22652, 'Palani MAS Express', 'Katpadi', 'Chennai', '01:30:00.0000', '04:05:00.0000', 130, 27),
(12658, 'Chennai MAIL', 'Katpadi', 'Chennai', '02:10:00.0000', '04:15:00.0000', 130, 32),
(12672, 'Nilagiri Express', 'Katpadi', 'Chennai', '02:25:00.0000', '05:05:00.0000', 130, 45),
(22681, 'Chennai Express', 'Katpadi', 'Chennai', '05:15:00.0000', '02:30:00.0000', 130, 76),
(12602, 'Chennai MAIL', 'Katpadi', 'Chennai', '05:40:00.0000', '02:25:00.0000', 130, 56),
(12509, 'Guwahati Express', 'Katpadi', 'Chennai', '03:20:00.0000', '06:05:00.0000', 130, 19),
(16022, 'Kaveri Express', 'Katpadi', 'Chennai', '04:10:00.0000', '07:00:00.0000', 130, 45),
(12674, 'Cheran Express', 'Katpadi', 'Chennai', '04:15:00.0000', '06:45:00.0000', 130, 12),
(12687, 'Dehradun Express', 'Katpadi', 'Chennai', '07:05:00.0000', '09:20:00.0000', 130, 31),
(15227, 'Muzaffarpur  Express', 'Katpadi', 'Chennai', '07:10:00.0000', '09:30:00.0000', 130, 15),
(12696, 'TVC Chennai Express', 'Katpadi', 'Chennai', '07:45:00.0000', '10:00:00.0000', 130, 11),
(12028, 'Shatabdi Express', 'Katpadi', 'Chennai', '09:00:00.0000', '11:00:00.0000', 130, 34),
(12608, 'Lalbagh Express ', 'Katpadi', 'Chennai', '09:50:00.0000', '12:15:00.0000', 130, 17),
(22208, 'Super AC Express', 'Katpadi ', 'Chennai', '09:55:00.0000', '12:00:00.0000', 130, 60),
(22638, 'West Coast Express', 'Katpadi', 'Chennai', '12:15:00.0000', '14:40:00.0000', 130, 8),
(12295, 'Sanghamitra Express', 'Katpadi', 'Chennai', '12:40:00.0000', '15:15:00.0000', 130, 14),
(22626, 'Mass Double Deck', 'Katpadi', 'Chennai', '18:00:00.0000', '20:30:00.0000', 130, 90),
(12640, 'Brindavan Express', 'Katpadi', 'Chennai', '18:30:00.0000', '21:05:00.0000', 130, 5),
(13352, 'Dhanbad Express', 'Katpadi', 'Chennai', '18:40:00.0000', '21:55:00.0000', 130, 29),
(12676, 'Kovai Express', 'Katpadi', 'Chennai', '20:05:00.0000', '22:25:00.0000', 130, 12),
(22648, 'Korba Express', 'Katpadi', 'Chennai', '20:55:00.0000', '23:05:00.0000', 130, 13),
(56214, 'TPTY CMNR Pass', 'Katpadi', 'Bengaluru', '00:10:00.0000', '06:25:00.0000', 228, 13),
(12889, 'Tata YPR Express', 'Katpadi', 'Bengaluru', '00:30:00.0000', '05:00:00.0000', 238, 56),
(12657, 'Bangalore Mail', 'Katpadi', 'Bengaluru', '00:55:00.0000', '04:31:00.0000', 228, 8),
(12863, 'HWH YPR Express', 'Katpadi', 'Bengaluru', '01:52:00.0000', '07:15:00.0000', 241, 11),
(12007, 'Shatabdi Express', 'Katpadi', 'Bengaluru', '07:30:00.0000', '10:50:00.0000', 232, 19),
(17210, 'Sheshadri Express', 'Katpadi', 'Bengaluru', '07:55:00.0000', '11:48:00.0000', 228, 0),
(22625, 'SBC Double Deck', 'Katpadi', 'Bengaluru', '09:05:00.0000', '12:33:00.0000', 228, 9),
(12639, 'Vrindavan Express', 'Katpadi', 'Bengaluru', '09:40:00.0000', '13:18:00.0000', 228, 8),
(12540, 'LKO YPR SUP Express', 'Katpadi', 'Bengaluru', '11:20:00.0000', '16:40:00.0000', 238, 22),
(12609, 'Bangaloire Express', 'Katpadi', 'Bengaluru', '15:30:00.0000', '19:33:00.0000', 228, 19),
(12296, 'Sanghamitra Express', 'Katpadi', 'Bengaluru', '16:00:00.0000', '19:58:00.0000', 228, 7),
(22351, 'PPTA YPR Express', 'Katpadi', 'Bengaluru', '16:30:00.0000', '20:55:00.0000', 238, 10),
(22618, 'TPTY SBC Express', 'Katpadi', 'Bengaluru', '16:35:00.0000', '20:08:00.0000', 238, 1),
(22698, 'MAS HUBLI Express', 'Katpadi', 'Bengaluru', '16:45:00.0000', '21:35:00.0000', 228, 12),
(12607, 'Lalbagh Express', 'Katpadi', 'Bengaluru', '17:30:00.0000', '21:08:00.0000', 238, 15),
(16021, 'Kaveri Express', 'Katpadi', 'Bengaluru', '23:10:00.0000', '02:55:00.0000', 238, 10),
(17605, 'MAQ KCG Express', 'Katpadi', 'Hyderabad', '10:05:00.0000', '03:30:00.0000', 759, 18),
(17229, 'Sabari Express', 'Katpadi', 'Hyderabad', '22:40:00.0000', '13:40:00.0000', 775, 22),
(17616, 'Kacheguda Express', 'Katpadi', 'Hyderabad', '23:27:00.0000', '14:00:00.0000', 726, 8),
(12681, 'Coimbatore Express', 'Katpadi', 'Coimbatore', '00:05:00.0000', '06:40:00.0000', 367, 15),
(12511, 'Rapti Sagar Express', 'Katpadi', 'Coimbatore', '01:35:00.0000', '07:42:00.0000', 367, 11),
(17230, 'Sabari Express', 'Katpadi', 'Coimbatore', '02:35:00.0000', '08:40:00.0000', 367, 24),
(18189, 'TATA ALLP Express', 'Katpadi', 'Coimbatore', '04:15:00.0000', '11:00:00.0000', 366, 20),
(13351, 'DHN ALAPUZHA E', 'Katpadi', 'Coimbatore', '04:30:00.0000', '11:00:00.0000', 367, 2),
(22644, 'PNBE ERS Express', 'Katpadi', 'Coimbatore', '06:25:00.0000', '11:55:00.0000', 366, 10),
(12508, 'GHY TVC Express', 'Katpadi', 'Coimbatore', '06:55:00.0000', '13:20:00.0000', 366, 13),
(12675, 'Kovai Express', 'Katpadi', 'Coimbatore', '08:00:00.0000', '13:45:00.0000', 367, 77),
(16688, 'Navyug Express', 'Katpadi', 'Coimbatore', '08:42:00.0000', '15:00:00.0000', 365, 0),
(7115, 'HYB KCVL SPL', 'Katpadi', 'Coimbatore', '12:35:00.0000', '18:45:00.0000', 367, 6),
(22637, 'West Coast Express', 'Katpadi', 'Coimbatore', '13:20:00.0000', '19:25:00.0000', 356, 88),
(12697, 'Trivandrum Express', 'Katpadi', 'Coimbatore', '16:50:00.0000', '22:23:00.0000', 367, 76),
(16381, 'Kanyakumari Express', 'Katpadi', 'Coimbatore', '17:45:00.0000', '23:45:00.0000', 367, 30),
(22639, 'ALLEPPEY Express', 'Katpadi', 'Coimbatore', '22:20:00.0000', '03:52:00.0000', 367, 19),
(16381, 'Kanyakumari Express', 'Katpadi', 'Kanyakumari', '17:45:00.0000', '12:35:00.0000', 879, 7),
(16688, 'Navyug Express', 'Katpadi', 'Kodaikanal', '08:42:00.0000', '18:24:00.0000', 528, 60),
(16779, 'TPTY RMM Express', 'Katpadi', 'Kodaikanal', '15:42:00.0000', '02:58:00.0000', 523, 10),
(12864, 'YPR Howrah Express', 'Katpadi', 'Bhubaneshwar', '00:30:00.0000', '22:50:00.0000', 1283, 78),
(22641, 'Shalimar Express', 'Katpadi', 'Bhubaneshwar', '07:10:00.0000', '06:05:00.0000', 1353, 11),
(22852, 'SRC Vivek Express', 'Katpadi', 'Bhubaneshwar', '12:40:00.0000', '11:20:00.0000', 1283, 9),
(12688, 'DDN MDU SF Express', 'Katpadi', 'Madurai', '04:25:00.0000', '12:45:00.0000', 472, 65),
(22688, 'CDG MDU SF Express', 'Katpadi', 'Madurai', '04:25:00.0000', '12:45:00.0000', 472, 111),
(16779, 'TPTY RMM Express', 'Katpadi', 'Madurai', '15:42:00.0000', '04:00:00.0000', 563, 11),
(16688, 'Navyug Express', 'Katpadi', 'Trichy', '08:42:00.0000', '16:40:00.0000', 408, 15),
(16779, 'TPTY RMM Express', 'Katpadi', 'Trichy', '15:42:00.0000', '00:55:00.0000', 403, 16);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `account` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`account`) VALUES
('612'),
('612'),
('433'),
('612'),
('0'),
('612'),
('612'),
('612'),
('612'),
('612');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(3, 'sushabhardy', 'asd', 'sushabh.deshmukh@gmail.com'),
(5, 'srijan', 'asd123', 'srijan@gmail.com'),
(6, 'manish', 'manish123', 'manish@gmail.com'),
(7, 'shaurya', 'shaurya123', 'shaurya@gmail.com'),
(8, 'ganesh', 'ganesh123', 'ganesh@gmail.com'),
(9, 'gundeep', 'gundeep123', 'gundeep@gmail.com'),
(10, 'shivali232', 'sek48', 'shivali@gmail.com'),
(11, 'shah', 'shah123', 'shah@gmail.com'),
(12, 'ansaf', 'ansaf78', 'ansaf@rediffmail.com'),
(13, 'manish kedia', 'mak', 'm.k.kedia1996@gmail.com'),
(14, 'makd', 'mak', 'm.k.kedia1996@gmail.c'),
(15, 'srijan1', 'asd', 'srijan1@gmail.com'),
(16, 'ronit', 'asd', 'ronit@gmail.com'),
(17, 'sushabh123', 'boyzonewords123', 'sushabh@gmail.com'),
(18, 'robert', 'abcdef', 'robert@mail.com'),
(19, 'ryuio', 'cfgfttg8yt', 'yguui@gmail.com'),
(20, 'sushabh1234', '123', 'sushabh1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `name` varchar(20) NOT NULL,
  `balance` int(10) NOT NULL,
  `ifsc` varchar(10) NOT NULL,
  `account` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`name`, `balance`, `ifsc`, `account`) VALUES
('sushabh', 3000, 'idib768', 0),
('shivang', 4000, 'idib383', 612),
('aa', 12, 'ad1', 433);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mp_pages`
--
ALTER TABLE `mp_pages`
  ADD PRIMARY KEY (`page_id`),
  ADD UNIQUE KEY `page_name` (`page_alias`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD KEY `pnr` (`pnr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mp_pages`
--
ALTER TABLE `mp_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `pnr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25705;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
