-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 27-Nov-2015 às 10:16
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `imobiliaria`
--
CREATE DATABASE IF NOT EXISTS `imobiliaria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `imobiliaria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'admin', 'admin@email.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE IF NOT EXISTS `aluguel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `aluguel`
--

INSERT INTO `aluguel` (`id`, `produto`, `usuario`) VALUES
(1, 6, 'ana@ana.com'),
(2, 18, 'ana@ana.com'),
(3, 18, 'ana@ana.com'),
(4, 19, 'ana@ana.com'),
(5, 6, 'ana@ana.com'),
(6, 18, 'ana@ana.com'),
(7, 18, 'ana@ana.com'),
(8, 19, 'ana@ana.com'),
(9, 18, 'ana@ana.com'),
(10, 18, 'ana@ana.com'),
(11, 18, 'ana@ana.com'),
(12, 12, 'ana@ana.com'),
(13, 12, 'joao@joao'),
(14, 18, 'ana@ana.com'),
(15, 18, 'ana@ana.com'),
(16, 18, 'ana@ana.com'),
(17, 18, 'ana@ana.com'),
(18, 18, 'ana@ana.com'),
(19, 18, 'ana@ana.com'),
(20, 18, 'ana@ana.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `produto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`produto_id`,`usuario_id`),
  KEY `fk_produto_has_usuario_usuario1_idx` (`usuario_id`),
  KEY `fk_produto_has_usuario_produto_idx` (`produto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `aluguel` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `preco`, `descricao`, `imagem`, `tipo`, `aluguel`) VALUES
(12, 'Jardim Imperial', 190000, '2 quartos, 1 suite, 78 a 90mÂ²', '4a8f47f025eaba677e0d1c843cf8d7e9.jpg', '2', 5000),
(13, 'Morumbi', 1200000, '2 a 3 quartos, 1 suite, 109mÂ²', 'e028b95a8e65e8c076d3e46653cbeb59.jpg', '2', 1000),
(14, 'Atlantida', 890000, '3 quartos, 1 suite, 100mÂ²', 'bb30d76210f46531feb94022a7e6956c.jpg', '2', 2000),
(15, 'Centro', 1800000, '2 quartos, 1 suite, 60 a 98mÂ²', 'beb2990a6e0bda95cd8995b533608e0f.jpg', '2', 1500),
(16, 'JaraguÃ¡', 1300000, '2 quartos, 1 suite, 109mÂ²', 'f40425be9b5cd8dcaeac158562fa33ca.jpg', '2', 1200),
(17, 'Jardim AmÃ©rica', 1200000, '2 a 3 quartos,1 suite, 100mÂ²', '49163e8149e705c0fbcedeb2d4defa50.jpg', '2', 3000),
(18, 'Vila JaguarÃ©', 89000, '3 quartos, 1 suite,123mÂ²', 'ab4059c2b7c0b7bd8c96f097286b9e50.jpg', '1', 998),
(19, 'Alto da Lapa', 100000, '3 quartos, 1 suite, 120mÂ²', 'ef904c5d4b8c529e27f4fd3ab8b7a8b9.jpg', '1', 1000),
(20, 'Jardim Enseada', 88000.9, '3 quartos, 1 suite, 125mÂ²', '4c32005baea9b732d3c192e74d034295.jpg', '1', 1000),
(21, 'Central Paque', 190000, '3 quartos, 1 suite, 125mÂ²', '185fe16dbe0e1d97e4a33ce3b9b74a64.jpg', '1', 999),
(23, 'Vila Bandeirantes', 90001, '4 quartos, 1 suite, 127mÂ²', '00d9a1deaeeb77f7c762ab7261831526.jpg', '1', 1200),
(24, 'Jardim Botanico', 100001, '4 quartos, 1 suite, 130mÂ²', 'a59398d5d2d32b967af994aac2a9cbb8.jpg', '1', 1000),
(25, 'Alto da GlÃ³ria', 2100000, '4 quartos, 1 suite, 135mÂ²', 'bc281618b181c27970da997c773dc51d.jpg', '1', 978),
(26, 'Vila Palmital', 95000.3, '3 quartos, 1 sute, 123mÂ²', '073d7279a4a2999f21241e26c7e79b38.jpg', '1', 963),
(30, 'Jardins', 140001, '123mÂ²', 'fa579918496837afb8d16f71766c0f1e.jpg', '3', 0),
(31, 'SÃ£o Judas', 98001, '127mÂ²', 'b32f3d86430ebd0bac992cb2211aa016.jpg', '3', 0),
(32, 'Vila Mariana', 95000.3, '127mÂ²', '3e1d0c421d2ad8f5861b9cdb18ffdc04.jpg', '3', 0),
(37, 'Vila SÃ£o Francisco', 87000.4, '129mÂ²', '5199800e2d90901bed040a4a23f3bbdb.jpg', '3', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `endereco`, `email`, `senha`) VALUES
(1, 'ana', 'aaaaa', 'ana@ana.com', '123'),
(2, 'aaaaaaaae', 'hhhhhhhhhhhhhh6', 'teste@testeee', '123456978'),
(3, 'teste', 'hahahha', 'teste2@teste2', '111'),
(4, 'joao', 'rua verde', 'joao@joao', '987');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_produto_has_usuario_produto` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_has_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
