-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 06:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdcol`
--
CREATE DATABASE IF NOT EXISTS `cdcol` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `cdcol`;

--
-- Truncate table before insert `cds`
--

TRUNCATE TABLE `cds`;
--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);
--
-- Database: `gameproject`
--
CREATE DATABASE IF NOT EXISTS `gameproject` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gameproject`;

--
-- Truncate table before insert `collection`
--

TRUNCATE TABLE `collection`;
--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`CollectionID`, `ReleaseID`, `CollectionFormat`, `Content`, `AddContent`, `Condition`, `Price`, `TransactionDate`, `marketValue`, `SellStatus`) VALUES
(1, 20116, 'CIB', 'Racing game. Works b', NULL, 'New', '69', '2015-02-03', 70, 2),
(2, 20116, 'C', 'this package only contains cartrige', NULL, 'Acceptable', '39', '2015-03-10', 59, 1),
(3, 20119, 'CI', 'This package comes in cartrige and it has instruction manual inside it.', NULL, 'VeryGood', '39', '2015-03-11', 45, 2),
(4, 21115, 'IB', 'Basd on the super hit movie cars, This disney productions racing game contains all the characters from cars.', NULL, 'Poor', '20', '2015-03-17', 49, 1),
(5, 22113, 'CIB', 'One man action shooter game. This game contains various weapon tragectory. ', NULL, 'Good', '49', '2014-12-15', 49, 1),
(6, 22117, 'I', 'One man sharp shpooter game.', NULL, 'Good', '56', '2015-03-09', 59, 1),
(7, 22118, 'B', 'THis package is in mint condition.', NULL, 'Mint', '79', '2015-03-02', 79, 1),
(8, 23114, 'I', NULL, NULL, 'VeryGood', '59', '2015-02-17', 65, 3),
(9, 24114, 'CI', 'The most popular game from EA Sport.', NULL, 'Mint', '69', '2015-04-06', 59, 2),
(10, 25115, 'CIB', 'It is very popular strategy game. ', NULL, 'Acceptable', '69', '2015-03-29', 69, 3),
(12, 25119, 'CB', 'It''s a world popular strategy game. Contains in cartrige with box.', NULL, 'VeryGood', '69', '2014-12-22', 42, 1),
(13, 26117, 'B', 'This racing games package only contains a Box.', NULL, 'Poor', '78', '2015-04-13', 68, 3),
(14, 26117, 'CIB', 'This racing games package comes in cartrige and it has instruction and packed in box.', NULL, 'Poor', '112', '2015-03-17', 112, 1),
(15, 28111, 'C', 'It is a racing game for cartrige collection.', '', 'Poor', '10', '2014-12-15', 15, 2),
(16, 28119, 'B', 'It is a racing game.', NULL, 'Good', '45', '2015-03-01', 53, 1),
(17, 29112, 'CI', 'My favoirite game. it has cartrige and instruction manual.', NULL, 'Acceptable', '89', '2015-04-02', 99, 2),
(18, 29112, 'CIB', 'For my mint collection', NULL, 'Mint', '159', '2015-04-19', 99, 1),
(19, 32116, 'CIB', 'this mobile operating base game comes in cartrige.', NULL, 'Poor', '25', '2015-02-09', 29, 3),
(20, 31117, 'B', 'box collection game.', NULL, 'Poor', '49', '2015-01-05', 51, 3),
(21, 23115, 'CI', 'This Game works best with mobile operating system. ', NULL, 'Mint', '27', '2015-04-06', 57, 3),
(22, 23115, 'CI', 'This game has different versetile versions.', NULL, 'Good', '39.56', '2014-11-17', 49, 1),
(23, 25115, 'CB', 'web', '', '', ' 33 ', '2015-04-27', 33, 3),
(24, 25115, 'C', 'web', '', '', ' 76 ', '2015-05-06', 76, 2),
(25, 25115, 'C', 'fh', '', '', ' 89 ', '2015-05-04', 78, 2),
(26, 27118, 'C', 'New testing file', '', '', ' 34 ', '2015-05-04', 34, 3),
(27, 28119, 'CB', 'Web insertion', '', '', ' 60 ', '2015-03-04', 60, 1);

--
-- Truncate table before insert `console`
--

TRUNCATE TABLE `console`;
--
-- Dumping data for table `console`
--

INSERT INTO `console` (`ConsoleID`, `ConsoleName`, `ConsoleType`) VALUES
(111, 'WII', 0),
(112, 'microvision', 0),
(113, 'GameGear', 0),
(114, 'NeoGeoX', 0),
(115, 'playstation', 0),
(116, 'playstation4', 0),
(117, 'shieldiv', 0),
(118, 'AtariFlashback', 0),
(119, 'Game&Warrior', 0);

--
-- Truncate table before insert `developer`
--

TRUNCATE TABLE `developer`;
--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`DeveloperID`, `DeveloperName`) VALUES
(1, 'Raj'),
(2, 'Romanch'),
(3, 'Vibha'),
(4, 'Arpitha'),
(5, 'Nirzari');

--
-- Truncate table before insert `game`
--

TRUNCATE TABLE `game`;
--
-- Dumping data for table `game`
--

