-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 01 Paź 2025, 07:03
-- Wersja serwera: 10.5.29-MariaDB-0+deb11u1
-- Wersja PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dj98`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wspolny_pulpit_notes`
--

CREATE TABLE `wspolny_pulpit_notes` (
  `id` int(20) NOT NULL,
  `content` text NOT NULL,
  `title` text NOT NULL,
  `last_update` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Zrzut danych tabeli `wspolny_pulpit_notes`
--

INSERT INTO `wspolny_pulpit_notes` (`id`, `content`, `title`, `last_update`) VALUES
(1, 'Title1', '1111', NULL),
(2, 'Title2', '2222', NULL),
(3, 'Title3', '3333', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
