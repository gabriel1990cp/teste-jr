-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2017 às 05:16
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_convenia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id`, `nome`, `email`) VALUES
(1, 'Gabriel Costa', 'gabriel.cp1990@gmail.com'),
(2, 'Maria Aparecida', 'mariaap@gmail.com'),
(3, 'João Carlos ', 'joaoc@gmail.com'),
(4, 'Manoel', 'manoel@gmail.com'),
(5, 'Henrique Leme ', 'henriqueleme@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores_cad`
--

CREATE TABLE `vendedores_cad` (
  `id` int(11) NOT NULL,
  `vendedor` int(10) DEFAULT NULL,
  `valor_comissao` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedores_cad`
--

INSERT INTO `vendedores_cad` (`id`, `vendedor`, `valor_comissao`) VALUES
(1, 3, 90.00),
(2, 5, 20.59),
(3, 2, 10000.00),
(4, 4, 800.00),
(5, 4, 10.00),
(6, 5, 250.00),
(7, 5, 89.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendedores_cad`
--
ALTER TABLE `vendedores_cad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vendedores_cad`
--
ALTER TABLE `vendedores_cad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
