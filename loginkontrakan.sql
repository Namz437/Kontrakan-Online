-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2024 pada 04.58
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginkontrakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrakan`
--

CREATE TABLE `kontrakan` (
  `no_kontrakan` int(11) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'tersedia',
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontrakan`
--

INSERT INTO `kontrakan` (`no_kontrakan`, `tipe`, `harga`, `deskripsi`, `status`, `gambar`) VALUES
(34, '3 pintu', 600000, 'Kontrakan 3 pintu', 'tersedia', '1282064582.jpg'),
(35, '4 pintu', 700000, 'Kontrakan berisikan 4 ruangan', 'tersedia', '1447353044.jpg'),
(36, '3 pintu', 600000, 'Punya Ridho Udah di booking', 'tersedia', '998325491.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `metode_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `metode_bayar`) VALUES
(1, 'DP'),
(2, 'Full'),
(3, 'transfer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `id_bayar` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'belum',
  `no_kontrakan` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesanan`, `nama`, `no_tlp`, `jk`, `id_bayar`, `status`, `no_kontrakan`, `gambar`) VALUES
(26, 'Arief', '085778687991', 'male', 2, 'sudah', 35, 'upload/65b270ad5ccbe_Anam Helm.jpg'),
(29, 'Muhammad Ridho Yudiana', '085280028441', 'male', 2, 'sudah', 35, 'upload/65b2736776c93_ClassDiagram revisi 3.png'),
(30, 'Ibrahim', '982376523', 'male', 3, 'belum', 34, ''),
(31, 'Angga', '085778687991', 'male', 2, 'belum', 34, 'upload/65b279ba6712e_bg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nama_role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nama_role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `terakhir_login` text NOT NULL,
  `roles_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`Id`, `username`, `password`, `nama`, `terakhir_login`, `roles_id`) VALUES
(6, 'Anam', '$2y$10$n32ryfJtZ8uEKxaJdv5sy.AIajzX4T3zx90N1cYl9R7U5vi7WGsiO', 'Nam', '', 2),
(24, 'Admin', '$2y$10$iKXrMm90QLobzL0g7tyJK.YbmyFruyVNCKTjosEcYwLLMQuNSt84C', 'Admin', '', 1),
(29, 'FADIL', '$2y$10$mRIm0JSsXOaHxP.406tEhu0FkbKyGStAclye7/X42lA./kzPpEMfK', 'FADIL', '', 2),
(31, 'Ibra', '$2y$10$vJzQt/o/1uHMzPp0.CkKuuzhZq7iFUPWEm53NUC0gqlQ7aMgQuquG', 'Ibrahim', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontrakan`
--
ALTER TABLE `kontrakan`
  ADD PRIMARY KEY (`no_kontrakan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `pemesanan_ibfk_1` (`no_kontrakan`),
  ADD KEY `pemesanan_ibfk_2` (`id_bayar`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `roles_id` (`roles_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontrakan`
--
ALTER TABLE `kontrakan`
  MODIFY `no_kontrakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`no_kontrakan`) REFERENCES `kontrakan` (`no_kontrakan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_bayar`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
