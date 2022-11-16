-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 nov 2022 om 12:47
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fietsenmaker`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fietsen`
--

CREATE TABLE `fietsen` (
  `id` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prijs` float NOT NULL,
  `voorraad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fietsen`
--

INSERT INTO `fietsen` (`id`, `merk`, `type`, `prijs`, `voorraad`) VALUES
(1, 'Batavus', 'Blockbuster', 699, 5),
(2, 'Batavus', 'Flying D', 749, 6),
(3, 'Gazelle', 'Chamonix', 1049, 13),
(4, 'Gazelle', 'Eclipse', 799, 2),
(5, 'Giant', 'Competition', 999, 5),
(6, 'Giant', 'Expedition AT', 1299, 6),
(7, 'Gazelle', 'Giro', 899, 12),
(8, 'test', 'test', 520, 7),
(10, 'test', 'test', 520, 9),
(12, 'sad', 'wewqe', 12, 32),
(13, 'brand', 'random ', 700.99, 13),
(15, 'brand', 'random ', 660.77, 5),
(16, 'brandy', 'fast', 1400, 7),
(17, 'brand', 'random ', 660.77, 3),
(18, 'sad', 'random ', 520, 23),
(19, 'test', 'test2', 250, 8),
(20, 'test', 'test2', 250, 21),
(21, 'test', 'test2', 250, 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fietsen`
--
ALTER TABLE `fietsen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fietsen`
--
ALTER TABLE `fietsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
