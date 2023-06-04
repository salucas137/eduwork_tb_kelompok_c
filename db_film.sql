-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 03:42 PM
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
(15, 5, 3),
(16, 6, 1),
(17, 6, 9),
(18, 7, 1),
(19, 7, 9),
(20, 8, 1),
(21, 8, 9),
(22, 8, 6),
(23, 9, 1),
(24, 9, 7),
(25, 10, 4),
(26, 10, 5),
(27, 10, 3);

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
  `foto` varchar(225) NOT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id`, `nama_pemain`, `tanggal_lahir`, `negara`, `foto`, `bio`) VALUES
(1, 'Akemi Okamura', '1969-03-12', 'Japan', 'https://m.media-amazon.com/images/M/MV5BMWQyNDZlMDEtMWEwNS00YTA4LTg0YmQtNTAzZmVjNTNkZTg3XkEyXkFqcGdeQXVyMzM4MjM0Nzg@._V1_.jpg', 'Akemi Okamura lahir pada 12 Maret 1969 di Tokyo, Jepang. Dia adalah seorang aktris, dikenal untuk One Piece (1999), Porco Rosso (1992) dan The Legend of Dragoon (1999).'),
(2, 'Keanu Reeves', '1964-09-02', 'Libanon', 'https://m.media-amazon.com/images/M/MV5BNGJmMWEzOGQtMWZkNS00MGNiLTk5NGEtYzg1YzAyZTgzZTZmXkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_.jpg', 'Keanu Charles Reeves, yang nama depannya berarti \"angin sejuk di atas pegunungan\" dalam bahasa Hawaii, lahir pada 2 September 1964 di Beirut, Lebanon. Dia adalah putra dari Patricia Taylor, seorang gadis panggung dan desainer kostum, dan Samuel Nowlin Reeves, seorang ahli geologi. Ayah Keanu lahir di Hawaii, keturunan Inggris, Portugis, Asli Hawaii, dan Cina, dan ibu Keanu berasal dari Inggris. Setelah pernikahan orang tuanya bubar, Keanu pindah bersama ibu dan adik perempuannya, Kim Reeves, ke New York City, lalu Toronto. Ayah tiri #1 adalah Paul Aaron, seorang sutradara panggung dan film - dia dan Patricia bercerai dalam waktu satu tahun, setelah itu dia menikah (dan bercerai) dengan promotor rock Robert Miller dan pemilik salon rambut Jack Bond. Reeves tidak pernah berhubungan kembali dengan ayah kandungnya. Di sekolah menengah, Reeves suam-suam kuku terhadap akademisi tetapi sangat tertarik pada hoki es (sebagai penjaga gawang tim, dia mendapat julukan \"The Wall\") dan drama. Dia akhirnya putus sekolah untuk mengejar karir akting.'),
(3, 'Joseph Jason', '1979-08-01', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BODJlNWQ4ZjUtYjRhNi00NGQ1LWE3YTItYjRmZGI3YzI4YTEyXkEyXkFqcGdeQXVyMTA2MDIzMDE5._V1_.jpg', 'Joseph Jason Namakaeha Momoa lahir pada 1 Agustus 1979 di Honolulu, Hawaii. Dia adalah anak dari Coni (Lemke), seorang fotografer, dan Joseph Momoa, seorang pelukis. Ayahnya adalah keturunan asli Hawaii dan Samoa; dan ibunya, yang berasal dari Iowa, adalah keturunan Jerman, Irlandia, dan penduduk asli Amerika. Jason dibesarkan di Norwalk, Iowa, oleh ibunya. Setelah sekolah menengah, dia pindah ke Hawaii, di mana dia mendapatkan peran utama, mengalahkan ribuan calon dalam serial TV Baywatch (1989) (dikenal sebagai \"Baywatch Hawaii\" di musim ke-10). Saat pertunjukan berakhir, dia menghabiskan beberapa tahun berikutnya berkeliling dunia. Pada tahun 2001, dia pindah ke Los Angeles, di mana dia melanjutkan karir aktingnya. Pada tahun 2004, setelah serial TV North Shore (2004) yang berumur pendek, dia berperan sebagai karakter populer \"Ronon Dex\" dalam serial TV Stargate: Atlantis (2004), yang mendapatkan banyak pengikut. Pada tahun 2010, ia tampil dalam serial Game of Thrones (2011) yang dinominasikan oleh HBO untuk Emmy, berperan sebagai raja Dothraki, Khal Drogo. Untuk mengilustrasikan kepada produser bahwa dia adalah Khal Drogo, dia menampilkan Haka, tarian perang tradisional suku Maori di Selandia Baru. Audisi dilakukan dengan direktur casting yang sama yang memberikan peran tituler dalam reboot Conan the Barbarian (2011). Empat minggu setelah berperan sebagai karakter Robert E. Howard yang populer, Momoa mulai syuting di Bulgaria. Pendekatannya, seperti pendekatan para pembuat film, adalah menarik dari delapan dekade komik dan cerita serta gambar Frank Frazetta daripada film 1982 yang sangat populer. Jason memiliki perusahaan produksi, Pride of Gypsies, di mana dia memperluas karirnya dari aktor menjadi pembuat film. Dia telah menyutradarai beberapa film pendek dan sedang mengerjakan debut film panjangnya Road to Paloma (2014), yang ditarik dari rangkaian cerita yang telah dia kembangkan selama bertahun-tahun, yang dia sebut sebagai Brown Bag Diaries: Ridin\' the Tirai di B Minor (2010). Jason tinggal bersama istrinya, aktris Lisa Bonet, dengan siapa dia memiliki dua anak, Lola dan Nakoa-Wolf.'),
(4, 'Celia Imrie', '1952-07-15', 'Britinia Raya', 'https://m.media-amazon.com/images/M/MV5BOGFiNTNmNTQtODVjZS00YTQ0LWJmZjMtMWFmZTdjNWY0MGEyXkEyXkFqcGdeQXVyNTQ0NDA1OTA@._V1_.jpg', 'Celia Imrie adalah aktris pemenang penghargaan Olivier dan nominasi Screen Actors Guild, majalah Variety \'Icon\' dan pemenang Women in Film and Television \'Lifetime Achievement award\'. Selain karya film, televisi, dan teaternya yang terkenal, dia juga seorang penulis terlaris Sunday Times. Celia sangat dicintai karena peran filmnya termasuk serial film The Best Exotic Marigold Hotel, serial film The Bridget Jones, Calendar Girls, Absolutely Fabulous: The Movie, Finding Your Feet dan Mamma Mia: Here We Go Again. Karya film terbaru termasuk Mrs Green dalam film horor independen, Malevolent dan Joan Erikson dalam Year By The Sea.'),
(5, 'Alex Essoe', '1992-03-09', 'Arab saudi', 'https://m.media-amazon.com/images/M/MV5BMjM4ZjQ1MjMtNGM2Ny00YzdjLThlY2QtMzZkNTRlYTBiMWU5XkEyXkFqcGdeQXVyMjM3NDYzMzY@._V1_.jpg', 'Alex Essoe lahir di Dhahran, Arab Saudi. Dia dikenal sebagai pengusir setan Paus (2023), Misa Tengah Malam (2021) dan The Haunting of Bly Manor (2020).'),
(6, 'Tom holland', '1996-06-01', 'Inggris', 'https://m.media-amazon.com/images/M/MV5BNzZiNTEyNTItYjNhMS00YjI2LWIwMWQtZmYwYTRlNjMyZTJjXkEyXkFqcGdeQXVyMTExNzQzMDE0._V1_.jpg', 'Thomas Stanley Holland lahir di Kingston-upon-Thames, Surrey, dari Nicola Elizabeth (Frost), seorang fotografer, dan Dominic Holland (Dominic Anthony Holland), yang merupakan seorang komedian dan penulis. Kakek dari pihak ayah masing-masing berasal dari Pulau Man dan Irlandia. Dia tinggal bersama orang tua dan tiga adik laki-lakinya - Paddy dan si kembar Sam dan Harry. Tom bersekolah di Donhead Prep School. Kemudian, setelah ujian sebelas plus yang sukses, dia menjadi murid di Wimbledon College. Setelah berhasil menyelesaikan GCSE-nya, pada September 2012 Tom memulai kursus dua tahun di BRIT School for Performing Arts & Technology yang terkenal dengan banyak alumninya yang terkenal.'),
(7, 'Robert Downey Jr.', '1964-04-04', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_.jpg', 'Downey lahir 4 April 1965 di Manhattan, New York, putra penulis, sutradara dan pembuat film Robert Downey Sr. dan aktris Elsie Downey (née Elsie Ann Ford). Ayah Robert adalah setengah Yahudi Lituania, seperempat Yahudi Hongaria, dan seperempat Irlandia, keturunan, sedangkan ibu Robert adalah keturunan Inggris, Skotlandia, Jerman, dan Swiss-Jerman. Robert dan saudara perempuannya, Allyson Downey, tenggelam dalam film dan seni pertunjukan sejak usia sangat muda, memimpin Downey Jr. untuk belajar di Pusat Pelatihan Seni Pertunjukan Stagedoor Manor di bagian utara New York, sebelum pindah ke California dengan mengikuti ayahnya. perceraian orang tua tahun 1978. Pada tahun 1982, dia keluar dari Santa Monica High School untuk mengejar akting penuh waktu. Downey Sr., dirinya seorang pecandu narkoba, mengekspos putranya ke narkoba pada usia yang sangat dini, dan Downey Jr. terus berjuang melawan pelecehan selama beberapa dekade.'),
(8, 'Elizabeth Olsen', '1989-02-16', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMjEzMjA0ODk1OF5BMl5BanBnXkFtZTcwMTA4ODM3OQ@@._V1_.jpg', 'Elizabeth Chase \"Lizzie\" Olsen (lahir 16 Februari 1989) adalah seorang aktris Amerika. Dia dikenal karena perannya dalam film Silent House (2011), Liberal Arts (2012), Godzilla (2014), Avengers: Age of Ultron (2015), dan Captain America: Civil War (2016). Untuk perannya dalam Martha Marcy May Marlene (2011) yang diakui secara kritis, dia dinominasikan untuk berbagai penghargaan, termasuk Independent Spirit Award untuk Best Female Lead. Dia adalah adik dari aktris dan perancang busana Mary-Kate Olsen dan Ashley Olsen.'),
(9, 'Jonathan R. Freeman', '1979-02-13', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BZTc3Nzc1MTEtZWNiOC00MTcxLTlmZWYtNGYxYzUyYWZjM2FjXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg', 'Jonathan R. Freeman lahir pada 13 Februari 1978 di AS. Dia adalah seorang aktor, dikenal sebagai kota di atas bukit (2019), goliat (2016) dan hal-hal yang lebih baik (2016).'),
(10, 'Sean Hennigan', '1962-05-18', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNTYzNjMyYzUtMzAwMS00MjdiLWFiYzItNGIwZGM2NGE0ZjY1XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg', 'Sean Hennigan lahir pada 18 Mei 1962 di Plano, Texas, AS. Dia adalah seorang aktor dan produser, dikenal untuk 3:10 ke Yuma (2007), The Three Burials of Melquiades Estrada (2005) dan The Life of David Gale (2003).'),
(11, 'Priyanka Chopra Jonas', '1982-07-18', 'India', 'https://m.media-amazon.com/images/M/MV5BMjAxNzUwNjExOV5BMl5BanBnXkFtZTcwNDUyMTUxNw@@._V1_.jpg', 'Priyanka Chopra Jonas (née Chopra) lahir pada 18 Juli 1982 di Jamshedpur, India, dari keluarga Kapten Dr. Ashok Chopra dan Dr. Madhu Chopra, keduanya adalah dokter Angkatan Darat India. Dia memiliki pendidikan yang sangat bervariasi. Dia memulai pendidikannya di La Martinière Girls College di Lucknow sebagai mahasiswa tetap; kunjungan singkat di Maria Goretti College di Bareilly mempersiapkannya untuk studi lebih lanjut di AS. Setelah menyelesaikan kelas sepuluh di Boston, Massachusetts, AS, dia memutuskan untuk menjadi insinyur perangkat lunak atau psikolog kriminal. Dia menikmati musik dan tarian India; bakat menulis puisi dan cerpen; membaca, terutama biografi; dan telah bekerja untuk banyak program kesejahteraan sosial.'),
(12, 'Sam Heughan', '1980-04-30', 'Scotland', 'https://m.media-amazon.com/images/M/MV5BZGM4Nzk2YzEtYTVhMi00Yjg1LWI0NTQtYmRkZWIzNjE4NjVmXkEyXkFqcGdeQXVyMTI2Nzk2ODk3._V1_.jpg', 'Sam Roland Heughan lahir 30 April 1980 di Balmaclellan, Dumfries dan Galloway, Skotlandia. Ketika dia berumur 5 tahun, dia bersama saudara laki-laki dan ibunya pindah ke daerah kota New Galloway. Sam tumbuh di dekat kastil Kenmure, tempat dia dan saudara laki-lakinya bermain sebagai anak-anak. Aktor panggung dan layar ulung yang terkenal karena peran utamanya dalam Starz TV Series Outlander (2014-2021), A Princess for Christmas (2011), dan A Very British Sex Scandal (2007). Dia menghadiri Royal Scottish Academy of Music and Drama (sekarang Royal Conservatoire of Scotland) berlokasi di Glasgow, Skotlandia. Dia adalah pelindung aktif Youth Theatre Arts Scotland dan Bloodwise (sebelumnya Leukemia and Lymphoma Research) sebagai Presiden Bloodwise Scotland (2015). Pada 2015, dia ikut mendirikan My Peak Challenge dengan pelatih pribadi John Valbonesi dari Every Day Athlete; sebuah organisasi berbasis komunitas global yang mengumpulkan uang untuk tujuan amal seperti Bloodwise dan Marie Curie serta mendorong anggota untuk berhasil dalam kebugaran dan tantangan pribadi. Sam telah menerima 3 Gelar Kehormatan. 2019 dari University of Stirling 2019 dari University of Glasgow 2022 dari Royal Conservatoire of Scotland (RCS)'),
(13, 'Laurence Fishburne', '1961-07-30', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMTc0NjczNDc1MV5BMl5BanBnXkFtZTYwMDU0Mjg1._V1_.jpg', 'Pada tahun 1973, pada usia 12 tahun, Laurence muda memenangkan peran berulang di sabun siang hari One Life to Live (1968) yang berlangsung selama tiga musim. Dia kemudian membuat debut filmnya di roti jagung bertema ghetto, Earl and Me (1975). Pada usia 14 tahun, Francis Ford Coppola memasukkannya ke dalam Apocalypse Now (1979), yang difilmkan selama dua tahun di Filipina. Laurence tidak bekerja selama satu setengah tahun setelah episode panjang itu. Lulusan Lincoln Square Academy, Coppola cukup terkesan dengan Laurence untuk mempekerjakannya lagi dengan peran unggulan dalam Rumble Fish (1983), The Cotton Club (1984) dan Gardens of Stone (1987).'),
(14, 'Bill Skarsgård', '1990-08-09', 'Swedia', 'https://m.media-amazon.com/images/M/MV5BODBlNmRhODYtOWE2Ni00MTZmLWExMWYtMmRjYWNhNDRjNGU2XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg', 'Bill Istvan Gunther Skarsgard adalah aktor, produser, sutradara, penulis, pengisi suara, dan model Swedia. Dia terkenal karena memerankan Pennywise the Dancing Clown dalam film horor supernatural It (2017) dan It Chapter Two (2019), berdasarkan novel Stephen King dengan nama yang sama. Dia juga mengisi suara Deviant Kro dalam film Marvel Cinematic Universe Eternals (2021).'),
(15, 'Vin Diesel', '1967-07-18', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMjExNzA4MDYxN15BMl5BanBnXkFtZTcwOTI1MDAxOQ@@._V1_.jpg', 'Vin Diesel lahir sebagai Mark Sinclair di Alameda County, California, bersama saudara kembarnya, Paul Vincent. Dia dibesarkan oleh ibu astrolog/psikolognya, Delora Sherleen (Sinclair), dan ayah angkatnya, Irving H. Vincent, seorang instruktur akting dan manajer teater, dalam proyek perumahan seniman di Greenwich Village di Kota New York. Dia tidak pernah mengenal ayah kandungnya. Ibunya berkulit putih (dengan keturunan Inggris, Jerman, Skotlandia, dan Irlandia), dan ayah angkatnya adalah orang Afrika-Amerika; mengacu pada latar belakang ayah kandungnya, Diesel mengatakan bahwa dia sendiri adalah \"pasti orang kulit berwarna\".'),
(16, 'Michelle Rodriguez', '1978-07-12', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMTkwODIzMzYyMl5BMl5BanBnXkFtZTYwNzAyNjAz._V1_.jpg', 'Mayte Michelle Rodríguez lahir pada 12 Juli 1978 di San Antonio, Texas dari Carmen Milady Pared Espinal, seorang ibu rumah tangga, dan Rafael Rodríguez Santiago, seorang prajurit Angkatan Darat AS. Dikenal karena peran cewek tangguh, Michelle adalah bukti bahwa ada persilangan antara kecantikan dan kekuatan. Michelle selalu tahu dia ditakdirkan untuk menjadi bintang, dia hanya tidak tahu bagaimana menuju ke sana. Michelle tinggal di San Antonio sampai usia 8 tahun ketika orang tuanya bercerai & pindah ke Republik Dominika dimana dia tinggal selama dua tahun sebelum pindah ke Puerto Rico. Pada usia 11 tahun, keluarga Michelle pindah untuk terakhir kalinya ke Jersey City, New Jersey. Meskipun dia telah bekerja sejak 1999 sebagai figuran dalam film-film seperti Summer of Sam (1999) dan Cradle Will Rock (1999), hanya butuh iklan majalah yang mengumumkan panggilan casting terbuka di New York untuk Michelle akhirnya memutuskan untuk masuk ke lampu sorot. Perannya adalah pemeran utama wanita, filmnya adalah Girlfight (2000). Meskipun kurangnya pengalaman dalam film dan tinju, Michelle mengikuti audisi, bersama dengan 350 gadis lainnya. Setelah berbagai percobaan di dalam ring tinju yang sebenarnya dan pelatihan selama lima bulan yang berat di Gym Gleason Brooklyn, dia akhirnya terpilih untuk memerankan peran Diana Guzman.'),
(17, 'Russell Crowe', '1964-04-07', 'New Zealand', 'https://m.media-amazon.com/images/M/MV5BMTQyMTExNTMxOF5BMl5BanBnXkFtZTcwNDg1NzkzNw@@._V1_.jpg', 'Russell Ira Crowe lahir di Wellington, Selandia Baru, dari Jocelyn Yvonne (Wemyss) dan John Alexander Crowe, keduanya melayani set film. Kakek dari pihak ibu, Stanley Wemyss, adalah seorang sinematografer. Nenek moyang Crowe baru-baru ini termasuk Welsh (tempat kakek dari pihak ayah lahir, di Wrexham), Inggris, Irlandia, Skotlandia, Norwegia, Swedia, Italia, dan Maori (salah satu nenek buyut dari pihak ibu Crowe, Erana Putiputi Hayes Heihi, adalah Maori).'),
(18, 'Daniel Zovatto', '1991-06-28', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BYzc4ZWMwNTgtNDJmNC00ZDJjLWJlMzgtY2UzMDI5YTkwMTMzXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg', 'Daniel Zovatto adalah aktor Kosta Rika. Lahir 28 Juni 1991 di San José, Kosta Rika, Zovatto pindah ke New York City, awalnya mengejar karir di teater. Dia kemudian berperan dalam film pendek The Return (2012). Dia kemudian pindah ke Los Angeles, di mana dia membuat debut filmnya di film horor Di bawah (2013), dan membuat debut televisinya di episode musim 1 dari Marvel\'s Agents of S.H.I.E.L.D. (2013). Peran lain dalam karier Zovatto termasuk Junior dalam film komedi romantis Laggies (2014), Neils Hirsch dalam film horor petualangan Innocence (2013), dan peran terobosannya dalam film misteri horor It Follows (2014) sebagai Greg Hannigan dan Don\'t Breathe (2016) sebagai Uang.'),
(19, 'Zendaya', '1996-09-01', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BMjAxZTk4NDAtYjI3Mi00OTk3LTg0NDEtNWFlNzE5NDM5MWM1XkEyXkFqcGdeQXVyOTI3MjYwOQ@@._V1_.jpg', 'Zendaya (yang berarti \"berterima kasih\" dalam bahasa Shona) adalah seorang aktris dan penyanyi Amerika yang lahir di Oakland, California. Dia memulai karirnya dengan tampil sebagai model cilik yang bekerja untuk Macy\'s, Mervyns, dan Old Navy. Dia adalah seorang penari cadangan sebelum menjadi terkenal untuk perannya sebagai Rocky Blue di sitkom Disney Channel Shake It Up (2010) yang juga menampilkan Bella Thorne, Kenton Duty dan Roshon Fegan. Zendaya adalah seorang kontestan pada musim keenam belas dari seri kompetisi Dancing with the Stars. Dia melanjutkan untuk memproduksi dan membintangi sebagai K.C. Cooper di sitkom Disney Channel K.C. Undercover (2015) Dia membuat terobosan filmnya pada tahun 2017, dibintangi sebagai Michelle \"MJ\" Jones dalam film superhero Marvel Cinematic Universe Spider-Man: Homecoming (2017) dan sebagai Anne Wheeler dalam film drama musikal The Greatest Showman (2017) bersama aktor seperti Tom Holland, Hugh Jackman dan Zac Efron. Selain berakting, menyanyi dan menari, dia adalah duta Convoy of Hope. Dia telah menulis sebuah buku, meluncurkan lini pakaiannya sendiri (Daya by Zendaya) dan membuktikan dirinya sebagai panutan yang hebat bagi gadis-gadis muda di seluruh dunia.'),
(20, 'Benedict Cumberbatch', '1976-07-19', 'Inggris', 'https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_.jpg', 'Benedict Timothy Carlton Cumberbatch lahir dan besar di London, Inggris. Orang tuanya, Wanda Ventham dan Timothy Carlton (lahir Timothy Carlton Congdon Cumberbatch), keduanya adalah aktor. Dia adalah cucu dari komandan kapal selam Henry Carlton Cumberbatch, dan cicit dari diplomat Henry Arnold Cumberbatch CMG. Cumberbatch bersekolah di Brambletye School dan Harrow School. Selama di Harrow, dia mendapat beasiswa seni dan melukis kanvas minyak besar. Itu juga tempat dia mulai berakting. Setelah menyelesaikan sekolahnya, dia mengambil cuti setahun untuk menjadi sukarelawan sebagai guru bahasa Inggris di sebuah biara Tibet di Darjeeling, India. Sekembalinya, dia belajar drama di Universitas Manchester. Dia melanjutkan pelatihannya sebagai aktor di Akademi Musik dan Seni Drama London lulus dengan gelar MA dalam Akting Klasik. Pada saat dia menyelesaikan studinya, dia sudah memiliki agen.'),
(21, 'Michelle Yeoh', '1962-08-06', 'Malaysia', 'https://m.media-amazon.com/images/M/MV5BMTg0NTI0NDkzOF5BMl5BanBnXkFtZTcwMjYwMTIwNw@@._V1_.jpg', 'Michelle Yeoh lahir di Ipoh, Malaysia. Dia adalah putri dari Janet Yeoh & Kian Teik Yeoh. Dia keturunan Hokkian, berbicara bahasa Inggris dan Melayu sebelum bahasa Cina. Seorang penari balet sejak usia 4 tahun, dia pindah ke London untuk belajar di Royal Academy saat remaja. Setelah karir tari singkat, dia memenangkan gelar kontes kecantikan Miss Malaysia dan gelar kontes kecantikan Miss Moomba di Melbourne, Australia pada awal 1980-an. Pekerjaan kamera pertamanya adalah iklan tahun 1984 dengan bintang seni bela diri Jackie Chan. Pada tahun 1985, ia mulai membuat film aksi dengan D&B Films of Hong Kong. Dia pertama kali disebut sebagai Michelle Khan, kemudian Michelle Yeoh. Tidak pernah menjadi seniman bela diri yang terlatih, dia mengandalkan disiplin menari dan pelatih yang siap untuk mempersiapkan adegan aksi seni bela diri.'),
(22, 'Ke Huy Quan', '1971-08-20', 'Vietnam', 'https://m.media-amazon.com/images/M/MV5BMmMyN2MxMjQtNDFjYi00MTE3LTgwYTMtZmQzODUyZGUwYmExXkEyXkFqcGdeQXVyMTM5NDUxMTA@._V1_.jpg', 'Ke Huy Quan, juga dikenal sebagai Jonathan Ke Quan, adalah aktor dan koreografer akrobat Tionghoa-Amerika kelahiran Vietnam. Quan memainkan Short Round di Indiana Jones dan Temple of Doom (1984) dan Data di The Goonies (1985). Pada tahun 1990 dan 1991, ia berperan sebagai Jasper Kwong di sitkom Head of the Class selama dua musim. Quan berhenti berakting karena kurangnya kesempatan di akhir 1990-an, ketika dia menerima gelar film dari USC School of Cinematic Arts. Dia kemudian bekerja sebagai koordinator pemeran pengganti dan asisten sutradara. Dia kembali berakting sebagai Waymond Wang dalam film Semuanya Di Mana Saja Sekaligus (2022), peran yang dia terima pujian kritis, dan yang membuatnya mendapatkan Academy Award untuk aktor pendukung terbaik.'),
(23, 'Stephanie Hsu', '1990-11-25', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNmMxMjI0ZGItYThmMi00YTM0LTg5M2QtNTQxOTdmM2I5NDg3XkEyXkFqcGdeQXVyNTU0MjY5MjE@._V1_.jpg', 'Aktris Stephanie Hsu (diucapkan \"Shoe\") lahir pada tanggal 25 November di Los Angeles, California. Dia dikenal karena penampilannya sebagai Joy/Jobu Tupaki di A24 & Daniels \"Everything Everywhere All at Once\", serta karyanya sebagai Mei di Season 3 dan 4 dari \"The Marvelous Mrs. Maisel,\" Joy di drama kultus Hulu \"The Path\", dan \"Girl Code\" MTV. Dia memulai kariernya di teater pusat kota eksperimental di New York, yang akhirnya membawanya ke Broadway sebagai Karen the Computer dalam \"SpongeBob The Musical\", dan sebagai Christine Canigula dalam sensasi viral \"Be More Chill\". Dia adalah lulusan Sekolah Seni NYU Tisch, tempat dia belajar di Perusahaan Teater Atlantik dan Sayap Teater Eksperimental.'),
(24, 'Tom Cruise', '1962-07-03', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BYTFlOTdjMjgtNmY0ZC00MDgxLThjNmEtZGIxZTQyZDdkMTRjXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg', 'Tom adalah satu-satunya putra (di antara empat bersaudara) dari orang tua nomaden, Mary Lee (Pfeiffer), seorang guru pendidikan khusus, dan Thomas Cruise Mapother III, seorang insinyur listrik. Kedua orang tuanya berasal dari Louisville, Kentucky, dan dia memiliki keturunan Jerman, Irlandia, dan Inggris. Tom muda menghabiskan masa kecilnya dengan selalu berpindah-pindah, dan pada saat dia berusia 14 tahun dia telah bersekolah di 15 sekolah berbeda di AS dan Kanada. Dia akhirnya menetap di Glen Ridge, New Jersey bersama ibu dan suami barunya. Saat di sekolah menengah, Tom ingin menjadi pendeta tetapi segera dia mengembangkan minat dalam akting dan meninggalkan rencananya untuk menjadi pendeta, putus sekolah, dan pada usia 18 menuju ke New York dan kemungkinan karier akting. 15 tahun berikutnya dalam hidupnya adalah legenda. Dia membuat debut filmnya dengan peran kecil dalam Endless Love (1981) dan sejak awal memamerkan daya tarik box office yang tak terbantahkan bagi penonton pria dan wanita.'),
(25, 'Miles Teller', '1987-02-20', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BM2ZiYThiZTUtYmM0ZS00ZWQzLTgzMTEtZWY1ZDkwNWM4ZGNmXkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_.jpg', 'Miles Alexander Teller adalah aktor dan musisi Amerika. Untuk penampilannya dalam film The Spectacular Now (2013), ia memenangkan Dramatic Special Jury Award for Acting di Sundance Film Festival 2013. Dia telah muncul di film-film Rabbit Hole (2010), Footloose (2011), Project X (2012), That Awkward Moment (2014), Divergent (2014), Two Night Stand (2014), Whiplash (2014).'),
(26, 'Jennifer Connelly', '1970-12-12', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNWM0OTlhYmQtZWI0NS00NzM0LWE5YjItMWZmYzkzY2FmNTc2XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg', NULL),
(27, 'Annabelle Wallis', '1984-09-05', 'Inggris', 'https://m.media-amazon.com/images/M/MV5BMjA2MjU2NjE1OV5BMl5BanBnXkFtZTgwNTMyMTAzMjI@._V1_.jpg', NULL),
(28, 'Ward Horton', '1976-01-14', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BNjZiOTI4ODQtY2NjYy00MTllLTkyNmMtOTkyZjc0MjhlZmI1XkEyXkFqcGdeQXVyNDM1MDA1Ng@@._V1_.jpg', NULL),
(29, 'Tony Amendola', '1951-08-24', 'Amerika', 'https://m.media-amazon.com/images/M/MV5BN2I0MTU0ZGMtNzkyZC00MzAyLWFhMjQtN2M0NTljNjQ1NjNkXkEyXkFqcGdeQXVyMTYxNjA1MzE2._V1_.jpg', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
