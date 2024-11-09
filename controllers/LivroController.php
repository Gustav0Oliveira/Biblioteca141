<?php

require "./config/database.php";
require "./models/Livro.php";

class LivroController{
    protected $tabela = 'livro';

    public function cadastrarLivro($titulo, $autor, $genero){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;

        if($livro->cadastrarLivro($titulo, $autor, $genero)){
            header('Location: index.php');
        }
        else{
            echo "Erro ao cadastrar livro";
        }
    }

    public function getIdLivro($lerLivro){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        if($livro->getIdLivro($lerLivro)){
            header('Location: listar.php');
        } else {
            echo 'Erro ao listar livros';
        }
    }

    public function atualizarLivro($arrayAtualizar){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        if($livro->atualizarLivro($arrayAtualizar)){
            header('Location: atualizar.php');
        } else {
            echo "Erro ao atualizar o livro";
        }
    }

    public function deletarLivro($arrayDeletar){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        if($livro->deletarLivro($arrayDeletar)){
            header('Location: deletar.php');
        } else {
            echo "Erro ao deletar o livro";
        }
    }
}
