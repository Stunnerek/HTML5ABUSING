-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Maj 2022, 13:07
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ston`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `formularz`
--

CREATE TABLE `formularz` (
  `ID` int(4) NOT NULL,
  `Name` varchar(16) NOT NULL,
  `Surname` varchar(16) NOT NULL,
  `Pseudonim` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `formularz`
--

INSERT INTO `formularz` (`ID`, `Name`, `Surname`, `Pseudonim`) VALUES
(21, 'mokotow', 'wwwwwwwwwww', 'sasdasd'),
(1, 'karol', 'piekarz', 'himslad'),
(1, 'karol', 'piekarz', 'himslad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
