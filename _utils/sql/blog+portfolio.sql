/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : sysblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-13 11:50:52
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categorias`
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Ecommerce');
INSERT INTO `categorias` VALUES ('2', 'Institucional');
INSERT INTO `categorias` VALUES ('3', 'Catalogo');
INSERT INTO `categorias` VALUES ('4', 'Portfolio');
INSERT INTO `categorias` VALUES ('5', 'Blog');
INSERT INTO `categorias` VALUES ('6', 'Imobiliario');

-- ----------------------------
-- Table structure for `configuracoes`
-- ----------------------------
DROP TABLE IF EXISTS `configuracoes`;
CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
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
  `whatsapp` varchar(20) CHARACTER SET utf8 NOT NULL,
  `facebook` varchar(50) CHARACTER SET utf8 NOT NULL,
  `instagram` varchar(50) CHARACTER SET utf8 NOT NULL,
  `twitter` varchar(50) CHARACTER SET utf8 NOT NULL,
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
  `rua` varchar(50) CHARACTER SET utf8 NOT NULL,
  `numero` varchar(10) CHARACTER SET utf8 NOT NULL,
  `complemento` varchar(255) CHARACTER SET utf8 NOT NULL,
  `bairro` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cidade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `uf` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of endereco
-- ----------------------------
INSERT INTO `endereco` VALUES ('1', '58051020', '', '', '', null, null, null);

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(255) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8 NOT NULL,
  `thumb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nivel` varchar(255) CHARACTER SET utf8 NOT NULL,
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
  `titulo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descricao` text CHARACTER SET utf8 NOT NULL,
  `imagem` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of portfolio
-- ----------------------------
INSERT INTO `portfolio` VALUES ('5', '6', 'Imobiliaria Prime', 'imobiliariaprime.com.br', 'Site Imobiliario', '');
INSERT INTO `portfolio` VALUES ('6', '1', 'Missiana', 'missiana.com', 'Site Ecommerce', '');
INSERT INTO `portfolio` VALUES ('7', '1', 'Flip Flop Store', 'flipflopstore.com.br', 'Site Ecommerce', '');
INSERT INTO `portfolio` VALUES ('10', '1', 'Casa dos Criadores', 'casadoscriadores.com.br', 'Site Ecommerce', '');
INSERT INTO `portfolio` VALUES ('11', '1', 'Samara Calcados', 'samaracalcados.com.br', 'Site Ecommerce', '');
INSERT INTO `portfolio` VALUES ('12', '3', 'Samsara Moveis', 'samsaramoveis.com.br', 'Site Institucional, Catalogo', '');
INSERT INTO `portfolio` VALUES ('13', '6', 'Alexei Garcia', 'alexeigarcia.com.br', 'Site Imobiliario', '');
INSERT INTO `portfolio` VALUES ('14', '5', 'Clinica Map', 'clinicamap.com.br', 'Site Institucional, Blog', '');
INSERT INTO `portfolio` VALUES ('15', '2', 'Mascarenhas Pneus', 'mascarenhaspneus.com.br', 'Site Institucional', '');
INSERT INTO `portfolio` VALUES ('16', '3', 'Anfotobooks', 'anfotobooks.com.br', 'Site Institucional, Catalogo', '');
INSERT INTO `portfolio` VALUES ('17', '6', 'Conquiste Imobiliaria', 'conquisteimobiliaria.com.br', 'Site Imobiliario', '');
INSERT INTO `portfolio` VALUES ('18', '3', 'Gabinetto Planejados', 'gabinettoplanejados.com.br', 'Site Institucional, Catalogo', '');
INSERT INTO `portfolio` VALUES ('19', '6', 'Agalpoes', 'agalpoes.com', 'Site Imobiliario', '');
INSERT INTO `portfolio` VALUES ('20', '4', 'Oficina Automarcas', 'oficinaautomarcas.com.br', 'Site Institucional, Portfolio', '');
INSERT INTO `portfolio` VALUES ('21', '4', 'Cristina Abreu', 'cristinaabreu.com.br', 'Site Institucional, Portfolio', '');
INSERT INTO `portfolio` VALUES ('22', '4', 'Clinica Dr Mauro', 'clinicadrmauro.com.br', 'Site Institucional, Portfolio', '');
INSERT INTO `portfolio` VALUES ('23', '2', 'Melhore Consultoria', 'melhore.com.br', 'Site Institucional', '');
INSERT INTO `portfolio` VALUES ('24', '3', 'Ceramica Santa Barbara', 'ceramicastabarbara.com.br', 'Site Institucional, Catalogo', '');
INSERT INTO `portfolio` VALUES ('25', '1', 'Teixeira Redes', 'teixeiraredes.com.br', 'Site Ecommerce', '');
INSERT INTO `portfolio` VALUES ('26', '6', 'Garcia Imoveis', 'garciaimoveis.com.br', 'Site Imobiliario', '');
INSERT INTO `portfolio` VALUES ('27', '6', 'Gilvandro Imobiliaria', 'gilvandroimobiliaria.com.br', 'Site Imobiliario', '');
INSERT INTO `portfolio` VALUES ('28', '1', 'Gostinho de amor', 'gostinhodeamor.com.br', 'Site Ecommerce', '');
INSERT INTO `portfolio` VALUES ('29', '4', 'Resolve Engenharia', 'resolve.eng.br', 'Site Institucional, Portfolio', '');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` varchar(12) CHARACTER SET utf8 NOT NULL,
  `imagem` varchar(255) CHARACTER SET utf8 NOT NULL,
  `exibir` varchar(5) CHARACTER SET utf8 NOT NULL,
  `descricao` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('14', 'Upload pelo admin', '10/10/1010', '421.jpg', 'Sim', '<span style=\"line-height: 22.1000003814697px;\"><b>Lorem </b>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <i>been </i>the industry\'s standard dummy text <i>ever </i>since the 1500s, <i>when </i>an <b>unknown </b>printer took a <u>galley </u>of type.</span><br><div><span style=\"line-height: 22.1000003814697px;\"><br></span></div><div><b style=\"line-height: 22.1px;\">Lorem&nbsp;</b><span style=\"line-height: 22.1px;\">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has&nbsp;</span><i style=\"line-height: 22.1px;\">been&nbsp;</i><span style=\"line-height: 22.1px;\">the industry\'s standard dummy text&nbsp;</span><i style=\"line-height: 22.1px;\">ever&nbsp;</i><span style=\"line-height: 22.1px;\">since the 1500s,&nbsp;</span><i style=\"line-height: 22.1px;\">when&nbsp;</i><span style=\"line-height: 22.1px;\">an&nbsp;</span><b style=\"line-height: 22.1px;\">unknown&nbsp;</b><span style=\"line-height: 22.1px;\">printer took a&nbsp;</span><u style=\"line-height: 22.1px;\">galley&nbsp;</u><span style=\"line-height: 22.1px;\">of type.</span><span style=\"line-height: 22.1000003814697px;\"><br></span></div><div><span style=\"line-height: 22.1px;\"><br></span></div><div><b style=\"line-height: 22.1px;\">Lorem&nbsp;</b><span style=\"line-height: 22.1px;\">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has&nbsp;</span><i style=\"line-height: 22.1px;\">been&nbsp;</i><span style=\"line-height: 22.1px;\">the industry\'s standard dummy text&nbsp;</span><i style=\"line-height: 22.1px;\">ever&nbsp;</i><span style=\"line-height: 22.1px;\">since the 1500s,&nbsp;</span><i style=\"line-height: 22.1px;\">when&nbsp;</i><span style=\"line-height: 22.1px;\">an&nbsp;</span><b style=\"line-height: 22.1px;\">unknown&nbsp;</b><span style=\"line-height: 22.1px;\">printer took a&nbsp;</span><u style=\"line-height: 22.1px;\">galley&nbsp;</u><span style=\"line-height: 22.1px;\">of type.</span><span style=\"line-height: 22.1px;\"><br></span></div>');
