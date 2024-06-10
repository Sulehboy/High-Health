-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 12:02 PM
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
-- Database: `highhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `password` varchar(250) NOT NULL,
  `regdate` varchar(50) NOT NULL,
  `regstatus` enum('inactive','active','suspended','') NOT NULL,
  `profilepic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`id`, `fullname`, `email`, `mobileno`, `password`, `regdate`, `regstatus`, `profilepic`) VALUES
(6, 'suleiman yusuf', 'bry77a@gmail.com', '799134886', '$2y$10$R9xOD6zXpF/B5yKss6L54Oyo6Phhdba/R.pLZKMtfJBq45S1427b.', 'Wed-05_2024: 11:42:26', 'inactive', ''),
(7, 'Michelle Karush', 'michellek.lifelegacy@gmail.com', '790866623', '$2y$10$58KgMiPAMcQrmouV7D.xTeKi3iX.KPw1Oi1V2hcyxlRyUcuPRp8m2', 'Wed-05_2024: 11:50:37', 'inactive', ''),
(8, 'suleiman ', 'brya111@gmail.com', '760134086', '$2y$10$k2uWqlek.0K5cERrSCzqAuLIk8cJ2V5HwZfTitipUmxbCJwiDfprC', 'Wed-05_2024: 12:17:24', 'inactive', '../uploads/760134086.png'),
(9, 'Grace Ayuma', 'brya0@gmail.com', '746467165', '$2y$10$8T2PaRTv1BxRXpR1WcmQeuCsuQ1ywuZn27Rhewv3LEwS9/7/wjm1S', 'Wed-05_2024: 12:24:14', 'inactive', '746467165.jpg'),
(10, 'Alphonce Odhiambo', 'Odhiambo4305@gmail.com', '740216370', '$2y$10$j7XxPO9IiEHuUgZXSKCeXOAvPzc0Jyu6H9L8e8bRtJZTrsDO83X6q', 'Wed-05_2024: 12:35:06', 'inactive', '740216370.jpg'),
(11, 'Grace Ayuma', 'gracelifelegacy@gmail.com', '790334088', '$2y$10$9rUHzvHuasgzdZalx6B0UuIYS8ThW2hxNWf5knVbbKG.Tl/gyQn92', 'Wed-05_2024: 12:48:12', 'inactive', '790334088.jpg'),
(12, 'Suleiman Yusuf', 'sulesuleh1111@gmail.com', '737575436', '$2y$10$0hvUjSs4p6V8FHy0qwJQUuHWW62TNF2rs4tqUAH7esMHYeJHYAGRG', 'Sat-05_2024: 11:41:43', 'inactive', '737575436.jpeg'),
(13, 'Zamzam Suleiman', 'zam22@gmail.com', '722766616', '$2y$10$EKH2iSAqRfR8VzrsqPJ.RujP3yGrmDjclYtdcwNhPbXzQCAvd/rEO', 'Sat-05_2024: 11:45:51', 'inactive', '722766616.jpeg'),
(14, 'Alfonce Ouma', 'alfonceouma99@gmail.com', '700657078', '$2y$10$.nIs.ekicrFhnQqV2wfOx.XnSLY4kwS867svfmiQwE9A7Bqa..Ltu', 'Sat-05_2024: 11:58:06', 'inactive', '700657078.jpg'),
(15, 'Faith Amusolo', 'faith@gmail.com', '724566787', '$2y$10$Pq7N0j2M23ilgsucD1uWquhVdS2BMZGS2mNPdkGbdG7.283TG.JQ2', 'Sat-05_2024: 18:34:01', 'inactive', '724566787.jpg'),
(16, 'Melvin Achieng\'', 'melvin@gmail.com', '756342134', '$2y$10$NQJAyvPcMoEDa0NQF2.n7.iR1mbP1lrsUOX5JHJnnF96amfnHmhBi', 'Sun-05_2024: 12:35:33', 'inactive', '756342134.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobileno` (`mobileno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
