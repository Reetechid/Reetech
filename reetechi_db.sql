-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table reetechi_db.tb_berita
DROP TABLE IF EXISTS `tb_berita`;
CREATE TABLE IF NOT EXISTS `tb_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `status_berita` varchar(50) NOT NULL,
  `jenis_berita` varchar(50) NOT NULL,
  `keywords` text NOT NULL,
  `date_cretated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` date NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_berita: ~7 rows (approximately)
DELETE FROM `tb_berita`;
/*!40000 ALTER TABLE `tb_berita` DISABLE KEYS */;
INSERT INTO `tb_berita` (`id_berita`, `id_user`, `id_kategori`, `slug_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `status_berita`, `jenis_berita`, `keywords`, `date_cretated`, `last_modified`) VALUES
	(24, 8, 1, 'menurut-kamu-iot-itu-apa-dan-bagaimana-kegunaannya', 'Menurut Kamu IoT itu apa dan bagaimana kegunaannya ?', '<p><strong>Kali ini Mimin jelasin aja ya..</strong> <strong>IoT <em>(Internet of Think)</em></strong></p>\r\n<p>Secara definisi IoT merupakan istilah yang merujuk pada jaringan yang terhubung ke internet seperti sensor, kamera, perangkat elektronik, kendaraan dan peralatan rumah tangga yang dilengkapi dengan kemampuan untuk bertukar data satu sama lain.</p>\r\n<p><strong>Penerapan IoT di sekitar kita</strong></p>\r\n<p>Dalam IoT, perangkat-perangkat tersebut dapat saling berkomunikasi dan berinteraksi dengan manusia dan perangkat lainnya melalui internet, sehingga memungkinkan pengumpulan data secara real-time, analisis data, dan pengambilan keputusan yang lebih cerdas dan cepat. Contoh penggunaan IoT adalah rumah pintar, kendaraan otonom, dan sistem monitoring kesehatan pasien secara jarak jauh.</p>\r\n<p><strong>Fun Fact</strong></p>\r\n<p><strong>Ternyata perusahaan di Indonesia sudah banyak yang mulai memanfaatkan IOT sebagai pengganti tenaga manusia lohh</strong></p>', 'APA_ITU_IOT.jpg', 'Publish', 'Berita', 'Google, Internet of Think, IoT, Technology', '2021-04-30 11:00:40', '2023-05-08'),
	(26, 11, 1, '5-perusahaan-ini-memanfaatkan-iot-sebagai-pengganti-manusia', '5 Perusahaan ini memanfaatkan IoT sebagai pengganti manusia', '<p><strong>1. Hara</strong></p>\r\n<p>Hara merupakan solusi digital dalam bidang pertanian. HARA dibangun Dattabot di atas platform Predix dari GE. HARA menerapkan IoT lanjutan yang biasa dikenal dengan Big Data. HARA memiliki peran besar dalam industri pertanian atau industri agrikultur di Indonesia. Perusahaan ini lahir pada tahun 2015 dengan memberikan data kepada petani terkait data tanah, cuaca, dan sejenisnya yang diolah dengan IoT.</p>\r\n<p><strong>2. E-Fishery</strong></p>\r\n<p>E-Fishery bergerak pada bidang perairan atau akuakultur. eFishery mengembangkan teknologi Aquaculture Intelligence Company dengan menerapkan sistem IoT. Tujuan perusahaan ini adalah untuk menyediakan kebutuhan pangan dunia dengan akuakultur dan teknologi yang terjangkau. Perusahaan mulai menjadi Aquaculture Intelligence pada tahun 2013. Banyak produk yang sudah terbukti membantu para budidaya melalui teknologi IoT dengan pemberian pakan otomatis secara tersistem dan terukur.</p>\r\n<p><strong>3. Qlue</strong></p>\r\n<p>Qlue sering disebut dengan IoT Smart City. Perusahaan ini memiliki peran besar dalam penerapan Smart City pada wilayah Ibu Kota. Qlue juga berharap dapat mengembangkan perusahaannya di berbagai wilayah di Indonesia. Qlue didirikan pada tahun 2016, menjadi provider dalam penyelenggaraan Smart City dengan memanfaatkan kecerdasan buatan dan Internet of Things.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>4. Taxi Blue Bird</strong></p>\r\n<p>Blue Bird merupakan salah satu kendaraan umum untuk mengantarkan ke suatu tempat tujuan. Saat ini, Taksi Blue Bird sudah menerapkan sistem IoT untuk memantau kondisi kendaraan selama kendaraan dijalankan. Hal ini sangat berpengaruh pada layanan dari Blue Bird itu sendiri. Blue Bird sudah menjalankan perusahaan dengan cukup lama, namun IoT diterapkan pada taksi Blue Bird pada tahun 2019.</p>\r\n<p><strong>5. Antares</strong></p>\r\n<p>Antares IoT Platform telah menyediakan platform yang open source untuk pembuatan sistem IoT. Antares merupakan salah satu platform untuk project Internet of Things. Antares ini dibuat oleh Telkom dengan memiliki berbagai fitur, mulai dari device management hingga data storage untuk memudahkan para developer aplikasi dalam mengembangkan idenya pada sistem Internet of Things.</p>', 'Perusahaan_Iot.jpg', 'Publish', 'Berita', 'Technology, IoT, Google', '2023-05-08 12:29:26', '2023-05-08'),
	(27, 11, 1, 'tools-ai-yang-akan-membantu-kamu-para-programmer-tinggal-sat-set-langsung-beres', 'Tools AI yang akan membantu kamu para Programmer tinggal sat set langsung beres', '<p><strong>Bikin Kodingan Tinggal Sat Set untuk Programmer</strong></p>\r\n<p>1. Cogniflow</p>\r\n<p>Tools yang akan membantu kamu bikin berbagai workflow tanpa harus ngoding.</p>\r\n<p> </p>\r\n<p>2. AIHelperBot</p>\r\n<p>Tools ini akan membantu kamu bikin query SQL lebih simpel dan cepat.</p>\r\n<p> </p>\r\n<p>3. WhatTheDiff</p>\r\n<p>Tools ini akan membantu kamu bikin "Code Review" jadi lebih efisien dan efektif.</p>\r\n<p> </p>\r\n<p>4. Debuild</p>\r\n<p>Nahh ini untuk kamu para programmer yang sedang ada project bikin website bisa jadi lebih super fast dengan penggunaan tools AI Debuild ini.</p>\r\n<p> </p>\r\n<p>Nah, REE TECH Company juga hadir melayani konsultasi untuk kalian yang mau mengembangkan bisnis melalui perangkat Digital lohhh</p>', 'Tools_AI_untuk_Programmer.jpg', 'Publish', 'Berita', 'Technology, Google, AI, Artificial Intelligence', '2023-05-08 12:43:27', '0000-00-00'),
	(28, 11, 1, 'what-makes-ai-technology-so-useful', 'What Makes AI Technology So Useful', '<p><strong>What is Artificial Intelligence ?</strong></p>\r\n<p>Artificial Intelligence  (AI) is a technology that mimics  human intelligence , allowing computer applications to learn from experience via iterative processing and algorithmic training. In many cases and for a variety of different applications, AI systems are capable of significantly outperforming humans, and that’s the primary reason why AI technology has become so important to the modern economy.</p>\r\n<p><strong>Soo.. What Makes AI Technology So Useful ?</strong></p>\r\n<p>Artificial intelligence technology offers several critical benefits that make it an excellent tool for virtually any modern organization, including:</p>\r\n<ol xss=removed>\r\n<li>Automation - AI is able to automate a repetitive task that was previously done manually, without feeling any fatigue or having to take breaks like a human employee would need to do.</li>\r\n<li>Enhancement - AI can make products and services smarter and more effective, improving experiences for end-users, via capabilities like optimizing conversation bots or customer service menus, and delivering better product recommendations.</li>\r\n<li>Analysis - AI can analyze data at a much faster rate than humans, allowing it to find patterns much more quickly, and it can also analyze much larger datasets than humans, allowing it to uncover patterns humans would simply miss.</li>\r\n<li>Accuracy - AI can be trained to become more accurate than humans, utilizingits ability to harvest and interpret data to come up with better decisions for tasks like picking financial investments or identifying cancerous growths on x-rays.</li>\r\n<li>ROI - AI maximizes the value of data since it’s able to do a better job analyzing complex, multi-variate relationships, without having to take any breaks and with fewer mistakes, making it an incredibly important technology for any business that relies on data and operates at scale.</li>\r\n</ol>\r\n<p>Source : csuglobal.edu</p>', 'what_ai_so_useful.jpg', 'Publish', 'Berita', 'AI, Artificial Intelligence, Technology', '2023-05-08 13:57:38', '0000-00-00'),
	(29, 11, 1, 'tren-ai-pada-industri-di-asia-tenggara-terus-meningkat', 'Tren AI pada Industri di Asia Tenggara terus Meningkat', '<p>52% responden mengadopsi teknologi AI karena menyukai kemampuan AI dalam memberikan pemahaman yang lebih komprehensif. 24,6% perusahaan/organisasi di Indonesia mengadopsi teknologi AI. Tingkat adopsi AI mencapai 14% di seluruh Asia Tenggara (naik 6?ri tahun lalu). </p>\r\n<p> </p>\r\n<p>Sebanyak 24,6% organisasi di Indoneisa telah mengadopsi AI dan setidaknya sudah ada lima bidang perusahaan yang sudah mengadopsi AI, yakni perbankan, telekomunikasi, healthcare, e-commerce, dan Fast Moving Consumer Goods (FMCG) (2018) dan terus bertambah secara signifikasi hingga saat ini terdapat 112 perusahaan diberbagai area industri sudah memanfaat sebagai strategi bisnis. Thailand, sementara itu, berada di posisi kedua (17,1%). Di susul oleh Singapura (9,9%), dan Malaysia (8,1%).</p>\r\n<p> </p>\r\n<p><strong>Prospek cerah masa depan AI diberbagai sektor industri</strong></p>\r\n<p>Peran aplikasi AI pada perusahaan berevolusi secara cepat. Adapun besarnya pertumbuhan pasar AI secara global pada tahun 2020 diperkirakan IDC sekitar 12,3% dibandingkan tahun 2019 lalu. Besarnya pasar AI dunia diprediksi akan mencapai US$156,5 miliar pada tahun 2020.<br><br>Bahkan Aplikasi AI diprediksi menyumbang sekitar 96,17?ri revenue yang dihasilkan oleh software. Sementara revenue yang dihasilkan software berasal dari platform software AI. Tren AI akan terus tumbuh dan meningkat di masa depan karena industri AI sendiri diperkirakan mencapai 118 miliar dolar pada tahun 2025.</p>\r\n<p> </p>\r\n<p>Source: (tirtoid.id), (wartaekonomi.co.id), infokomputer.grid.id</p>\r\n<p> </p>', 'grafik.jpg', 'Publish', 'Berita', 'AI, Artificial Intelligence, Technology', '2023-05-08 14:06:20', '0000-00-00'),
	(30, 11, 1, 'kemenkumham-siapkan-regulasi-terkait-dengan-perkembangan-artificial-intelligence-ai-di-indonesia', 'Kemenkumham Siapkan Regulasi Terkait Dengan Perkembangan Artificial Intelligence (AI) di Indonesia', '<p><strong>Regulasi diharapkan bisa jadi pelindung bagi ekosistem industri kreatif lokal</strong></p>\r\n<p>Keberadaan Artificial Inetelegence (AI) yang selama ini sudah banyak beredar dan digunakan oleh pelaku industri kreatif dan masyarakat pada umumnya, ternyata juga mendapatkan perhatian dari pemerintah. Menteri Hukum dan HAM Yasonna Laoly menyampaikan ada potensi ancaman kepada pelaku industri kreatif, dari munculnya beragam aplikasi berbasis kecerdasan buatan tersebut. ancaman yang dimaksudkan Yasonna adalah berkaitan dengan orisinalitas serta juga hak cipta karya yang dibuat oleh mesin AI. Ia juga meminta Kementerian Hukum dan HAM untuk segera memberi perlindungan kepada pemegang hak cipta dari ancaman pemanfaatan kecerdasan buatan tersebut, serta menyiapkan produk hukum yang dapat melindungi pelaku ekonomi kreatif dari ancaman tersebut.</p>\r\n<p> </p>\r\n<p>Source : indiekraf.com</p>\r\n<p> </p>', 'regulasi_AI.jpg', 'Publish', 'Berita', 'AI, Artificial Intelligence, Technology', '2023-05-08 14:11:02', '0000-00-00'),
	(31, 11, 1, 'ai-code-generators-for-programmers', 'AI Code Generators for Programmers', '<p>1. Github Copilot (github.com)</p>\r\n<p>Accessing Large Datasets and Optimizing Code<br>Github Copilot is another popular AI-powered code code generator that uses publicy available code form Github repositories to help users access large datasets and quickly develop accurate code. The tool is also great for optimizing code to make it run fater. It detects errors in code and recommends changes to it, making it an invaluable tool for developers looking to streaming their coding process.</p>\r\n<p>2. OpenAI Codex (openai.com)</p>\r\n<p>Writing Code in Dozens of Languages<br>OpenAI Codex is one of today’s most potent and versatile AI-powered code generators. With Codex, developers can write code in dozens of languages, including JavaScript, Go, Perl, PHP, Ruby, Swift, TypeScript, and BASH. The model is trained on billions of lines of code availavle in the public domain, such as Github repositories. It has a deep understanding of how code works and can generate accurate code quickly and efficiently.</p>\r\n<p>3. Tabnine (tabnine.com)</p>\r\n<p>Predicting and Suggesting Your Next Lines of Code<br>Tabnine is an AI code assistant that uses generative AI technology to predict and suggest your next lines of code based on context and syntax. It supports over 20 languages and 15 editors, including popular IDEs like VS Code, IntelliJ, Android Studio, and Vim. With Tabnine, developers can write code faster and more accurately than ever.</p>\r\n<p>4. Polycoder (github.com)</p>\r\n<p>Writing Accurate Code in C<br>PolyCoder is an AI-powered code generator based on OpenAI’s GPT-2 language model. It was trained on a 249GB of code database across 12 programming languages and can write in C with greater accuracy than all known models, including Codex. This makes it an invaluable tool for developers working with C code.</p>\r\n<p>5. Cogram (cogram.com)</p>\r\n<p>Translating English Queries into Complex SQL Queries<br>Cogram is a code generation tool for data scientists and Python programmers using SQL queries and Jupyter Notebooks. With Cogram, data scientists can write queries in the English language that the tool translates into complex SQL queries with joins and grouping. It supports SQLite, PostgreSQL, MySQL, and Amazon Redshift, making it a powerful tool for data analysis.</p>\r\n<p>6. WPCode (wpcode.com)</p>\r\n<p>Generating High-Quality WordPress Code<br>WPCode is an AI-driven WordPress code generator that isotropic created. It supports developers and non-technical WordPress creators, allowing them to generate high-quality code snippets quickly. WPCode supports HTML and CSS and languages such as Java and Python. It even includes AI assistants to suggest improvements to code snippets.</p>\r\n<p>7. AskCodi (askcodi.com)</p>\r\n<p>Helping Developers Write Better Code<br>AskCodi is a code generator that offers a full suite of development tools to help developers build and ship projects faster. Its AI-based code generation allows developers to write better code and shorter code blocks with fewer mistakes. AskCodi can be used to develop web and mobile applications, making it a versatile tool for developers of all types.</p>\r\n<p>If this content is beneficial to you, please share this post to your friends and colleagues!</p>', 'OIP.jpg', 'Publish', 'Berita', 'AI, Technology, Artificial Intelligence, Google', '2023-05-08 14:25:08', '0000-00-00');
