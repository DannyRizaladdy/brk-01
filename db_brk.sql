-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 12:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_brk`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(255) NOT NULL,
  `umkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terjual` int(255) DEFAULT NULL,
  `stok` int(255) DEFAULT NULL,
  `pendapatan` int(255) DEFAULT NULL,
  `tgl_stok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_terjual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `produk`, `foto`, `deskripsi`, `jenis_produk`, `harga`, `umkm`, `terjual`, `stok`, `pendapatan`, `tgl_stok`, `tgl_terjual`, `created_at`, `updated_at`) VALUES
('149', 'Racik Rempah Jahe', 'assets/image/1639747857-rrj.jpg', 'Sebuah invoasi dari jahe yang merupakan salah satu bahan 1000 manfaat tersedia.', 'Jamu', 11500, 'Jalumas Banyumas', 5, 10, NULL, NULL, NULL, '2021-12-17 06:30:57', '2021-12-17 06:36:31'),
('2', 'Kopi Arabica', 'assets/image/1639747660-7051639747622-651wp-produk.jpg', 'Kopi Arabica dengan butir kopi pilihan yang akan menemani pagi suami anda.', 'Minuman', 5000, 'Coffe Sentosa', 50, 32, 225000, '2021-12-24', '2021-12-06', NULL, '2021-12-17 06:28:01'),
('266', 'Kencur Instan', 'assets/image/1638116091.jpg', 'Jamu yang bernutrisi untuk tubuh dan untuk meringankan stabilitas tubuhmu.', 'Jamu', 13000, 'JALUMAS', 31, 19, 403000, '2021-11-28', '2021-12-04', '2021-11-28 09:14:51', '2021-12-04 10:19:05'),
('342', 'Jahe Instan', 'assets/image/1638120407Jahe instan.jpg', 'Jamu yang berkhasiat untuk menyembuhkan berbagai penyakit yang berbahaya.', 'Minuman', 10000, 'JALUMAS', 24, 8, 240000, '2021-11-29', '2021-12-04', '2021-11-28 10:26:48', '2021-12-04 09:39:16'),
('439', 'Ryzen G35CR', 'assets/image/1638634961-ryzen.jpg', 'Laptop dengan model terbaru dan teknologi canggih yang memborong keinginan sseorang.', 'Teknologi', 12507000, 'IT Komputer', 3, 2, 37521000, '2021-12-04', '2021-12-04', '2021-12-04 09:22:41', '2021-12-04 09:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produks`
--

CREATE TABLE `jenis_produks` (
  `id_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_produks`
--

INSERT INTO `jenis_produks` (`id_jenis`, `jenis_produk`, `created_at`, `updated_at`) VALUES
('B-1', 'Baju', NULL, NULL),
('M-1', 'Makanan', NULL, NULL),
('M-2', 'Minuman', NULL, NULL),
('T-1', 'Tas', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 2),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(5, '2021_11_27_075425_create_barangs_table', 3),
(6, '2021_11_27_161816_create_produks_table', 4),
(7, '2021_11_27_162214_create_jenis_produks_table', 4),
(8, '2021_11_27_162332_create_umkms_table', 4),
(9, '2021_11_27_162435_create_penjualans_table', 4),
(10, '2021_11_27_162444_create_stoks_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id_penjualan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sold` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sold` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id_penjualan`, `id_produk`, `sold`, `tgl_sold`, `created_at`, `updated_at`) VALUES
('SOLD-1', 'J-1', '15', '2021-11-28', NULL, NULL),
('SOLD-2', 'J-2', '32', '2021-11-27', NULL, NULL),
('SOLD-3', 'K-1', '22', '2021-11-27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_umkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id_produk`, `produk`, `foto`, `deskripsi`, `harga`, `id_jenis`, `id_umkm`, `created_at`, `updated_at`) VALUES
('J-1', 'Kunyit Asem', 'assets/image/produk-1.jpg', 'Jamu yang bermanfaat untuk menyehatkan dan menyegarkan badan.', '15.000', 'M-2', 'UMKM-1', NULL, NULL),
('J-2', 'Kencur Manis', 'assets/image/produk-1.jpg', 'Jamu yang bermanfaat untuk menghuatkan dan menghangatkan badan.', '10.000', 'M-1', 'UMKM-1', NULL, NULL),
('K-1', 'Americano Coffee', 'assets/image/wp-produk.jpg', 'Kopi Arabica dengan butir kopi pilihan yang akan menemani pagi suami anda.', '4.500', 'M-2', 'UMKM-2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stoks`
--

CREATE TABLE `stoks` (
  `id_stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_stok` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stoks`
--

INSERT INTO `stoks` (`id_stok`, `id_produk`, `stok`, `tgl_stok`, `created_at`, `updated_at`) VALUES
('STOK-1', 'J-1', '12', '2021-11-25', NULL, NULL),
('STOK-2', 'J-2', '10', '2021-11-26', NULL, NULL),
('STOK-3', 'K-1', '21', '2021-11-27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `umkms`
--

CREATE TABLE `umkms` (
  `id_umkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `umkms`
--

INSERT INTO `umkms` (`id_umkm`, `umkm`, `created_at`, `updated_at`) VALUES
('UMKM-1', 'Jalumas Lumbir', NULL, NULL),
('UMKM-2', 'Kopi Brayan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dani Rizaldi', 'dani@gmail.com', NULL, '$2y$10$61hp8po9NMOcfcGPK/GLVe7NPrgLW33CKS2FA/7H2LX1G58WRDiOu', NULL, '2021-11-26 22:38:51', '2021-11-26 22:38:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_produks`
--
ALTER TABLE `jenis_produks`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `fk_produks` (`id_produk`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_jenis_produk` (`id_jenis`),
  ADD KEY `fk_umkm` (`id_umkm`);

--
-- Indexes for table `stoks`
--
ALTER TABLE `stoks`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `fk_produk` (`id_produk`);

--
-- Indexes for table `umkms`
--
ALTER TABLE `umkms`
  ADD PRIMARY KEY (`id_umkm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD CONSTRAINT `fk_produks` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `fk_jenis_produk` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_produks` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_umkm` FOREIGN KEY (`id_umkm`) REFERENCES `umkms` (`id_umkm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stoks`
--
ALTER TABLE `stoks`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
