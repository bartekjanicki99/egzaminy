-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 27, 2023 at 09:08 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stoly`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane`
--

CREATE TABLE `dane` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `haslo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dane`
--

INSERT INTO `dane` (`id`, `login`, `haslo`) VALUES
(1, 'Bartek', 'Bartek'),
(2, 'Maciek', 'Maciek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `id` int(11) NOT NULL,
  `imie` varchar(40) NOT NULL,
  `adres` varchar(40) NOT NULL,
  `id_zestawu` int(11) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`id`, `imie`, `adres`, `id_zestawu`, `dni`) VALUES
(1, 'Maciek', 'Kolorowa 5', 0, 12),
(2, 'Maciek', 'Kolorowa 5', 2, 12),
(3, 'Maciek', 'Kolorowa 69', 2, 12),
(4, 'Maciek', 'Kolorowa 69', 2, 12),
(5, 'Bartek', 'Maćkowa 4', 3, 15),
(6, 'Bartek', 'Maćkowa 4', 3, 15),
(7, 'Bartek', 'Maćkowa 4', 3, 15),
(8, 'Bartek', 'Maćkowa 4', 3, 15),
(9, 'Bartek', 'Maćkowa 4', 3, 15),
(10, 'Bartek', 'Maćkowa 4', 3, 15),
(11, 'Bartek', 'Maćkowa 4', 3, 15),
(12, 'Bartek', 'Maćkowa 4', 3, 15),
(13, 'Bartek', 'Maćkowa 4', 3, 15),
(14, 'Bartek', 'Maćkowa 4', 3, 15),
(15, 'Bartek', 'Maćkowa 4', 3, 15),
(16, 'Bartek', 'Maćkowa 4', 3, 15),
(17, 'Bartek', 'Maćkowa 4', 3, 15),
(18, 'Bartek', 'Maćkowa 4', 3, 15),
(19, 'Bartek', 'Maćkowa 4', 3, 15);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zestaw`
--

CREATE TABLE `zestaw` (
  `id` int(11) NOT NULL,
  `galeria` text NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zestaw`
--

INSERT INTO `zestaw` (`id`, `galeria`, `cena`) VALUES
(1, '1.jpg', 30),
(2, '2.jpg', 50),
(3, '3.jpg', 50);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane`
--
ALTER TABLE `dane`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zestaw`
--
ALTER TABLE `zestaw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dane`
--
ALTER TABLE `dane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `zestaw`
--
ALTER TABLE `zestaw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
