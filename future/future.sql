-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2020 at 06:09 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `future`
--

-- --------------------------------------------------------

--
-- Table structure for table `commends`
--

CREATE TABLE `commends` (
  `Id` int(11) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `Text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commends`
--

INSERT INTO `commends` (`Id`, `Author`, `Time`, `Date`, `Text`) VALUES
(1, 'Артемий', '16:10:00', '2014-02-07', 'Почему такое сложное задание??? Мне кажется, нужно быть первоклассным программистом, чтобы выполнить его :('),
(2, 'Евдоким', '17:42:00', '2014-02-07', 'Если включить мозги, то все элементарно Ватсон!'),
(3, 'Савва', '18:05:00', '2014-02-07', 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commends`
--
ALTER TABLE `commends`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commends`
--
ALTER TABLE `commends`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
