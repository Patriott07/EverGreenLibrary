-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2024 pada 03.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evergreenlib`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `fiterBookBySearch` (`str` VARCHAR(100))   BEGIN 
	SELECT * FROM books WHERE books.title LIKE '%str%' OR books.penulis LIKE '%str%' OR books.publisher LIKE '%str%' OR books.total_pages LIKE '%str%' OR books.quantity LIKE '%str%';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `fiterBookBySearch2` (`str` VARCHAR(100))   BEGIN 
	SELECT * FROM books WHERE books.title LIKE "%',str,'%" OR books.penulis LIKE "%',str,'%" OR books.publisher LIKE "%',str,'%" OR books.total_pages LIKE "%',str,'%" OR books.quantity LIKE "%',str,'%";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getCategoryBook` (`id_book` INT)   BEGIN
	SELECT * FROM category_book, pivot_category WHERE pivot_category.id_book = id_book;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getCategoryBook2` (`id_book` INT)   BEGIN
	SELECT * FROM category_book, pivot_category WHERE pivot_category.id_category = category_book.id AND pivot_category.id_book = id_book;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `total_pages` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `title`, `penulis`, `publisher`, `publication_date`, `description`, `total_pages`, `image`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Luka membuka jalan pulang.', 'Widia fitri', 'Aacomedy companyon', '2018-03-17', 'Seorang remaja mencari peralihan kehidupan yang lebih baik. mencoba memahami scenario masa lalu, kemudian berusaha untuk merubahnya kembali. hal itu mungkin tak akan pernah terbayang di kepala kita. namun Alya berkata \'ini benar\'', 170, NULL, 14, '2024-04-16 07:54:10', '0000-00-00 00:00:00', NULL),
(2, 'Sejatinya semua akan pulang.', 'Syntia nugraha', 'Syntia nugraha', '2024-03-08', 'Semua manusia memilih hal yang sama tanpa terkecuali. ', 221, NULL, 5, '2024-04-16 06:06:06', NULL, NULL),
(3, 'The nameless monster', 'Peter Capek', 'Kinderheim 551', '2006-03-15', 'The nameless monster will caught everyone. memakan sebuah nama sehingga manusia kehilangan jatidiri dan arti hidupnya. kehilangan segala nya bahkan dunia nya. ', 40, NULL, 2, '2024-03-07 05:36:22', NULL, NULL),
(8, 'sayang tak pernah hilang', 'Filla greya', 'Sany greya filla', '2018-06-15', ' Halo saya memberikan deskripsi untuk book id 8', 244, NULL, 2121, '2024-04-16 08:10:05', NULL, NULL),
(9, 'Aku dan kekasihku, Elsa', 'Elsa Nur Fitri', 'Elsa Production', '2022-02-16', 'Elsa, itu adalah aku. aku adalah seorang gadis berusia 23 tahun. hari ini usiaku bertambah. bertambah besar seperti doaku kepada tuhanku. aku tertidur lelap di pagi itu hingga aku terbangun dan berjumpa seseorang yang merubah hidupku di dunia dan di akhirat', 321, '2024-04-16-cover1-jpg-1713258082_d039d90d1992eebf31ae.jpg', 3, '2024-04-16 09:01:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_book`
--

