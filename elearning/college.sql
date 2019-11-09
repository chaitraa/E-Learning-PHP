-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2016 at 10:51 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `regdate` text NOT NULL,
  `first_name` varchar(75) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `father_name` varchar(75) NOT NULL,
  `mother_name` varchar(75) NOT NULL,
  `dob` text NOT NULL,
  `gender` varchar(15) NOT NULL,
  `course` varchar(25) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `register_no` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pin` int(11) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`register_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regdate`, `first_name`, `last_name`, `father_name`, `mother_name`, `dob`, `gender`, `course`, `sem`, `register_no`, `address`, `city`, `pin`, `phno`, `email`, `photo`, `username`, `password`, `status`) VALUES
('30/04/2016', 'VINAY', 'S M', 'MADEGOWDA', 'RADHA', '08/09/1993', 'MALE', 'MCA', 'FOURTH', '15MCAL58', 'SREE RAMANAGARA', 'BHADRAVATHI', 577301, '9945543108', 'vinaysmgowda@gmail.com', 'IMG_20160409_094423.jpg', 'vinay', 'gowda', 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE IF NOT EXISTS `subject_master` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `logo` text NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subject_master`
--

INSERT INTO `subject_master` (`sub_id`, `subject`, `logo`) VALUES
(2, 'JAVA', 'Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes_details`
--

CREATE TABLE IF NOT EXISTS `tbl_notes_details` (
  `notes_id` int(11) NOT NULL AUTO_INCREMENT,
  `course` text NOT NULL,
  `subject` text NOT NULL,
  `topic` text NOT NULL,
  `date` text NOT NULL,
  `notes` text NOT NULL,
  `video` text NOT NULL,
  `summary` text NOT NULL,
  PRIMARY KEY (`notes_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_notes_details`
--

INSERT INTO `tbl_notes_details` (`notes_id`, `course`, `subject`, `topic`, `date`, `notes`, `video`, `summary`) VALUES
(7, 'MCA', 'JAVA', 'INTRODUCTION', '30/04/2016', 'os_linux.pdf', 'bomb.mp4', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
