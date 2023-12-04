-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 08:23 AM
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
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `detail_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `tanggal_berita`, `detail_berita`, `gambar`) VALUES
(13, 'Desa Tondangow Terima Bantuan Pembangunan Infrastruktur dari Pemerintah', '2023-11-22', '<p>Pemerintah Desa ABC berhasil meraih bantuan dana pembangunan infrastruktur dari pemerintah pusat. Bantuan ini diharapkan dapat meningkatkan kesejahteraan masyarakat setempat.</p>\r\n<p>Proyek pembangunan ini mencakup perbaikan jalan desa, peningkatan sistem saluran air, dan pembangunan taman bermain untuk anak-anak. Dalam sambutannya, Kepala Desa XYZ menyampaikan rasa syukur atas dukungan pemerintah, yang diharapkan dapat meningkatkan aksesibilitas dan kualitas hidup warga desa.</p>\r\n<p>Warga desa pun merespons positif, menyambut proyek pembangunan ini dengan antusias. Mereka berharap perbaikan infrastruktur akan membawa dampak positif dalam kehidupan sehari-hari, termasuk mempermudah transportasi dan memberikan lingkungan yang lebih aman dan nyaman.</p>\r\n<p>Selain itu, proyek ini juga diharapkan dapat menciptakan lapangan kerja lokal, melibatkan masyarakat dalam proses pembangunan, dan meningkatkan semangat gotong royong di antara penduduk desa.</p>\r\n<p>Pembangunan ini menjadi langkah maju bagi Desa ABC dalam mewujudkan visi pembangunan berkelanjutan dan kesejahteraan masyarakatnya. Selain itu, kesuksesan proyek ini juga diharapkan menjadi inspirasi bagi desa-desa lain untuk berpartisipasi aktif dalam pengembangan wilayah mereka.</p>', 'IMG-20210719-WA0038.jpg'),
(14, 'Desa Tondangow Gelar Program Tanam Pohon Serentak untuk Lestarikan Lingkungan', '2023-10-19', '<p>Masyarakat Desa Harapan Jaya secara serentak menggelar program penanaman pohon sebagai upaya untuk melestarikan lingkungan. Dalam kegiatan ini, ratusan warga ikut berpartisipasi, menanam berbagai jenis pohon di sepanjang area hijau desa. Kepala Desa Harapan Jaya, Bapak Surya, menyampaikan harapannya bahwa program ini dapat memberikan dampak positif terhadap udara bersih dan keindahan desa.</p>', 'OIP.jfif'),
(15, 'Desa Mandiri: Pelatihan Kewirausahaan Bagi Pemuda Desa Tondangow', '2023-11-08', '<p>Pemerintah Desa Tondangow bekerjasama dengan lembaga pelatihan mengadakan program pelatihan kewirausahaan bagi pemuda desa. Dalam kegiatan ini, peserta diajarkan keterampilan dasar berwirausaha dan manajemen usaha. Pelatihan ini diharapkan dapat memberdayakan pemuda desa untuk menciptakan peluang pekerjaan lokal dan meningkatkan ekonomi desa.</p>', 'R.jfif'),
(16, 'Desa Inovatif: Pembangunan Sumur Bor Baru Tingkatkan Akses Air Bersih', '2023-06-02', '<p>Desa Inovatif berhasil menyelesaikan proyek pembangunan sumur bor baru sebagai upaya meningkatkan akses air bersih bagi warganya. Proyek ini diinisiasi oleh inisiatif gotong royong warga setempat. Kepala Desa Inovatif, Ibu Dewi, menyatakan bahwa sumur baru ini akan sangat bermanfaat dalam memenuhi kebutuhan air sehari-hari dan meningkatkan kesejahteraan masyarakat desa.</p>', 'OIP (1).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `danadesa`
--

CREATE TABLE `danadesa` (
  `id` int(11) NOT NULL,
  `informasi` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `judul_acara` varchar(255) NOT NULL,
  `detail_acara` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `judul_acara`, `detail_acara`, `lokasi`, `tanggal_acara`, `gambar`) VALUES
(7, 'Festival Seni dan Budaya Desa Tondangow', '<p>Desa Tondangow mengadakan Festival Seni dan Budaya untuk merayakan keberagaman seni dan warisan budaya masyarakat setempat. Acara ini akan diadakan di Lapangan Desa Tondangow pada tanggal 15-17 Juli 2023. Festival ini akan menampilkan pertunjukan musik, tarian tradisional, pameran lukisan, serta kuliner khas desa. Festival ini tidak hanya menjadi sarana hiburan, tetapi juga untuk memperkuat rasa kebersamaan dan kebanggaan akan warisan budaya yang dimiliki oleh warga desa.</p>', 'Lapangan Desa Tondangow', '2023-07-13', 'OIP (2).jfif'),
(8, ' Lomba Desain Produk Inovatif dari Bahan Daur Ulang', '<p>Desa Tondangow mengajak warganya untuk berpartisipasi dalam Lomba Desain Produk Inovatif. Acara ini akan diadakan di Aula Desa Tondangow pada tanggal 20 Agustus 2023. Peserta diharapkan untuk menciptakan produk yang ramah lingkungan menggunakan bahan daur ulang. Lomba ini tidak hanya menjadi ajang kreativitas, tetapi juga sebagai langkah kecil dalam mendukung gaya hidup berkelanjutan. Pemenang akan mendapatkan penghargaan dan produknya akan dipamerkan dalam acara pameran desa.</p>', 'Aula Desa Tondangow', '2023-08-18', 'OIP (3).jfif'),
(9, 'Bakti Sosial: Pengobatan Gratis dan Pemeriksaan Kesehatan', '<p>Dalam upaya meningkatkan kesejahteraan masyarakat, Desa Tondangow akan menggelar bakti sosial berupa pengobatan gratis dan pemeriksaan kesehatan. Acara ini akan dilaksanakan di Balai Desa Tondangow pada tanggal 10 September 2023. Acara melibatkan tim medis yang akan memberikan layanan kesehatan kepada warga desa. Selain itu, akan ada pembagian obat-obatan gratis dan penyuluhan kesehatan. Semua warga diundang untuk ikut serta dalam acara ini guna mendukung kesehatan bersama.</p>', ' Balai Desa Tondangow ', '2023-09-08', '__bakti-sosial-pemeriksaan-kesehatan-dan-pengobatan-gratis-di-bekasi-5-1566694791.jpg'),
(10, 'Turnamen Olahraga Desa Cup 2023', '<p>Desa Tondangow mengadakan Turnamen Olahraga \"Desa Cup 2023\" untuk mempromosikan gaya hidup aktif dan mempererat tali persaudaraan antarwarga. Turnamen ini akan berlangsung di Lapangan Desa Tondangow mulai tanggal 5 hingga 12 November 2023. Turnamen melibatkan berbagai cabang olahraga seperti sepak bola, bulu tangkis, dan tenis meja. Seluruh warga desa diundang untuk berpartisipasi atau memberikan dukungan kepada tim kesayangan mereka. Acara ini diharapkan membawa semangat sportivitas dan kebersamaan di antara warga desa.</p>', 'Lapangan Desa Tondangow', '2023-11-01', 'IMG_20171105_145739.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `caption`, `gambar`, `tanggal_upload`) VALUES
(14, 'Keindahan Desa tondangow dari atas', 'aerial-shot-colorful-buildings-surrounded-by-trees.jpg', '2023-11-07 12:25:00'),
(15, 'Peresmian Gereja di desa Tondangow', 'IMG20211026115952-scaled.jpg', '2023-11-15 12:27:00'),
(16, 'Kerja Bakti', '20220719_163541.jpg', '2023-11-12 12:28:00'),
(17, 'Kelurahan Tondangow', '20220125_144307.jpg', '2023-11-05 12:29:00'),
(18, 'Sawah', 'aerial-view-terraced-rice-fields-bali-indonesia.jpg', '2023-10-11 12:29:00'),
(19, 'Pemandangan Desa tondangow', 'senior-woman-electric-mountainbike-alps.jpg', '2023-11-07 12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nama_kepala_keluarga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `no_kk`, `nama_kepala_keluarga`) VALUES
(11, '1234567890', 'Gunawan'),
(12, '1234567891', 'Agus'),
(13, '1234567892', 'Rafli'),
(14, '1234567893', 'Norman'),
(15, '1234567894', 'Nelson'),
(16, '1234567895', 'Wilson'),
(17, '1234567896', 'Andris'),
(18, '1234567897', 'Deny'),
(19, '1234567898', 'Cecep'),
(20, '1234567899', 'Sonny'),
(21, '1234567800', 'Jacky'),
(22, '1234567801', 'Jhonly'),
(23, '1234567802', 'Anis'),
(24, '1234567803', 'Andre'),
(25, '1234567804', 'Hani');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `no_kk` int(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `no_kk`, `nik`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat_lengkap`) VALUES
(1, 11, '12345678901234', 'Budi Santoso ', '1990-05-15', 'Pria', 'Islam', 'PNS', 'Jl. Merdeka No. 123, Tondano'),
(2, 12, '23456789012345', 'Dewi Cahyani ', '1985-12-03', 'Wanita', 'Kristen', 'Guru', 'Jl. Pahlawan No. 45, Tondangow'),
(3, 13, '34567890123456', 'Eko Prasetyo', '1995-08-22', 'Pria', 'Kristen', 'Wiraswasta ', 'Jl. Agung No. 67, Tondangow'),
(4, 14, '45678901234567', 'Fitriani               ', '1988-04-10', 'Wanita', 'Kristen', 'Dokter', 'Jl. Cendana No. 89, Tondangow'),
(5, 15, '56789012345678', 'Gilang Wibowo ', '1992-11-28', 'Pria', 'Kristen', 'Akuntan', 'Jl. Diponegoro No. 12, Tondangow'),
(6, 16, '67890123456789', 'Hani Indah', '1987-09-14', 'Wanita', 'Islam', 'Marketing', 'Jl. Kusuma No. 34, Tondangow'),
(7, 17, '78901234567890', 'Irfan Kurniawan', '1994-06-19', 'Pria', 'Kristen', 'Programmer', 'Jl. Kencana No. 56, Tondangow'),
(8, 18, '89012345678901', 'Jihan Fauzi ', '1986-02-07', 'Wanita', 'Islam', 'Penulis', 'Jl. Raya No. 78, Tondangow'),
(9, 19, '90123456789012', 'Antonio Siwi', '1991-07-25', 'Pria', 'Kristen', 'Pengusaha', 'Jl. Agil No. 90, Tondangow'),
(10, 20, '11223344556677', 'Lina Sari', '1989-03-30', 'Wanita', 'Kristen', 'Designer', 'Jl. Makmur No. 23, Tondangow'),
(11, 21, '22334455667788', 'Mulyadi', '1993-10-12', 'Pria', 'Kristen', 'Petani', 'Jl. Rukun No. 45, Tondangow'),
(12, 22, '33445566778899', 'Nia Tambuwun', '1984-08-12', 'Wanita', 'Kristen', 'Musisi', 'Jl. Harmoni No. 56, Tondangow'),
(13, 23, '44556677889900', 'Opik Setiawan   ', '1996-01-02', 'Pria', 'Kristen', 'Fotografer', 'Jl. Serasi No. 67, Tondangow'),
(14, 24, '55667788990011', 'Putri Amelia   ', '1983-05-08', 'Wanita', 'Hindu', 'Pelukis', 'Jl. Damai No. 78, Tondangow'),
(15, 25, '66778899001122', 'Rudi Hermawan   ', '1990-09-29', 'Pria', 'Buddha', 'Insinyur', 'Jl. Jaya No. 34, Tondangow');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nama_pengadu` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `judul_pengaduan` varchar(255) NOT NULL,
  `detail_pengaduan` text NOT NULL,
  `tanggal_pengaduan` datetime NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama_pengadu`, `alamat_lengkap`, `email`, `judul_pengaduan`, `detail_pengaduan`, `tanggal_pengaduan`, `no_telepon`, `gambar`, `status`) VALUES
