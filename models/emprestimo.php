<?php

class Emprestimo {
    private $conexao;
    private $table_name = "emprestimos";

    private $id;
    private $livro_id;
    private $usuario_id;
    private $data_emprestimo;
    private $data_devolucao;

    public function __construct($livro_id,$usuario_id) {
        $this->livro_id = $livro_id;
        $this->usuario_id = $usuario_id;
        $this->data_emprestmo = date("Y-m-d");
        $this->data_devoluçao = null;
    }

    public function realizarEmprestimo() {
        
    }


    public function devolverLivro($emprestimo){
        if($this->status == 'Disponível'){
            echo 'Livro não está emprestado';
            return;
        }
        $this->usuarioEmprestado = null;
        $this->status = 'Disponível';
    }
}

    public function verificarEmprestimos($usuario_id) {

    }