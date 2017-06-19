-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 06:22 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_food_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(3) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `title`, `created_at`, `created_by`) VALUES
(1, 'Dhaka', '2017-06-12', 1),
(2, 'Gazipur', '2017-06-12', 1),
(3, 'Narayangang', '2017-06-12', 1),
(4, 'Maymonsingh', '2017-06-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_locations`
--

CREATE TABLE `service_locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `actual_location` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `thana_id` int(10) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_locations`
--

INSERT INTO `service_locations` (`id`, `title`, `actual_location`, `latitude`, `longitude`, `thana_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Shobahanbag Mosque', 'Shobahanbag, Dhanmondhi', '23.7546308', '90.3752843', 2, '2017-06-13', 2, '2017-06-13', 2),
(2, 'Daffodil University', 'Daffodil University, Dhanmondhi', '23.75483', '90.3762055', 2, '2017-06-13', 1, '2017-06-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `district_id` int(3) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`id`, `title`, `district_id`, `created_at`, `created_by`) VALUES
(1, 'Mirpur Model Thana', 1, '2017-06-12', 1),
(2, 'Dhanmondhi Thana', 1, '2017-06-12', 1),
(3, 'Pallabi Thana', 1, '2017-06-12', 1),
(4, 'Gulshan Thana', 1, '2017-06-12', 1),
(5, 'Mohammadpur Thana', 1, '2017-06-12', 1),
(6, 'Uttara Thana', 1, '2017-06-12', 1),
(7, 'Gazipur Sadar Upazila', 2, '2017-06-14', 1),
(8, 'Sreepur Upazila', 2, '2017-06-14', 1),
(9, 'Kaliakoir Upazila', 2, '2017-06-14', 1),
(10, 'Kapasia Upazila', 2, '2017-06-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `usertype` enum('Admin','Provider','Receiver') NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `dob` date NOT NULL,
  `general_address` varchar(250) NOT NULL,
  `thana_id` int(10) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `lognitude` varchar(50) NOT NULL,
  `credit_balance` float NOT NULL,
  `status` enum('Active','Inactive','Sucpend') NOT NULL DEFAULT 'Inactive',
  `profile_pic` varchar(100) NOT NULL,
  `thamb_nail` varchar(100) NOT NULL,
  `is_displayed` enum('Yes','No') NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `usertype`, `mobile`, `phone`, `email`, `gender`, `dob`, `general_address`, `thana_id`, `latitude`, `lognitude`, `credit_balance`, `status`, `profile_pic`, `thamb_nail`, `is_displayed`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, 'mithu_chandronath', '64a75cbe44728b95e8594b8ab03b83a04cdfa4195da8e34ba2c6fad439435d902afbd0d4c1b25863c727f027e70206f2d538', 'Mathu Chandronath', 'Admin', '01774665380', '0236547895', 'mithu@gmail.com', 'Male', '1995-10-06', 'Kalabagan, Dhaka, Bangladesh', 2, '23.749289731205334', '90.38308382034302', 0, 'Inactive', 'pic_1497521224.jpg', '', 'Yes', '2017-06-15', '2017-06-15', 0),
(2, 'salman_quader', '7bfb03e38359f49ab9cbaceeca66f2910054b35ac752a8598e2100d27bfad322f1fcb4d91875b08a2b32842ca851c03e8fd2', 'Salman Quader Kibria', 'Admin', '01774665384', '0266559988', 'salmanquadercse@gmail.com', 'Male', '1995-04-05', 'Skyline Lotus, Dhaka, Bangladesh', 7, '23.801793085783387', '90.36398380994797', 0, 'Inactive', 'pic_1497521496.jpg', '', 'Yes', '2017-06-15', '2017-06-15', 0),
(3, 'provider', '880a542e2f7b38631af57645fef166730248264356cf1112619bd7a5357f231f658feba9b020ab1a0b7d5de5f279d3ec1da2', 'Provider Rasel', 'Provider', '01774665384', '0265859658', 'sa@gmail.com', 'Male', '2017-06-15', 'Shukrabad Bus Stop, Mirpur Rd, Dhaka 1215, Bangladesh', 2, '23.8018225', '90.366426', 0, 'Inactive', 'pic_1497522386.jpg', '', 'Yes', '2017-06-15', '2017-06-15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dtitleunique` (`title`);

--
-- Indexes for table `service_locations`
--
ALTER TABLE `service_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ttitleunique` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usernameunique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service_locations`
--
ALTER TABLE `service_locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
