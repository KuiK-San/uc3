<?php

require('../model/conexao.php');

$user = $_POST['usuario'];
$password = $_POST['senha'];

$query = "INSERT INTO `usuarios`(`user`, `senha`) VALUES ('$user','$password')";

$sql = mysqli_query($conexao, $query);

$_SESSION['mensagem'] = 'Cadastrado com sucesso!!';
$_SESSION['tipomsg'] = 'success';

header("location: ../view/login.php");
?>