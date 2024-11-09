<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Biblioteca 141 - Cadastro Livro</title>
</head>
<body>
<?php

if(isset($_POST['submit']))
{
   

    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $genero= $_POST['genero'];
    $qtd_disponivel = $_POST['qtd_disponivel'];
    $ano_lancamento = $_POST['ano_lancamento'];
   
   include_once('config\database.php');
   $result = mysqli_query($conexao,"INSERT INTO funcionarios(nome,autor,genero,qtd_disponiveis,ano_lancamento) 
   values ('$nome','$autor','$genero','$qtd_disponivel','$ano_lancamento')");

}
?>
<nav>
        <ul class="menu">
            <li><a class="link"href="home.php">Home</a></li>
            <li><a class="link"href="emprestimo.php">Emprestimo</a></li>
            <li><a class="link"href="buscar.php">Buscar</a></li>
            <li><a class="link"href="cadastro_usuario.php">Cadastro Usuario</a></li>
            <li><a class="link"href="cadastro_livro.php">Cadastro Livro</a></li>
            <li><a class="link"href="lista_livros.php">Lista de Livros Cadastrados</a></li>
            <li><a class="link"href="login.php">Login</a></li>

        </ul>
</nav>
</nav>
    <div class="box">
        <form action="index.php" method="post">
            <form>
                <legend><b>Cadastro de Livro</b></legend>
                <br>
                <form>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome:</label>
                    
                </div>
                <br><br> 
            </form>
                <div class="inputBox">
                    <input type="text" name="autor" id="autor" class="inputUser" required>
                    <label for="autor" class="labelInput">Autor:</label>
                    
                </div>
            </form>
                <br><br> 
            <form>
                <div class="inputBox">
                    <input type="text" name="genero" id="genero" class="inputUser" required>
                    <label for="genero" class="labelInput">Gênero:</label>
                
                </div>
                <br><br> 
            </form>
            <form>
                <div class="inputBox">
                    <input type="number" name="qtd_disponivel" id="qtd_disponivel" class="inputUser" required>
                    <label for="qtd_disponivel" class="labelInput">Quantidade Disponíveis:</label>
                
                </div>
                <br><br> 
            </form>         
            <form>
                <label for="ano_lancamento"><b>Data de Laçamento do livro :</b></label>
                <input type="date" name="ano_lancamento" id="ano_lancamento" required>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </form>
        </form>
    </div>
    
</body>
</html>