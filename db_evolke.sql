-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 08:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evolke`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `documento` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_aluno`
--

INSERT INTO `tb_aluno` (`id_aluno`, `nome`, `documento`) VALUES
(1, 'Ivanir Freitas Lopes', 403770211),
(2, 'Everton Diogo Viana', 640287417),
(3, 'Richard Viana da Silva', 2147483647),
(4, 'Leandro Ramos Ortega Nunes', 2147483647),
(5, 'Senir da Aparecida Alves Durão', 2147483647),
(6, 'Alexandre Schimits Vilhagra', 2147483647),
(7, 'Andreilson de Almeida Matos', 2147483647),
(8, 'Lucas Carvalho', 314159265),
(9, 'Maria Eduarda', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tb_curso`
--

CREATE TABLE `tb_curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nivel` varchar(30) NOT NULL,
  `datainicio` date NOT NULL,
  `datafinal` date NOT NULL,
  `media` decimal(10,0) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_curso`
--

INSERT INTO `tb_curso` (`id_curso`, `nome`, `nivel`, `datainicio`, `datafinal`, `media`, `id_empresa`) VALUES
(1, 'Desenvolvedor Front-End', 'Iniciante', '2024-05-13', '2024-05-15', '6', 1),
(2, 'Desenvolvedor Front-End', 'intermediário', '2024-05-16', '2024-05-23', '7', 1),
(3, 'Desenvolvedor Front-End', 'Avançado', '2024-05-24', '2024-05-31', '8', 2),
(4, 'Desenvolvedor Back-End', 'Iniciante', '2024-05-13', '2024-05-16', '6', 1),
(5, 'Desenvolvedor Back-End', 'Intermediário', '2024-05-17', '2024-05-23', '7', 1),
(6, 'Desenvolvedor Back-End', 'Avançado', '2024-05-24', '2024-05-31', '8', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cep` int(8) NOT NULL,
  `logadouro` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_empresa`
--

INSERT INTO `tb_empresa` (`id_empresa`, `nome`, `cep`, `logadouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`) VALUES
(1, 'Web Cursos', 20201121, 'Rua XXXX', 23, 'bloco x casa y', 'Méier', 'Rio de Janeiro', 'Rio de Janeiro'),
(2, 'TI International Enterprise', 12312342, 'Rua Reta', 42, 'Rancho k', 'Old Town', 'Zurich', 'Suíça');

-- --------------------------------------------------------

--
-- Table structure for table `tb_turma`
--

CREATE TABLE `tb_turma` (
  `id_turma` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `media` decimal(10,0) NOT NULL,
  `nota` decimal(10,0) NOT NULL,
  `situacao` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_turma`
--

INSERT INTO `tb_turma` (`id_turma`, `nome`, `id_curso`, `id_aluno`, `media`, `nota`, `situacao`) VALUES
(1, 'Turma Manhã 101', 1, 1, '6', '8', 'aprovado'),
(2, 'Turma Manhã 102', 2, 2, '7', '5', 'reprovado'),
(5, 'Turma Manhã 101', 1, 3, '6', '8', 'aprovado'),
(6, 'Turma Manhã 101', 1, 4, '6', '5', 'reprovado'),
(7, 'Turma Manhã 101', 1, 5, '6', '8', 'aprovado'),
(8, 'Turma Manhã 101', 1, 7, '6', '9', 'aprovado'),
(9, 'Turma Manhã 101', 1, 8, '6', '9', 'aprovado'),
(10, 'Turma Manhã 101', 1, 6, '6', '10', 'aprovado'),
(11, 'Turma Manhã 101', 1, 9, '6', '10', 'aprovado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_tb_curso_tb_empresa` (`id_empresa`);

--
-- Indexes for table `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD PRIMARY KEY (`id_turma`),
  ADD KEY `fk_tb_turma_tb_curso` (`id_curso`),
  ADD KEY `fk_tb_turma_tb_aluno` (`id_aluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_turma`
--
ALTER TABLE `tb_turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD CONSTRAINT `fk_tb_curso_tb_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresa` (`id_empresa`);

--
-- Constraints for table `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD CONSTRAINT `fk_tb_turma_tb_aluno` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`id_aluno`),
  ADD CONSTRAINT `fk_tb_turma_tb_curso` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
