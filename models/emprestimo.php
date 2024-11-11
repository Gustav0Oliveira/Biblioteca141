<?php
require_once './interface/crud.php';
require_once './config/database.php';

class Emprestimo implements Crud {
    private $conexao;
    private $tabela = 'emprestimos';

    private $id;
    private $livro_id;
    private $usuario_id;
    private $data_emprestimo;
    private $data_devolucao;

    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function __construct($livro_id, $usuario_id, $data_devolucao, $data_emprestimo){
        $this->livro_id = $livro_id;
        $this->usuario_id = $usuario_id;
        $this->data_devolucao = $data_devolucao;
        $this->data_emprestimo = $data_emprestimo;
    }

    public function read($id){
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$valor};";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);

    }
    
    public function create(){
        $query = "INSERT INTO {$this->tabela}(livro_id, usuario_id, data_emprestimo, data_devolucao) VALUES ({$this->livro_id}, {$this->usuario_id}, '{$this->data_emprestimo}', '{$this->data_devolucao}');";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
    

    public function update(){
        $query = "UPDATE {$this->tabela} SET livro_id = {$this->livro_id}, usuario_id = {$this->usuario_id}, data_emprestimo = '{$this->data_emprestimo}', data_devolucao = '{$this->data_devolucao}' WHERE id = {$this->id};";
    }
    
    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id = {$this->id};";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

}