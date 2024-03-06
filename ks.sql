-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: מרץ 06, 2024 בזמן 06:05 PM
-- גרסת שרת: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ks`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class-name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `classes`
--

INSERT INTO `classes` (`id`, `class-name`) VALUES
(1, 'ו'),
(2, 'ז'),
(3, 'ח'),
(4, 'ט');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course-name` text NOT NULL,
  `course-class_id` tinytext NOT NULL,
  `course-create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `courses`
--

INSERT INTO `courses` (`id`, `course-name`, `course-class_id`, `course-create_date`) VALUES
(1, 'מתמטיקה', '2', '2024-03-06'),
(2, 'אנגלית', '3', '2024-03-06'),
(3, 'אנגלית', '1', '2024-03-06'),
(4, 'מתמטיקה', '1', '2024-03-06');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `pic`, `bio`) VALUES
(1, 'דניאל צרויה', '1.webp', ''),
(2, 'רן בר', '2.webp', ''),
(3, 'רלי כהן', '3.webp', ''),
(4, 'איליי קורן', '4.webp', '');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `email-confirm` tinyint(1) NOT NULL,
  `user-register_date` date NOT NULL,
  `rank` tinytext NOT NULL,
  `user-first_name` text NOT NULL,
  `user-last_name` text NOT NULL,
  `user-birthday` date NOT NULL,
  `user-address` text NOT NULL,
  `user-country` text NOT NULL,
  `user-school` text NOT NULL,
  `user-phone` text NOT NULL,
  `user-mom_name` text NOT NULL,
  `user-mom_phone` text NOT NULL,
  `user-id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `email-confirm`, `user-register_date`, `rank`, `user-first_name`, `user-last_name`, `user-birthday`, `user-address`, `user-country`, `user-school`, `user-phone`, `user-mom_name`, `user-mom_phone`, `user-id`) VALUES
(1, 'user1', '123', 'my@email.com', 1, '2024-03-06', 'a', 'ישראל', 'ישראלי', '2024-03-06', 'אבן גבירול 1 תל אביב', 'ישראל', 'אורט סינגאלובסקי', '0501234567', 'אמא', '0507654321', '123456789');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
