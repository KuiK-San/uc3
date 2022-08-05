<?php

require('../model/conexao.php');

$user = $_POST['usuario'];
$password = $_POST['senha'];

$query = "INSERT INTO `usuarios`(`user`, `senha`) VALUES ('$user','$password')";

$sql = mysqli_query($conexao, $query);

$_SESSION['mensagem'] = 'tarefa salva com sucesso!!!!';

header("location: ../view/login.php");
?>