-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2019 às 07:34
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
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`cod`, `tipo_id`, `nome_cli`, `nome_predio`, `email`, `andares`, `apart_salas`, `endereco`, `elevadores`, `idade_pred`, `telefone`, `cel`, `detalhes`, `status`) VALUES
(1, 1, 'Vanisher Oliver da Silva', 'Condomínio Laranjeiras', 'vanisher@gmail.com', 10, 20, 'Rua das Laranjeiras, 231', 2, 30, '21 32058500', '21 974563025', '', 0),
(17, 8, 'Wellerson', 'hshdshd', 'welleroson@ghj.com', 5, 3, 'ojgjsefjs', 5, 2, '21 22222222', '21 987655433', 'drhry', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` varchar(255) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `titulo`, `descricao`) VALUES
('', 'Autovistoria Predial', 'A vistoria técnica, também conhecida como autovistoria, é uma inspeção predial realizada por profissional legalmente habilitado, com objetivo de avaliar o estado geral da edificação no que diz respeito a sua conservação, estabilidade e segurança.'),
('', 'Vistoria Locativa', 'A Vistoria Locativa registra para o locador e locatário o estado imóvel antes e depois do período de locação. Evita dúvidas e incertezas que normalmente ocorrem quando é feita a vistoria e possibilita a comparação com o estado inicial do imóvel.'),
('', 'Laudo Técnico', 'É de fundamental importância porque possibilita detectar a ocorrência de possíveis patologias construtivas nas diversas edificações, independente da idade do imóvel. Nele são apontados todos os problemas que estejam ou venham a causar danos de natureza materiais, pessoas e de responsabilidades civis.\r\n\r\n'),
('4', 'Laudo Técnico de Recebimento de Obra', 'Trata-se de uma vistoria que tem como objetivo formalizar a entrega da obra junto ao construtor, mediante verificação do seu estado construtivo, bem como de seus sistemas instalados, de forma a analisar a sua conformidade técnica com projetos, memoriais descritivos e demais documentação apresentada previamente.');

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
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`cod`);

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
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
