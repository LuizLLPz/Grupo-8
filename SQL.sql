DROP DATABASE update_donate;
CREATE DATABASE update_donate;
USE update_donate;

CREATE TABLE IF NOT EXISTS TBUsuario(
	cod int,
	nome varchar(40),
    sobrenome varchar(40),
    email varchar(320),
    CPF char(14),
    senha varchar(100),
    fotoPerfil varchar(320),
    /*O tipo da foto ainda está em discussão entre byte e varchar*/
    
    PRIMARY KEY (cod)
);

CREATE TABLE IF NOT EXISTS TBAnuncio(
	cod int, 
	codUsuario int,
    titulo varchar(100),
    descricao varchar(500),
    fotoPublicacao varchar(320),
    dataPublicacao date,
    categoria varchar(20),
    
    FOREIGN KEY(codUsuario) REFERENCES TBUsuario(cod),
    PRIMARY KEY(cod, codUsuario)    
);
CREATE TABLE IF NOT EXISTS TBPostagemForum(
	cod int,
	codUsuario int,
    titulo varchar(100),
    descricao varchar(500),
    dataPublicacao date,
    
    FOREIGN KEY(codUsuario) REFERENCES TBUsuario(cod),
    PRIMARY KEY(cod, codUsuario)
);

CREATE TABLE IF NOT EXISTS TBResposta(
	cod int,
	codUsuario int,
    texto varchar(500),
    dataPublicacao date,
    
    PRIMARY KEY(cod, codUsuario)
);

CREATE TABLE IF NOT EXISTS TBUsuarioPostagemResposta(
	codUsuario int,
	codResposta int,
	codPostagemForum int,

	FOREIGN KEY(codUsuario) REFERENCES TBUsuario(cod),
    FOREIGN KEY(codResposta) REFERENCES TBResposta(cod),
    FOREIGN KEY(codPostagemForum) REFERENCES TBPostagemForum(cod),
    
    PRIMARY KEY(codUsuario, codResposta, codPostagemForum)
);


INSERT INTO TBUsuario VALUES('1', 'Natan', 'Yazamaki', 'natan@hotmail.com', '313.454.787-00', 'senha', null);
INSERT INTO TBUsuario VALUES('2', 'Flavia', 'Ferdinanda Juarez', 'flavia.ferdinanda@gmail.com', '123.456.789-10', 'senha2', null);
INSERT INTO TBUsuario VALUES('3', 'Marcio', 'Melo', 'marciomelo@yahoo.com.br', '132.465.798-01', 'senha3', null);
INSERT INTO TBUsuario VALUES('4', 'Cleber', 'Machado', 'machado.cleber@hotmail.com', '213.546.879-11', 'senha4', null);
INSERT INTO TBUsuario VALUES('5', 'Alan', 'Medeiros', 'marto@hotmail.com', '126.459.783-12', 'senha5', null);

INSERT INTO TBAnuncio VALUES('1', '1', 'placa de video', 'uma placa de video', null, '2021-03-02', 'placa de video');
INSERT INTO TBAnuncio VALUES('2', '2', 'processador 2', 'um processador', null, '2021-12-02', 'processador');


SELECT * FROM TBUsuario;
SELECT * FROM TBAnuncio;