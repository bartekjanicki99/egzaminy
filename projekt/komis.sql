-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 23, 2023 at 06:07 PM
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
-- Database: `komis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id` int(11) NOT NULL,
  `marka` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `rocznik` decimal(4,0) NOT NULL,
  `kolor` varchar(50) NOT NULL,
  `zdjecie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `samochody`
--

INSERT INTO `samochody` (`id`, `marka`, `model`, `rocznik`, `kolor`, `zdjecie`) VALUES
(77, 'Audi', 'A6', 2015, 'Czarny', 'audi.png'),
(78, 'Lamborghini', 'Huracan', 2015, 'Srebrny', 'tlo.jpg'),
(90, 'BMW', 'E36', 1999, 'Czarny', 'bmw.png'),
(92, 'BMW', 'M3', 2017, 'Srebrny', 'tlo2.jpg'),
(93, 'Mercedes', 'CLA 63 AMG', 2015, 'Biały', 'mercedes.png'),
(95, 'Audi', 'A6', 1997, 'Biały', 'audi.png'),
(99, 'BMW', 'F30', 2019, 'Niebieski', 'bmw.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(6) UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`) VALUES
(1, 'Bartek', 'Bartek'),
(2, '', '$2y$10$jQBDSMjTWLfzaCpHaGNZUOiOJXstTMp.PRy.ul6Ot4ficLoXIqT1y'),
(3, '', '$2y$10$rwENlE0rZlUQ30GhK9FZdODoVhxE/xhBk6IDjn2aLU7K0P3g6mXmi'),
(4, 'Siema', '$2y$10$rj06MPtDu/72aSUJ5ZZrV.9Ha9FumTjNbmI5IlUvIvs8.GVo9UHli'),
(5, 'Siema', '$2y$10$fdr56h26OtZMPZ7CqAsxv.EnO.ZdbM1e5JnZ10eZjJ58blEajOYCK'),
(6, '', '$2y$10$9CpoTe6l0cj6IZrvzPrxh.GPpJ9Q95HCtI0Igx6dC/dDN.k5bUwm2'),
(7, '', '$2y$10$f0WR2e0Ei3EooZPeDGvMROt62bYNOOuZj7TDLqPxqbZErgh/dhv.2'),
(8, '', '$2y$10$BUPqsqxFPJoNT719QRHU3.e/GY5nqgrUwvaQH8t.wYlPZxkEQk6FC'),
(9, '', '$2y$10$clrdbs9RxGxfZBPDE2AANOs9FdOmFs72W3GIP.6AoSgoAtgyoUtTa'),
(10, '', '$2y$10$buyj3ymGez89Rvwx5X1inOTv98yYsERL2L8ahu.cLulxHcRURFNai'),
(11, '', '$2y$10$rMc6xqm4J1Rhq657UTCWKuVAZzKCAbR5wXoz9NtsiFeYsqW9AX2M.'),
(12, '', '$2y$10$BFX2lX8VVM4kW49jp6aQz.qZ02ZD6KB/xg9hpxsdTSe11N56aKEvi'),
(13, '', '$2y$10$ZVTKG7.uKdVmUoX7wHxER.9.6khDZ12zLyf2FA1.ZF6QITgZ2vBVq'),
(14, 'Hej', '$2y$10$SQJuRnqIaDodThJb1eFEY.qbzUhPE0sPPeZKCTa2eTDu5lg./W6Qi'),
(15, 'hyy', '$2y$10$wGI6zxqcQHiGp0MRDttHfuMc7JKOW1eBUcPl9yukV1WVR6dCSRXTe'),
(16, 'abc', '$2y$10$JYc8zheOtoVQA9wYXqkSWuOiB1kpmr5bu4BpzbNqNcD.sSSb1zS1y'),
(17, 'a', '$2y$10$czTuqyrgc.2hFsZXyCGzluo0Qt6nszZfWgA66d3kVZFOBE3Xsp0li'),
(18, '123', '$2y$10$JygwNwWm5fDtmc0Brb.23u592o96k4H.vNJO8UUfAUh2VD7xPPZaC'),
(19, 'h', '$2y$10$XaqTFy.I/ty4AXmJ7G4RzON2MhNefq2yVDj6ZoAmeM4fZs8BEaMTy'),
(20, 'lol', '$2y$10$JermsbUVPcuNvp/eYxCPnOhH/GaqLirclygFaXA5n0DGxhkF9SnLi');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
