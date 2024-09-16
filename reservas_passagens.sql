-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/09/2024 às 12:35
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fixacao-exercicios`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `reservas_passagens`
--

CREATE TABLE `reservas_passagens` (
  `id_reserva` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `tipo_transporte` enum('Ônibus','Trem','Avião') NOT NULL,
  `assento_numero` int(11) NOT NULL,
  `data_hora` datetime NOT NULL,
  `assento_reservado` enum('SIM','NAO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reservas_passagens`
--

INSERT INTO `reservas_passagens` (`id_reserva`, `nome_usuario`, `tipo_transporte`, `assento_numero`, `data_hora`, `assento_reservado`) VALUES
(1, 'Thiago', 'Ônibus', 1, '2007-05-15 04:00:00', 'SIM'),
(2, '', 'Ônibus', 20, '2024-09-12 13:00:00', 'SIM'),
(3, 'THiago2', 'Ônibus', 20, '2007-05-15 16:00:00', 'SIM'),
(4, 'Luizão', 'Ônibus', 20, '0000-00-00 00:00:00', 'SIM'),
(5, '', 'Ônibus', 0, '0000-00-00 00:00:00', 'SIM'),
(6, 'Juis', 'Ônibus', 40, '2007-05-15 07:00:00', 'SIM');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `reservas_passagens`
--
ALTER TABLE `reservas_passagens`
  ADD PRIMARY KEY (`id_reserva`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reservas_passagens`
--
ALTER TABLE `reservas_passagens`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
