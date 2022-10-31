-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 04:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

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
(2, 8, 'Supply of office chairs', 'ICT Specialists', 'Arua', 'Abdu', 'Manager', 'nkwineinnocent@gmail.com', '0785287421', 'Assignment one.docx', 'Assignment one.docx', 'Assignment one.docx', '2022-10-11', 'john', ''),
(2, 9, 'Supply of office chairs', 'ICT Specialists', 'Arua', 'Laban', 'manager', 'nkwineinnocent@gmail.com', '0785287421', 'What is a GDSC.docx', 'Capture.PNG', 'Copy of dsc-event-template.ai', '2022-10-17', 'john', ''),
(3, 10, 'Supply of Printers', 'ICT Specialists', 'Arua', 'John', 'manager', 'nkwineinnocent@gmail.com', '0785287421', 'Assignment1.pptx', 'Assignment1.pptx', 'Assignment1.pptx', '2022-10-20', 'john', ''),
(3, 11, 'Supply of Printers', 'ICT Arua', 'Arua', 'Denis', 'manager', 'd078528742@gmail.com', '0785287421', 'data.docx', 'data.docx', 'data.docx', '2022-10-20', 'den', ''),
(3, 12, 'Supply of Printers', 'Kampug', 'Kampala', 'Karim', 'manager', 'Karim@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'it security.docx', '2022-10-20', 'karim', ''),
(3, 13, 'Supply of Printers', 'danug', 'Kampala', 'Daneil', 'manager', 'Daniel@gmail.com', '0785287421', 'data.docx', 'it security.docx', 'it security.docx', '2022-10-20', 'dan', ''),
(3, 14, 'Supply of Printers', 'Praise.comp', 'Arua', 'Praise', 'Manager', 'Praise@gmail.com', '0785287421', 'data.docx', 'data.docx', 'data.docx', '2022-10-20', 'praise', ''),
(3, 15, 'Supply of Printers', 'Patiemedia', 'Soroti', 'Patie', 'manager', 'Patie@gmail.com', '0785287421', 'class.csv', 'class.csv.xlsx', 'class.csv', '2022-10-20', 'Patie', ''),
(3, 16, 'Supply of Printers', 'ugmedia', 'Jinja', 'Joshua', 'Manager', 'Joshua@gmail.com', '0785287421', 'class.csv', 'class.csv', 'it security.docx', '2022-10-20', 'maga', ''),
(3, 17, 'Supply of Printers', 'Kakurutech', 'Kampala', 'Kakuru', 'Director', 'Kakuru@gmail.com', '0785287421', 'data.docx', 'class.csv', 'data.docx', '2022-10-20', 'Kakuru', ''),
(3, 18, 'Supply of Printers', 'ICT ug', 'Kabale', 'Igni', 'Manager', 'igni@gmail.com', '0785287421', 'data.docx', 'class.csv', 'it security.docx', '2022-10-20', 'Igni', ''),
(3, 19, 'Supply of Printers', 'Leon ltd', 'Kampala', 'Leon', 'manager', 'Leon@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'it security.docx', '2022-10-20', 'Leon', ''),
(3, 20, 'Supply of Printers', 'Ndrew comp ltd', 'Kampala', 'Ndrew', 'Director', 'Ndrew@gmail.com', '0785287421', 'class.csv', 'it security.docx', 'it security.docx', '2022-10-20', 'ndrew', ''),
(3, 21, 'Supply of Printers', 'Amos comp', 'Masaka', 'Amos', 'manager', 'Amos@gmail.com', '0785287421', 'data.docx', 'data.docx', 'it security.docx', '2022-10-20', 'amos', ''),
(3, 22, 'Supply of Printers', 'Ochola ict', 'Gulu', 'Ochola', 'Director', 'Ochola@gmail.com', '0785287421', 'data.docx', 'class.csv.xlsx', 'class.csv', '2022-10-20', 'ochola', ''),
(3, 23, 'Supply of Printers', 'Sande comp', 'Kabale', 'Sande', 'Director', 'Sande@gmail.com', '0785287421', 'it security.docx', 'data.docx', 'it security.docx', '2022-10-20', 'sande', ''),
(3, 24, 'Supply of Printers', 'Abaho ltd', 'Arua', 'Abaho', 'Director', 'Abaho@gmail.com', '0785287421', 'data.docx', 'it security.docx', 'it security.docx', '2022-10-20', 'abaho', ''),
(3, 25, 'Supply of Printers', 'Tadeo unix', 'Jinja', 'Tadeo', 'Director', 'Tadeo@gmail.com', '0785287421', 'data.docx', 'data.docx', 'data.docx', '2022-10-20', 'tadeo', ''),
(3, 26, 'Supply of Printers', 'Mark comp', 'Masaka', 'Mark', 'Director', 'Mark@gmail.com', '0785287421', 'data.docx', 'it security.docx', 'it security.docx', '2022-10-20', 'mark', ''),
(3, 27, 'Supply of Printers', 'Vicent tech', 'Arua', 'Vicent', 'Manager', 'Vicent@gmail.com', '0785287421', 'data.docx', 'class.csv.xlsx', 'class.csv.xlsx', '2022-10-20', 'vicent', ''),
(3, 28, 'Supply of Printers', 'Jackson ug', 'Kamuli', 'Jackson', 'Director', 'Jackson@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'class.csv', '2022-10-20', 'jackson', ''),
(3, 29, 'Supply of Printers', 'Julie comp', 'Kampala', 'Julie', 'Director', 'Julie@gmail.com', '0785287421', 'data.docx', 'it security.docx', 'data.docx', '2022-10-20', 'julie', ''),
(3, 30, 'Supply of Printers', 'Annah tech', 'Arua', 'Annah', 'Manager', 'Annah@gmail.com', '0785287421', 'it security.docx', 'data.docx', 'data.docx', '2022-10-20', 'annah', ''),
(3, 31, 'Supply of Printers', 'Annet ltd', 'Masaka', 'Annet', 'Manager', 'Annet@gmail.com', '0785287421', 'data.docx', 'it security.docx', 'class.csv.xlsx', '2022-10-20', 'annet', ''),
(3, 32, 'Supply of Printers', 'Joan tech ltd', 'Jinja', 'Joan', 'Manager', 'Joan@gmail.com', '0785287421', 'class.csv.xlsx', 'class.csv.xlsx', 'class.csv.xlsx', '2022-10-20', 'joan', ''),
(3, 33, 'Supply of Printers', 'Juliet tech', 'Kamuli', 'Juliet', 'Manager', 'Juliet@gmail.com', '0785287421', 'Assignment1.pptx', 'Assignment1.pptx', 'Assignment1.pptx', '2022-10-20', 'juliet', ''),
(9, 34, 'Supply of computers', 'ICT Specialists', 'Arua', 'John', 'manager', 'nkwineinnocent@gmail.com', '0785287421', 'Assignment1.pptx', 'data.docx', 'it security.docx', '2022-10-30', 'john', ''),
(8, 35, 'Supply of chairs', 'ICT Specialists', 'Arua', 'John', 'manager', 'nkwineinnocent@gmail.com', '0785287421', 'class.csv.xlsx', 'class.csv.xlsx', 'it security.docx', '2022-10-30', 'john', ''),
(7, 36, 'Supply of switch', 'ICT Specialists', 'Arua', 'Denis', 'manager', 'nkwineinnocent@gmail.com', '0785287421', 'it security.docx', 'class.csv.xlsx', 'data.docx', '2022-10-30', 'john', ''),
(6, 37, 'Supply of trucks', 'ICT Specialists', 'Arua', 'Daneil', 'director', 'nkwineinnocent@gmail.com', '0785287421', 'data.docx', 'class.csv.xlsx', 'it security.docx', '2022-10-30', 'john', ''),
(6, 38, 'Supply of trucks', 'ICT Specialists', 'Arua', 'Praise', 'manager', 'nkwineinnocent@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'it security.docx', '2022-10-30', 'john', ''),
(5, 39, 'Supply of projectors', 'ICT Specialists', 'Arua', 'joan', 'manager', 'nkwineinnocent@gmail.com', '0785287421', 'it security.docx', 'data.docx', 'data.docx', '2022-10-30', 'john', ''),
(4, 40, 'Supply of tables', 'ICT Specialists', 'Arua', 'joy', 'manager', 'nkwineinnocent@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'data.docx', '2022-10-30', 'john', ''),
(9, 41, 'Supply of computers', 'Praise.comp', 'Arua', 'Praise', 'manager', 'Praise@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'it security.docx', '2022-10-30', 'praise', ''),
(8, 42, 'Supply of chairs', 'Praise.comp', 'Arua', 'Praise', 'manager', 'Praise@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'it security.docx', '2022-10-30', 'praise', ''),
(7, 43, 'Supply of switch', 'Praise.comp', 'Arua', 'Praise', 'manager', 'Praise@gmail.com', '0785287421', 'data.docx', 'it security.docx', 'it security.docx', '2022-10-30', 'praise', ''),
(6, 44, 'Supply of trucks', 'Praise.comp', 'Arua', 'dankan', 'manager', 'Praise@gmail.com', '0785287421', 'class.csv', 'class.csv', 'data.docx', '2022-10-30', 'praise', ''),
(5, 45, 'Supply of projectors', 'Praise.comp', 'Arua', 'abel', 'manager', 'Praise@gmail.com', '0785287421', 'data.docx', 'it security.docx', 'data.docx', '2022-10-30', 'praise', ''),
(4, 46, 'Supply of tables', 'Praise.comp', 'Arua', 'keny', 'manager', 'Praise@gmail.com', '0785287421', 'data.docx', 'class.csv.xlsx', 'it security.docx', '2022-10-30', 'praise', ''),
(12, 47, 'Supply of routers', 'Kakurutech', 'Kampala', 'Joshua', 'manager', 'Kakuru@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'it security.docx', '2022-10-31', 'kakuru', ''),
(11, 48, 'Supply of kindle fire', 'Kakurutech', 'Kampala', 'Ronald', 'manager', 'Kakuru@gmail.com', '0785287421', 'data.docx', 'class.csv.xlsx', 'data.docx', '2022-10-31', 'kakuru', ''),
(10, 49, 'Supply of speakers', 'Kakurutech', 'Kampala', 'Pius', 'manager', 'Kakuru@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'it security.docx', '2022-10-31', 'kakuru', ''),
(12, 50, 'Supply of routers', 'Tadeo unix', 'Jinja', 'Tadeo', 'manager', 'Tadeo@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'it security.docx', '2022-10-31', 'tadeo', ''),
(11, 51, 'Supply of kindle fire', 'Tadeo unix', 'Jinja', 'Andrew', 'manager', 'Tadeo@gmail.com', '0785287421', 'it security.docx', 'it security.docx', 'data.docx', '2022-10-31', 'tadeo', ''),
(10, 52, 'Supply of speakers', 'Tadeo unix', 'Jinja', 'Keneth', 'manager', 'Tadeo@gmail.com', '0785287421', 'data.docx', 'it security.docx', 'it security.docx', '2022-10-31', 'tadeo', '');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(100) NOT NULL,
  `sup` varchar(100) NOT NULL,
  `tender` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phase` varchar(100) NOT NULL,
  `official` varchar(100) NOT NULL,
  `phase1` varchar(100) NOT NULL,
  `phase2` varchar(100) NOT NULL,
  `phase3` varchar(100) NOT NULL,
  `phase4` varchar(100) NOT NULL,
  `term` text NOT NULL,
  `dat` varchar(100) NOT NULL,
  `org` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `sup`, `tender`, `qty`, `price`, `contact`, `email`, `phase`, `official`, `phase1`, `phase2`, `phase3`, `phase4`, `term`, `dat`, `org`) VALUES
(1, 'Muni', 'Supply of  chairs', '20', '1500000', '0785287422', '1901200153@muni.ac.ug', '3', 'Iga Isaac', '2022-10-10', '2022-10-10', '2022-10-10', '', 'The supplier must deliver on time', '2022-10-05', 'muni'),
(3, 'Joan tech ltd', 'Supply of Printers', '5	', '1000000', '0785287421', 'Joan@gmail.com', '2', 'Iga Isaac', '2022-11-10', '2022-11-10', '', '', 'The supplier must bring 3 printers on the first shipment', '2022-10-20', 'muni'),
(5, 'Kakurutech', 'Supply of Printers', '5	', '950000', '0785287421', 'Kakuru@gmail.com', '2', 'Iga Isaac', '2022-11-20', '2022-11-20', '', '', 'The supplier must ship items on time', '2022-10-20', 'muni'),
(6, 'Praise.comp', 'Supply of computers', '20	', '1500000', '0785287421', 'Praise@gmail.com', '2', 'Iga Isaac', '2022-11-05', '2022-11-05', '', '', 'Timely delivery', '2022-10-30', 'muni'),
(7, 'Praise.comp', 'Supply of chairs', '50	', '100000', '0785287421', 'Praise@gmail.com', '3', 'Iga Isaac', '2022-11-20', '2022-11-20', '2022-11-20', '', 'timel delivery', '2022-10-30', 'muni'),
(8, 'ICT Specialists', 'Supply of switch', '3	', '2000000', '0785287421', 'nkwineinnocent@gmail.com', '1', 'Iga Isaac', '2022-11-05', '', '', '', 'Supperior quality is a must', '2022-10-30', 'muni'),
(9, 'Praise.comp', 'Supply of trucks', '5	', '40000000', '0785287421', 'Praise@gmail.com', '1', 'Iga Isaac', '', '', '', '', 'good quality is a must', '2022-10-30', 'muni'),
(10, 'Praise.comp', 'Supply of projectors', '4	', '1000000', '0785287421', 'Praise@gmail.com', '1', 'Iga Isaac', '2022-11-05', '', '', '', 'mantainance of the dates is a must', '2022-10-30', 'muni'),
(11, 'Praise.comp', 'Supply of tables', '14	', '400000', '0785287421', 'Praise@gmail.com', '1', 'Iga Isaac', '2022-11-25', '', '', '', 'Ensurance of the quality', '2022-10-30', 'muni'),
(12, 'Abaho ltd', 'Supply of Printers', '5	', '1100000', '0785287421', 'Abaho@gmail.com', '1', 'Iga Isaac', '2022-11-05', '', '', '', 'mantain time', '2022-10-30', 'muni'),
(13, 'ICT ug', 'Supply of Printers', '5	', '800000', '0785287421', 'igni@gmail.com', '1', 'Iga Isaac', '2022-11-05', '', '', '', 'ensure quality', '2022-10-30', 'muni'),
(14, 'Amos comp', 'Supply of Printers', '5	', '950000', '0785287421', 'Amos@gmail.com', '1', 'Iga Isaac', '2022-11-05', '', '', '', 'All printers must be working', '2022-10-30', 'muni'),
(15, 'Joan tech ltd', 'Supply of Printers', '5	', '800000', '0785287421', 'Joan@gmail.com', '1', 'Iga Isaac', '2022-11-05', '', '', '', 'Quality asurance', '2022-10-30', 'muni'),
(16, 'Kakurutech', 'Supply of speakers', '5	', '350000', '0785287421', 'Kakuru@gmail.com', '1', 'Iga Isaac', '2022-11-05', '', '', '', '', '2022-10-31', 'muni'),
(17, 'Tadeo unix', 'Supply of speakers', '5	', '450000', '0785287421', 'Tadeo@gmail.com', '1', 'Iga Isaac', '2022-11-01', '', '', '', '', '2022-10-31', 'muni'),
(18, 'Kakurutech', 'Supply of kindle fire', '10	', '750000', '0785287421', 'Kakuru@gmail.com', '1', 'Iga Isaac', '2022-11-02', '', '', '', '', '2022-10-31', 'muni'),
(19, 'Tadeo unix', 'Supply of kindle fire', '10	', '670000', '0785287421', 'Tadeo@gmail.com', '1', 'Iga Isaac', '2022-11-03', '', '', '', '', '2022-10-31', 'muni'),
(20, 'Kakurutech', 'Supply of routers', '3	', '120000', '0785287421', 'Kakuru@gmail.com', '1', 'Iga Isaac', '2022-10-28', '', '', '', '', '2022-10-31', 'muni'),
(21, 'Tadeo unix', 'Supply of routers', '3	', '1050000', '0785287421', 'Tadeo@gmail.com', '1', 'Iga Isaac', '2022-10-27', '', '', '', '', '2022-10-31', 'muni');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `view` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `sender`, `supplier`, `item`, `message`, `view`) VALUES
(1, 'muni', '', 'chairs', 'We viewed your application please come to the head office with the original copies of the documents ', ''),
(2, 'muni', '', 'chairs', 'hi', ''),
(4, 'muni', 'ICT Specialists', 'Supply of office chairs', 'gooooooooo', 'yes'),
(5, 'muni', 'ICT Specialists', 'chairs', 'yooooo', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `managecontract`
--

CREATE TABLE `managecontract` (
  `id` int(255) NOT NULL,
  `tender` varchar(550) NOT NULL,
  `supname` varchar(550) NOT NULL,
  `phase1` varchar(550) NOT NULL,
  `phase2` varchar(550) NOT NULL,
  `phase3` varchar(550) NOT NULL,
  `phase4` varchar(550) NOT NULL,
  `offname` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managecontract`
--

INSERT INTO `managecontract` (`id`, `tender`, `supname`, `phase1`, `phase2`, `phase3`, `phase4`, `offname`) VALUES
(1, 'Supply of  chairs', 'Muni', 'Completed', '', '', '', 'James Grant');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(200) NOT NULL,
  `oname` varchar(200) NOT NULL,
  `oimage` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pswd` varchar(200) NOT NULL,
  `rp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `oname`, `oimage`, `fname`, `lname`, `tel`, `email`, `pswd`, `rp`) VALUES
(1, 'Budimbo architects', '634c4506379451.13923377.png', 'Solomon', 'Serwanja', '0786545454', 's.serwanja@gmail.com', 'Solomon@22', 'Solomon@22'),
(2, 'Nile University', '634cfd50cfc960.39983607.png', 'Nkwine', 'Innocent', '706109393', 'info@nile.com', '4321', '4231'),
(3, 'Nile University', '634cff81c00523.78895700.png', 'Nkwine', 'Innocent', '077544', 'info@nile.com', '123', '123'),
(4, 'Mbarara University', '634d47bd9ca308.46294540.png', 'James', 'Ogwal', '0765435261', 'ogwaljames@gmail.com', 'ogwal22', 'ogwal22');

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
  `deadline` date NOT NULL,
  `org` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publish`
--

INSERT INTO `publish` (`id`, `a_id`, `item`, `qty`, `type`, `specification`, `doc1`, `doc2`, `doc3`, `requirements`, `deadline`, `org`) VALUES
(4, 3, 'Printers', '5	', 'Epison', 'They must be able to print colored', 'license', 'tax clearance', 'financial statement', 'You must have been in business for more than a year', '2022-11-30', 'muni'),
(7, 4, 'tables', '14	', 'wooden', 'must be medium size and height', 'license', 'tax clearance', 'financial statement', 'the tables must be well made', '2022-11-05', 'muni'),
(6, 5, 'projectors', '4	', 'must be able to use hdmi', 'sonym', 'license', 'tax clearance', 'financial statement', 'Must have a clear display', '2022-11-05', 'muni'),
(11, 6, 'trucks', '5	', 'toyota', 'must using a deiseal engine', 'license', 'tax clearance', 'financial statement', 'must be new modle', '0000-00-00', 'muni'),
(10, 7, 'switch', '3	', 'cisco', 'must have 24 ports', 'license', 'tax clearance', 'financial statement', 'the suppliers must have been business for at least a year', '2022-11-20', 'muni'),
(9, 8, 'chairs', '50	', 'office chairs', 'must be wooden chairs', 'license', 'tax clearance', 'financial statement', 'the supplier must have a good record', '2022-12-04', 'muni'),
(8, 9, 'computers', '20	', 'hp', 'must have 4gb ram', 'license', 'tax clearance', 'financial statement', 'must be new computers', '2022-11-05', 'muni'),
(14, 10, 'speakers', '5	', 'sony', 'medium size', 'license', 'tax clearance', 'financial statement', 'good quality', '2022-11-05', ''),
(13, 11, 'kindle fire', '10	', 'any type', 'they must open a pdf', 'license', 'tax clearance', 'financial statement', 'you must have been in business for at least a year', '2022-11-05', ''),
(12, 12, 'routers', '3	', 'cisco', '24 ports', 'license', 'tax clearance', 'financial statement', 'Payments shall be made after the delivery', '2022-11-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tender` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `requirements` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `official` varchar(100) NOT NULL,
  `dat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `name`, `tender`, `price`, `services`, `quality`, `requirements`, `comment`, `official`, `dat`) VALUES
(2, 'Muni', 'supply of  chairs', 'ugsh 5,000,000', '3', '3', '2', 'The supplier is not good', 'Iga Isaac', '2022-10-02'),
(4, 'ICT Specialists', 'Supply of office chairs', '800000', '3', '5', '3', '', 'Iga Isaac', '2022-10-17'),
(5, 'ICT Specialists', 'Supply of office chairs', '1400000', '3', '3', '4', 'good supply', 'Iga Isaac', '2022-10-17'),
(6, 'Kampug', 'Supply of Printers', '700000', '4', '3', '3', 'Potential supplier', 'Iga Isaac', '2022-10-20'),
(7, 'danug', 'Supply of Printers', '800000', '2', '1', '3', 'Not impressed', 'Iga Isaac', '2022-10-20'),
(8, 'Praise.comp', 'Supply of Printers', '900000', '4', '5', '4', 'Very good supplier', 'Iga Isaac', '2022-10-20'),
(9, 'Patiemedia', 'Supply of Printers', '780000', '2', '2', '2', 'Your documents are lacking', 'Iga Isaac', '2022-10-20'),
(10, 'ugmedia', 'Supply of Printers', '9800000', '2', '4', '3', 'some documents are not clear', 'Iga Isaac', '2022-10-20'),
(11, 'Kakurutech', 'Supply of Printers', '1000000', '5', '5', '4', 'seems credible supplier', 'Iga Isaac', '2022-10-20'),
(12, 'ICT ug', 'Supply of Printers', '970000', '2', '2', '2', 'poor standard', 'Iga Isaac', '2022-10-20'),
(13, 'Leon ltd', 'Supply of Printers', '890000', '1', '2', '3', 'no enough after sale services', 'Iga Isaac', '2022-10-20'),
(14, 'Juliet tech', 'Supply of Printers', '1050000', '4', '3', '3', 'poor quality', 'Iga Isaac', '2022-10-20'),
(15, 'Joan tech ltd', 'Supply of Printers', '1200000', '5', '5', '4', 'Seems a good candidate', 'Iga Isaac', '2022-10-20'),
(16, 'Annet ltd', 'Supply of Printers', '890000', '1', '1', '2', 'does not meet the requirement', 'Iga Isaac', '2022-10-20'),
(17, 'Annah tech', 'Supply of Printers', '1150000', '2', '3', '4', 'not good record', 'Iga Isaac', '2022-10-20'),
(18, 'Julie comp', 'Supply of Printers', '1200000', '4', '4', '4', 'out standing supplier', 'Iga Isaac', '2022-10-20'),
(19, 'Jackson ug', 'Supply of Printers', '850000', '2', '2', '2', 'not promising\r\n', 'Iga Isaac', '2022-10-20'),
(20, 'Vicent tech', 'Supply of Printers', '990000', '3', '4', '3', 'not good services', 'Iga Isaac', '2022-10-20'),
(21, 'Mark comp', 'Supply of Printers', '1250000', '3', '3', '3', 'need to add on the services', 'Iga Isaac', '2022-10-20'),
(22, 'Tadeo unix', 'Supply of Printers', '1200000', '5', '3', '3', 'not bad', 'Iga Isaac', '2022-10-20'),
(23, 'Abaho ltd', 'Supply of Printers', '1170000', '4', '4', '4', 'good record', 'Iga Isaac', '2022-10-20'),
(24, 'Sande comp', 'Supply of Printers', '1090000', '5', '5', '3', 'fair supplier', 'Iga Isaac', '2022-10-20'),
(25, 'Amos comp', 'Supply of Printers', '1100000', '2', '4', '2', 'did not fulfil all the requirements', 'Iga Isaac', '2022-10-20'),
(26, 'Ndrew comp ltd', 'Supply of Printers', '1090000', '5', '4', '4', 'fair performance', 'Iga Isaac', '2022-10-20'),
(27, 'Ochola ict', 'Supply of Printers', '1000000', '2', '1', '1', 'not good quality', 'Iga Isaac', '2022-10-20'),
(28, 'Praise.comp', 'Supply of tables', 'praise', '4', '5', '5', 'good suppliers', 'Iga Isaac', '2022-10-30'),
(29, 'Praise.comp', 'Supply of projectors', 'praise', '4', '3', '5', 'good supplier', 'Iga Isaac', '2022-10-30'),
(30, 'Praise.comp', 'Supply of trucks', 'praise', '5', '4', '4', 'promising supplier', 'Iga Isaac', '2022-10-30'),
(31, 'Praise.comp', 'Supply of switch', 'praise', '2', '4', '4', 'fiar supplier', 'Iga Isaac', '2022-10-30'),
(32, 'Praise.comp', 'Supply of switch', 'praise', '4', '3', '3', 'not good supplier', 'Iga Isaac', '2022-10-30'),
(33, 'Praise.comp', 'Supply of chairs', 'praise', '5', '4', '4', 'good supplier', 'Iga Isaac', '2022-10-30'),
(34, 'Praise.comp', 'Supply of computers', 'praise', '4', '4', '3', 'fair price', 'Iga Isaac', '2022-10-30'),
(35, 'ICT Specialists', 'Supply of tables', 'john', '5', '2', '2', 'not good spplier', 'Iga Isaac', '2022-10-30'),
(36, 'ICT Specialists', 'Supply of projectors', 'john', '4', '3', '2', 'he is promissing', 'Iga Isaac', '2022-10-30'),
(37, 'ICT Specialists', 'Supply of office chairs', 'john', '4', '5', '5', 'not bad supplier', 'Iga Isaac', '2022-10-30'),
(38, 'ICT Specialists', 'Supply of computers', 'john', '2', '2', '3', 'not a good supplier', 'Iga Isaac', '2022-10-30'),
(39, 'ICT Specialists', 'Supply of office chairs', 'john', '3', '2', '2', 'not good supplier', 'Iga Isaac', '2022-10-30'),
(40, 'ICT Specialists', 'Supply of chairs', 'john', '3', '3', '4', 'fair performance', 'Iga Isaac', '2022-10-30'),
(41, 'ICT Specialists', 'Supply of switch', 'john', '4', '4', '3', 'Promising supplier', 'Iga Isaac', '2022-10-30'),
(42, 'Tadeo unix', 'Supply of speakers', 'tadeo', '4', '4', '5', 'good supply', 'Iga Isaac', '2022-10-31'),
(43, 'Tadeo unix', 'Supply of kindle fire', 'tadeo', '4', '5', '5', 'fair supply', 'Iga Isaac', '2022-10-31'),
(44, 'Tadeo unix', 'Supply of routers', 'tadeo', '4', '4', '3', 'promising supplier', 'Iga Isaac', '2022-10-31'),
(45, 'Kakurutech', 'Supply of speakers', 'kakuru', '4', '2', '5', 'good supply', 'Iga Isaac', '2022-10-31'),
(46, 'Kakurutech', 'Supply of kindle fire', 'kakuru', '5', '5', '5', 'Excelent', 'Iga Isaac', '2022-10-31'),
(47, 'Kakurutech', 'Supply of routers', 'kakuru', '4', '4', '4', 'Excelent', 'Iga Isaac', '2022-10-31');

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
  `status` varchar(100) NOT NULL,
  `org` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `item`, `qty`, `purpose`, `requestor`, `dat`, `processor`, `department`, `status`, `org`) VALUES
(1, 'chairs', '20', 'for lecturers in the staff', 'abdu', '2022-09-16 ', 'annet', 'Computer science', 'approved', 'muni'),
(2, 'Computers', '20', 'Lab', 'Samuel', '1989-12-20 ', 'HOD', 'CSEE', 'approved', 'muni'),
(4, 'Printers', '5', 'For printing', 'Abdu', '2022-10-20 ', 'Nkwine', 'Education', 'approved', 'muni'),
(5, 'books', '20', 'for students self study', 'Abdu', '2022-10-30 ', 'Nkwine', 'Education', 'approved', 'muni'),
(6, 'projectors', '4', 'to assist in lecturing', 'Abdu', '2022-10-30 ', 'Nkwine', 'Education', 'approved', 'muni'),
(7, 'tables', '14', 'for department offices', '', '2022-10-30 ', 'Nkwine', 'Education', 'approved', 'muni'),
(8, 'computers', '20', 'for lecturers', 'Abdu', '2022-10-30 ', 'Nkwine', 'Education', 'approved', 'muni'),
(9, 'chairs', '50', 'for students study', 'Abdu', '2022-10-30 ', 'Nkwine', 'Education', 'approved', 'muni'),
(10, 'switch', '3', 'for extending internet', 'Abdu', '2022-10-30 ', 'Nkwine', 'Education', 'approved', 'muni'),
(11, 'trucks', '5', 'for transporting field workers', 'Abdu', '2022-10-30 ', 'Nkwine', 'Education', 'approved', 'muni'),
(12, 'routers', '3', 'for extending internet', 'Abdu', '2022-10-31 ', 'Nkwine', 'Education', 'approved', 'muni'),
(13, 'kindle fire', '10', 'for reading', 'Abdu', '2022-10-31 ', 'Nkwine', 'Education', 'approved', 'muni'),
(14, 'speakers', '5', 'for conferences', 'Abdu', '2022-10-31 ', 'Nkwine', 'Education', 'approved', 'muni');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `comp` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `email`, `fname`, `lname`, `username`, `tel`, `pswd`, `comp`, `location`) VALUES
(2, 'nkwineinnocent@gmail.com', 'Agaba', 'Amon', 'john', '0785287421', 'John@222', 'ICT Specialists', 'Arua'),
(4, 'd078528742@gmail.com', 'Osuta', 'Denis', 'den', '0785287421', 'Denis123', 'ICT Arua', 'Arua'),
(5, 'Karim@gmail.com', 'Abdu', 'Karim', 'karim', '0785287421', 'Karim123', 'Kampug', 'Kampala'),
(6, 'Daniel@gmail.com', 'Muwanguzi', 'Daniel', 'dan', '0785287421', 'Daniel123', 'danug', 'Kampala'),
(7, 'Praise@gmail.com', 'Aine', 'Praise', 'praise', '0785287421', 'Praise123', 'Praise.comp', 'Arua'),
(8, 'Patie@gmail.com', 'Amusoro', 'Patie', 'patie', '0785287421', 'Patie123', 'Patiemedia', 'Soroti'),
(9, 'Joshua@gmail.com', 'Maga', 'Joshua', 'maga', '0785287421', 'Joshua123', 'ugmedia', 'Jinja'),
(10, 'Kakuru@gmail.com', 'Kakuru', 'Leo', 'kakuru', '0785287421', 'Kakuru123', 'Kakurutech', 'Kampala'),
(11, 'igni@gmail.com', 'Akan', 'Igni', 'igni', '0785287421', 'Igni1234', 'ICT ug', 'Kabale'),
(12, 'Leon@gmail.com', 'Leon', 'Michael', 'leon', '0785287421', 'Leon1234', 'Leon ltd', 'Kampala'),
(13, 'Ndrew@gmail.com', 'Agaba', 'Ndrew', 'ndrew', '0785287421', 'Ndrew123', 'Ndrew comp ltd', 'Kampala'),
(14, 'Amos@gmail.com', 'Ali', 'Amos', 'amos', '0785287421', 'Amos1234', 'Amos comp', 'Masaka'),
(15, 'Ochola@gmail.com', 'Ochola', 'Elly', 'ochola', '0785287421', 'Ochola123', 'Ochola ict', 'Gulu'),
(16, 'Sande@gmail.com', 'Sande', 'Sam', 'sande', '0785287421', 'Sande123', 'Sande comp', 'Kabale'),
(17, 'Abaho@gmail.com', 'Abaho', 'Kashoma', 'abaho', '0785287421', 'Abaho123', 'Abaho ltd', 'Arua'),
(18, 'Tadeo@gmail.com', 'Mugomba', 'Tadeo', 'tadeo', '0785287421', 'Tadeo123', 'Tadeo unix', 'Jinja'),
(19, 'Mark@gmail.com', 'Mugume', 'Mark', 'mark', '0785287421', 'Mark1234', 'Mark comp', 'Masaka'),
(20, 'Vicent@gmail.com', 'Mugumya', 'Vicent', 'vicent', '0785287421', 'Vicent123', 'Vicent tech', 'Arua'),
(21, 'Jackson@gmail.com', 'Jackson', 'Joe', 'jackson', '0785287421', 'Jackson123', 'Jackson ug', 'Kamuli'),
(22, 'Julie@gmail.com', 'Julie', 'Joan', 'julie', '0785287421', 'Julie123', 'Julie comp', 'Kampala'),
(23, 'Annah@gmail.com', 'Annah', 'Kobu', 'annah', '0785287421', 'Annah123', 'Annah tech', 'Arua'),
(24, 'Annet@gmail.com', 'Annet', 'Kaka', 'annet', '0785287421', 'Annet123', 'Annet ltd', 'Masaka'),
(25, 'Joan@gmail.com', 'Yale', 'Joan', 'joan', '0785287421', 'Joan1234', 'Joan tech ltd', 'Jinja'),
(26, 'Juliet@gmail.com', 'Juliet', 'Ayish', 'juliet', '0785287421', 'Juliet123', 'Juliet tech', 'Kamuli');

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
  `cod` int(11) NOT NULL,
  `org` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `department`, `position`, `email`, `contact`, `username`, `password`, `cod`, `org`) VALUES
(1, 'Nkwine', 'Innocent', 'Education', 'HOD', 'nkwineinnocent@gmail.com', '0785287421', 'inno', '123', 1, 'muni'),
(2, 'Kulubasi', 'Laban', 'None', 'System admin', 'laban@gmail.com', '0785287422', 'lab', '123', 3, 'muni'),
(3, 'Iga', 'Isaac', 'agriculture', 'staff', 'nkwineinnocent@gmail.com', '0785287420', 'iga', '123', 2, 'muni'),
(4, 'Nkwine', 'Innocent', '', '', 'info@nile.com', '077544', 'tum', '123', 3, 'Nile University'),
(5, 'James', 'Ogwal', '', '', 'ogwaljames@gmail.com', '0765435261', 'ogwal22', 'ogwal22', 3, 'Mbarara University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managecontract`
--
ALTER TABLE `managecontract`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `managecontract`
--
ALTER TABLE `managecontract`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publish`
--
ALTER TABLE `publish`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
