-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jan-2020 às 18:53
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco`
--

CREATE TABLE IF NOT EXISTS `banco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `banco`:
--

--
-- Extraindo dados da tabela `banco`
--

INSERT INTO `banco` VALUES
(1, 'Caixa Geral de Depósitos'),
(2, 'Milenium'),
(3, 'Novo Banco'),
(4, 'Banco CTT'),
(5, 'Caixa Agricula');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `banco` text NOT NULL,
  `valor` double NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `contas`:
--   `user`
--       `users` -> `id`
--

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` VALUES
(1, 'Poupança', 'CGD', 123456, 0),
(2, 'normal', 'cgd', 123456465, 0),
(3, 'asd', '1', 123.12, 0),
(4, 'asd', '1', 123.12, 0),
(5, 'asd', '1', 123.12, 0),
(6, 'asd', '1', 123.12, 0),
(7, 'asd', '1', 123.12, 0),
(8, 'asd', '1', 123.12, 0),
(9, 'da', '1', 123, 0),
(10, 'conta teste', '3', 123123.12, 0),
(12, 'treta', '1', 0.01, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET latin1 NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `password` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` VALUES
(0, 'daniel', 'daniel@mail.com', 'aa47f8215c6f30a0dcdb2a36a9f4168e'),
(9, 'daniel1', 'daniel1@mail.com', 'aa47f8215c6f30a0dcdb2a36a9f4168e');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contas`
--
ALTER TABLE `contas`
  ADD CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
