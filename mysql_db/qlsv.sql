-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2019 at 01:43 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv`
--
CREATE DATABASE IF NOT EXISTS `qlsv` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `qlsv`;

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `LopID` int(11) NOT NULL AUTO_INCREMENT,
  `MaLop` varchar(20) NOT NULL,
  `TenLop` varchar(100) NOT NULL,
  PRIMARY KEY (`LopID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`LopID`, `MaLop`, `TenLop`) VALUES
(3, 'THTD55', 'Tin há»c Tráº¯c Ä‘á»‹a K55'),
(4, 'THKT62', 'Tin há»c Kinh táº¿ K62'),
(6, 'CNPM65', 'CÃ´ng nghá»‡ pháº§n má»m K65'),
(7, 'HTTT64', 'Há»‡ thá»‘ng thÃ´ng tin K64');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `SinhVienID` int(11) NOT NULL AUTO_INCREMENT,
  `MaSinhVien` varchar(20) NOT NULL,
  `TenSinhVien` varchar(100) NOT NULL,
  `LopID` int(11) NOT NULL,
  PRIMARY KEY (`SinhVienID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`SinhVienID`, `MaSinhVien`, `TenSinhVien`, `LopID`) VALUES
(1, '0987654321', 'Nguyễn Văn A', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
