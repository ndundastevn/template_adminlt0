-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 03:10 PM
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
-- Database: `template_adminlte`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(200) NOT NULL,
  `log_user_id` int(200) NOT NULL,
  `log_user_type` varchar(200) NOT NULL,
  `log_date` varchar(200) NOT NULL,
  `log_ip_address` varchar(200) NOT NULL,
  `log_device` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `log_user_id`, `log_user_type`, `log_date`, `log_ip_address`, `log_device`) VALUES
(1, 1, 'System Administrator', '2024-07-29 13:11:03', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0'),
(2, 1, 'System Administrator', '2024-07-29 13:12:55', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0'),
(3, 1, 'System Administrator', '2024-07-29 13:15:17', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0'),
(4, 1, 'System Administrator', '2024-07-29 16:15:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(5, 1, 'System Administrator', '2024-07-29 16:16:24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(6, 1, 'System Administrator', '2024-07-29 22:23:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(7, 1, 'System Administrator', '2024-07-29 22:29:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(8, 1, 'System Administrator', '2024-07-30 08:56:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(9, 1, 'System Administrator', '2024-07-30 09:29:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(10, 1, 'System Administrator', '2024-07-30 09:30:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(11, 1, 'System Administrator', '2024-07-30 09:36:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(12, 1, 'System Administrator', '2024-07-30 18:49:25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(13, 1, 'System Administrator', '2024-07-30 20:45:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(14, 1, 'System Administrator', '2024-07-31 05:53:23', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(15, 1, 'System Administrator', '2024-07-31 09:35:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(16, 1, 'System Administrator', '2024-07-31 09:41:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(17, 1, 'System Administrator', '2024-07-31 09:49:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(18, 1, 'System Administrator', '2024-07-31 10:08:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(19, 1, 'System Administrator', '2024-07-31 11:52:02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(20, 1, 'System Administrator', '2024-07-31 12:20:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(21, 5, 'Revenue Collector', '2024-07-31 13:08:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(22, 7, 'Executive', '2024-07-31 13:17:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(23, 7, 'Executive', '2024-07-31 14:50:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(24, 5, 'Revenue Collector', '2024-07-31 15:03:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(25, 7, 'Executive', '2024-07-31 15:24:20', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(26, 1, 'System Administrator', '2024-07-31 16:13:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(27, 7, 'Executive', '2024-07-31 16:17:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(28, 7, 'Executive', '2024-07-31 16:18:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(29, 1, 'System Administrator', '2024-07-31 16:44:33', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(30, 7, 'Executive', '2024-07-31 16:49:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(31, 7, 'Executive', '2024-08-01 09:04:27', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(32, 1, 'System Administrator', '2024-08-01 09:09:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(33, 8, 'Ward Administrator', '2024-08-01 09:14:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(34, 1, 'System Administrator', '2024-08-01 09:18:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(35, 7, 'Executive', '2024-08-01 09:18:45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(36, 8, 'Ward Administrator', '2024-08-01 09:27:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(37, 7, 'Executive', '2024-07-31 17:20:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(38, 7, 'Executive', '2024-08-01 12:01:19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(39, 7, 'Executive', '2024-08-01 12:29:50', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(40, 1, 'System Administrator', '2024-08-01 16:05:48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(41, 5, 'Revenue Collector', '2024-08-01 17:07:04', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(42, 1, 'System Administrator', '2024-08-02 09:50:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(43, 5, 'Revenue Collector', '2024-08-02 10:37:48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(44, 10, 'Revenue Collector', '2024-08-02 11:38:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(45, 8, 'Ward Administrator', '2024-08-02 11:39:52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(46, 8, 'Ward Administrator', '2024-08-02 12:02:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(47, 8, 'Ward Administrator', '2024-08-02 12:07:39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(48, 7, 'System Administrator', '2024-08-02 12:13:26', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(49, 8, 'Ward Administrator', '2024-08-02 12:15:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(50, 8, 'Ward Administrator', '2024-08-02 12:28:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(51, 10, 'Revenue Collector', '2024-08-02 15:04:46', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(52, 8, 'Ward Administrator', '2024-08-02 15:05:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(53, 8, 'Ward Administrator', '2024-08-03 07:53:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(54, 8, 'Ward Administrator', '2024-08-04 00:55:02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(55, 5, 'Revenue Collector', '2024-08-05 10:15:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(56, 8, 'Ward Administrator', '2024-08-05 10:18:25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(57, 7, 'System Administrator', '2024-08-05 11:53:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(58, 8, 'Ward Administrator', '2024-08-05 14:59:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(59, 5, 'Revenue Collector', '2024-08-05 15:08:18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(60, 5, 'Revenue Collector', '2024-08-05 15:18:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(61, 7, 'System Administrator', '2024-08-05 15:39:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(62, 8, 'Ward Administrator', '2024-08-05 16:11:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(63, 7, 'System Administrator', '2024-08-06 12:24:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(64, 7, 'System Administrator', '2024-08-07 06:44:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(65, 8, 'Ward Administrator', '2024-08-07 06:45:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(66, 7, 'System Administrator', '2024-08-07 13:09:26', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(67, 7, 'System Administrator', '2024-08-08 03:26:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(68, 7, 'System Administrator', '2024-08-08 10:13:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(69, 8, 'Ward Administrator', '2024-08-08 10:18:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(70, 7, 'System Administrator', '2024-08-08 10:36:20', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(71, 8, 'Ward Administrator', '2024-08-08 10:45:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(72, 7, 'System Administrator', '2024-08-09 02:48:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(73, 8, 'Ward Administrator', '2024-08-09 03:49:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0'),
(74, 7, 'System Administrator', '2024-08-09 11:57:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(75, 5, 'Revenue Collector', '2024-08-09 12:00:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(76, 7, 'System Administrator', '2024-08-09 12:32:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(77, 11, 'Ward Administrator', '2024-08-09 12:33:59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(78, 11, 'ECMs', '2024-08-09 12:39:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(79, 11, 'Director', '2024-08-09 12:43:23', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(80, 8, 'Ward Administrator', '2024-08-09 13:47:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(81, 5, 'Revenue Collector', '2024-08-09 13:53:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(82, 5, 'Revenue Collector', '2024-08-09 13:55:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(83, 8, 'Ward Administrator', '2024-08-09 14:00:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(84, 11, 'Director', '2024-08-09 15:04:19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(85, 5, 'Revenue Collector', '2024-08-09 15:08:04', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(86, 8, 'Ward Administrator', '2024-08-09 16:21:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(87, 11, 'Director', '2024-08-10 16:35:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(88, 8, 'Ward Administrator', '2024-08-10 16:44:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(89, 7, 'System Administrator', '2024-08-11 13:16:51', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(90, 8, 'Ward Administrator', '2024-08-11 15:20:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(91, 7, 'System Administrator', '2024-08-11 15:36:28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(92, 8, 'Ward Administrator', '2024-08-11 15:39:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(93, 8, 'Ward Administrator', '2024-08-12 09:56:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(94, 8, 'Ward Administrator', '2024-08-12 11:09:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(95, 5, 'Revenue Collector', '2024-08-12 11:11:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(96, 7, 'System Administrator', '2024-08-12 11:22:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(97, 8, 'Ward Administrator', '2024-08-12 11:25:38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(98, 8, 'Ward Administrator', '2024-08-12 12:11:07', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(99, 7, 'System Administrator', '2024-08-12 12:40:39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(100, 1, 'Revenue Collector', '2024-08-12 12:50:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(101, 7, 'System Administator', '2024-08-12 12:56:18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(102, 8, 'Ward Administrator', '2024-08-12 14:51:45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(103, 5, 'Revenue Collector', '2024-08-12 16:20:19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(104, 8, 'Ward Administrator', '2024-08-12 16:26:46', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(105, 5, 'Revenue Collector', '2024-08-12 16:32:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(106, 8, 'Ward Administrator', '2024-08-13 09:51:02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(107, 7, 'System Administator', '2024-08-14 12:44:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(108, 8, 'Ward Administrator', '2024-08-14 12:50:36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(109, 7, 'System Administator', '2024-08-14 13:16:39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(110, 7, 'System Administrator', '2024-08-14 13:28:41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(111, 8, 'Ward Administrator', '2024-08-15 09:40:32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(112, 5, 'Revenue Collector', '2024-08-15 10:36:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(113, 8, 'Ward Administrator', '2024-08-15 10:45:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(114, 5, 'Revenue Collector', '2024-08-15 10:48:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(115, 8, 'Ward Administrator', '2024-08-15 12:12:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(116, 5, 'Revenue Collector', '2024-08-15 12:40:41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(117, 11, 'Director', '2024-08-15 12:51:59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(118, 8, 'Ward Administrator', '2024-08-15 13:07:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(119, 5, 'Revenue Collector', '2024-08-15 13:28:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(120, 7, 'System Administrator', '2024-08-15 13:31:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(121, 8, 'Ward Administrator', '2024-08-15 13:32:51', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(122, 8, 'Ward Administrator', '2024-08-15 13:40:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(123, 5, 'Revenue Collector', '2024-08-15 13:42:18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(124, 8, 'Ward Administrator', '2024-08-15 13:43:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(125, 7, 'System Administrator', '2024-08-15 16:03:50', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(126, 8, 'Ward Administrator', '2024-08-15 16:06:24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(127, 7, 'System Administrator', '2024-08-15 16:10:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(128, 7, 'System Administrator', '2024-08-15 16:25:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(129, 5, 'Revenue Collector', '2024-08-16 08:49:41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(130, 7, 'System Administrator', '2024-08-16 08:50:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(131, 7, 'System Administrator', '2024-08-16 09:05:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(132, 5, 'Revenue Collector', '2024-08-16 09:16:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(133, 7, 'System Administrator', '2024-08-16 09:21:59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(134, 8, 'Ward Administrator', '2024-08-16 10:02:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(135, 5, 'Revenue Collector', '2024-08-16 10:04:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(136, 8, 'Ward Administrator', '2024-08-16 10:06:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(137, 8, 'Ward Administrator', '2024-08-16 10:30:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(138, 8, 'Ward Administrator', '2024-08-16 14:08:53', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(139, 7, 'System Administrator', '2024-08-18 16:00:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(140, 8, 'Ward Administrator', '2024-08-18 16:15:26', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(141, 5, 'Revenue Collector', '2024-08-19 11:25:33', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(142, 8, 'Ward Administrator', '2024-08-19 11:28:34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(143, 5, 'Revenue Collector', '2024-08-19 11:30:02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(144, 8, 'Ward Administrator', '2024-08-19 11:32:24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(145, 5, 'Revenue Collector', '2024-08-19 11:49:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(146, 8, 'Ward Administrator', '2024-08-19 11:50:26', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(147, 5, 'Revenue Collector', '2024-08-19 11:58:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(148, 8, 'Ward Administrator', '2024-08-19 12:14:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(149, 7, 'System Administrator', '2024-08-19 14:40:50', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(150, 8, 'Ward Administrator', '2024-08-19 15:14:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(151, 8, 'Ward Administrator', '2024-08-19 16:05:36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(152, 5, 'Revenue Collector', '2024-08-19 16:05:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(153, 8, 'Ward Administrator', '2024-08-19 16:12:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(154, 5, 'Revenue Collector', '2024-08-19 16:52:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(155, 8, 'Ward Administrator', '2024-08-19 16:56:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(156, 7, 'System Administrator', '2024-08-19 17:30:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(157, 5, 'Revenue Collector', '2024-08-19 17:44:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(158, 8, 'Ward Administrator', '2024-08-19 17:45:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(159, 7, 'System Administrator', '2024-08-20 07:49:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(160, 8, 'Ward Administrator', '2024-08-20 08:26:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(161, 7, 'System Administrator', '2024-08-20 20:36:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(162, 5, 'Revenue Collector', '2024-08-20 21:18:18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(163, 8, 'Ward Administrator', '2024-08-20 21:25:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(164, 8, 'Ward Administrator', '2024-08-20 22:25:16', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(165, 7, 'System Administrator', '2024-08-20 22:25:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(166, 8, 'Ward Administrator', '2024-08-20 22:33:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(167, 8, 'Ward Administrator', '2024-08-20 23:11:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(168, 5, 'Revenue Collector', '2024-08-20 23:32:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(169, 8, 'Ward Administrator', '2024-08-20 23:33:52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(170, 5, 'Revenue Collector', '2024-08-20 23:59:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(171, 8, 'Ward Administrator', '2024-08-21 00:01:38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(172, 5, 'Revenue Collector', '2024-08-21 13:59:04', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(173, 8, 'Ward Administrator', '2024-08-21 14:00:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(174, 5, 'Revenue Collector', '2024-08-21 17:22:11', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(175, 8, 'Ward Administrator', '2024-08-21 17:26:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(176, 7, 'System Administrator', '2024-08-21 17:44:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(177, 7, 'System Administrator', '2024-08-21 17:44:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(178, 8, 'Ward Administrator', '2024-08-21 17:49:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(179, 8, 'Ward Administrator', '2024-08-21 17:49:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(180, 8, 'Ward Administrator', '2024-08-21 17:52:23', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(181, 7, 'System Administrator', '2024-08-21 17:52:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(182, 8, 'Ward Administrator', '2024-08-21 17:52:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(183, 8, 'Ward Administrator', '2024-08-21 17:53:23', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(184, 8, 'Ward Administrator', '2024-08-21 17:56:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(185, 7, 'System Administrator', '2024-08-21 17:58:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(186, 8, 'Ward Administrator', '2024-08-21 17:59:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(187, 5, 'Revenue Collector', '2024-08-21 19:16:23', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(188, 5, 'Revenue Collector', '2024-08-21 19:17:25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(189, 5, 'Revenue Collector', '2024-08-21 19:17:45', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(190, 8, 'Ward Administrator', '2024-08-21 19:18:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(191, 7, 'System Administrator', '2024-08-21 19:21:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(192, 8, 'Ward Administrator', '2024-08-22 07:42:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(193, 5, 'Revenue Collector', '2024-08-22 07:48:38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(194, 8, 'Ward Administrator', '2024-08-22 07:58:48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(195, 8, 'Ward Administrator', '2024-08-22 08:00:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(196, 7, 'System Administrator', '2024-08-22 08:01:04', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(197, 8, 'Ward Administrator', '2024-08-22 08:02:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(198, 7, 'System Administrator', '2024-08-22 08:59:07', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(199, 8, 'Ward Administrator', '2024-08-22 09:11:32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(200, 8, 'Ward Administrator', '2024-08-22 10:10:33', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(201, 7, 'System Administrator', '2024-08-22 10:10:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(202, 8, 'Ward Administrator', '2024-08-22 10:16:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(203, 5, 'Revenue Collector', '2024-08-22 12:43:02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(204, 8, 'Ward Administrator', '2024-08-22 13:06:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(205, 5, 'Revenue Collector', '2024-08-22 13:25:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(206, 8, 'Ward Administrator', '2024-08-22 13:28:29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(207, 5, 'Revenue Collector', '2024-08-22 13:31:04', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(208, 8, 'Ward Administrator', '2024-08-22 14:40:20', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(209, 5, 'Revenue Collector', '2024-08-22 16:17:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(210, 8, 'Ward Administrator', '2024-08-22 16:24:46', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(211, 5, 'Revenue Collector', '2024-08-23 10:30:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(212, 5, 'Revenue Collector', '2024-08-23 10:31:07', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(213, 8, 'Ward Administrator', '2024-08-23 10:34:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(214, 7, 'System Administrator', '2024-08-23 10:37:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(215, 8, 'Ward Administrator', '2024-08-23 10:45:52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(216, 5, 'Revenue Collector', '2024-08-23 10:47:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(217, 7, 'System Administrator', '2024-08-23 10:55:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(218, 5, 'Revenue Collector', '2024-08-23 11:19:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(219, 8, 'Ward Administrator', '2024-08-23 11:19:51', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(220, 5, 'Revenue Collector', '2024-08-23 11:20:36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(221, 8, 'Ward Administrator', '2024-08-23 11:22:07', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(222, 7, 'System Administrator', '2024-08-23 11:34:48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(223, 5, 'Revenue Collector', '2024-08-23 11:40:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(224, 8, 'Ward Administrator', '2024-08-23 11:43:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(225, 7, 'System Administrator', '2024-08-23 11:57:34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(226, 8, 'Ward Administrator', '2024-08-23 12:04:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(227, 7, 'System Administrator', '2024-08-23 12:11:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(228, 5, 'Revenue Collector', '2024-08-23 12:16:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(229, 7, 'System Administrator', '2024-08-23 12:22:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(230, 8, 'Ward Administrator', '2024-08-23 12:46:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(231, 5, 'Revenue Collector', '2024-08-23 12:53:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(232, 8, 'Ward Administrator', '2024-08-23 12:54:59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(233, 5, 'Revenue Collector', '2024-08-23 15:05:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(234, 8, 'Ward Administrator', '2024-08-24 12:17:29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(235, 7, 'System Administrator', '2024-08-24 12:29:18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(236, 8, 'Ward Administrator', '2024-08-24 12:30:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(237, 7, 'System Administrator', '2024-08-24 13:21:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(238, 8, 'Ward Administrator', '2024-08-25 07:00:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(239, 8, 'Ward Administrator', '2024-08-25 07:07:15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(240, 7, 'System Administrator', '2024-08-25 07:09:19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(241, 8, 'Ward Administrator', '2024-08-25 07:57:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(242, 5, 'Revenue Collector', '2024-08-25 09:43:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(243, 8, 'Ward Administrator', '2024-08-25 09:44:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(244, 5, 'Revenue Collector', '2024-08-25 19:58:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(245, 8, 'Ward Administrator', '2024-08-25 19:59:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(246, 8, 'Ward Administrator', '2024-08-25 20:01:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(247, 5, 'Revenue Collector', '2024-08-25 20:02:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(248, 8, 'Ward Administrator', '2024-08-25 20:03:39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(249, 7, 'System Administrator', '2024-08-25 22:01:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(250, 8, 'Ward Administrator', '2024-08-25 22:04:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(251, 7, 'System Administrator', '2024-08-25 22:54:34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(252, 8, 'Ward Administrator', '2024-08-26 00:16:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(253, 7, 'System Administrator', '2024-08-26 00:33:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(254, 5, 'Revenue Collector', '2024-08-27 07:02:47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(255, 5, 'Revenue Collector', '2024-08-27 07:08:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(256, 8, 'Ward Administrator', '2024-08-27 07:16:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(257, 8, 'Ward Administrator', '2024-08-27 07:17:59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(258, 8, 'Ward Administrator', '2024-08-27 10:18:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(259, 8, 'Ward Administrator', '2024-08-27 15:21:19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(260, 16, 'System Administrator', '2024-08-27 15:25:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(261, 8, 'Ward Administrator', '2024-08-27 15:27:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(262, 8, 'Ward Administrator', '2024-08-27 15:32:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(263, 8, 'Ward Administrator', '2024-08-27 16:52:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(264, 16, 'System Administrator', '2024-08-28 14:00:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(265, 16, 'System Administrator', '2024-08-28 14:36:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(266, 16, 'System Administrator', '2024-08-28 14:36:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0'),
(267, 16, 'System Administrator', '2024-08-28 15:50:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0');

-- --------------------------------------------------------

--
-- Table structure for table `mailer_settings`
--

CREATE TABLE `mailer_settings` (
  `id` int(20) NOT NULL,
  `mailer_host` varchar(200) DEFAULT NULL,
  `mailer_port` varchar(200) DEFAULT NULL,
  `mailer_protocol` varchar(200) DEFAULT NULL,
  `mailer_username` varchar(200) DEFAULT NULL,
  `mailer_mail_from_name` varchar(200) DEFAULT NULL,
  `mailer_mail_from_email` varchar(200) DEFAULT NULL,
  `mailer_password` varchar(200) DEFAULT NULL,
  `mailer_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mailer_settings`
--

INSERT INTO `mailer_settings` (`id`, `mailer_host`, `mailer_port`, `mailer_protocol`, `mailer_username`, `mailer_mail_from_name`, `mailer_mail_from_email`, `mailer_password`, `mailer_status`) VALUES
(2, 'rbx109.truehost.cloud', '587', 'tls', 'litecms@devlan.co.ke', 'Government of Makueni County', 'litecms@devlan.co.ke', '20Devlan@', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `postfix_mailer_configs`
--

CREATE TABLE `postfix_mailer_configs` (
  `postfix_mailer_id` int(200) NOT NULL,
  `postfix_mailer_from_name` varchar(200) NOT NULL,
  `postfix_mailer_from_email` varchar(200) NOT NULL,
  `postfix_mailer_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postfix_mailer_configs`
--

INSERT INTO `postfix_mailer_configs` (`postfix_mailer_id`, `postfix_mailer_from_name`, `postfix_mailer_from_email`, `postfix_mailer_status`) VALUES
(1, 'GoMC - Revenue Collection and Reporting Tool', 'hdct@makueni.go.ke', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `user_names` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_phone_number` varchar(200) DEFAULT NULL,
  `user_personal_number` varchar(200) DEFAULT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_password_reset_token` varchar(200) DEFAULT NULL,
  `user_access_level` varchar(200) NOT NULL,
  `user_ward_id` int(200) DEFAULT NULL,
  `user_change_password` int(2) NOT NULL DEFAULT 0,
  `user_active_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_names`, `user_email`, `user_phone_number`, `user_personal_number`, `user_password`, `user_password_reset_token`, `user_access_level`, `user_ward_id`, `user_change_password`, `user_active_status`) VALUES
(16, 'faith admin', 'admin@example.com', '05545785585', '225586', '71fbbea0206b21ef688d33f0160602628dab9c7d', NULL, 'System Administrator', 18, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `LogUserIDetails` (`log_user_id`);

--
-- Indexes for table `mailer_settings`
--
ALTER TABLE `mailer_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postfix_mailer_configs`
--
ALTER TABLE `postfix_mailer_configs`
  ADD PRIMARY KEY (`postfix_mailer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `UserWardID` (`user_ward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `mailer_settings`
--
ALTER TABLE `mailer_settings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postfix_mailer_configs`
--
ALTER TABLE `postfix_mailer_configs`
  MODIFY `postfix_mailer_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `UserWardID` FOREIGN KEY (`user_ward_id`) REFERENCES `ward` (`ward_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
