-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 10:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `authorid` text NOT NULL,
  `title` text NOT NULL,
  `pub_year` year(4) NOT NULL,
  `genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `authorid`, `title`, `pub_year`, `genre`) VALUES
(2, 'Charles Dickens', 'Moby Dick', 2020, 'Fiction'),
(5, 'JK Rowling', 'Harry Potter and the Chamber of Secrets', 1996, 'fiction'),
(6, 'JK Rowling', 'Harry Potter and the Deathly Hallows', 2005, 'fiction'),
(7, 'JK Rowling', 'Harry Potter and the Goblet of Fire', 2003, 'fiction'),
(8, 'JK Rowling', 'Harry Potter and the socerers stone', 1994, 'fiction'),
(9, 'Adolf Hitler', 'Mein Kampf', 1946, 'biographies'),
(11, 'JK Rowling', 'Harry Potter and The Audacity Of this Bitch', 2021, 'fiction'),
(20, 'Andrew Roberts', 'Napolean', 2009, 'Non-Fiction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
