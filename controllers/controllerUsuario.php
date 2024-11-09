<?php

require "./config/database.php";
require "./models/usuario.php";

class ControllerUsuario {
    protected $tabela = 'usuario';

    public function cadastrarUsuario($nome, $email, $telefone, $cep){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->telefone = $telefone;
        $usuario->cep = $cep;
    
        if($usuario->cadastrarUsuario($nome, $email, $telefone, $cep)){
            header('Location: index.php');
        } else {
            echo "Erro ao cadastrar usuario";    
        }
    }

    public function lerUsuario($arrayLer){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);

        if($usuario->lerUsuario($arrayLer)){
            header('Locatin: listar.php');
        } else {
            echo 'Erro ao listar usuarios';
        }
    }

    public function atualizarUsuario($arrayAtualizar){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);

        if($usuario->atualizarUsuario($arrayAtualizar)){
            header('Location: atualizar.php');
        } else {
            echo 'Erro ao atualizar usuario';
        }
    }

    public function deletarUsuario($arrayDeletar){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        
        if($usuario->deletarUsuario($arrayDeletar)){
            header('Location: atualizar.php');
        } else {
            echo 'Erro ao excluir usuario';
        }
    }
}