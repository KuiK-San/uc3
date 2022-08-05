<?php

session_start();

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $user_login = $_POST['usuario'];
    $senha_login = $_POST['senha'];

    include('../model/conexao.php');

    $query = "SELECT * FROM `usuarios` WHERE `user` = '$user_login' AND `senha` = '$senha_login';";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_assoc($sql);

    $senha_db = $row['senha'];

    if ($senha_login == $senha_db) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        $_SESSION['mensagem'] = 'Bem-vindo';

        header('location: ../view/index.php');
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);

        $_SESSION['erro_login'] = 'Usuario ou senha invalidos';


        header('location: ../view/login.php');
    }


}else{
    header('location: ../view/login.php');
}
?>