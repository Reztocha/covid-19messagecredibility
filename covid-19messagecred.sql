-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 04:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-19messagecred`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(50) NOT NULL,
  `content` text NOT NULL,
  `votesup` int(255) NOT NULL,
  `votesdown` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `content`, `votesup`, `votesdown`) VALUES
(1, 'Has this been said before?', 0, 0),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet odio lacinia, lacinia dui nec, pulvinar leo. Nullam enim erat, vestibulum vel odio sit amet, gravida eleifend justo. Fusce vehicula neque eu fringilla pulvinar. Nulla laoreet magna augue, quis tempor lacus vehicula id. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse urna eros, consectetur ac tempor ac, ultricies eget metus. Quisque ut lectus in orci malesuada venenatis in non risus. Nullam id nisl lorem. Phasellus vel mi lacinia, sollicitudin justo sit amet, venenatis eros. In at felis sit amet tellus vestibulum ornare eget vitae nunc. Nam at dui libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut eleifend purus eu elit tempor interdum. Pellentesque fermentum mauris justo, vitae posuere augue varius a. Aliquam convallis nunc eu sapien suscipit, ac interdum turpis pretium.\r\n\r\nNam nec nisl tempus, elementum eros ac, ornare velit. Quisque at eleifend mi, in mollis ante. Integer vel blandit augue. Aliquam porttitor metus nec lacus auctor feugiat. Donec eu nulla faucibus, viverra orci in, semper leo. Fusce pulvinar nulla mi, ut commodo lectus aliquet quis. In hac habitasse platea dictumst. Nullam interdum sapien eu enim tristique vehicula.', 0, 0),
(3, 'Pellentesque auctor risus pulvinar est bibendum ornare. Etiam quis elit enim. Donec ut orci nec risus tristique ornare. Suspendisse potenti. Pellentesque a vestibulum purus, hendrerit viverra libero. Morbi finibus semper laoreet. Donec mauris lacus, vestibulum ac molestie vitae, aliquet non leo. Suspendisse scelerisque augue id nibh commodo mattis. Aenean venenatis, enim vitae placerat porttitor, enim nisi finibus nunc, et rhoncus ligula arcu commodo massa. Vestibulum tincidunt imperdiet ex sed volutpat. Curabitur ac fermentum nibh, ut ornare nisl. Praesent interdum massa ac euismod pretium. Nullam sed diam ac ipsum imperdiet pellentesque vel eu erat.\r\n\r\nPraesent id finibus massa. Morbi quis imperdiet nibh. In ante augue, sollicitudin sit amet cursus sed, sagittis id felis. Nulla pellentesque odio vitae arcu dictum, ut faucibus felis placerat. Integer tristique dolor venenatis dolor sodales, at porta dolor dapibus. Aliquam et vehicula ante. Etiam efficitur posuere tortor, id volutpat odio interdum sit amet. Nulla eget semper nulla. Ut nec massa convallis, dignissim nisl vel, lacinia diam. Mauris posuere, tortor pharetra scelerisque vehicula, elit tortor dapibus quam, quis consequat nisl risus a urna. Morbi augue massa, venenatis et pretium ac, dictum eu mi. Aliquam erat volutpat. Morbi commodo sollicitudin cursus. Etiam quis odio vel arcu fermentum semper. Suspendisse consectetur orci feugiat, ultricies erat eu, finibus eros. Cras a rutrum velit.', 0, 0),
(4, 'Phasellus id ante eget risus vestibulum varius eget et turpis. Ut fringilla est ac risus molestie gravida. Sed vestibulum interdum augue, facilisis porta sem luctus eget. Sed a tortor finibus, pharetra ipsum at, malesuada urna. Curabitur eros mi, maximus sit amet metus vel, sagittis volutpat felis. Nunc vel dolor id massa elementum consectetur. Nullam fringilla tristique aliquam. Praesent at blandit est, eu egestas quam.', 0, 0),
(5, 'Phasellus ', 0, 0),
(6, 'casper', 0, 0),
(7, 'There is no burger too big to eat.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(90) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Cat', 'Putter123', 'c@g.com'),
(2, 'Paula', 'JSParker32', 'paulajs@g.com'),
(3, 'Harry', 'HuttHuttHike14', 'harry@g.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
