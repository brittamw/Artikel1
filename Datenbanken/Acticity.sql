-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 07. Mrz 2016 um 18:37
-- Server Version: 10.0.24-MariaDB-1~jessie
-- PHP-Version: 5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `abq321`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Acticity`
--

CREATE TABLE IF NOT EXISTS `Acticity` (
  `ActID` int(11) NOT NULL,
  `ActTitle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `Acticity`
--

INSERT INTO `Acticity` (`ActID`, `ActTitle`) VALUES
(1, '180 Degree Jump Lunges'),
(2, 'Ab Bikes'),
(3, 'Bent Jackknifes'),
(4, 'Bent Leg Raises'),
(5, 'Bent Leg Sit Ups'),
(6, 'Burpees'),
(7, 'Commandos'),
(8, 'Decline Push Ups'),
(9, 'Drop Push Ups'),
(10, 'Dumbbell Squat Press'),
(11, 'Jump Lunges'),
(12, 'Jump Squats'),
(13, 'Knee Ups'),
(14, 'Lay Down Push Ups'),
(15, 'Leg Raise and Hip Lifts'),
(16, 'Medicine Ball Crab Walk'),
(17, 'Mountain Climber and Shoulder Tabs'),
(18, 'Mountain Climbers'),
(19, 'Plank'),
(20, 'Push Ups'),
(21, 'Reverse Lunge'),
(22, 'Skipping'),
(23, 'Snap Jumps'),
(24, 'Split Squats'),
(25, 'Squats'),
(26, 'Stationary Lunges'),
(27, 'Step Ups'),
(28, 'Straight Leg Jackknifes'),
(29, 'Straight Leg Raises'),
(30, 'Straight Leg Sit Ups'),
(31, 'Sumo Jump Squat'),
(32, 'Sumo Squat'),
(33, 'Toe Taps'),
(34, 'Tricep Dips'),
(35, 'Tricep Dips Feet Raised'),
(36, 'Tuck Jumps'),
(37, 'Walking Lunges'),
(38, 'Weighted Bent Leg Jackknifes'),
(39, 'Weighted Knee Ups'),
(40, 'X-Hops'),
(41, 'Walk'),
(42, 'Rest');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Acticity`
--
ALTER TABLE `Acticity`
 ADD PRIMARY KEY (`ActID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
