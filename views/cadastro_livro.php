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
include_once('headerfooter/header.php');

if(isset($_POST["titulo"])){
    require_once "../controllers/LivroController.php";
    $controllerLivro = new LivroController();
    $controllerLivro->create($_POST["titulo"],$_POST["autor"],$_POST["isbn"],$_POST["genero"],$_POST["qtd_disponivel"],$_POST["ano_lancamento"]);
}
?>
<main>
    <div class="boxCadslivro">
        <form action="cadastro_livro.php" method="post">
            <legend><b>Cadastro de Livro</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="titulo" id="titulo" class="inputUser " required>
                <label for="titulo" class="labelInput">Título:</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="autor" id="autor" class="inputUser " required>
                <label for="autor" class="labelInput">Autor:</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="isbn" id="isbn" class="inputUser " required>
                <label for="isbn" class="labelInput">ISBN:</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="genero" id="genero" class="inputUser " required>
                <label for="genero" class="labelInput">Gênero:</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="number" name="qtd_disponivel" id="qtd_disponivel" class="inputUser " required>
                <label for="qtd_disponivel" class="labelInput">Quantidade Disponíveis:</label>
            </div>
            <br><br>
            <label for="ano_lancamento"><b>Data de Lançamento do livro:</b></label>
            <input type="date" name="ano_lancamento" id="ano_lancamento" required>
            <br><br>
            <input type="submit" name="submit" id="submit" value="Cadastrar Livro">
        </form>
    </div>
</main>
<?php
include_once('headerfooter/footer.php');
?>
</body>
</html>