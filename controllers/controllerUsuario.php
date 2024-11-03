<?php

require "./config/database.php";
require "./models/usuario.php";

class ControllerUsuario {
    public function cadastrarUsuario($nome, $email, $telefone, $cep){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->telefone = $telefone;
        $usuario->cep = $cep;
    
        if($usuario->cadastrarUsuario()){
            header('Location: index.php');
        } else{
            echo "Erro ao cadastrar usuario";    
        }
    }
}