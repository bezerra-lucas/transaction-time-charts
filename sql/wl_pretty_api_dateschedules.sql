-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Dez-2022 às 11:41
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `local_wordpress_test_env`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `wl_pretty_api_dateschedules`
--

CREATE TABLE `wl_pretty_api_dateschedules` (
  `rdate` date NOT NULL,
  `venue` varchar(255) NOT NULL,
  `raceno` varchar(255) NOT NULL,
  `title1` text DEFAULT NULL,
  `title2` text DEFAULT NULL,
  `starttime` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `wl_pretty_api_dateschedules`
--

INSERT INTO `wl_pretty_api_dateschedules` (`rdate`, `venue`, `raceno`, `title1`, `title2`, `starttime`, `created_at`) VALUES
('2022-09-11', 'ST', '1', 'title one-1xxxxxxxxxx', 'title two-1xxxxxxxxxx', '13:00', '2022-10-05 18:25:50'),
('2022-09-11', 'ST', '2', 'title one-2xxxxxxxxxx', 'title two-2xxxxxxxxxx', '13:30', '2022-10-05 18:25:50'),
('2022-09-11', 'ST', '3', 'title one-3xxxxxxxxxx', 'title two-3xxxxxxxxxx', '14:00', '2022-10-05 18:25:50'),
('2022-09-11', 'ST', '4', 'title one-4xxxxxxxxxx', 'title two-4xxxxxxxxxx', '14:30', '2022-10-05 18:25:50'),
('2022-09-11', 'ST', '5', 'title one-5xxxxxxxxxx', 'title two-5xxxxxxxxxx', '15:05', '2022-10-05 18:25:50'),
('2022-09-11', 'ST', '6', 'title one-6xxxxxxxxxx', 'title two-6xxxxxxxxxx', '15:40', '2022-10-05 18:25:50'),
('2022-09-11', 'ST', '7', 'title one-7xxxxxxxxxx', 'title two-7xxxxxxxxxx', '17:50', '2022-10-05 18:25:50'),
('2022-09-11', 'VV', '1', 'title one-1xxxxxxxxxx', 'title two-1xxxxxxxxxx', '16:10', '2022-10-05 18:25:50'),
('2022-09-11', 'VV', '2', 'title one-2xxxxxxxxxx', 'title two-2xxxxxxxxxx', '17:15', '2022-10-05 18:25:50'),
('2022-09-11', 'VV', '3', 'title one-3xxxxxxxxxx', 'title two-3xxxxxxxxxx', '16:40', '2022-10-05 18:25:50'),
('2022-09-14', 'HV', '1', 'title one-1xxxxxxxxxx', 'title two-1xxxxxxxxxx', '19:15', '2022-10-05 18:25:50'),
('2022-09-14', 'HV', '2', 'title one-2xxxxxxxxxx', 'title two-2xxxxxxxxxx', '19:45', '2022-10-05 18:25:50'),
('2022-09-14', 'HV', '3', 'title one-3xxxxxxxxxx', 'title two-3xxxxxxxxxx', '20:15', '2022-10-05 18:25:50'),
('2022-09-14', 'HV', '4', 'title one-4xxxxxxxxxx', 'title two-4xxxxxxxxxx', '20:45', '2022-10-05 18:25:50'),
('2022-09-14', 'HV', '5', 'title one-5xxxxxxxxxx', 'title two-5xxxxxxxxxx', '21:15', '2022-10-05 18:25:50'),
('2022-09-14', 'HV', '6', 'title one-6xxxxxxxxxx', 'title two-6xxxxxxxxxx', '21:45', '2022-10-05 18:25:50'),
('2022-09-14', 'HV', '7', 'title one-7xxxxxxxxxx', 'title two-7xxxxxxxxxx', '22:15', '2022-10-05 18:25:50'),
('2022-09-14', 'HV', '8', 'title one-8xxxxxxxxxx', 'title two-8xxxxxxxxxx', '22:50', '2022-10-05 18:25:50');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `wl_pretty_api_dateschedules`
--
ALTER TABLE `wl_pretty_api_dateschedules`
  ADD PRIMARY KEY (`rdate`,`venue`,`raceno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
