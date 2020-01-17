-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 10:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ciproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_author`
--

CREATE TABLE `tbl_author` (
  `aid` int(100) NOT NULL,
  `autname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_author`
--

INSERT INTO `tbl_author` (`aid`, `autname`) VALUES
(2, 'Humayun Ahmed'),
(3, 'Kawser Ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `bid` int(100) NOT NULL,
  `bname` varchar(250) NOT NULL,
  `bauthor` varchar(250) NOT NULL,
  `bdept` varchar(100) NOT NULL,
  `bnumber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`bid`, `bname`, `bauthor`, `bdept`, `bnumber`) VALUES
(1, 'C', 'Don Von', 'cse', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `depid` int(100) NOT NULL,
  `depname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`depid`, `depname`) VALUES
(2, 'BBA'),
(5, 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue`
--

CREATE TABLE `tbl_issue` (
  `iID` int(100) NOT NULL,
  `iStudentID` int(100) NOT NULL,
  `iBookName` varchar(250) NOT NULL,
  `iDateOfIssue` int(100) NOT NULL,
  `iDateOfReturn` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_issue`
--

INSERT INTO `tbl_issue` (`iID`, `iStudentID`, `iBookName`, `iDateOfIssue`, `iDateOfReturn`) VALUES
(1, 2, 'C', 2219, 9219);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `sid` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL,
  `roll` int(100) NOT NULL,
  `reg` int(100) NOT NULL,
  `session` varchar(250) NOT NULL,
  `batch` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`sid`, `name`, `dept`, `roll`, `reg`, `session`, `batch`) VALUES
(1, 'Kawser', 'cse', 7973, 162, 'spring', 46),
(2, 'Momin', 'abc', 123, 321, 'cde', 78);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `email`, `password`) VALUES
(1, 'admin@info.com', 202);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_author`
--
ALTER TABLE `tbl_author`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  ADD PRIMARY KEY (`iID`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_author`
--
ALTER TABLE `tbl_author`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `depid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  MODIFY `iID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
