/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : sysblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-05 05:57:15
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categorias`
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categorias
-- ----------------------------

-- ----------------------------
-- Table structure for `configuracoes`
-- ----------------------------
DROP TABLE IF EXISTS `configuracoes`;
CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf16 NOT NULL,
  `alias` varchar(20) NOT NULL,
  `contato` varchar(20) NOT NULL,
  `identificacao` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of configuracoes
-- ----------------------------
INSERT INTO `configuracoes` VALUES ('1', 'Krweb Soluções', 'Krweb ', '83988925446', '09696648421');

-- ----------------------------
-- Table structure for `contato`
-- ----------------------------
DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `whatsapp` varchar(20) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contato
-- ----------------------------
INSERT INTO `contato` VALUES ('1', '', '', '', '');

-- ----------------------------
-- Table structure for `endereco`
-- ----------------------------
DROP TABLE IF EXISTS `endereco`;
CREATE TABLE `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cep` int(8) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of endereco
-- ----------------------------
INSERT INTO `endereco` VALUES ('1', '58051020', '', '', '');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', 'Jonnie Henrique P F Silva', 'contato@jonniehenrique.com.br', 'jonnie', 'abc123', '', '1');
INSERT INTO `login` VALUES ('2', 'Hully Nascimento', 'hullynasc@gmail.com', 'hully', 'bf4ab447496f2d3d5a6c77c2cd12f996', '', '1');
INSERT INTO `login` VALUES ('3', 'adas', 'teste@gmail.com', 'adas', '09726305e74bab5e09c9d6c9672e6085', '', '0');

-- ----------------------------
-- Table structure for `portfolio`
-- ----------------------------
DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of portfolio
-- ----------------------------
INSERT INTO `portfolio` VALUES ('5', '0', 'ImobiliÃ¡ria Prime', 'ImobiliÃ¡ria Prime', 'Site institucional, catalogo e site', '');
INSERT INTO `portfolio` VALUES ('6', '0', 'Projeto 6 de teste', 'projeto6teste.com.br', 'Projeto 6 do teste do sistema de administraÃ§Ã£o do site', '');
INSERT INTO `portfolio` VALUES ('7', '0', 'Teste do projeto 7', 'teste7.com.br', 'Teste 7 de projetos do sysadmin.', '');
INSERT INTO `portfolio` VALUES ('10', '0', 'Teste de projeto 8', 'testeprojeto8.com.br', 'Projeto 8', '');
