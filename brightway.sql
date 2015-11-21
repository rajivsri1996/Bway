-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2013 at 02:36 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brightway`
--

-- --------------------------------------------------------

--
-- Table structure for table `hnd`
--

CREATE TABLE IF NOT EXISTS `hnd` (
  `AsName` varchar(150) NOT NULL,
  `stuName` varchar(150) NOT NULL,
  `sbmtDate` varchar(150) NOT NULL,
  `Desc` varchar(150) NOT NULL,
  `Assmntfile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hnd`
--

INSERT INTO `hnd` (`AsName`, `stuName`, `sbmtDate`, `Desc`, `Assmntfile`) VALUES
('4', 'Ajith Bandara', '20/Aug/2', 'Individual', 'HND/Networking technology.docx'),
('5', 'Dasun Sandeepa', '26/June/2', 'Individual Assignment', 'HND/Information Systems.docx'),
('4', 'Kasun Chamara', '22/Aprl/3', 'Individual', 'HND/Networking technology.docx');

-- --------------------------------------------------------

--
-- Table structure for table `mba`
--

CREATE TABLE IF NOT EXISTS `mba` (
  `AsName` varchar(150) NOT NULL,
  `stuName` varchar(150) NOT NULL,
  `sbmtDate` varchar(150) NOT NULL,
  `Desc` varchar(200) NOT NULL,
  `Assmntfile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mba`
--

INSERT INTO `mba` (`AsName`, `stuName`, `sbmtDate`, `Desc`, `Assmntfile`) VALUES
('1', 'Dasun', '4/Mar/2', 'Individual', 'MBA/Curriculum Vitae.docx'),
('1', 'Sandeepa', '23/June/4', 'Group project', 'MBA/Curriculum Vitae.docx');
