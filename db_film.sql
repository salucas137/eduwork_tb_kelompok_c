-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 01:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
  `tanggal_komentar` date DEFAULT NULL,
  `nama_komentar` varchar(225) NOT NULL,
  `rating_komentar` int(11) NOT NULL,
  `judul_komentar` varchar(225) NOT NULL,
  `isi_komentar` text NOT NULL,
  `film_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `tanggal_komentar`, `nama_komentar`, `rating_komentar`, `judul_komentar`, `isi_komentar`, `film_id`) VALUES
(1, '2023-06-01', 'Rahmad', 10, 'Film aksi terbaik yang pernah ada', 'Keanu Reeves sangat luar biasa, ini adalah penampilan terbaiknya sejauh ini. Sutradara Chad Stahelski memberi kita film Aksi Terbaik dalam sejarah Sinema. Aksinya diarahkan dengan baik dan koreografinya indah. Penjahat terbaik dalam franchise Billy Sarsgard dan Donnie Yen luar biasa. Pemeran lainnya juga luar biasa. Penyutradaraan, penulisan, plot, ending dan pengemisannya sempurna. Tidak pernah terasa terlalu lama atau pendek, runtime ditangani dengan baik. Karakter sampingan seperti Winston, Killa dan Charon kembali mencuri perhatian layar lebar setiap kali muncul di film.', 1),
(2, '2023-06-02', 'Jarwo', 10, 'Salah satu movie Fast and Furious paling bagus', 'Film ini sangat bagus sehingga saya ingin menontonnya lagi setelahnya. Adegan aksi sangat mengagumkan. Ceritanya bagus. Akting dari semua pemain sangat bagus. Jika Anda adalah penggemar Fast and Furious maka saya sangat merekomendasikan untuk menontonnya. Di setiap adegan yang melibatkan Jason Momoa, dia mencuri perhatian dan penampilan aktingnya sangat bagus dan bersemangat untuk melihat apa lagi yang bisa dia bawa ke meja untuk bagian 2. Namun, ada beberapa contoh dalam film di mana Anda berpikir \"sebagai jika\" tetapi itu film, Anda harus bisa duduk dan menikmatinya dan tidak khawatir itu realistis. Film dimaksudkan untuk menyenangkan, jadi pergilah dan nikmati diri Anda dengan film ini.\r\n\r\nTidak sabar untuk melihat bagian 2!', 2),
(3, '2023-06-01', 'Udin', 10, 'Sangat bagus', 'Film ini sempurna. One Piece Movie 14: Stampede memiliki kualitas dan art style yang sempurna. Film ini luar biasa seperti setiap film One Piece lainnya. Melihat adegan pertarungannya sangat bagus. Animasinya fantastis seperti biasa. Dan setiap penggemar One Piece memimpikan begitu banyak karakter lama yang hadir di film ini. Seperti Smoker, seperti Rob Lucci. Saya suka bahwa film memperkenalkan banyak karakter. Terakhir, saya sangat menyukai satu hal. Bentrokan Haki Raja. Itu sempurna.\r\n\r\nJika Anda penggemar One Piece, Anda harus menonton film ini. Film ini hanya gila. Saya merekomendasikan ini kepada semua penggemar One Piece. Anda tidak akan kecewa. Kalau belum nonton, tunggu apa lagi?', 3),
(4, '2023-06-02', 'Indah', 8, 'Romcom yang menyenangkan', 'Jika Anda mencari film romantis yang menyenangkan, \"Love Again\" cocok untuk Anda. Romansa antara Mira dan Rob sangat menawan dan manis. Saya hanya berharap naskahnya menghabiskan lebih banyak waktu untuk pengembangan hubungan mereka daripada begitu banyak waktu untuk protagonis yang memikirkan pacarnya yang sudah meninggal. Priyanka Chopra dan Sam Heughan memerankan karakter mereka dengan kepekaan dan humor. Waktu mereka bersama di layar sepertinya terburu-buru dan tidak memberikan banyak waktu untuk kedalaman hubungan mereka. Konon, ada momen-momen ringan dan lucu di antara mereka. Sam memiliki waktu komedi yang bagus, dan Priyanka sangat memesona. Celine Dion tampaknya ada di sana lebih sebagai latar tetapi memiliki beberapa kalimat yang cukup lucu, yang disampaikannya dengan baik. Musiknya klasik Celine. Saya menikmati film ini secara keseluruhan dan akan merekomendasikannya kepada seseorang yang mencari komedi romantis yang menyenangkan, cinta-menaklukkan-semua.', 4),
(5, '2023-06-02', 'Doni', 5, 'Tidak buruk, tapi juga tidak baik', 'Hadeuh. Saya tidak yakin apakah pembuat film ini akan membuat horor komedi atau yang lainnya, tetapi itu tidak benar-benar berhasil. Itu pada dasarnya adalah film dengan suara-suara konyol. Tidak ada ketegangan yang cukup untuk menahan pertunangan saya atau cerita yang cukup untuk membuat saya tetap tertarik.\r\n\r\nBeberapa efeknya bagus tetapi tidak ada yang belum pernah saya lihat sebelumnya. Russell Crowe menyenangkan untuk ditonton tetapi sulit untuk menganggap serius karakternya dan saya tidak yakin sebagai penonton yang seharusnya. Itu semua terlalu konyol untuk seleraku. Saya tidak percaya latarnya, terlalu fantastik dan karakter keluarga lebih seperti karikatur. Itu semacam mengisyaratkan sebuah cerita untuk mereka tetapi itu tidak benar-benar pergi ke mana pun. Jadi, berlebihan dan konyol tapi tidak mengerikan.', 5),
(6, '2023-06-03', 'Asep', 7, 'Lebih bagus dari ekspektasi!', 'Sejujurnya saya masuk dengan harapan yang sangat rendah. Saya keluar dari The Devil in Me seperti yang telah kita lihat sebelumnya, itu adalah formula yang sama dan tidak ada yang akan sesuai dengan Exorcist asli. Saya pikir saya bisa menyebutkan 3 film eksorsisme yang bagus. The Exorcist, Exorcist 3 dan Exorcism of Emily Rose. Plotnya benar-benar bergerak cepat! Tidak ada pembangunan karakter yang nyata tetapi yang akan saya katakan adalah Russell Crowe benar-benar memainkan peran dengan baik. Ini adalah campuran dari penampilan hebat dan parodi..apapun itu berhasil! Itu tidak benar-benar melakukan sesuatu yang baru, kami telah melihat semuanya sebelumnya tetapi untuk beberapa alasan atau lainnya ini lebih baik dari yang diharapkan. Berikan jam tangan.', 5),
(7, '2023-06-03', 'Ayu', 7, 'Bagus', 'Saya mengagumi Sam dan dengan senang hati akan pergi dan melihat apa pun yang dia masuki. Saya menikmati film ini lebih dari yang saya kira. Itu adalah rom com yang sangat rata-rata. Sedikit lebih banyak komedi pasti menyenangkan!! Tapi secara keseluruhan itu telah mendapatkan tempatnya. Saya telah melihat film yang jauh lebih buruk dan lebih baik selama bertahun-tahun. Saya senang melihat Celina Dion, saya seorang romantis yang putus asa dan mengagumi lagu dan suaranya. Sam dan Pryanka memiliki chemistry yang hebat dan karakter pendampingnya berkembang dengan baik. Film yang bagus secara keseluruhan. Tidak ada yang menarik. Hanya film Minggu sore dengan akhir yang bahagia! Dan beberapa bintang cantik dan lagu bagus untuk dinikmati sepanjang jalan!', 4),
(8, '2023-06-02', 'Yudi', 8, 'One Piece terbaik', 'Film ini bertempo sangat cepat, dan animasinya luar biasa. Gambar, warna, semuanya muncul begitu saja! Karakter tentu saja, tingkat atas. Cerita adalah di mana saya pikir film kurang. Itu tidak buruk, tetapi sangat tidak konsisten ketika memikirkan cerita utama One Piece. Anda pada dasarnya harus mematikan cerita kanon One Piece untuk menikmati film ini, jika tidak, ketidakkonsistenan akan membuat Anda pergi. Selain itu, menurut saya filmnya sangat menghibur, dan mencapai apa yang dimaksudkan untuk dilakukan, menghibur Anda.', 3),
(9, '2023-06-03', 'Zaki', 5, 'Suka kru, tidak suka Fast X', 'Kami menyukai kru, \'keluarga\', mobil, balapan, kompetisi, dan adegan aksi, bukan? Tapi sekarang ini agak fantasi daripada film aksi. Film-film terakhir juga nyata, tetapi ini di atas. Karena itu, Anda tidak dapat mengambil film ini dengan serius. Juga, tidak selalu merupakan ide terbaik untuk menyatukan semua bintang dan karakter. Jika film tidak mengandung banyak klise seperti \'saya tahu tempat\', \'percaya saja dan itu akan terjadi\' itu akan lebih mengasyikkan.\r\n\r\nSaya menikmati bagian cepat dan marah untuk sementara waktu, tetapi ini adalah waktu yang tepat untuk menyelesaikan seri setelah episode berikutnya. Itu lebih dari cukup dan mereka bisa memiliki akhir yang bahagia.', 2),
(10, '2023-06-02', 'Edi', 4, '3 jam yang membosankan', 'John Wick: Chapter 4 isinya hampir tiga jam Keanu Reeves terlibat baku tembak, dibukukan dengan dialog-in-place-of-plot yang tidak berarti, dan banyak orang terlempar ke bawah tangga. Dari semua film \"Wick\", ini jelas yang paling lemah. Apakah ada yang ditambahkan ke keseluruhan narasi alam semesta Wick? Tidak. Apakah kita melihat banyak orang yang tidak penting mati? Ya. Apakah Keanu Reeves sering mengatakan \"yeah\"? Ya.\r\nKita semua pantas mendapatkan yang lebih baik dari ini. John Wick juga.\r\n', 1),
(11, '2023-06-02', 'Juli', 10, 'Sangat fenomenal', 'Spider-Man: No Way Home adalah kesimpulan fenomenal untuk trilogi dan tamasya terbaik Belanda sebagai Spidey. Mulai menyenangkan, aman, dan akrab, lalu menjadi sangat emosional, memuaskan, dan penuh panggilan balik yang hebat. Surat cinta untuk semua hal tentang Spider-Man.\r\n\r\nIni juga berjalan dengan sempurna dengan waktu kerja kira-kira 2 jam 30 menit yang terasa membosankan atau terlalu lama karena momentum kuat yang dibangun sejak awal. CG sangat mengesankan dengan hanya beberapa titik lemah.', 6),
(12, '2023-06-01', 'Aki', 10, 'Akhir ceritanya membuat semua 22 film sepadan', 'Jika Anda akan menonton film ini, hindari spoiler, bahkan ulasan bebas spoiler. Itulah mengapa saya tidak akan mengatakan apa-apa tentang film. Bahkan pendapat saya pun tidak. Yang akan saya katakan adalah:\r\n\r\nPenonton bertepuk tangan 3 kali selama film diputar, dan berdiri untuk bertepuk tangan setelahnya. Ini belum pernah saya saksikan di bioskop Belanda. Kerumunan orang Belanda biasanya tidak menyukai hal ini. Saya memeriksa baris tempat saya duduk, dan orang-orang menangis. Setelah film selesai, saya melihat orang-orang dengan maskara yang luntur. Itu saja yang harus saya katakan tentang film ini.', 7),
(13, '2023-06-02', 'Gin', 9, 'Film terbaik di 2022', 'Sangat dalam, benar-benar mengharukan, sangat lucu, sangat imajinatif, dan pesta visual. Belum pernah tertawa sekeras ini, menangis sebanyak ini atau memikirkan begitu dalam tentang film apa pun di tahun 2022 Apalagi semuanya dalam tontonan yang sama. Ini memang segalanya, di mana-mana sekaligus.', 8),
(14, '2023-06-02', 'Hana', 9, 'Sekuel yang luar biasa', 'Sekuel yang luar biasa - saya, sebenarnya, lebih menyukainya daripada pendahulunya.\r\n\r\nSederhananya, \'Top Gun: Maverick\' itu fantastis. Saya mengharapkannya menjadi bagus, tetapi sebenarnya jauh lebih menyenangkan daripada yang saya perkirakan. Panggilan balik ke aslinya dilakukan dengan ahli, karakter baru kuat / dilemparkan dengan baik, memiliki banyak makna, musiknya luar biasa, dan aksinya luar biasa - hal-hal udara sensasional.\r\n\r\nCeritanya luar biasa, dengan setiap taruhan tinggi muncul sebagaimana dimaksud - bagian-bagiannya bahkan membuat saya sedikit merinding, yang merupakan kejutan mengingat saya bukan seseorang yang memiliki hubungan dengan film tahun 1986. Semuanya disatukan dengan sangat rapi, sejujurnya saya hampir memberikannya peringkat yang lebih tinggi.\r\n\r\nJam tangan yang bagus - Saya sangat merekomendasikannya, meskipun tentu saja saya menyarankan untuk menonton film sebelumnya terlebih dahulu jika Anda belum melakukannya.', 9),
(15, '2023-06-01', 'Anna', 6, 'Film horror yang menyenangkan', 'Film horor menyenangkan yang cukup menyeramkan dan menegangkan dengan beberapa lompatan yang menakutkan dan momen yang mencengangkan. Juga benar-benar mematahkan klise dari suami/pacar skeptis yang menyebalkan, yang membuatku bahagia.', 10);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
