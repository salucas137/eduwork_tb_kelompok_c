-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 06:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_kategori`
--

CREATE TABLE `detail_kategori` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_kategori`
--

INSERT INTO `detail_kategori` (`id`, `film_id`, `kategori_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 3),
(6, 2, 2),
(7, 4, 6),
(8, 4, 7),
(9, 4, 8),
(10, 3, 1),
(11, 3, 9),
(12, 3, 10),
(13, 5, 4),
(14, 5, 5),
(15, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemain`
--

CREATE TABLE `detail_pemain` (
  `id` int(11) NOT NULL,
  `film_id` int(11) DEFAULT NULL,
  `pemain_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pemain`
--

INSERT INTO `detail_pemain` (`id`, `film_id`, `pemain_id`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 1),
(4, 5, 5),
(5, 4, 4),
(6, 2, 15),
(7, 2, 16),
(8, 7, 6),
(9, 7, 8),
(10, 7, 7),
(11, 3, 9),
(12, 3, 10),
(13, 4, 11),
(14, 4, 12),
(15, 1, 13),
(16, 1, 14),
(17, 5, 17),
(18, 5, 18),
(19, 6, 20),
(20, 7, 20),
(21, 6, 18),
(22, 6, 19),
(23, 6, 6),
(24, 8, 21),
(25, 8, 22),
(26, 8, 23),
(27, 9, 24),
(28, 9, 25),
(29, 9, 26),
(30, 10, 27),
(31, 10, 28),
(32, 10, 29);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `tahun_rillis` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `gambar` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `nama_film`, `sinopsis`, `durasi`, `tahun_rillis`, `rating`, `gambar`) VALUES
(1, 'John Wick: Chapter 4', 'Dengan harga di kepalanya yang terus meningkat, John Wick menemukan jalan untuk mengalahkan The High Table. Tapi sebelum dia bisa mendapatkan kebebasannya, Wick harus berhadapan dengan musuh baru dengan aliansi yang kuat di seluruh dunia dan kekuatan yang mengubah teman lama menjadi musuh.\r\nDengan harga di kepalanya yang terus meningkat, John Wick menemukan jalan untuk mengalahkan The High Table. Tapi sebelum dia bisa mendapatkan kebebasannya, Wick harus berhadapan dengan musuh baru dengan aliansi yang kuat di seluruh dunia dan kekuatan yang mengubah teman lama menjadi musuh.\r\n.', '169 min', '2023', '8', 'https://melongmovie.site/wp-content/uploads/2023/03/1680072357-2783-vZloFAK7NmvMGKE7VkF5UHaz0I.jpg'),
(2, 'Fast X', 'Selama banyak misi dan melawan rintangan yang mustahil, Dom Toretto dan keluarganya telah mengakali, mengalahkan, dan mengalahkan setiap musuh di jalan mereka. Sekarang, mereka menghadapi lawan paling mematikan yang pernah mereka hadapi: Ancaman mengerikan yang muncul dari bayang-bayang masa lalu yang dipicu oleh dendam darah, dan yang bertekad untuk menghancurkan keluarga ini dan menghancurkan segalanya—dan semua orang—yang dicintai Dom, selamanya. .\r\n', '142 min', '2023', '8', 'https://melongmovie.site/wp-content/uploads/2023/05/1684749882-6839-1E5baAaEse26fej7uHcjOgEE2t2.jpg'),
(3, 'One Piece: Stampede', 'One Piece: Stampede adalah film yang berdiri sendiri yang merayakan ulang tahun ke-20 anime dan mengambil tempat di luar kanon serial TV “One Piece”. Monkey D. Luffy dan kru bajak laut Topi Jerami diundang ke Festival Bajak Laut besar-besaran yang membawa banyak karakter paling ikonik dari seluruh waralaba untuk berpartisipasi dalam persaingan dengan Topi Jerami untuk menemukan harta karun Roger. Itu juga mengadu Topi Jerami melawan musuh baru bernama Bullet, mantan anggota kru Roger.', '101 min', '2019', '9', 'https://image.tmdb.org/t/p/w300/4E2lyUGLEr3yH4q6kJxPkQUhX7n.jpg'),
(4, 'Love Again', 'Mira Ray, berurusan dengan kehilangan tunangannya, mengirimkan serangkaian teks romantis ke nomor ponsel lamanya… tanpa menyadari bahwa nomor tersebut telah dipindahkan ke telepon kantor baru Rob Burns. Seorang jurnalis, Rob terpikat oleh kejujuran dalam teks pengakuan yang indah. Ketika dia ditugaskan untuk menulis profil megabintang Céline Dion, dia meminta bantuannya untuk menemukan cara bertemu Mira secara langsung dan memenangkan hatinya.\r\n', '104 min', '2023', '7', 'https://melongmovie.site/wp-content/uploads/2023/05/1685108440-5884-yGEiqgynu453hMHxOZYtZlisv95.jpg'),
(5, 'The Pope’s Exorcist', 'Pastor Gabriele Amorth, Kepala Exorcist Vatikan, menyelidiki kepemilikan menakutkan seorang anak laki-laki dan akhirnya mengungkap konspirasi berusia berabad-abad yang berusaha keras disembunyikan oleh Vatikan.\r\n', '103 min', '2023', '8', 'https://melongmovie.site/wp-content/uploads/2023/05/1683179514-7970-9JBEPLTPSm0d1mbEcLxULjJq9Eh.jpg'),
(6, 'Spider-Man: No Way Home', 'Identitas Spider-Man sekarang sudah terungkap, dan Peter meminta bantuan Doctor Strange. namun sebuah kesalahan terjadi, dan itu justru mengundang musuh berbahaya dari dunia lain, mereka mulai bermunculan. Hal itu memaksa Peter mencari apa makna sebenarnya menjadi Spider-Man.', '148 min', '2021', '9', 'https://melongmovie.site/wp-content/uploads/2022/03/ucOdFo3uc6EOts6TI6qoxcpEkcX.jpg'),
(7, 'Avengers: Endgame', 'Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?', '181 min', '2019', '8', 'https://image.tmdb.org/t/p/w300/or06FN3Dka5tukK1e9sl16pB3iy.jpg'),
(8, 'Everything Everywhere All at Once', 'Film ini menceritakan kisah tentang seorang imigran China di Amerika Serikat bernama Evelyn Wang yang mengalami kehidupan sulit secara ekonomi. Dia harus bekerja keras untuk memenuhi kebutuhan hidup.', '139 min', '2022', '9', 'https://melongmovie.site/wp-content/uploads/2022/05/1652866730-2595-w3LxiVYdWWRvEVdn5RYq6jIqkb1.jpg'),
(9, 'Top Gun: Maverick', 'Setelah lebih dari tiga puluh tahun mengabdi sebagai salah satu penerbang top Angkatan Laut, dan menghindari kenaikan pangkat yang akan menjatuhkannya, Pete “Maverick” Mitchell mendapati dirinya melatih satu detasemen lulusan TOP GUN untuk misi khusus yang tidak ada kehidupan. pilot pernah melihat.', '131 min', '2022', '8', 'https://melongmovie.site/wp-content/uploads/2022/08/1660838190-5528-62HCnUTziyWcpDaBO2i1DX17ljH.jpg'),
(10, 'Annabelle', 'Pasangan suami istri John dan Mia mulai mengalami banyak kejadian supranatural mengerikan yang melibatkan sosok boneka kuno menakutkan, setelah rumah mereka diserang oleh pemuja setan.', '99 min', '2014', '6', 'https://melongmovie.site/wp-content/uploads/2020/12/1609328682-yLsuU2P2SpDYFwtZQ7dtfVAf6TE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Action'),
(2, 'Crime'),
(3, 'Thriller'),
(4, 'Horror'),
(5, ' Mystery'),
(6, 'Comedy'),
(7, 'Drama'),
(8, 'Romance'),
(9, 'Adventure'),
(10, 'Animation');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama_komentar` varchar(225) NOT NULL,
  `isi_komentar` text NOT NULL,
  `film_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama_komentar`, `isi_komentar`, `film_id`) VALUES
(1, 'Rahmad', 'The Table, persaudaraan kriminal internasional yang mengutuk John Wick memberdayakan The Marquis untuk berurusan dengannya (dan Manajer Hotel Continentale New York). Tapi mungkin, mungkin saja, ada jalan keluarnya. ', 1),
(2, 'Jarwo', 'Fast & Furious 9 melakukan apa yang dilakukan banyak waralaba di beberapa titik: membawa aksi ke luar angkasa. Bagi saya ini sepertinya poin yang bagus untuk berhenti. Tetapi dengan uang yang masih mengalir, tak seorang pun d', 2),
(3, 'Udin', 'Meskipun sudah diberitahukan kepada kami di anime tentang awal filmnya, saya tidak menyangka akan begitu berbeda tetapi tidak masalah karena saya masih menikmati menontonnya.', 3),
(4, 'Indah', 'Romcom pada dasarnya adalah formula. Yang ini dijiwai dengan kesedihan. Itu berurusan dengan kehilangan dan patah hati sebagai dasar untuk blok bangunan relasional yang akan datang. Sam & Priyanka tidak hanya cantik, mereka a', 4),
(5, 'Doni', 'Sebagai seseorang yang menyukai film secara umum dan sering mengulas film apa adanya, saya menonton film ini minggu lalu dan secara mengejutkan ternyata lebih baik dari yang diharapkan. Apakah ini bola dunia emas yang layak? ', 5),
(6, 'Asep', 'Satu-satunya elemen yang saya tidak pedulikan adalah keluarga, khususnya para aktor yang dipilih untuk karakter mereka tidak sesuai dengan film menurut saya. Terutama aktor yang berperan sebagai putri-yang terlihat dan merasa', 5),
(7, 'Ayu', 'Pertanyaan pertama saya adalah mengapa tidak mengatur ini saja di Inggris? Sebagian besar aktor pendukung besar adalah orang Inggris, namun alih-alih mempekerjakan seorang pria gay Amerika untuk sebuah peran, Anda memilih ora', 4),
(8, 'Yudi', 'Film yang luar biasa pasti merupakan film One Piece terbaik di luar sana', 3),
(9, 'Zaki', 'Maksud saya, mereka bahkan tidak berusaha menyembunyikan fakta bahwa mereka semua kebanyakan adalah dua judul kata dengan menyalin-menempelkan kalimat yang sama dalam urutan berbeda dalam satu paragraf. Racing Victors, Racing', 2),
(10, 'Edi', 'Saat ceritanya terungkap, kita belajar lebih banyak tentang masa lalu dan asuhan Wick daripada yang kita lakukan di film-film sebelumnya, tetapi tidak cukup untuk terjebak. Dia menggunakan koneksinya ke masa lalunya, dan bant', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `id` int(11) NOT NULL,
  `nama_pemain` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `negara` varchar(255) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id`, `nama_pemain`, `tanggal_lahir`, `negara`, `foto`) VALUES
