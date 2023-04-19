-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Ápr 13. 07:44
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `zaro`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `highscore`
--

CREATE TABLE `highscore` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `game_name` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `score` int(3) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `highscore`
--

INSERT INTO `highscore` (`id`, `username`, `game_name`, `score`, `createdat`) VALUES
(863, 'aaa555', 'snake', 2, '2023-03-30 06:46:23'),
(864, 'aaa555', 'snake', 1, '2023-03-30 06:47:02'),
(865, 'aaa555', 'snake', 2, '2023-03-30 06:47:45'),
(866, 'aaa555', 'snake', 3, '2023-03-30 06:48:25'),
(867, 'aaa555', 'snake', 3, '2023-03-30 06:49:25'),
(868, 'aaa555', 'snake', 2, '2023-03-30 06:50:23'),
(869, 'asd123', 'snake', 2, '2023-04-04 06:58:58'),
(870, 'aa222', 'snake', 0, '2023-04-12 09:25:06'),
(871, 'aa222', 'snake', 7, '2023-04-12 09:25:24'),
(872, 'aa222', 'snake', 1, '2023-04-12 09:25:46');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `snake`
--

CREATE TABLE `snake` (
  `id` int(11) NOT NULL,
  `nev` text COLLATE utf8_hungarian_ci NOT NULL,
  `rekord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'asd123', '$2y$10$912qtihCUV1s5VOdp6qA3./iXJ03hU0ymh8DhBB.c4UatFbZf3IaO'),
(2, 'aaa', '$2y$10$rDWqBlAPiLOQs6UD6hi7PO1n0diuFZGgY9yaLzM8XPO/7OzVnhCdO'),
(3, 'sss', '$2y$10$ub82yCwVWpqoUiiy0ciRdujRNpNMMZrqWtY5jr/nzp.SILT57tAHi'),
(4, 'Uwukutya', '$2y$10$phKBH/wLQMIZ8dOmrfmeCewgT.hl4SLYDoDZsC3eyHrbC1cHagb5K'),
(5, 'asdas', '$2y$10$RSnUYLUq.gGulpGOEsVsj.qfY4Qg6pb2ul9fyW1lkTjsr4QEEhLi6'),
(6, 'asd1234', '$2y$10$6SJ44UPZmaOYAfk5QW3MKegQfsdFDVw7Fy69efxL7PcZqiKFk4Bt6'),
(7, 'aaa555', '$2y$10$eXe3j3smepte/V29Uv9edO3.LgjZUKF47G9yikACEspmUADObwgoi'),
(8, '44', '$2y$10$VQSn3Z8pHyxPw3CPu4vrh.65./uK5oHwq3RtTZRFaVsh.cjVIS1yC'),
(9, 'ddd', '$2y$10$RVUZ43sSeVPOSSwsUxLSR.n/FHReXo58VVUIQ1bFDbd8XJZDH0wze'),
(10, 'balint', '$2y$10$/19WrkD3nJmgX/7vuxyLKuNkEQwvwAFvNyWso7hX4fyrTNEP51GEu'),
(11, 'aa222', '$2y$10$vRpN/lbTn72wK6eIb3JBfuXI88.iFeJeCiHm4WYXENqeEKyQvfTx2');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `highscore`
--
ALTER TABLE `highscore`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `snake`
--
ALTER TABLE `snake`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `highscore`
--
ALTER TABLE `highscore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=873;

--
-- AUTO_INCREMENT a táblához `snake`
--
ALTER TABLE `snake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