/*!40000 ALTER TABLE `tb_berita` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_client
DROP TABLE IF EXISTS `tb_client`;
CREATE TABLE IF NOT EXISTS `tb_client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nama_client` varchar(255) NOT NULL,
  `email_client` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `gambar_client` varchar(255) NOT NULL,
  `publish` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modified` date NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_client: ~11 rows (approximately)
DELETE FROM `tb_client`;
/*!40000 ALTER TABLE `tb_client` DISABLE KEYS */;
INSERT INTO `tb_client` (`id_client`, `nama_client`, `email_client`, `website`, `gambar_client`, `publish`, `date_created`, `last_modified`) VALUES
	(11, 'Raps Company', 'admin1@gmail.com', 'www.bangkit', 'Logo_Rapsshop_2.png', 'Draft', '2023-09-01 12:50:56', '2023-09-01'),
	(12, 'Mitrans', 'admin@Mitrans.com', 'https://midtrans.com/', 'logo-midtrans.png', 'Publish', '2023-05-09 16:52:46', '2023-05-09'),
	(13, 'Niaga Hosting', 'admin@niaga.com', 'https://www.niagahoster.co.id/', '1480917170.png', 'Publish', '2023-05-09 16:52:38', '2023-05-09'),
	(14, 'axoticfarm', 'sdsd@gmail.com', 'None', 'download.png', 'Publish', '2023-08-27 19:40:19', '2023-08-27'),
	(15, 'Family Backery', 'familybackary@gmail.com', 'familybackery.com', 'logo1_2.png', 'Draft', '2023-09-01 12:50:44', '2023-09-01'),
	(16, 'P2MW', 'P2MW@admin.com', 'P2MW.com', 'P2MW-300x300.png', 'Publish', '2023-08-27 19:53:39', '0000-00-00'),
	(17, 'Tepres', 'Tepres@gmail.com', 'Tepres.com', 'image_116.png', 'Draft', '2023-09-01 12:50:32', '2023-09-01'),
	(18, 'Paragon', 'Paragon@gmail.com', 'Paragon.com', 'LOGO_PARAGON.png', 'Publish', '2023-08-27 21:30:26', '0000-00-00'),
	(19, 'Bangkit', 'Bangkit@gmail.com', 'Bangkit.com', 'channels4_profile.jpg', 'Publish', '2023-08-27 21:35:00', '0000-00-00'),
	(20, 'Reetech Technology', 'ReetechTechnology@gmail.com', 'ReetechTechnology.com', '28f62e1d6a2bde1e6ac0ae86b7d008df.jpg', 'Draft', '2023-08-28 02:37:04', '0000-00-00');
