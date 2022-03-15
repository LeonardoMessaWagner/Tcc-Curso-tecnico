-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jan-2021 às 19:50
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `starcraft`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `protoss`
--

CREATE TABLE `protoss` (
  `fotop` varchar(100) DEFAULT NULL,
  `nomep` varchar(100) NOT NULL,
  `descricaop` longtext DEFAULT NULL,
  `nomecad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `terrano`
--

CREATE TABLE `terrano` (
  `fotot` varchar(100) DEFAULT NULL,
  `nomet` varchar(100) NOT NULL,
  `descricaot` longtext DEFAULT NULL,
  `nomecad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `terrano`
--

INSERT INTO `terrano` (`fotot`, `nomet`, `descricaot`, `nomecad`) VALUES
('images/terrano/7b9c3c22311d73077db57bf92ab5d574.jpg', 'VCE', 'unidade basica terrana de coleta de recursos', 'LEONARDO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(100) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `adm` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `nome`, `senha`, `adm`, `id`) VALUES
('leonardowagner22@outlook.com', 'LEONARDO', '7da4de3d6b37aa3d0f6ec5d26b0faa0c', 1, 1),
('julio@gmail.com', 'JULIO2', '7da4de3d6b37aa3d0f6ec5d26b0faa0c', 0, 2),
('juninho@gmail.com', 'LEO', '7da4de3d6b37aa3d0f6ec5d26b0faa0c', 0, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `zerg`
--

CREATE TABLE `zerg` (
  `fotoz` varchar(100) DEFAULT NULL,
  `nomez` varchar(100) NOT NULL,
  `descricaoz` longtext DEFAULT NULL,
  `nomecad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `zerg`
--

INSERT INTO `zerg` (`fotoz`, `nomez`, `descricaoz`, `nomecad`) VALUES
('images/zerg/e06c5b67be5fa366cfe9418716b6deff.webp', 'Hidralisca', 'A hidralisca é uma unidade com ataque de longo alcance . O ataque rápido e alto dano da hidralisca, além de não depender de bônus para tipos de unidades específicos, o torna consistentemente eficaz em lidar com danos tanto em alvos terrestres quanto aéreos. Pode se transformar no furtivo após transformar o covil de hidralisca em um covil de furtivo.\r\n\r\n\r\n', 'LEONARDO'),
('images/zerg/01d0b866354eace2b6c0049e0f70db31.jpg', 'Zangão', 'O zangão é a unidade básica de trabalho dos zergs. Ele pode coletar Minerais e Gás Vespeno, bem como construir qualquer estrutura zerg ao custo de sua vida. zangões diferem de drones e VCEs porque eles só podem regenerar a saúde lentamente ao contrário dos escudos de recarga rápida do drone ou dos 45 pontos de vida reparáveis ​​do VCE.\r\n\r\nO Drone é uma unidade  que não recebe um aumento de velocidade por andar em gosma.', 'LEONARDO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `protoss`
--
ALTER TABLE `protoss`
  ADD PRIMARY KEY (`nomep`);

--
-- Índices para tabela `terrano`
--
ALTER TABLE `terrano`
  ADD PRIMARY KEY (`nomet`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `zerg`
--
ALTER TABLE `zerg`
  ADD PRIMARY KEY (`nomez`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
