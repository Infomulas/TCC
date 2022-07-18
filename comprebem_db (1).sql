-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2022 às 20:37
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comprebem_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'alimentos'),
(2, 'bebidas'),
(3, 'limpeza'),
(4, 'petshop');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `forma_pagamento` varchar(20) NOT NULL,
  `total` double(10,2) NOT NULL,
  `datapedido` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `foto_produto` longblob NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` double(12,2) NOT NULL,
  `estoque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `id_categoria`, `foto_produto`, `descricao`, `valor`, `estoque`) VALUES
(1, 1, 0x32336263356139366539343761313232343265653063656331366465393636652e6a7067, 'milho de pipoca Yoki', 5.99, 100),
(2, 2, 0x35663664613335343863343838656466313732363266666264343533313135642e6a7067, 'whisky Redlabel 1L', 79.99, 20),
(3, 3, 0x31303639623032303830303830333131623538356566623431366135323662612e6a7067, 'kit shampoo e condicionador pantene', 29.49, 30),
(4, 4, 0x63333830316131313036633430363261363462643461376231313234386165372e6a7067, 'KIt Sanol Dog', 39.99, 5),
(5, 4, 0x66656663663939613938343264383230623739353031356433366364363766632e6a7067, 'shampoo antipulgas sanol', 9.99, 10),
(10, 2, 0x63303530653132393335343635323330386566363264633161643832313361652e6a7067, 'coca cola lata 350ml', 4.99, 100),
(11, 2, 0x31626339636461633632326365636239326664313935616139626363313165352e6a7067, 'whisky Buchanas 1L', 150.00, 10),
(12, 1, 0x38363339656161303338336431303231353030666330396239346536303332652e6a7067, 'Piraquê recheado chocolate', 4.49, 100),
(13, 1, 0x30653534666233393666663666653932343733363939396433636136366134302e6a7067, 'Piraquê leite maltado', 4.49, 100),
(14, 1, 0x38666565323037393665393661626234363437376266303738366364643631342e6a7067, 'Piraquê recheado maracujá', 4.49, 100),
(15, 1, 0x30633665613561643861373338383663373035373266303264356562383337322e6a7067, 'Piraquê goiabinha', 4.99, 100),
(16, 1, 0x62363636353461346164353635346163346334363361623938333732633237652e6a7067, 'Biscoito passatempo', 2.50, 100),
(17, 1, 0x63366432393732633332326330333363323361333533636238303536373661662e6a7067, 'Biscoito passatempo LEITE', 2.99, 100),
(18, 1, 0x63336132353032376435393833633531616433656139333061356631376366632e6a7067, 'Biscoito passatempo MORANGO', 2.50, 100),
(19, 1, 0x66336162386136643664373265643435386162393731633437366632663435392e6a7067, 'Biscoito passatempo CHOCOMIX', 2.50, 100),
(20, 1, 0x65313834363432336434383733313830613764303532343038653935613235382e6a7067, 'Bauducco Cookies original', 2.99, 100),
(21, 1, 0x38353331636531333434646662623739653337623466623539336234383834342e6a7067, 'Bauducco Cookies chocolate', 2.99, 100),
(22, 1, 0x37613630333039386165636633373562343263636638303866353362646431352e6a7067, 'Club Social', 3.50, 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_vendidos`
--

CREATE TABLE `produtos_vendidos` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `datacad` timestamp NOT NULL DEFAULT current_timestamp(),
  `endereco` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `bairro` varchar(60) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PEDIDOS_1` (`id_usuario`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PRODUTOS_1` (`id_categoria`);

--
-- Índices para tabela `produtos_vendidos`
--
ALTER TABLE `produtos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PRODUTOS_VENDIDOS_1` (`id_pedido`),
  ADD KEY `FK_PRODUTOS_VENDIDOS_2` (`id_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `produtos_vendidos`
--
ALTER TABLE `produtos_vendidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `FK_PEDIDOS_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_PRODUTOS_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produtos_vendidos`
--
ALTER TABLE `produtos_vendidos`
  ADD CONSTRAINT `FK_PRODUTOS_VENDIDOS_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_PRODUTOS_VENDIDOS_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
