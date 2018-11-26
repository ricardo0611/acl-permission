CREATE DATABASE
IF NOT EXISTS my_db
CHARACTER
SET utf8
COLLATE utf8_general_ci;


create table usuario
(
    id int not null
    auto_increment,
    nome VARCHAR
    (255) not NULL,
    email VARCHAR
    (255) not NULL,
    senha VARCHAR
    (255) not NULL,

    PRIMARY KEY
    (id)
);

-- create table permissao
-- create table ci_sessions
-- create table 