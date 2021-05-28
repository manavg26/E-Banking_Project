-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 08:36 AM
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
-- Database: `e-banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Staff` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `Feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Phone`, `Staff`, `Branch`, `Feedback`) VALUES
('DAD', 'ada@ad.in', 3242343242, 'asdas', 'dada', 'dasd'),
('Snigdh', 'snigdh@com.in', 2222222222, 'ABC', 'Ambala', 'dadad');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `Account` bigint(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Aadhar` bigint(11) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Account`, `Name`, `Email`, `Aadhar`, `Phone`, `Balance`) VALUES
(1810991046, 'Snigdh', 'xyz@abc.com', 112233445566, 9998887766, 28000),
(1810991047, 'Raghav', 'abc@xyz.com', 111122223333, 1122334455, 26000),
(1810991048, 'Manav', 'asd@asd.com', 555555555555, 9999999999, 15000),
(1810991049, 'Kshitiz', 'ybda@hsada.com', 123213143242, 4443332266, 19000),
(1810991050, 'Abhishek Jain', 'abhi.jain@yahoo.com', 444455556666, 9998887766, 15000),
(1810991051, 'Anmol Seghal', 'anmol@jacky.in', 222222555555, 9999988888, 24000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Account` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `PIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Account`, `Name`, `PIN`) VALUES
(1810991046, 'Snigdh', 192816),
(1810991047, 'Raghav', 123456),
(1810991048, 'Manav', 123456),
(1810991049, 'Kshitiz', 123456),
(1810991050, 'Abhishek Jain', 990909),
(1810991051, 'Anmol Seghal', 999999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Account`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `Account` (`Account`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
