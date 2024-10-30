<?php
class Usuario {

protected $nome;
protected $email;
protected $telefone;
protected $cep;
protected $qt_livros =[];
const max_emprestimo =3;

public function __contruct($nome,$email,$telefone,$cep){

    $this -> nome = $nome;
    $this -> email = $email;
    $this -> telefone = $telefone;
    $this -> cep = $cep;
}

public function emprestar($livro){

    





}


}