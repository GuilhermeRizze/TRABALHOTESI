--Criando o banco de dados
CREATE DATABASE padaria_barba;

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `perecivel` char(1) NOT NULL,
  `valor` double NOT NULL,
  `imagem` varchar(7000) NOT NULL,
  `tipo_produto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_tipo_produto` (`tipo_produto`)
);

INSERT INTO `produto` (`id`, `nome`, `perecivel`, `valor`, `imagem`, `tipo_produto`) VALUES
(8, 'Geleia de Morango', '0', 5.6, 'https://img.itdg.com.br/tdg/images/recipes/000/000/651/309148/309148_original.jpg?mode=crop&width=710&height=400', 5),
(6, 'Rocambole de Goiabada', '1', 10.65, 'https://www.receitasagora.com.br/wp-content/uploads/2019/12/receita-de-rocambole-de-goiabada.jpg', 1),
(7, 'Pão Sirio', '1', 4.9, 'https://static.clubedaanamariabraga.com.br/wp-content/uploads/2019/04/pao-sirio-rapido-ana-maria-braga-1024x757.jpg', 4),
(9, 'Salgado Assado', '1', 5.5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrKvkREYI5XkDyZTjj4Zzn97nmqIHQGmrDWg&usqp=CAU', 2),
(10, 'Salgado Frito', '1', 5.7, 'https://amp.receitadevovo.com.br/wp-content/uploads/2022/01/Massa-de-salgado-frito.png', 2);

DROP TABLE IF EXISTS `tipo_produto`;
CREATE TABLE IF NOT EXISTS `tipo_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`id`, `nome_tipo`) VALUES
(1, 'Doce'),
(2, 'Salgado'),
(4, 'Paes'),
(5, 'Geleia');

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`, `email`) VALUES
(4, 'teste', '698dc19d489c4e4db73e28a713eab07b', 'teste@r.com'),
(5, 'teste', '81dc9bdb52d04dc20036dbd8313ed055', 'teste@teste.com'),
(7, 'Rodrigo', '35a10dfa8d4ce345c8dad22fb2568b7e', 'rodrigo@gmail.com');

/*
rodrigo@gmail.com
Senha: https://hashes.com/en/decrypt/hash

teste@r.com
Senha: teste


*/