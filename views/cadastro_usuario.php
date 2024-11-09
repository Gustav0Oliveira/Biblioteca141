<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Biblioteca 141 - Cadastro Usuario</title>
</head>
<body>
<?php

if(isset($_POST['submit']))
{
   

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $Ncasa = $_POST['Ncasa'];
    $telFixo = $_POST['telFixo'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
   
   include_once('config\database.php');
   $result = mysqli_query($conexao,"INSERT INTO funcionarios(nome,cpf,email,cpf,Ncasa,telFixo,celular,nascimento) 
   values ('$nome','$cpf','$email','$cep','$Ncasa','$telFixo','$celular','$nascimento')");

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
                <legend><b>Cadastro de Usuario</b></legend>
                <br>
                <form>
                <div class="inputBox">
                    <input type="text" name="cargo" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo:</label>
                    
                </div>
                <br><br> 
            </form>
                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF :</label>
                    <br><br>
                </div>
            </form>
            <form>    
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail:</label>
                
                </div>
                <br><br>
            </form> 
            <form>
                <div class="inputBox">
                    <input type="number" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="labelInput">Cep:</label>
                
                </div>
                <br><br> 
            </form>
            <form>
                <div class="inputBox">
                    <input type="number" name="Ncasa" id="Ncasa" class="inputUser" required>
                    <label for="Ncasa" class="labelInput">Nº da casa:</label>
                
                </div>
                <br><br> 
            </form>
            <form>    
                <div class="inputBox">
                    <input type="tel" name="telFixo" id="telfixo" class="inputUser" required>
                    <label for="telfixo" class="labelInput">Telefone fixo:</label>
                
                </div>
                <br><br>
            </form> 
            <form>    
                <div class="inputBox">
                    <input type="tel" name="celular" id="celular" class="inputUser" required>
                    <label for="celular" class="labelInput">Celular:</label>
                
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