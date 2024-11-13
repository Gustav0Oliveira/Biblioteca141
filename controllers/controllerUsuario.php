<?php
require_once '.../interface/crud.php';
require "../config/database.php";
require "../models/usuario.php";

class ControllerUsuario implements Crud{
    protected $tabela = 'usuario';

    public function create($nome,$cpf,$email,$cep,$Ncasa,$telfixo,$celular,$nascimento){
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
    
        if($usuario->create($nome,$cpf,$email,$cep,$Ncasa,$telfixo,$celular,$nascimento)){
            header('Location: index.php');
        } else {
            echo "Erro ao cadastrar usuario";    
        }
    }

    public function read($arrayLer){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);

        if($usuario->read($arrayLer)){
            header('Locatin: listar.php');
        } else {
            echo 'Erro ao listar usuarios';
        }
    }

    public function update($arrayAtualizar){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);

        if($usuario->update($arrayAtualizar)){
            header('Location: atualizar.php');
        } else {
            echo 'Erro ao atualizar usuario';
        }
    }

    public function delete($arrayDeletar){
        $database = new Banco();
        $bd = $database->conectar();
    
        $usuario = new Usuario($bd);
        
        if($usuario->delete($arrayDeletar)){
            header('Location: atualizar.php');
        } else {
            echo 'Erro ao excluir usuario';
        }
    }
}