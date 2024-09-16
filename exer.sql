-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/09/2024 às 19:27
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
-- Banco de dados: `exer`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `energia`
--

CREATE TABLE `energia` (
  `id` int(11) NOT NULL,
  `nome_residente` varchar(255) NOT NULL,
  `mes` varchar(255) NOT NULL,
  `consumo_kwh` varchar(255) NOT NULL,
  `tarifa` varchar(255) NOT NULL,
  `fatura` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `energia`
--

INSERT INTO `energia` (`id`, `nome_residente`, `mes`, `consumo_kwh`, `tarifa`, `fatura`) VALUES
(1, 'vinny', 'agosto', '110', '4', '440');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `quantidade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`id`, `codigo`, `nome`, `quantidade`) VALUES
(1, '65642884654', 'LUIZÃO', 3),
(2, '54554656', 'framboesa', 245);

-- --------------------------------------------------------

--
-- Estrutura para tabela `frequencia`
--

CREATE TABLE `frequencia` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_dia` datetime NOT NULL,
  `presenca` enum('SIM,NÃO') NOT NULL,
  `porecentagem_presenca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `horas`
--

CREATE TABLE `horas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_hora_entrada` datetime NOT NULL,
  `data_hora_saida` datetime NOT NULL,
  `total_horas_diaria` varchar(255) DEFAULT NULL,
  `total_horas_semana` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `horas`
--

INSERT INTO `horas` (`id`, `nome`, `data_hora_entrada`, `data_hora_saida`, `total_horas_diaria`, `total_horas_semana`) VALUES
(41, 'Miguel ', '2024-09-05 07:57:00', '2024-09-05 21:07:00', NULL, NULL),
(42, 'Miguel ', '2024-09-05 07:57:00', '2024-09-05 21:07:00', '13', '65'),
(43, 'Miguel ', '2024-09-05 07:57:00', '2024-09-05 21:07:00', NULL, NULL),
(44, 'Miguel ', '2024-09-05 07:57:00', '2024-09-05 21:07:00', NULL, NULL),
(45, 'Miguel ', '2024-09-05 07:57:00', '2024-09-05 21:07:00', NULL, NULL),
(46, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(47, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(48, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(49, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(50, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(51, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(52, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(53, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(54, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(55, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(56, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(57, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(58, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(59, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(60, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(61, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(62, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(63, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(64, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(65, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', NULL, NULL),
(66, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(67, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(68, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(69, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(70, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(71, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(72, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(73, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(74, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(75, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(76, 'LUIZÃO', '2024-09-05 09:11:00', '2024-09-05 23:11:00', '14', '70'),
(77, 'Vinni', '2024-09-05 09:47:00', '2024-09-05 23:47:00', '14', '70'),
(78, '', '2024-09-05 08:48:00', '2024-09-05 12:48:00', '4', '20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefacasa`
--

CREATE TABLE `tarefacasa` (
  `id` int(11) NOT NULL,
  `tarefa` varchar(255) NOT NULL,
  `responsavel` varchar(255) NOT NULL,
  `data_inicio` datetime NOT NULL,
  `data_final` datetime NOT NULL,
  `status` enum('SIM,NÃO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `nome_comprador` varchar(255) NOT NULL,
  `datacompra` datetime NOT NULL,
  `nomeproduto` int(11) NOT NULL,
  `quantidade_estoque` int(5) NOT NULL,
  `vendarealizada` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id`, `nome_comprador`, `datacompra`, `nomeproduto`, `quantidade_estoque`, `vendarealizada`) VALUES
(5, 'rhrh', '2024-09-21 14:27:00', 0, 2, 'sim');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `energia`
--
ALTER TABLE `energia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `horas`
--
ALTER TABLE `horas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tarefacasa`
--
ALTER TABLE `tarefacasa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `energia`
--
ALTER TABLE `energia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `frequencia`
--
ALTER TABLE `frequencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `horas`
--
ALTER TABLE `horas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `tarefacasa`
--
ALTER TABLE `tarefacasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
