-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 07. Mrz 2016 um 18:38
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
-- Tabellenstruktur für Tabelle `Training`
--

CREATE TABLE IF NOT EXISTS `Training` (
  `TrainID` int(11) NOT NULL,
  `TrainWeek` int(11) DEFAULT NULL,
  `TrainTag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `Training`
--

INSERT INTO `Training` (`TrainID`, `TrainWeek`, `TrainTag`) VALUES
(101, 1, 'Montag'),
(102, 1, 'Dienstag'),
(103, 1, 'Mittwoch'),
(104, 1, 'Donnerstag'),
(105, 1, 'Freitag'),
(106, 1, 'Samstag'),
(107, 1, 'Sonntag'),
(108, 2, 'Montag'),
(109, 2, 'Dienstag'),
(110, 2, 'Mittwoch'),
(111, 2, 'Donnerstag'),
(112, 2, 'Freitag'),
(113, 2, 'Samstag'),
(114, 2, 'Sonntag'),
(115, 3, 'Montag'),
(116, 3, 'Dienstag'),
(117, 3, 'Mittwoch'),
(118, 3, 'Donnerstag'),
(119, 3, 'Freitag'),
(120, 3, 'Samstag'),
(121, 3, 'Sonntag'),
(122, 4, 'Montag'),
(123, 4, 'Dienstag'),
(124, 4, 'Mittwoch'),
(125, 4, 'Donnerstag'),
(126, 4, 'Freitag'),
(127, 4, 'Samstag'),
(128, 4, 'Sonntag'),
(129, 5, 'Montag'),
(130, 5, 'Dienstag'),
(131, 5, 'Mittwoch'),
(132, 5, 'Donnerstag'),
(133, 5, 'Freitag'),
(134, 5, 'Samstag'),
(135, 5, 'Sonntag'),
(136, 6, 'Montag'),
(137, 6, 'Dienstag'),
(138, 6, 'Mittwoch'),
(139, 6, 'Donnerstag'),
(140, 6, 'Freitag'),
(141, 6, 'Samstag'),
(142, 6, 'Sonntag'),
(143, 7, 'Montag'),
(144, 7, 'Dienstag'),
(145, 7, 'Mittwoch'),
(146, 7, 'Donnerstag'),
(147, 7, 'Freitag'),
(148, 7, 'Samstag'),
(149, 7, 'Sonntag'),
(150, 8, 'Montag'),
(151, 8, 'Dienstag'),
(152, 8, 'Mittwoch'),
(153, 8, 'Donnerstag'),
(154, 8, 'Freitag'),
(155, 8, 'Samstag'),
(156, 8, 'Sonntag'),
(157, 9, 'Montag'),
(158, 9, 'Dienstag'),
(159, 9, 'Mittwoch'),
(160, 9, 'Donnerstag'),
(161, 9, 'Freitag'),
(162, 9, 'Samstag'),
(163, 9, 'Sonntag'),
(164, 10, 'Montag'),
(165, 10, 'Dienstag'),
(166, 10, 'Mittwoch'),
(167, 10, 'Donnerstag'),
(168, 10, 'Freitag'),
(169, 10, 'Samstag'),
(170, 10, 'Sonntag'),
(171, 11, 'Montag'),
(172, 11, 'Dienstag'),
(173, 11, 'Mittwoch'),
(174, 11, 'Donnerstag'),
(175, 11, 'Freitag'),
(176, 11, 'Samstag'),
(177, 11, 'Sonntag'),
(178, 12, 'Montag'),
(179, 12, 'Dienstag'),
(180, 12, 'Mittwoch'),
(181, 12, 'Donnerstag'),
(182, 12, 'Freitag'),
(184, 12, 'Samstag'),
(185, 12, 'Sonntag');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Training`
--
ALTER TABLE `Training`
 ADD PRIMARY KEY (`TrainID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
