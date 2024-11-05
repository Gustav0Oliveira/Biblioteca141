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
        $query = "DELETE * FROM livro where titulo = titulo ".$this->titulo.";";
    }

    public function atualizarLivro($array_atualizar) {
        // Verificando se o livro existe na tabela
        $queryVerifica = "SELECT * FROM {$this->tabela} WHERE id = {$this->id};";
        $resultadoVerifica = $this->conexao->query($queryVerifica);
    
        if ($resultadoVerifica->num_rows === 0) {
            return false; // Livro não encontrado
        }
    
        // Cria a query de atualização
        $query = "UPDATE {$this->tabela} SET ";
    
        
        // Adiciona os campos que podem ser atualizados
        if (!empty($this->titulo)) {
            $array_atualizar[] = "titulo = '{$this->titulo}'";
        }
        if (!empty($this->autor)) {
            $array_atualizar[] = "autor = '{$this->autor}'";
        }
        if (!empty($this->genero)) {
            $array_atualizar[] = "genero = '{$this->genero}'";
        }
    
        // Verifica se existem valores para atualizar
        if (count($array_atualizar) > 0) {
            $query .= implode(", ", $array_atualizar);
            $query .= " WHERE id = {$this->id};";
    
            // Executa a query
            if ($this->conexao->query($query) === TRUE) {
                return true; // Atualização bem-sucedida
            }
        }
        return false; // Nenhum valor atualizado ou erro na atualização
    }
}
