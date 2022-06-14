CREATE DATABASE Banco_Loja;

CREATE TABLE usuarios (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR (100) NOT NULL,
    senha VARCHAR (50) NOT NULL
);

CREATE TABLE adm (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL
);

CREATE TABLE produtos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    preco DOUBLE NOT NULL,
    cripto DOUBLE NOT NULL,
    quantidade INT NOT NULL
);

INSERT INTO `adm`(`id`, `nome`, `senha`) VALUES ( 1, "admin", 1234 );
INSERT INTO `adm`(`id`, `nome`, `senha`) VALUES ( 2, "admin2", 1234 );
