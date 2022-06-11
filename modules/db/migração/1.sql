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

create table if not exists foto (
    cod varchar(100) primary key,
    foto_arquivo longblob not null
);

create table if not Exists Anuncio( 
    cod varchar(100) primary key,
    titulo varchar(100) not null,
    descricao varchar(280) not null,
    foto varchar(100),
    categoria varchar(40),
    cidade varchar(40),
    estado varchar(25),
    foreign key (foto) references Foto(cod),
    usuario varchar(100) not null,
    foreign key (usuario) references Usuario(id),
    data_publicacao date not null
);
