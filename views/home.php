<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Biblioteca141 - Home</title>
</head>
<body>
<?php
include('headerfooter/header.php');

require_once "../controllers/LivroController.php";

$livroController = new livroController();
$livros = $livroController->read($id);

if(count($livros) > 0){
    echo "<h2>Lista de Livros</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>Gênero</th></tr>";

    foreach($livros as $livros){
        echo "<tr>";
        echo "<td>" . htmlspecialchars($livro['id']) . "</td>";
        echo "<td>" . htmlspecialchars($livro['titulo']) . "</td>";
        echo "<td>" . htmlspecialchars($livro['autor']) . "</td>";
        echo "<td>" . htmlspecialchars($livro['genero']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nenhum livro encontrado.</p>";
}

include('headerfooter/footer.php');
?>

</body>
</html>