-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 08:37 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'sukkelllllllaaaaaaaaaaaaaa'),
(2, 'Javascript'),
(3, 'PHP'),
(10, 'Jemoeder'),
(12, 'sdddd'),
(13, 'dfgdg'),
(24, 'categories'),
(25, 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefoon` varchar(255) NOT NULL,
  `bericht` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `naam`, `email`, `telefoon`, `bericht`) VALUES
(1, 'sss', '', '', ''),
(2, 'sss', '', '', ''),
(3, 'sss', '', '', ''),
(4, 'ssss', '', '', ''),
(5, 'aaaaaaaaaaaaaa', '', '', ''),
(6, 'Sem', '', '', ''),
(7, 'rand.berkelaar@outlook.com', 'rand.berkelaar@outlook.com', '353636', 'gxbbdsbdbbd'),
(8, 'rand.berkelaar@outlook.com', 'rand.berkelaar@outlook.com', '353636', 'gxbbdsbdbbd'),
(9, 'asas', 'rand.berkelaar@outlook.com', 'asas', 'asass'),
(10, 'rand.berkelaar@outlook.com', 'rand.berkelaar@outlook.com', '434343443', 'sss'),
(11, 'asas', 'rand.berkelaar@outlook.com', 'asas', 'asas'),
(12, 'qqqqqq', 'rand.berkelaar@outlook.com', 'qqq', 'qqq'),
(13, 'qqqqqq', 'rand.berkelaar@outlook.com', 'qqq', 'qqq');

-- --------------------------------------------------------

--
-- Table structure for table `kankersukkels`
--

CREATE TABLE `kankersukkels` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kankersukkels`
--

INSERT INTO `kankersukkels` (`id`, `naam`, `wachtwoord`, `voornaam`, `achternaam`, `email`, `randSalt`) VALUES
(1, 'Sem', '020', 'randi', 'berkelaar', 'randi.berkelaar@outlook.com', ''),
(2, '', '', '', '', 'rand.berkelaar@outlook.com', ''),
(3, '', '', '', '', 'rand.berkelaar@outlook.com', ''),
(4, '', '', '', '', 'rand.berkelaar@outlook.com', ''),
(5, '', '', '', '', 'rand.berkelaar@outlook.com', ''),
(8, '1', '1', '', '', 'rand.berkelaar@outlook.com', ''),
(9, 'apple', 'Applebitc', 'fbfbfb', 'fbfbfbfbf', 'rand.berkelaar@outlook.com', ''),
(10, 'apple', 'Applebitc', '', '', 'rand.berkelaar@outlook.com', ''),
(11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Applebitc', '', '', 'rand.berkelaar@outlook.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 1, ' Gummy Mask grind', 'Randi', '2022-04-23', 'maxresdefault.jpg', 'Nog maar minder dan 30 glue en ik heb hem.', 'Roblox', 0, 'draft'),
(3, 2, 'Koningsdag', 'Randi', '2022-04-27', 'koning.jpg', 'Gaan we coma zuipen?', 'Koningsdag', 0, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `beforename` varchar(255) NOT NULL,
  `behindname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `beforename`, `behindname`) VALUES
(39, 'apple', 'Applebitc', '', '', ''),
(44, 'sfsfsf', 'wxctwrd', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kankersukkels`
--
ALTER TABLE `kankersukkels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kankersukkels`
--
ALTER TABLE `kankersukkels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
