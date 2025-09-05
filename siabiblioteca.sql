-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Jun-2019 às 23:52
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siabiblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `RM` int(11) NOT NULL,
  `Nome` varchar(500) NOT NULL,
  `Curso` varchar(500) NOT NULL,
  `Ano` int(2) NOT NULL,
  PRIMARY KEY (`RM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`RM`, `Nome`, `Curso`, `Ano`) VALUES
(14119, 'Lucas Ventavele', 'Ensino Médio\r\n', 3),
(14120, 'Altair Neto', 'Ensino Médio\r\n', 1),
(14121, 'Anna Júlia Francisco', 'Integrado de Informática\r\n', 2),
(14122, 'Vitória Rocha', 'Integrado de Administraçao\r\n', 3),
(14123, 'Joao Gabriel', 'Integrado de Mecanica\r\n', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `CodCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`CodCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`CodCategoria`, `Descricao`) VALUES
(1, 'língua portuguesa e literatura\r\n'),
(2, 'matemática'),
(3, 'biologia'),
(4, 'física'),
(5, 'química'),
(6, 'filosofia'),
(7, 'inglês'),
(8, 'geografia'),
(9, 'história'),
(10, 'sociologia'),
(11, 'espanhol'),
(12, 'educação artística\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

DROP TABLE IF EXISTS `emprestimo`;
CREATE TABLE IF NOT EXISTS `emprestimo` (
  `CodEmprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `CodLivroDidatico` int(11) NOT NULL,
  `RM` int(11) NOT NULL,
  `DataEmprestimo` date NOT NULL,
  PRIMARY KEY (`CodEmprestimo`),
  KEY `CodLivroDidatico` (`CodLivroDidatico`),
  KEY `RM` (`RM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `CodFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Senha` varchar(8) NOT NULL,
  PRIMARY KEY (`CodFuncionario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`CodFuncionario`, `Nome`, `Login`, `Senha`) VALUES
(1, 'SiaBiblioteca', 'biblioteca', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livrodidatico`
--

DROP TABLE IF EXISTS `livrodidatico`;
CREATE TABLE IF NOT EXISTS `livrodidatico` (
  `CodLivroDidatico` int(11) NOT NULL AUTO_INCREMENT,
  `CodCategoria` int(11) NOT NULL,
  `Volume` int(1) NOT NULL,
  `Ano` year(4) NOT NULL,
  `Editora` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CodigoBarra` varchar(100) NOT NULL,
  `Descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`CodLivroDidatico`),
  KEY `CodCategoria` (`CodCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livrodidatico`
--

INSERT INTO `livrodidatico` (`CodLivroDidatico`, `CodCategoria`, `Volume`, `Ano`, `Editora`, `Status`, `CodigoBarra`, `Descricao`) VALUES
(1, 1, 1, 2018, 'Atual Editora', 1, 'LPO1000001', 'Lingua Portuguesa'),
(2, 1, 2, 2018, 'Atual Editora', 1, 'LPO2000001', 'Lingua Portuguesa'),
(3, 1, 3, 2018, 'Atual Editora', 0, 'LPO3000001', 'Lingua Portuguesa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
