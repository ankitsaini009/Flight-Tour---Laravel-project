-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 12:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport_taxis`
--

CREATE TABLE `airport_taxis` (
  `id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `taxi_company_name` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `price_per_km` decimal(10,2) DEFAULT NULL,
  `availability_status` enum('available','booked','unavailable') DEFAULT 'available',
  `description` text DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airport_taxis`
--

INSERT INTO `airport_taxis` (`id`, `location_id`, `taxi_company_name`, `contact_number`, `vehicle_type`, `price_per_km`, `availability_status`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Taxi Company Name', '654645654', 'werw', 546.00, NULL, 'tyrtyrtyrt', 'active', '2024-11-04 15:43:56', '2024-11-04 10:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location_id` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `entry_fee` varchar(255) DEFAULT NULL,
  `opening_hours` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `contact_details` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `location_id`, `description`, `entry_fee`, `opening_hours`, `rating`, `contact_details`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Name', 'ytu', 'fdgfdgfdgffdfg', '55', '4', '878787', '1234567890', '1730719750.png', 'active', '2024-11-04 16:26:02', '2024-11-04 11:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `blogcoments`
--

CREATE TABLE `blogcoments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `blog_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogcoments`
--

INSERT INTO `blogcoments` (`id`, `user_id`, `blog_id`, `description`, `name`, `email`, `website`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ankit', 'yuiyuiyui', 'This is My blog', 'Name', 'email@gmail.com', 'email@gmail.com', 'inactive', '2024-10-25 09:22:10', '2024-10-25 09:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'yuiyuiyui', 'yuiyuiyuui', '1729766237.webp', 'active', '2024-10-24 10:37:17', '2024-10-24 10:37:17'),
(2, 'iiiiii', 'iuuu', '1729766873.png', 'inactive', '2024-10-24 10:45:53', '2024-10-24 10:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `car_rentals`
--

CREATE TABLE `car_rentals` (
  `id` int(11) NOT NULL,
  `car_id` varchar(255) DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `price_per_day` decimal(10,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_rentals`
--

INSERT INTO `car_rentals` (`id`, `car_id`, `car_type`, `location`, `price_per_day`, `availability`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(2, '8', 'Car Rental', 'Car Rental', 2323.00, 'Car Rental', '1730207451.webp', 'active', '2024-10-29 18:33:00', '2024-10-29 13:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `discount_type` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `enabled` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights_bookins`
--

CREATE TABLE `flights_bookins` (
  `id` int(11) NOT NULL,
  `airline_name` varchar(255) DEFAULT NULL,
  `flight_id` int(11) DEFAULT NULL,
  `departure_time` varchar(255) DEFAULT NULL,
  `arrival_time` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights_bookins`
--

INSERT INTO `flights_bookins` (`id`, `airline_name`, `flight_id`, `departure_time`, `arrival_time`, `origin`, `destination`, `price`, `duration`, `status`, `created_at`, `updated_at`) VALUES
(1, 'booking11', NULL, '07:15', '07:16', '111', '112123wewer', 342.00, '21212', 'active', '2024-10-29 17:06:13', '2024-10-29 11:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `frontusers`
--

CREATE TABLE `frontusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT=' ';

--
-- Dumping data for table `frontusers`
--

INSERT INTO `frontusers` (`id`, `name`, `phone`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'NEW USER TEST', '1234567890', 'TEST@GMAIL.COM', '$2y$12$dKgSwPR6cul42E.FM.6IyOMkDXypvRmS8zSDO/kLxfphvjQA8rkYa', '1727852246.webp', 'inactive', '2024-10-02 00:00:00', '2024-10-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bookings`
--

CREATE TABLE `hotel_bookings` (
  `id` int(11) NOT NULL,
  `hotel_id` int(255) DEFAULT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `price_per_night` varchar(255) DEFAULT NULL,
  `amenities` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_bookings`
--

INSERT INTO `hotel_bookings` (`id`, `hotel_id`, `hotel_name`, `location`, `address`, `description`, `rating`, `price_per_night`, `amenities`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'hotel1111', 'hotel1111', 'dfg', 'hotel1111', 'hotel1111', '31321', 'hotel1111', '1730205449.webp', 'active', '2024-10-29 17:51:00', '2024-10-29 12:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `manage_abouts`
--

CREATE TABLE `manage_abouts` (
  `id` int(11) NOT NULL,
  `mission_statement` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contect_phone` varchar(255) DEFAULT NULL,
  `other_details` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_abouts`
--

INSERT INTO `manage_abouts` (`id`, `mission_statement`, `contact_email`, `contect_phone`, `other_details`, `created_at`, `updated_at`) VALUES
(1, 'Mission Statement', 'Mission@email.com', '6566565', '<p>Mission Statement</p>', '2024-10-25 15:40:14', '2024-10-25 10:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contect_phone` varchar(255) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `linkedIn_url` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_logo`, `site_favicon`, `contact_email`, `contect_phone`, `site_description`, `facebook_url`, `twitter_url`, `instagram_url`, `linkedIn_url`, `created_at`, `updated_at`) VALUES
(1, 'My Site', '1729771155.webp', '1729771165.png', 'Site@gmail.com', '43434343', 'adsada', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', 'http://127.0.0.1:8000/settings/site-settings', '2024-10-24 17:17:14', '2024-10-24 12:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `profile_img` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `profile_img`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@gmail.com', '$2y$12$e.ARvf40/9gF1v7ZB3kNGOzp9Yqg43g9mTpWAGnSce.qWkRVyU//O', 1, '1729857167.webp', '2024-09-25 08:08:31', '2024-10-25 11:52:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport_taxis`
--
ALTER TABLE `airport_taxis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcoments`
--
ALTER TABLE `blogcoments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_rentals`
--
ALTER TABLE `car_rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights_bookins`
--
ALTER TABLE `flights_bookins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontusers`
--
ALTER TABLE `frontusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_abouts`
--
ALTER TABLE `manage_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `airport_taxis`
--
ALTER TABLE `airport_taxis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogcoments`
--
ALTER TABLE `blogcoments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_rentals`
--
ALTER TABLE `car_rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flights_bookins`
--
ALTER TABLE `flights_bookins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `frontusers`
--
ALTER TABLE `frontusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_abouts`
--
ALTER TABLE `manage_abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
