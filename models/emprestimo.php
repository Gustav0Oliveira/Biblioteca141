<?php

class Emprestimo {
    private $conexao;
    private $nome_tabela = "emprestimos";

    private $id;
    private $livro_id;
    private $usuario_id;
    private $data_emprestimo;
    private $data_devolucao;

    public function __construct($bd,$livro_id,$usuario_id) {
        $this->conexao = $bd;
        $this->livro_id = $livro_id;
        $this->usuario_id = $usuario_id;
        $this->data_emprestmo = date("Y-m-d");
        $this->data_devoluçao = null;
    }


    public function realizarEmprestimo() {
        $query = "SELECT status FROM livros WHERE id = {$this->livro_id}";
        // mysqli_query executa uma consulta no Banco de Dados
        $resultado = mysqli_query($this->conexao, $query);
        // já o mysqli_fetch_assoc Busca a próxima linha de um conjunto de resultados como um array associativo
        $status = mysqli_fetch_assoc($resultado)['status'];

        if ($status != 'Disponível') {
            echo "O livro não está disponível para empréstimo.";
            return false;
        }

        $query = "UPDATE livros SET status = 'Emprestado' WHERE id = {$this->livro_id}";
        mysqli_query($this->conexao, $query);

        $query = "INSERT INTO emprestimos (livro_id, usuario_id, data_emprestimo) 
                  VALUES ({$this->livro_id}, {$this->usuario_id}, '{$this->data_emprestimo}')";
        return mysqli_query($this->conexao, $query);
    }


    public function devolverEmprestimo($emprestimo){
        $data_devolucao = date("Y-m-d");
        $query = "UPDATE emprestimos SET data_devolucao = '$data_devolucao' WHERE id = $emprestimo_id";
        $resultado = mysqli_query($this->conexao, $query);

        if ($resultado) {
            $query = "UPDATE livros SET status = 'Disponível' WHERE id = {$this->livro_id}";
            return mysqli_query($this->conexao, $query);
        }
        return false;
    }


    public function verificarEmprestimos($usuario_id) {
        $query = "SELECT * FROM emprestimos WHERE usuario_id = $usuario_id AND data_devolucao IS NULL";
        $resultado = mysqli_query($this->conexao, $query);
        $emprestimos = [];

        while ($row = mysqli_fetch_assoc($resultado)) {
            $emprestimos[] = $row;
        }
        return $emprestimos;
    }
}