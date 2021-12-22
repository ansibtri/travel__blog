-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 08:10 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_solo_travelers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel_user_account`
--

CREATE TABLE `admin_panel_user_account` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_register_dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel_user_account`
--

INSERT INTO `admin_panel_user_account` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_register_dt`) VALUES
(1, 'Anish Bhattarai', 'ansibtri961@gmail.com', 'anish', '2021-08-18 19:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_author_id` smallint(6) NOT NULL,
  `post_img` text NOT NULL,
  `post_visible` tinyint(1) NOT NULL,
  `post_created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `post_name`, `post_description`, `post_author_id`, `post_img`, `post_visible`, `post_created_date`) VALUES
(1, 'Annapurna Circuit', 'The Annapurna Circuit is a trek within the mountain ranges of central Nepal. The total length of the route varies between 160–230 km (100-145 mi), depending on where motor transportation is used and where the trek is ended. This trek crosses two different river valleys and encircles the Annapurna Massif. The path reaches its highest point at Thorung La pass (5416m/17769 ft), touching the edge of the Tibetan plateau. Practically all trekkers hike the route anticlockwise, as this way the daily altitude gain is slower, and crossing the high Thorong La pass is easier and safer.\r\n\r\nIn addition to the Annapurna Circuit Trek, Annapurna Seven Passes Trek or Annapurna Seven Hills trek is also popular in the region. However, this is less traversed and is off the beaten path trek in the region.\r\n\r\nThe mountain scenery, seen at close quarters includes the Annapurna Massif (Annapurna I-IV), Dhaulagiri, Machhapuchhre, Manaslu, Gangapurna, Tilicho Peak, Pisang Peak, and Paungda Danda. Numerous other peaks of 6000-8000m in elevation rise from the Annapurna range.\r\n\r\nThe trek begins at Besisahar or Bhulbhule in the Marshyangdi river valley and concludes in the Kali Gandaki Gorge. Besisahar can be reached after a seven-hour drive from Kathmandu. The trail passes along paddy fields and into subtropical forests, several waterfalls and gigantic cliffs, and various villages.\r\n\r\nAnnapurna Circuit has often been voted as the best long-distance trek in the world, as it combined, in its old full form, a wide variety of climate zones from tropics at 600 m asl to the arctic at 5416 m asl at the Thorong La pass and cultural variety from Hindu villages at the low foothills to the Tibetan culture of Manang Valley and lower Mustang. Continuing construction of a road has shortened the trail and changed the villages. The Beisahar-Manag road has been built which passes through the trekking trail most of the time. With the construction of road, mountain biking is becoming popular, with Mustang, in particular, becoming one of the world\'s most popular mountain biking destinations.\r\n\r\n', 1, '350px-Under_stars_and_snows.jpg', 1, '2021-08-18 19:34:44'),
(2, 'Api Nampa Trek', 'The Api-Nampa Conservation Area is a protected area in the Far-Western Development Region, Nepal. It was established in 2010 and covers 1,903 km2 (735 sq mi) encompassing 21 Village Development Committees in the Darchula District. The western boundary is formed by the Mahakali River, and the northern by the international border with Tibet. Adjacent to the east are the Bajhang and Baitadi districts.[1] It ranges in elevation from 518 to 7,132 m (1,699 to 23,399 ft) at the Himalayan peak Api, and is within the circumscribed area of the Kailash Sacred Landscape.[2]\r\n\r\nNamed after the two peaks Api and Nampa, it was established to conserve the unique biodiversity and cultural heritage of the area.[1] It is inhabited by 54,358 people living in 8966 households.[3]\r\n\r\nA grasslands plateau is at the center of the area. It is intermixed with various forest types.[4]', 1, 'apinampa.jpg', 1, '2021-08-18 19:40:46'),
(3, 'Everest base camps', 'There are two base camps on Mount Everest, on opposite sides of the mountains: South Base Camp is in Nepal at an altitude of 5,364 metres (17,598 ft) (28°0′26″N 86°51′34″E), while North Base Camp is in Tibet, China at 5,150 metres (16,900 ft) (28°8′29″N 86°51′5″E).[1][2][3]\r\n\r\nThe base camps are rudimentary campsites at the base of Mount Everest that are used by mountain climbers during their ascent and descent; they are also visited by hikers. South Base Camp is used when climbing via the southeast ridge, while North Base Camp is used when climbing via the northeast ridge.[4]\r\n\r\nSupplies are shipped to the South Base Camp by porters, and with the help of animals, usually yaks. The North Base Camp is accessed by a paved road that branches from China National Highway 318. Climbers typically rest at base camp for several days for acclimatization, to reduce the risk of altitude sickness.', 1, '300px-Khumbutse.jpg', 1, '2021-08-20 11:26:19'),
(4, 'Kanchenjunga Base Camp Trek', 'Kanchenjunga Base Camp Trek is one of the great Himalayan trails, which covers the eastern part of Nepal. The term “Kanchenjunga” stands for crystal clear in Nepali. Kanchenjunga (8586m) is the third highest mountain in the world and is also popularly known as the “Five Treasures of the Great Snow” i.e. Gold, Silver, Precious Stones, Grain, and Holy Scriptures. The famous Kanchenjunga is situated in North-East Nepal and is bordered by Sikkim, India. Since the mountain partly lies in Nepal and partly in India, the view of Kanchenjunga can be seen from India, Bhutan, and Tibet. \r\n\r\nThe trekking route to Kanchenjunga Base Camp passes through the Arun valley which is considered the most beautiful regions for trekking in Nepal. One of the main highlights of this trek is Kanchenjunga Conservation area which covers an area of 2035 square kilometers. The area is home to many flora and fauna as well as various wildlife including Himalayan black bear, musk deer, snow leopard, red panda, wild boar and many others. The route to basecamp offers variations in landscapes from alpine grasslands to sub-tropical forests, low river valley, glacial moraine, and rocky scree slopes. Throughout the trekking, trekkers get to relish the stunning panoramic view of the massive mountain peaks such as Lhotse (8516m), Everest (8848m), Kanchenjunga (8586m), Makalu (8481m), and many others. The Kanchenjunga region is inhabited by a mixed community of Sherpa, Rai, Limbu, and Gurung, which provides an opportunity for trekkers to understand their culture and lifestyle.\r\n\r\nSwiss Family Treks and Expedition is one of the most trusted travel companies in Nepal while having worked in the tourism since 2002. We make sure your travel in Nepal is special and memorable. We acquire all kinds of legal permits for your travel in the country. We assign you a local English speaking guide so that you can make the most out of the trip. We get you the best accommodation in the area to make your stay a comfortable one. So, remember us if you are planning for a trip to the Himalayas.', 1, 'kanchanjungatrek.jpg', 1, '2021-08-20 11:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `cateogory`
--

CREATE TABLE `cateogory` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_link_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cateogory`
--

