-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2024 at 07:00 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengiriman_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga`) VALUES
('A001', 'Audio-Technica ATH-M40X', 111500),
('A002', 'Kabel HDMI', 50000),
('A003', 'Razer Blackwidow Stealth', 1510000),
('A004', 'Grizzly Kryonaut ', 78900),
('A005', 'Arctic MX 4 ', 92750);

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `id_faktur` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int NOT NULL,
  `total_harga` int NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `id_penjual` varchar(10) NOT NULL,
  `id_pembeli` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`id_faktur`, `tanggal`, `qty`, `total_harga`, `kode_barang`, `id_penjual`, `id_pembeli`) VALUES
('1', '2023-12-20', 5, 1115000, 'A001', '1', '1'),
('2', '2024-01-10', 3, 50000, 'A002', '2', '2'),
('3', '2024-01-12', 7, 1510000, 'A003', '3', '3'),
('4', '2024-01-14', 2, 78900, 'A004', '4', '4'),
('5', '2024-01-15', 4, 92750, 'A005', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` varchar(10) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`) VALUES
('1', 'Jamal', 'Jl. Taman Margasatwa No. 12, Jakarta Selatan'),
('2', 'Ahmad', 'Jl. KH Asahari, Pinang Ciledug Tangerang'),
('3', 'Raka', 'Jl. Kushartoyo No.15, Ngawi'),
('4', 'Andri', 'Jl. Letjen Haryono MT 413, Semarang\r\n'),
('5', 'Jefri', 'Jl. Timur Baru II 93,Medan');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` varchar(10) NOT NULL,
  `nama_penjual` varchar(30) NOT NULL,
  `alamat_penjual` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `noTelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `alamat_penjual`, `email`, `noTelp`) VALUES
('1', 'TechTreasures', 'Jl. Merdeka No. 123, Kota A', ' tokoA@example.com', '08123456789'),
('2', 'FashionFiesta', 'Jl. Raya Indah No. 45, Kota B', ' tokoB@example.com', '08765432100'),
('3', 'GourmetGlobe', 'Jl. Bahagia No. 789, Kota C', ' tokoC@example.com', '08987654321'),
('4', 'HomeHaven', 'Jl. Damai Sejahtera No. 12, Kota D', ' tokoD@example.com', '08111223344'),
('5', 'SportsSaga', 'Jl. Nusantara No. 567, Kota E', ' tokoE@example.com', '08122334455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
