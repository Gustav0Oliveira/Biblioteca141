<?php
require_once 'interface/crud.php';
require_once '../config/database.php';

class Livro implements Crud{
    private $conexao;
    private $tabela = 'livros';

    public $id;
    public $titulo;
    public $autor;
    public $isbn;
    public $genero;
    public $quantDisponivel;
    public $lancamento;
    
    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function read(){
        if($this->id == ''){
            $query = "SELECT * FROM {$this->tabela};";
            $resultado = $this->conexao->query($query);
        
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id};";
            $resultado = $this->conexao->query($query);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela} (titulo, autor, isbn, genero, quantDisponivel, lancamento) values ('{$this->titulo}','{$this->autor}', '{$this->genero}', '{$this->isbn}', '{$this->quantDisponivel}', '{$this->lancamento}');";

        $resultado = $this->conexao->query($query);

        return $resultado;

    }
    
    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id = {$this->id};";
        return $this->conexao->query($query);
    }

    public function update() {
        $queryVerifica = "SELECT * FROM {$this->tabela} WHERE id = {$this->id};";
        $verificaResultado = $this->conexao->query($queryVerifica);
        if($verificaResultado->num_rows == 0){
            return false; // acho foi nada          
        }
        $valores = [
            'titulo' -> $this->titulo,
            'autor' -> $this->autor,
            'genero' -> $this->genero
        ];

        $colunasArray = array_keys($valores);
        $contador = 0;
        $query = "UPDATE {$this->tabela} SET ";

        while($contador < count($valores)){
            $coluna = $colunasArray[$contador];
            $valor = $valores[$coluna];

            $query .= $contador != (count($valores) - 1) ? $coluna . '= "' . $valor . '", ' : $coluna . ' = "' . $valor . '" ';   

            $contador ++;
        }

        $query .= " WHERE id = {$this->id};";
        echo $query;

        $resultadoAtualizado = $this->conexao->query($query);

        return $resultadoAtualizado;

    }
}