-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.32-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk dani_basse_pwl_411211051
CREATE DATABASE IF NOT EXISTS `dani_basse_pwl_411211051` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `dani_basse_pwl_411211051`;

-- membuang struktur untuk table dani_basse_pwl_411211051.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(150) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Membuang data untuk tabel dani_basse_pwl_411211051.customer: ~20 rows (lebih kurang)
INSERT INTO `customer` (`customer_id`, `customer_name`) VALUES
	(1, 'Dewi Kartika'),
	(2, 'Dimas Hadiwijaya'),
	(3, 'Putri Anadya'),
	(4, 'Hasan Bahri'),
	(5, 'Reza Hanz'),
	(6, 'Budi Setiawan'),
	(7, 'Bambang Sunarso'),
	(8, 'Nurhayati Andilah'),
	(9, 'Wahyudi Hardi'),
	(10, 'Ratna Sari'),
	(11, 'Rudi Husein'),
	(12, 'Indra Henanra'),
	(13, 'Joko Sulistiyo'),
	(14, 'Rahmat Ali'),
	(15, 'Wawan Setiyawan'),
	(16, 'Ujang Sipanjang'),
	(17, 'Usman Kamaru '),
	(18, 'Tika Palamanya'),
	(19, 'Andika Pratama'),
	(20, 'Santo Nugroho');

-- membuang struktur untuk table dani_basse_pwl_411211051.destinasi
CREATE TABLE IF NOT EXISTS `destinasi` (
  `destinasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `destinasi_name` varchar(150) NOT NULL,
  PRIMARY KEY (`destinasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Membuang data untuk tabel dani_basse_pwl_411211051.destinasi: ~20 rows (lebih kurang)
INSERT INTO `destinasi` (`destinasi_id`, `destinasi_name`) VALUES
	(1, 'DKI Jakarta'),
	(2, 'Jawa Barat '),
	(3, 'Jawa Tengah'),
	(4, 'Jawa Timur'),
	(5, 'Bali '),
	(6, 'Nusa Tenggara Timur'),
	(7, 'Nusa Tenggara Barat'),
	(8, 'Gorontalo '),
	(9, 'Sulawesi Barat'),
	(10, 'Sulawesi Tengah '),
	(11, 'Sulawesi Utara'),
	(12, 'Sulawesi Tenggara'),
	(13, 'Sulawesi Selatan'),
	(14, 'Maluku Utara'),
	(15, 'Maluku '),
	(16, 'Papua Barat '),
	(17, 'Papua '),
	(18, 'Papua Tengah'),
	(19, 'Papua Pegunungan'),
	(20, 'Papua Selatan');

-- membuang struktur untuk table dani_basse_pwl_411211051.pengiriman
CREATE TABLE IF NOT EXISTS `pengiriman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `destinasi_id` int(11) NOT NULL,
  `biaya_pengiriman` decimal(10,2) DEFAULT NULL,
  `tanggal_sampai` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Membuang data untuk tabel dani_basse_pwl_411211051.pengiriman: ~22 rows (lebih kurang)
INSERT INTO `pengiriman` (`id`, `tanggal`, `customer_id`, `destinasi_id`, `biaya_pengiriman`, `tanggal_sampai`) VALUES
	(1, '2024-01-01', 1, 5, 150000.00, '2024-01-10'),
	(2, '2024-01-02', 2, 3, 172000.00, '2024-01-08'),
	(3, '2024-01-03', 3, 7, 200000.00, '2024-01-12'),
	(4, '2024-01-04', 4, 2, 685000.00, '2024-01-06'),
	(5, '2024-01-05', 5, 10, 423000.00, '2024-01-15'),
	(6, '2024-01-06', 6, 1, 230000.00, '2024-01-11'),
	(7, '2024-01-07', 7, 8, 625000.00, '2024-01-18'),
	(8, '2024-01-08', 8, 6, 275000.00, '2024-01-09'),
	(9, '2024-01-09', 9, 4, 450000.00, '2024-01-14'),
	(10, '2024-01-10', 10, 9, 406000.00, '2024-01-16'),
	(11, '2024-01-11', 11, 12, 972000.00, '2024-01-13'),
	(12, '2024-01-12', 12, 11, 578000.00, '2024-01-20'),
	(13, '2024-01-13', 13, 15, 371000.00, '2024-01-17'),
	(14, '2024-01-14', 14, 18, 885000.00, '2024-01-07'),
	(15, '2024-01-15', 15, 20, 343000.00, '2024-01-19'),
	(16, '2024-01-16', 16, 16, 215000.00, '2024-01-14'),
	(17, '2024-01-17', 17, 13, 126000.00, '2024-01-22'),
	(18, '2024-01-18', 18, 14, 228000.00, '2024-01-11'),
	(19, '2024-01-19', 19, 17, 860000.00, '2024-01-16'),
	(20, '2024-01-20', 20, 19, 332000.00, '2024-01-18'),
	(21, '2024-01-16', 3, 10, 450000.00, '2024-01-18'),
	(22, '2024-01-15', 8, 8, 856000.00, '2024-01-17'),
	(23, '2024-01-10', 10, 9, 406000.00, '2024-01-16'),
	(24, '2024-01-16', 16, 16, 215000.00, '2024-01-14'),
	(25, '2024-01-15', 8, 8, 856000.00, '2024-01-17'),
	(26, '2024-01-08', 8, 6, 275000.00, '2024-01-09'),
	(27, '2024-01-05', 5, 10, 423000.00, '2024-01-15'),
	(28, '2024-01-03', 3, 7, 200000.00, '2024-01-12'),
	(29, '2024-01-03', 3, 7, 200000.00, '2024-01-12'),
	(30, '2024-01-03', 3, 7, 200000.00, '2024-01-12'),
	(31, '2024-01-01', 1, 5, 150000.00, '2024-01-10'),
	(32, '2024-01-01', 8, 5, 150000.00, '2024-01-10'),
	(33, '2024-01-01', 9, 5, 150000.00, '2024-01-10'),
	(34, '2024-01-01', 1, 5, 150000.00, '2024-01-10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
