-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 17.20
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

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
-- Struktur dari tabel `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'rerechintya', 'haha'),
(2, 'admin', 'h'),
(3, 'aliya', 'huy'),
(6, 'aqila', 'i'),
(7, 'alya', 'telkom'),
(8, 'rabu', 'kamis'),
(9, 'halo', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dalam_proses`
--

CREATE TABLE `dalam_proses` (
  `id` int(5) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `nama_penyewa` varchar(100) NOT NULL,
  `no_telp` varchar(5000) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `lama_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  `nama_jln` varchar(5000) NOT NULL,
  `patokan` varchar(3000) DEFAULT NULL,
  `opsi_pengiriman` varchar(30) NOT NULL,
  `m_bayar` varchar(300) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dalam_proses`
--

INSERT INTO `dalam_proses` (`id`, `nama_buku`, `penulis`, `nama_penyewa`, `no_telp`, `tgl_pinjam`, `lama_pinjam`, `tgl_kembali`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `nama_jln`, `patokan`, `opsi_pengiriman`, `m_bayar`, `total`) VALUES
(1, 'test', 'Rere', 'Anita', '0878222278345', '2020-06-07', '5 hari', '2020-06-12', 'Jawa Barat', 'Bandung', 'Pasirkaliki', 40298, 'Jl. Sarimurni 07 Merdeka', 'Blok b-12 ', 'JNE', 'QRIS', '50.000'),
(2, 'test-01', 'Aqila', 'Fitri', '0878222668345', '2020-07-08', '1 minggu', '2020-07-15', 'Jawa Tengah', 'Jogja', 'Malioboro', 12298, 'Jl. Keraton 07 Merdeka', 'Unit 218', 'Anteraja', 'Transfer BNI', '50.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
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
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`id`, `nama_buku`, `penulis`, `penerbit`, `desk`, `kategori`, `tag`, `harga`, `img`) VALUES
(2, 'Paperboy : Bocah pengantar koran', 'Vince Vawter', 'M&C', 'SEORANG BOCAH LAKI-LAKI BERUSIA SEBELAS TAHUN TINGGAL DI MEMPHIS PADA TAHUN 1959 bisa melempar fastball terganas di kota, tetapi berbicara adalah dunia yang sama sekali berbeda dengan pertandingan bisbol. Dia hampir tidak bisa mengucapkan satu patah kata pun tanpa tergagapâ€”bahkan namanya sendiri. Ketika dia mengambil alih rute koran sahabatnya selama bulan Juli, bocah itu menyadari bahwa dia terpaksa harus berkomunikasi dengan para pelanggan, termasuk seorang ibu rumah tangga yang gemar minum wiski dan seorang pensiunan armada niaga yang tahu tentang hampir segala hal. Menjaja di rute koran menciptakan banyak tantangan, tetapi pertikaian dengan seorang tukang loak, pengganggu, sekaligus pencuri di lingkungan sekitarlah yang menimbulkan masalah nyataâ€”dan mengancam nyawa bocah itu beserta pelayan rumah tangganya yang setia....', 'Fiksi', '#Novel #Remaja', '80.000', 'img71.png'),
(22, 'OH MY BABY BLUES', 'Achi TM', 'PT.Gramedia.co', 'Karier Kayla Natasha sebagai motivator remaja sedang menanjak. Dan, sedikiiit lagi, akan ada peluang tampil di acara talk show bergengsi bersama presenter ternama. Namun, Kayla tiba-tiba hamil. Dia sih pengin punya anak, tapi ya nggak harus sekarang juga. Waktunya nggak tepat. Kesibukannya sedang menggila. Bahkan ketika dia berusaha menampilkan citra perempuan tangguh yang tetap aktif selama kehamilan, morning sickness keparat menghajarnya sampai muntah-muntah dan ambruk di atas panggung. Segala rencana dan harapan Kayla ambyar di depan mata. Segala motivasi yang pernah dia sampaikan menguap begitu saja. Dan Kayla tidak tahu lagi, dengan cara apa dia mampu bangkit dari keterpurukan ini... \"Penggambaran fenomena motivator berlatar sarjana psikologi yang satire dan penuh humor, Oh, My Baby Blue mengajak kita menertawakan diri sendiri.\" -Dr. Setiawati Intan Savitri M.Si, Dosen & Peneliti Psikologi, Founder Narrative Writing Therapy', 'Non fiksi', '#kids #mom', '80.000', 'img51.png'),
(25, 'Programmer Web Phyton Basic(django 3.2)', 'Ir.Yuniar Supriadi ,dkk', 'ELEX MEDIA KOMPUTINDO', 'Bahasa pemrograman ini menjadi bahasa yang sangat efisien dan efektif dalam membuat aplikasi, baik desktop maupun web.\r\n\r\nBuku ini disusun dengan sistematika yang baik, sehingga pembaca dapat dengan mudah belajar dan menjadi webmaster dengan bahasa Django Python. Dalam buku ini penulis menggunakan Python versi 3.7 dan Django 3.2. Penulis juga memperlihatkan cara instalasi Python dan Django 3.2 sehingga Anda mengetahui cara pengaturannya sebelum membuat web dengan Django. Walaupun buku ini difokuskan untuk belajar dasar Django, tetapi penulis juga memberikan pembahasan Web Django memakai database.', 'Komputer & Teknologi', '#buku #it', '100.000', 'img1011.png'),
(26, 'SELENA', 'TERE LIYE', 'PT.Gramedia', '\"Selena\" dan \"Nebula\" adalah buku ke-8 dan ke-9 yang menceritakan siapa orangtua Raib dalam serial petualangan dunia paralel. Dua buku ini sebaiknya dibaca berurutan. Kedua buku ini juga bercerita tentang Akademi Bayangan Tingkat Tinggi, sekolah terbaik di seluruh Klan Bulan. Tentang persahabatan tiga mahasiswa, yang diam-diam memiliki rencana bertualang ke tempat-tempat jauh. Tapi petualangan itu berakhir buruk, saat persahabatan mereka diuji dengan rasa suka, egoisme, dan pengkhianatan. Ada banyak karakter baru, tempat-tempat baru, juga sejarah dunia paralel yang diungkap. Di dua buku ini kalian akan berkenalan dengan salah satu karakter paling kuat di dunia paralel sejauh ini. Tapi itu jika kalian bisa menebaknya. Dua buku ini bukan akhir. Justru awal terbukanya kembali portal menuju Klan Aldebaran.', 'Fiksi', '#fiksi #imajinasi', '70.000', 'img42.png'),
(27, 'BULAN', 'TERE LIYE', 'PT.Gramedia', 'Namanya Seli, usianya 15 tahun, kelas sepuluh. Dia sama seperti remaja yang lain. Menyukai hal yang sama, mendengarkan lagu-lagu yang sama, pergi ke gerai fast food, menonton serial drama, film, dan hal-hal yang disukai remaja.\r\n\r\nTetapi ada sebuah rahasia kecil Seli yang tidak pernah diketahui siapa pun. Sesuatu yang dia simpan sendiri sejak kecil. Sesuatu yang menakjubkan dengan tangannya.\r\n\r\nNamanya Seli. Dan tangannya bisa mengeluarkan petir.', 'fiksi', '#fiksi #imajinasi', '75.000', 'nvl211.jpg'),
(28, 'Perahu Kertas', 'Dee Lestari', 'BENTANG', 'Perahu Kertas mengisahkan pasang surut hubungan dua anak manusia, yaitu Kugy dan Keenan. Kisah bermula ketika mereka berdua kuliah di Bandung. Kugy, yang bercita-cita ingin menjadi penulis dongeng, kuliah di Fakultas Sastra. Ia punya kebiasaaan unik, yaitu suka membuat perahu kertas yang kemudian dilarungkannya di sungai. Keenan, pelukis muda berbakat, dipaksa untuk kuliah di Fakultas Ekonomi oleh ayahnya. Bersama dengan sahabat Kugy sejak kecil, Noni, serta pacar Noni, yakni Eko, yang juga adalah sepupu Keenan, mereka berempat menjadi geng kompak. Dari yang semula saling mengagumi, Kugy dan Keenan diam- diam saling jatuh cinta. Tapi berbagai hal menghalangi mereka. Tak hanya itu, persahabatan Kugy dan Noni pecah ketika Kugy, demi menjaga hatinya, tak datang pada pesta ulang tahun Noni yang diadakan di rumah Wanda. Keenan akhirnya pergi ke rumah Pak Wayan, seorang pelukis teman lama Lena, sekaligus mentor Keenan melukis. Dalam suasana hati yang gundah, kreatifitas melukis Keenan buntu. Luhde, keponakan Pak Wayan, berhasil mengembalikan semangat Keenan. Seorang kolektor langganan galeri Wayan bernama Remi menjadi pembeli pertama. Ingin cepat meninggalkan Bandung dan lingkungan lamanya, Kugy berjuang untuk lulus cepat. Begitu lulus sidang, kakak Kugy yang bernama Karel membantu agar Kugy magang di biro iklan bernama AdVocaDo milik temannya, yaitu Remi. Prestasi kerja Kugy cemerlang, dan menarik perhatian Remi.', 'Fiksi', '#remaja ', '50.000', 'nvl41.jpg'),
(29, 'Peony\'s World', 'Kezia Evi Wiadji', 'Buana Sastra', '\"Mimpi buruk akan tertahan dan hilang seiring munculnya sinar fajar pertama. Sedangkan mimpi baik akan lolos melalui lubang di tengah-tengah lingkaran.\"\r\n\r\nSejak kecil, Peony memiliki “bakat istimewa” yang membuatnya mampu menginjak di dua dunia, dunia nyata dan dunia ciptaannya. Bakat istimewa yang awalnya menimbulkan kesulitan ini, lambat laun membuat hidup Peony lebih berwarna.\r\n\r\nJovan, laki-laki yang membuat hidup Peony bukan hanya berwarna, tetapi terasa sempurna. Hingga sebuah kecelakaan maut merenggut Jovan dari sisinya.\r\n\r\nSecara mengejutkan, Jovan muncul di dunia ciptaan Peony. Sejak saat itu, hidup Peony tak lagi sama. Keberadaan Jovan di dunia ciptaannya menuntun Peony ke sebuah buku tua, kisah keramat, dan sosok mengerikan yang mengincar nyawanya. Mengetahui hal itu, Jovan mati-matian melindungi, bahkan rela terpenjara di dunia ciptaan Peony hanya untuk menyelamatkan gadis itu.', 'Fiksi', '#fiksi #remaja', '70.000', 'nvl11.jpg'),
(31, 'Mao 02', 'Takahashi Rumiko', 'Elex Media Komputindo', 'Byouki, kodoku yang paling jahat... Mao dan Nanoka menyelinap masuk ke sekte agama yang mengetahui teknik “manipulasi usia”, sama dengan byouki yang memegang kunci segalanya!', 'Komik', '#kids #mom', '30.000', 'img151.png'),
(32, 'haloo', 'jnan', 'Elex Media Komputindo', 'bisa bisa', 'Komik', '#pastibisa #harus', '100.000', 'img19.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
