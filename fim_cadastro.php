<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Final do cadastro</title>
    </head>
    <body>
        <h1>Cadastro Finalizado</h1>
        <p>Nome: <?php echo htmlspecialchars($_POST['nome']); ?></p>
        <p>Email: <?php echo htmlspecialchars($_POST['sexo']); ?></p>
        <p>Comentario: <?php echo htmlspecialchars($_POST['comentario']); ?></p>
    </body>
</html>