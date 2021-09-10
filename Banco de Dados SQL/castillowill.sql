-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2019 às 23:05
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `castillowill`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `IDcargo` int(11) NOT NULL,
  `descricaocargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`IDcargo`, `descricaocargo`) VALUES
(1, 'Recepcionista'),
(2, 'Gerente'),
(3, 'Limpeza'),
(4, 'Contador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id` int(11) NOT NULL,
  `nome_paciente` varchar(75) COLLATE utf8_bin NOT NULL,
  `nome_medico` varchar(75) COLLATE utf8_bin NOT NULL,
  `data_consulta` varchar(20) COLLATE utf8_bin NOT NULL,
  `hora_inicio` varchar(10) COLLATE utf8_bin NOT NULL,
  `hora_final` varchar(10) COLLATE utf8_bin NOT NULL,
  `consulta` varchar(90) COLLATE utf8_bin NOT NULL,
  `observacoes` varchar(150) COLLATE utf8_bin NOT NULL,
  `status` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`id`, `nome_paciente`, `nome_medico`, `data_consulta`, `hora_inicio`, `hora_final`, `consulta`, `observacoes`, `status`) VALUES
(1, 'Ana Paula Teixeira Amaral', 'Endocrinologista', '2019-10-15', '10:30', '11:15', 'Endocrinologista', 'Paciente quer tratar problema de obesidade', 'Confirmada'),
(2, 'Bernardo Teixeira Gomes', 'Davi Azevedo Oliveira', '2019-10-15', '14:00', '15:00', 'Cardiologista', 'Realizar alguns exames', 'Confirmada'),
(3, 'Maria Teixeira Amaral', 'Gabrielly Regina Marcela Sales', '2019-10-16', '13:15', '14:00', 'Ginecologista', 'Exames a tratar com o mÃ©dico', 'Marcada - Aguardando'),
(4, 'Kauan Sousa', 'Isabelle Simone Melissa de Paula', '2019-10-16', '16:00', '16:30', 'Nutricionista', 'Busca auxilio em sua alimentaÃ§Ã£o', 'Suspendida'),
(5, 'Helena Machado Amaral', 'Enzo OtÃ¡vio Bento da Cruz', '2019-10-16', '17:00', '17:30', 'Ginecologista', 'Exames a tratar com o mÃ©dico', 'Marcada - Aguardando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id` int(11) NOT NULL,
  `descricaoespecialidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`id`, `descricaoespecialidade`) VALUES
(1, 'Ginecologista'),
(2, 'Cardiologista'),
(3, 'Nutricionista'),
(4, 'Endocrinologista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(23) COLLATE utf8_bin NOT NULL,
  `data_nascimento` varchar(15) COLLATE utf8_bin NOT NULL,
  `rg` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(30) COLLATE utf8_bin NOT NULL,
  `celular` varchar(30) COLLATE utf8_bin NOT NULL,
  `cpf_funcionario` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(75) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(50) COLLATE utf8_bin NOT NULL,
  `rua` varchar(80) COLLATE utf8_bin NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(50) COLLATE utf8_bin NOT NULL,
  `complemento` varchar(50) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(30) COLLATE utf8_bin NOT NULL,
  `estado` varchar(20) COLLATE utf8_bin NOT NULL,
  `cep` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `sexo`, `data_nascimento`, `rg`, `telefone`, `celular`, `cpf_funcionario`, `email`, `cargo`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `cep`) VALUES
(1, 'Heitor Amaral Gomes', 'Masculino', '1968-01-07', '91.122.534-1', '(11) 8288-0470', '(11) 97431-5925', '341.510.195-96', 'heitor.gomes@gmail.com', 'Contador', 'Rua Ãlvaro Anes', 893, 'Pinheiros', 'Apartamento 12, 2Âº Andar', 'SÃ£o Paulo', 'SÃ£o Paulo', '05421-010'),
(2, 'JoÃ£o Amaral Teixeira', 'Masculino', '1993-10-24', '91.122.534-1', '(19) 2817-8925', '(19) 92939-9815', '780.416.058-50', 'joÃ£o.teixeira@globo.com', 'Limpeza', 'PraÃ§a Anita Garibaldi', 892, 'Centro', '', 'Campinas', 'SÃ£o Paulo', '13015-180'),
(3, 'Guilherme Ducati Gomes', 'Masculino', '1962-10-26', '4.032.894-40', '(19) 1203-0572', '(19) 93597-9691', '644.722.657-10', 'guilherme.gomes@gmail.com', 'Gerente', 'PraÃ§a Anita Garibaldi', 944, 'Centro', '', 'Campinas', 'SÃ£o Paulo', '13015-180'),
(4, 'Mariana Gomes Amaral', 'Feminino', '1975-01-01', '2.977.269', '(11) 8667-2054', '(11) 94711-5083', '778.978.474-97', 'mariana.amaral@uol.com.br', 'Recepcionista', 'Parque AnhangabaÃº', 397, 'Centro', '', 'SÃ£o Paulo', 'SÃ£o Paulo', '01007-040'),
(5, 'Isabela Teixeira Machado', 'Feminino', '1985-09-21', '91.122.534-1', '(11) 3128-0233', '(11) 92259-5104', '184.608.717-11', 'isabela.machado@hotmail.com', 'Recepcionista', 'Rua Anita Ferraz', 730, 'SÃ©', '', 'SÃ£o Paulo', 'SÃ£o Paulo', '01505-010'),
(6, 'Gabriela Machado Ducati', 'Feminino', '1999-02-04', '41.875.789-6', '(61) 3690-0243', '(61) 94413-1299', '897.057.268-68', 'gabriela.ducati@globo.com', 'Recepcionista', 'Quadra CLS 103', 475, 'Asa Sul', '', 'BrasÃ­lia', 'Distrito Federal', '70342-500'),
(7, 'Elias Yago Viana', 'Masculino', '1986-03-26', '29.507.031-6', '(11) 3733-0888', '(11) 99906-2194', '351.731.446-37', 'eliasyagoviana@autbook.com', 'Limpeza', 'Rua Francisco Romero', 362, 'Jardim Nove de Julho', '', 'SÃ£o Paulo', 'SÃ£o Paulo', '03952-140'),
(8, 'Allana LetÃ­cia Elza das Neves', 'Feminino', '1964-07-11', '19.009.608-1', '(47) 3646-3952', '(47) 99343-8358', '471.601.572-65', 'aallanaleticiaelzadasneves@abcturismo.com.br', 'Contador', 'Estrada Rio Negro', 783, ' Colonial', '', 'SÃ£o Bento do Sul', 'Santa Catarina', '89288-530');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(10) NOT NULL,
  `hora` datetime NOT NULL,
  `acao` varchar(200) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `hora`, `acao`, `ip`, `usuario`) VALUES
(1, '2019-10-10 11:01:13', 'Conectou-se ao sistema.', '::1', 'adm'),
(2, '2019-10-10 11:19:01', 'O paciente: Kauan Sousa foi adicionado ao sistema.', '::1', 'adm'),
(3, '2019-10-10 11:20:59', 'O paciente: Carlos Ducati Amaral foi adicionado ao sistema.', '::1', 'adm'),
(4, '2019-10-10 11:22:22', 'O paciente: Ana Paula Teixeira Amaral foi adicionado ao sistema.', '::1', 'adm'),
(5, '2019-10-10 11:25:06', 'O paciente: Maria Teixeira Amaral foi adicionado ao sistema.', '::1', 'adm'),
(6, '2019-10-10 11:26:48', 'O paciente: Isabela Machado Gomes foi adicionado ao sistema.', '::1', 'adm'),
(7, '2019-10-10 11:29:10', 'O paciente: Helena Machado Amaral foi adicionado ao sistema.', '::1', 'adm'),
(8, '2019-10-10 11:30:47', 'O paciente: Bernardo Teixeira Gomes foi adicionado ao sistema.', '::1', 'adm'),
(9, '2019-10-10 11:36:22', 'O paciente: Pedro Teixeira Gomes foi adicionado ao sistema.', '::1', 'adm'),
(10, '2019-10-10 11:41:18', 'O funcionÃ¡rio/RG: Heitor Amaral Gomes/91.122.534-1 foi adicionado ao sistema.', '::1', 'adm'),
(11, '2019-10-10 11:43:55', 'O funcionÃ¡rio/RG: JoÃ£o Amaral Teixeira/91.122.534-1 foi adicionado ao sistema.', '::1', 'adm'),
(12, '2019-10-10 11:45:32', 'O funcionÃ¡rio/rg: JoÃ£o Amaral Teixeira/91.122.534-1 foi alterado no sistema.', '::1', 'adm'),
(13, '2019-10-10 11:46:40', 'O funcionÃ¡rio/RG: Guilherme Ducati Gomes/4.032.894-40 foi adicionado ao sistema.', '::1', 'adm'),
(14, '2019-10-10 11:48:08', 'O funcionÃ¡rio/RG: Mariana Gomes Amaral/2.977.269 foi adicionado ao sistema.', '::1', 'adm'),
(15, '2019-10-10 11:49:38', 'O funcionÃ¡rio/RG: Isabela Teixeira Machado/91.122.534-1 foi adicionado ao sistema.', '::1', 'adm'),
(16, '2019-10-10 11:51:29', 'O funcionÃ¡rio/RG: Gabriela Machado Ducati/41.875.789-6 foi adicionado ao sistema.', '::1', 'adm'),
(17, '2019-10-10 11:53:43', 'O funcionÃ¡rio/RG: (61) 94413-1299/29.507.031-6 foi adicionado ao sistema.', '::1', 'adm'),
(18, '2019-10-10 11:54:07', 'O funcionÃ¡rio/rg: Elias Yago Viana/29.507.031-6 foi alterado no sistema.', '::1', 'adm'),
(19, '2019-10-10 11:55:59', 'O funcionÃ¡rio/RG: Allana LetÃ­cia Elza das Neves/19.009.608-1 foi adicionado ao sistema.', '::1', 'adm'),
(20, '2019-10-10 17:38:36', 'Tentativa fracassada ao conectar-se como <b>adm</b>.', '::1', 'UsuÃ¡rio InvÃ¡lido'),
(21, '2019-10-10 17:38:40', 'Conectou-se ao sistema.', '::1', 'adm'),
(22, '2019-10-10 17:43:20', 'O mÃ©dico/cpf: Davi Azevedo Oliveira/322.630.545-02 foi adicionado ao sistema.', '::1', 'adm'),
(23, '2019-10-10 17:45:31', 'O mÃ©dico/cpf: Gabrielly Regina Marcela Sales/714.062.952-80 foi adicionado ao sistema.', '::1', 'adm'),
(24, '2019-10-10 17:47:07', 'O mÃ©dico/cpf: Isabelle Simone Melissa de Paula/620.011.360-21 foi adicionado ao sistema.', '::1', 'adm'),
(25, '2019-10-10 17:49:52', 'O mÃ©dico/cpf: Breno Ricardo Almada/924.102.043-17 foi adicionado ao sistema.', '::1', 'adm'),
(26, '2019-10-10 17:51:50', 'Marcou consulta de Ana Paula Teixeira Amaral com o medico(a) Endocrinologista', '::1', 'adm'),
(27, '2019-10-10 17:54:02', 'O consulta de Ana Paula Teixeira Amaral com Endocrinologista foi alterada no sistema.', '::1', 'adm'),
(28, '2019-10-10 17:55:54', 'Marcou consulta de Bernardo Teixeira Gomes com o medico(a) Davi Azevedo Oliveira', '::1', 'adm'),
(29, '2019-10-10 17:57:38', 'Marcou consulta de Maria Teixeira Amaral com o medico(a) Gabrielly Regina Marcela Sales', '::1', 'adm'),
(30, '2019-10-10 17:58:11', 'O consulta de Maria Teixeira Amaral com Gabrielly Regina Marcela Sales foi alterada no sistema.', '::1', 'adm'),
(31, '2019-10-10 17:59:37', 'Marcou consulta de Kauan Sousa com o medico(a) Isabelle Simone Melissa de Paula', '::1', 'adm'),
(32, '2019-10-10 18:01:45', 'O mÃ©dico/cpf: Enzo OtÃ¡vio Bento da Cruz/499.002.108-83 foi adicionado ao sistema.', '::1', 'adm'),
(33, '2019-10-10 18:02:20', 'O mÃ©dico/cpf: Gabrielly Regina Marcela Sales/714.062.952-80 foi alterado no sistema.', '::1', 'adm'),
(34, '2019-10-10 18:03:06', 'Marcou consulta de Helena Machado Amaral com o medico(a) Enzo OtÃ¡vio Bento da Cruz', '::1', 'adm'),
(35, '2019-10-10 18:03:25', 'O consulta de Helena Machado Amaral com Enzo OtÃ¡vio Bento da Cruz foi alterada no sistema.', '::1', 'adm'),
(36, '2019-10-10 18:03:00', 'Alterou o status da consulta de Ana Paula Teixeira Amaral com o(a) Endocrinologista', '::1', 'adm'),
(37, '2019-10-10 18:03:00', 'Alterou o status da consulta de Bernardo Teixeira Gomes com o(a) Davi Azevedo Oliveira', '::1', 'adm'),
(38, '2019-10-10 18:03:00', 'Alterou o status da consulta de Kauan Sousa com o(a) Isabelle Simone Melissa de Paula', '::1', 'adm'),
(39, '2019-10-10 18:04:07', 'O mÃ©dico/cpf: aas/dasd foi adicionado ao sistema.', '::1', 'adm'),
(40, '2019-10-10 18:04:18', 'O mÃ©dico/CPF: aas/dasd foi deletado do sistema.', '::1', 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `cpf` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `datanasc` date NOT NULL,
  `telefoneresid` varchar(20) NOT NULL,
  `telefonecelu` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `complemento` varchar(200) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `especialidade` varchar(1000) NOT NULL,
  `crm` int(10) NOT NULL,
  `crmest` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`cpf`, `nome`, `rg`, `sexo`, `datanasc`, `telefoneresid`, `telefonecelu`, `email`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `especialidade`, `crm`, `crmest`) VALUES
('322.630.545-02', 'Davi Azevedo Oliveira', '49.480.061-6', 'Masculino', '1987-05-21', '(27) 3938-8401', '(27) 98919-0442', 'cristianeauroradacruz_@europamotors.com.br', '29937-406', 'Rua Cinquenta e Oito', 440, 'Forno Velho', 'Casa dos fundos', 'SÃ£o Mateus', 'EspÃ­rito Santo', 'Cardiologista', 13111, 'CRM - SP'),
('499.002.108-83', 'Enzo OtÃ¡vio Bento da Cruz', '27.086.625-5', 'Masculino', '1982-12-28', '(27) 2540-4824', '(27) 99751-8286', 'enzootaviobentodacruz..enzootaviobentodacruz@deskprint.com.br', '29147-303', 'Rua Santos Dumont', 515, 'Dom Bosco', '', 'Cariacica', 'EspÃ­rito Santo', 'Ginecologista', 23123, 'CRM - ES'),
('620.011.360-21', 'Isabelle Simone Melissa de Paula', '49.358.452-3', 'Feminino', '1959-02-07', '(91) 2899-8717', '(91) 99106-6802', 'isasimone@gmail.com', '66615-420', 'Rua da Mata', 318, 'Marambaia', '', 'BelÃ©m', 'ParÃ¡', 'Nutricionista', 43114, 'CRM - PA'),
('714.062.952-80', 'Gabrielly Regina Marcela Sales', '41.889.525-9', 'Feminino', '1963-08-19', '(68) 3504-7426', '(68) 99993-5899', 'gabriellyreginamarcelasales..gabriellyreginamarcelasales@pq.cnpq.br', '69912-497', 'Rua Caviana', 128, 'Floresta Sul', '', 'Rio Branco', 'Acre', 'Ginecologista', 4321, 'CRM - BH'),
('924.102.043-17', 'Breno Ricardo Almada', '33.363.249-7', 'Masculino', '1976-07-04', '(85) 3934-5419', '(85) 98280-7143', 'brenoricardoalmada@desari.com.br', '60349-756', 'Rua Paulo Henrique Cavalcante', 582, 'Vila Velha', '', 'Fortaleza', 'CearÃ¡', 'Endocrinologista', 36698, 'CRM - CE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `datanasc` date NOT NULL,
  `telefoneresid` varchar(20) NOT NULL,
  `telefonecelu` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `complemento` varchar(200) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`cpf`, `rg`, `nome`, `sexo`, `datanasc`, `telefoneresid`, `telefonecelu`, `email`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`) VALUES
