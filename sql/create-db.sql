CREATE DATABASE IF NOT EXISTS my_db
CHARACTER SET utf8
COLLATE utf8_general_ci;

use my_db;

create table usuario
(
    id int not null auto_increment,
    nome VARCHAR (255) not NULL,
    email VARCHAR (255) not NULL UNIQUE,
    senha VARCHAR (255) not NULL,
    tipo enum('admin', 'consultor', 'farmaceutico') not null default 'farmaceutico',
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS `ci_sessions`(
    `id` varchar (128) NOT NULL,
    `ip_address` varchar (45) NOT NULL,
    `timestamp` int (10) unsigned DEFAULT 0 NOT NULL,
    `data` blob NOT NULL,
    KEY `ci_sessions_timestamp` (`timestamp`)
);


-- create table permissao
-- create table ci_sessions
