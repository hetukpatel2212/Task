-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 10:59 AM
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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`, `photo`, `company`) VALUES
(27, 'Hetuk', 'hetuksfsfa@gmail.com', 'Hetuk@2212', 'a', '7203954483', 'Male', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(28, 'Hetuk', 'hetuk@gmail.com', 'Hetuk@2212', 'a', '7203954483', 'Female', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(29, 'Hetuk', 'hetuk525252@gmail.com', 'Hetuk@2212', 'a', '7203954483', 'Female', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(30, 'Hetuk', 'hetuka@gmail.com', 'Hetuk@2212', 'a', '7203954483', 'Male', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(31, 'Hetukc', 'hetuk1222@gmail.com', 'Hetuk@2212', 'a', '7203954483', 'Male', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(32, 'HetukQ', 'hetukQ@gmail.com', 'hETUK@2212', 'a', '7203954483', 'Female', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(33, 'HetukQ', 'hetukQQ@gmail.com', 'hETUK@2212', 'a', '7203954483', 'Female', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(34, 'HetukQ', 'hetukQQQQQ@gmail.com', 'hETUK@2212', 'a', '7203954483', 'Female', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(35, 'Hetuk', 'hetuk@gmail.comQ', 'hEETUK@2212', 'a', '7203954483', 'Male', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(36, 'Hetuk', 'hetuk@gmail.AcomQ', 'hEETUK@2212', 'a', '7203954483', 'Male', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(37, 'HetukA', 'Ahetuk@gmail.com', 'hETUK@2212', 'a', '7203954483', 'Female', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined'),
(38, 'Hetuk', 'hetuk1qqq@gmail.com', 'Hetuk@2212', 'a', '7203954483', 'Male', 'C:\\fakepath\\happy-diwali-poster-with-diya-lamp-peacock-vector-illustration-indian-festival-lights-design_354831-1100.jpg', 'undefined');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