(0, 'Norman', 'Tataaran Patar', 'norman@gmail.com', 'Ketidakamanan di Taman Kota', '<p>Saya, sebagai salah satu warga setempat, ingin menyampaikan pengaduan mengenai keadaan yang mengkhawatirkan di Taman Kota yang terletak di wilayah kami. Keamanan masyarakat di taman tersebut semakin terancam, dan tindakan perlu segera diambil untuk mengatasi masalah ini.</p>', '2023-11-24 15:42:00', '088845667321', 'OIP.jfif', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `detail_pengumuman` text NOT NULL,
  `tanggal_pengumuman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul_pengumuman`, `detail_pengumuman`, `tanggal_pengumuman`) VALUES
(1, 'Pengumuman Program Vaksinasi Covid-19 Massal', '<p>Sehubungan dengan upaya pencegahan penyebaran Covid-19, Pemerintah Desa Tondangow akan menyelenggarakan program vaksinasi massal bagi seluruh warga desa. Jadwal, lokasi, dan persyaratan akan diumumkan lebih lanjut. Mohon dukungan dan partisipasi aktif dari seluruh masyarakat desa. Terima kasih.</p>', '2023-11-06 11:49:00'),
(3, 'Pengumuman Pendaftaran Pelatihan Keterampilan Usaha Kecil', '<p>Pemerintah Desa Tondangow membuka pendaftaran untuk pelatihan keterampilan usaha kecil bagi warga desa. Pelatihan ini meliputi berbagai bidang seperti tata kelola usaha, pemasaran, dan manajemen keuangan. Warga yang berminat dapat mendaftar di kantor desa. Informasi lebih lanjut akan diumumkan dalam waktu dekat.</p>', '2023-10-09 19:46:00'),
(4, 'Pengumuman Pemilihan Ketua Rukun Tetangga (RT)', '<p>Desa Tondangow akan mengadakan pemilihan Ketua Rukun Tetangga (RT) untuk periode berikutnya. Calon dapat mendaftar di kantor desa mulai tanggal 1 hingga 15 April 2023. Silakan kunjungi kantor desa untuk informasi lebih lanjut mengenai persyaratan dan prosedur pendaftaran.</p>', '2023-03-31 19:47:00'),
(5, 'Pengumuman Jadwal Pembersihan Lingkungan Bersama', '<p>Mari bersama-sama menjaga kebersihan lingkungan! Pada tanggal 20 Mei 2023, Desa Tondangow akan mengadakan kegiatan pembersihan lingkungan bersama. Warga yang ingin berpartisipasi diharapkan hadir di lapangan desa pukul 08.00 WIB. Sampah organik dan anorganik akan dikumpulkan secara terpisah. Mari tunjukkan kepedulian kita terhadap lingkungan!</p>', '2023-05-18 19:48:00'),
(6, 'Pengumuman Pembagian Bantuan Sembako Bagi Warga Terdampak Bencana', '<p>Dalam rangka membantu warga yang terdampak bencana, Pemerintah Desa Tondangow akan melakukan pembagian bantuan sembako. Warga yang membutuhkan bantuan dapat mendaftarkan diri di kantor desa mulai tanggal 5 hingga 10 Juni 2023. Pembagian akan dilaksanakan pada tanggal 15 Juni 2023. Mohon untuk membawa kartu keluarga saat mendaftar. Terima kasih atas perhatiannya.</p>', '2023-06-02 19:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama_penjual` int(20) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `alamat_toko` varchar(255) NOT NULL,
  `link_alamat_toko` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `no_telepon`, `alamat_toko`, `link_alamat_toko`) VALUES