INSERT INTO `posts` VALUES ('16', 'Teste', '12/09/2015', '22673.jpg', 'Sim', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue velit lacus, sit amet hendrerit augue placerat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac dui ut eros euismod convallis at vel libero. Quisque eu leo volutpat, feugiat ante id, ultricies diam. Fusce facilisis id ex semper condimentum. Maecenas dapibus sed urna et consequat. Sed velit lorem, efficitur ac ex volutpat, sagittis facilisis ex. Aliquam eleifend pellentesque nulla at viverra.</div><div><br></div><div>Suspendisse vel dolor ut erat ultrices posuere vel eget odio. Quisque venenatis porttitor venenatis. Maecenas sed arcu sit amet arcu mattis sodales quis vel risus. Nullam sed malesuada felis, ut varius purus. Sed et lorem convallis, ullamcorper purus eget, dictum justo. Nunc tempus ligula nibh, et eleifend erat eleifend nec. Praesent tellus lorem, condimentum fringilla cursus sed, hendrerit sit amet elit. Praesent nisi arcu, pretium non mattis vitae, imperdiet at nisl. Nam vulputate massa ut ante malesuada pretium. Praesent tincidunt mattis lorem vitae lobortis. Nunc at quam eu nunc viverra auctor iaculis sed est.</div><div><br></div><div>Proin dictum ligula ut sapien interdum fringilla. Quisque dignissim dui nec elementum rhoncus. Ut id enim ac justo ullamcorper tincidunt vel ac elit. Suspendisse consectetur nisi gravida odio commodo, et ultricies lorem pretium. Duis ac neque non dolor molestie luctus. Donec ultricies urna augue, sit amet bibendum odio auctor quis. Nam velit magna, pharetra eget nibh id, consectetur congue metus. Vivamus faucibus pharetra dolor, a accumsan tortor maximus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque viverra vehicula turpis, ac laoreet magna ullamcorper varius. Fusce pharetra, augue vel maximus lacinia, magna arcu gravida sem, eget efficitur tellus quam eu lacus. Quisque facilisis orci in velit placerat, quis porta lacus porttitor.</div><div><br></div><div>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec faucibus consequat nulla, eget tempor nunc egestas vitae. Pellentesque elementum eget enim scelerisque consectetur. Nulla aliquet placerat odio, vitae blandit tortor dictum id. Proin aliquam erat ipsum, non accumsan sapien porttitor a. Praesent maximus nec magna vitae dignissim. Phasellus vehicula diam in sollicitudin elementum. Duis sed massa id erat imperdiet facilisis nec nec erat. Etiam lacus erat, interdum et elementum in, lobortis a turpis. Donec efficitur non nibh ut tristique. Sed nec pellentesque risus, ac ultricies elit. Etiam elementum pulvinar ligula, a vulputate elit hendrerit in.</div>');
INSERT INTO `posts` VALUES ('17', 'Mais uma aaaa', '00/00/0000', '13863.jpg', 'Sim', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue velit lacus, sit amet hendrerit augue placerat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac dui ut eros euismod convallis at vel libero. Quisque eu leo volutpat, feugiat ante id, ultricies diam. Fusce facilisis id ex semper condimentum. Maecenas dapibus sed urna et consequat. Sed velit lorem, efficitur ac ex volutpat, sagittis facilisis ex. Aliquam eleifend pellentesque nulla at viverra.</div><div><br></div><div>Suspendisse vel dolor ut erat ultrices posuere vel eget odio. Quisque venenatis porttitor venenatis. Maecenas sed arcu sit amet arcu mattis sodales quis vel risus. Nullam sed malesuada felis, ut varius purus. Sed et lorem convallis, ullamcorper purus eget, dictum justo. Nunc tempus ligula nibh, et eleifend erat eleifend nec. Praesent tellus lorem, condimentum fringilla cursus sed, hendrerit sit amet elit. Praesent nisi arcu, pretium non mattis vitae, imperdiet at nisl. Nam vulputate massa ut ante malesuada pretium. Praesent tincidunt mattis lorem vitae lobortis. Nunc at quam eu nunc viverra auctor iaculis sed est.</div>');
INSERT INTO `posts` VALUES ('18', 'Testando envio', '12/12/1212', '9207.jpg', 'Sim', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue velit lacus, sit amet hendrerit augue placerat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac dui ut eros euismod convallis at vel libero. Quisque eu leo volutpat, feugiat ante id, ultricies diam. Fusce facilisis id ex semper condimentum.&nbsp;</div><div><br></div><div>Maecenas dapibus sed urna et consequat. Sed velit lorem, efficitur ac ex volutpat, sagittis facilisis ex. Aliquam eleifend pellentesque nulla at viverra.</div><div><br></div><div>Suspendisse vel dolor ut erat ultrices posuere vel eget odio. Quisque venenatis porttitor venenatis. Maecenas sed arcu sit amet arcu mattis sodales quis vel risus. Nullam sed malesuada felis, ut varius purus. Sed et lorem convallis, ullamcorper purus eget, dictum justo.&nbsp;</div><div><br></div><div>Nunc tempus ligula nibh, et eleifend erat eleifend nec. Praesent tellus lorem, condimentum fringilla cursus sed, hendrerit sit amet elit. Praesent nisi arcu, pretium non mattis vitae, imperdiet at nisl. Nam vulputate massa ut ante malesuada pretium. Praesent tincidunt mattis lorem vitae lobortis. Nunc at quam eu nunc viverra auctor iaculis sed est.</div><div><br></div><div>Proin dictum ligula ut sapien interdum fringilla. Quisque dignissim dui nec elementum rhoncus. Ut id enim ac justo ullamcorper tincidunt vel ac elit. Suspendisse consectetur nisi gravida odio commodo, et ultricies lorem pretium. Duis ac neque non dolor molestie luctus. Donec ultricies urna augue, sit amet bibendum odio auctor quis. Nam velit magna, pharetra eget nibh id, consectetur congue metus.&nbsp;</div><div><br></div><div>Vivamus faucibus pharetra dolor, a accumsan tortor maximus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque viverra vehicula turpis, ac laoreet magna ullamcorper varius. Fusce pharetra, augue vel maximus lacinia, magna arcu gravida sem, eget efficitur tellus quam eu lacus. Quisque facilisis orci in velit placerat, quis porta lacus porttitor.</div><div><br></div>');
INSERT INTO `posts` VALUES ('19', 'Titulo do post', '15/21/2121', '16996.jpg', 'Sim', '<div><b>Lorem <span style=\"background-color: rgb(204, 0, 153);\">ipsum</span></b><span style=\"background-color: rgb(204, 0, 153);\"> </span>dolor sit amet, consectetur adipiscing elit. Morbi congue velit lacus, sit amet hendrerit augue placerat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac dui ut eros euismod convallis at vel libero. Quisque eu leo volutpat, feugiat ante id, ultricies diam. Fusce facilisis id ex semper condimentum. Maecenas dapibus sed urna et consequat. Sed velit lorem, efficitur ac ex volutpat, sagittis facilisis ex. Aliquam eleifend pellentesque nulla at viverra.</div><div><b><br></b></div><div><b>Suspendisse vel dolor ut erat ultrices posuere vel eget odio. Quisque venenatis porttitor venenatis. Maecenas sed arcu sit amet arcu mattis sodales quis vel risus. Nullam sed malesuada felis, ut varius purus. Sed et lorem convallis, ullamcorper purus eget, dictum justo. Nunc tempus ligula nibh, et eleifend erat eleifend nec. Praesent tellus lorem, condimentum fringilla cursus sed, hendrerit sit amet elit. Praesent nisi arcu, pretium non mattis vitae, imperdiet at nisl. Nam vulputate massa ut ante malesuada pretium. Praesent tincidunt mattis lorem vitae lobortis. Nunc at quam eu nunc viverra auctor iaculis sed est.</b></div><div><br></div><div>Proin dictum ligula ut sapien interdum fringilla. Quisque dignissim dui nec elementum rhoncus. Ut id enim ac justo ullamcorper tincidunt vel ac elit. Suspendisse consectetur nisi gravida odio commodo, et ultricies lorem pretium. Duis ac neque non dolor molestie luctus. Donec ultricies urna augue, sit amet bibendum odio auctor quis.</div><div><br></div><div><br></div><div><font color=\"#cc9900\">&nbsp;<i>Nam velit magna, pharetra eget nibh id, consectetur congue metus. Vivamus faucibus pharetra dolor, a accumsan tortor maximus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque viverra vehicula turpis, ac laoreet magna ullamcorper varius. Fusce pharetra, augue vel maximus lacinia, magna arcu gravida sem, eget efficitur tellus quam eu lacus. Quisque facilisis orci in velit placerat, quis porta lacus porttitor.</i></font></div><div><br></div><div><br></div>');
INSERT INTO `posts` VALUES ('20', 'Mais uma aula', '21/21/2121', '199896876.png', 'Sim', '<div><span style=\"line-height: 1.7em;\">Proin dictum ligula ut sapien interdum fringilla. Quisque dignissim dui nec elementum rhoncus. Ut id enim ac justo ullamcorper tincidunt vel ac elit. Suspendisse consectetur nisi gravida odio commodo, et ultricies lorem pretium. Duis ac neque non dolor molestie luctus. Donec ultricies urna augue, sit amet bibendum odio auctor quis.&nbsp;</span><br></div><div><br></div><div><b><u><i>Nam velit magna, pharetra eget nibh id, consectetur congue metus.</i></u></b></div><div><br></div><div>&nbsp;Vivamus faucibus pharetra dolor, a accumsan tortor maximus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque viverra vehicula turpis, ac laoreet magna ullamcorper varius. Fusce pharetra, augue vel maximus lacinia, magna arcu gravida sem, eget efficitur tellus quam eu lacus. Quisque facilisis orci in velit placerat, quis porta lacus porttitor.</div><div><br></div><div>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec faucibus consequat nulla, eget tempor nunc egestas vitae. Pellentesque elementum eget enim scelerisque consectetur. Nulla aliquet placerat odio, vitae blandit tortor dictum id. Proin aliquam erat ipsum, non accumsan sapien porttitor a.&nbsp;</div><div><br></div><div>Praesent maximus nec magna vitae dignissim. Phasellus vehicula diam in sollicitudin elementum. Duis sed massa id erat imperdiet facilisis nec nec erat. Etiam lacus erat, interdum et elementum in, lobortis a turpis. Donec efficitur non nibh ut tristique. Sed nec pellentesque risus, ac ultricies elit. Etiam elementum pulvinar ligula, a vulputate elit hendrerit in.</div><div><br></div><div>web vÃ­deo aulas</div>');