/*!40000 ALTER TABLE `tb_client` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_file
DROP TABLE IF EXISTS `tb_file`;
CREATE TABLE IF NOT EXISTS `tb_file` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_file: ~0 rows (approximately)
DELETE FROM `tb_file`;
/*!40000 ALTER TABLE `tb_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_file` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_kategori_berita
DROP TABLE IF EXISTS `tb_kategori_berita`;
CREATE TABLE IF NOT EXISTS `tb_kategori_berita` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `slug-kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_kategori_berita: ~3 rows (approximately)
DELETE FROM `tb_kategori_berita`;
/*!40000 ALTER TABLE `tb_kategori_berita` DISABLE KEYS */;
INSERT INTO `tb_kategori_berita` (`id_kategori`, `slug-kategori`, `nama_kategori`, `date_created`) VALUES
	(1, 'teknologi', 'Teknologi', '2021-04-20 12:12:59'),
	(2, 'kegiatan-perusahaan', 'Kegiatan perusahaan', '2021-05-02 10:20:21'),
	(7, 'bisnis', 'Bisnis', '2023-05-08 14:46:21');
/*!40000 ALTER TABLE `tb_kategori_berita` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_kategori_client
DROP TABLE IF EXISTS `tb_kategori_client`;
CREATE TABLE IF NOT EXISTS `tb_kategori_client` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_kategori_client: ~6 rows (approximately)
DELETE FROM `tb_kategori_client`;
/*!40000 ALTER TABLE `tb_kategori_client` DISABLE KEYS */;
INSERT INTO `tb_kategori_client` (`id_kategori`, `slug_kategori`, `nama_kategori`, `date_created`) VALUES
	(1, 'perushaan-negara', 'Perushaan Negara', '2021-04-27 12:49:08'),
	(2, 'perusahaan-ekstraktif', 'Perusahaan Ekstraktif', '2021-04-29 11:24:13'),
	(3, 'perusahaan-agraris', 'Perusahaan Agraris', '2021-04-29 11:24:26'),
	(4, 'perusahaan-industri', 'Perusahaan Industri', '2021-04-29 11:24:34'),
	(5, 'perusahaan-perdagangan', 'Perusahaan Perdagangan', '2021-04-29 11:24:42'),
	(6, 'perusahaan-jasa', 'Perusahaan Jasa', '2021-04-29 11:24:52');
