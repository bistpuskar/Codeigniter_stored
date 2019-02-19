-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2019 at 07:29 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_user` (IN `firstName` VARCHAR(100), IN `lastName` VARCHAR(100))  BEGIN
INSERT into users(first_name,last_name)
values(firstName, lastName);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user` (IN `userId` INT)  BEGIN
delete from users where users_id=userId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_user` (IN `userId` INT, OUT `firstName` VARCHAR(100), OUT `lastName` VARCHAR(100))  BEGIN
SELECT first_name, last_name
INTO firstName, lastName
FROM users
WHERE users_id = userId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_user` (IN `userId` INT, IN `firstName` VARCHAR(100), IN `lastName` VARCHAR(100))  BEGIN
update users set first_name=firstName,last_name=lastName where users_id=userId;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `first_name`, `last_name`) VALUES
(1, 'Joey', 'Rivera'),
(2, 'John', 'Doe'),
(3, 'ram', 'bohara'),
(4, 'hari', 'sharma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
