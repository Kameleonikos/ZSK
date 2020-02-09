-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lut 2020, 23:25
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bazaprojekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `difficulty`
--

CREATE TABLE `difficulty` (
  `id_difficulty` int(1) NOT NULL,
  `difficulty` varchar(20) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `flashcard`
--

CREATE TABLE `flashcard` (
  `id_flashcard` int(20) NOT NULL,
  `id_set` int(10) DEFAULT NULL,
  `id_word` int(20) DEFAULT NULL,
  `id_translate` int(20) DEFAULT NULL,
  `how_many_turns` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `set`
--

CREATE TABLE `set` (
  `id_set` int(10) NOT NULL,
  `created_by` int(20) DEFAULT NULL,
  `name_of_set` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `id_difficulty` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE `status` (
  `id_status` int(1) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'inactive'),
(2, 'active'),
(3, 'banned');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `translateword`
--

CREATE TABLE `translateword` (
  `id_translate` int(20) NOT NULL,
  `translateword` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_user` int(20) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_polish_ci NOT NULL,
  `mail` varchar(70) COLLATE utf8mb4_polish_ci NOT NULL,
  `date_of_join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `birthday` date NOT NULL,
  `id_status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `mail`, `date_of_join`, `name`, `surname`, `birthday`, `id_status`) VALUES
(7, '575613', '$argon2id$v=19$m=1024,t=2,p=2$Rnh0UUlUYlNOV2lBOXhHTw$eH3uTkyrHpOPbWJ7xKTDtjjGEUrKC39jqR5jtxR0MvQ', 'asd@as.pl', '2020-02-09 21:03:56', 'asd', 'asd', '2020-01-13', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `whos_set`
--

CREATE TABLE `whos_set` (
  `id_set` int(10) DEFAULT NULL,
  `id_user` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `words`
--

CREATE TABLE `words` (
  `id_word` int(20) NOT NULL,
  `word` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `difficulty`
--
ALTER TABLE `difficulty`
  ADD PRIMARY KEY (`id_difficulty`);

--
-- Indeksy dla tabeli `flashcard`
--
ALTER TABLE `flashcard`
  ADD PRIMARY KEY (`id_flashcard`),
  ADD UNIQUE KEY `id_set` (`id_set`),
  ADD KEY `id_word` (`id_word`),
  ADD KEY `id_translate` (`id_translate`);

--
-- Indeksy dla tabeli `set`
--
ALTER TABLE `set`
  ADD PRIMARY KEY (`id_set`),
  ADD KEY `id_difficulty` (`id_difficulty`);

--
-- Indeksy dla tabeli `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeksy dla tabeli `translateword`
--
ALTER TABLE `translateword`
  ADD PRIMARY KEY (`id_translate`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `mail_2` (`mail`);

--
-- Indeksy dla tabeli `whos_set`
--
ALTER TABLE `whos_set`
  ADD KEY `id_set` (`id_set`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id_word`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `flashcard`
--
ALTER TABLE `flashcard`
  ADD CONSTRAINT `flashcard_ibfk_1` FOREIGN KEY (`id_word`) REFERENCES `words` (`id_word`),
  ADD CONSTRAINT `flashcard_ibfk_2` FOREIGN KEY (`id_translate`) REFERENCES `translateword` (`id_translate`),
  ADD CONSTRAINT `flashcard_ibfk_3` FOREIGN KEY (`id_set`) REFERENCES `set` (`id_set`);

--
-- Ograniczenia dla tabeli `set`
--
ALTER TABLE `set`
  ADD CONSTRAINT `set_ibfk_1` FOREIGN KEY (`id_difficulty`) REFERENCES `difficulty` (`id_difficulty`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Ograniczenia dla tabeli `whos_set`
--
ALTER TABLE `whos_set`
  ADD CONSTRAINT `whos_set_ibfk_1` FOREIGN KEY (`id_set`) REFERENCES `set` (`id_set`),
  ADD CONSTRAINT `whos_set_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