/*!40000 ALTER TABLE `tb_kategori_client` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_kategori_portfolio
DROP TABLE IF EXISTS `tb_kategori_portfolio`;
CREATE TABLE IF NOT EXISTS `tb_kategori_portfolio` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_kategori_portfolio: ~2 rows (approximately)
DELETE FROM `tb_kategori_portfolio`;
/*!40000 ALTER TABLE `tb_kategori_portfolio` DISABLE KEYS */;
INSERT INTO `tb_kategori_portfolio` (`id_kategori`, `slug_kategori`, `nama_kategori`, `date_created`) VALUES
	(1, 'web-developer', 'Web Developer', '2021-04-30 11:52:30'),
	(3, 'mobile-developer', 'Mobile Developer', '2021-04-30 11:51:47');
/*!40000 ALTER TABLE `tb_kategori_portfolio` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_kategori_staff
DROP TABLE IF EXISTS `tb_kategori_staff`;
CREATE TABLE IF NOT EXISTS `tb_kategori_staff` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_kategori_staff: ~10 rows (approximately)
DELETE FROM `tb_kategori_staff`;
/*!40000 ALTER TABLE `tb_kategori_staff` DISABLE KEYS */;
INSERT INTO `tb_kategori_staff` (`id_kategori`, `slug_kategori`, `nama_kategori`, `date_created`) VALUES
	(2, 'founder-and-president', 'Founder And President ', '2023-05-02 13:06:27'),
	(6, 'software-developer', 'Software Developer', '2021-04-29 11:25:23'),
	(7, 'chief-executive-officer-ambroise', 'Chief Executive Officer Ambroise', '2023-05-02 13:10:58'),
	(8, 'chief-executive-officer-bright-me', 'Chief Executive Officer Bright Me', '2023-05-02 13:10:37'),
	(9, 'chief-marketing-officer', 'Chief Marketing Officer', '2023-05-02 13:10:04'),
	(10, 'chief-financial-officer', 'Chief Financial Officer', '2023-05-02 13:07:10'),
	(11, 'web-developer', 'Web Developer', '2021-04-29 11:26:04'),
	(12, 'chief-technology-officer', 'Chief Technology Officer', '2023-05-02 13:09:34'),
	(13, 'it-support', 'IT Support', '2021-04-29 11:26:25'),
	(14, 'system-manager', 'System Manager', '2021-04-29 11:26:32');
