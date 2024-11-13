<?php

require "../config/database.php";
require "../models/Livro.php";

class LivroController{
    public function create($titulo) {
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $_POST['titulo'];
        $livro->autor = $_POST['autor'];
        $livro->isbn = $_POST['isbn'];
        $livro->genero = $_POST['genero'];
        $livro->quantDisponivel = $_POST['qtd_disponivel'];
        $livro->lancamento = $_POST['ano_lancamento'];
        
        // var_dump($livro->create());
        
    }

    public function read(){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        $resultado = $livro->read();
        return $resultado;
    }

    public function update($arrayAtualizar){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);

        
    }

    public function delete($arrayDeletar){
        $database = new Banco();
        $bd = $database->conectar();

        
    }
}
