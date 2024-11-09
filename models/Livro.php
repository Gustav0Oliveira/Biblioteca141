<?php

class Livro{
    private $conexao;
    private $tabela = 'livro';

    public $id;
    public $titulo;
    public $autor;
    public $isbn;
    public $genero;
    public $status = "";
    
    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function getIdLivro($id){
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id};";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function cadastrarLivro(){
        $query = "INSERT INTO {$this->tabela} (titulo, autor, genero) values ('{$this->titulo}','{$this->autor}', '{$this->genero}');";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
    
    public function deletarLivro(){
        $query = "DELETE FROM {$this->tabela} WHERE titulo = '{$this->titulo}';";
        return $this->conexao->query($query);
    }

    public function atualizarLivro() {
        // Verificando se o livro existe na tabela
        $queryVerifica = "SELECT * FROM {$this->tabela} WHERE id = {$this->id};";
        $resultadoVerifica = $this->conexao->query($queryVerifica);
    
        if ($resultadoVerifica->num_rows === 0) {
            return false; // Livro não encontrado
        }
        
        $valores = [
            'titulo' => 'Como fazer amigos e influenciar pessoas',
            'autor' => 'Dale Carnegie',
            'genero' => 'Autoajuda'
        ];
        
        $colunasArrey = array_keys($valores);
        $contador = 0;
        $query = "UPDATE {$this->tabela} SET ";
        
        while ($contador < count($valores)) {
        $coluna = $colunasArrey[$contador];
        $valor = $valores[$coluna];
        
        $query .= $contador != (count($valores) - 1) 
            ? $coluna . ' = "' . $valor . '", ' 
            : $coluna . ' = "' . $valor . '" ';

            $contador++;
        }
        
        $query .= " WHERE id = {$this->id};";
        echo $query;


        $resultadoAtualizacao = $this->conexao->query($query);
        
        return $resultadoAtualizacao;
    }
}