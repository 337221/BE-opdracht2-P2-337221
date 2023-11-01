-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2023 at 07:47 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instructeurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructeur`
--

DROP TABLE IF EXISTS `instructeur`;
CREATE TABLE IF NOT EXISTS `instructeur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Voornaam` varchar(200) NOT NULL,
  `Tussenvoegsel` varchar(200) DEFAULT NULL,
  `Achternaam` varchar(200) NOT NULL,
  `Mobiel` varchar(11) NOT NULL,
  `DatumInDienst` date NOT NULL,
  `AantalSterren` varchar(5) DEFAULT NULL,
  `IsActief` bit(1) NOT NULL DEFAULT b'1',
  `Opmerking` varchar(250) DEFAULT NULL,
  `DatumAangemaakt` datetime(6) NOT NULL,
  `DatumGewijzigd` datetime(6) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructeur`
--

INSERT INTO `instructeur` (`Id`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Mobiel`, `DatumInDienst`, `AantalSterren`, `IsActief`, `Opmerking`, `DatumAangemaakt`, `DatumGewijzigd`) VALUES
(1, 'Li', NULL, 'Zhan', '06-28493827', '2015-04-17', '***', b'1', NULL, '2023-09-18 21:44:36.623157', '2023-09-18 21:44:36.623158'),
(2, 'Leroy', NULL, 'Boerhaven', '06-39398734', '2018-06-25', '*', b'1', NULL, '2023-09-18 21:44:36.623187', '2023-09-18 21:44:36.623187'),
(3, 'Youri', 'Van', 'Veen', '06-24383291', '2010-05-12', '***', b'1', NULL, '2023-09-18 21:44:36.623196', '2023-09-18 21:44:36.623196'),
(4, 'Bert', 'Van', 'Sali', '06-48293823', '2023-01-10', '****', b'1', NULL, '2023-09-18 21:44:36.623199', '2023-09-18 21:44:36.623199'),
(5, 'Mohammed', 'El', 'Yassidi', '06-34291234', '2010-06-14', '*****', b'1', NULL, '2023-09-18 21:44:36.623203', '2023-09-18 21:44:36.623203');

-- --------------------------------------------------------

--
-- Table structure for table `typevoertuig`
--

DROP TABLE IF EXISTS `typevoertuig`;
CREATE TABLE IF NOT EXISTS `typevoertuig` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TypeVoertuig` varchar(200) NOT NULL,
  `Rijbewijscategorie` varchar(10) NOT NULL,
  `IsActief` bit(1) NOT NULL DEFAULT b'1',
  `Opmerking` varchar(250) DEFAULT NULL,
  `DatumAangemaakt` datetime(6) NOT NULL,
  `DatumGewijzigd` datetime(6) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typevoertuig`
--

INSERT INTO `typevoertuig` (`Id`, `TypeVoertuig`, `Rijbewijscategorie`, `IsActief`, `Opmerking`, `DatumAangemaakt`, `DatumGewijzigd`) VALUES
(1, 'Personenauto', 'B', b'1', NULL, '2023-09-18 21:44:36.572595', '2023-09-18 21:44:36.572597'),
(2, 'Vrachtwagen', 'C', b'1', NULL, '2023-09-18 21:44:36.572620', '2023-09-18 21:44:36.572621'),
(3, 'Bus', 'D', b'1', NULL, '2023-09-18 21:44:36.572628', '2023-09-18 21:44:36.572629'),
(4, 'Bromfiets', 'AM', b'1', NULL, '2023-09-18 21:44:36.572632', '2023-09-18 21:44:36.572632');

-- --------------------------------------------------------

--
-- Table structure for table `voertuig`
--

DROP TABLE IF EXISTS `voertuig`;
CREATE TABLE IF NOT EXISTS `voertuig` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Kenteken` varchar(8) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Bouwjaar` date NOT NULL,
  `Brandstof` varchar(10) NOT NULL,
  `TypeVoertuigId` int(11) NOT NULL,
  `IsActief` bit(1) NOT NULL DEFAULT b'1',
  `Opmerking` varchar(250) DEFAULT NULL,
  `DatumAangemaakt` datetime(6) NOT NULL,
  `DatumGewijzigd` datetime(6) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `TypeVoertuigId` (`TypeVoertuigId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voertuig`
--

INSERT INTO `voertuig` (`Id`, `Kenteken`, `Type`, `Bouwjaar`, `Brandstof`, `TypeVoertuigId`, `IsActief`, `Opmerking`, `DatumAangemaakt`, `DatumGewijzigd`) VALUES
(1, 'AU-67-IO', 'Golf', '2017-06-12', 'Diesel', 1, b'1', NULL, '2023-09-18 21:44:36.695080', '2023-09-18 21:44:36.695082'),
(2, 'TR-24-OP', 'DAF', '2019-05-23', 'Diesel', 2, b'1', NULL, '2023-09-18 21:44:36.695142', '2023-09-18 21:44:36.695142'),
(3, 'TH-78-KL', 'Mercedes', '2023-01-01', 'Benzine', 1, b'1', NULL, '2023-09-18 21:44:36.695153', '2023-09-18 21:44:36.695153'),
(4, '90-KL-TR', 'Fiat 500', '2021-09-12', 'Benzine', 1, b'1', NULL, '2023-09-18 21:44:36.695159', '2023-09-18 21:44:36.695159'),
(5, '34-TK-LP', 'Scania', '2015-03-13', 'Diesel', 2, b'1', NULL, '2023-09-18 21:44:36.695164', '2023-09-18 21:44:36.695164'),
(6, 'YY-OP-78', 'BMW M5', '2022-05-13', 'Diesel', 1, b'1', NULL, '2023-09-18 21:44:36.695169', '2023-09-18 21:44:36.695169'),
(7, 'UU-HH-JK', 'M.A.N', '2017-12-03', 'Diesel', 2, b'1', NULL, '2023-09-18 21:44:36.695174', '2023-09-18 21:44:36.695175'),
(8, 'ST-FZ-28', 'Citroen', '2018-01-20', 'Elektrisch', 1, b'1', NULL, '2023-09-18 21:44:36.695181', '2023-09-18 21:44:36.695181'),
(9, '123-FR-T', 'Piaggio ZIP', '2021-02-01', 'Benzine', 4, b'1', NULL, '2023-09-18 21:44:36.695186', '2023-09-18 21:44:36.695186'),
(10, 'DRS-52-P', 'Vespa', '2022-03-21', 'Benzine', 4, b'1', NULL, '2023-09-18 21:44:36.695190', '2023-09-18 21:44:36.695190'),
(11, 'STP-12-U', 'Kymco', '2022-07-02', 'Benzine', 4, b'1', NULL, '2023-09-18 21:44:36.695195', '2023-09-18 21:44:36.695195'),
(12, '45-SD-23', 'Renault', '2023-01-01', 'Diesel', 3, b'1', NULL, '2023-09-18 21:44:36.696459', '2023-09-18 21:44:36.696460');

-- --------------------------------------------------------

--
-- Table structure for table `voertuiginstructeur`
--

DROP TABLE IF EXISTS `voertuiginstructeur`;
CREATE TABLE IF NOT EXISTS `voertuiginstructeur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `VoertuigId` int(11) NOT NULL,
  `InstructeurId` int(11) NOT NULL,
  `DatumToekenning` date NOT NULL,
  `IsActief` bit(1) NOT NULL DEFAULT b'1',
  `Opmerking` varchar(250) DEFAULT NULL,
  `DatumAangemaakt` datetime(6) NOT NULL,
  `DatumGewijzigd` datetime(6) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `VoertuigId` (`VoertuigId`),
  KEY `InstructeurId` (`InstructeurId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voertuiginstructeur`
--

INSERT INTO `voertuiginstructeur` (`Id`, `VoertuigId`, `InstructeurId`, `DatumToekenning`, `IsActief`, `Opmerking`, `DatumAangemaakt`, `DatumGewijzigd`) VALUES
(1, 1, 5, '2017-06-18', b'1', NULL, '2023-09-18 21:44:36.746943', '2023-09-18 21:44:36.746944'),
(2, 3, 1, '2021-09-26', b'1', NULL, '2023-09-18 21:44:36.746978', '2023-09-18 21:44:36.746979'),
(3, 9, 1, '2021-09-27', b'1', NULL, '2023-09-18 21:44:36.746990', '2023-09-18 21:44:36.746990'),
(4, 3, 4, '2022-08-01', b'1', NULL, '2023-09-18 21:44:36.746996', '2023-09-18 21:44:36.746996'),
(5, 5, 1, '2019-08-30', b'1', NULL, '2023-09-18 21:44:36.747003', '2023-09-18 21:44:36.747003'),
(6, 10, 5, '2020-02-02', b'1', NULL, '2023-09-18 21:44:36.747009', '2023-09-18 21:44:36.747009');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `voertuig`
--
ALTER TABLE `voertuig`
  ADD CONSTRAINT `voertuig_ibfk_1` FOREIGN KEY (`TypeVoertuigId`) REFERENCES `typevoertuig` (`Id`);

--
-- Constraints for table `voertuiginstructeur`
--
ALTER TABLE `voertuiginstructeur`
  ADD CONSTRAINT `voertuiginstructeur_ibfk_1` FOREIGN KEY (`VoertuigId`) REFERENCES `voertuig` (`Id`),
  ADD CONSTRAINT `voertuiginstructeur_ibfk_2` FOREIGN KEY (`InstructeurId`) REFERENCES `instructeur` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
