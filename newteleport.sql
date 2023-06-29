-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2023 pada 18.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newteleport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bts`
--

CREATE TABLE `bts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bts_name` char(255) NOT NULL,
  `contact` char(255) NOT NULL,
  `telepon` char(255) NOT NULL,
  `alamatbts` char(255) NOT NULL,
  `koordinat_bts` char(255) NOT NULL,
  `ipremote_bts` char(255) NOT NULL,
  `dokumentasi_bts` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bts`
--

INSERT INTO `bts` (`id`, `bts_name`, `contact`, `telepon`, `alamatbts`, `koordinat_bts`, `ipremote_bts`, `dokumentasi_bts`, `created_at`, `updated_at`) VALUES
(1, 'BTS F25', 'Nova', '081285858568', 'Rangkapan Jaya No.F25', '-6.387698, 106.785709', '10.10.10.5/30', '-Ganti Router pada tanggal 19/04/2023', '2023-06-23 12:00:40', '2023-06-23 12:00:40'),
(2, 'Sindang Barang', 'Nova', '081285858568', 'Sindang Barang, Bogor', '-6.579585, 106.759624', '10.10.10.1/30', '-Ganti Router pada tanggal 19/04/2023', '2023-06-23 12:02:30', '2023-06-23 12:02:30'),
(3, 'BTS Puri Serpong', 'Ahmad zaenal', '08129546887722', 'Puri Serpong, Tangerang Selatan', '-6.356361, 106.690219', '10.10.10.8/30', 'No maintenance', '2023-06-24 03:33:32', '2023-06-24 03:33:32'),
(4, 'BTS SALAK', 'KANG ADUL', '081266998877', 'Kampung Salaka Bogor', '-6.672630, 106.733885', '10.10.10.10/30', 'No maintenance', '2023-06-24 03:37:17', '2023-06-24 03:37:17'),
(6, 'BTS Sawangan', 'Rama', '081283380027', 'Jl. Raya Muchtar 6-7, Sawangan Lama, Kec. Sawangan, Kota Depok, Jawa Barat 16517', '-6.407351, 106.756253', '10.10.10.18/30', 'No maintenance', '2023-06-24 03:40:28', '2023-06-24 03:40:28'),
(7, 'BTS GUNUNG MALANG', 'KANG ADUL', '0856996688745', 'Jalan Gunung Malang', '-6.407351, 106.756253', '10.10.10.21/30', '-No maintenance', '2023-06-27 12:16:06', '2023-06-27 12:16:06'),
(8, 'BTS Cita-cita', 'Kang Yudi', '0846985774422', 'Jalan Raya Puncak', '-6.672630, 106.733885', '1896574485', 'diam', '2023-06-27 12:20:16', '2023-06-27 12:20:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` char(255) NOT NULL,
  `nama` char(255) NOT NULL,
  `category` char(255) NOT NULL,
  `pic` char(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` char(255) NOT NULL,
  `bandwidht` char(255) NOT NULL,
  `ip` char(255) NOT NULL,
  `status` char(255) NOT NULL,
  `tanggal_berlangganan` date NOT NULL,
  `keterangan` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_bts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `id_customer`, `nama`, `category`, `pic`, `telepon`, `alamat`, `bandwidht`, `ip`, `status`, `tanggal_berlangganan`, `keterangan`, `created_at`, `updated_at`, `id_bts`) VALUES
(3, 'TDP-WR-10105', 'PT. Sumber Rezeki', 'Fiber Optic', 'Erick Tohir', '081269696959', 'Bojongsari Baru, Kota Depok', '1 Gbps', '192.168.100.45/29', 'Actived', '2023-06-14', '-', '2023-06-23 12:43:56', '2023-06-23 12:43:56', 2),
(4, 'TDP-FO-000333', 'Asmali', 'Fiber Optic', 'Asmali', '083845659835', 'Puri Rangkapan Jaya', '20 Mbps', '10.88.102.10/30', 'Actived', '2023-06-01', '-', '2023-06-24 03:31:19', '2023-06-24 03:31:19', 1),
(5, 'TDP-WR-10105', 'PT. Makmur Sejahtera', 'Microwave', 'Dion', '081269988754', 'JL.H.Kempet Sawangan', '100 Mbps', '10.80.81/29', 'Actived', '2023-06-10', '-', '2023-06-24 03:43:59', '2023-06-24 03:45:14', 8),
(6, 'TDP-WR-10106', 'PT. Angin Ribut', 'Microwave', 'Bayu', '081236688445', 'Jl. Raya Serpong no.45', '500 Mbps', '10.80.80.10/29', 'Dismantle', '2023-06-02', '-', '2023-06-24 03:46:53', '2023-06-24 03:46:53', 3),
(10, 'TDP-FO-10106', 'SMKN 2 DEPOK', 'Fiber Optic', 'yudi', '0856996688745', 'Sawangan Depok', '200 Mbps', '10.80.81.90/29', 'Dismantle', '2023-06-03', '-', '2023-06-24 04:13:17', '2023-06-24 04:13:17', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_14_160950_create_customers_table', 2),
(6, '2023_06_23_160152_create_customers_table', 3),
(7, '2023_06_23_170938_create_bts_table', 4),
(8, '2023_06_23_174132_add_idbts_to_customers_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'rama', 'rama@gmail.com', NULL, '$2y$10$R.hs7iyW/fenKnnzBzSqU.7gKExfi0Yq6x01BExIy3pRo62HJn8ya', NULL, '2023-06-22 10:11:51', '2023-06-22 10:11:51'),
(4, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$86pJ4t.ps7hv5Icl/Eyfwe5xUubPmZJxMMJ0rqQni/aPaRdNW0m6q', NULL, '2023-06-22 10:25:08', '2023-06-22 10:25:08'),
(5, 'nursyahri', 'nursyahri107@gmail.com', NULL, '$2y$10$I2OAFftvdnQ3YX9m.yJmuutbl4Ag.Q6Mlmk8ca0ssdoJ41C3Y2X9q', NULL, '2023-06-25 04:22:16', '2023-06-25 04:22:16'),
(6, 'Yanto', 'yanto@gmail.com', NULL, '$2y$10$/edFH472PiL1HRAPhNr0G.FRYzVegHanIAEHJbNlrlNF9G1HeNO.2', NULL, '2023-06-25 04:52:23', '2023-06-25 04:52:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bts`
--
ALTER TABLE `bts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `bts`
--
ALTER TABLE `bts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
