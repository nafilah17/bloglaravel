-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 05:26 AM
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
-- Database: `blog_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `author`, `category`, `title`, `content`, `created_at`, `updated_at`) VALUES
(11, 'auth5', 'kesehatan', 'Manfaat Madu', 'Manfaat madu yang banyak sekali memang sudah merupakan rahasia umum. Mulai dari kesehatan hingga kecantikan. Banyak produk kecantikan yang memakai madu sebagai bahan dasar karena memang memiliki banyak sekali manfaat. Apalagi untuk kesehatan, sudah tidak perlu ditanyakan lagi manfaat madu bagi tubuh kita. Manfaat madu sebagai kesehatan sering digunakan sebagai campuran beberapa merek minuman penambah stamina tubuh.Tidak hanya bermanfaat sebagai kesehatan, tidak jarang pula orang menggunakan madu sebagai bahan olesan pada makanan yang hendak dipanggang atau campuran pada makanan karena rasa manis yang memang berbeda dari gula dan pemanis lainnya. Dari paparan di atas itulah tentu manfaat madu sudah tidak perlu diragukan lagi yaitu sebagai sumber nutrisi yang lengkap, meningkatkan stamina, mengobati flu dan batuk, mencegah kanker dan lain sebagainya', '2020-06-18 20:06:33', '2020-06-18 20:06:33'),
(12, 'auth3', 'perawatan', 'Beragam Manfaat Lidah Buaya', 'Manfaat lidah buaya tidak hanya untuk kecantikan saja ternyata banyak manfaat untuk kesehatan. Tanaman ini dipercaya dapat membantu meredakan berbagai gangguan kesehatan. Namun perlu diingat, penggunaan lidah buaya bukanlah pengganti pengobatan dari dokter. Beberapa hal ini adalah manfaat lidah buaya yaitu membantu penyembuhan luka bakar, menjaga kesehatan rongga mulut, sebagai sumber vitamin c. Dan masih banyak manfaat lainnya', '2020-06-18 20:15:59', '2020-06-18 20:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'kesehatan'),
(2, 'perawatan');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_06_18_051513_create_artikels_table', 2),
(3, '2020_06_18_054045_create_profils_table', 3),
(4, '2020_06_18_054656_create_categories_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `name`, `gender`, `birthday`, `created_at`, `updated_at`) VALUES
(1, 'rissa', 'female', '1994-06-17', '2020-06-18 06:27:49', '2020-06-18 06:27:49'),
(2, 'nafilah', 'female', '1994-07-17', '2020-06-18 06:28:40', '2020-06-18 06:28:40'),
(3, 'arifin', 'male', '1994-12-12', '2020-06-18 06:28:40', '2020-06-18 06:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('author','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `profile`, `password`, `created_at`, `updated_at`) VALUES
(1, 'rissa_user1', 'rissanafilah@gmail.com', 'admin', '1_rissa', '123456', '2020-06-18 06:36:53', '2020-06-18 06:36:53'),
(2, 'nafilah_user2', 'nafilahar@gmail.com', 'author', '2_nafilah', '123456', '2020-06-18 06:36:53', '2020-06-18 06:36:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `profile` (`profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
