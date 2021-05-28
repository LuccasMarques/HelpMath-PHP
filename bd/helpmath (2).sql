-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2017 às 11:03
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpmath`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `idfase` int(11) NOT NULL,
  `fase` varchar(50) CHARACTER SET latin1 NOT NULL,
  `expNecessaria` int(11) NOT NULL,
  `imagem` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`idfase`, `fase`, `expNecessaria`, `imagem`) VALUES
(2, 'Soma', 0, ''),
(3, 'SubtraÃ§Ã£o', 50, ''),
(4, 'MultiplicaÃ§Ã£o', 100, ''),
(5, 'DivisÃ£o', 100, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patchnotes`
--

CREATE TABLE `patchnotes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patchnotes`
--

INSERT INTO `patchnotes` (`id`, `titulo`, `texto`, `data`) VALUES
(1, 'PATCH NOTES 0.0.1', 'Foi criado o login para o usuario poder acessar', '2017-10-12 10:57:23'),
(2, 'Patch Notes 0.0.2', 'Foi alterado para o CAderno de campó', '2017-11-09 20:08:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `questao` text NOT NULL,
  `id_fase` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `pesoNegativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `nome`, `questao`, `id_fase`, `peso`, `pesoNegativo`) VALUES
(1, 'Pergunta  1', 'JoÃ£ozinho tem uma cesta com 5 maÃ§Ã£s, porÃ©m a vÃ³ de JoÃ£ozinho deu a ele mais 4 maÃ§Ã£s. Quantas maÃ§Ã£s JoÃ£ozinho ficou?', 2, 10, 5),
(2, 'Pergunta 2', 'JoÃ£ozinho tem uma caixa com 7 bonecos, porÃ©m a mÃ£e de JoÃ£ozinho deu a ele mais 3 bonecos. Quantos bonecos JoÃ£ozinho ficou?', 2, 10, 5),
(3, 'Pergunta 3 ', 'Ericzinho pediu a sua mÃ£e um par de chinelos do corinthians, porÃ©m eric ja tinha um par de chinelos. Quantos pares de chinelos eric ficou?', 2, 10, 5),
(4, 'Pergunta 4', 'Luccas tinha 59 trabalhos para entregar, porÃ©m na escola Luccas recebeu em uma semana mais 16 trabalhos. Quantos trabalhos Luccas tinha que entregar?', 2, 10, 5),
(5, 'Pergunta 5', 'Guilherme tinha 3 cachorros, porÃ©m Guilherme resolveu adotar mais 2 cachorros. Quantos cachorros Guilherme ficou?', 2, 10, 5),
(7, 'Pergunta 1', 'Luccas tinha 4 cachorros e sua prima carente queria 1, Luccas como um bom primo deu um cachorro para sua prima. Quantos cachorros Luccas ficou?', 3, 10, 5),
(8, 'Pergunta 2', 'Francisco tem 4 brinquedos, porÃ©m sua colega Ingrid pediu um brinquedo emprestado. Quantos brinquedos Francisco tem agora?', 3, 10, 5),
(9, 'Pergunta 6', 'Francisco tem 4 brinquedos, porÃ©m sua colega Carol deu a ele mais um brinquedo de presente. Quantos brinquedos Francisco tem agora?', 2, 10, 5),
(10, 'Pergunta 7', 'O diretor Lucio tinha 7 professores, demitiu 2. Quantos ele ficou?', 3, 10, 5),
(13, 'TESTE 02', 'TESTE 0222', 5, 100, 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `resposta` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `correta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `resposta`, `id_pergunta`, `correta`) VALUES
(1, 4, 1, 0),
(2, 6, 1, 0),
(3, 10, 1, 0),
(4, 9, 1, 1),
(5, 4, 2, 0),
(6, 8, 2, 0),
(7, 9, 2, 0),
(8, 10, 2, 1),
(9, 2, 3, 1),
(10, 5, 3, 0),
(11, 15, 3, 0),
(12, 1, 3, 0),
(13, 69, 4, 0),
(14, 40, 4, 0),
(15, 75, 4, 1),
(16, 73, 4, 0),
(17, 7, 5, 0),
(18, 5, 5, 1),
(19, 10, 5, 0),
(20, 8, 5, 0),
(21, 7, 7, 0),
(22, 3, 7, 1),
(23, 5, 7, 0),
(24, 1, 7, 0),
(25, 3, 8, 1),
(26, 5, 8, 0),
(27, 12, 8, 0),
(28, 9, 8, 0),
(33, 3, 9, 0),
(34, 5, 9, 1),
(35, 2, 9, 0),
(36, 1, 9, 0),
(37, 6, 10, 0),
(38, 5, 10, 1),
(39, 2, 10, 0),
(40, 12, 10, 0),
(41, 2, 13, 0),
(42, 3, 13, 0),
(43, 4, 13, 0),
(44, 0, 13, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `idade` date NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `exp` int(11) NOT NULL,
  `status` char(1) NOT NULL,
  `nivel` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nome`, `idade`, `cidade`, `image`, `exp`, `status`, `nivel`) VALUES
(33, 'asd123@123.com', '$2y$10$g25H/B6yNN1jXZRvLNma8OCxHaMTCrNmhtifCRyGkxqcKJHzVRiQO', 'oiahroiaw', '1999-10-03', 'guaiba', 'IMG_43815158691330.jpeg', 0, '', ''),
(34, 'bropmarx@gmail.com', '$2y$10$h42aqHurQWojnfe.JxfJV.luUE33J7l41ysj4Nq9xiFF3kWB4PN4G', 'Luccas Marques', '1999-10-03', 'GuaÃ­ba', '20150910_202530.jpg', 70, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idfase`);

--
-- Indexes for table `patchnotes`
--
ALTER TABLE `patchnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perguntas_idfase` (`id_fase`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resposta_pergunta` (`id_pergunta`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `idfase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patchnotes`
--
ALTER TABLE `patchnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD CONSTRAINT `perguntas_idfase` FOREIGN KEY (`id_fase`) REFERENCES `materias` (`idfase`);

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `resposta_pergunta` FOREIGN KEY (`id_pergunta`) REFERENCES `perguntas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
