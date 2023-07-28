-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 09:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tendangnhap` varchar(30) NOT NULL COMMENT 'tên đăng nhập',
  `matkhau` varchar(15) NOT NULL COMMENT 'mật khẩu',
  `quyenhan` int(1) NOT NULL COMMENT 'Admin là 1, user là 2',
  `ten` varchar(50) NOT NULL COMMENT 'Họ tên người dùng',
  `diachi` varchar(100) NOT NULL COMMENT 'địa chỉ người dùng',
  `sdt` varchar(14) NOT NULL COMMENT 'số điện thoại người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tendangnhap`, `matkhau`, `quyenhan`, `ten`, `diachi`, `sdt`) VALUES
('ADMIN', 'ADMIN', 1, '', '', ''),
('user1', 'user1', 2, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tendangnhap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
