-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 16, 2020 at 05:18 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(3) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tag` text NOT NULL,
  `admin` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `rate` tinyint(2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `cat_id`, `title`, `content`, `tag`, `admin`, `status`, `rate`, `image`, `date`) VALUES
(41, 1, 'What is Lorem Ipsum?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ThIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using It is a long established fact that aa | বাংলায় পাইথন&nbsp;reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using e point of using Lorem Ipsum is that it has a more-or-lIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ThIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using e point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to usingalert(\"Hello! I am an alert box!!\");ess normal distribution of letters, as opposed to usingalert(\"Hello! I am an alert box!!\");ars', '', 'asik', 1, 1, '709491.png', '2020-08-11 13:39:52'),
(43, 18, 'Public transport to ply during Eid holiday', 'Public transport to ply during Eid holiday Public transport to ply during Eid holiday Clearing the smokescreen created over plying of public transport during Eid-ul-Azha holiday, Road Transport and Bridges Minister Obaidul Quader on Thursday said mass transport will be allowed on roads. \"Public transport will be allowed during the Eid holiday, but, heavy vehicles will remain suspended three days ahead of Eid-ul-Azha,\" said the', '', 'asik', 1, 0, '453259.jpg', '2020-08-11 13:57:28'),
(44, 1, 'Web development', 'A web developer is a programmer who specializes in, or is specifically engaged in, the development of World Wide Web applications using a client�server model. The applications typically use HTML, CSS and JavaScript in the client, PHP, ASP.NET (C#), Python or Java in the server, and http for communications between client and server. A web content management system is often used to develop and maintain web aalert(location.hostname);plications.', 'PY. PYTHON, GAME', 'admin', 1, 1, '424371.png', '2020-08-11 13:58:52'),
(48, 3, 'Security Release: Laravel 6.18.35, 7.24.0', 'column that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravelcolumn that is being updated with an actual list of database columns that exist on the database table. We retrieve this column list using Laravel', 'php , laravel', 'admin', 1, 1, '370085.jpg', '2020-08-12 04:42:41'),
(49, 22, 'Diversity in Engineering: The Effect on Questions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'BUSINESS , FINANCIAL', 'admin', 1, 1, '315335.jpeg', '2020-08-14 14:08:22'),
(51, 20, 'Top 10 phone applications and 2017 mobile design awards', 'In lobortis pharetra mattis. Morbi nec nibh iaculis,&nbsp;bibendum augue a, ultrices nulla. Nunc velit ante, lacinia id tincidunt eget, faucibus nec nisl. In mauris purus, bibendum et gravida dignissim, venenatis commodo lacus. Duis consectetur quis nisi nec accumsan. Pellentesque enim velit, ut tempor turpis. Mauris felis neque, egestas in lobortis et,iaculis at nunc ac, rhoncus sagittis ipsum.Maecenas non convallis quam, eu sodales justo. Pellentesque quis lectus elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Donec nec metus sed leo sollicitudin ornare sed consequat neque. Aliquam iaculis neque quis dui venenatis, eget posuere felis viverra. Ut sit amet feugiat elit, nec elementum velit. Sed eu nisl convallis, efficitur turpis eu, euismod nunc. Proin neque enim, malesuada non lobortis nec, facilisis et lectus. Ie consectetur. Nam eget neque ac ex fringilla dignissim eu ac est. Nunc et nisl vel odio posuere.Vivamus non condimentum orci. Pellentesque venenatis nibh sit amet est vehicula lobortis. Cras eget aliquet eros. Nunc lectus elit, suscipit at nunc sed, finibus imperdiet ipsum. Maecenas dapibus neque sodales nulla finibus volutpat. Integer pulvinar massa vitae ultrices posuere. Proin ut tempor turpis. Mauris felis neque, egestas in lobortis et, sodales non ante. Ut vestibulum libero quis luctus tempus. Nullam eget dignissim massa. Vivamus id condimentum orci. Nunc ac sem urna. Aliquam et hendrerit nisl massa nunc.', 'BUSINESS , FINANCIAL', 'admin', 1, 0, '399007.jpg', '2020-08-15 08:05:06'),
(52, 22, 'this is demo post', 'demo demo demo demo', 'demo demo', 'admin', 1, 0, '328031.jpg', '2020-08-15 15:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `create_time`, `admin_name`) VALUES
(1, 'html5', 1, '2020-08-09 08:59:19', 'Shahin'),
(3, 'php', 1, '2020-08-09 08:59:31', 'Shahin'),
(5, 'python', 1, '2020-08-09 09:01:24', 'Shahin'),
(18, 'Others', 1, '2020-08-11 04:20:18', 'Shahin'),
(20, 'gadget', 1, '2020-08-11 10:39:40', 'asik'),
(21, 'Lorem Ipsum ', 1, '2020-08-11 13:12:21', 'asik'),
(22, 'BUSINESS', 1, '2020-08-14 14:06:59', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(5) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `name`, `email`, `subject`, `phone`, `message`, `status`, `date`) VALUES
(3, 'ee', 'arshahin@gmail.com', 'How we help?', '+8801754100439', 'm vulputate urna id libero auctor maximus. Nulla dignissim ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs. ', 0, '2020-08-13 13:48:27'),
(4, 'ee', 'arshahin@gmail.com', 'How we help?', '+8801754100439', 'm vulputate urna id libero auctor maximus. Nulla dignissim ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs. ', 0, '2020-08-13 13:49:15'),
(7, 'Anisur Rahman Shahin', 'arshahin@gmail.com', 'How we help?', '+8801754100439', 'al blog for handcrafted, cameramade photography content, fashion styles from ind', 0, '2020-08-13 13:57:26'),
(8, 'Anisur Rahman Shahin', 's@gmail.com', 'How we help?', '+8801754100439', 'te urna id libero auctor maximus. Nulla dignissim ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs. ', 0, '2020-08-13 13:59:53'),
(9, 'Anisur Rahman Shahin', 's@gmail.com', 'How we help?', '+8801754100439', 'te urna id libero auctor maximus. Nulla dignissim ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs. ', 0, '2020-08-13 14:00:00'),
(11, 'coder shahin', 'arshahin625@gmail.com', 'Pre-Sale Question', '01994439594', 'Etiam vulputate urna id libero auctor maximus. Nulla dignissim ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs.', 0, '2020-08-13 14:03:12'),
(12, 'Asikur Rahman Shawon', 'k@gmail.com', 'Who we are', '01754100439', 'How we help?\r\n\r\nEtiam vulputate urna id libero auctor maximus. Nulla dignissim ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs. ', 0, '2020-08-13 14:36:59'),
(14, 'shahin', 'k@gmail.com', 'Tech Blog is a technology blog', '+8801754100439', 'Fusce dapibus nunc quis quam tempor vestibulum sit amet consequat enim. Pellentesque blandit hendrerit placerat. Integertis non.Fusce dapibus nunc quis quam tempor vestibulum sit amet consequat enim. Pellentesque blandit hendrerit placerat. Integertis non.Fusce dapibus nunc quis quam tempor vestibulum sit amet consequat enim. Pellentesque blandit hendrerit placerat. Integertis non.<h1>hfhfhf</h1>\"rrrrr][\"', 0, '2020-08-14 03:11:18'),
(15, 'AR Shahin', 'mdshahinmije@yahoo.com', 'How we help?', '01994439594', 'ech Blog is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.ech Blog is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.   \r\n                        \r\n                              \r\n                        ', 2, '2020-08-14 03:50:58'),
(16, 'AR Shahin', 'mdshahinmije@yahoo.com', 'How we help?', '01994439594', 'ech Blog is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.ech Blog is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.   \r\n                        \r\n                              \r\n                        ', 2, '2020-08-14 03:52:18'),
(17, 'coder shahin', 'mdshahinmije@yahoo.com', 'dd', '01994439594', 'm ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs.', 2, '2020-08-14 03:58:33'),
(18, 'coder shahin', 'mdshahinmije@yahoo.com', 'dd', '01994439594', 'm ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs.', 0, '2020-08-14 03:59:11'),
(19, 'coder shahin', 'mdshahinmije@yahoo.com', 'dd', '01994439594', 'm ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs.', 0, '2020-08-14 03:59:28'),
(20, 'Anisur Rahman Shahin', 'mdshahinmije96@gmail.com', 'How we help?', '+8801754100439', 'lp?\r\n\r\nEtiam vulputate urna id libero auctor maximus. Nulla dignissim ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs.', 2, '2020-08-14 05:36:10'),
(21, 'Asik Newaz Sabbir', 'arshahin@gmail.com', 'How we help?', '+8801754100439', 'Pre-Sale Question\r\n\r\nFusce dapibus nunc quis quam tempor vestibulum sit amet consequat enim. Pellentesque blandit hendrerit placerat. Integertis non.', 2, '2020-08-15 11:34:34'),
(22, 'Anisur Rahman Shahin', 'arshahin@gmail.com', 'demo', '+8801754100439', 'this is demo mail', 2, '2020-08-15 14:45:38'),
(23, 'Anisur Rahman Shahin', 'arshahin@gmail.com', 'How we help?', '+8801754100439', 'gg', 2, '2020-08-15 14:47:04'),
(24, 'Anisur Rahman Shahin', 'arshahin@gmail.com', 'dd', 'cd', 'dd', 0, '2020-08-15 14:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(2) NOT NULL,
  `email_id` int(2) NOT NULL,
  `user` varchar(50) NOT NULL,
  `reply` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `email_id`, `user`, `reply`, `date`) VALUES
(1, 17, 'admin', 'ffff', '2020-08-14 05:22:05'),
(2, 17, 'admin', 'ccc', '2020-08-14 05:25:39'),
(3, 17, 'admin', 'dddaaa', '2020-08-14 05:26:34'),
(4, 16, 'admin', 'ok done', '2020-08-14 05:28:35'),
(5, 15, 'admin', 'g', '2020-08-14 05:32:46'),
(6, 20, 'admin', 'ok done', '2020-08-14 05:36:26'),
(7, 20, 'admin', 'ok done', '2020-08-14 14:13:51'),
(8, 21, 'asik', 'ok ', '2020-08-15 14:26:53'),
(9, 25, 'admin', 'this id demo reply', '2020-08-15 15:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(2) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL,
  `postdisplay` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `logo`, `title`, `footer`, `postdisplay`) VALUES
(1, 'logo.png', 'Blog website using PHP OOP', '2020 © Developed by : ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(2) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `footerlink` varchar(255) NOT NULL,
  `footertxt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `github`, `footerlink`, `footertxt`) VALUES
