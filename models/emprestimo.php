<?php
require_once './interface/crud.php'
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

    public function read($valor){
        return 'SELECT * FROM {$this->tabela} WHERE id = {$valor};';

    }
    
    public function create(){
        return "INSERT INTO {$this->tabela}(livro_id, usuario_id, data_emprestimo, data_devolucao) VALUES ({$this->livro_id}, {$this->usuario_id}, '{$this->data_emprestimo}', '{$this->data_devolucao}');";
    }
    

    public function update(){
        return "UPDATE {$this->tabela} SET livro_id = {$this->livro_id}, usuario_id = {$this->usuario_id}, data_emprestimo = '{$this->data_emprestimo}', data_devolucao = '{$this->data_devolucao}' WHERE id = {$this->id};";
    }
    
    public function delete(){
        return "DELETE FROM {$this->tabela} WHERE id = {$this->id};";
    }

}