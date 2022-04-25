create database update_donate; 
use update_donate;
create table if not Exists Usuario (
    id varchar(100) primary key,
    nome varchar(40),
    sobrenome varchar(40),
    email varchar(320),
    cpf char(14),
    senha varchar(100),
    fotoPerfil varchar(320),
    tipo enum('Donatário', 'Doador') default 'Donatário'
);