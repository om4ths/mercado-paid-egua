-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2021 às 03:53
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `email` varchar(15) NOT NULL,
  `Senha` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`email`, `Senha`) VALUES
('admin@admin.com', 'admib');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(6) NOT NULL,
  `cat_nome` varchar(50) DEFAULT NULL,
  `cat_desc` varchar(255) DEFAULT NULL,
  `cat_img` varchar(255) DEFAULT NULL,
  `cat_ativo` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nome`, `cat_desc`, `cat_img`, `cat_ativo`) VALUES
(3, 'Limpeza', '', '../images/category/Limpeza.jpeg', 1),
(4, 'Massas', '', '../images/category/WhatsApp Image 2021-06-19 at 19.35.18 (2).jpeg', 1),
(5, 'Petshop', '', '../images/category/WhatsApp Image 2021-06-19 at 19.35.18 (4).jpeg', 1),
(6, 'Sucos e bebidas', '', '../images/category/WhatsApp Image 2021-06-19 at 19.35.17 (1).jpeg', 1),
(7, 'Carnes', 'fadfa', '../images/category/WhatsApp Image 2021-06-21 at 7.03.47 PM.jpeg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `telefone` varchar(17) NOT NULL,
  `data_nascimento` date NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `senha`, `telefone`, `data_nascimento`, `foto`) VALUES
(1, 'CARLOS DANIEL ALVES DE SOUZA', 'cdalves15@gmail.com', '123', '(91) 99357-0847', '2000-06-18', 0x696d616765732f6176617461722f696d672d31342e6a7067),
(2, 'Matheus Siqueira', 'siqueiramatheus225@gmail.', '12345', '(91) 98283-2055', '1999-10-04', 0x696d616765732f6176617461722f576861747341707020496d61676520323032312d30362d323120617420372e30332e343720504d2e6a706567);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `assunto` varchar(30) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `id_telefone` varchar(17) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(15) DEFAULT NULL,
  `rua` varchar(25) DEFAULT NULL,
  `bairro` varchar(15) DEFAULT NULL,
  `numero` int(5) DEFAULT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `id_telefone`, `cep`, `cidade`, `rua`, `bairro`, `numero`, `complemento`, `tipo`) VALUES
(1, '(91) 99357-0847', '68745-000', 'Castanhal', 'Avenida Presidente GetÃºl', 'Ianetama', 26, 'ffghh', 'Casa'),
(3, '(91) 98283-2055', '68740-130', 'Castanhal', 'Alameda Juraci Silva', 'Pirapora', 250, 'kyjfhfdh', 'Casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `cliente_id` varchar(17) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_produtos` int(11) DEFAULT NULL,
  `valor_pedido` float(11,2) DEFAULT NULL,
  `valor_total_pro` float(11,2) DEFAULT NULL,
  `metodo_pagamento` varchar(25) DEFAULT NULL,
  `ped_status` varchar(25) DEFAULT NULL,
  `valor_total_desconto` float DEFAULT NULL,
  `valor_frete` float DEFAULT NULL,
  `valor_sem_desconto` float DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `id_endereco` int(11) DEFAULT NULL,
  `hora_entrega` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `pedido_id`, `produto_id`, `cliente_id`, `quantidade`, `data_pedido`, `total_produtos`, `valor_pedido`, `valor_total_pro`, `metodo_pagamento`, `ped_status`, `valor_total_desconto`, `valor_frete`, `valor_sem_desconto`, `data_entrega`, `id_endereco`, `hora_entrega`) VALUES