(0, 9, '081234567890', 'Tondangow Shop', 'https://maps.app.goo.gl/JuFpKgdYy83jtX4w6');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_penjual`, `nama_produk`, `harga`, `gambar`, `deskripsi`) VALUES
(0, 0, 'Tas Anyaman', '50. 000', 'download.jfif', '<p style=\"text-align: center;\">Tas anyaman tangan yang dibuat dengan keterampilan anyaman tradisional.</p>'),
(3, 3, 'Gado Gado', '20,000', 'Screenshot 2023-09-07 115824.png', '0'),
(4, 5, 'Ramen', '20,000', 'Screenshot 2023-09-19 154759.png', '0'),
(6, 5, 'Sayor Paku', '15,000', 'dff94199afafbae08e92a51261c6f4bf.jpeg', '0'),
(8, 3, 'Pisang stik', '5,000', 'test.png', '0'),
(9, 3, 'Pizza', '40,000', 'value-nsf-february-a-national-pizza-day-large-take-and-bake-pizza-22x28-no-copy-0.jpg', 'Pizza adalah roti berbentuk bulat pipih dengan diameter 30 cm yang dipanggang dalam oven dan biasanya disiram saus tomat serta keju dan dengan makanan tambahan lainnya (topping) yang sesuai selera penikmatnya.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'stein', 'b591d5d8d96b9a37fd4208535c4ab583'),
(17, 'minasan', '01cfcd4f6b8770febfb40cb906715822'),
(19, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danadesa`
--
ALTER TABLE `danadesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`),
  ADD KEY `nama_penjual` (`nama_penjual`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `danadesa`
--
ALTER TABLE `danadesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
