-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 10, 2019 alle 17:22
-- Versione del server: 10.3.16-MariaDB
-- Versione PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qr-code`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome-cliente` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `codice` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`id`, `nome-cliente`, `password`, `codice`, `url`) VALUES
(7, 'Salvatore', 'ciao', 'alviao1570703891', 'mugagency.com/it/'),
(8, 'Klizia', 'salvo', 'lizalv1570704514', 'http://centromedicotiziano.it'),
(9, 'Giuseppe', 'casa', 'iusasa1570708499', 'http://kgimpianti.it'),
(19, 'Simone', 'simone', 'imoimo1570710001', ''),
(20, 'Simone', 'simone', 'imoimo1570710128', 'https://sartoriacardona.it'),
(21, 'Antonio', 'antonio88', 'ntonto1570715337', 'http://hear-ir.com'),
(22, 'Salvatore', 'margherita', 'alvarg1570716697', 'mugagency.com/it/');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
