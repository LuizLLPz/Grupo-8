create database update_donate if not Exists; 
use update_donate;
create table if not Exists Usuario (
    id varchar(100) primary key,
    nome varchar(40) not null,
    sobrenome varchar(40) not null,
    email varchar(320) unique,
    cpf char(14) unique,
    senha varchar(100) not null,
    fotoPerfil varchar(320),
    tipo enum('Donatário', 'Doador') default 'Donatário'
);