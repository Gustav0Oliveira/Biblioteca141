<?php

require "./config/database.php";
require "./models/usuario.php";

class ControllerUsuario {
    protected $tabela = 'usuario';

    public function criar($nome,$cpf,$email,$cep,$Ncasa,$telfixo,$celular,$nascimento){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->telefone = $telefone;
        $usuario->cep = $cep;
        $this->Ncasa = $Ncasa; 
        $this->telfixo = $telfixo;
        $this->celular = $celular;
        $this->nascimento = $nascimento; 
    
        if($usuario->criar($nome, $email, $telefone, $cep)){
            header('Location: index.php');
        } else {
            echo "Erro ao cadastrar usuario";    
        }
    }

    public function ler($arrayLer){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);

        if($usuario->ler($arrayLer)){
            header('Locatin: listar.php');
        } else {
            echo 'Erro ao listar usuarios';
        }
    }

    public function atualizar($arrayAtualizar){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);

        if($usuario->atualizar($arrayAtualizar)){
            header('Location: atualizar.php');
        } else {
            echo 'Erro ao atualizar usuario';
        }
    }

    public function deletar($arrayDeletar){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        
        if($usuario->deletar($arrayDeletar)){
            header('Location: atualizar.php');
        } else {
            echo 'Erro ao excluir usuario';
        }
    }
}