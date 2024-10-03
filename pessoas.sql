-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/10/2024 às 23:11
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
-- Banco de dados: `cadastro_de_pessoas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `cpf`, `sexo`, `data_nascimento`, `email`, `telefone`, `endereco`, `cidade`, `estado`) VALUES
(20, 'Miguel Costa', '51239875561', 'Masculino', '2002-08-20', 'miguel@gmail.com', '66548488484', 'Monte castelo', 'Fortaleza', 'PB'),
(22, 'Jose Ribamar', '155415115155', 'Masculino', '1999-02-01', 'ribamar@gmail.com', '(99) 99999-6525', 'avenida calhau', 'São Luís', 'MA'),
(23, 'Zé Rabelo', '51239875564', 'Masculino', '2024-09-10', 'glaude12@gmail.com', '(99)99999-9999', 'Parque Amazonas', 'Coelho Neto', 'PI'),
(26, 'Chico Carlos', '06656512697', 'Masculino', '2006-05-20', 'franciasoliveiraso@gmail.com', '(99)99999-6525', 'Loteamento Bom Sucesso', 'caxias', 'PE'),
(28, 'Maria', '08000654555', 'Feminino', '1999-04-20', 'franco@gmail.com', '(99)99999-6525', 'Curralinho da leonarda ', 'Duque Bacelar', 'MA'),
(30, 'RAIMUNDO CORREIA BASTOS', '0665651269792', 'Masculino', '2006-01-10', 'fhagasoliveiraso@gmail.com', '(99)99999-9998', 'Cocal', 'Duque Bacelar', 'ES'),


--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
