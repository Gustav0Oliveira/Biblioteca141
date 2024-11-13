<?php
require_once 'interface/crud.php';
require_once '../config/database.php';

class Usuario implements Crud {
    private $conexao;
    private $tabela = 'usuario';

    public function __construct($bd){
        $this->conexao = $bd;
    }

    protected $nome;
    protected $cpf;
    protected $email;
    protected $cep;
    protected $Ncasa;
    protected $telfixo;
    protected $celular;
    protected $nascimento;
    protected $senha;
    protected $livros_emprestados = [];
    const max_emprestimo = 5; 

    public function __construct($nome, $cpf, $email, $cep, $Ncasa, $telfixo, $celular, $nascimento, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->cep = $cep;
        $this->Ncasa = $Ncasa;
        $this->telfixo = $telfixo;
        $this->celular = $celular;
        $this->nascimento = $nascimento;
        $this->senha = $senha;
    }

    public function emprestar($livro){
        if(count($this->livros_emprestados) < self::max_emprestimo){
            array_push($this->livros_emprestados, $livro);
            return true; // ta emprestado 👌
        } else {
            return false; // limite chei 😥
        }

        public function devolver($livro){
            if(in_array($livro, $this->livros_emprestados)){
                $posicao = array_search($livro, $this->livros_emprestados);
                unset($this->livros_emprestados[$posicao]);
                return true; // devorveu 👍
            } else {
                return false; // nao tem nada pa devorve
            }
        }
    }

    public function create() {
        $query "INSERT INTO usuario (nome, cpf, email, cep, nCasa, telfixo, celular, dataNasc, senha) VALUES ('" . $this->nome . "', '" . $this->cpf . "', '" . $this->email . "', '" . $this->cep . "', '" . $this->Ncasa . "', '" . $this->telfixo . "', '" . $this->celular . "', '" . $this->nascimento . "', '" . $this->senha . "');";

        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function read($id){
        $query "SELECT * FROM {$this->tabela} WHERE id = {$this->id}; ";

        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function update($nome_mudado){
        $query = "UPDATE {$this->tabela} SET nome = '{$nome_mudado}' WHERE nome = '{$this->nome}';";

        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function delete($id){
        $query = "DELETE FROM {$this->tabela} WHERE id = {$this->id};";

        $resultado = $this->conexao->query($query);
        return $resultado;
    }
}