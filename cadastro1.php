<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro 1</title>
    </head>
    <body>
        <form method="post" action="cadastro2.php">
            <h1>Pagina de cadastro 1</h1>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." required></input><br>
            <!--DIVISÃO-->
            <label for="sexo">Sexo:</label>
            <input type="radio" id="Masculino" id="sexo" name="sexo" value="Masculino" required>Masculino</input>
            <input type="radio" id="Feminino" id="sexo" name="sexo" value="Feminino" required>Feminino</input>
            <br>
            <input type="submit" value="Proximo"></input>
        </form>
    </body>
</html>