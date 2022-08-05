<?php

session_start();

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    include('../model/conexao.php');

    $query = "SELECT * FROM `usuario` WHERE `usuario` = '$usuario' AND `senha` = '$senha';";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_assoc($sql);

    if (empty($row)) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        $_SESSION['mensagem'] = 'Bem-vindo';

        header('location: index.php');
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);

        $_SESSION['erro_login'] = 'Usuario ou senha invalidos';


        header('location: login.php');
    } 

/*     if ($usuario == "guilherme" && $senha == "12345") {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        $_SESSION['mensagem'] = 'Bem-vindo';

        header('location: index.php');
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);

        $_SESSION['erro_login'] = 'Usuario ou senha invalidos';


        header('location: login.php');
    } */
}else{
    header('location: login.php');
}
?>