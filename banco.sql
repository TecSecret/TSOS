-- Copiando estrutura para tabela os.anexos
CREATE TABLE IF NOT EXISTS `anexos` (
  `idAnexos` int(11) NOT NULL AUTO_INCREMENT,
  `anexo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `os_id` int(11) NOT NULL,
  PRIMARY KEY (`idAnexos`),
  KEY `fk_anexos_os1` (`os_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela os.anexos: 0 rows
/*!40000 ALTER TABLE `anexos` DISABLE KEYS */;
/*!40000 ALTER TABLE `anexos` ENABLE KEYS */;

-- Copiando estrutura para tabela os.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela os.ci_sessions: 0 rows
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela os.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `idClientes` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(255) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `dataCadastro` date DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idClientes`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela os.clientes: 1 rows
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`idClientes`, `nomeCliente`, `documento`, `telefone`, `celular`, `email`, `dataCadastro`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `cep`) VALUES
	(2, 'Daniel', 'sdfsdf', '(11) 1111-11111', '(11) 1111-11111', 'dsds@dsdsd.cas', '2017-03-16', 'asd', 'asd', 'adsd', 'sad', 'ads', 'asdas');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela os.documentos
CREATE TABLE IF NOT EXISTS `documentos` (
  `idDocumentos` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `file` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `categoria` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamanho` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idDocumentos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela os.documentos: 0 rows
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;

-- Copiando estrutura para tabela os.emitente
CREATE TABLE IF NOT EXISTS `emitente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnpj` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ie` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rua` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uf` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_logo` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela os.emitente: 1 rows
/*!40000 ALTER TABLE `emitente` DISABLE KEYS */;
INSERT INTO `emitente` (`id`, `nome`, `cnpj`, `ie`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `telefone`, `email`, `url_logo`) VALUES
	(1, 'DC WEBSOLUTIONS', '00000000000000', 'asd', 'zzxc', '145', 'Maracatu', 'GUARAREMA', 'São Paulo', '111111111111', 'fafafa@hotmail.com', 'http://os.dev/assets/uploads/e8e35bd7f64e522cd19e93ac59847af7.png');
/*!40000 ALTER TABLE `emitente` ENABLE KEYS */;

-- Copiando estrutura para tabela os.itens_de_vendas
CREATE TABLE IF NOT EXISTS `itens_de_vendas` (
  `idItens` int(11) NOT NULL AUTO_INCREMENT,
  `subTotal` decimal(12,2) DEFAULT '0.00',
  `quantidade` int(11) DEFAULT '0',
  `vendas_id` int(11) NOT NULL,
  `desconto` decimal(12,2) DEFAULT '0.00',
  `produtos_id` int(11) NOT NULL,
  PRIMARY KEY (`idItens`),
  KEY `fk_itens_de_vendas_vendas1` (`vendas_id`),
  KEY `fk_itens_de_vendas_produtos1` (`produtos_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela os.itens_de_vendas: 0 rows
/*!40000 ALTER TABLE `itens_de_vendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `itens_de_vendas` ENABLE KEYS */;

-- Copiando estrutura para tabela os.lancamentos
CREATE TABLE IF NOT EXISTS `lancamentos` (
  `idLancamentos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(12,2) DEFAULT '0.00',
  `desconto` decimal(12,2) DEFAULT '0.00',
  `data_vencimento` date NOT NULL,
  `data_pagamento` date DEFAULT NULL,
  `baixado` tinyint(1) DEFAULT '0',
  `cliente_fornecedor` varchar(255) DEFAULT NULL,
  `forma_pgto` varchar(100) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `anexo` varchar(250) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLancamentos`),
  KEY `fk_lancamentos_clientes1` (`clientes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela os.lancamentos: 2 rows
/*!40000 ALTER TABLE `lancamentos` DISABLE KEYS */;
INSERT INTO `lancamentos` (`idLancamentos`, `descricao`, `valor`, `desconto`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `anexo`, `clientes_id`) VALUES
	(1, 'Fatura de Venda - #1 ', 51.00, 0.00, '2017-03-23', '0000-00-00', NULL, 'Daniel', 'Dinheiro', 'receita', NULL, 2),
	(2, 'teste', 11.11, 0.00, '2017-03-16', '2017-03-16', 0, 'Daniel', 'Dinheiro', 'receita', NULL, NULL);
/*!40000 ALTER TABLE `lancamentos` ENABLE KEYS */;

-- Copiando estrutura para tabela os.os
CREATE TABLE IF NOT EXISTS `os` (
  `idOs` int(11) NOT NULL AUTO_INCREMENT,
  `dataInicial` date DEFAULT NULL,
  `dataFinal` date DEFAULT NULL,
  `garantia` varchar(45) DEFAULT NULL,
  `descricaoProduto` text,
  `defeito` text,
  `status` varchar(45) DEFAULT NULL,
  `observacoes` text,
  `laudoTecnico` text,
  `descontoTotal` decimal(12,2) DEFAULT '0.00',
  `valorTotal` decimal(12,2) DEFAULT '0.00',
  `clientes_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `lancamento` int(11) DEFAULT NULL,
  `faturado` tinyint(1) NOT NULL,
  `fabricante` text,
  `modelo` tinytext,
  `serie` tinytext,
  `tipo_equipamento` tinytext,
  `part_namber` tinytext,
  PRIMARY KEY (`idOs`),
  KEY `fk_os_clientes1` (`clientes_id`),
  KEY `fk_os_usuarios1` (`usuarios_id`),
  KEY `fk_os_lancamentos1` (`lancamento`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela os.os: 4 rows
/*!40000 ALTER TABLE `os` DISABLE KEYS */;
INSERT INTO `os` (`idOs`, `dataInicial`, `dataFinal`, `garantia`, `descricaoProduto`, `defeito`, `status`, `observacoes`, `laudoTecnico`, `descontoTotal`, `valorTotal`, `clientes_id`, `usuarios_id`, `lancamento`, `faturado`, `fabricante`, `modelo`, `serie`, `tipo_equipamento`, `part_namber`) VALUES
	(2, '2017-03-16', '2017-03-17', '1', 'asds', 'adsad', 'Orçamento', 'asdd', 'adsdad', 0.00, 11.11, 2, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL),
	(3, '2017-03-16', '2017-03-31', '2', 'dsasda', 'dasa', 'Orçamento', 'sadd', 'sada', 0.00, 0.00, 2, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL),
	(4, '2017-03-17', '2017-03-24', '2', 'asx', 'ada', 'Orçamento', 'das', 'adsd', 0.00, 0.00, 2, 1, NULL, 0, 'teste', 'teste', NULL, NULL, NULL),
	(5, '2017-03-18', '2017-03-24', '2', 'teste1', 'teste', 'Aberto', 'teste', 'teste', 0.00, 0.00, 2, 1, NULL, 0, 'teste1', 'teste1', '00', 'teste1', '00');
/*!40000 ALTER TABLE `os` ENABLE KEYS */;

-- Copiando estrutura para tabela os.permissoes
CREATE TABLE IF NOT EXISTS `permissoes` (
  `idPermissao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `permissoes` text COLLATE utf8_unicode_ci,
  `situacao` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`idPermissao`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela os.permissoes: 1 rows
/*!40000 ALTER TABLE `permissoes` DISABLE KEYS */;
INSERT INTO `permissoes` (`idPermissao`, `nome`, `permissoes`, `situacao`, `data`) VALUES
	(1, 'Administrador', 'a:38:{s:8:"aCliente";s:1:"1";s:8:"eCliente";s:1:"1";s:8:"dCliente";s:1:"1";s:8:"vCliente";s:1:"1";s:8:"aProduto";s:1:"1";s:8:"eProduto";s:1:"1";s:8:"dProduto";s:1:"1";s:8:"vProduto";s:1:"1";s:8:"aServico";s:1:"1";s:8:"eServico";s:1:"1";s:8:"dServico";s:1:"1";s:8:"vServico";s:1:"1";s:3:"aOs";s:1:"1";s:3:"eOs";s:1:"1";s:3:"dOs";s:1:"1";s:3:"vOs";s:1:"1";s:6:"aVenda";s:1:"1";s:6:"eVenda";s:1:"1";s:6:"dVenda";s:1:"1";s:6:"vVenda";s:1:"1";s:8:"aArquivo";s:1:"1";s:8:"eArquivo";s:1:"1";s:8:"dArquivo";s:1:"1";s:8:"vArquivo";s:1:"1";s:11:"aLancamento";s:1:"1";s:11:"eLancamento";s:1:"1";s:11:"dLancamento";s:1:"1";s:11:"vLancamento";s:1:"1";s:8:"cUsuario";s:1:"1";s:9:"cEmitente";s:1:"1";s:10:"cPermissao";s:1:"1";s:7:"cBackup";s:1:"1";s:8:"rCliente";s:1:"1";s:8:"rProduto";s:1:"1";s:8:"rServico";s:1:"1";s:3:"rOs";s:1:"1";s:6:"rVenda";s:1:"1";s:11:"rFinanceiro";s:1:"1";}', 1, '2014-09-03');
/*!40000 ALTER TABLE `permissoes` ENABLE KEYS */;

-- Copiando estrutura para tabela os.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `idProdutos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(80) NOT NULL,
  `unidade` varchar(10) DEFAULT NULL,
  `precoCompra` decimal(12,2) DEFAULT '0.00',
  `precoVenda` decimal(12,2) DEFAULT '0.00',
  `estoque` int(11) NOT NULL,
  `estoqueMinimo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProdutos`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela os.produtos: 1 rows
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoCompra`, `precoVenda`, `estoque`, `estoqueMinimo`) VALUES
	(2, 'teste', 'jkhdsh', 222.22, 11.11, 1, 0);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela os.produtos_os
CREATE TABLE IF NOT EXISTS `produtos_os` (
  `idProdutos_os` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL DEFAULT '0',
  `os_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  `desconto` decimal(12,2) DEFAULT '0.00',
  `subTotal` decimal(12,2) DEFAULT '0.00',
  PRIMARY KEY (`idProdutos_os`),
  KEY `fk_produtos_os_os1` (`os_id`),
  KEY `fk_produtos_os_produtos1` (`produtos_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela os.produtos_os: 1 rows
/*!40000 ALTER TABLE `produtos_os` DISABLE KEYS */;
INSERT INTO `produtos_os` (`idProdutos_os`, `quantidade`, `os_id`, `produtos_id`, `desconto`, `subTotal`) VALUES
	(1, 1, 2, 2, 0.00, 11.11);
/*!40000 ALTER TABLE `produtos_os` ENABLE KEYS */;

-- Copiando estrutura para tabela os.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `idServicos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`idServicos`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela os.servicos: 0 rows
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

-- Copiando estrutura para tabela os.servicos_os
CREATE TABLE IF NOT EXISTS `servicos_os` (
  `idServicos_os` int(11) NOT NULL AUTO_INCREMENT,
  `os_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  `desconto` decimal(12,2) DEFAULT '0.00',
  `subTotal` decimal(12,2) DEFAULT '0.00',
  PRIMARY KEY (`idServicos_os`),
  KEY `fk_servicos_os_os1` (`os_id`),
  KEY `fk_servicos_os_servicos1` (`servicos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela os.servicos_os: 0 rows
/*!40000 ALTER TABLE `servicos_os` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicos_os` ENABLE KEYS */;

-- Copiando estrutura para tabela os.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `situacao` tinyint(1) NOT NULL,
  `dataCadastro` date NOT NULL,
  `nivel` int(11) NOT NULL,
  `permissoes_id` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `fk_usuarios_permissoes1_idx` (`permissoes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela os.usuarios: 1 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuarios`, `nome`, `usuario`, `rg`, `cpf`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`, `telefone`, `celular`, `situacao`, `dataCadastro`, `nivel`, `permissoes_id`) VALUES
	(1, 'admin', 'admin', 'MG-25.502.560', '600.021.520-87', 'Rua Acima', '12', 'Alvorada', 'Teste', 'MG', 'admin@admin.com', '$2y$10$66ofwMBpn7TMfg1Ob/2vz.PqTgtLy4wACaNglj5592CEHzDrsf80u', '0000-0000', '', 1, '2013-11-22', 1, 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Copiando estrutura para tabela os.vendas
CREATE TABLE IF NOT EXISTS `vendas` (
  `idVendas` int(11) NOT NULL AUTO_INCREMENT,
  `dataVenda` date DEFAULT NULL,
  `valorTotal` decimal(12,2) DEFAULT '0.00',
  `descontoTotal` decimal(12,2) DEFAULT '0.00',
  `desconto` decimal(12,2) DEFAULT '0.00',
  `faturado` tinyint(1) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  `lancamentos_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVendas`),
  KEY `fk_vendas_clientes1` (`clientes_id`),
  KEY `fk_vendas_usuarios1` (`usuarios_id`),
  KEY `fk_vendas_lancamentos1` (`lancamentos_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela os.vendas: 1 rows
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` (`idVendas`, `dataVenda`, `valorTotal`, `descontoTotal`, `desconto`, `faturado`, `clientes_id`, `usuarios_id`, `lancamentos_id`) VALUES
	(2, '2017-03-16', 0.00, 0.00, 0.00, 0, 2, 1, NULL);
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;