(1, 4895, 13, '(91) 99357-0847', 1, '2021-06-21 21:33:29', 51, 23.00, 57.00, 'Dinheiro no momento da en', 'Pendente', 8, 6, 25, '2021-06-21', 1, '08:00 - 10:00'),
(2, 4895, 16, '(91) 99357-0847', 4, '2021-06-21 21:33:29', 51, 7.00, 57.00, 'Dinheiro no momento da en', 'Pendente', 8, 6, 8.5, '2021-06-21', 1, '08:00 - 10:00'),
(3, 8036, 16, '(91) 98283-2055', 1, '2021-06-21 22:21:22', 42, 7.00, 48.00, 'Dinheiro no momento da en', 'Finalizada', 8, 6, 8.5, '2021-06-22', 3, '10:00 - 12:00'),
(4, 8036, 17, '(91) 98283-2055', 1, '2021-06-21 22:21:22', 42, 11.00, 48.00, 'Dinheiro no momento da en', 'Finalizada', 8, 6, 12, '2021-06-22', 3, '10:00 - 12:00'),
(5, 8036, 18, '(91) 98283-2055', 4, '2021-06-21 22:21:22', 42, 6.00, 48.00, 'Dinheiro no momento da en', 'Finalizada', 8, 6, 7.5, '2021-06-22', 3, '10:00 - 12:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_cat` int(11) DEFAULT NULL,
  `pro_nome` varchar(100) DEFAULT NULL,
  `pro_desc` varchar(255) DEFAULT NULL,
  `pro_valor` float(11,2) DEFAULT NULL,
  `pro_img` varchar(255) DEFAULT NULL,
  `pro_estoque` int(11) DEFAULT NULL,
  `pro_valor_venda` float(11,2) DEFAULT NULL,
  `pro_desconto` float(11,2) DEFAULT NULL,
  `pro_porc_desconto` float(11,2) DEFAULT NULL,
  `pro_ativo` int(11) DEFAULT NULL,
  `pro_data_criado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`pro_id`, `pro_cat`, `pro_nome`, `pro_desc`, `pro_valor`, `pro_img`, `pro_estoque`, `pro_valor_venda`, `pro_desconto`, `pro_porc_desconto`, `pro_ativo`, `pro_data_criado`) VALUES
(1, 3, 'Agua SanitÃ¡ria SUPER CANDIDA', 'DescriÃ§Ã£o: Ãgua sanitÃ¡ria capaz de matar 99,9% dos germes', 5.00, '../images/product/590304.png', NULL, 1.00, 16.00, 20.00, 1, '2021-06-21 21:13:10'),
(2, 3, 'Amaciante Confort Intense 1l', 'DescriÃ§Ã£o: Amaciante perfumado para roupas delicadas', 5.00, '../images/product/13141002.jpeg', NULL, 3.00, 4.00, 20.00, 1, '2021-06-21 21:14:00'),
(3, 3, 'SabÃ£o LÃ­quido Concentrado Ariel', ' oferece limpeza impecÃ¡vel e cuida2do de suas roupas, graÃ§as a sua alta concentraÃ§Ã£o de ingredientes ativos que penetram profundamente nas fibras do tecido e deixam perfume duradouro nas roupas, combatendo maus odores', 28.00, '../images/product/577419.jpg', NULL, 2.00, 26.00, 7.00, 1, '2021-06-21 21:14:40'),
(4, 3, 'Lava LouÃ§as em PÃ³ FINISH Power Powder 1kg', 'O Finish Power Powder Ã© um detergente para Lava-louÃ§as em pÃ³ ', 50.00, '../images/product/668460.jpg', NULL, 6.00, 45.00, 10.00, 1, '2021-06-21 21:15:21'),
(5, 4, 'Fusilli de Arroz com FeijÃ£o 200gr - Fit Food', 'Massa alimentÃ­cia de arroz e feijÃ£o tipo Fusilli', 16.00, '../images/product/Fusilli de Arroz com FeijÃ£o 200gr - Fit Food.jpeg', NULL, 2.00, 14.00, 13.00, 1, '2021-06-21 21:16:06'),
(6, 4, 'Kit 2 Massa tapioca e cÃºrcuma', 'Massa alimentÃ­cia sem gluten6', 68.00, '../images/product/Kit 2 Massa tapioca e cÃºrcuma+ 2 Molho de tomate La Pianezza.jpg', NULL, 2.00, 95.00, 97.00, 1, '2021-06-21 21:16:42'),
(7, 4, 'MacarrÃ£o Grano Duro Capellini N.1 Barilla 500g', 'Massa alimentÃ­cia de trigo tipo italiana instantÃ¢nea', 10.00, '../images/product/MACARÃƒO INSTANTÃ‚NEO LUCCAS NETO - SABOR FRANGO.jpeg', NULL, 1.00, 9.00, 10.00, 1, '2021-06-21 21:17:19'),
(11, 5, 'Alimento para CÃ£es Adultos RaÃ§as MÃ©dias', 'RaÃ§Ã£o enriquecida com fibras e minerais para cÃ£es adultos', 100.00, '../images/product/13352718.png', NULL, 10.00, 9.00, 10.00, 1, '2021-06-21 21:20:54'),
(12, 5, 'Areia HigiÃªnica para Gatos Perfumado PIPICAT', ' Areia sanitÃ¡ria em grÃ£os pequenos para lares com vÃ¡rios gatos', 15.00, '../images/product/Areia HigiÃªnica para Gatos Perfumado Floral PIPICAT Pacote 4kg.png', NULL, 3.00, 12.00, 20.00, 1, '2021-06-21 21:21:35'),
(13, 5, 'Comedouro Duplo Luxo Azul FuracÃ£o Pet Pequeno', ' Mais praticidade para o seu pet ficar sempre bem alimentado .Possui dois recipientes', 25.00, '../images/product/Comedouro Duplo Luxo Azul FuracÃ£o Pet Pequeno.jpeg', NULL, 23.00, 23.00, 28.00, 1, '2021-06-21 21:22:44'),
(14, 5, 'NESTLÃ‰Â® PURINAÂ® DOG CHOWÂ® ExtralifeÂ®', 'RaÃ§Ã£o 100% completa e balanceada, um alimento com multivitaminas e minerais, nutrientes essenciais para o bom funcionamento do metabolismo e que auxiliam o seu pet a ter saÃºde e vitalidade por muito tempo.', 100.00, '../images/product/NESTLÃ‰Â® PURINAÂ® DOG CHOWÂ® ExtralifeÂ® RaÃ§Ã£o Seca para CÃ£es Adultos Mini.jpg', NULL, 98.00, 8.00, 10.00, 1, '2021-06-21 21:28:59'),
(15, 6, 'Ãgua De Coco DO BEM Tetra Pak 1L', 'Ãgua de coco sem adiÃ§Ã£o de conservantes ou aÃ§ucares', 8.50, '../images/product/Ãgua De Coco DO BEM Tetra Pak 1L.jpg', NULL, 7.00, 7.00, 18.00, 1, '2021-06-21 21:29:53'),
(16, 6, 'Ãgua de Coco TAEQ 1 Litro â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â €â', '', 8.50, '../images/product/Ãgua de Coco TAEQ 1 Litro.jpg', NULL, 7.00, 7.00, 18.00, 1, '2021-06-21 21:30:42'),
(17, 6, 'Suco Integral Laranja Natural One Refrigerado', 'Suco de laranja com aÃ§Ãºcar e carboidratos', 12.00, '../images/product/Suco Integral Laranja Natural One Refrigerado Garrafa 900ml.png', NULL, 11.00, 11.00, 8.00, 1, '2021-06-21 21:31:26'),
(18, 7, 'alcatra', 'alcatra 1 kg', 30.00, '../images/product/WhatsApp Image 2021-05-04 at 10.41.11 AM.jpeg', NULL, 6.00, 0.00, 100.00, 1, '2021-06-21 21:32:03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_cat` (`pro_cat`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`pro_cat`) REFERENCES `categorias` (`cat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
