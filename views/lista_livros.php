<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Biblioteca 141 - Lista Livros</title>
</head>
<body>
<?php
include('headerfooter/header.php');
?>
<main>

    <div class="boxLista">
        <form action="index.php" method="post">
            
        <legend><b>Lista livros</b></legend>

    <table>
    <tr>
        <td class="tabela">Nome do livro </td>
        <td class="tabela">Autor</td>
        <td class="tabela">Gênero</td>
        <td class="tabela">Ano</td>
    </tr>
    <tr>
        <td class="descricao"> A Dança das Sombras</td><br>
        <td class="descricao">Anya Petrova</td>
        <td class="descricao">Fantasia épica</td>
        <td class="descricao">2023</td>
    </tr>
    <tr>
        <td class="descricao">O Enigma da Ilha Deserta</td>
        <td class="descricao">Thomas Blackwell</td>
        <td class="descricao">Mistério/Thriller</td>
        <td class="descricao">2021</td>
    </tr>
    <tr>
        <td class="descricao">Flores Sob a Cinza</td>
        <td class="descricao">Maya Silva</td>
        <td class="descricao">Romance histórico</td>
        <td class="descricao">2018</td>
    </tr>
    <tr>
        <td class="descricao">A Máquina do Tempo</td>
        <td class="descricao">Ethan Carter</td>
        <td class="descricao">Ficção científica</td>
        <td class="descricao">2025 (futuro)</td>
    </tr>
    </table>
        </form>
    </div>
</main>
<?php
include('headerfooter/footer.php');
?>
</body>
</html>