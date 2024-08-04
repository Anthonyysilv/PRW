drop database if exists Prova2;
create database Prova2;
use Prova2;
create table if not exists fluxo_caixa (
	id			integer not null auto_increment,
    data		date not null,
    tipo		varchar(10) not null,
    valor		decimal(10,2) not null,
    historico	varchar(150) not null,
    cheque		varchar(3) not null,
    primary key(id)
);