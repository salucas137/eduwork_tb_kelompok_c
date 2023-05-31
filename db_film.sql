-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 02:18 PM
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
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `tahun_rillis` varchar(255) NOT NULL,
  `pemain_id` int(11) DEFAULT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `nama_film`, `sinopsis`, `durasi`, `tahun_rillis`, `pemain_id`, `rating`) VALUES
(1, 'John Wick: Chapter 4', 'Dengan harga di kepalanya yang terus meningkat, John Wick menemukan jalan untuk mengalahkan The High Table. Tapi sebelum dia bisa mendapatkan kebebasannya, Wick harus berhadapan dengan musuh baru dengan aliansi yang kuat di seluruh dunia dan kekuatan yang mengubah teman lama menjadi musuh.\r\nDengan harga di kepalanya yang terus meningkat, John Wick menemukan jalan untuk mengalahkan The High Table. Tapi sebelum dia bisa mendapatkan kebebasannya, Wick harus berhadapan dengan musuh baru dengan aliansi yang kuat di seluruh dunia dan kekuatan yang mengubah teman lama menjadi musuh.\r\n.', '169 min', '2023', 1, '4/5'),
(2, 'Fast X', 'Selama banyak misi dan melawan rintangan yang mustahil, Dom Toretto dan keluarganya telah mengakali, mengalahkan, dan mengalahkan setiap musuh di jalan mereka. Sekarang, mereka menghadapi lawan paling mematikan yang pernah mereka hadapi: Ancaman mengerikan yang muncul dari bayang-bayang masa lalu yang dipicu oleh dendam darah, dan yang bertekad untuk menghancurkan keluarga ini dan menghancurkan segalanya—dan semua orang—yang dicintai Dom, selamanya. .\r\n', '142 min', '2023', 2, '4/5'),
(3, 'One Piece: Stampede', 'One Piece: Stampede adalah film yang berdiri sendiri yang merayakan ulang tahun ke-20 anime dan mengambil tempat di luar kanon serial TV “One Piece”. Monkey D. Luffy dan kru bajak laut Topi Jerami diundang ke Festival Bajak Laut besar-besaran yang membawa banyak karakter paling ikonik dari seluruh waralaba untuk berpartisipasi dalam persaingan dengan Topi Jerami untuk menemukan harta karun Roger. Itu juga mengadu Topi Jerami melawan musuh baru bernama Bullet, mantan anggota kru Roger.', '101 min', '2019', 3, '5/5'),
(4, 'Love Again', 'Mira Ray, berurusan dengan kehilangan tunangannya, mengirimkan serangkaian teks romantis ke nomor ponsel lamanya… tanpa menyadari bahwa nomor tersebut telah dipindahkan ke telepon kantor baru Rob Burns. Seorang jurnalis, Rob terpikat oleh kejujuran dalam teks pengakuan yang indah. Ketika dia ditugaskan untuk menulis profil megabintang Céline Dion, dia meminta bantuannya untuk menemukan cara bertemu Mira secara langsung dan memenangkan hatinya.\r\n', '104 min', '2023', 4, '3/5'),
(5, 'The Pope’s Exorcist', 'Pastor Gabriele Amorth, Kepala Exorcist Vatikan, menyelidiki kepemilikan menakutkan seorang anak laki-laki dan akhirnya mengungkap konspirasi berusia berabad-abad yang berusaha keras disembunyikan oleh Vatikan.\r\n', '103 min', '2023', 5, '4/5');

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
  `nama_pemain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id`, `nama_pemain`) VALUES
(1, 'Bill Skarsgård, Clancy Brown, Donnie Yen, Hiroyuki Sanada, Ian McShane, Keanu Reeves, Lance Reddick, Laurence Fishburne, Rina Sawayama, Shamier Anderson'),
(2, 'Jason Momoa, John Cena, Jordana Brewster, Ludacris, Michelle Rodriguez, Nathalie Emmanuel, Scott Eastwood, Sung Kang, Tyrese Gibson, Vin Diesel'),
(3, 'Akemi Okamura, Chō, Hiroaki Hirata, Ikue Ôtani, Kappei Yamaguchi, Kazuki Yao, Kazuya Nakai, Mayumi Tanaka, Tsutomu Isobe, Yuriko Yamaguchi'),
(4, 'Celia Imrie, Céline Dion, Lydia West, Nick Jonas, Omid Djalili, Priyanka Chopra Jonas, Russell Tovey, Sam Heughan, Sofia Barclay, Steve Oram'),
(5, 'Alex Essoe, Bianca Bardoe, Cornell John, Daniel Zovatto, Franco Nero, Laurel Marsden, Peter DeSouza-Feighoney, Russell Crowe, Ryan O\'Grady, Santi Bayón');

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
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemain_id` (`pemain_id`);

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
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`pemain_id`) REFERENCES `pemain` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
