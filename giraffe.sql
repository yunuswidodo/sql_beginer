-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2020 pada 09.36
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giraffe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `add_triger`
--

CREATE TABLE `add_triger` (
  `id_add` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `add_triger`
--

INSERT INTO `add_triger` (`id_add`, `first_name`, `last_name`) VALUES
(1, 'yunus', 'widodo'),
(2, 'coba', 'coba'),
(3, 'neh', 'neh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(40) DEFAULT NULL,
  `mgr_id` int(11) DEFAULT NULL,
  `mgr_start_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `mgr_id`, `mgr_start_date`) VALUES
(1, 'Corporate', 100, '2006-02-09'),
(2, 'Scranton', 102, '1992-04-05'),
(3, 'Stamford', 106, '1998-02-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `branch_supplier`
--

CREATE TABLE `branch_supplier` (
  `branch_id` int(11) NOT NULL,
  `supplier_name` varchar(40) NOT NULL,
  `supply_type` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `branch_supplier`
--

INSERT INTO `branch_supplier` (`branch_id`, `supplier_name`, `supply_type`) VALUES
(2, 'Hammer Mill', 'Paper'),
(2, 'J.T Form & Labels', 'Custom Form'),
(2, 'Uni-Ball', 'Writting Untensils'),
(3, 'Hammer Mill', 'Paper'),
(3, 'Patriot Paper', 'Paper'),
(3, 'Stamford Lables', 'Custom Forms'),
(3, 'Uni-ball', 'Writing Utensils');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(40) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `branch_id`) VALUES
(400, 'Dunmore Highschool', 2),
(401, 'Lackawana Country', 2),
(402, 'FedEx', 3),
(403, 'John Daly Law, LLC', 3),
(404, 'Scranton Whitepages', 2),
(405, 'Times Newspaper', 3),
(406, 'FedEx', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `delete_triger`
--

CREATE TABLE `delete_triger` (
  `id_add` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `delete_triger`
--

INSERT INTO `delete_triger` (`id_add`, `first_name`, `last_name`) VALUES
(1, 'yunus', 'widodo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `firt_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `birth_day` date DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `super_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`emp_id`, `firt_name`, `last_name`, `birth_day`, `sex`, `salary`, `super_id`, `branch_id`) VALUES
(100, 'David', 'Wallace', '1967-11-17', 'M', 250000, NULL, 1),
(101, 'Jan', 'Levinson', '1961-05-11', 'F', 110000, 100, 1),
(102, 'Michael', 'Scout', '1964-03-15', 'M', 75000, 100, 2),
(103, 'Angela', 'Martin', '1971-06-25', 'F', 63000, 102, 2),
(104, 'Kelly', 'Kapoor', '1980-02-05', 'F', 55000, 102, 2),
(105, 'Stanley', 'Hudson', '1958-02-19', 'M', 69000, 102, 2),
(106, 'Josh', 'Porter', '1969-09-05', 'M', 78000, 100, 3),
(107, 'Andy', 'Bernard', '1973-07-22', 'M', 65000, 106, 3),
(108, 'Jim', 'Halpert', '1978-10-01', 'M', 71000, 106, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `works_with`
--

CREATE TABLE `works_with` (
  `emp_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `total_sales` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `works_with`
--

INSERT INTO `works_with` (`emp_id`, `client_id`, `total_sales`) VALUES
(105, 400, 55000),
(105, 404, 33000),
(105, 406, 130000),
(107, 403, 5000),
(107, 405, 26000),
(108, 402, 22500),
(108, 403, 12000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `add_triger`
--
ALTER TABLE `add_triger`
  ADD PRIMARY KEY (`id_add`);

--
-- Indeks untuk tabel `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `mgr_id` (`mgr_id`);

--
-- Indeks untuk tabel `branch_supplier`
--
ALTER TABLE `branch_supplier`
  ADD PRIMARY KEY (`branch_id`,`supplier_name`);

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `super_id` (`super_id`);

--
-- Indeks untuk tabel `works_with`
--
ALTER TABLE `works_with`
  ADD PRIMARY KEY (`emp_id`,`client_id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `add_triger`
--
ALTER TABLE `add_triger`
  MODIFY `id_add` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`mgr_id`) REFERENCES `employee` (`emp_id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `branch_supplier`
--
ALTER TABLE `branch_supplier`
  ADD CONSTRAINT `branch_supplier_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`super_id`) REFERENCES `employee` (`emp_id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `works_with`
--
ALTER TABLE `works_with`
  ADD CONSTRAINT `works_with_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `works_with_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
