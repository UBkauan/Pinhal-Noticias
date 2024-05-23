CREATE DATABASE IF NOT EXISTS SiteNoticia;
USE SiteNoticia;

-- DROP DATABASE SiteNoticia;

CREATE TABLE tb_login(
id_login INT NOT NULL AUTO_INCREMENT,
usuario VARCHAR(60) NOT NULL,
senha VARCHAR(60) NOT NULL,
PRIMARY KEY (id_login)
);


INSERT INTO tb_login (usuario,senha) VALUES
('admin','123');

SELECT * FROM tb_login;


CREATE TABLE tb_noticia(

id_noticia VARCHAR(60),
titulo 	VARCHAR(60) NOT NULL,
noticia 	TEXT NOT NULL,
datahora TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
imagem 	VARCHAR(60),
fonte 	VARCHAR(60),
autor 	VARCHAR(60),
PRIMARY KEY (id_noticia)

);

INSERT INTO tb_noticia (titulo,noticia,imagem,fonte,autor) VALUES 
('Nosso primeiro Post','Criando um site de noticia','foto1.jpg','Etec Pinhal','Jorge');
SELECT * FROM tb_noticia;