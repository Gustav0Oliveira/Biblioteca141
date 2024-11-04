<?php

class Emprestimo {
    private $conexao;
    private $table_name = "emprestimos";

    public $id;
    public $usuario_id;
    public $livro_id;
    public $data_emprestimo;
    public $data_devolucao;

    public function __construct($db) {
        $this->conexao = $db;
    }

    public function realizarEmprestimo() {
        
    }

    public function devolverEmprestimo() {

    }

    public function verificarEmprestimos($usuario_id) {

    }
}