INSERT INTO `cateogory` (`category_id`, `category_name`, `category_link_name`) VALUES
(1, 'Famous Place', 'famousplace'),
(2, 'Religious Site', 'religioussite');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_login`
--

CREATE TABLE `dashboard_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_register` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard_login`
--

INSERT INTO `dashboard_login` (`admin_id`, `admin_name`, `admin_password`, `admin_register`) VALUES
(1, 'admin', '$2y$10$Pi8qTY5o22kSlPitH15itOp2vgWDe.aFGmBzTDot2TW/Qyxh88m.u', '2021-08-24 19:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `subscribed_email`
--

CREATE TABLE `subscribed_email` (
  `email_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `register_dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribed_email`
--

INSERT INTO `subscribed_email` (`email_id`, `user_email`, `register_dt`) VALUES
(1, 'ansibtri961@gmail.com', '2021-08-22 20:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `fd_id` int(11) NOT NULL,
  `fd_email` varchar(255) NOT NULL,
  `fd_message` text NOT NULL,
  `fd_complain_dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`fd_id`, `fd_email`, `fd_message`, `fd_complain_dt`) VALUES
(1, 'ansibtri961@gmail.com', 'hello', '2021-08-24 19:13:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel_user_account`
--
ALTER TABLE `admin_panel_user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`post_id`);
ALTER TABLE `blog_post` ADD FULLTEXT KEY `post_name` (`post_name`);
ALTER TABLE `blog_post` ADD FULLTEXT KEY `post_description` (`post_description`);
ALTER TABLE `blog_post` ADD FULLTEXT KEY `post_name_2` (`post_name`,`post_description`);

--
-- Indexes for table `cateogory`
--
ALTER TABLE `cateogory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `dashboard_login`
--
ALTER TABLE `dashboard_login`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `subscribed_email`
--
ALTER TABLE `subscribed_email`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`fd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel_user_account`
--
ALTER TABLE `admin_panel_user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cateogory`
--
ALTER TABLE `cateogory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dashboard_login`
--
ALTER TABLE `dashboard_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribed_email`
--
ALTER TABLE `subscribed_email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `fd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
