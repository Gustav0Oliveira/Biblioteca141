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
include('headerfooter/header.php');
?>
<main>
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
</main>
<?php
include('headerfooter/footer.php');
?>

</body>
</html>