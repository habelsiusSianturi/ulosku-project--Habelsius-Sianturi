

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lake_toba_db`
--

-- --------------------------------------------------------
-- --------------------------------------------------------
--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pakaian'),
(2, 'Kerajinan'),
(3, 'Aksesoris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_produk`, `komentar`, `tanggal`, `status`) VALUES
(3, 14, 3, 'warnanya cantik', '2019-06-18', 'Confirmed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_produk`, `jumlah`, `total_harga`, `alamat`, `nohp`, `bukti_pembayaran`, `tanggal`, `status`) VALUES
(2, 14, 3, 2, 300000, 'Tarutung', '081256091209', 'pembayaran/Gaun Batik.jpg', '2019-06-18', 'Telah Dikirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` int(9) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(45) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `qty`, `deskripsi`, `gambar`, `id_kategori`) VALUES
(1, 'Baju anak-anak', 50000, 20, 'Nyaman untuk anak', 'Baju.jpeg', 1),
(2, 'Baju Horas', 50000, 10, 'Kualitas bagus', 'baju2.jpeg', 1),
(3, 'Gaun Batik', 150000, 2, 'Warna dan corak bagus', 'baju3.jpeg', 1),
(4, 'Kemeja', 100000, 5, 'Warna bagus cocok dipakai untuk kerja kantoran', 'baju4.jpeg', 1),
(5, 'Kaos Oblong', 50000, 10, 'Bahan bagus nyaman dipakai', 'baju5.jpeg', 1),
(6, 'Kemeja Batik', 150000, 10, 'Warna bagus', 'kameja.jpeg', 1),
(7, 'Celana Santai', 50000, 10, 'Bahan ringan', 'celana.jpeg', 1),
(8, 'Celana pendek batik', 50000, 10, 'Nyaman dipakai kualitas bagus', 'celana3.jpeg', 1),
(10, 'Pot Bunga', 150000, 9, 'Bagus untuk pajangan', 'kerajinan.jpeg', 2),
(11, 'Rumah Batak', 15000, 10, 'Bagus untuk pajangan', 'kerajinan1.jpeg', 2),
(12, 'Tempat alat tulis khas batak', 20000, 10, 'Warna dan corak bagus', 'kerajinan2.jpeg', 2),
(13, 'Gantungan pintu', 50000, 10, 'Bagus untuk digantung dipintu', 'kerajinan3.jpeg', 2),
(14, 'Gantungan pintu khas Batak', 80000, 10, 'Ukiran bagus', 'kerajinan5.jpeg', 2),
(15, 'Tempat barang', 80000, 6, 'Bagus untuk pajangan dan menimpan barang ukuran kecil', 'kerajinan6.jpeg', 2),
(16, 'Patung khas Batak', 25000, 10, 'Bagus untuk pajangannnnnnnnnnn', 'kerajinan7.jpeg', 2),
(17, 'Rumaha Batak', 80000, 10, 'Ukiran bagus cocok untuk dipajng dirumah', 'kerajinan8.jpeg', 2),
(18, 'Gantungan kunci', 10000, 10, 'Bagus untuk gantungan di tas', 'kerajinan9.jpeg', 2),
(19, 'Rumah Batak', 100000, 10, 'Warna bagus', 'kerajinan10.jpeg', 2),
(20, 'Tempat tisu', 25000, 32, 'Bagus untuk tempat tisu', 'Hiasan_meja2.jpeg', 1),
(21, 'Pijat punggung', 25000, 10, 'Enak dipaki untuk memijat punggung', 'pijat_punggung.jpeg', 2),
(22, 'Pot Bunga', 25000, 10, 'Bahan dan kualitas bagus', 'pot_bunga.jpeg', 2),
(23, 'Sortali', 15000, 10, 'Warna dan corak bagus', 'sortali.jpeg', 2),
(24, 'Surban', 25000, 10, 'Warna dan bahan bagus', 'surban.jpeg', 2),
(25, 'Sandal', 25000, 10, 'Nyaman untuk dipakai', 'sandal.jpeg', 1),
(26, 'Sandal jepit', 30000, 8, 'Bahan bagus', 'sandal1.jpeg', 3),
(27, 'Topi', 15000, 10, 'menarik dan baguss ', '18062019042347topi.jpeg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(3) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `email`, `nohp`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'jln. siliwangi doloksanggul', 'admin@gmail.com', '082277990123', 'admin', 'admin', 1),
(14, 'Daniel', 'Tarutung', 'daniel@gmaiil.com', '08123456789', 'daniel', 'daniel', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_produkFK` (`id_produk`),
  ADD KEY `id_userFK` (`id_user`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`) USING BTREE,
  ADD KEY `id_user_FK` (`id_user`),
  ADD KEY `id_produk_FK` (`id_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategoriFK` (`id_kategori`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_roleFK` (`role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `id_produkFK` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_userFK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `FK_pemesanan` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `id_kategoriFK` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `id_roleFK` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