/*!40000 ALTER TABLE `tb_kategori_staff` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_layanan
DROP TABLE IF EXISTS `tb_layanan`;
CREATE TABLE IF NOT EXISTS `tb_layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `slug_layanan` varchar(255) NOT NULL,
  `judul_layanan` varchar(255) NOT NULL,
  `isi_layanan` text NOT NULL,
  `gambar_layanan` varchar(255) NOT NULL,
  `status_layanan` varchar(255) NOT NULL,
  `date_cretated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_layanan: ~4 rows (approximately)
DELETE FROM `tb_layanan`;
/*!40000 ALTER TABLE `tb_layanan` DISABLE KEYS */;
INSERT INTO `tb_layanan` (`id_layanan`, `id_user`, `slug_layanan`, `judul_layanan`, `isi_layanan`, `gambar_layanan`, `status_layanan`, `date_cretated`, `last_modified`) VALUES
	(4, 8, 'web-3-dev', 'Web 3 Dev', '<ul style="list-style-type: circle;">\r\n<li>Computer Vision Project</li>\r\n<li>Jaringan Saraf Tiruan Project</li>\r\n<li>Natural Language Processing/NLP Project</li>\r\n<li>Internet of Think Project</li>\r\n<li>Audio for AI Project</li>\r\n</ul>', 'AI_IoT_Project.png', 'Publish', '2023-08-29 22:32:04', '2023-08-29 00:00:00'),
	(6, 8, 'audio-synthesis', 'Audio Synthesis', '<p>Landing Page Project</p>\r\n<ul style="list-style-type: circle;">\r\n<li>Full Design</li>\r\n<li>Unlimited Bandwidth</li>\r\n<li>Unlimited Database</li>\r\n<li>Unlimited SSD Disk Space</li>\r\n<li>Maintance Service</li>\r\n</ul>\r\n<p>Education and Goverment Project</p>\r\n<ul style="list-style-type: circle;">\r\n<li>Full Design</li>\r\n<li>Unlimited Bandwidth</li>\r\n<li>Unlimited Database</li>\r\n<li>Unlimited SSD Disk Space</li>\r\n<li>Maintance Service</li>\r\n<li>Full Control Web</li>\r\n<li>Unlimited Akun E-mail</li>\r\n<li>Gratis Sertifikat SSL</li>\r\n</ul>\r\n<p>E-Commerce Project</p>\r\n<ul style="list-style-type: circle;">\r\n<li>Full Design</li>\r\n<li>Unlimited Bandwidth</li>\r\n<li>Unlimited Database</li>\r\n<li>Unlimited SSD Disk Space</li>\r\n<li>Maintance Service</li>\r\n<li>Full Control Web</li>\r\n<li>Unlimited Akun E-mail</li>\r\n<li>Gratis Sertifikat SSL</li>\r\n</ul>\r\n<p>Premium Request Project</p>\r\n<ul style="list-style-type: circle;">\r\n<li>Full Design</li>\r\n<li>Unlimited Bandwidth</li>\r\n<li>Unlimited Database</li>\r\n<li>Unlimited SSD Disk Space</li>\r\n<li>Maintance Service</li>\r\n<li>Full Control Web</li>\r\n<li>Unlimited Akun E-mail</li>\r\n<li>Gratis Sertifikat SSL</li>\r\n<li>Request Fitur Baisa</li>\r\n<li>Request Fitur Menengah</li>\r\n<li>Request Fitur Sulit</li>\r\n</ul>', 'Website_Project.jpg', 'Publish', '2023-08-29 22:31:28', '2023-08-29 00:00:00'),
	(7, 8, 'computer-vision', 'Computer Vision', '<p>Isi Layanan&nbsp;</p>\r\n<div>Education and Goverment Project</div>\r\n<ul style="list-style-type: circle;">\r\n<li>Full Design</li>\r\n<li>Unlimited Bandwidth</li>\r\n<li>Unlimited Database</li>\r\n<li>Unlimited SSD Disk Space</li>\r\n<li>Maintance Service</li>\r\n<li>Full Control Mobile Apps</li>\r\n<li>Unlimited Akun E-mail</li>\r\n<li>Gratis Sertifikat SSL</li>\r\n</ul>\r\n<p>E-Commerce Project</p>\r\n<ul style="list-style-type: circle;">\r\n<li>Full Design</li>\r\n<li>Unlimited Bandwidth</li>\r\n<li>Unlimited Database</li>\r\n<li>Unlimited SSD Disk Space</li>\r\n<li>Maintance Service</li>\r\n<li>Full Control Mobile Apps</li>\r\n<li>Unlimited Akun E-mail</li>\r\n<li>Gratis Sertifikat SSL</li>\r\n</ul>\r\n<p>Premium Request Project</p>\r\n<ul style="list-style-type: circle;">\r\n<li>Full Design</li>\r\n<li>Unlimited Bandwidth</li>\r\n<li>Unlimited Database</li>\r\n<li>Unlimited SSD Disk Space</li>\r\n<li>Maintance Service</li>\r\n<li>Full Control Mobile Apps</li>\r\n<li>Unlimited Akun E-mail</li>\r\n<li>Gratis Sertifikat SSL</li>\r\n<li>Request Fitur Biasa</li>\r\n<li>Request Fitur Menengah</li>\r\n<li>Request Fitur Sulit</li>\r\n</ul>', 'Mobile_Project.jpg', 'Publish', '2023-08-29 22:30:39', '2023-08-29 00:00:00'),
	(9, 11, 'text-processing', 'Text Processing', '<ul>\r\n<li>Computer Vision Project</li>\r\n<li>Jaringan Saraf Tiruan Project</li>\r\n<li>Natural Language Processing/NLP Project</li>\r\n<li>Internet of Think Project</li>\r\n<li>Audio for AI Project</li>\r\n</ul>\r\n<div id="gtx-trans" style="position: absolute; left: -115px; top: -17px;">&nbsp;</div>', 'AI_IoT_Project1.png', 'Publish', '2023-08-29 22:29:26', '2023-08-29 00:00:00');
