<?php

session_start();

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $user_login = $_POST['usuario'];
    $senha_login = $_POST['senha'];

    include('../model/conexao.php');

    $query = "SELECT * FROM `usuarios` WHERE `user` = '$user_login'";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_assoc($sql);

    $senha_db = strval($row['senha']);
/* Comparing the password entered by the user with the password stored in the database. */
    $temsenha = password_verify($senha_login, $senha_db); 
    
    if ($temsenha) {
        $_SESSION['usuario'] = $user_login;
        $_SESSION['senha'] = $senha_login;

        $_SESSION['mensagem'] = 'Bem-vindo ' . $_SESSION['usuario'];
        $_SESSION['tipomsg'] = 'success';

        header('location: ../view/index.php');
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);

        $_SESSION['errouser'] = TRUE;
        $_SESSION['tipomsg'] = 'success';


        header('location: ../view/login.php');
    }


}else{
    header('location: ../view/login.php');
}
?>