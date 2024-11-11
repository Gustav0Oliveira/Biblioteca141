create database biblioteca141;
use biblioteca141;

create table usuario (
id_usuario int primary key auto_increment,
nome varchar(50),
cpf varchar(20),
email varchar(50),
cep int (15),
nCasa int(10),
telfixo int(25),
celular int(25),
dataNasc date,
senha varchar(20)
);
insert into usuario (nome,cpf,email,cep,nCasa,telfixo,celular,dataNasc,senha) values 
('Gustavo Ribeiro','12345678912','teste@teste.com.br','78945612','2356','789654123','123456789','1989-10-23','123456789');


create table livros (
id_livro int primary key auto_increment,
nome varchar(100),
autor varchar (50),
genero varchar (20),
quantDisponivel int(4),
lancamento date
);


insert into livros (nome,autor,genero,quantDisponivel,lancamento) values 
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10'),
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10'),
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10'),
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10'),
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10'),
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10'),
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10'),
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10'),
('Senhor dos aneis 1','Tolkien','Fantasia','10','2001-01-10');

CREATE TABLE emprestimos (
    id_emprestimo INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    id_livro INT,
    data_emprestimo DATE,
    data_devolucao DATE,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro)
);

insert into emprestimos (id_usuario,id_livro,data_emprestimo,data_devolucao) values ('1','2','2024-11-11','2024-11-21');

CREATE TABLE login (
    id_usuario INT,
    email VARCHAR(50),
    senha VARCHAR(255),
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

insert into login (id_usuario,email,senha) values ('1','1','1');

