-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/06/2024 às 19:20
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
CREATE DATABASE `ficha_de_ocorrencia_base_de_dados`;

use `ficha_de_ocorrencia_base_de_dados`;
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_contatos`
--

CREATE TABLE `dados_contatos` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_contatos`
--


-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_de_ocorrencia`
--

CREATE TABLE `ficha_de_ocorrencia` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `localizacao` varchar(255) NOT NULL,
  `data_de_ocorrencia` date NOT NULL,
  `tipo_de_ocorrencia` varchar(45) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ficha_de_ocorrencia`
--


--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados_contatos`
--
ALTER TABLE `dados_contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ficha_de_ocorrencia`
--
ALTER TABLE `ficha_de_ocorrencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_contatos`
--
ALTER TABLE `dados_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ficha_de_ocorrencia`
--
ALTER TABLE `ficha_de_ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
