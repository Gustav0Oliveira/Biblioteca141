<?php

require_once './controllers/livroController.php';

$acao = $_GET['acao'];

switch($acao){
    case 'cadastrar':
        $livroController = new livroController();
        $livroController->cadastrarLivro($_GET['titulo'], $_GET['autor'], $_GET['genero']); 
        break;

    default:
        include 'views/cadastro_livro.php';


}