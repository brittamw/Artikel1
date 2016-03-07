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
-- Tabellenstruktur für Tabelle `Name`
--

CREATE TABLE IF NOT EXISTS `Name` (
`NameID` int(11) unsigned NOT NULL,
  `NameVorname` varchar(255) NOT NULL,
  `NameNachname` varchar(255) NOT NULL,
  `NameTrainID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `Name`
--

INSERT INTO `Name` (`NameID`, `NameVorname`, `NameNachname`, `NameTrainID`) VALUES
(1, 'Britta', 'Walter', 111),
(2, 'Lisa', 'Matschkopf', 103),
(4, 'Monika', 'Lustig', 114),
(5, 'Peter', 'Pan', 115),
(6, 'Michael', 'Lampe', 101),
(7, 'Barbara', 'Rhabarber', 101),
(10, 'Britta', 'Lustig', 101),
(15, 'Till', 'Eulenspiegel', 101),
(16, 'Harry', 'Potter', 101),
(17, 'Ron', 'Weasley', 101),
(18, 'Fred', 'Weasley', 101),
(19, 'George', 'Weasley', 101),
(20, 'Molly', 'Weasley', 102),
(21, 'Draco ', 'Malfoy', 101),
(22, 'Lucius', 'Malfoy', 101),
(23, 'Rubeus', 'Hagrid', 103),
(24, 'Albus', 'Dumbledore', 103),
(25, 'Minerva', 'McGonnagall', 101),
(26, 'Neville', 'Longbottom', 101),
(27, 'Bellatrix ', 'Lestrange', 101),
(28, 'Dobby', 'vonHogwarts', 101),
(29, 'Sirius', 'Black', 101),
(33, 'Fenrir', 'Greyback', 103),
(34, 'Dean', 'Thomas', 105),
(35, 'Christian', 'Eilts', 102),
(36, 'Christian', 'Eilts', 104),
(37, 'Silvio', 'Dante', 102),
(38, 'Tom', 'Riddle', 104),
(39, 'Cedric', 'Diggory', 102);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Name`
--
ALTER TABLE `Name`
 ADD PRIMARY KEY (`NameID`), ADD KEY `NameTrainID` (`NameTrainID`), ADD KEY `NameID` (`NameID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Name`
--
ALTER TABLE `Name`
MODIFY `NameID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `Name`
--
ALTER TABLE `Name`
ADD CONSTRAINT `NameTrainID_FK` FOREIGN KEY (`NameTrainID`) REFERENCES `Training` (`TrainID`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