CREATE TABLE `category_book` (
  `id` int(11) NOT NULL,
  `name_category` varchar(80) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category_book`
--

INSERT INTO `category_book` (`id`, `name_category`, `deleted_at`) VALUES
(1, 'Fiksi', NULL),
(2, 'Legend', NULL),
(3, 'Comedy', NULL),
(4, 'Education', NULL),
(5, 'Self Development', NULL),
(6, 'Filosofi', NULL),
(7, 'Financial', NULL),
(8, 'Business', NULL),
(9, 'Anime', NULL),
(10, 'Horror', NULL),
(11, 'Drama', NULL),
(12, 'Romance', NULL),
(13, 'Cooking', NULL),
(14, 'Survival', NULL),
(15, 'Animals and nature', NULL),
(16, 'Islam', NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `checkdatepeminjaman`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `checkdatepeminjaman` (
`id` int(11)
,`user_id` int(11)
,`jumlah_buku` int(11)
,`tgl_pinjam` date
,`tgl_kembali` date
,`batas_waktu` int(11)
,`status` enum('Request','Dipinjam','Kembali','Selesai')
,`denda` int(11)
,`deleted_at` date
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_book`
--

CREATE TABLE `comment_book` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `comment_book`
--

INSERT INTO `comment_book` (`id`, `book_id`, `user_id`, `tanggal`, `content`, `rating`, `deleted_at`) VALUES
(1, 3, 7, '2024-03-16', 'The nameless monster is a great books story. telling about a kids who dont know who is iam.. i recommended it!', 5, NULL),
(2, 3, 5, '2024-03-16', 'The story seems dark. is make me scare. but overall the story is great', 4, NULL),
(3, 1, 7, '2024-03-22', 'The end of history is to sad. its remind me to something', 3, NULL),
(4, 1, 5, '2024-03-22', 'The story is been related of my life. such love this book. i recommended it!', 5, NULL),
(5, 1, 6, '2024-03-22', 'I dont understand what the story telling about. maybe i need a time.', 3, NULL),
(6, 2, 5, '2024-03-16', 'such love this story. i want more series of this story. glad to read it', 5, NULL),
(9, 9, 8, '2024-04-22', 'Plot twist banget ending nya mau nangis, keren penulisnya bisa mengimbangi jalan cerita di campur dengan kaya akan gaya bahasa.', 5, NULL),
(10, 9, 9, '2024-04-22', 'Suka sama Cover buku dan penulisan cerita, walau endingnya sedih banget lah woe wkwkw', 4, NULL),
(11, 8, 9, '2024-04-23', 'Test', 3, NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `countbook`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `countbook` (
`Books On Evergreen` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `countcategory`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `countcategory` (
`Category Books` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `countcheckoutbook`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `countcheckoutbook` (
`Books have been checkout` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `countmember`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `countmember` (
`Members Evergreen` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `countpeminjamandipinjam`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `countpeminjamandipinjam` (
`Sedang Dipinjam` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `countpeminjamanselesai`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `countpeminjamanselesai` (
`Sudah Selesai` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `countpeminjmanrequest`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `countpeminjmanrequest` (
`Request Peminjaman` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorite`
--

CREATE TABLE `favorite` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `favorite`
--

INSERT INTO `favorite` (`user_id`, `book_id`, `deleted_at`) VALUES
(3, 2, NULL),
(3, 3, NULL),
(3, 1, NULL),
(5, 3, NULL),
(9, 9, NULL),
(9, 9, NULL),
(9, 9, NULL),
(9, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback_library`
--

CREATE TABLE `feedback_library` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `feedback_library`
--

INSERT INTO `feedback_library` (`id`, `user_id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'I founded many books here, i was so happy the place is clean and soft.. i really enjoyed wasting my time here', '2024-03-05 13:42:19', '2024-03-05 13:42:19', '2024-03-05 13:42:19'),
(2, 6, 'Aplikasi yang sangat menarik saya memiliki banyak peluang utnuk membaca lebih banyak. fitur yang mudah serta UI yang memukau membuat saya betah tinggal disini', '2024-03-05 21:28:19', NULL, NULL),
(3, 6, 'This Application is cool. amazing i really helped full', '2024-03-05 21:39:04', NULL, NULL),
(4, 6, 'This Application is cool. amazing i really helped full', '2024-03-05 21:39:26', NULL, NULL),
(5, 6, 'its good', '2024-03-05 21:39:53', NULL, NULL),
(6, 6, 'good', '2024-03-05 21:41:26', NULL, NULL),
(7, 6, 'good', '2024-03-05 21:42:06', NULL, NULL),
(8, 6, 'This App very good and clean i like how the design make it sipmle but significant different', '2024-03-06 13:46:01', NULL, NULL),
(9, 6, 'This app is very ggood', '2024-03-06 13:47:04', NULL, NULL),
(10, 6, 'Its very good', '2024-03-06 13:51:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `getfeedbackindex`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `getfeedbackindex` (
`id` int(11)
,`name` varchar(100)
,`email` varchar(100)
,`password` varchar(255)
,`status` enum('online','offline')
,`jenis_kelamin` enum('undifined','Laki-Laki','Perempuan')
,`telp` varchar(20)
,`alamat` text
,`role_id` int(11)
,`created_at` timestamp
,`updated_at` timestamp
,`deleted_at` timestamp
,`content` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `mostpositivebooks`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `mostpositivebooks` (
`id` int(11)
,`title` varchar(255)
,`penulis` varchar(100)
,`publisher` varchar(100)
,`publication_date` date
,`description` text
,`total_pages` int(11)
,`image` varchar(255)
,`quantity` int(11)
,`created_at` timestamp
,`updated_at` timestamp
,`deleted_at` timestamp
,`ulasan` bigint(21)
,`rating` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `mostworstbooks`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `mostworstbooks` (
`id` int(11)
,`title` varchar(255)
,`penulis` varchar(100)
,`publisher` varchar(100)
,`publication_date` date
,`description` text
,`total_pages` int(11)
,`image` varchar(255)
,`quantity` int(11)
,`created_at` timestamp
,`updated_at` timestamp
,`deleted_at` timestamp
,`ulasan` bigint(21)
,`rating` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `batas_waktu` int(11) NOT NULL,
  `code` varchar(150) NOT NULL,
  `status` enum('Request','Dipinjam','Kembali','Selesai') NOT NULL DEFAULT 'Request',
  `denda` int(11) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `user_id`, `jumlah_buku`, `tgl_pinjam`, `tgl_kembali`, `batas_waktu`, `code`, `status`, `denda`, `deleted_at`) VALUES
(1, 7, 2, '2024-03-15', '2024-03-22', 7, '', 'Dipinjam', 200000, NULL),
(2, 5, 1, '2024-03-16', '2024-03-23', 7, '', 'Dipinjam', 100000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_category`
--

CREATE TABLE `pivot_category` (
  `id_book` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pivot_category`
--

INSERT INTO `pivot_category` (`id_book`, `id_category`, `deleted_at`) VALUES
(3, 9, NULL),
(3, 4, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name_role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name_role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_peminjaman`
--

CREATE TABLE `tb_detail_peminjaman` (
  `id` int(11) NOT NULL,
  `peminjaman_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_detail_peminjaman`
--

INSERT INTO `tb_detail_peminjaman` (`id`, `peminjaman_id`, `book_id`, `deleted_at`) VALUES
(1, 1, 3, NULL),
(2, 1, 2, NULL),
(3, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `themostpeoplelike3`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `themostpeoplelike3` (
`id` int(11)
,`title` varchar(255)
,`penulis` varchar(100)
,`publisher` varchar(100)
,`publication_date` date
,`description` text
,`total_pages` int(11)
,`image` varchar(255)
,`quantity` int(11)
,`created_at` timestamp
,`updated_at` timestamp
,`deleted_at` timestamp
,`like` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('online','offline') DEFAULT 'offline',
  `jenis_kelamin` enum('undifined','Laki-Laki','Perempuan') DEFAULT 'undifined',
  `telp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `status`, `jenis_kelamin`, `telp`, `alamat`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Patriotto07', 'superadmin@gmail.com', 'ulpjpeTqfeDV+Qrk8ISlmA==', '', 'offline', 'undifined', NULL, NULL, 1, '2024-03-01 17:00:00', NULL, NULL),
(5, 'Syhira putri vivian', 'syahira@gmail.com', 'v3yFqaSyUzbSMvrLg/JUWw==', '', 'offline', 'undifined', NULL, NULL, 2, '2024-03-02 17:00:00', NULL, NULL),
(6, 'patriot', 'patriot@gmail.com', 'kyCqn9mHvZ/eTgEYX9giEQ==', '', 'offline', 'undifined', NULL, NULL, 2, '2024-03-04 17:00:00', NULL, NULL),
(7, 'Pvtrvvtt0', 'pwangtampn@gmail.com', 'kyCqn9mHvZ/eTgEYX9giEQ==', 'fotor-ai-20240421164248.jpg', 'offline', 'undifined', NULL, NULL, 2, '2024-04-22 00:27:58', NULL, NULL),
(8, 'Elsaa', 'Elsa@gmail.com', 'oOB8Fo1eR7joJCEZZ3WuJQ==', '', 'offline', 'undifined', NULL, NULL, 1, '2024-04-14 15:14:41', NULL, NULL),
(9, 'Rendy', 'rendy@gmail.com', 'eJifiAZppxN1Kmn2nC6Z4g==', '', 'offline', 'undifined', NULL, NULL, 2, '2024-04-16 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur untuk view `checkdatepeminjaman`
--
DROP TABLE IF EXISTS `checkdatepeminjaman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `checkdatepeminjaman`  AS SELECT `peminjaman`.`id` AS `id`, `peminjaman`.`user_id` AS `user_id`, `peminjaman`.`jumlah_buku` AS `jumlah_buku`, `peminjaman`.`tgl_pinjam` AS `tgl_pinjam`, `peminjaman`.`tgl_kembali` AS `tgl_kembali`, `peminjaman`.`batas_waktu` AS `batas_waktu`, `peminjaman`.`status` AS `status`, `peminjaman`.`denda` AS `denda`, `peminjaman`.`deleted_at` AS `deleted_at` FROM `peminjaman` WHERE `peminjaman`.`status` = 'Dipinjam' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `countbook`
--
DROP TABLE IF EXISTS `countbook`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countbook`  AS SELECT count(0) AS `Books On Evergreen` FROM `books` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `countcategory`
--
DROP TABLE IF EXISTS `countcategory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countcategory`  AS SELECT count(0) AS `Category Books` FROM `category_book` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `countcheckoutbook`
--
DROP TABLE IF EXISTS `countcheckoutbook`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countcheckoutbook`  AS SELECT count(0) AS `Books have been checkout` FROM (`tb_detail_peminjaman` join `peminjaman`) WHERE `peminjaman`.`id` = `tb_detail_peminjaman`.`peminjaman_id` AND `peminjaman`.`status` <> 'Request' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `countmember`
--
DROP TABLE IF EXISTS `countmember`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countmember`  AS SELECT count(0) AS `Members Evergreen` FROM `users` WHERE `users`.`role_id` = '2' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `countpeminjamandipinjam`
--
DROP TABLE IF EXISTS `countpeminjamandipinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countpeminjamandipinjam`  AS SELECT count(0) AS `Sedang Dipinjam` FROM `peminjaman` WHERE `peminjaman`.`status` = 'Dipinjam' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `countpeminjamanselesai`
--
DROP TABLE IF EXISTS `countpeminjamanselesai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countpeminjamanselesai`  AS SELECT count(0) AS `Sudah Selesai` FROM `peminjaman` WHERE `peminjaman`.`status` = 'Selesai' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `countpeminjmanrequest`
--
DROP TABLE IF EXISTS `countpeminjmanrequest`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `countpeminjmanrequest`  AS SELECT count(0) AS `Request Peminjaman` FROM `peminjaman` WHERE `peminjaman`.`status` = 'Request' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `getfeedbackindex`
--
DROP TABLE IF EXISTS `getfeedbackindex`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getfeedbackindex`  AS SELECT `users`.`id` AS `id`, `users`.`name` AS `name`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`status` AS `status`, `users`.`jenis_kelamin` AS `jenis_kelamin`, `users`.`telp` AS `telp`, `users`.`alamat` AS `alamat`, `users`.`role_id` AS `role_id`, `users`.`created_at` AS `created_at`, `users`.`updated_at` AS `updated_at`, `users`.`deleted_at` AS `deleted_at`, `feedback_library`.`content` AS `content` FROM (`users` join `feedback_library`) WHERE `feedback_library`.`user_id` = `users`.`id` ORDER BY `feedback_library`.`id` DESC LIMIT 0, 8 ;

-- --------------------------------------------------------

--
-- Struktur untuk view `mostpositivebooks`
--
DROP TABLE IF EXISTS `mostpositivebooks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mostpositivebooks`  AS SELECT `books`.`id` AS `id`, `books`.`title` AS `title`, `books`.`penulis` AS `penulis`, `books`.`publisher` AS `publisher`, `books`.`publication_date` AS `publication_date`, `books`.`description` AS `description`, `books`.`total_pages` AS `total_pages`, `books`.`image` AS `image`, `books`.`quantity` AS `quantity`, `books`.`created_at` AS `created_at`, `books`.`updated_at` AS `updated_at`, `books`.`deleted_at` AS `deleted_at`, count(`comment_book`.`id`) AS `ulasan`, sum(`comment_book`.`rating`) AS `rating` FROM ((`books` left join `comment_book` on(`comment_book`.`book_id` = `books`.`id`)) left join `users` on(`users`.`id` = `comment_book`.`user_id`)) GROUP BY `books`.`id` ORDER BY count(`comment_book`.`id`) DESC, sum(`comment_book`.`rating`) DESC ;

-- --------------------------------------------------------

--
-- Struktur untuk view `mostworstbooks`
--
DROP TABLE IF EXISTS `mostworstbooks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mostworstbooks`  AS SELECT `books`.`id` AS `id`, `books`.`title` AS `title`, `books`.`penulis` AS `penulis`, `books`.`publisher` AS `publisher`, `books`.`publication_date` AS `publication_date`, `books`.`description` AS `description`, `books`.`total_pages` AS `total_pages`, `books`.`image` AS `image`, `books`.`quantity` AS `quantity`, `books`.`created_at` AS `created_at`, `books`.`updated_at` AS `updated_at`, `books`.`deleted_at` AS `deleted_at`, count(`comment_book`.`id`) AS `ulasan`, sum(`comment_book`.`rating`) AS `rating` FROM ((`books` left join `comment_book` on(`comment_book`.`book_id` = `books`.`id`)) left join `users` on(`users`.`id` = `comment_book`.`user_id`)) GROUP BY `books`.`id` ORDER BY count(`comment_book`.`id`) ASC, sum(`comment_book`.`rating`) ASC ;

-- --------------------------------------------------------

--
-- Struktur untuk view `themostpeoplelike3`
--
DROP TABLE IF EXISTS `themostpeoplelike3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `themostpeoplelike3`  AS SELECT `books`.`id` AS `id`, `books`.`title` AS `title`, `books`.`penulis` AS `penulis`, `books`.`publisher` AS `publisher`, `books`.`publication_date` AS `publication_date`, `books`.`description` AS `description`, `books`.`total_pages` AS `total_pages`, `books`.`image` AS `image`, `books`.`quantity` AS `quantity`, `books`.`created_at` AS `created_at`, `books`.`updated_at` AS `updated_at`, `books`.`deleted_at` AS `deleted_at`, count(0) AS `like` FROM ((`books` join `users`) join `favorite`) WHERE `favorite`.`user_id` = `users`.`id` AND `favorite`.`book_id` = `books`.`id` GROUP BY `favorite`.`book_id` ORDER BY 'like' DESC ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_book`
--
ALTER TABLE `category_book`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_book`
--
ALTER TABLE `comment_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`) USING BTREE;

--
-- Indeks untuk tabel `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indeks untuk tabel `feedback_library`
--
ALTER TABLE `feedback_library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pivot_category`
--
ALTER TABLE `pivot_category`
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_category` (`id_category`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_id` (`peminjaman_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `category_book`
--
ALTER TABLE `category_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `comment_book`
--
ALTER TABLE `comment_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `feedback_library`
--
ALTER TABLE `feedback_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comment_book`
--
ALTER TABLE `comment_book`
  ADD CONSTRAINT `comment_book_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comment_book_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Ketidakleluasaan untuk tabel `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Ketidakleluasaan untuk tabel `feedback_library`
--
ALTER TABLE `feedback_library`
  ADD CONSTRAINT `feedback_library_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `pivot_category`
--
ALTER TABLE `pivot_category`
  ADD CONSTRAINT `pivot_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category_book` (`id`),
  ADD CONSTRAINT `pivot_category_ibfk_2` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_2` FOREIGN KEY (`peminjaman_id`) REFERENCES `peminjaman` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
