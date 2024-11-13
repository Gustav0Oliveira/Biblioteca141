<?php

require "../config/database.php";
require "../models/usuario.php";

class ControllerUsuario{
    protected $tabela = 'usuario';

    public function create($nome, $cpf, $email, $cep, $Ncasa, $telfixo, $celular, $nascimento, $senha) {
        $database = new Banco();
        $bd = $database->conectar();
    
        
        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->cpf = $cpf;
        $usuario->email = $email;
        $usuario->cep = $cep;
        $usuario->Ncasa = $Ncasa; 
        $usuario->telfixo = $telfixo;
        $usuario->celular = $celular;
        $usuario->nascimento = $nascimento;
        $usuario->senha = $senha; 
    
        if($usuario->create()) {
            header('Location: index.php');
            exit();
        } else {
            echo "Erro ao cadastrar usuario";    
        }
    }

    public function read($id) {
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        
        if($usuario->read($id)) {
            header('Location: listar.php');
            exit();
        } else {
            echo 'Erro ao listar usuarios';
        }
    }

    public function update($id, $nome_mudado) {
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        
        if($usuario->update($nome_mudado)) {
            header('Location: atualizar.php');
            exit();
        } else {
            echo 'Erro ao atualizar usuario';
        }
    }

    public function delete($id) {
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        
        if($usuario->delete($id)) {
            header('Location: listar.php');
            exit();
        } else {
            echo 'Erro ao excluir usuario';
        }
    }
}