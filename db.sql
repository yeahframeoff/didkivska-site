-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 04, 2015 at 11:03 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ARM`
--

-- --------------------------------------------------------

--
-- Table structure for table `log pass`
--

CREATE TABLE `logpass` (
  `Login` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `logpass_ibfk_1` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `logpass`
--

INSERT INTO `logpass` (`Login`, `Password`, `UserID`, `id`) VALUES
('Loff', '12345', 1, 1),
('Pp', '234', 1, 2),
('gjkgdkgkjfxkgxfh', 'fguaesy.gyafewftlftuwa`;r', 3, 3),
('xfgzhjdzhkgjhzdkjgh', 'dzfghkzdhjghkzdghzkd', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Inform` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ClientID` int(11) NOT NULL,
  `TZ` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(250) NOT NULL,
  `ManagerID` int(11) NOT NULL,
  `PercentR` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ClientID` (`ClientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Name`, `Price`, `Data`, `Inform`, `ClientID`, `TZ`, `id`, `Status`, `ManagerID`, `PercentR`) VALUES
('In da City app', 450000, '2015-06-27', 'This project is for city ', 1, '   ', 8, 'free', 0, 0),
('zdjhgkjzhdgjfksdkghksdf', 345000, '2015-06-27', 'b`hk`gfjsgjfgzjgfjzjgjhfzhjfd', 1, NULL, 9, 'free', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `Functional` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NonFunctional` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ForTechnicalSupport` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `StartDate` date NOT NULL,
  `FinishDate` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`Functional`, `ProjectID`, `id`, `NonFunctional`, `ForTechnicalSupport`, `StartDate`, `FinishDate`) VALUES
('xfzgzfxlkgjhlkfxzjhgkjzhkgjzh', 9, 1, 'zdfgkldzhkjzhdfgkhzkdjfhgkzdfjhgzdfkghdkghdfj', 'cjkzvhkhdgzfkjghzfdkvhgdfzdkjhgf', '2015-06-27', '2015-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `DeveloperID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `Task` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `StartDate` date NOT NULL,
  `FinishDate` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PlanStartDate` date NOT NULL,
  `PlanFinishDate` date NOT NULL,
  `Runtime` int(11) NOT NULL,
  `PreviousTask` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Modul` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Completed` int(11) NOT NULL,
  `Difficulty` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `id`, `type`, `Phone`) VALUES
('Kate', 1, '1', '1234567'),
('hghzdkghkdjfg', 2, 'C', '52465424673'),
('dhakjdhkadhkajd', 3, 'C', '624357242547'),
('xhvzhgxfkgzhdgjzd', 4, 'C', 'dfgkdzfhgdzhkhkzg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logpass`
--
ALTER TABLE `logpass`
  ADD CONSTRAINT `logpass_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `users` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `projects` (`id`);