('046.704.754-52', '41.875.789-6', 'Ana Paula Teixeira Amaral', 'Feminino', '1971-08-24', '(31) 9401-7196', '(31) 95278-7482', 'ana paula.amaral@hotmail.com', '31210-440', 'Rua AnfibÃ³lios', 839, 'Bonfim', '', 'Belo Horizonte', 'Minas Gerais'),
('388.619.459-02', '4.032.894-40', 'Bernardo Teixeira Gomes', 'Masculino', '1973-10-18', '(92) 6947-8137', '(92) 99391-4217', 'bernardo.gomes@globo.com', '69029-285', 'Rua Condado', 341, 'Santo AntÃ´nio', '', 'Manaus', 'Amazonas'),
('474.330.156-47', '41.875.789-6', 'Carlos Ducati Amaral', 'Masculino', '1976-01-11', '(11) 3637-8548', '(11) 95322-7567', 'carlos.amaral@uol.com.br', '01505-010', 'Rua Anita Ferraz', 627, 'SÃ©', '', 'SÃ£o Paulo', 'SÃ£o Paulo'),
('484.399.256-97', '42.943.412-1', 'Isabela Machado Gomes', 'Feminino', '1986-06-11', '(61) 2684-1123', '(61) 93152-6894', 'isabela.gomes@hotmail.com', '91751-110', 'Rua Condado', 562, 'Asa Sul', '', 'BrasÃ­lia', 'Distrito Federal'),
('681.324.410-87', '4.032.894-40', 'Kauan Sousa', 'Masculino', '1996-02-21', '(11) 7305-3670', '(11) 97926-1173', 'kauandiassousa@rhyta.com', '01007-040', 'Rua JoanÃ³polis', 617, 'Centro', '', 'SÃ£o Paulo', 'SÃ£o Paulo'),
('779.475.322-81', '2.977.269', 'Pedro Teixeira Gomes', 'Masculino', '1989-04-19', '(19) 6878-5607', '(19) 94708-6111', 'pedro.gomes@globo.com', '13015-180', 'PraÃ§a Anita Garibaldi', 524, 'Centro', '', 'Campinas', 'SÃ£o Paulo'),
('852.698.095-59', '41.875.789-6', 'Maria Teixeira Amaral', 'Feminino', '1961-11-25', '(61) 1520-5551', '(61) 98726-2937', 'maria.amaral@uol.com.br', '91751-110', 'Rua Condado', 960, 'Cavalhada', '', 'BrasÃ­lia', 'Distrito Federal'),
('865.533.251-89', '4.032.894-40', 'Helena Machado Amaral', 'Feminino', '1995-09-09', '(31) 6402-5620', '(31) 97693-1575', 'helena.amaral@yahoo.com', '31210-440', 'Rua AnfibÃ³lios', 796, 'Bonfim', '', 'Belo Horizonte', 'Minas Gerais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Administrador', 'adm', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`IDcargo`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `IDcargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
