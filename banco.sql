-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Nov 20, 2015 as 02:28 PM
-- Versão do Servidor: 5.1.54
-- Versão do PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `projeto_basquete`
--
CREATE DATABASE `projeto_basquete` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `projeto_basquete`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE IF NOT EXISTS `fornecedor` (
  `cod_forn` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logradouro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `UF` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `CEP` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj_forn` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_forn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`cod_forn`, `razao_social`, `logradouro`, `UF`, `CEP`, `cnpj_forn`, `telefone`, `email`) VALUES
(4, 'Nike', 'Fifth St, San Francisco, 500', 'California(US)', '321434-343', '32432434/0001-22', '+22 555 0091 442', 'nike@nikeus.com'),
(5, 'Under Armour', 'Le Puy En Valley Rue, 25', 'Marseille(FR)', '44421223022', '39777334/0001-22', '+31 554 0221 998', 'ua@uaofficial.fr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `cod_prod` smallint(6) NOT NULL AUTO_INCREMENT,
  `cod_forn` int(11) DEFAULT NULL,
  `nome` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade_estoque` int(30) NOT NULL,
  `tipo_prod` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cod_prod`),
  KEY `cod_forn` (`cod_forn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_prod`, `cod_forn`, `nome`, `quantidade_estoque`, `tipo_prod`, `descricao`) VALUES
(4, 10231, 'Shoes Air Jordan XX9', 20, 'Tênis', 'Um tênis poderoso, capaz de te proporcionar grandes emoções. By Nike Air Jordan'),
(3, 22091, 'Cone p/ Treino Hallway', 70, 'Treino', 'Cone usado para treinos de velocidade e melhorar o drible.'),
(5, 56523, 'Under Armor: Curry One', 17, 'Tênis', 'Under Armor By Stephen Curry: Controle o jogo e sinta se na sua maxima performance com Curry One'),
(6, 12334, 'Adidas Isolation 2 Low', 20, 'Tênis', 'Isolation: Pra você que quer ter uma experiencia incrível e emocionante dentro de seus pés'),
(7, 1999789, 'Meias Artengo', 54, 'Acessórios', 'Meias confortáveis para te ajudar no jogo!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `senha`) VALUES
(2, 'luigi', '123'),
(3, 'rodrigo z', '123'),
(9, 'Renato', '123'),
(5, 'joão paulo', '123'),
(6, 'João Antônio', '123'),
(10, 'Rodrigo Zanco', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `cod_venda` smallint(6) NOT NULL AUTO_INCREMENT,
  `cod_prod` int(100) DEFAULT NULL,
  `quantidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `data` date DEFAULT NULL,
  `cpf_cliente` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnpj_loja` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cod_venda`),
  KEY `cod_prod` (`cod_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `vendas`
--

