<?php

class banco {
    const host = 'localhost';
    const banco = 'biblioteca141';
    const usuario = 'root';
    const senha = '';
    public $conexao;

    public function conectar(){
        $this->conexao = new mysqli(self::host, self::banco, self::usuario, self::senha, self::, self::banco);

        
        if(!$this->conexao){
            echo 'erro na conexao';
        }else{
            return $this->conexao;
        }
    }
}

?>