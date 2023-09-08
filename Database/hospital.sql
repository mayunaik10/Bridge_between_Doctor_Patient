-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 05:22 AM
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
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `apid` int(20) NOT NULL,
  `pname` text NOT NULL,
  `department` text NOT NULL,
  `dname` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `pemail` varchar(40) NOT NULL,
  `pno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apid`, `pname`, `department`, `dname`, `date`, `time`, `pemail`, `pno`) VALUES
(11, 'Nishita Raje', 'PAEDIATRIC', 'DR.ANURADHA NARAYANAN', '2022-10-21', '06:19:00', 'nishitarj@gmail.com', 908676876),
(12, 'Rohit Mane', '1NEUROLOGY', 'DR PRAVEEN GANGANE', '2022-10-30', '01:25:00', 'rohitra@yahoo.com', 9078787997);

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`user`, `pass`) VALUES
('hsadmin', 'shivclin143');

-- --------------------------------------------------------

--
-- Table structure for table `patientlogin`
--

CREATE TABLE `patientlogin` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientlogin`
--

INSERT INTO `patientlogin` (`fname`, `lname`, `email`, `pass`) VALUES
('Mayuri', 'Naik', 'mayuri@2002gmail.com', 'mayu@156'),
('Aarya', 'Mhatre', 'aarya@gmail.com', 'aar1289'),
('Sarthak', 'Nikam', 'sarthakn@gmail.com', 'sarth897'),
('Rekha', 'Mishra', 'rekhss@gmail.com', 'rekha@mi'),
('Ansfrid', 'Pereira', 'ansfrid@gmail.com', 'ansfrid1'),
('Shweta', 'Gupta', 'Shweta12@gmail.com', 'shwetss'),
('Riya', 'Gawali', 'riyagawali@yahoo.com', 'riya96');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `dname` text NOT NULL,
  `department` text NOT NULL,
  `days` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`dname`, `department`, `days`, `time`) VALUES
('DR.AMIT GANDHI', 'PAEDIATRIC', 'Monday,Tueday,Friday', '10AM-10PM'),
('DR.ARP1TA THAMBA', 'MEDICINE', 'Monday,Saturday', '9AM-5PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`apid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `apid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