/*!40000 ALTER TABLE `tb_layanan` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_log_download
DROP TABLE IF EXISTS `tb_log_download`;
CREATE TABLE IF NOT EXISTS `tb_log_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table reetechi_db.tb_log_download: ~5 rows (approximately)
DELETE FROM `tb_log_download`;
/*!40000 ALTER TABLE `tb_log_download` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_log_download` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_member
DROP TABLE IF EXISTS `tb_member`;
CREATE TABLE IF NOT EXISTS `tb_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `jenis_member` enum('1','2','3') NOT NULL DEFAULT '1',
  `pekerjaan` varchar(255) DEFAULT '',
  `instansi` varchar(255) DEFAULT '',
  `image` longtext,
  `alamat` longtext,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table reetechi_db.tb_member: ~1 rows (approximately)
DELETE FROM `tb_member`;
/*!40000 ALTER TABLE `tb_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_member` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_membership
DROP TABLE IF EXISTS `tb_membership`;
CREATE TABLE IF NOT EXISTS `tb_membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jenis_member` enum('2','3') NOT NULL COMMENT '2 = partner, 3 = premium',
  `limit_download` int(11) NOT NULL,
  `date_expired` date DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table reetechi_db.tb_membership: ~1 rows (approximately)
DELETE FROM `tb_membership`;
/*!40000 ALTER TABLE `tb_membership` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_membership` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_portfolio
DROP TABLE IF EXISTS `tb_portfolio`;
CREATE TABLE IF NOT EXISTS `tb_portfolio` (
  `id_portfolio` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `judul_portfolio` varchar(255) NOT NULL,
  `slug_portfolio` varchar(255) NOT NULL,
  `gambar_portfolio` varchar(255) NOT NULL,
  `isi_portfolio` text NOT NULL,
  `url_file` varchar(255) NOT NULL,
  `status_portfolio` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `testimoni` text NOT NULL,
  `last_modified` date NOT NULL,
  `date_project` date DEFAULT NULL,
  PRIMARY KEY (`id_portfolio`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_portfolio: ~3 rows (approximately)
DELETE FROM `tb_portfolio`;
/*!40000 ALTER TABLE `tb_portfolio` DISABLE KEYS */;
INSERT INTO `tb_portfolio` (`id_portfolio`, `id_user`, `nama_layanan`, `judul_portfolio`, `slug_portfolio`, `gambar_portfolio`, `isi_portfolio`, `url_file`, `status_portfolio`, `date_created`, `testimoni`, `last_modified`, `date_project`) VALUES
	(23, 18, 'Computer Vision', 'MoveNet: Ultra fast and accurate pose detection', 'movenet-ultra-fast-and-accurate-pose-detection', 'animation.gif', '<h2><strong>Introduction to Pose Detection</strong></h2>\r\n<p>Pose Detection is a Computer Vision technique that predicts the tracks and location of a person or object. This is done by looking at the combination of the poses and the orientation of the given person or object.</p>\r\n<p>So, for a given image, we will first have to identify the person or the relevant object in the image, and then we will identify certain key points from the identified person or object.</p>\r\n<p>&nbsp;</p>\r\n<p>For a person, these key points can be the elbow knees, and so on. Combining these key points we can identify the pose of a person.</p>\r\n<p>So, we&rsquo;ll first identify the location of a person from the image and then we&rsquo;ll detect key points for the person and finally combine these to determine the pose.</p>\r\n<p>Now, there is a distinction between detecting one or multiple objects in an image or a video. So these two approaches can be referred to as single and multiple pose detection.</p>\r\n<p>Single pose detection approaches detect and track one person or object while multiple detection approaches detect selecting multiple people or objects in the image with pose detection.</p>', 'https://urlis.net/Reetech', 'Publish', '2023-08-30 03:06:07', 'Import Libraries: Import the necessary libraries, including TensorFlow (or Keras) to load and utilize the model. Example: import tensorflow as tf.\r\n\r\nLoad the Model: Load the saved ".h5" model file using the load_model function. Provide the path to your ".h5" file as an argument. Example: model = tf.keras.models.load_model(\'model.h5\').\r\n\r\nPreprocess Input Data: If your model requires preprocessing of input data, ensure to preprocess your input data in the same manner as during training. ', '2023-08-29', '2023-08-27'),
	(24, 19, 'Computer Vision', 'Plant-Disease', 'plant-disease', 'Untitled.png', '<h3>TF2 SavedModel</h3>\r\n<p>This is a <a href="https://www.tensorflow.org/hub/tf2_saved_model" target="_blank" rel="noreferrer nofollow">SavedModel in TensorFlow 2 format</a>. Using it requires TensorFlow 2 (or 1.15) and TensorFlow Hub 0.5.0 or newer.</p>\r\n<p> </p>\r\n<h3>Overview</h3>\r\n<p>This model classifies plant leaf images into 38 categories by species and disease. This model was trained on the <a href="https://www.tensorflow.org/datasets/catalog/plant_village" target="_blank" rel="noreferrer nofollow">plant_village</a> (Hughes et al.) dataset [1] on about 54,000 (+ augmented images) healthy and unhealthy leaf images. This model was trained on top of the MobileNet v2 model using weights from MobileNet trained on ImageNet. More info about using this model could be found in the below section.</p>\r\n<p>Here are a couple of images from the dataset on which this model was trained on-</p>', 'sss', 'Publish', '2023-08-30 11:27:31', 'The output is a batch of logits vectors. The indices into the logits are the num_classes = 38 classes of the classification from the original training (see above). The mapping from indices to class labels can be found in the file at https://github.com/Rishit-dagli/Greenathon-Plant-AI/releases/download/v0.1.0/class_indices.json with each label in the following format: ${SPECIES}__${DISEASE}. In case the disease name consists of two words it would be in the following format: ${DISEASE_WORD_1}_${DISEASE_WORD_2}', '0000-00-00', '2023-08-03');
