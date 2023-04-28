-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Abr-2023 às 13:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carrapicho_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

CREATE TABLE `formacao` (
  `id_formacao` int(11) NOT NULL,
  `nomeCurso` varchar(45) NOT NULL,
  `instituicao` varchar(45) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_termino` date NOT NULL,
  `certificado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formacao`
--

INSERT INTO `formacao` (`id_formacao`, `nomeCurso`, `instituicao`, `dt_inicio`, `dt_termino`, `certificado`) VALUES
(10, 'Adestramento', 'Universidade cão', '2023-04-10', '2023-04-28', 'price-2.png'),
(13, 'Medicina Veterinária ', 'CEUB -DF', '2010-02-08', '2015-12-04', 'price-1.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `nome_foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto_pet`
--

CREATE TABLE `foto_pet` (
  `id_foto_pet` int(11) NOT NULL,
  `fotoPet` varchar(255) NOT NULL,
  `dataPet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE `tb_endereco` (
  `id_endereco` int(11) NOT NULL,
  `CEP` int(11) NOT NULL,
  `uf` char(2) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_endereco`
--

INSERT INTO `tb_endereco` (`id_endereco`, `CEP`, `uf`, `cidade`, `bairro`, `endereco`, `numero`) VALUES
(38, 72545509, 'DF', 'Brasília', 'Santa Maria', 'QR 315 Conjunto I', 11),
(42, 72161229, 'DF', 'Brasília', 'Taguatinga Norte (Taguatinga)', 'QNL 22 Via 29', 33),
(43, 73368586, 'DF', 'Brasília', 'Arapoanga (Planaltina)', 'Quadra 12 Conjunto H', 55),
(50, 73062410, 'DF', 'Brasília', 'Setor Oeste (Sobradinho II)', 'AR 14 Conjunto 10', 77),
(51, 73025, 'DF', 'Brasília', 'Sobradinho', 'Quadra 4 Conjunto D', 11),
(52, 73025, 'DF', 'Brasília', 'Sobradinho', 'Quadra 4 Conjunto E', 88);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pet`
--

CREATE TABLE `tb_pet` (
  `id_pet` int(11) NOT NULL,
  `nome_pet` varchar(45) NOT NULL,
  `especie_pet` varchar(40) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `raca` varchar(45) NOT NULL,
  `vacina` varchar(45) NOT NULL,
  `obs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicocuidador`
--

CREATE TABLE `tb_servicocuidador` (
  `id_servicoCuidador` int(11) NOT NULL,
  `petSitter` varchar(10) NOT NULL,
  `hospedeiro` varchar(15) NOT NULL,
  `passeador` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_servicocuidador`
--

INSERT INTO `tb_servicocuidador` (`id_servicoCuidador`, `petSitter`, `hospedeiro`, `passeador`) VALUES
(43, '1', '0', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicos`
--

CREATE TABLE `tb_servicos` (
  `id_servicos` int(11) NOT NULL,
  `tpProfissional` varchar(45) NOT NULL,
  `tpServico` varchar(45) NOT NULL,
  `descricao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicovet`
--

CREATE TABLE `tb_servicovet` (
  `id_servicoVet` int(11) NOT NULL,
  `CRMV` varchar(15) NOT NULL,
  `vacina` varchar(20) DEFAULT NULL,
  `consulta` varchar(20) DEFAULT NULL,
  `exame` varchar(20) DEFAULT NULL,
  `emergencia` varchar(20) DEFAULT NULL,
  `plantao` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_servicovet`
--

INSERT INTO `tb_servicovet` (`id_servicoVet`, `CRMV`, `vacina`, `consulta`, `exame`, `emergencia`, `plantao`) VALUES
(4, '0009437/UF', '1', '1', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tpuser`
--

CREATE TABLE `tb_tpuser` (
  `id_tpuser` int(11) NOT NULL,
  `tutor` varchar(20) NOT NULL,
  `cuidador` varchar(20) NOT NULL,
  `adestrador` varchar(20) NOT NULL,
  `veterinario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tpuser`
--

INSERT INTO `tb_tpuser` (`id_tpuser`, `tutor`, `cuidador`, `adestrador`, `veterinario`) VALUES
(26, 'tutor', '', '', ''),
(27, 'cuidador', '', '', ''),
(28, 'adestrador', '', '', ''),
(35, 'veterinario', '', '', ''),
(36, 'tutor', '', '', ''),
(37, 'tutor', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `CPF_user` varchar(20) NOT NULL,
  `nome_user` varchar(45) NOT NULL,
  `fone_user` varchar(20) NOT NULL,
  `email_user` varchar(120) NOT NULL,
  `senha_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `CPF_user`, `nome_user`, `fone_user`, `email_user`, `senha_user`) VALUES
(35, '45412046223', 'Marcos Alvarenga', ' 61 98885-6376', 'marcosag@gmail.com', '52cfbcfa9553d6eb90947dfc2fc38c5a'),
(36, '87716862820', 'Andressa Doriz', '61 99876-8882', 'andressadz@gmail.com', 'b940452fe5805d8c4a0ea85a41a68d9a'),
(37, '81584706538', 'Thales Ribeiro', '61 97483-7850', 'thalesrb@gmail.com', '71f31ebc8f719ee8609b65bdc6b58ce8'),
(46, '43831364788', 'Luana Solles', '61 97303-6571', 'luanasol@gmail.com', 'c701349871b17e6ee546da02e1162a96'),
(47, '003.220.991-61', 'Isabelle Leal Silva Nunes', '61 99804-0347', 'isabllelsn@gmail.com', '3e126fa93d998d8b1e56b68d75abf269'),
(48, '498.302.944-56', 'Esperança', '61 98753-7822', 'esperanca@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`id_formacao`);

--
-- Índices para tabela `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Índices para tabela `foto_pet`
--
ALTER TABLE `foto_pet`
  ADD PRIMARY KEY (`id_foto_pet`);

--
-- Índices para tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices para tabela `tb_pet`
--
ALTER TABLE `tb_pet`
  ADD PRIMARY KEY (`id_pet`);

--
-- Índices para tabela `tb_servicocuidador`
--
ALTER TABLE `tb_servicocuidador`
  ADD PRIMARY KEY (`id_servicoCuidador`);

--
-- Índices para tabela `tb_servicos`
--
ALTER TABLE `tb_servicos`
  ADD PRIMARY KEY (`id_servicos`);

--
-- Índices para tabela `tb_servicovet`
--
ALTER TABLE `tb_servicovet`
  ADD PRIMARY KEY (`id_servicoVet`),
  ADD UNIQUE KEY `CRMV` (`CRMV`);

--
-- Índices para tabela `tb_tpuser`
--
ALTER TABLE `tb_tpuser`
  ADD PRIMARY KEY (`id_tpuser`);

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `CPF_dono` (`CPF_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formacao`
--
ALTER TABLE `formacao`
  MODIFY `id_formacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `foto_pet`
--
ALTER TABLE `foto_pet`
  MODIFY `id_foto_pet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `tb_servicocuidador`
--
ALTER TABLE `tb_servicocuidador`
  MODIFY `id_servicoCuidador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `tb_servicos`
--
ALTER TABLE `tb_servicos`
  MODIFY `id_servicos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_servicovet`
--
ALTER TABLE `tb_servicovet`
  MODIFY `id_servicoVet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_tpuser`
--
ALTER TABLE `tb_tpuser`
  MODIFY `id_tpuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
