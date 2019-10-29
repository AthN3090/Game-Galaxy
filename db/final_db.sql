-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 08:06 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` text NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `image_path` longtext NOT NULL,
  `video` longtext NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `category` longtext NOT NULL,
  `developer` longtext NOT NULL,
  `publisher` longtext NOT NULL,
  `released_date` text NOT NULL,
  `platform` longtext NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `image_path`, `video`, `description`, `price`, `category`, `developer`, `publisher`, `released_date`, `platform`, `tag`) VALUES
(2, 'The Evil Within 2', 'game_other02', 'https://www.youtube.com/embed/KvP2H0UERZw', 'Detective Sebastian Castellanos has lost everything, including his daughter, Lily. To save her, he must descend into the nightmarish world of STEM. Horrifying threats emerge from every corner, and he must rely on his wits to survive. For his one chance at redemption, the only way out is in.', 2129, 'Others', 'Tango Gameworks', 'Bethesda Softworks', '13 October 2017', 'XBOX ONE, PC, PS4', 'Featured'),
(3, 'Assasin\'s Creed Origins', 'game_adventure01', 'https://www.youtube.com/embed/cUuKIpCM2o0', 'The game is set in Egypt during the Ptolemaic period (48 BC) and recounts the secret fictional history of real-world events. The story explores the origins of the centuries-long conflict between the Brotherhood of Assassins, who fight for peace by promoting liberty, and The Order of the Ancients—forerunners to the Templar Order—who desire peace through the forced imposition of order. Origins received positive reviews from critics, who praised the story, characters, voice acting, reworked gameplay-systems, immersive world of Egypt and the visuals, while criticizing some of the pacing and technical issues.', 3487, 'Adventure', 'Ubisoft Montreal ', 'Ubisoft', '27 October 2017', 'XBOX ONE, PC, PS4', 'Featured'),
(4, 'Final Fantasy XV', 'game_rpg0', 'https://www.youtube.com/embed/fGdPVsTliT8', 'Final Fantasy XV takes place on the fictional world of Eos. All the world\'s countries, bar the kingdom of Lucis, are under the dominion of the empire of Niflheim. Noctis Lucis Caelum, heir to the Lucian throne, goes on a quest to retake his homeland and its magical Crystal after it is seized by Niflheim on the eve of peace negotiations between the two nations. However, he soon discovers that the Crystal is at the heart of a much greater threat to Eos, and that his role as the future king is key to averting an apocalyptic event from taking place.', 2000, 'RPG', 'Square Enix', 'Square Enix', '29 November 2016', 'XBOX ONE, PC, PS4', 'Featured'),
(5, 'Need For Speed: Payback', 'game_racing0', 'https://www.youtube.com/embed/K-5EdHZ0hBs', 'Need for Speed Payback is a racing video game developed by Ghost Games and published by Electronic Arts for Microsoft Windows, PlayStation 4 and Xbox One. It is the twenty-third installment in the Need for Speed series. The game was revealed with a trailer released on June 2, 2017. The game was released worldwide on November 10, 2017', 2300, 'Racing', 'Ghost Games', 'Electronics Arts', '10 November 2017', 'XBOX ONE, PC, PS4', 'Featured'),
(6, 'Forza Horizon 3', 'game_racing01', 'https://www.youtube.com/embed/RqkpT0qag5c', 'Forza Horizon 3 is an open world racing video game developed by Playground Games and published by Microsoft Studios for Xbox One and Microsoft Windows 10. The game features cross-platform play between the two platforms', 1980, 'Racing', 'Playground Games', 'Microsoft', '27 September @016', 'XBOX ONE, PC', 'Featured'),
(7, 'Nier: Automata', 'game_adventure02', 'https://www.youtube.com/embed/wJxNhJ8fjFk', 'The story is based around themes similar to Yoko\'s earlier works, such as people\'s impulse to kill, while also incorporating issues such as confronting prejudice and escaping difficult situations. The goal was to make a Nier game true to the spirit of the original , while simultaneously crafting a better combat system. As a project entirely new to the developers, the staff at Platinum Games faced multiple challenges when developing its gameplay and open world environment.', 1670, 'RPG', 'Platinum Games', 'Square enix', '23 February 2017', 'XBOX ONE, PC, PS4', 'Featured'),
(9, 'Gran Turismo Sport ', 'game_racing03', 'https://www.youtube.com/embed/0siGVASN9PQ', 'Gran Turismo Sport is a racing video game developed by Polyphony Digital and published by Sony Interactive Entertainment for PlayStation 4.', 1800, 'Racing', 'Polyphony Digital', 'Sony Interactive Entertainment', '10 November 2017', 'PS4', 'Featured'),
(10, 'Star Wars: Battlefront 2', 'game_shooter0', 'https://www.youtube.com/embed/Uvmx94cUVEY', 'Star Wars is at its best when it focuses on a group of unlikely heroes coming together to save the day. Luke meeting Leia, Rey finding Finn - their stories intertwine and become one, like the Force. Star Wars Battlefront II features a single-player campaign that is told from the perspective of the Empire.', 2000, 'Shooter', 'EA DICE', 'Electronic Arts', '17 November 2017', 'XBOX ONE, PC, PS4', 'Featured'),
(11, 'Middle Earth : Shadow of War', 'game_adventure04', 'https://www.youtube.com/embed/bhSfjt8jQyk', 'The sequel to the critically-acclaimed Middle-Earth: Shadow of Mordor-winner of over 50 industry awards-arrives this August.  Continuing the original story of Talion and Celebrimbor, who must now go behind enemy lines to forge an army in order to turn all of Mordor against the Dark Lord, Sauron.', 2000, 'Adventure', 'Monolith Studios', 'Warner Bothers', '10 October 2017', 'XBOX ONE, PC, PS4', 'Featured'),
(12, 'Call of Duty: World War II', 'game_shooter02', 'https://www.youtube.com/embed/a9ITIaKzG3A', 'Call of Duty returns to its roots with Call of Duty: WWII - a breathtaking experience that redefines World War II for a new gaming generation. Land in Normandy on D-Day and battle across Europe through iconic locations in history\'s most monumental war.', 2670, 'Shooter', 'Sledgehammer', 'Activision', '3 November 2017', 'XBOX ONE, PC, PS4', 'Featured'),
(13, 'PES2018', 'game_sports0', 'https://www.youtube.com/embed/vh54LG8kSh4', 'Pro Evolution Soccer 2018 is a sports video game developed by PES Productions and published by Konami for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360 and Xbox One . The game is the 17th installment in the Pro Evolution Soccer series and was released worldwide in September 2017.', 2000, 'Sports', 'Konami', 'Konami', '12 September 2017', 'XBOX ONE, PC, PS4', 'Featured'),
(14, 'Wolfenstein II: The New Colossus', 'game_shooter01', 'https://www.youtube.com/embed/bkrwUzWeACg', 'Wolfenstein II sends players to Nazi-controlled America on a mission to recruit the boldest resistance leaders left. Fight the Nazis in iconic locations and equip an arsenal of badass guns, and unleash new abilities against advanced Nazi über soldiers in this definitive first-person shooter.', 2000, 'Shooter', 'Machine Games', 'Bethesda Softworks', '27 October 2017', 'XBOX ONE, PC, PS4', 'Best Sellers'),
(49, 'Grand Theft Auto 5', 'game_shooter05', 'https://www.youtube.com/embed/Bf38HiYPMiI', 'Michael Townley, Trevor Philips, and Brad Snider partake in a botched robbery in Ludendorff, North Yankton. Nine years later, Michael is living under witness protection with his family in Los Santos, under the alias Michael De Santa. Across town, gangbanger Franklin Clinton is working for a corrupt Armenian car salesman and meets Michael while attempting to fraudulently repossess his son\'s car; the two later become friends.', 1800, 'Shooter', 'Rockstar Games', 'Rockstar Games', '17 September 2013', 'XBOX ONE, PC, PS4', 'Best Sellers'),
(51, 'Quantum break', 'game_rpg02', 'https://www.youtube.com/embed/w-aAWXKZS9M', 'Quantum Break is a science fiction action-adventure third-person shooter video game developed by Remedy Entertainment and published by Microsoft Studios. The game was released worldwide for Microsoft Windows and Xbox One in April 2016.The game centers on Jack Joyce, granted time manipulation powers after a failed time-machine experiment, as he comes into conflict with former friend Paul Serene over how to deal with an apocalyptic \"End of Time\". In addition, the game includes platform game elements in less action-oriented segments. Quantum Break is an action-adventure video game played from a third-person perspective.', 2000, 'Adventure', 'Remedy Entertainment', ' Microsoft Studios', ' 5 April 2016', 'XBOX ONE, PC', 'Featured'),
(52, 'Project Cars 2: Collector\'s Edition', 'game_racing02', 'https://www.youtube.com/embed/0YrrK92fQmk', 'Project CARS 2 is a motorsport racing simulator video game developed by Slightly Mad Studios and published and distributed by Bandai Namco Entertainment.', 1900, 'Racing', 'Slightly Mad Studios', 'Bandai Namco Entertainment', '22 September 2017', 'XBOX ONE, PC, PS4', 'Best Sellers'),
(53, 'Fatal Frame: Maiden of Black Water', 'game_other0', 'https://www.youtube.com/embed/F-cIGX8kE_g', 'Fatal Frame: Maiden of Black Water puts the player in control of three different characters navigating a number of environments across Hikami Mountain from a third-person perspective, including ruined buildings and dark forests. Characters are able to navigate environments using an interactive map, and can either walk or perform a sprint. During navigation, the characters are confronted by hostile ghosts that attack them and damage them through touch. If a ghost grabs the character, they can either dodge or break free from their grip', 2000, 'Others', 'Koei Tecmo', 'Nintendo', '27 September 2014', 'Nintendo', 'On Sale'),
(54, 'NHL 18', 'game_sports02', 'https://www.youtube.com/embed/TcodG8Wi1Z0', 'NHL 18 is an ice hockey simulation video game developed by EA Canada and published by EA Sports. It was released on Playstation 4 and Xbox One on September 15, 2017', 2000, 'Sports', 'EA Canada', 'EA Sports', '14 September 2017', 'XBOX ONE, PC, PS4', 'On Sale'),
(55, 'Blue Reflection', 'game_rpg01', 'https://www.youtube.com/embed/TzxDom6UgT4', 'The player takes the role of Hinako Shirai, a ballet dancer who due to a knee injury no longer can dance, but who is given magical power allowing her to fight and move freely. The game follows a day cycle, which sees Hinako attend school and spend time with classmates, and visit another world where she fights monsters in a turn-based battle system. By becoming close friends with her classmates, Hinako can use support abilities from them in battle.', 2000, 'RPG', 'Gust Co. Ltd', 'Koei Teamo', '20 March 2017', 'XBOX ONE, PC, PS4', 'On Sale');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
