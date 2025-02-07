-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2025 at 04:15 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `category_id`, `title`, `slug`, `desc`, `img`, `views`, `status`, `publish_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Thinking, Fast and Slow', 'thinking-fast-and-slow', '<p><strong>Thinking, Fast and Slow</strong> karya Daniel Kahneman adalah buku yang membahas cara kerja pikiran manusia dalam mengambil keputusan. Kahneman, seorang pemenang Nobel di bidang ekonomi, menjelaskan bahwa manusia berpikir melalui dua sistem:</p>\r\n\r\n<ol>\r\n	<li><strong>Sistem 1</strong> &ndash; Cepat, intuitif, dan emosional.</li>\r\n	<li><strong>Sistem 2</strong> &ndash; Lambat, logis, dan lebih terkendali.</li>\r\n</ol>\r\n\r\n<p>Buku ini mengungkap bagaimana kedua sistem ini memengaruhi keputusan kita, sering kali menyebabkan bias kognitif dan kesalahan berpikir. Dengan penelitian mendalam dan contoh nyata, Kahneman memberikan wawasan tentang bagaimana kita bisa membuat keputusan yang lebih baik dalam kehidupan pribadi dan profesional.</p>\r\n\r\n<p>Cocok bagi siapa saja yang tertarik dengan psikologi, ekonomi perilaku, dan cara meningkatkan kualitas pengambilan keputusan.</p>', '67a583d868478.jpg', 4, '1', '2025-01-17', '2025-01-16 03:27:27', '2025-02-07 03:54:00'),
(4, 1, 1, 'The 48 Laws of Power', 'the-48-laws-of-power', '<p><strong>The 48 Laws of Power</strong> karya Robert Greene adalah buku strategi dan kepemimpinan yang membahas prinsip-prinsip kekuasaan, pengaruh, dan manipulasi berdasarkan sejarah, politik, serta filosofi klasik. Buku ini mengungkap 48 hukum yang digunakan oleh tokoh-tokoh besar dunia untuk mencapai dan mempertahankan kekuasaan, baik dalam lingkungan profesional maupun kehidupan pribadi.</p>\r\n\r\n<p>Dengan contoh nyata dari sejarah, mulai dari Julius Caesar hingga Napoleon Bonaparte, buku ini memberikan wawasan mendalam tentang cara membaca situasi sosial, mengenali permainan kekuatan, dan menghindari jebakan yang dapat melemahkan posisi seseorang. Cocok bagi mereka yang ingin memahami dinamika kekuasaan, membangun pengaruh, atau sekadar melindungi diri dari manipulasi di dunia yang kompetitif.</p>', '67a582939b674.jpg', 10, '1', '2025-01-17', '2025-01-16 00:52:48', '2025-02-07 03:48:35'),
(5, 1, 1, 'Thinking, Fast and Slow', 'thinking-fast-and-slow', '<p><strong>Thinking, Fast and Slow</strong> karya Daniel Kahneman adalah buku yang membahas cara kerja pikiran manusia dalam mengambil keputusan. Kahneman, seorang pemenang Nobel di bidang ekonomi, menjelaskan bahwa manusia berpikir melalui dua sistem:</p>\r\n\r\n<ol>\r\n	<li><strong>Sistem 1</strong> &ndash; Cepat, intuitif, dan emosional.</li>\r\n	<li><strong>Sistem 2</strong> &ndash; Lambat, logis, dan lebih terkendali.</li>\r\n</ol>\r\n\r\n<p>Buku ini mengungkap bagaimana kedua sistem ini memengaruhi keputusan kita, sering kali menyebabkan bias kognitif dan kesalahan berpikir. Dengan penelitian mendalam dan contoh nyata, Kahneman memberikan wawasan tentang bagaimana kita bisa membuat keputusan yang lebih baik dalam kehidupan pribadi dan profesional.</p>\r\n\r\n<p>Cocok bagi siapa saja yang tertarik dengan psikologi, ekonomi perilaku, dan cara meningkatkan kualitas pengambilan keputusan.</p>', '67a5840854c1b.jpg', 0, '0', '2025-01-11', '2025-01-16 04:39:47', '2025-02-07 03:54:48'),
(6, 1, 3, 'Top Otodidak Jepang', 'top-otodidak-jepang', '<p><strong>Rahasia Otodidak Jepang Nomor 1</strong> adalah panduan praktis bagi siapa saja yang ingin menguasai bahasa Jepang secara mandiri dengan cara yang efektif dan menyenangkan. Buku ini mengungkap strategi belajar otodidak yang telah terbukti berhasil, mulai dari memahami hiragana dan katakana, menguasai kanji, hingga berbicara dengan lancar dalam berbagai situasi.</p>\r\n\r\n<p>Dengan metode yang sistematis, tips praktis, serta sumber belajar terbaik, buku ini membantu pembaca menghindari kesalahan umum dan mempercepat proses pembelajaran. Cocok untuk pemula maupun mereka yang ingin meningkatkan kemampuan bahasa Jepang tanpa harus mengikuti kursus mahal.</p>', '67a57fe47f8d0.jpg', 30, '1', '2025-01-09', '2025-01-18 16:49:25', '2025-02-07 03:37:08'),
(7, 1, 3, 'Buku Top Belajar Bahasa Jepang', 'buku-top-belajar-bahasa-jepang', '<p><strong>Rahasia Otodidak Jepang Nomor 1</strong> adalah panduan praktis bagi siapa saja yang ingin menguasai bahasa Jepang secara mandiri dengan cara yang efektif dan menyenangkan. Buku ini mengungkap strategi belajar otodidak yang telah terbukti berhasil, mulai dari memahami hiragana dan katakana, menguasai kanji, hingga berbicara dengan lancar dalam berbagai situasi.</p>\r\n\r\n<p>Dengan metode yang sistematis, tips praktis, serta sumber belajar terbaik, buku ini membantu pembaca menghindari kesalahan umum dan mempercepat proses pembelajaran. Cocok untuk pemula maupun mereka yang ingin meningkatkan kemampuan bahasa Jepang tanpa harus mengikuti kursus mahal.</p>', '67a58137c32df.jpg', 7, '0', '2025-01-11', '2025-01-18 16:50:02', '2025-02-07 03:42:47'),
(8, 1, 1, 'Rahasia Percaya Diri', 'rahasia-percaya-diri', '<p><strong>Rahasia Percaya Diri</strong> adalah buku yang mengungkap kunci untuk membangun kepercayaan diri yang kuat dalam berbagai aspek kehidupan. Dengan pendekatan praktis dan inspiratif, buku ini membahas bagaimana mengatasi rasa minder, menghadapi ketakutan, dan mengembangkan pola pikir positif.</p>\r\n\r\n<p>Melalui kisah nyata, latihan, dan strategi yang terbukti efektif, pembaca akan diajak untuk memahami bahwa percaya diri bukanlah bawaan lahir, tetapi sesuatu yang dapat dipelajari dan ditingkatkan. Buku ini cocok bagi siapa saja yang ingin lebih berani berbicara di depan umum, mengambil keputusan dengan mantap, serta menjalani hidup dengan penuh keyakinan dan optimisme.</p>', '67a57f049c03d.webp', 18, '1', '2025-01-15', '2025-01-31 03:02:43', '2025-02-07 03:33:25'),
(9, 1, 1, 'Bersikap  Seni Bodo Amat', 'bersikap-seni-bodo-amat', '<blockquote>\r\n<p><strong>Sebuah Seni untuk Bersikap Bodo Amat</strong> karya Mark Manson adalah buku self-improvement yang menawarkan pendekatan unik terhadap kebahagiaan dan kesuksesan. Alih-alih mendorong pembaca untuk selalu berpikir positif, buku ini mengajarkan bahwa menerima kenyataan, memilih dengan bijak hal-hal yang benar-benar penting, dan mengabaikan hal-hal yang tidak berharga justru dapat membawa hidup yang lebih tenang dan memuaskan.</p>\r\n\r\n<p>Dengan gaya penulisan yang santai, penuh humor, dan sedikit kasar, Mark Manson membahas prinsip-prinsip kehidupan yang realistis dan tidak berlebihan. Buku ini cocok bagi mereka yang ingin melepaskan tekanan sosial, hidup lebih otentik, dan menghadapi tantangan dengan sikap yang lebih santai namun tetap bertanggung jawab.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>', '67a581c33005a.jpg', 4, '1', '2025-02-03', '2025-02-01 15:36:16', '2025-02-07 04:01:59'),
(11, 1, 1, 'Attitude Is Everything', 'attitude-is-everything', '<p><strong>Attitude Is Everything</strong> karya Jeff Keller adalah buku pengembangan diri yang mengajarkan bagaimana sikap mental yang positif dapat membawa kesuksesan dalam hidup. Buku ini membahas bagaimana cara berpikir, berbicara, dan bertindak dengan pola pikir yang benar untuk mencapai tujuan.</p>\r\n\r\n<p>Dengan pendekatan yang sederhana namun kuat, Jeff Keller membagikan prinsip-prinsip perubahan mindset, mengatasi hambatan mental, dan mengembangkan kebiasaan positif. Buku ini cocok bagi siapa saja yang ingin meningkatkan kualitas hidup, karier, dan hubungan dengan membangun mental yang kuat dan optimis.</p>', '67a580cda761b.jpg', 3, '1', '2025-02-05', '2025-02-01 15:49:32', '2025-02-07 03:41:02'),
(12, 1, 1, 'Attitude Is Everything', 'attitude-is-everything', '<p><strong>Attitude Is Everything</strong> karya Jeff Keller adalah buku pengembangan diri yang mengajarkan bagaimana sikap mental yang positif dapat membawa kesuksesan dalam hidup. Buku ini membahas bagaimana cara berpikir, berbicara, dan bertindak dengan pola pikir yang benar untuk mencapai tujuan.</p>\r\n\r\n<p>Dengan pendekatan yang sederhana namun kuat, Jeff Keller membagikan prinsip-prinsip perubahan mindset, mengatasi hambatan mental, dan mengembangkan kebiasaan positif. Buku ini cocok bagi siapa saja yang ingin meningkatkan kualitas hidup, karier, dan hubungan dengan membangun mental yang kuat dan optimis.</p>', '67a58311451b3.jpg', 0, '0', '2025-02-25', '2025-02-01 15:53:37', '2025-02-07 03:50:41'),
(13, 1, 1, 'The 48 Laws of Power', 'the-48-laws-of-power', '<p><strong>The 48 Laws of Power</strong> karya Robert Greene adalah buku strategi dan kepemimpinan yang membahas prinsip-prinsip kekuasaan, pengaruh, dan manipulasi berdasarkan sejarah, politik, serta filosofi klasik. Buku ini mengungkap 48 hukum yang digunakan oleh tokoh-tokoh besar dunia untuk mencapai dan mempertahankan kekuasaan, baik dalam lingkungan profesional maupun kehidupan pribadi.</p>\r\n\r\n<p>Dengan contoh nyata dari sejarah, mulai dari Julius Caesar hingga Napoleon Bonaparte, buku ini memberikan wawasan mendalam tentang cara membaca situasi sosial, mengenali permainan kekuatan, dan menghindari jebakan yang dapat melemahkan posisi seseorang. Cocok bagi mereka yang ingin memahami dinamika kekuasaan, membangun pengaruh, atau sekadar melindungi diri dari manipulasi di dunia yang kompetitif.</p>', '67a582c60a709.jpg', 0, '1', '2025-02-13', '2025-02-01 15:54:09', '2025-02-07 03:49:26'),
(15, 1, 1, 'Queit Impact', 'queit-impact', '<p><strong>&quot;Quiet Impact&quot;</strong> adalah buku yang ditulis oleh <strong>Sylvia Loehken</strong>, seorang ahli komunikasi yang membahas bagaimana seorang introvert bisa sukses tanpa harus mengubah kepribadian mereka. Buku ini menawarkan wawasan tentang kelebihan seorang introvert dan bagaimana mereka bisa memanfaatkan sifat alami mereka untuk mencapai kesuksesan dalam kehidupan pribadi dan profesional.</p>\r\n\r\n<p><strong>Isi Buku &amp; Poin Utama</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Memahami Introvert vs. Ekstrovert</strong><br />\r\n	Loehken menjelaskan perbedaan mendasar antara introvert dan ekstrovert, serta menyoroti kekuatan unik yang dimiliki introvert, seperti fokus yang mendalam, kemampuan mendengarkan, dan pemikiran strategis.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>10 Kekuatan &amp; 10 Tantangan Introvert</strong></p>\r\n\r\n	<ul>\r\n		<li>Kekuatan seperti empati, ketenangan, kedalaman berpikir, dan kreativitas.</li>\r\n		<li>Tantangan seperti kesulitan dalam berkomunikasi spontan, kelelahan sosial, dan tekanan untuk menyesuaikan diri dengan dunia yang lebih menonjolkan ekstroversi.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Strategi untuk Sukses</strong></p>\r\n\r\n	<ul>\r\n		<li>Bagaimana introvert bisa membangun kepercayaan diri dalam presentasi dan pertemuan.</li>\r\n		<li>Cara efektif untuk berjejaring dan membangun hubungan profesional tanpa merasa kelelahan.</li>\r\n		<li>Teknik komunikasi yang cocok untuk introvert agar tetap autentik dan berpengaruh.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Mengoptimalkan Gaya Kerja</strong></p>\r\n\r\n	<ul>\r\n		<li>Buku ini memberikan tips bagaimana introvert bisa bekerja lebih produktif, baik dalam tim maupun saat bekerja sendiri.</li>\r\n		<li>Menyesuaikan lingkungan kerja agar mendukung produktivitas tanpa harus mengorbankan energi sosial.</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Kelebihan Buku</strong></p>\r\n\r\n<p>✅ Ditulis dengan gaya yang jelas dan mudah dipahami.<br />\r\n✅ Memberikan banyak contoh nyata yang relevan bagi introvert di dunia kerja.<br />\r\n✅ Fokus pada kekuatan introvert, bukan pada &ldquo;memperbaiki&rdquo; sifat mereka.<br />\r\n✅ Dilengkapi dengan strategi praktis yang bisa langsung diterapkan.</p>\r\n\r\n<p><strong>Kekurangan Buku</strong></p>\r\n\r\n<p>❌ Beberapa bagian terasa sedikit repetitif.<br />\r\n❌ Tidak terlalu membahas secara mendalam bagaimana menghadapi dunia yang lebih condong ke ekstrovert secara sistemik.</p>\r\n\r\n<p><strong>Kesimpulan</strong></p>\r\n\r\n<p><em>&quot;Quiet Impact&quot;</em> adalah buku yang sangat bermanfaat bagi introvert yang ingin sukses tanpa harus berpura-pura menjadi ekstrovert. Dengan pendekatan yang berbasis kekuatan alami introvert, buku ini membantu pembaca memahami diri sendiri dan menemukan cara untuk berkembang dalam karier dan kehidupan sosial dengan cara yang nyaman dan efektif.</p>\r\n\r\n<p>⭐ <strong>Rating: 4.5/5</strong> &ndash; Cocok untuk introvert yang ingin memahami dan memaksimalkan potensinya!</p>', '67a2501fd03b6.jpg', 6, '1', '2025-02-21', '2025-02-01 17:30:20', '2025-02-04 17:38:09'),
(16, 1, 1, 'Atomic Habit', 'atomic-habit', '<p><em>Atomic Habits</em> oleh James Clear adalah panduan komprehensif dan praktis tentang cara membangun kebiasaan baik, menghilangkan kebiasaan buruk, dan meningkatkan 1% setiap hari. Berdasarkan penelitian ilmiah dan contoh-contoh kehidupan nyata, Clear menjelaskan ilmu di balik pembentukan dan pemutusan kebiasaan, serta menawarkan kerangka kerja untuk membangun sistem berkelanjutan untuk perbaikan diri.</p>\r\n\r\n<p>Salah satu gagasan utama dalam <em>Atomic Habits</em> adalah konsep perubahan kecil. Clear berpendapat bahwa membuat perbaikan kecil yang konsisten dari waktu ke waktu dapat menghasilkan hasil yang luar biasa. Dia menyebut ini sebagai &quot;efek gabungan&quot; dari kebiasaan atom. Sebuah kebiasaan atom adalah praktik kecil atau rutinitas yang mudah dilakukan dan sumber kekuatan luar biasa; komponen dari sistem pertumbuhan majemuk. Kebiasaan buruk berulang dengan sendirinya bukan karena Anda tidak ingin berubah, tetapi karena Anda memiliki sistem yang salah untuk berubah. Dalam buku ini, Anda tidak akan menemukan nasihat dangkal tentang life hacks. Sebaliknya, Anda akan belajar tentang ilmu perilaku yang teruji waktu tentang bagaimana perubahan kecil dalam kebiasaan dapat mengubah hidup Anda menjadi lebih baik.</p>\r\n\r\n<p>Clear menjelaskan bahwa kuncinya adalah fokus pada sistem yang Anda miliki, bukan tujuan Anda. Tujuan adalah tentang hasil yang ingin Anda capai. Sistem adalah tentang proses yang mengarah pada hasil tersebut. Alih-alih menetapkan tujuan seperti &quot;menurunkan berat badan 20 pon&quot;, fokuslah pada sistem untuk menjadi orang yang berolahraga secara teratur dan makan makanan sehat. Alih-alih menetapkan tujuan seperti &quot;menulis buku&quot;, fokuslah pada sistem untuk menjadi orang yang menulis 1.000 kata per hari. Kunci untuk mencapai hasil yang langgeng adalah berhenti menetapkan tujuan. Sebaliknya, fokuslah pada sistem Anda dan percayalah bahwa sistem Anda akan membawa Anda ke tujuan Anda.</p>', '67a24ed741c15.jpg', 11, '1', '2025-01-08', '2025-02-01 17:44:14', '2025-02-04 17:37:23'),
(17, 1, 1, 'Psychology of Emotions', 'psychology-of-emotions', '<p><strong>Judul:</strong> <em>Psychology of Emotions</em><br />\r\n<strong>Penulis:</strong> David J. Lieberman<br />\r\n<strong>Penerbit:</strong> Baca</p>\r\n\r\n<p><strong>Deskripsi:</strong><br />\r\nBuku <em>Psychology of Emotions</em> karya David J. Lieberman ini membahas bagaimana memahami dan mengendalikan emosi dengan cara yang efektif. Penulis menjelaskan bagaimana ledakan emosi terjadi, faktor-faktor yang memengaruhinya, serta strategi untuk tetap tenang dalam berbagai situasi. Dengan pendekatan psikologi yang mudah dipahami, buku ini menawarkan wawasan mendalam tentang cara kerja emosi manusia dan bagaimana menggunakannya secara bijak untuk meningkatkan kualitas hidup.</p>\r\n\r\n<p>Ditulis oleh penulis buku laris <em>Mindreader</em>, buku ini cocok bagi siapa saja yang ingin lebih memahami diri sendiri, meningkatkan kecerdasan emosional, serta mengembangkan keterampilan dalam mengelola emosi dan interaksi sosial.</p>', '67a584a751a63.jpg', 0, '1', '2025-01-06', '2025-02-07 03:57:27', '2025-02-07 03:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Buku Pengembangan Diri', 'buku-pengembangan-diri', '2025-01-14 14:56:25', '2025-02-04 17:37:03'),
(3, 'Buku Belajar Bahasa', 'buku-belajar-bahasa', '2025-01-15 11:52:19', '2025-02-07 03:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'https://dynamic.design.com/preview/logodraft/33bdcfe9-f69c-4e04-abc1-4a31e3082ff9/image/large.png', NULL, '2025-02-02 08:03:42'),
(2, 'blogname', 'M.Irham', NULL, NULL),
(3, 'title', 'Blog Motivasi & Self-Improvement', NULL, '2025-02-07 04:04:42'),
(4, 'caption', '🔹 \"Perubahan dimulai dari satu langkah kecil. Mulai hari ini, buat versi terbaik dari dirimu!\"\r\n🔹 \"Jangan biarkan ketakutan menghalangi impianmu. Ambil risiko, belajar, dan berkembang!\"', NULL, '2025-02-07 04:05:07'),
(5, 'ads_widget', 'https://dynamic.design.com/preview/logodraft/33bdcfe9-f69c-4e04-abc1-4a31e3082ff9/image/large.png', NULL, '2025-02-07 04:01:21'),
(6, 'ads_header', 'adsense 2', NULL, NULL),
(7, 'ads_footer', 'adsense 3', NULL, '2025-02-02 07:56:40'),
(8, 'phone', '182903812', NULL, NULL),
(9, 'email', 'irham@gmail.com', NULL, NULL),
(10, 'facebook', 'facebook.com', NULL, NULL),
(11, 'instagram', 'instagram.com', NULL, NULL),
(12, 'youtube', 'youtube.com', NULL, NULL),
(13, 'footer', 'M.Irham', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_14_134240_create_categories_table', 1),
(6, '2025_01_14_134241_create_articles_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2025_02_02_110756_create_configs_table', 2);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'irha', 'admin@gmail.com', NULL, '$2y$12$TVW/zRJshfYdTpxXliLp.u3NpU9mL5LXLpirFO/x/yj0InqAvzzwO', '1', '4jgL62VgtF2YeLhON6SIwjyQGb3g9nODQOXv8sJG7Pm0zt58u9aIII3GYsSC', '2025-01-19 03:18:48', '2025-01-19 13:59:32'),
(2, 'agud', 'admi@gmail.com', NULL, '$2y$12$d4aWq1qJohWVDjzAGOQKA.g2xdY6Ct596ZiL7.WeM2CbN8QLCuhRi', '1', NULL, '2025-01-19 04:52:17', '2025-01-19 04:52:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_index` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
