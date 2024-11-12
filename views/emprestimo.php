<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
<?php
include('headerfooter/header.php');
?>
<main>
</nav>
    <div class="boxEmprestimo">
        <form action="index.php" method="post">
            <form>
                <legend><b>Emprestar</b></legend>
                <br>
                <br><br> <br><br>
               
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">ID Usuario:</label>
                    <br><br> <br><br>
                </div>
                
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Cod Livro :</label>
                    
                </div>
            </form>
                <br><br> <br><br>
              
            <form>
                <label for="nascimento"><b>Data de Emprestimo :</b></label>
                <input type="date" name="nascimento" id="nascimento" required>
                <br><br>
                <label for="nascimento"><b>Data de Devolução :</b></label>
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