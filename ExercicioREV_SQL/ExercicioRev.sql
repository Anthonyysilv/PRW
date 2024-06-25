drop database if exists IFSP;
CREATE DATABASE IF NOT EXISTS IFSP;
USE IFSP;
CREATE TABLE IF NOT EXISTS Cidade (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    estado CHAR(02) NOT NULL
);
CREATE TABLE IF NOT EXISTS Cliente (
    id int auto_increment primary key,
    nome varchar(50),
    email varchar(50),
    senha varchar(10),
    ativo bool,
    id_cidade int,
    constraint FK_ClienteCidade foreign key (id_cidade) references Cidade(id)
);
INSERT INTO Cidade (nome, estado) VALUES
    ('São Paulo', 'SP'),
    ('Campinas', 'SP'),
    ('São José dos Campos', 'SP'),
    ('Rio de Janeiro', 'RJ'),
    ('Curitiba', 'PR');
SELECT * FROM Cidade WHERE estado = 'SP';
INSERT INTO Cliente (nome, id_cidade) VALUES
    ('Mariana Moraes CV', 1),
    ('Ana Clara Ignorancia', 2),
    ('Kayc Olavo de Carvalho', 3),
    ('Maria Antonieta', 1),
    ('Wesley Rouba Lugar', 2);
SELECT * FROM Cliente WHERE id_cidade = 1;
UPDATE Cidade SET nome = 'Bauru' WHERE id = 1;
UPDATE Cliente SET nome = 'Cássio' WHERE id = 1;
DELETE FROM Cidade WHERE id = 4;
DELETE FROM Cliente WHERE id = 1;