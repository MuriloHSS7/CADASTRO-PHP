<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro 2</title>
    </head>
    <body>
    <form method="post" action="fim_cadastro.php" header="fim_cadastro.php">
            <h1>Pagina de cadastro 2</h1>
            <label for="senha">Senha:</label>
            <input id="Senha" type="password" placeholder="Digite sua senha..." required></input>
            <br>
            Comentário: <br>
            <textarea id="comentario" name="comentario" rows="5" cols="20" placeholder="Digite seu comentário" required></textarea>
            <br>
            <!-- type=hidden value=php echo $post'nome'-->
            <input type="submit" value="Encerrar cadastro"></input>
        </form>
    </body>
</html>