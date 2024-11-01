<?php

require_once 'controllers/livroControllers.php';

$acao = $_GET['acao'];

switch($acao){
    case 'cadastrar':
        $livroController = new livroController();
        $livroController->cadastrarLivro($_GET['titulo'], $_GET['autor'], $_GET['genero']); 
        break;

    default:
        include 'views/formCadastroLivro.php';


}