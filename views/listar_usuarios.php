<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Lista de Usuários</title>
</head>
<body>
<?php
include_once('headerfooter/header.php');

// Incluir o controlador
require_once "./controllers/UsuarioController.php";

$usuarioController = new UsuarioController();
$usuarios = $usuarioController->listarUsuarios(); // Obtém a lista de usuários
?>
<div class="boxLista">
    <h2>Lista de Usuários</h2>
    <?php if ($usuarios && count($usuarios) > 0): ?>
        <table class="tabela">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['data_nascimento']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum usuário encontrado.</p>
    <?php endif; ?>
</div>
<?php include_once('headerfooter/footer.php'); ?>
</body>
</html>