(1, 'Akemi Okamura', '1969-03-12', 'Japan', 'https://m.media-amazon.com/images/M/MV5BMWQyNDZlMDEtMWEwNS00YTA4LTg0YmQtNTAzZmVjNTNkZTg3XkEyXkFqcGdeQXVyMzM4MjM0Nzg@._V1_.jpg'),
(2, 'Keanu Reeves', '1964-09-02', 'Libanon', 'https://m.media-amazon.com/images/M/MV5BNGJmMWEzOGQtMWZkNS00MGNiLTk5NGEtYzg1YzAyZTgzZTZmXkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_.jpg'),
(3, 'Joseph Jason', '1979-08-01', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BODJlNWQ4ZjUtYjRhNi00NGQ1LWE3YTItYjRmZGI3YzI4YTEyXkEyXkFqcGdeQXVyMTA2MDIzMDE5._V1_.jpg'),
(4, 'Celia Imrie', '1952-07-15', 'Britinia Raya', 'https://m.media-amazon.com/images/M/MV5BOGFiNTNmNTQtODVjZS00YTQ0LWJmZjMtMWFmZTdjNWY0MGEyXkEyXkFqcGdeQXVyNTQ0NDA1OTA@._V1_.jpg'),
(5, 'Alex Essoe', '1992-03-09', 'Arab saudi', 'https://m.media-amazon.com/images/M/MV5BMjM4ZjQ1MjMtNGM2Ny00YzdjLThlY2QtMzZkNTRlYTBiMWU5XkEyXkFqcGdeQXVyMjM3NDYzMzY@._V1_.jpg'),
(6, 'Tom holland', '1996-06-01', 'Inggris', 'https://m.media-amazon.com/images/M/MV5BNzZiNTEyNTItYjNhMS00YjI2LWIwMWQtZmYwYTRlNjMyZTJjXkEyXkFqcGdeQXVyMTExNzQzMDE0._V1_.jpg'),
(7, 'Robert Downey Jr.', '1964-04-04', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_.jpg'),
(8, 'Elizabeth Olsen', '1989-02-16', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMjEzMjA0ODk1OF5BMl5BanBnXkFtZTcwMTA4ODM3OQ@@._V1_.jpg'),
(9, 'Jonathan R. Freeman', '1979-02-13', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BZTc3Nzc1MTEtZWNiOC00MTcxLTlmZWYtNGYxYzUyYWZjM2FjXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg'),
(10, 'Sean Hennigan', '1962-05-18', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNTYzNjMyYzUtMzAwMS00MjdiLWFiYzItNGIwZGM2NGE0ZjY1XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg'),
(11, 'Priyanka Chopra Jonas', '1982-07-18', 'India', 'https://m.media-amazon.com/images/M/MV5BMjAxNzUwNjExOV5BMl5BanBnXkFtZTcwNDUyMTUxNw@@._V1_.jpg'),
(12, 'Sam Heughan', '1980-04-30', 'Scotland', 'https://m.media-amazon.com/images/M/MV5BZGM4Nzk2YzEtYTVhMi00Yjg1LWI0NTQtYmRkZWIzNjE4NjVmXkEyXkFqcGdeQXVyMTI2Nzk2ODk3._V1_.jpg'),
(13, 'Laurence Fishburne', '1961-07-30', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMTc0NjczNDc1MV5BMl5BanBnXkFtZTYwMDU0Mjg1._V1_.jpg'),
(14, 'Bill Skarsgård', '1990-08-09', 'Swedia', 'https://m.media-amazon.com/images/M/MV5BODBlNmRhODYtOWE2Ni00MTZmLWExMWYtMmRjYWNhNDRjNGU2XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg'),
(15, 'Vin Diesel', '1967-07-18', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMjExNzA4MDYxN15BMl5BanBnXkFtZTcwOTI1MDAxOQ@@._V1_.jpg'),
(16, 'Michelle Rodriguez', '1978-07-12', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMTkwODIzMzYyMl5BMl5BanBnXkFtZTYwNzAyNjAz._V1_.jpg'),
(17, 'Russell Crowe', '1964-04-07', 'New Zealand', 'https://m.media-amazon.com/images/M/MV5BMTQyMTExNTMxOF5BMl5BanBnXkFtZTcwNDg1NzkzNw@@._V1_.jpg'),
(18, 'Daniel Zovatto', '1991-06-28', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BYzc4ZWMwNTgtNDJmNC00ZDJjLWJlMzgtY2UzMDI5YTkwMTMzXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg'),
(19, 'Zendaya', '1996-09-01', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMjAxZTk4NDAtYjI3Mi00OTk3LTg0NDEtNWFlNzE5NDM5MWM1XkEyXkFqcGdeQXVyOTI3MjYwOQ@@._V1_.jpg'),
(20, 'Benedict Cumberbatch', '1976-07-19', 'Inggris', 'https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_.jpg'),
(21, 'Michelle Yeoh', '1962-08-06', 'Malaysia', 'https://m.media-amazon.com/images/M/MV5BMTg0NTI0NDkzOF5BMl5BanBnXkFtZTcwMjYwMTIwNw@@._V1_.jpg'),
(22, 'Ke Huy Quan', '1971-08-20', 'Vietnam', 'https://m.media-amazon.com/images/M/MV5BMmMyN2MxMjQtNDFjYi00MTE3LTgwYTMtZmQzODUyZGUwYmExXkEyXkFqcGdeQXVyMTM5NDUxMTA@._V1_.jpg'),
(23, 'Stephanie Hsu', '1990-11-25', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNmMxMjI0ZGItYThmMi00YTM0LTg5M2QtNTQxOTdmM2I5NDg3XkEyXkFqcGdeQXVyNTU0MjY5MjE@._V1_.jpg'),
(24, 'Tom Cruise', '1962-07-03', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BYTFlOTdjMjgtNmY0ZC00MDgxLThjNmEtZGIxZTQyZDdkMTRjXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg'),
(25, 'Miles Teller', '1987-02-20', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BM2ZiYThiZTUtYmM0ZS00ZWQzLTgzMTEtZWY1ZDkwNWM4ZGNmXkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_.jpg'),
(26, 'Jennifer Connelly', '1970-12-12', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNWM0OTlhYmQtZWI0NS00NzM0LWE5YjItMWZmYzkzY2FmNTc2XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg'),
(27, 'Annabelle Wallis', '1984-09-05', 'Inggris', 'https://m.media-amazon.com/images/M/MV5BMjA2MjU2NjE1OV5BMl5BanBnXkFtZTgwNTMyMTAzMjI@._V1_.jpg'),
(28, 'Ward Horton', '1976-01-14', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNjZiOTI4ODQtY2NjYy00MTllLTkyNmMtOTkyZjc0MjhlZmI1XkEyXkFqcGdeQXVyNDM1MDA1Ng@@._V1_.jpg'),
(29, 'Tony Amendola', '1951-08-24', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BN2I0MTU0ZGMtNzkyZC00MzAyLWFhMjQtN2M0NTljNjQ1NjNkXkEyXkFqcGdeQXVyMTYxNjA1MzE2._V1_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `detail_pemain`
--
ALTER TABLE `detail_pemain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `pemain_id` (`pemain_id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `detail_pemain`
--
ALTER TABLE `detail_pemain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  ADD CONSTRAINT `detail_kategori_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `detail_kategori_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `detail_pemain`
--
ALTER TABLE `detail_pemain`
  ADD CONSTRAINT `detail_pemain_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `detail_pemain_ibfk_2` FOREIGN KEY (`pemain_id`) REFERENCES `pemain` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
