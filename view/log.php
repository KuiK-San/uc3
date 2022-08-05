<?php

session_start();

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $user_login = $_POST['usuario'];
    $senha_login = $_POST['senha'];

    include('../model/conexao.php');

    $query = "SELECT `usuario`, `senha` FROM `usuario` WHERE `usuario` = '$user_login' AND `senha` = '$senha_login';";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_assoc($sql);

    $senha_db = $row['senha'];

    if ($senha_login == $senha_db) {
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


}else{
    header('location: login.php');
}
?>