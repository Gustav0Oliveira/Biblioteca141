<?php
require_once './interface/crud.php'
class Livro implements Crud{
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

    public function read($id){
        if($id == ''){
            $query = "SELECT * FROM {$this->tabela};";
            $resultado = $this->conexao->query($query);
        
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            $query = "SELECT * FROM {$this->tabela} WHERE id = {$id};";
            $resultado = $this->conexao->query($query);
        }
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela} (titulo, autor, genero) values ('{$this->titulo}','{$this->autor}', '{$this->genero}');";
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