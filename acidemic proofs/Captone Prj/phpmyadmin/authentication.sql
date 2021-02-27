-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 04:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Commet_id` int(64) NOT NULL,
  `ID` int(64) NOT NULL,
  `Post_id` int(64) NOT NULL,
  `body` mediumtext NOT NULL,
  `Created_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(64) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `AuthCode` int(4) NOT NULL,
  `created_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Debug` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Username`, `Password`, `AuthCode`, `created_Date`, `Debug`) VALUES
(1, 'admin@test.com', 'admin', 'admin', 4377, '2019-11-19 15:42:31', 1),
(23, 'test2@test.com', 'test2', '$2y$10$0t/KW1VqaDVbiCmKceL4X.nA2Tn0lMFBMZv2yQqvWrjhg94gmYDpa', 1680, '2019-11-19 15:42:31', 0),
(24, 'Apple@att.net', 'Apple', '$2y$10$eK5VKA9WEz4uaBq.v96zhOSAvz6gIeRACGsbPLOsWGHS25WTFoxhy', 0, '2019-11-19 15:42:31', 0),
(25, 'kdsjfalksjflak@att.net', 'kdsjfalksjflak', '$2y$10$ot5YybCSEySUmotNnO7LM.EXSDpccPqlDv4eNEuH7o07b6XKMamm6', 2270, '2019-11-19 15:42:31', 0),
(26, 'test@test.com', 'test', '$2y$10$ddrGjWtDKReKG381ECU5Y.doFka00BSYwn2VlyAlH9rbjIXF66Dly', 9534, '2019-11-19 15:42:31', 0),
(30, 'justmakingsureitstillworks@att.net', 'justmakingsureitstillworks', '$2y$10$VOIpBRlufUkZQxD.AHrjL.OIUD5w3Kcs0G3eVfPgNXQ2.wCjuBQwe', 8103, '2019-12-13 08:23:25', 0),
(31, 'test@teasdsast.com', 'test43', '$2y$10$4qeFXJ4cUwS5vflix5608.B.0YrsbFQCkwRvfQvNty3lbt8ZeuJ5.', 4682, '2019-12-13 17:22:54', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Commet_id`),
  ADD KEY `Commet_id_2` (`Commet_id`,`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `ID` (`ID`,`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Commet_id` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
