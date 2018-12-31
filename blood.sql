-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2018 at 03:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3364651_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'muhsin', '$2y$10$1Je9iugv5s28ZCAexRgvhuZ5owLog9X5VrY2QP18eJ8kqdhcU/0ty'),
(2, 'admin', '$2y$10$JF56JF13eMSVsN2A5Fowpu5oV48pt/Z84SFK4J1vtfhiftoW4WqYe'),
(3, 'nazmul', '$2y$10$LUr4IyewUcnzAQot/PWOzOMYNek6EWbyVuUPoxESqrWPOSOlrIp7y'),
(4, 'rashek', '$2y$10$/8Dq/4ip/dzM4/ucJ0j8auZ/P5jtfDZaof8sRMtJVOTFb0NiUIMrO');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(10) NOT NULL,
  `member` int(10) NOT NULL,
  `lastdonation` date NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `member`, `lastdonation`, `place`) VALUES
(1, 1, '2017-10-05', 'sdf'),
(2, 1, '2017-10-05', 'sdf'),
(3, 3, '2017-10-06', 'sdf'),
(4, 1, '2017-10-06', 'sdf'),
(5, 1, '2017-10-03', 'sdf'),
(6, 1, '2017-10-07', 'fgh'),
(7, 21, '2017-10-10', 'sdf'),
(8, 3, '0000-00-00', 'jhhu'),
(9, 3, '0000-00-00', 'jhhu'),
(10, 3, '0000-00-00', 'jhhu'),
(11, 3, '0000-00-00', 'jhhu'),
(12, 3, '0000-00-00', 'jhhu'),
(13, 3, '0000-00-00', 'jhhu'),
(14, 3, '0000-00-00', 'jhhu'),
(15, 3, '0000-00-00', 'jhhu'),
(16, 3, '0000-00-00', 'jhhu'),
(17, 2, '2017-09-06', 'Dhaka'),
(18, 2, '2017-10-19', 'Dhaka'),
(19, 2, '2017-05-24', ''),
(20, 2, '0000-00-00', ''),
(21, 4, '2017-09-07', ''),
(22, 6, '2017-07-12', ''),
(23, 7, '2017-06-09', ''),
(24, 8, '2017-10-24', ''),
(25, 11, '2017-08-14', ''),
(26, 8, '0000-00-00', ''),
(27, 13, '2017-08-01', 'VUB'),
(28, 14, '2017-11-02', 'LOHAGARA HASPATAL'),
(29, 14, '2017-11-02', 'LOHAGARA HASPATAL'),
(30, 5, '2017-11-01', 'Dhs'),
(31, 13, '2017-08-10', 'DES'),
(32, 15, '2017-05-23', 'Shikder haspatal'),
(33, 15, '2017-05-23', 'Shikder haspatal');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathersname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothersname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bday` date NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` enum('notmarried','married') COLLATE utf8mb4_unicode_ci NOT NULL,
  `spousename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nation` enum('Bangladeshi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bcn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodgroup` enum('A+','B+','O+','AB+','A-','B-','O-','AB-') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnt1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnt1r` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnt1p` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pde` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `fullname`, `fathersname`, `mothersname`, `avatar`, `age`, `bday`, `gender`, `marital`, `spousename`, `nation`, `profession`, `nid`, `bcn`, `bloodgroup`, `address`, `phone`, `cnt1`, `cnt1r`, `cnt1p`, `hsd`, `pde`, `password`, `created_at`) VALUES
(2, 'nazmul', 'Nazmul Hasan', '', '', 'avatars/nazmulf1c0c8a789aaa2.jpg', '24', '1993-07-10', 'male', 'notmarried', '', 'Bangladeshi', 'Job', '151552528588', '', 'O+', '315', '01484848488', 'father', '', '015', 'OK', 'no', '', '2017-10-25 13:38:08'),
(3, 'Hasib', 'Hasib Hasan', '', '', 'avatars/DIbalad85901805dc091.png', '24', '1993-07-10', 'male', 'married', '', 'Bangladeshi', 'Job', '151552528588', '', 'O+', '320', '01484848488', '', '', '', 'OK', 'no', '', '2017-10-25 13:38:08'),
(4, 'Saif', 'Saif s', '', '', 'avatars/DIbalad85901805dc091.png', '25', '1993-07-10', 'male', 'married', '', 'Bangladeshi', 'Job', '151552528588', '', 'B+', '320', '01484848488', '', '', '', 'vill. Gopinathpur, Lohagara, narail', 'no', '', '2017-10-25 13:38:08'),
(5, 'Doe', 'Barfi tt', 'Md. Sultan Sheikh', 'Saifa khatun', 'avatars/DIbalad85901805dc091.png', '25', '1975-05-11', 'male', 'married', '', 'Bangladeshi', 'Job', '151552528588', '', 'B+', '320', '861-726-5021', '', '', '', 'OK', 'no', '', '2017-10-25 13:38:08'),
(6, 'bisop', 'Acreman', '', '', 'avatars/DIbalad85901805dc091.png', '24', '1993-07-10', 'male', 'notmarried', '', 'Bangladeshi', 'Job', '151552528588', '', 'A+', '315', '01484848488', '', '', '', 'OK', 'no', '', '2017-10-25 13:38:08'),
(7, 'Shelley', 'Hasdn', '', '', 'avatars/DIbalad85901805dc091.png', '24', '1993-07-10', 'male', 'married', '', 'Bangladeshi', 'Job', '151552528588', '', 'AB+', '320', '01484848488', '', '', '', 'OK', 'no', '', '2017-10-25 13:38:08'),
(8, 'Jillene', 'Saif s', '', '', 'avatars/DIbalad85901805dc091.png', '25', '1993-07-10', 'male', 'married', '', 'Bangladeshi', 'Job', '151552528588', '', 'B+', '320', '01584848488', '', '', '', 'OK', 'no', '', '2017-10-25 13:38:08'),
(9, 'Natalya', 'Barfitt', '', '', 'avatars/DIbalad85901805dc091.png', '25', '1975-05-11', 'male', 'married', '', 'Bangladeshi', 'Job', '151552528588', '', 'A-', '320', '861-726-5021', 'Brother', '', '01689595954', 'OK', 'no', '', '2017-10-25 13:38:08'),
(10, 'Maximo', 'Simononsky', '', '', 'avatars/DIbalad85901805dc091.png', '30', '1992-06-09', 'female', 'married', '', 'Bangladeshi', 'Job', '151552528588', '', 'O-', '320', '529-284-3374', '', '', '', 'OK', 'no', '', '2017-10-25 13:38:08'),
(11, 'Mahi', 'Mahin', '', '', 'avatars/Mahi80406455b417d7.jpeg', '29', '1988-03-04', 'male', 'notmarried', '', 'Bangladeshi', 'Worker', '1151444626266', '', 'B-', 'Dhaka', '01665594999', '', '', '', 'OK', 'no', '', '2017-10-26 04:45:52'),
(12, 'DIbala', 'DIbala', '', '', 'avatars/DIbalad85901805dc091.png', '26', '1991-03-09', 'male', 'notmarried', '', 'Bangladeshi', 'Player', '48451545451151', '', 'AB+', 'DU', '013332964848', '', '', '', 'OK', 'no', '', '2017-10-26 04:48:02'),
(13, 'sabil', 'sabil has', '', '', 'avatars/sabilbe24958dc0af92.jpg', '35', '1982-03-02', 'male', 'married', '', 'Bangladeshi', 'JOB', '1223122133', '', 'O+', '5000', '01714888888', 'da', 'ma', '01414888888', 'ea', 'no', '', '2017-10-30 10:46:56'),
(14, 'SIDDIQUE', 'KAZI ASHRAF UL ALAM', 'KAZI SHAMSUR RAHMAN', 'MST ZINAT REHANA', 'avatars/SIDDIQUE13b19267c1321a.jpg', '35', '1982-10-03', 'male', 'married', 'ROZINA KHATUN', 'Bangladeshi', 'BUSINESS', '6525206429366', '', 'B+', 'VILL. GOPINATHPUR\r\nLOHAGARA, NARAIL', '01712710357', 'KAMAL', 'FRIEND', '01940513703', 'GOOD', 'yes', '', '2017-11-02 15:53:32'),
(15, 'Ashik', 'sm', 'Md sultan sheikh', 'Jhorna begum', 'avatars/Ashikd436d57d560f01.jpg', '51', '1996-12-30', 'male', 'notmarried', '', 'Bangladeshi', 'Student', '19966515271000214', '', 'A+', 'Vill: mohishapara, Mollickpur, Lohagara, Narail', '01915609664', 'Jhorna begum', 'Mother', '01944896054', 'Good', 'yes', '', '2017-11-06 10:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'new news', 'news desc', '2017-10-22 17:04:41'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic magni dicta repellendus. Eos at sequi amet aspernatur nemo sapiente ea, repellat neque ullam. Eos officiis, aliquam ullam impedit recusandae sit!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Hic magni dicta repellendus. Eos at sequi amet aspernatur nemo sapiente ea, repellat neque ullam. Eos officiis, aliquam ullam impedit recusandae sit!', '2017-10-22 17:10:44'),
(3, 'shdakj', 'ksabdbsad', '2017-10-23 16:27:18'),
(4, 'News', 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description', '2017-10-25 11:58:09'),
(5, 'New Website', 'Opening the new website', '2017-10-25 13:35:27'),
(6, 'Update our new website', 'Today we have updated to our website version to 2.0', '2017-10-30 10:48:44'),
(7, 'HI, HOW R U', 'I AM FINE', '2017-11-02 15:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider1` varchar(255) NOT NULL,
  `slider2` varchar(255) NOT NULL,
  `slider3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider1`, `slider2`, `slider3`) VALUES
(1, 'sliders/sld_26ce35b0e96bae.jpg', 'sliders/sld_26ce35b9180b6e.jpg', 'sliders/sld_26ce35b37e9b63.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `age`) VALUES
(1, 'asgd', 'jjasbd', 23),
(2, 'dsfsdfd', 'sdfsd', 23),
(3, 'sdgsfg', 'erfgh', 45),
(4, 'gdsfg', 'dfgdh', 56),
(5, 'fgdfg', 'dfgdfg', 65),
(6, 'fgh f', 'jfgjh', 67),
(7, 'fgfgs', 'dhgj', 56),
(8, 'hgkjgh', 'vdfg', 76),
(9, 'jhjdfj', 'fjghj', 76),
(10, 'fghfghf', 'hfjhj', 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
