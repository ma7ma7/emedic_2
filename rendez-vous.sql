-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2018 at 08:49 PM
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
-- Table structure for table `rendez-vous`
--

DROP TABLE IF EXISTS `rendez-vous`;
CREATE TABLE IF NOT EXISTS `rendez-vous` (
  `Docteur_Username` varchar(255) CHARACTER SET utf16 NOT NULL,
  `Date_rdv` date NOT NULL,
  `Time_rdv` time NOT NULL,
  `Patient_Username` varchar(255) CHARACTER SET utf16 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rendez-vous`
--

INSERT INTO `rendez-vous` (`Docteur_Username`, `Date_rdv`, `Time_rdv`, `Patient_Username`) VALUES
('benani amir', '2018-07-16', '10:00:00', 'monadir'),
('benani amir', '2018-07-14', '10:30:00', 'monadir karim'),
('tokaya inase', '2018-07-18', '15:00:00', 'amane mahmoud'),
('tokaya inase', '2018-07-18', '10:30:00', 'Elmena Zineb'),
('tokaya inase', '2018-07-18', '12:30:00', 'monadir karim');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
