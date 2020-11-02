-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2020 às 07:43
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_fullstackphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `mensagem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(5) NOT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `nome_do_produto` varchar(100) DEFAULT NULL,
  `valor_unitario` varchar(100) DEFAULT NULL,
  `quantidade` int(5) DEFAULT NULL,
  `valor_total` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(5) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `preco_promocao` varchar(10) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `nome`, `descricao`, `preco`, `preco_promocao`, `imagem`) VALUES
(1, 'geladeiras', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', '9389.00', '5019.00', 'geladeira.jpg'),
(2, 'geladeiras', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', '6389.00', '5019.00', 'geladeira.jpg'),
(3, 'geladeiras', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', '6389.00', '5019.00', 'geladeira.jpg'),
(4, 'geladeiras', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', '6389.00', '5019.00', 'geladeira.jpg'),
(5, 'fogoes', 'Fogão 5 Bocas Brastemp - Acendimento Automático BFS5 NCRUNA', 'Fogão 5 Bocas Brastemp - Acendimento Automático BFS5 NCRUNA', '1599.00', '1394.00', 'fogão.jpg'),
(6, 'fogoes', 'Fogão 5 Bocas Brastemp - Acendimento Automático BFS5 NCRUNA', 'Fogão 5 Bocas Brastemp - Acendimento Automático BFS5 NCRUNA', '1599.00', '1394.00', 'fogão.jpg'),
(7, 'fogoes', 'Fogão 5 Bocas Brastemp - Acendimento Automático BFS5 NCRUNA', 'Fogão 5 Bocas Brastemp - Acendimento Automático BFS5 NCRUNA', '1599.00', '1394.00', 'fogão.jpg'),
(8, 'microondas', 'Microondas Philco 26L Prata PMO26ES 110V', 'Microondas Philco 26L Prata PMO26ES 110V', '699.00', '495.00', 'microondas.jpg'),
(9, 'microondas', 'Microondas Philco 26L Prata PMO26ES 110V', 'Microondas Philco 26L Prata PMO26ES 110V', '699.00', '495.00', 'microondas.jpg'),
(10, 'microondas', 'Microondas Philco 26L Prata PMO26ES 110V', 'Microondas Philco 26L Prata PMO26ES 110V', '699.00', '495.00', 'microondas.jpg'),
(11, 'lavaLoucas', 'Lava Louças PRCOP 504 - Prátika', 'Lava Louças PRCOP 504 - Prátika', '19500.00', '18430.00', 'lava-louça.jpg'),
(12, 'lavaLoucas', 'Lava Louças PRCOP 504 - Prátika', 'Lava Louças PRCOP 504 - Prátika', '19500.00', '18430.00', 'lava-louça.jpg'),
(13, 'lavaLoucas', 'Lava Louças PRCOP 504 - Prátika', 'Lava Louças PRCOP 504 - Prátika', '19500.00', '18430.00', 'lava-louça.jpg'),
(14, 'lavadoraDeRoupas', 'Lavadora Automatica Panasonic 12 Kg Na-F120b5g Cinza', 'Lavadora Automatica Panasonic 12 Kg Na-F120b5g Cinza', '1700.00', '1590.00', 'lavadora.jpg'),
(15, 'lavadoraDeRoupas', 'Lavadora Automatica Panasonic 12 Kg Na-F120b5g Cinza', 'Lavadora Automatica Panasonic 12 Kg Na-F120b5g Cinza', '1700.00', '1590.00', 'lavadora.jpg'),
(16, 'lavadoraDeRoupas', 'Lavadora Automatica Panasonic 12 Kg Na-F120b5g Cinza', 'Lavadora Automatica Panasonic 12 Kg Na-F120b5g Cinza', '1700.00', '1590.00', 'lavadora.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
