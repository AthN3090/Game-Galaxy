-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 07:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ata`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `Serial No.` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `image_path` longtext NOT NULL,
  `video` longtext NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `category` longtext NOT NULL,
  `developer` longtext NOT NULL,
  `publisher` longtext NOT NULL,
  `released_date` text NOT NULL,
  `platform` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Serial No.`, `title`, `image_path`, `video`, `description`, `price`, `category`, `developer`, `publisher`, `released_date`, `platform`) VALUES
(1, 'Quantum break', 'game_rpg02', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/w-aAWXKZS9M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Quantum Break is a science fiction action-adventure third-person shooter video game developed by Remedy Entertainment and published by Microsoft Studios. The game was released worldwide for Microsoft ', 2550, 'RPG', 'Remedy Entertainment', ' Microsoft Studios', '5 April 2016', 'XBOX ONE, PC'),
(2, 'The Evil Within 2', 'game_other2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KvP2H0UERZw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Detective Sebastian Castellanos has lost everything, including his daughter, Lily. To save her, he must descend into the nightmarish world of STEM. Horrifying threats emerge from every corner, and he ', 2129, 'Others', 'Tango Gameworks', 'Bethesda Softworks', 'Oct 13, 2017', 'XBOX ONE, PC, PS4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`Serial No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `Serial No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
