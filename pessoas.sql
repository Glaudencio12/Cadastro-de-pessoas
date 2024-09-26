-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/09/2024 às 01:55
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
(1, 'Francisco das Chagas de Oliveira', '51239875564', 'Masculino', '2001-04-10', 'francisco@gmail.com', '11561116155', 'rua número 6', 'Teresina', 'PI'),
(10, 'João Lucas', '1516186121518', 'Masculino', '2000-02-10', 'jooao2@gmail.com', '51151518112', 'Quiabos', 'Coelho neto', 'MA'),
(13, 'Raimundo', '15541511515', 'Masculino', '2000-02-03', 'raimundo2@gmail.com', '(99) 99999-6525', 'Penera', 'Fortaleza', 'PE'),
(14, 'André das chagas', '06656512697', 'Masculino', '1988-05-02', 'andre@gmail.com', '(99) 99999-6525', 'Avenida Manechal', 'caxias', 'RJ'),
(17, 'Gabriel Sousa Silva', '985289225228', 'Outro', '2008-01-08', 'G@gmail.com', '9844951818', 'Centro', 'Coelho Neto', 'RN');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
