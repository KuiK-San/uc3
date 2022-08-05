<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<h1>CRUD</h1>
    <form action="../controler/cadastro_db.php" method="post">
        <p>
            <label for="usuario">Usuário</label><br>
            <input type="text" name="usuario" required>
        </p>
        <p>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha" required>
        </p>
        <p>
            <input type="submit" value="Cadastrar">
            <a href="login.php">Já tem uma conta? Entre</a>
        </p>
    </form>
</body>
</html>