INSERT INTO `game` (`GameID`, `GameTitle`, `DeveloperID`, `Description`, `GenreID`) VALUES
(20, 'NFS', 1, 'racing', 1111),
(21, 'cars', 2, 'fighting', 1112),
(22, 'CounterStrike', 5, 'fighting', 1111),
(23, 'TempleRun', 5, 'running', 1112),
(24, 'FIFA', 1, 'sports', 1113),
(25, 'Dota', 1, 'fighting', 1114),
(26, 'Asphalt', 2, 'racing', 1114),
(27, 'Mario', 3, 'fun', 1113),
(28, 'RoadRash', 2, 'racing', 1115),
(29, 'Batman', 3, 'superhero', 1116),
(30, 'Archam', 4, 'superhero', 1117),
(31, 'JusticeLeague', 4, 'superhero', 1118),
(32, 'ClashOfClans', 1, 'superhero', 1119),
(33, 'AgeOfEmpires', 2, 'superhero', 1120);

--
-- Truncate table before insert `game_release`
--

TRUNCATE TABLE `game_release`;
--
-- Dumping data for table `game_release`
--

INSERT INTO `game_release` (`ReleaseID`, `GameID`, `PublisherID`, `ConsoleID`, `PlayStatus`) VALUES
(20116, 20, 10, 116, 'Played'),
(20119, 20, 11, 119, 'Completed'),
(21115, 21, 11, 115, 'WishList'),
(22113, 22, 11, 113, 'WishList'),
(22117, 22, 13, 117, 'Completed'),
(22118, 22, 14, 118, 'Completed'),
(23114, 23, 14, 114, 'WishList'),
(23115, 23, 15, 115, 'Played'),
(24114, 24, 13, 114, 'Played'),
(25115, 25, 14, 115, 'WishList'),
(25119, 25, 10, 119, 'Completed'),
(26117, 26, 15, 117, 'WishList'),
(27118, 27, 10, 118, 'Completed'),
(28111, 28, 11, 111, 'Completed'),
(28119, 28, 10, 119, 'WishList'),
(29112, 29, 12, 112, 'Played'),
(30114, 30, 13, 114, 'Played'),
(31117, 31, 14, 117, 'Played'),
(32116, 32, 14, 116, 'Played'),
(33117, 33, 15, 117, 'Played');

--
-- Truncate table before insert `genre`
--

TRUNCATE TABLE `genre`;
--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`GenreID`, `GenreName`, `Description`) VALUES
(1111, 'platformer', 'fun'),
(1112, 'arcade', 'cards'),
(1113, 'RPG', 'funny'),
(1114, 'Strategy', 'mind'),
(1115, 'Action-Adventure', 'adventure'),
(1116, 'Beat''emUp', 'fighting'),
(1117, 'Shooter', 'shooting'),
(1118, 'Adventure', 'adventure'),
(1119, 'Sports', 'racing'),
(1120, 'Family', 'comedy');

--
-- Truncate table before insert `publisher`
--

TRUNCATE TABLE `publisher`;
--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PublisherID`, `PublisherName`) VALUES
(10, 'ABC'),
(11, 'ICCOMPANY'),
(12, '2KGAMES'),
(13, '3DRealms'),
(14, '505games'),
(15, 'Accolade');
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

--
-- Truncate table before insert `pma_bookmark`
--

TRUNCATE TABLE `pma_bookmark`;
--
-- Truncate table before insert `pma_column_info`
--

TRUNCATE TABLE `pma_column_info`;
--
-- Truncate table before insert `pma_designer_coords`
--

TRUNCATE TABLE `pma_designer_coords`;
--
-- Truncate table before insert `pma_history`
--

TRUNCATE TABLE `pma_history`;
--
-- Truncate table before insert `pma_navigationhiding`
--

TRUNCATE TABLE `pma_navigationhiding`;
--
-- Truncate table before insert `pma_pdf_pages`
--

TRUNCATE TABLE `pma_pdf_pages`;
--
-- Truncate table before insert `pma_recent`
--

TRUNCATE TABLE `pma_recent`;
--
-- Dumping data for table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"gameproject","table":"collection"},{"db":"gameproject","table":"Game"},{"db":"phpmyadmin","table":"pma_column_info"},{"db":"phpmyadmin","table":"pma_designer_coords"},{"db":"phpmyadmin","table":"pma_history"},{"db":"phpmyadmin","table":"pma_pdf_pages"},{"db":"phpmyadmin","table":"pma_recent"},{"db":"phpmyadmin","table":"pma_relation"},{"db":"cdcol","table":"cds"},{"db":"mysql","table":"user"}]');

--
-- Truncate table before insert `pma_relation`
--

TRUNCATE TABLE `pma_relation`;
--
-- Truncate table before insert `pma_savedsearches`
--

TRUNCATE TABLE `pma_savedsearches`;
--
-- Truncate table before insert `pma_table_coords`
--

TRUNCATE TABLE `pma_table_coords`;
--
-- Truncate table before insert `pma_table_info`
--

TRUNCATE TABLE `pma_table_info`;
--
-- Truncate table before insert `pma_table_uiprefs`
--

TRUNCATE TABLE `pma_table_uiprefs`;
--
-- Truncate table before insert `pma_tracking`
--

TRUNCATE TABLE `pma_tracking`;
--
-- Truncate table before insert `pma_userconfig`
--

TRUNCATE TABLE `pma_userconfig`;
--
-- Dumping data for table `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2015-05-03 21:31:59', '{"collation_connection":"utf8mb4_general_ci"}');

--
-- Truncate table before insert `pma_usergroups`
--

TRUNCATE TABLE `pma_usergroups`;
--
-- Truncate table before insert `pma_users`
--

TRUNCATE TABLE `pma_users`;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `webauth`
--
CREATE DATABASE IF NOT EXISTS `webauth` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `webauth`;

--
-- Truncate table before insert `user_pwd`
--

TRUNCATE TABLE `user_pwd`;
--
-- Dumping data for table `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
