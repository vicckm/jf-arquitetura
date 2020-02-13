-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2019 às 16:41
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jf_arquitetura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `cod` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `nome_cli` varchar(255) NOT NULL,
  `nome_predio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `andares` int(11) NOT NULL,
  `apart_salas` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `elevadores` int(11) DEFAULT NULL,
  `idade_pred` int(11) DEFAULT NULL,
  `telefone` char(12) NOT NULL,
  `cel` char(12) NOT NULL,
  `detalhes` varchar(255) DEFAULT NULL,
  `status` enum('Pendente','Feito') DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `observacoes` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`cod`, `tipo_id`, `nome_cli`, `nome_predio`, `email`, `andares`, `apart_salas`, `endereco`, `elevadores`, `idade_pred`, `telefone`, `cel`, `detalhes`, `status`, `data`, `observacoes`) VALUES
(1, 9, 'Samaritano', 'casa da maria', 'samar@gmail.com', 2, 5, 'rua da maria', 2, 5, '21 25555555', '21 988888888', '', 'Pendente', '2019-11-22 08:50:38', 'Muito bem feito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `nome`) VALUES
(1, 'Autovistoria Predial'),
(2, 'Laudo Técnico'),
(3, 'Laudo Técnico de Recebimento de Obra'),
(4, 'Laudo Técnico de Reforma'),
(5, 'Laudo Técnico de Vizinhança'),
(6, 'Laudo Técnico de Edifício em Garantia'),
(7, 'Vistoria Locativa'),
(8, 'Manutenção Predial'),
(9, 'Desenvolvimento de Projetos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `email`, `token`) VALUES
(3, 'admin', 'c93ccd78b2076528346216b3b2f701e6', 'wellersonramos360@gmail.com', 'b33c3ab97ebfb693bdbf5917fb1969b5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `tipo_id` (`tipo_id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
