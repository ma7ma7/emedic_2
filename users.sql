-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2018 at 08:48 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of users',
  `Username` varchar(255) NOT NULL DEFAULT 'user',
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Sexe` varchar(100) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Nom`, `Prenom`, `Password`, `Email`, `DateNaissance`, `Sexe`, `GroupID`, `Status`) VALUES
(1, 'elharti', 'Fatima Ezzahra', 'elharti', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'elhartif@gmail.com', '1996-10-04', 'Feminin', 0, 0),
(29, 'tokaya inase', 'tokaya', 'inase', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'inase@gmail.com', '1983-12-31', 'Feminin', 2, 0),
(28, 'benani amir', 'benani', 'amir', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'amir@gmail.com', '1990-11-28', 'masculin', 2, 0),
(27, 'monadir karim', 'monadir', 'karim', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'karim@gmail.com', '1980-12-28', 'masculin', 1, 0),
(26, 'Elmena Zineb', 'Elmena', 'Zineb', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'zineb@gmail.com', '1999-12-31', 'Feminin', 1, 0),
(25, 'amanemahmoud', 'amane', 'mahmoud', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dima@gmail.com', '2018-07-20', 'masculin', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
