-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2022 pada 12.16
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repository`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nim` int(11) DEFAULT NULL,
  `agama` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lahir` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tahun_lulus` int(11) DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `user_id`, `nama_lengkap`, `nim`, `agama`, `lahir`, `jenis_kelamin`, `alamat`, `hp`, `avatar`, `created_at`, `updated_at`, `tahun_lulus`, `email`) VALUES
(111, 1, 'sandy eko', 111, 'sandy eko priyatna', 'Batam 11 Juli 1993', 'L', 'bengkong', '081273750241', '3x4.jpg', NULL, '2021-08-04 23:14:38', 2011, NULL),
(115, 33, 'raja', 11, NULL, NULL, 'L', 'tiban ayu', '', NULL, '2021-04-20 19:52:26', '2021-04-20 19:52:26', 0, NULL),
(117, 5, 'tito', NULL, NULL, NULL, 'L', 'Aalen, Jerman\r\n\r\naa', '', NULL, '2021-04-22 20:27:07', '2021-04-22 20:27:07', 0, NULL),
(139, 34, 'suho k', 1010, 'suho', 'batam', 'Laki-laki', 'batam', '128312084124', '3x4.jpg', '2021-06-25 08:35:07', '2021-08-04 23:16:54', NULL, NULL),
(180, NULL, 'DAILAMI', 213132131, 'ISLAM', 'jambi', 'LAKI-LAKI', 'TIBAN', '9123141414124', NULL, '2021-09-01 05:43:59', '2021-09-01 05:43:59', NULL, NULL),
(181, NULL, 'DAILAMI2', 213132132, 'ISLAM', 'jambi', 'LAKI-LAKI', 'TIBAN', '9123141414124', NULL, '2021-09-01 05:43:59', '2021-09-01 05:43:59', NULL, NULL),
(182, NULL, 'DAILAMI3', 213132133, 'ISLAM', 'jambi', 'LAKI-LAKI', 'TIBAN', '9123141414124', NULL, '2021-09-01 05:43:59', '2021-09-01 05:43:59', NULL, NULL),
(183, NULL, 'DAILAMI4', 213132134, 'ISLAM', 'jambi', 'LAKI-LAKI', 'TIBAN', '9123141414124', NULL, '2021-09-01 05:43:59', '2021-09-01 05:43:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `author`, `created_at`, `updated_at`) VALUES
(1, 'sandy', '2022-02-09 22:38:21', '2022-02-10 01:49:08'),
(3, 'raja', '2022-02-10 01:50:19', '2022-02-10 01:50:19'),
(4, 'nurcahaya', '2022-02-10 01:50:25', '2022-02-10 01:50:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akademik`
--

CREATE TABLE `data_akademik` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(60) DEFAULT NULL,
  `program_studi` varchar(60) DEFAULT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `tahun_lulus` int(11) DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `ipk` int(11) DEFAULT NULL,
  `no_ijazah` varchar(140) DEFAULT NULL,
  `nim` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_akademik`
--

INSERT INTO `data_akademik` (`id`, `fakultas`, `program_studi`, `angkatan`, `tahun_lulus`, `id_anggota`, `ipk`, `no_ijazah`, `nim`, `created_at`, `updated_at`) VALUES
(1, 'teknik informatika', 'teknik informatika', 2011, 2014, 111, 3, '12312312312', 1111, NULL, NULL),
(2, 'a', 'a', NULL, 22, 136, 22, NULL, NULL, '2021-04-24 12:32:25', '2021-04-24 19:32:25'),
(3, 'teknik', 'aaa', 2021, 2011, 138, 3, 'aaaaaaaaa', 222, '2021-04-24 12:45:35', '2021-04-24 19:45:35'),
(4, 'aadada', '22', 2020, 2020, 111, 4, '4124141241', 2222, '2021-06-25 00:08:37', '2021-06-25 07:08:37'),
(5, 'kedokteran', 'kedokteran', 2017, 2020, 139, 4, '123123121', 1010, '2021-06-25 08:35:07', '2021-06-25 15:35:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug2` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `user_id`, `title`, `content`, `slug2`, `thumbnail`, `created_at`, `updated_at`) VALUES
(3, 1, '3woi', '<p>aa</p>', '3woi', 'computer.png', '2021-07-01 15:37:27', '2021-06-28 13:31:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerja`
--

CREATE TABLE `kerja` (
  `id` int(11) NOT NULL,
  `tempat_kerja` varchar(60) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `jabatan` varchar(60) NOT NULL,
  `gaji` varchar(200) NOT NULL,
  `status` varchar(60) NOT NULL,
  `waktu` varchar(80) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kerja`
--

INSERT INTO `kerja` (`id`, `tempat_kerja`, `id_anggota`, `jabatan`, `gaji`, `status`, `waktu`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Kampus BTP', 111, 'IT', 'Rp 5000000 - Rp 6000000', 'bekerja', '<3', NULL, '2021-07-12 13:31:22', '0000-00-00 00:00:00'),
(2, 'ITEBA', 111, 'IT', '5000', 'bekerja', 'aa', NULL, '2021-06-30 19:25:26', '0000-00-00 00:00:00'),
(3, 'PT Unitech', 139, 'purchasing', 'Rp 4000000 - Rp 5000000', 'Bekerja', '<3', NULL, '2021-06-30 20:23:33', '2021-07-01 03:23:33'),
(4, 'PT GUdang garam', 139, 'purchasing', 'Rp 4000000 - Rp 5000000', 'Bekerja', '1-3', NULL, '2021-06-30 20:26:04', '2021-07-01 03:26:04'),
(5, 'coba', 139, 'coba', 'Rp 4000000 - Rp 5000000', 'Bekerja', '3-6', NULL, '2021-06-30 20:28:52', '2021-07-01 03:28:52'),
(6, 'tes lagi', 139, 'a', 'Rp 4000000 - Rp 5000000', 'Bekerja', '>6', NULL, '2021-06-30 20:30:23', '2021-07-01 03:30:23'),
(7, 'tes lagi 1', 139, 'a', 'Rp 4000000 - Rp 5000000', 'Bekerja', '>6', NULL, '2021-06-30 20:32:40', '2021-07-01 03:32:40'),
(8, 'tes lagi 3', 139, 'a', 'Rp 4000000 - Rp 5000000', 'Bekerja', '>6', NULL, '2021-06-30 20:33:19', '2021-07-01 03:33:19'),
(9, 'tes lagi 4', 139, 'a', 'Rp 4000000 - Rp 5000000', 'Bekerja', '>6', NULL, '2021-06-30 20:33:47', '2021-07-01 03:33:47'),
(10, 'PT EPSON', 139, 'IT', 'Rp 5000000 - Rp 6000000', 'Tidak Bekerja', '<3', NULL, '2021-08-01 19:49:22', '2021-08-02 02:49:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokers`
--

CREATE TABLE `lokers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokers`
--

INSERT INTO `lokers` (`id`, `user_id`, `title`, `content`, `slug`, `thumbnail`, `category`, `created_at`, `updated_at`) VALUES
(33, 1, 'Lowongan PT EPSON', '<p>Dibutuhkan IT Programer Lulusan minimal D3</p>\r\n\r\n<p>dengan syrat kualifikasi :</p>\r\n\r\n<ul>\r\n	<li>Belum Menikah</li>\r\n	<li>Menguasai Framework laravel</li>\r\n	<li>Menguasai Database&nbsp;</li>\r\n</ul>', 'lowongan-pt-epson', 'logo_epson.jpg', 'loker', '2021-07-03 04:56:25', '2021-07-03 04:56:25'),
(34, 1, 'Lowongan kerja PT DJARUM', '<p>ini contoh</p>', 'lowongan-kerja-pt-djarum', NULL, 'loker', '2021-08-01 19:50:55', '2021-08-02 02:50:55'),
(35, 33, 'pembekalan wisudawan', '<p>Hallo Para Calon Wisudawan/i Polibatam!!<br />\r\n<br />\r\nIkatan Alumni Polibatam / IA POLBAT kali ini mengadakan, WORKSHOP PEMBEKALAN KARIR bagi para calon wisudawan/i Polibatam.<br />\r\n<br />\r\nPada kesempatan ini workshop yang diadakan IA Polbat menghadirkan narasumber-narasumber yang telah sukses meniti karir dan sangat berpengalaman pada bidangnya masing-masing!!<br />\r\n<br />\r\nIngat dan catat tanggalnya:<br />\r\nSabtu, 28 November 2020<br />\r\nJam 13.00 s/d Selesai<br />\r\n<br />\r\nVia Online Zoom<br />\r\nLink ▶️ https://bit.ly/39aFHLq<br />\r\n<br />\r\nYuk ikutan dan daftarkan diri kalian!!<br />\r\nDitunggu kehadirannya!!</p>', 'pembekalan-wisudawan', 'kegiatan.jpg', 'kegiatan', '2021-08-05 05:37:18', '2021-08-05 05:37:18'),
(36, 33, 'Event Polibatam Virtual Job FAIR 2020', '<p>Salam Hangat Sahabat IA Polbat ! Event Polibatam Virtual Job FAIR 2020 on air via Youtube Chanel Polibatam TV !! &nbsp;Rangkaian kegiatan yang rangkum dalam event Polibatam Virtual Job Fair 2020 akan hadir pada Chanel Youtube Polibaam TV, jadi yang ketinggalan tetap bisa nonton dan menyerap informasi kegiatan selama job fair disana!! &nbsp;Jangan lupa yaa!! Kegiatan akan berlangsung selama Tanggal 16 - 19 Desember 2020 &nbsp;Informasi lebih lanjut ? Pantengin terus Social Media kita!!</p>', 'event-polibatam-virtual-job-fair-2020', '2.jpg', 'kegiatan', '2021-08-05 05:40:54', '2021-08-05 05:40:54'),
(37, 33, 'contoh', '<p>tes</p>', 'contoh', NULL, 'loker', '2021-08-04 23:15:42', '2021-08-05 06:15:42'),
(38, 1, 'zizik', '<p>adasdadadasdasd</p>', 'zizik', 'sss.png', 'kegiatan', '2022-02-14 09:52:46', '2022-02-14 09:52:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_04_05_033138_create_anggota_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `program_studi`, `created_at`, `updated_at`) VALUES
(1, 'Room Division Management', '2022-02-10 18:31:19', '2022-02-10 18:47:24'),
(3, 'Food and Beverage Management', '2022-02-10 18:47:39', '2022-02-10 18:47:39'),
(4, 'Culinary Management', '2022-02-10 18:47:49', '2022-02-10 18:47:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `repo`
--

CREATE TABLE `repo` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `year` int(11) DEFAULT NULL,
  `id_author` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `file_repo` varchar(250) DEFAULT NULL,
  `thumbnail` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `repo`
--

INSERT INTO `repo` (`id`, `date`, `year`, `id_author`, `id_type`, `id_prodi`, `title`, `description`, `file_repo`, `thumbnail`, `created_at`, `updated_at`) VALUES
(2, '2022-02-08', 2022, 4, 2, 1, 'coba', 'aaaa', 'fb.png', 'LOGO CUM.png', '2022-02-14 02:34:00', '2022-02-14 02:34:00'),
(4, '2022-02-06', 2020, 3, 1, 1, 'z', 'z', '2.png', 'img-Z11160148-0001.jpg', '2022-02-14 02:46:15', '2022-02-14 02:46:15'),
(9, '2022-02-15', 2022, 3, 1, 1, 'v', 'v', NULL, NULL, '2022-02-15 19:34:53', '2022-02-15 19:34:53'),
(10, '2017-01-17', 2017, 1, 1, 1, 'b', 'b', NULL, NULL, '2022-02-15 19:35:23', '2022-02-15 19:35:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Article', '2022-02-10 19:14:10', '2022-02-10 19:14:10'),
(2, 'Book Section', '2022-02-10 19:14:24', '2022-02-10 19:14:24'),
(3, 'Monograph', '2022-02-10 19:14:49', '2022-02-10 19:14:49'),
(4, 'Conference or Workshop Item', '2022-02-10 19:14:56', '2022-02-10 19:14:56'),
(5, 'Book', '2022-02-10 19:15:03', '2022-02-10 19:15:03'),
(6, 'Thesis', '2022-02-10 19:15:20', '2022-02-10 19:15:20'),
(7, 'Patent', '2022-02-10 19:15:27', '2022-02-10 19:15:27'),
(8, 'Experiment', '2022-02-10 19:15:34', '2022-02-10 19:15:34'),
(9, 'Teaching Resource', '2022-02-10 19:15:41', '2022-02-10 19:15:41'),
(10, 'Other', '2022-02-10 19:15:52', '2022-02-10 19:15:52'),
(12, '2022-02-14', '2022-02-14 01:09:30', '2022-02-14 01:09:30'),
(13, '2022-02-14', '2022-02-14 01:12:20', '2022-02-14 01:12:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nim`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'sandy', 111, 'sandy@btp.ac.id', NULL, '$2y$10$ID3Y8BxQB/VA0.X3XBLF/uceeJjhEmSGZikfQfORso8qyBfTG/t9y', '4t0MbG7SNZmCqdgpYbes5Bzfme8GohKUnNxlfy7MQgC3F8i2KCF3yInDzn3G', '2021-04-13 20:09:24', '2021-04-13 20:09:24'),
(33, 'admin', 'admin', 0, 'admin@polibatam.ac.id', NULL, '$2y$10$NsUTbU2aYLjSFD6HBB7yn.EY2jBEokSCYGy2KrtkbtThSNXl7koZ2', 'NqgaVzwcLlY8MyMO4opOjfDv47tvvAB1XkJDZpxZmQbVwtBbc0jHnwNGmgNp', '2021-05-05 05:42:38', '2021-05-05 05:42:38'),
(34, 'anggota', 'suho', 1010, 'suho@gmail.com', NULL, '$2y$10$NsUTbU2aYLjSFD6HBB7yn.EY2jBEokSCYGy2KrtkbtThSNXl7koZ2', 'pHSosr77M6lL7gAHqWcIWEmk6smR5xIywep5tXl8n48nNeOmydPdanxW2DWl', '2021-06-25 08:35:07', '2021-06-25 08:35:07'),
(65, 'anggota', 'DAILAMI', 0, 'DAI@GMAIL.COM', NULL, '$2y$10$mP6XZLZLbIbf5IisBwtgo.X4DLoTf0EIBV3qaxRKoJkYqoT8c6c2G', NULL, '2021-09-01 05:43:59', '2021-09-01 05:43:59'),
(66, 'anggota', 'DAILAMI2', 0, 'DAI2@GMAIL.COM', NULL, '$2y$10$9f9uupHJJNJNGHxFEnXrEeKpu8lih.tDXXvQYVqaaWOuv8fBZ4MqC', NULL, '2021-09-01 05:43:59', '2021-09-01 05:43:59'),
(67, 'anggota', 'DAILAMI3', 0, 'DAI22@GMAIL.COM', NULL, '$2y$10$aZxPuFCQg2BG5UawZJCTS.38ilrOTCKHeE3Ax1bhn6nmAfwOHC0TS', NULL, '2021-09-01 05:43:59', '2021-09-01 05:43:59'),
(68, 'anggota', 'DAILAMI4', 0, 'DAI3@GMAIL.COM', NULL, '$2y$10$fXjGbXtTqInKLdCdGGa6XOzc1sMnoDpRylBVzZ/AeQaIJiDIqchIy', NULL, '2021-09-01 05:43:59', '2021-09-01 05:43:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_akademik`
--
ALTER TABLE `data_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerja`
--
ALTER TABLE `kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokers`
--
ALTER TABLE `lokers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `repo`
--
ALTER TABLE `repo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_akademik`
--
ALTER TABLE `data_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kerja`
--
ALTER TABLE `kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `lokers`
--
ALTER TABLE `lokers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `repo`
--
ALTER TABLE `repo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
