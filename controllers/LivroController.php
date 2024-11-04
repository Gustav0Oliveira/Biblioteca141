<?php

require "./config/database.php";
require "./models/Livro.php";

class LivroController{
    public function cadastrarLivro($titulo, $autor, $genero){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;

        if($livro->cadastrarLivro()){
            header('Location: index.php');
        }
        else{
            echo "Erro ao cadastrar livro";
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

    class deletarLivro($arrayDeletar){
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
