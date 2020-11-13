-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2020 at 02:49 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14596923_shinobi`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(12) NOT NULL,
  `image_path` text COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_path`, `userid`) VALUES
(31, 'images/iphone_xs.jpg', 64),
(32, 'images/dsadasda.jpeg', 65),
(33, 'images/download5.jpg', 64),
(34, 'images/images.jpeg', 64),
(36, 'images/uchiha_itachi.jpg', 64),
(37, 'images/dasd.jpeg', 66),
(38, 'images/saske.jpg', 67),
(41, 'images/audi-audi-r8-blue-cars-car-wallpaper-preview.jpg', 68),
(43, 'images/car-aston-martin-wallpaper-landscape-zeexto.jpeg', 68),
(51, 'images/landscape-the-city-rolls-royce-singapore-wallpaper-preview.jpg', 68),
(55, 'images/o.png', 64),
(65, 'images/961315.png', 64),
(66, 'images/your-name-background-full-hd-1920x1080-148289.jpg', 64),
(67, 'images/macos-mojave-2560x1440-day-dunes-wwdc-2018-5k-18882.jpeg', 64),
(68, 'images/Quantum_Computing_NewStudy-638-NEWS-WEB.jpg', 64),
(69, 'images/naruto4.jpg', 64),
(71, 'images/osmcmansubmit.PNG', 72),
(72, 'images/564261_132577230207437_33624877_n.jpg', 72);

-- --------------------------------------------------------

--
-- Table structure for table `isFollowing`
--

CREATE TABLE `isFollowing` (
  `id` int(11) NOT NULL,
  `follower` int(11) NOT NULL,
  `isFollowing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `isFollowing`
--

INSERT INTO `isFollowing` (`id`, `follower`, `isFollowing`) VALUES
(119, 65, 64),
(123, 64, 65),
(124, 66, 65),
(125, 64, 66),
(132, 65, 66),
(137, 66, 64),
(138, 67, 65),
(139, 67, 64),
(140, 64, 67),
(141, 68, 64),
(142, 68, 67),
(143, 71, 64),
(145, 72, 68),
(146, 72, 67);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `chatmsg` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Profile`
--

CREATE TABLE `Profile` (
  `id` int(11) NOT NULL,
  `image_path` text COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Profile`
--

INSERT INTO `Profile` (`id`, `image_path`, `userid`) VALUES
(25, '1599805869.png', 64),
(26, '1599806139.png', 65),
(27, '1599986054.png', 67),
(28, '1599993808.png', 68),
(29, '1599993810.png', 68);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(64, 'Obito', 'Obito@leaf.com', '6976723672df4c8666571a7f00baede4'),
(65, 'Kakashi', 'kakashi@leaf.com', 'aa97427074e7079b27a79ff1c405ebf3'),
(66, 'Pain ', 'Pain@gmail.com', '5408d7f29a3e73f820f9ca332ff4a3db'),
(67, 'saske', 'saske', '21685565562ad0e7a81ba67baa44f099'),
(68, 'Divyanshu Takey', 'divyanshutakey@gmail.com', '3d93be9384e91e343f3e8aafd6e7b8e1'),
(69, 'neji', 'neji@leaf.com', 'baf697f24f66713a638e7398a9ff21b9'),
(70, 'Kiba', 'kiba@leaf.com', '7d1ae78d268e9a81d4812dd3fbcd1daf'),
(71, 'Kakashi12', 'kakashi@Yah.com', 'ddd1002b0a3fddba39c6db404d89d58a'),
(72, 'oshinmendhe', 'oshin@gmail.com', 'f58b952d07b452fd53a55d59f44c8175');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isFollowing`
--
ALTER TABLE `isFollowing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Profile`
--
ALTER TABLE `Profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `isFollowing`
--
ALTER TABLE `isFollowing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Profile`
--
ALTER TABLE `Profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
