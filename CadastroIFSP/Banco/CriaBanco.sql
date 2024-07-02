-- Deleta o banco de dados caso exista
drop database if exists IFSP;
-- Cria banco de dados caso não exista
create database if not exists IFSP;
-- Seleciona o banco de dados
use IFSP;
-- Cria tabela de cidades
create table cidade(
    id          int auto_increment,
    nome        varchar(100),
    estado      varchar(002),
    primary key(id)
);
-- Cria tabela Cliente
create table Cliente(
    id          int auto_increment,
    nome        varchar(100),
    email       varchar(100),
    senha       varchar(050),
    ativo       bool,
    id_cidade   int,
    primary key(id),
    constraint FK_ClienteCidade 
        foreign key(id_cidade) references Cidade(id)
);