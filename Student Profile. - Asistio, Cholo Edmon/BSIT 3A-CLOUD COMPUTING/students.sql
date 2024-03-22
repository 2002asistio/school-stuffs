-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 05:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsit 3b-cloud computing`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Name` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `BloodType` varchar(50) NOT NULL,
  `IsActive` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `Age`, `Address`, `Birthdate`, `Gender`, `BloodType`, `IsActive`) VALUES
('Besa, Jaymark F.\r\n', '22', 'Caloocan City', '2002-07-19', 'MALE', 'N/A', ' 1'),
('CADAYONA, KESTER LANCE R.', '21', 'NAVOTAS CITY', '2002-04-12', 'MALE', 'N/A', '1'),
('Medina, Alfrancis', '', 'Valenzuela City', '2000-08-12', 'MALE', '- B', '1'),
('De Guzman, Eron Marc', '', 'Navotas City', '2002-09-13', 'MALE', 'N/A', '1'),
('Gumabon, Ericka', '', 'Caloocan City', '2002-12-31', 'FEMALE', 'N/A', '1'),
('Buenafe, Elly Ched', '', 'Caloocan City', '2001-05-08', 'MALE', 'AB', '1'),
('BACUS, EMAN G.', '', 'CALOOCAN CITY', '2001-02-06', 'MALE', 'ONGGOY', '1'),
('GRUEZO, ALLEN G.', '', 'MALABON CITY', '2003-07-10', 'MALE', 'A+', '1'),
('NOGAS, JEAN', '', 'CALOOCAN CITY', '2002-19-12', 'FEMALE', 'O', '1'),
('AGPOON, CLAIRE', '', 'QUEZON CITY', '2003-08-09', 'FEMALE', 'O', '1'),
('TANDOY, JOHN MICHAEL', '', 'NAVOTAS CITY', '2000-09-08', 'MALE', 'A+', '1'),
('JASME, JASMIN GRACE', '', 'MALABON CITY', '2000-02-14', 'FEMALE', 'A+', '1'),
('FETALVERO, RON HARMONE D.', '', 'TONDO MANILA', '2003-30-04', 'MALE', 'A', '1'),
('LACSA, REEVA', '', 'MALABON CITY', '2000-05-09', 'FEMALE', 'A+', '1'),
('MONREAL,BERNARD', '', 'NAVOTAS CITY', '01-02-03', 'MALE', 'A KITA', '1'),
('MANALANSANG, AIRA MAE', '', 'MALABON CITY', '1999-09-08', 'FEMALE', 'A+', '1'),
('BERNADAS, SIDNEY NEO ', '', 'MALABON CITY', '2003-06-14', 'MALE', 'O', '1'),
('CELSO II REYNALDO', '', 'NAVOTAS CITY', '2002-05-08', 'MALE', 'B', '1'),
('JOHN LOYD CABANIGAN', '', 'NAVOTAS CITY', '2002-04-12', 'MALE', 'O', '1'),
('DAYO, ANGEL', '', 'NAVOTAS CITY', '2002-03-12', 'FEMALE', 'N/A', '1'),
('DESOYO, CHRISTINE MAE V.', '', 'MALABON CITY', '2002-07-30', 'FEMALE', 'A', '1'),
('CALOING DARIO R', '', 'NAVOTAS CITY', '2005-15-09', 'MALE', ' B', '1'),
('MAGBALOT JOHN DENVER', '', 'MALABON CITY', '2002-23-10\r\n', 'MALE', 'A+', '1'),
('CAMAÑO, SADRAC AERON D', '', 'NAVOTAS CITY', '2002-18-06', ' MALE', 'O', '1'),
('MASOCOL, MICHA ELA M.', '', 'MALABON CITY', 'MARCH 27, 2003', 'FEMALE', 'B', '1'),
('SAMSON, NATHANIEL R.', '', 'CALOOCAN', '2002-02-07', 'MALE', 'O+', '1'),
('GUMANGCAM, JHON LOYD F.', '', 'NAVOTAS CITY', 'SEPTEMBER 9, 2003', 'MALE', 'O', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
