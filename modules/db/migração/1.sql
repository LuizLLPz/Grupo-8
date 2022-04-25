<<<<<<< HEAD
create database update_donate; 
=======
>>>>>>> 1a9cc25e306388fc656b4554d43c5f5ac4d9697e
use update_donate;
create table if not Exists Usuario (
    id varchar(100) primary key,
    nome varchar(40),
    sobrenome varchar(40),
    email varchar(320),
    cpf char(14),
    senha varchar(100),
    fotoPerfil varchar(320),
<<<<<<< HEAD
    tipo enum('Donatário', 'Doador') default 'Donatário'
=======
    tipo enum('Doador', 'Donatário');
>>>>>>> 1a9cc25e306388fc656b4554d43c5f5ac4d9697e
);