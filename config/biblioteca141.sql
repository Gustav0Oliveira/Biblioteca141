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

create table livros (
    id_livro int primary key auto_increment,
    titulo varchar(100),
    autor varchar (50),
    isbn varchar(20),
    genero varchar (20),
    quantDisponivel int(4),
    lancamento date
);

create table emprestimos (
    id_emprestimo INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    id_livro INT,
    data_emprestimo DATE,
    data_devolucao DATE,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro)
);

create table login (
    id_usuario INT,
    email VARCHAR(50),
    senha VARCHAR(255),
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);