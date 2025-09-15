-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2025 at 01:36 AM
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
-- Database: `datamahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `Nama` varchar(100) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`Nama`, `NIM`, `Jurusan`, `Email`, `foto`) VALUES
('asiufhfsadnkfjas', '0806022410001', 'IMT', 'redacted', '1.png'),
('eufhwauehfd', '0806022410002', 'IMT', 'redacted', '2.png'),
('egwfaewf', '0806022410003', 'IMT', 'redacted', '3.png'),
('hefwiuahewiulhf', '0806022410004', 'IMT', 'redacted', '4.png'),
('fiewhaiufewifjw', '0806022410005', 'IMT', 'redacted', '5.png'),
('wqgpodqwjokdoq', '0806022410006', 'IMT', 'redacted', '6.png'),
('nmxvcbvkcxng', '0806022410007', 'IMT', 'redacted', '7.png'),
('qpqoijeijeqe', '0806022410008', 'IMT', 'redacted', '8.png'),
('alskfhskfhdfdgf', '0806022410009', 'IMT', 'redacted', '9.png'),
('hfjfjgkfhgj', '0806022410010', 'IMT', 'redacted', '10.png'),
('wdaswdasssw', '0806022410011', 'IMT', 'redacted', '11.png'),
('ryturytyrut34', '0806022410012', 'IMT', 'redacted', '12.png'),
('tituroyutyrteg', '0806022410013', 'IMT', 'redacted', '13.png'),
('pzlakfjdkvm', '0806022410014', 'IMT', 'redacted', '14.png'),
('aldoiqwudihqw', '0806022410015', 'IMT', 'redacted', '15.png'),
('pokjhvgijhbdwasdvf', '0806022410016', 'IMT', 'redacted', '16.png'),
('waedrfghbnjedrftyg', '0806022410017', 'IMT', 'redacted', '17.png'),
('xsdcgyhujcftgyhu', '0806022410018', 'IMT', 'redacted', '18.png'),
('mcxnkfdjsheiu', '0806022410019', 'IMT', 'redacted', '19.png'),
('wzasexftgyhumjhgnb', '0806022410020', 'IMT', 'redacted', '20.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