/*!40000 ALTER TABLE `tb_portfolio` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_setting
DROP TABLE IF EXISTS `tb_setting`;
CREATE TABLE IF NOT EXISTS `tb_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `sejarah` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_setting: ~0 rows (approximately)
DELETE FROM `tb_setting`;
/*!40000 ALTER TABLE `tb_setting` DISABLE KEYS */;
INSERT INTO `tb_setting` (`id_setting`, `nama_perusahaan`, `alamat`, `no_telepon`, `email`, `profile`, `visi`, `misi`, `sejarah`, `image`) VALUES
	(1, 'Ree Tech Company', 'Malang, Indonesia', '081934072310', 'Reetechcompany@gmail.com', '<p style="text-align: center;"><strong>Company Profile</strong></p>\r\n<p style="text-align: left;">REE TECH is a company focused on developing Indonesia\'s first AI, Web 3 and IoT solutions for various industrial sectors established in early 2020.</p>\r\n<p><br /><strong>Products and Services:</strong></p>\r\n<ul style="list-style-type: circle;">\r\n<li>REE TECH Consulting: We provide consulting to develop the right AI, Web3 and IoT solutions for your business needs</li>\r\n<li>REE TECH Development: We develop and implement customized AI, Web3 and IoT solutions to meet your business needs</li>\r\n<li>REE TECH Integration: We integrate AI, Web3 and IoT solutions with existing business systems to add value to your company\'s operations</li>\r\n<li style="text-align: left;">REE TECH Maintenance: We provide technical support and maintenance of AI, Web3 and IoT solutions to keep them running optimally and effectively</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Industries Served:</strong><br />REE TECH services a wide range of industrial sectors, including manufacturing, agriculture, transportation, healthcare, and energy.<br /><br />We have the first AI, Web3 &amp; IoT service in Indonesia with the best value and affordable&nbsp;price.</p>', '<p>Realizing a world in which every company has access and ability to equally utilize artificial intelligence (AI), Web3, and Internet of Things (IoT), to create innovation, efficiency, and progress in various aspects of life.</p>', '<ul style="list-style-type: circle;">\r\n<li>Technology Inclusivity: Ensuring that all segments of society, including the underserved, have easy and affordable access to AI, Web3, and IoT technologies through an accessibility-focused approach.\r\n<p>Education and Training: Providing training and educational resources that enable individuals from diverse backgrounds to comprehend, develop, and manage AI, Web3, and IoT solutions.</p>\r\n<p>Open Collaboration: Encouraging cross-sector collaboration among governments, industries, and civil society to build an ecosystem that supports the ethical and responsible use of these technologies.</p>\r\n<p>Security and Privacy: Ensuring that the utilization of these technologies is grounded in strong principles of security and privacy. This involves the development of standards, regulations, and technologies prioritizing the safeguarding of personal data.</p>\r\n<p>Sustainable Innovation: Fostering ongoing research and development in the fields of AI, Web3, and IoT to create solutions that are more advanced, efficient, and beneficial for society and the environment.</p>\r\n<p>Risk Management and Ethics: Developing clear ethical guidelines for the use of these technologies, while mitigating risks associated with potential negative impacts, such as inequality, security vulnerabilities, and unethical utilization.</p>\r\n<p>Empowerment of Entrepreneurs and Startups: Supporting innovation from entrepreneurs and startups by providing access to resources, training, and funding necessary to develop AI, Web3, and IoT-based solutions.</p>\r\n<p>Social and Environmental Impact: Striving to harness the potential of these technologies to address social and environmental challenges, such as climate change, healthcare, education, and sustainable agriculture.</p>\r\n<p>Transparency and Participation: Promoting transparency in the development of these technologies and involving the community in decision-making related to regulations and standards, ensuring the interests of all stakeholders are accommodated.</p>\r\n<p>Local Solution Development: Supporting the creation of relevant and region-specific solutions to ensure that these technologies deliver tangible positive impacts in various areas.</p>\r\n<p>By embracing this vision and mission, we can establish an environment where every individual has the opportunity to utilize artificial intelligence, Web3 and IoT fairly and sustainably, thereby driving enduring progress within society and the global community.</p>\r\n</li>\r\n</ul>', '', 'Group_18283.png');
