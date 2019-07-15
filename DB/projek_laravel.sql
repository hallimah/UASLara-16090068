-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jul 2019 pada 16.36
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_tbl`
--

CREATE TABLE `artikel_tbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikel_tbl`
--

INSERT INTO `artikel_tbl` (`id`, `judul`, `kategori`, `isi_berita`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(35, 'Spring 2019 Anime: Kimetsu no Yaiba', 'komik', 'Sinopsis\r\n\r\nAnime Kimetsu no Yaiba menceritakan seorang bernama Tanjirou Kamado, pemuda sulung dari keluarga yang kurang mampu dan tinggal di pedalaman gunung pada era Taisho. Sejak dahulu kala, terdapat rumor mengenai Oni (Iblis Pemakan Manusia) yang bersembunyi di hutan. Karena itu, penduduk setempat tidak pernah berani keluar di malam hari. Legenda mengatakan bahwa Pembasmi Oni juga berkeliaran di malam hari dan memburu iblis yang haus darah. Bagi Tanjirou yang belum mengetahui apa-apa, hal itu hanyalah sekedar rumor belaka dan tidak akan menyebabkan masalah di kehidupannya.\r\n\r\nSejak kematian ayahnya, Tanjirou menggantikan ayahnya untuk memenuhi kebutuhan keluarganya. Meski kehidupan mereka sangat berat, mereka merasakan kebahagiaan dan kehangatan yang luar biasa dari keluarganya. Tapi, kebahagiaan itu hancur saat Tanjirou melihat keluarganya dibantai saat dirinya meninggalkan rumah untuk bekerja menjual arang di Kota. Tidak hanya itu, satu-satunya keluarganya yang selamat, adik perempuannya Nezuko, berubah menjadi Oni. Namun yang mengejutkannya, Nezuko masih menunjukkan emosi dan pemikiran manusia dengan mencoba melindungi Tanjirou dari serangan Pembasmi Oni. Dimulailah perjalanan Tanjirou untuk melawan Oni dan mengembalikan adiknya menjadi manusia kembali.', '824728195.jpg', '2019-07-15 04:45:43', '2019-07-15 04:45:43', NULL),
(36, 'Spring 2019 Anime: Kono Oto Tomare!', 'komik', 'Sinopsis\r\n\r\nSetelah semua kakak kelasnya lulus, Takezo Kurata menjadi satu-satunya anggota klub koto–sebuah alat musik tradisional Jepang–SMA Tokise. Ketika tahun ajaran baru dimulai, Takezo berjuang keras untuk mendapatkan anggota baru. Akan tetapi usahanya belum membuahkan hasil. Suatu hari, Takezo mencoba untuk mengusir para berandalan yang sering menggunakan ruang klub koto tanpa izin. Akibatnya ia menjadi bulan-bulanan para berandalan tersebut. Untunglah seorang siswa baru berhasil menghentikan mereka. Bahkan siswa bernama Chika Kudou itu bilang para Takezo bahwa ia ingin menjadi anggota klub Koto. Tetapi rupanya ia punya reputasi sebagai berandalan ketika masih SMP, bahkan rumornya ia merusak toko koto milik kakeknya. Takezo pun dipaksa untuk membuat keputusan, haruskah ia menerima Chika sebagai anggota klub koto?', '1676352879.jpg', '2019-07-15 04:47:52', '2019-07-15 04:52:04', NULL),
(37, 'Ellie', 'novel', 'Oke, mari kita mulai reviewnya.\r\n\r\nCara penggambaran tentang tokoh Ellie ini bener-bener maksimal banget bikin kita kesel sama kelakuannya. Bahkan, gak cuima tokoh Ellie yang menjadi tokoh utama aja, tetapi juga penggambaran tokoh Dean yang juga menjadi tokoh penting dalam novel ini. Dan saking keselnya, hampir aja aku putusin buat gak ngelanjutin baca. (Inget loh, bukan karena ceritanya jelek, tapi karena saking keseeeeeel sama tokohnya).\r\n\r\nReview Dear EllieTapiii….. berhubung penasaran sama akhir ceritanya, dan terlanjur jatuh cinta dengan tokoh Elliot dalam novel ini (yang sayangnya cuma sedikit diceritainnya), jadi akhirnya dilanjutkan deh membacanya.\r\n\r\nJujur sih agak susah kasih review yang objektif, karena udah kesel sama tokoh utamanya. Tapi, justru inilah kelebihan penulis buku ini, yaitu bisa menggambarkan seorang tokoh secara detail sampe mainin emosi pembacanya. Dari segi cerita, oke dan gak mengecewakan. Sama bagusnya dengan buku sebelumnya, The Days with You. Cuma, ceritanya gak se-ringan buku sebelumnya. Disini ada beberapa diskusi atau pembahasan mengenai beberapa hal yang dilakukan oleh Ellie dan Dean, dan pembahasan ini bisa dibilang gak terlalu sederhana.\r\n\r\nUntuk novel ini, aku kasih nilai 7 dari 10 poin. (Poinnya agak berkurang, soalnya masih kesel sama Ellie dan Dean). hahaha\r\n\r\nSatu lagi yang perlu di catat, kalo pembaca novel ini dan the days with you terbagi atas #TeamAdam (fans tokoh Adam dari novel The Days With You) dan #TeamDean (fans tokoh Dean dari novel Dear Ellie), kalau aku mau jadi #TeamElliot aja deh. Berhubung cuma tokoh itu yang gak menyebalkan. 😀', '736099555.jpeg', '2019-07-15 05:50:19', '2019-07-15 05:50:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_tbl`
--

CREATE TABLE `komentar_tbl` (
  `id_komen` bigint(20) UNSIGNED NOT NULL,
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2019_06_29_132358_create_table_artikel', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2019_07_07_135947_add_deleted_at_column_to_artikel_tbl', 3),
(6, '2019_07_10_052519_create_table_logs', 4),
(7, '2019_07_10_231709_create_table_komentar', 5);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'nur halimah', 'halimah@gmail.com', NULL, '$2y$10$YoW1wSu9mjAsoGKwmPZmU.m.8IP52LLn3Y6ceQsxsUkvQ4yFI4nWy', NULL, '2019-07-13 00:41:07', '2019-07-13 00:41:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_tbl`
--
ALTER TABLE `artikel_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar_tbl`
--
ALTER TABLE `komentar_tbl`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel_tbl`
--
ALTER TABLE `artikel_tbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `komentar_tbl`
--
ALTER TABLE `komentar_tbl`
  MODIFY `id_komen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
