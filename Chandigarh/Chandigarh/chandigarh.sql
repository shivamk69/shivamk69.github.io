-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 04:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chandigarh`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `blog_image` varchar(100) NOT NULL,
  `blog_tittle` varchar(150) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `blog_dec` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `user_id`, `blog_image`, `blog_tittle`, `user_name`, `user_image`, `blog_dec`, `date`) VALUES
(1, 1, '1.jpg', 'Rohan', 'Rohan Mondal', 'default.jpg', '...  .... ..... jafhna  aquihf ia fo afdk a', '2021-01-13'),
(6, 1, '1.jpg', 'Rohan3', 'Rohan6', 'default.jpg', '789', NULL),
(9, 2, '2.jpg', 'Harish', 'Harish Chandra', 'default.jpg', '123....hdf5555 g r5 s4 s4 s4gs 4s 00 6540 0 40', '2021-01-26'),
(10, 1, '1-14-01-2021-1610638913.png', 'esfsefssefsegsegsegsegs', 'Rohan', 'default.jpg', 'saaaaaaaaaaaaaa', '0000-00-00'),
(11, 1, '1-14-01-2021-1610638951.png', 'esfsefssefsegsegsegsegs', 'Rohan', 'default.jpg', 'saaaaaaaaaaaaaa', '0000-00-00'),
(12, 1, '1-14-01-2021-1610638972.png', 'esfsefssefsegsegsegsegs', 'Rohan', 'default.jpg', 'saaaaaaaaaaaaaa', '0000-00-00'),
(13, 1, '1-2021-01-14-1610639961.jpg', 'My Blog', 'Rohan', 'default.jpg', 'First Blog', '2021-01-14'),
(14, 1, '1-2021-01-29-1611923101.jpg', 'jgfhgfghjgf', 'Rohan', 'default.jpg', 'bdfgbcgbfbgvcfg', '2021-01-29'),
(15, 1, '1-2021-02-01-1612208613.jpg', '2nd', 'Rohan', 'default.jpg', 'hhi jhkbkj kbufvm jgnucjn jvnbgxv gbhfhhv hf gc h   s  jk     bn jb', '2021-02-01'),
(16, 1, '1-2021-02-01-1612208922.jpg', '3rd', 'Rohan', 'default.jpg', 'ggcg gcgv vjvjhv jhvjhv jv\r\n\r\n', '2021-02-01'),
(17, 1, '1-2021-02-01-1612208961.jpg', '4th', 'Rohan', 'default.jpg', '', '2021-02-01'),
(18, 1, '1-2021-02-12-1613116233.png', 'My First Blog in Chandigarh', 'Rohan', 'default.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2021-02-12'),
(19, 4, '4-2021-02-12-1613132327.jpg', 'my first blog', 'harish chander', 'hc7051@gmail.com.jpg', 'This is my first  blog . I am just write my blog. Thank you', '2021-02-12'),
(20, 7, '7-2021-03-19-1616127329.jpg', 'Travel in The Mountains', 'Harish chander', 'default.jpg', 'The serene tranquillity of the mountains or the free winds of the beach? The adrenaline rush from the peaks or the gentle caressing of the waves. The heights scaled by the mountains or the mysterious depths of the water?\r\n\r\nYou might be someone who has a soft spot for the mountains and loves lending your heart to them every few months or so or maybe someone who feels that nothing can be compared to the experience of sitting beside the seashore and watching a beautiful sunset.', '2021-03-19'),
(21, 7, '7-2021-03-19-1616127417.jpg', 'Water City', 'Harish chander', 'default.jpg', 'At Watercity Waterpark the enjoyment of the water element is fully maximized! Experience the wide range of watergames and feel like a kid again! Play without fear, feel the coolness and experience unforgettable moments of relaxation!', '2021-03-19'),
(22, 4, '4-2021-04-08-1617872418.jpg', 'My Blog', 'harish chander', 'hc7051@gmail.com.jpg', 'sr b', '2021-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`) VALUES
(1, 'Select Hotel'),
(2, 'Hometel Hotel'),
(3, 'Hotel City Plaza 7'),
(4, 'Hotel KLG Starlight'),
(5, 'Toy Redfox Hotel'),
(6, 'Lemon Tree Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `from` varchar(50) DEFAULT NULL,
  `to` varchar(50) DEFAULT NULL,
  `flight_class` varchar(50) DEFAULT NULL,
  `train_class` varchar(50) DEFAULT NULL,
  `bus_class` varchar(50) DEFAULT NULL,
  `car_class` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `from`, `to`, `flight_class`, `train_class`, `bus_class`, `car_class`) VALUES
(1, NULL, 'Select Place', 'Economy Class', 'Sleeper Class', 'AC Chair', 'AC'),
(2, 'Shimla', 'Shimla', 'Business/Premium Business', 'Third AC', 'Non AC Chair', 'Non AC'),
(3, 'Jalandhar', 'Jalandhar', 'Business Class', 'Second AC', 'AC Sleeper', NULL),
(4, 'Ludhiana', 'Ludhiana', 'First Class', 'First AC', 'Non AC Sleeper', NULL),
(5, 'Amritsar', 'Amritsar', 'Economy/Premium Economy', 'Second Setting', NULL, NULL),
(6, 'Kolkata', 'Kolkata', NULL, 'AC Chair Car', NULL, NULL),
(7, NULL, 'Chandigarh', NULL, NULL, NULL, NULL),
(8, 'New Delhi', 'New Delhi', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(100) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `number` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `number`, `password`, `image`, `token`) VALUES
(1, 'Rohan', 'rohan@gmail.com', '9679943396', '123', 'default.jpg', ''),
(2, '', '', '', '', '', ''),
(3, 'Rohan Mondal', 'rohanmondal1438@gmail.com', '0967994339', '1234', 'rohanmondal1438@gmail.com.jpg', ''),
(4, 'harish chander', 'hc7051@gmail.com', '9682361707', 'harish1234', 'hc7051@gmail.com.jpg', ''),
(5, 'Rohan Mondal', 'rohanmondal143888@gmail.com', '0967994339', '1234', 'default.jpg', ''),
(6, 'Rohan Mondal', 'rohanmondal1438@gmail.com333', '0967994339', '123', 'default.jpg', ''),
(7, 'Harish chander', 'hc70512@gmail.com', '9682391707', 'harish7051', 'default.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
