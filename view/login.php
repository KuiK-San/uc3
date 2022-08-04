<?php

session_start();

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == "guilherme" && $senha == "12345") {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        $_SESSION['mensagem'] = 'Bem-vindo';
        
        header('location: index.php');
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);

        header('location: login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>CRUD</h1>
    <form action="login.php" method="post">
        <p>
            <label for="usuario">Usuário</label><br>
            <input type="text" name="usuario">
        </p>
        <p>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>
</body>
</html>