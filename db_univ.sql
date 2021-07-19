-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Jul 2021 pada 18.25
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_univ`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `npm` varchar(8) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('L','P','') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `npm`, `tempat_lahir`, `tgl_lahir`, `gender`, `telepon`, `alamat`) VALUES
(1, 1, '19630063', 'Banjarmasin', '2001-05-04', 'L', '081333221102', 'Rantau'),
(3, 5, '19630067', 'Balangan', '2002-02-13', 'P', '081322446780', 'Handil Bakti'),
(4, 4, '35464', 'Tanjung', '2001-02-13', 'L', '081322446780', 'Sungai Miai'),
(5, 6, '19631010', 'Banjarbaru', '2000-02-08', 'L', '088348453336', 'Pasar Lama'),
(6, 7, '19630086', 'Banjarmasin', '2001-06-13', 'L', '081333225555', 'Sungai Lulut'),
(7, 8, '19630090', 'Kandangan', '2002-03-06', 'P', '0873845663', 'Kampung Melayu'),
(8, 9, '19631111', 'Marabahan', '2001-03-07', 'L', '0867864873', 'HKSN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makul`
--

CREATE TABLE `makul` (
  `id` int(11) NOT NULL,
  `kd_makul` varchar(10) NOT NULL,
  `nama_makul` varchar(50) NOT NULL,
  `sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makul`
--

INSERT INTO `makul` (`id`, `kd_makul`, `nama_makul`, `sks`) VALUES
(1, 'MK001', 'TAUHID', 2),
(9, 'MK002', 'ISBD', 2),
(10, 'MK003', 'PBO 1', 3),
(11, 'MK004', 'WEB 2', 3),
(12, 'MK005', 'FILSAFAT', 2),
(13, 'MK006', 'JARKOM', 3),
(14, 'MK007', 'SISTER', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `makul_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `makul_id`, `mahasiswa_id`, `nilai`) VALUES
(7, 1, 3, 67),
(8, 1, 1, 80),
(9, 10, 4, 89),
(10, 11, 5, 90),
(11, 1, 6, 90),
(12, 11, 4, 67),
(13, 9, 7, 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Fadhilah', 'fadhilah@gmail.com', NULL, '$2y$10$fNYefot9gjKnX.XAZe0t/epdZKqsZzXdKY5wub4mDT4a5MJ6nEcrC', NULL, '2021-07-19 16:31:28', '2021-07-19 16:31:28'),
(4, 'Ahmad Haikal', 'haikal@gmail.com', NULL, '$2y$10$8poehJYpCz6LEVkJBzqgZ.22G7r2mM8kfKA/DFuzOX.9fB5pMdMlu', NULL, '2021-07-19 17:23:39', '2021-07-19 17:23:39'),
(5, 'Dewi Cantika', 'dewi@gmail.com', NULL, '$2y$10$7jlooah2PXcTD4annQHOiuckhc4L.QJSMVR/53Dy6QRsr4OO7HQLK', NULL, '2021-07-19 18:05:20', '2021-07-19 18:05:20'),
(6, 'Maulana Pamungkas', 'lana@gmail.com', NULL, '$2y$10$B4HBSHmJL0sPvnslk/8bLe4iSNl1Kgib2qaD/RcYUIAhmN8bmVmMi', NULL, '2021-07-19 18:16:16', '2021-07-19 18:16:16'),
(7, 'Budi Setiadi', 'budi@gmail.com', NULL, '$2y$10$fNYefot9gjKnX.XAZe0t/epdZKqsZzXdKY5wub4mDT4a5MJ6nEcrC', NULL, '2021-07-19 16:31:28', '2021-07-19 16:31:28'),
(8, 'Anggun Sofia', 'anggun@gmail.com', NULL, '$2y$10$fNYefot9gjKnX.XAZe0t/epdZKqsZzXdKY5wub4mDT4a5MJ6nEcrC', NULL, '2021-07-19 16:31:28', '2021-07-19 16:31:28'),
(9, 'Saipuddin', 'udin@gmail.com', NULL, '$2y$10$fNYefot9gjKnX.XAZe0t/epdZKqsZzXdKY5wub4mDT4a5MJ6nEcrC', NULL, '2021-07-19 16:31:28', '2021-07-19 16:31:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makul`
--
ALTER TABLE `makul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `makul`
--
ALTER TABLE `makul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
