-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 04, 2015 at 03:22 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ARM`
--

-- --------------------------------------------------------

--
-- Table structure for table `LogPass`
--

CREATE TABLE `LogPass` (
  `Login` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `logpass_ibfk_1` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `LogPass`
--

INSERT INTO `LogPass` (`Login`, `Password`, `UserID`, `id`) VALUES
('Loff', '12345', 1, 1),
('Pp', '234', 1, 2),
('gjkgdkgkjfxkgxfh', 'fguaesy.gyafewftlftuwa`;r', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE `Projects` (
  `Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Inform` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ClientID` int(11) NOT NULL,
  `TZ` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(250) NOT NULL,
  `ManagerID` int(11) NOT NULL,
  `PercentR` int(11) NOT NULL,
  `FuncReq` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UnfuncReq` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TechReq` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Start` date NOT NULL,
  `Finish` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ClientID` (`ClientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Projects`
--

INSERT INTO `Projects` (`Name`, `Price`, `Data`, `Inform`, `ClientID`, `TZ`, `id`, `Status`, `ManagerID`, `PercentR`, `FuncReq`, `UnfuncReq`, `TechReq`, `Start`, `Finish`) VALUES
('In da City app', 450000, '2015-06-27', 'This project is for city ', 1, '   ', 8, 'free', 0, 0, 'Hello', 'Nice', 'To meet you', '2015-03-03', '2015-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Name`, `id`, `type`, `Phone`) VALUES
('Kate', 1, '1', '1234567'),
('hghzdkghkdjfg', 2, 'C', '52465424673'),
('dhakjdhkadhkajd', 3, 'C', '624357242547');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `LogPass`
--
ALTER TABLE `LogPass`
  ADD CONSTRAINT `logpass_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `Users` (`id`);

--
-- Constraints for table `Projects`
--
ALTER TABLE `Projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `Users` (`id`);
