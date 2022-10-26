-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2022 às 03:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `planets`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `planets`
--

CREATE TABLE `planets` (
  `id_planet` int(11) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `planet` varchar(50) DEFAULT NULL,
  `distance` bigint(20) DEFAULT NULL,
  `discoverer` varchar(30) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `planets`
--

INSERT INTO `planets` (`id_planet`, `color`, `planet`, `distance`, `discoverer`, `country`) VALUES
(1, 'Brown', '200000', 0, 'Leandro', 'Brasil'),
(2, 'Blue', 'Netuno', 200000, 'Natan', 'Argentina'),
(3, 'Blue', 'ascasc', 256165, 'Natan', 'Argentina'),
(4, 'ascasc', 'Netuno', 200000, 'ascasc', 'ascasc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'fatec', 'araras');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id_planet`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `planets`
--
ALTER TABLE `planets`
  MODIFY `id_planet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
