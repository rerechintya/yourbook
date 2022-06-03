-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 06:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `number` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password2` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `name`, `address`, `number`, `email`, `password2`) VALUES
(1, 'rerechintya', 'haha', '', '', 0, '', ''),
(2, 'admin', 'h', '', '', 0, '', ''),
(3, 'aliya', 'huy', '', '', 0, '', ''),
(6, 'aqila', 'i', '', '', 0, '', ''),
(10, 'fali', 'woila', '', '', 0, '', ''),
(11, 'raw', 'woila', 'Alya', 'JAYA ASRI BLOK AJ NO 15', 2147483647, 'aqilaa@gmail.com', ''),
(12, 'aly', 'de156e39c8481df78050021b1ffcd425', 'Rere Chintya', 'kl', 2147483647, 'aqilaa@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(5) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `desk` varchar(5000) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tag` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `harga` varchar(30) NOT NULL,
  `img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `nama_buku`, `penulis`, `penerbit`, `desk`, `kategori`, `tag`, `harga`, `img`) VALUES
(2, 'Paperboy : Bocah pengantar koran', 'Vince Vawter', 'M&C', 'SEORANG BOCAH LAKI-LAKI BERUSIA SEBELAS TAHUN TINGGAL DI MEMPHIS PADA TAHUN 1959 bisa melempar fastball terganas di kota, tetapi berbicara adalah dunia yang sama sekali berbeda dengan pertandingan bisbol. Dia hampir tidak bisa mengucapkan satu patah kata pun tanpa tergagapâ€”bahkan namanya sendiri. Ketika dia mengambil alih rute koran sahabatnya selama bulan Juli, bocah itu menyadari bahwa dia terpaksa harus berkomunikasi dengan para pelanggan, termasuk seorang ibu rumah tangga yang gemar minum wiski dan seorang pensiunan armada niaga yang tahu tentang hampir segala hal. Menjaja di rute koran menciptakan banyak tantangan, tetapi pertikaian dengan seorang tukang loak, pengganggu, sekaligus pencuri di lingkungan sekitarlah yang menimbulkan masalah nyataâ€”dan mengancam nyawa bocah itu beserta pelayan rumah tangganya yang setia....', 'Fiksi', '#Novel #Remaja', 'Rp 80.000', 'img72.png'),
(22, 'OH MY BABY BLUES', 'Achi TM', 'PT.Gramedia.co', 'Karier Kayla Natasha sebagai motivator remaja sedang menanjak. Dan, sedikiiit lagi, akan ada peluang tampil di acara talk show bergengsi bersama presenter ternama. Namun, Kayla tiba-tiba hamil. Dia sih pengin punya anak, tapi ya nggak harus sekarang juga. Waktunya nggak tepat. Kesibukannya sedang menggila. Bahkan ketika dia berusaha menampilkan citra perempuan tangguh yang tetap aktif selama kehamilan, morning sickness keparat menghajarnya sampai muntah-muntah dan ambruk di atas panggung. Segala rencana dan harapan Kayla ambyar di depan mata. Segala motivasi yang pernah dia sampaikan menguap begitu saja. Dan Kayla tidak tahu lagi, dengan cara apa dia mampu bangkit dari keterpurukan ini.', 'Non fiksi', '#kids #mom', 'RP 80.000', 'image_54.jpg'),
(25, 'Programmer Web Phyton Basic(django 3.2)', 'Ir.Yuniar Supriadi ,dkk', 'ELEX MEDIA KOMPUTINDO', 'Buku mengenai pemrograman phyton basic ', 'Komputer & Teknologi', '#buku #it', 'Rp 100.000', 'img13.png'),
(26, 'SELENA', 'TERE LIYE', 'PT.Gramedia', '\"Selena\" dan \"Nebula\" adalah buku ke-8 dan ke-9 yang menceritakan siapa orangtua Raib dalam serial petualangan dunia paralel. Dua buku ini sebaiknya dibaca berurutan. Kedua buku ini juga bercerita tentang Akademi Bayangan Tingkat Tinggi, sekolah terbaik di seluruh Klan Bulan. Tentang persahabatan tiga mahasiswa, yang diam-diam memiliki rencana bertualang ke tempat-tempat jauh. Tapi petualangan itu berakhir buruk, saat persahabatan mereka diuji dengan rasa suka, egoisme, dan pengkhianatan. Ada banyak karakter baru, tempat-tempat baru, juga sejarah dunia paralel yang diungkap. Di dua buku ini kalian akan berkenalan dengan salah satu karakter paling kuat di dunia paralel sejauh ini. Tapi itu jika kalian bisa menebaknya. Dua buku ini bukan akhir. Justru awal terbukanya kembali portal menuju Klan Aldebaran.', 'Fiksi', '#fiksi #imajinasi', 'Rp 70.000', 'img41.png'),
(27, 'BULAN', 'TERE LIYE', 'PT.Gramedia', 'Namanya Seli, usianya 15 tahun, kelas sepuluh. Dia sama seperti remaja yang lain. Menyukai hal yang sama, mendengarkan lagu-lagu yang sama, pergi ke gerai fast food, menonton serial drama, film, dan hal-hal yang disukai remaja.\r\n\r\nTetapi ada sebuah rahasia kecil Seli yang tidak pernah diketahui siapa pun. Sesuatu yang dia simpan sendiri sejak kecil. Sesuatu yang menakjubkan dengan tangannya.\r\n\r\nNamanya Seli. Dan tangannya bisa mengeluarkan petir.', 'fiksi', '#fiksi #imajinasi', 'Rp 75.000', 'nvl2.jpg'),
(28, 'Perahu Kertas', 'Dee Lestari', 'BENTANG', 'Perahu Kertas mengisahkan pasang surut hubungan dua anak manusia, yaitu Kugy dan Keenan. Kisah bermula ketika mereka berdua kuliah di Bandung. Kugy, yang bercita-cita ingin menjadi penulis dongeng, kuliah di Fakultas Sastra. Ia punya kebiasaaan unik, yaitu suka membuat perahu kertas yang kemudian dilarungkannya di sungai. Keenan, pelukis muda berbakat, dipaksa untuk kuliah di Fakultas Ekonomi oleh ayahnya. Bersama dengan sahabat Kugy sejak kecil, Noni, serta pacar Noni, yakni Eko, yang juga adalah sepupu Keenan, mereka berempat menjadi geng kompak. Dari yang semula saling mengagumi, Kugy dan Keenan diam- diam saling jatuh cinta. Tapi berbagai hal menghalangi mereka. Tak hanya itu, persahabatan Kugy dan Noni pecah ketika Kugy, demi menjaga hatinya, tak datang pada pesta ulang tahun Noni yang diadakan di rumah Wanda. Keenan akhirnya pergi ke rumah Pak Wayan, seorang pelukis teman lama Lena, sekaligus mentor Keenan melukis. Dalam suasana hati yang gundah, kreatifitas melukis Keenan buntu. Luhde, keponakan Pak Wayan, berhasil mengembalikan semangat Keenan. Seorang kolektor langganan galeri Wayan bernama Remi menjadi pembeli pertama. Ingin cepat meninggalkan Bandung dan lingkungan lamanya, Kugy berjuang untuk lulus cepat. Begitu lulus sidang, kakak Kugy yang bernama Karel membantu agar Kugy magang di biro iklan bernama AdVocaDo milik temannya, yaitu Remi. Prestasi kerja Kugy cemerlang, dan menarik perhatian Remi.', 'Fiksi', '#remaja ', 'Rp 50.000', 'nvl4.jpg'),
(29, 'Peony\'s World', 'Kezia Evi Wiadji', 'Buana Sastra', '\"Mimpi buruk akan tertahan dan hilang seiring munculnya sinar fajar pertama. Sedangkan mimpi baik akan lolos melalui lubang di tengah-tengah lingkaran.\"\r\n\r\nSejak kecil, Peony memiliki “bakat istimewa” yang membuatnya mampu menginjak di dua dunia, dunia nyata dan dunia ciptaannya. Bakat istimewa yang awalnya menimbulkan kesulitan ini, lambat laun membuat hidup Peony lebih berwarna.\r\n\r\nJovan, laki-laki yang membuat hidup Peony bukan hanya berwarna, tetapi terasa sempurna. Hingga sebuah kecelakaan maut merenggut Jovan dari sisinya.\r\n\r\nSecara mengejutkan, Jovan muncul di dunia ciptaan Peony. Sejak saat itu, hidup Peony tak lagi sama. Keberadaan Jovan di dunia ciptaannya menuntun Peony ke sebuah buku tua, kisah keramat, dan sosok mengerikan yang mengincar nyawanya. Mengetahui hal itu, Jovan mati-matian melindungi, bahkan rela terpenjara di dunia ciptaan Peony hanya untuk menyelamatkan gadis itu.', 'Fiksi', '#fiksi #remaja', 'Rp 70.000', 'nvl1.jpg'),
(31, 'nahs', 's', 'PT.Gramedia.co', 'djsjd', 'sidsfk', '#kids #mom', 'Rp 50.000', 'img152.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