/*!40000 ALTER TABLE `tb_setting` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_staff
DROP TABLE IF EXISTS `tb_staff`;
CREATE TABLE IF NOT EXISTS `tb_staff` (
  `id_staff` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_staff` varchar(255) NOT NULL,
  `email_staff` varchar(255) NOT NULL,
  `gambar_staff` varchar(255) NOT NULL,
  `publish` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modified` date NOT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB AUTO_INCREMENT=498 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_staff: ~6 rows (approximately)
DELETE FROM `tb_staff`;
/*!40000 ALTER TABLE `tb_staff` DISABLE KEYS */;
INSERT INTO `tb_staff` (`id_staff`, `id_kategori`, `nama_staff`, `email_staff`, `gambar_staff`, `publish`, `date_created`, `last_modified`) VALUES
	(491, 7, 'M Jilan Naufal', 'fajaras465@gmail.com', 'Group_231.png', 'Publish', '2023-05-08 10:45:14', '2023-05-08'),
	(492, 8, 'Beni Kurniawan', 'welly@gmai.com', 'Group_221.png', 'Publish', '2023-05-08 10:41:56', '2023-05-08'),
	(493, 12, 'Safir R Machsun', 'safirmachsun@gmail.com', 'Group_36.png', 'Publish', '2023-05-07 01:35:47', '2023-05-06'),
	(494, 9, 'Dandy Ramadhany', 'dandyramadhany89@Gmail.com', 'Group_35.png', 'Publish', '2023-05-07 01:31:06', '2023-05-06'),
	(495, 10, 'Anatasia Griselda F B', 'anatasia.antas@gmail.com', 'Group_34.png', 'Publish', '2023-05-07 01:34:04', '2023-05-06'),
	(496, 2, 'Utara Setya W', 'utarasetyaw@gmail.com', 'Group_33.png', 'Publish', '2023-05-07 01:36:42', '2023-05-06');
/*!40000 ALTER TABLE `tb_staff` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_user
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_user: ~4 rows (approximately)
DELETE FROM `tb_user`;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`id_user`, `id_kategori`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
	(11, 0, 'admin', 'admin@gmail.com', 'default.png', 'Admin123', 1, 1, 1682377206),
	(18, 0, 'utarasetya', 'utarasetyaw@gmail.com', 'default.png', '$2y$10$rx/2p83CaO4PAPIf.85WAeBbF2rpVVKLkpl7TcZINyO3HENEwYope', 1, 1, 1693144580),
	(19, 0, 'utarasw', 'utarasw@gmail.com', 'default.png', '$2y$10$TITCemn.FMYtBwEb99IrreEG01ry3DrJlNml/WjG7luXfBW6xQCOO', 1, 1, 1693336504);
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

-- Dumping structure for table reetechi_db.tb_user_token
DROP TABLE IF EXISTS `tb_user_token`;
CREATE TABLE IF NOT EXISTS `tb_user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table reetechi_db.tb_user_token: ~13 rows (approximately)
DELETE FROM `tb_user_token`;
/*!40000 ALTER TABLE `tb_user_token` DISABLE KEYS */;
INSERT INTO `tb_user_token` (`id`, `email`, `token`, `date_created`) VALUES
	(8, 'admin123@gmail.com', '17PxQefakxFuFoHb9c3iNT7CTJxXouR8KKJjCerSsc0=', 1682377206),
	(9, 'utarasetya@gmail.com', 'zzfir8LXWsvZ0ggV0mY9OAAWrBzhMUeCgEZEaFbKDrw=', 1687978595),
	(10, 'Utara@gmail.com', 'Im6evTNuVWl1iqGZHQlriHjPx3+VgplwxZ99zL1ej10=', 1688131337),
	(11, 'utara1@gmail.com', 'NSoBjOUXrSxVq+A+0YwVBv5Nayop3BfiINfZxnLbvaI=', 1689748121),
	(12, 'admin123@gmail.com', 'TItk/1szFdl5/lggjpNO3ck1xO8X0geuL557yCjRqa0=', 1689748259),
	(13, 'admin1234@gmail.com', 'KFtVT1X6GP5GrbP4ehs5wia+j4eYlUdiSKw+8LrkYE0=', 1693106417),
	(14, 'utarasetyaw@gmail.com', 'QIQ5kgGJGbYemvzb87ns1w5kpQd1T1WaNhXezM4eCxE=', 1693144580),
	(15, 'utarasw@gmail.com', 'uj/8HMJgd6t+bNTkwfgJ5eUF5F8sMceO+fFgLhYz3jQ=', 1693336504),
	(16, 'bagus@gmail.com', 'DcncJcUK/g7MGUE5f8KkQ4gGxY0pDlN0KI7WCFJeIr8=', 1694439558),
	(17, 'herman@gmail.com', 'AufODnB68vxjR2e2nmu99rUcoWUwigsT9raoFFM6f3s=', 1694486046),
	(22, 'herman@gmail.com', 'rNAigiUeJuEAwxMj15ZKvTROk/GCe17tlU5ESmMilGg=', 1694577608),
	(23, 'bagus@gmail.com', 'XMHnAesC4DBAdd/t+mwA37204/UgR+3wXEHqj9UjBks=', 1694678411);
/*!40000 ALTER TABLE `tb_user_token` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
