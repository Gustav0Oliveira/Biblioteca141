<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Biblioteca141 - Buscar</title>
    
</head>
<body>
    
<?php


?>
<nav>
        <ul class="menu">
            <li><a class="link"href="home.php">Home</a></li>
            <li><a class="link"href="emprestimo.php">Emprestimo</a></li>
            <li><a class="link"href="buscar.php">Buscar</a></li>
            <li><a class="link"href="cadastro_usuario.php">Cadastro Usuario</a></li>
            <li><a class="link"href="cadastro_livro.php">Cadastro Livro</a></li>
            <li><a class="link"href="login.php">Login</a></li>

        </ul>
</nav>
    <div class="box">
        <form action="index.php" method="post">
            <form>
                <legend><b>Biblioteca - Pesquisa</b></legend>
                <br><br> <br><br> 
                <form>
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">ID livro:</label>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </div>
                <br><br> 
            </form>
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Livro :</label>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </div>
            </form>
                <br><br> 
            <form>
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Autor:</label>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </div>
                <br><br> 
            </form>
            <form>    
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Gênero :</label>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </div>
                <br><br>
            </form>    
            <form>
                <label for="nascimento"><b>Data de lançamento do livro :</b></label>
                <input type="date" name="nascimento" id="nascimento" required>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </form>
        </form>
    </div>
</body>
</html>