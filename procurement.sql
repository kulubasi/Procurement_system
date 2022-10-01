-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 02:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procurement`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(200) NOT NULL,
  `a_id` int(11) NOT NULL,
  `tender` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `person` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `doc1` varchar(200) NOT NULL,
  `doc2` varchar(200) NOT NULL,
  `doc3` varchar(200) NOT NULL,
  `dat` date NOT NULL,
  `user` varchar(100) NOT NULL,
  `price` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `a_id`, `tender`, `name`, `adress`, `person`, `title`, `email`, `contact`, `doc1`, `doc2`, `doc3`, `dat`, `user`, `price`) VALUES
(1, 1, '', '', '', '', '', '', '', 'NEGOTIATION STRATEGY AND PLANNING.pptx', '', '', '2022-09-21', '', ''),
(1, 2, 'chairs', '', '', '', '', '', '', 'NEGOTIATION STRATEGY AND PLANNING.pptx', '', '', '2022-09-21', '', ''),
(1, 3, 'chairs', 'Muni', 'Arua', 'John', 'Manager', 'nkwineinnocent5@gmail.com', '0785287421', 'NEGOTIATION STRATEGY AND PLANNING.pptx', 'TOPIC 2 (1).pptx', 'NATURE OF NEGOTIATION (1).pptx', '2022-09-21', '', ''),
(1, 4, 'chairs', 'Muni', 'Arua', 'John', 'manager', 'nkwineinnocent5@gmail.com', '0785287421', 'y2mate.com - Ebibi byangye Yesu Akabyekorera HYMN 185 Runyankole Rukiga Church Of Uganda (2).mp3', 'y2mate.com - 250 IRA NKABA NINGIRA NTIRUNYANKORERUKIGA HYMNS.mp3', 'y2mate.com - Ira kunabaire ngwejegiire Hati Igura Runyankole Rukiga Hymn with New English Lyrics Song.mp3', '2022-09-21', '', ''),
(1, 5, 'chairs', 'Muni', 'Arua', 'John', 'manager', 'nkwineinnocent5@gmail.com', '0785287421', 'y2mate.com - Ebibi byangye Yesu Akabyekorera HYMN 185 Runyankole Rukiga Church Of Uganda (2).mp3', 'y2mate.com - 250 IRA NKABA NINGIRA NTIRUNYANKORERUKIGA HYMNS.mp3', 'y2mate.com - Ira kunabaire ngwejegiire Hati Igura Runyankole Rukiga Hymn with New English Lyrics Song.mp3', '2022-09-21', '', ''),
(1, 6, 'chairs', 'Muni', 'Arua', 'John', 'V.C', '1901200153@muni.ac.ug', '0785287422', 'NEGOTIATION STRATEGY AND PLANNING.pptx', 'TOPIC 2 (1).pptx', 'NATURE OF NEGOTIATION (1).pptx', '2022-09-21', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `oimage` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `rp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `publish`
--

CREATE TABLE `publish` (
  `id` int(100) NOT NULL,
  `a_id` int(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `specification` text NOT NULL,
  `doc1` varchar(100) NOT NULL,
  `doc2` varchar(100) NOT NULL,
  `doc3` varchar(100) NOT NULL,
  `requirements` text NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publish`
--

INSERT INTO `publish` (`id`, `a_id`, `item`, `qty`, `type`, `specification`, `doc1`, `doc2`, `doc3`, `requirements`, `deadline`) VALUES
(1, 1, 'chairs', '20	', '', '', '', '', '', '', '0000-00-00'),
(1, 2, 'chairs', '20	', 'office chairs', 'They must be of medium height', 'license', 'tax clearance', 'financial statement', 'The tenders must have been in the business for more than 4 years', '2022-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `requestor` varchar(100) NOT NULL,
  `dat` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `item`, `qty`, `purpose`, `requestor`, `dat`, `processor`, `department`, `status`) VALUES
(1, 'chairs', '20', 'for lecturers in the staff', 'abdu', '2022-09-16 ', 'annet', 'Computer science', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `email` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`email`, `fname`, `lname`, `username`, `tel`, `pswd`) VALUES
('tikol@yahoo.com', 'tiko', 'lucy', 'lucyt', '0787009988', 'lucyt22');

-- --------------------------------------------------------

--
-- Table structure for table `tr`
--

CREATE TABLE `tr` (
  `id` int(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `user` varchar(100) NOT NULL,
  `a` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr`
--

INSERT INTO `tr` (`id`, `file`, `user`, `a`) VALUES
(1, '', 'john', ''),
(1, 'TOPIC 2 (1).pptx', 'john', ''),
(1, 'tr-file (1).bin', 'tr-file.bin', ''),
(1, 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3'),
(1, 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', 'y2mate.com - TINDIITWA NSHONI NA KAKYE  RUNYANKORE RUKIGA ZABURI HYMN 214.mp3', 'y2mate.com - Ebibi byangye Yesu Akabyekorera HYMN 185 Runyankole Rukiga Church Of Uganda (1).mp3'),
(1, 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', 'y2mate.com - TINDIITWA NSHONI NA KAKYE  RUNYANKORE RUKIGA ZABURI HYMN 214.mp3', 'y2mate.com - Ebibi byangye Yesu Akabyekorera HYMN 185 Runyankole Rukiga Church Of Uganda (1).mp3'),
(1, 'TOPIC 2 (1).pptx', 'MIS Chapter 4 Flashcards _ Quizlet.pdf', 'NATURE OF NEGOTIATION (1).pptx'),
(1, '', '', ''),
(1, 'NEGOTIATION STRATEGY AND PLANNING.pptx', 'NATURE OF NEGOTIATION (1).pptx', 'TOPIC 2 (1).pptx'),
(1, 'y2mate.com - Marvin Gaye  Sexual Healing Official HD Video_1080p.mp4', '', ''),
(1, 'y2mate.com - Marvin Gaye  Sexual Healing Official HD Video_1080p.mp4', '', ''),
(1, 'y2mate.com - Marvin Gaye  Sexual Healing Official HD Video_1080p.mp4', '', ''),
(1, 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', '', ''),
(1, 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', '', ''),
(1, 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', '', ''),
(1, 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', '', ''),
(1, 'y2mate.com - 208  NKABONA RUNYANKORERUKIGA HYMNS.mp3', '', ''),
(1, '', '', 'y2mate.com - TINDIITWA NSHONI NA KAKYE  RUNYANKORE RUKIGA ZABURI HYMN 214.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `department`, `position`, `email`, `contact`, `username`, `password`, `cod`) VALUES
(1, 'Nkwine', 'Innocent', 'Education', 'HOD', 'nkwineinnocent@gmail.com', '0785287421', 'inno', '123', 1),
(2, 'Kulubasi', 'Laban', 'None', 'System admin', 'laban@gmail.com', '0785287422', 'lab', '123', 3),
(3, '', '', 'agriculture', 'staff', 'nkwineinnocent@gmail.com', '0785287420', 'iga', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publish`
--
ALTER TABLE `publish`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publish`
--
ALTER TABLE `publish`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
