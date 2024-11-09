<?php

class Usuario {

protected $nome;
protected $cpf;
protected $email;
protected $cep;
protected $Ncasa;
protected $telfixo;
protected $celular;
protected $nascimento;
protected $qt_livros =[];
const max_emprestimo =3;

public function __contruct($nome,$cpf,$email,$cep,$Ncasa,$telfixo,$celular,$nascimento){

    $this -> nome = $nome;
    $this -> cpf = $cpf;
    $this -> email = $email;
    $this -> cep = $cep;
    $this -> Ncasa = $Ncasa; // Ncasa = Numero da casa , pois no cep não informa o numero da casa
    $this -> telfixo = $telfixo;
    $this -> celular = $celular;
    $this -> nascimento = $nascimento;
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
    return "insert into usuario(nome,cpf,email,cep,Ncasa,telfixo,celular,nascimento) values (".$this->nome.",".$this->cpf.",".$this->email.",".$this->cep.",
    ".$this->Ncasa.",".$this->telfixo.",".$this->celular.",".$this->nascimento.");";
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