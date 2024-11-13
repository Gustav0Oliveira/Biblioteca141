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
include('headerfooter/header.php');
?>
<main>
    <div class="boxCadslivro">
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
</main>
<?php
include('headerfooter/footer.php');
?>

</body>
</html>