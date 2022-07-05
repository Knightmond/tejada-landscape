-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 01:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tejadalandscape`
--

--
-- Dumping data for table `appointments`
--

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'img/z9JISOnvfO5Rl3oXxGBt9qUdknE0r8RT3pw2pcUv.jpg','2022-06-22 03:35:57', '2022-06-22 03:35:57'),
(2, 'img/zypZM2Jb6ZFku93f4N1IyNeelGGfcSECXOyDTq1M.jpg', '2022-06-22 03:36:11', '2022-06-22 03:36:11'),
(3, 'img/NNLU99oV2I6UNnKf5kIz6GhtAlh0na1RaFRLqBc4.jpg', '2022-06-22 03:36:21', '2022-06-22 03:36:21'),
(4, 'img/Gda4KSMedJJw0RfxHoaHCeeSR0M8vma3CGcEDcgb.jpg', '2022-06-22 03:36:32', '2022-06-22 03:36:32');

-- --------------------------------------------------------

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'e@e.com', NULL, '$2y$10$4JPqMB8IpiqHxS8nuvgiUubloLxbsZgjrTBJ2WQ3qo36YiTqCbB0K', NULL, '2022-06-22 03:31:13', '2022-06-22 03:31:13');

