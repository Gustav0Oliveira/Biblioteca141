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

    public function atualizarLivro($array_atualizar){

        $query = "UPDATE livros SET titulo = '{$this->titulo}', autor = '{$this->autor}', genero = '{$this->genero}' WHERE titulo = {$this->titulo}";


        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        if($livro->atualizarLivro($array_atualizar)){
            header('Location: atualizar.php')
        } else {
            echo "Erro ao atualizar o livro"
        }

    }
}