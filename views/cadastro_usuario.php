<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Biblioteca 141 - Cadastro Usuario</title>
</head>
<body>
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
                <legend><b>Cadastro de Usuario</b></legend>
                <br>
                <form>
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Nome completo:</label>
                    
                </div>
                <br><br> 
            </form>
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">CPF :</label>
                    <br><br>
                </div>
            </form>
            <form>    
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">E-mail:</label>
                
                </div>
                <br><br>
            </form> 
            <form>
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Cep:</label>
                
                </div>
                <br><br> 
            </form>
            <form>
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Nº da casa:</label>
                
                </div>
                <br><br> 
            </form>
            <form>    
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Telefone fixo:</label>
                
                </div>
                <br><br>
            </form> 
            <form>    
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Celular:</label>
                
                </div>
                <br><br>
            </form>       
            <form>
                <label for="nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="nascimento" id="nascimento" required>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </form>
        </form>
    </div>
    
</body>
</html>