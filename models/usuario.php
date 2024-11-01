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

    if(count($this->livros_emprestimos) < self :: max_emprestimo){
        array_push($this->livros_emprestados,$livros);
        return;
    }
} 

public function devolver($livro){
    if(in_array($livro,$this->livros_emprestados)){
        $livro->devolver_livros();
        $position= array_searce($livro,$this->livros_emprestados);
        unset($this-> qtd_livros [$position]);


    }
}

public function criar($nome){
    return "insert into usuario(nome,cep) values (".$this->nome.",".$this->cep.");";
}
public function ler(){
    return "select * from usuario where nome = ".$this->nome.";";
}
public function atualizar(){
    return "update usuario set nome=".$nome_atualizado. "where nome=".$this->nome.";";
    }
public function deletar(){
    return "delete nome from usuario where=".$this->nome.";";
}
}


echo "Teste final ";