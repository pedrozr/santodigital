create database `techeducation`;

use `techeducation`;

create table `Clientes` (
  `id` int(9) NOT NULL auto_increment,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `codigo` varchar(255) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `telefone_cliente` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

create table `Usuarios` (
  `id` int(9) NOT NULL auto_increment,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `login_usuario` varchar(255) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

INSERT INTO usuarios(login_usuario, nome_usuario, senha) VALUES ('admin', 'admin', 'admin');
