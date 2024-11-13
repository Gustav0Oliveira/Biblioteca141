<?php

require "../config/database.php";
require "../models/Livro.php";

class LivroController{
    protected $tabela = 'livro';

    public function create($id, $titulo, $autor, $genero){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;

        if($livro->create($titulo, $autor, $genero)){
            header('Location: index.php');
        }
        else{
            echo "Erro ao cadastrar livro";
        }
    }

    public function read($lerLivro){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        if($livro->read($lerLivro)){
            header('Location: listar.php');
        } else {
            echo 'Erro ao listar livros';
        }
    }

    public function update($arrayAtualizar){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        if($livro->update($arrayAtualizar)){
            header('Location: atualizar.php');
        } else {
            echo "Erro ao atualizar o livro";
        }
    }

    public function delete($arrayDeletar){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        if($livro->delete($arrayDeletar)){
            header('Location: deletar.php');
        } else {
            echo "Erro ao deletar o livro";
        }
    }
}