(1, 'https://www.linkedin.com/in/anisur-rahaman-shahin-31295b186/', 'https://www.linkedin.com/in/anisur-rahaman-shahin-31295b186/', 'https://www.linkedin.com/in/anisur-rahaman-shahin-31295b186/', 'https://www.linkedin.com/in/anisur-rahaman-shahin-31295b186/', 'https://www.linkedin.com/in/anisur-rahaman-shahin-31295b186/', 'https://www.linkedin.com/in/anisur-rahaman-shahin-31295b186/', 'AR ShaHin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `role` tinyint(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `image`, `bio`, `role`, `date`) VALUES
(5, 'Sabbir Hasan', ' Omor', 'sabbir', 'sabbir@gmail.com', '123456', '447574.jpg', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without                                                                                                                                                                                                                                                                                                                                                                                                                                        ', 2, '2020-08-12 09:15:51'),
(6, 'Anisur Rahman', 'Shahin', 'admin', 'admin@tech.com', '123456', 'shahin-formal.png', 'Hello.I\'m Shahin.I\'m a tech enthusiast guy. Personally I’m Optimistic and always in hurry kinda person.I\'m a freelance web devoloper. I study CSE in South-East university.', 1, '2020-08-14 14:36:53'),
(8, 'Asik Newaz', 'Sabbir', 'asik', 'asik@gmail.com', '123', '519127.jpg', 'The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded                                                     ', 2, '2020-08-15 14:24:45'),
(9, 'Abdullah', 'Al Jisan', 'jisan', 'jisan@gmail.com', '123', '242956.jpg', '                                     hi i am jisan               ', 2, '2020-08-15 15:07:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
