-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 04:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `picture`, `status`) VALUES
(1, 'brand145008_35_pm_Apr_2021.png', 1),
(2, 'brand205213_35_pm_Apr_2021.png', 1),
(3, 'brand91813_47_pm_Apr_2021.png', 1),
(4, 'brand126613_57_pm_Apr_2021.png', 1),
(5, 'brand280714_05_pm_Apr_2021.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `message`, `email`, `status`) VALUES
(4, 'Aportyuui', 'mnbvcxzaadg', 'xyz@gmail.com', 2),
(5, 'pumpkin', 'ttuiooyhgttgfgghhy', 'dfghh@gmail.com', 1),
(6, 'hummingbird', 'asdfghjklll', 'ghjjk@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(100) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `name`, `value`, `icon`, `status`) VALUES
(1, 'Feature Item', 345, 'flaticon-award', 1),
(2, 'ACTIVE PRODUCTS', 567, 'flaticon-like', 1),
(3, 'YEAR EXPERIENCE', 45, 'flaticon-event', 1),
(4, 'OUR CLIENTS', 5, 'flaticon-woman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `progress` tinyint(4) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `year`, `progress`, `status`) VALUES
(1, 'PHD of Interaction Design & Animation', '2020', 80, 'active'),
(2, 'Master of Database Administration', '2016', 92, 'active'),
(3, 'Bachelor of Computer Engineering', '2010', 62, 'active'),
(4, 'Diploma of Computer', '2005', 94, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `designation`, `message`, `photo`, `status`) VALUES
(2, 'ayrin', 'head of enosis', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd us', 'thumnail42324_07_am_Apr_2021.jpg', 1),
(3, 'Tonoy Jackson', 'Head of Idea', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd us', 'thumnail22124_47_am_Apr_2021.png', 1),
(4, 'zakaria', 'head of robi', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd us', 'thumnail183225_20_am_Apr_2021.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `category`, `summary`, `thumbnail`, `featured_image`, `status`) VALUES
(35, 'DESIGN', 'Gilroy Limbo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, ', 'thumnail149315_30_pm_Apr_2021.jpg', 'featured_image3215_30_pm_Apr_2021.jpg', 1),
(36, 'Audio', 'Ipsum Which', 'xpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', 'thumnail32600_45_pm_Apr_2021.jpg', 'featured_image400_45_pm_Apr_2021.jpg', 1),
(37, 'UX/UI', 'Dark Beauty', 'xpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', 'thumnail191401_19_pm_Apr_2021.jpg', 'featured_image22201_19_pm_Apr_2021.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active\r\n2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active 2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `summary`, `status`) VALUES
(1, 'CreativeDesign', 'fab fa-react', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, ', 1),
(2, 'UnlimitedFeatures', 'fab fa-free-code-camp', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, ', 1),
(3, 'UltraResponsive', 'fal fa-desktop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, ', 1),
(4, 'CreativeIdeas', 'fal fa-lightbulb-on', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, ', 1),
(5, 'EasyCustomization', 'fal fa-edit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, ', 1),
(6, 'SuperSupport', 'fal fa-headset', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 DEFAULT 'default.png',
  `copyright` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `copyright`, `about`, `tagline`, `office_address`, `email`, `phone`, `status`) VALUES
(1, 'logo178532_43_pm_Apr_2021.jpg', 'copyright@Nasrin66|Reserved', 'Lorem\'s ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit. Numquam!', 'I am a professional web developer with years of experienceand  in PHP,Laravel', 'Dhanmondi13', 'nasrin2@gmail.com', '01817537347', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `socialid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`socialid`, `name`, `icon`, `link`, `status`) VALUES
(1, 'facebook', 'fab fa-facebook', 'https://www.facebook.com/hehehe', 'active'),
(2, 'twitter', 'fab fa-twitter', 'https://www.twitter.com/hehehe', 'active'),
(3, 'instagram', 'fab fa-instagram', 'https://www.instagram.com/', 'active'),
(4, 'LinkedIn', 'fab fa-linkedin-In', 'https://www.linkedin.com/', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active 2=deactive',
  `role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=user 2=employee\r\n3=admin',
  `profile_image` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `profile_image`) VALUES
(1, 'Ayrin Anwar', 'ayrinanwaranika@gmail.com', '$2y$10$J4EkYLUw1y6/UHWV9OlaseR/b227i/9NxZy2IDspjoTfB/fXJkXVS', 2, 1, 'default.png'),
(6, 'Arefin Anwar', 'arefinanwar112@gmail.com', '$2y$10$siFboGbRQj12cmVtpzm8OeW6S3n/bkCrPNZOXm55m1hK.32oVmvre', 2, 1, 'default.png'),
(7, 'Sermin Sabnam', 's.sabnam13@gmail.com', '$2y$10$OuUoUEYkqC.Ya3RQy2DG4uguHXr.pA8lQpLO8cFK48a4d4ZgZ6/xe', 2, 1, 'default.png'),
(8, 'Md Anwar Hossain', 'a55_hossain1@yahoo.com', '$2y$10$CtTGvjUL2Wrfkw6p2achW.EDXcBOlpoCmMwMGihNrlFvoEzBkUWFm', 2, 1, 'default.png'),
(9, 'sdfghj', 'sdfghj@gmail.com', '$2y$10$xBcjKbDevSsWWEAv0lY40ewUU0CLypYchi5WYD.beUWUCFkD/lz9K', 2, 1, 'default.png'),
(10, 'jkilo', 'jkilo@gmail.com', '$2y$10$ufZ4.X7qSrJvj1hGyvZEUe2Rd6E2Lei6TnA6AeAe.uIOMo7QpxhYq', 2, 1, 'default.png'),
(11, 'dfgh', 'dfgh@gmail.com', '$2y$10$OliVq5l4HHXJ4G0F3lyV7e7d/7ljOpD8D4EtTAR/b1LaTAYdyFqby', 2, 1, 'default.png'),
(12, 'Ayrin Anwar', 'ayrinanwaranika113@gmail.com', '$2y$10$JxfAQIP.AiE.b6QA8JlJ.uOuGoHFrxUVUcyxAo9qVUWctCjfCEVl6', 2, 1, 'default.png'),
(13, 'Sermin Sabnam', 's.sabnam114@gmail.com', '$2y$10$Arp6W9dDjeKcYJJTj6lkRuMpYjHQwBvj87FSjn1/uF6bKO1oH2oZq', 2, 1, 'default.png'),
(14, 'abcde', 'abcde@gmail.com', '$2y$10$SYWksdTAKjb2pagEO8INF.gllLME86iFEmYEuAzkMnJQk.nxXYw6O', 2, 1, 'default.png'),
(15, 'abcde12', 'abcde12@gmail.com', '$2y$10$66b0ZEJ2J4tSO7TcCT/u5eGAyW.oOh1kPBdtKLty0Rm8b/HJVAsRa', 2, 1, 'default.png'),
(16, 'abcde19', 'abcde19@gmail.com', '$2y$10$bPx2u7dedTXg1G4sG8unmO29HsASketvT1lxMf46vcQoOoiwLEacu', 2, 1, 'default.png'),
(17, 'Sermin Sabnam', 's.sabnam16@gmail.com', '$2y$10$NaSXboLhx7Zf5N9irCXHAOfU8/.Y399uV59m9ef0WSuoRD88tC70m', 2, 1, 'default.png'),
(18, 'Sermin Sabnam', 's.sabnam09@gmail.com', '$2y$10$TTsxcMJnOpUv/7IQyLb6hu5e2JsUGDpeE/epjfEMVgnzfDrpmD0C.', 2, 1, 'default.png'),
(19, 'Sermin Sabnam', 's.sabnam7@gmail.com', '$2y$10$FD.m4XOaTlbIqSWZI/rr8Opt7vsX1yyP2kPs7NZSSeq0LNxjTKW1.', 2, 1, 'default.png'),
(20, 'Ayrin Anwar', 'ayrinanwaranika67@gmail.com', '$2y$10$QOuwGKU/qZJDxj9W11BKB.1X3QD9CrLzQIoWW8qq7UIFjg763USOm', 2, 1, 'default.png'),
(21, 'Ayrin Anwar', 'ayrinanwaranika77@gmail.com', '$2y$10$9McEmUAqjDPo4W2VWp3.seoK2mC4R0sPd7bzhJBhVWNYzvdXCDUUW', 2, 1, 'default.png'),
(22, 'Arefin Anwar', 'arefinanwar77@gmail.com', '$2y$10$2iHBguVg8pHW1OKpaAKTfuciCEamTX8EtYGfHJvqPAci.iLUMtNIG', 2, 1, 'default.png'),
(23, 'Arefin Anwar', 'arefinanwar79@gmail.com', '$2y$10$hDgfEQK5HSYIWrAEraU4dOSrer5YG0qnGEaWNDb4u3VKzSFnLzI12', 2, 1, 'default.png'),
(24, 'Ayrin Anwar', 'ayrinanwaranika567@gmail.com', '$2y$10$ftqUrLol9SuRIuY8cjJ9leX0s7tszjEyPjIskTFHy5RGNJyzgioN6', 2, 1, 'default.png'),
(25, 'Sermin Sabnam', 's.sabnamghjk@gmail.com', '$2y$10$KAQxLDy0OsPIvLxU2yj9GOs9/C95MUH4yp6EdCUMajs5.wcG/P15O', 2, 1, 'default.png'),
(26, 'Sermin Sabnam', 's.sabnamghjk78@gmail.com', '$2y$10$qgKIagGMF4GVlkZ3qwScsOumQy0swSslJcbqqCP6FwwR1BwHf3SPe', 2, 1, 'default.png'),
(27, 'Sermin Sabnam', 's.sabnamghjk7834@gmail.com', '$2y$10$gNmw6EONkqPJzY.ua88L4ePq/1aERUY2Ds1o.xIXombWQt2P/X9Fe', 2, 1, 'default.png'),
(28, 'Ayrin Anwar', 'ayrinanwaranika235@gmail.com', '$2y$10$xL0NTQIHKAIlOel4MSABUOCFguEkR0LCPi8K2pYvoRZkNlAzvPT0S', 2, 1, 'default.png'),
(29, 'Ayrin Anwar', 'ayrinanwaranika223@gmail.com', '$2y$10$.01bQrC78P6g4wi35Bpcs.FsunToRw7BbPKFNCDLFXvMv1pBZZzAe', 1, 3, 'default.png'),
(30, 'Arefin Anwar', 'arefinanwar56@gmail.com', '$2y$10$Pwu3hk1WKcE1p4epn0BueecwN.gCtz5.OuEugnZsgiYlxCz55jHy2', 1, 1, 'default.png'),
(31, 'Anwar Hossain', 'a56_hossain23@gmail.com', '$2y$10$KIr97q0QC85pub1J3iX4ROGj/aEjJzet9NN/HXxhffdGpN9L0gJQe', 1, 1, 'default.png'),
(32, 'Sermin Sabnam', 's.sabnam45@gmail.com', '$2y$10$.Q4puGkckaa1qGsQb63jP.pw4NPast.EaS9wNfcC66KoKWQLj9ouC', 1, 1, 'default.png'),
(33, 'Abir Hossain', 'abirhossain@gmail.com', '$2y$10$saO3ClxZHvCXKm/E1yNkNOFZLOmy6JNS/4T0OXN3crkLIejSPBVyW', 1, 1, 'default.png'),
(34, 'Sumaiya Afrin', 'sumaiya123@gmail.com', '$2y$10$IwR7vpgFSecJgVMg0LVcjOGSUzRV6Kwsr4Rzi14p3t/oQHwroascO', 1, 1, 'default.png'),
(35, 'Sumaiya Aurchi', 'sumaiyaaurchi123@gmail.com', '$2y$10$OhO6h4BeQ4cJpSYxyCMhQ.eb/P8tfTvLwdFySB./C5.ua1/n3SaY.', 1, 1, 'default.png'),
(36, 'Nasrin Anwar', 'nasrin@gmail.com', '$2y$10$iaPZRtycP0zpnCiSHC4gVuafFkQZfRyiqHHrjwLq784uO1jehZWT.', 1, 1, 'profileimage267728_48_pm_Apr_2021.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`socialid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `socialid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
