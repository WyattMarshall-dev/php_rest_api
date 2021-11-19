-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 08:11 AM
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
  `isbn` text NOT NULL,
  `author` text NOT NULL,
  `title` text NOT NULL,
  `pub_year` year(4) NOT NULL,
  `genre` text NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `author`, `title`, `pub_year`, `genre`, `thumbnail`, `created_at`, `updated_at`) VALUES
(47, '978-0099598474', 'Charles Dickens', 'Test Post', 2005, 'Non-Fiction', 'posed.jpeg', '2021-11-10 22:40:16', '2021-11-16 20:56:37'),
(49, '978-1408855652', 'JK Rowling', 'Harry Potter and the Philosophers Stone', 1958, 'Fiction', 'Lysefjord_Norway.jpeg', '2021-11-10 22:50:37', '2021-11-16 22:55:31'),
(51, '9780099533474', 'JK Rowling', 'Harry Potter and the Chamber of Secrets', 2020, 'Fiction', '169880917_187071733071225_6888021634108316545_n.jpg', '2021-11-10 22:52:11', '2021-11-10 22:52:11'),
(52, '978-0099588474', 'JK Rowling', 'Harry Potter and the Goblet of Fire', 2020, 'Non-Fiction', '96800454_552158485488028_6573421182145043164_n.jpg', '2021-11-11 05:33:37', '2021-11-16 06:38:19'),
(53, '978-234234234', 'Andrew Roberts', 'Napoleon: A Life', 2021, 'biographies', 'C0122(3).jpg', '2021-11-16 07:50:22', '2021-11-16 08:37:34'),
(54, '9780099533474', 'Charles Dickens', 'Harry Potter and The Audacity Of this Bitch', 2009, 'Fiction', 'C0122(1).jpg', '2021-11-16 08:29:37', '2021-11-16 08:31:27'),
(55, '978-0099588474', 'Andrew Roberts', 'Another title', 1996, 'Non-Fiction', 'C0127(2).jpg', '2021-11-16 08:30:06', '2021-11-16 21:06:51'),
(56, '9780099533474', 'JK Rowling', 'Harry Potter and the Chamber of Secrets', 2020, 'Fiction', '169880917_187071733071225_6888021634108316545_n.jpg', '2021-11-10 22:52:11', '2021-11-10 22:52:11'),
(73, '978-1408855652', 'JK Rowling', 'Custom Wood and Metal Coffee Table', 2020, 'Fiction', 'c90aa02ca0d1f987912e0bfcc10877ed.jpg', '2021-11-18 03:08:16', '2021-11-18 03:09:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
