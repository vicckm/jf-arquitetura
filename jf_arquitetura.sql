-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2019 às 00:57
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jf_arquitetura`
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
  `status` tinyint(1) DEFAULT 0
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
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `perfil` enum('ADMINISTRADOR','PADRÂO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
