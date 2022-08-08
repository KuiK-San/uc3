<?php

$id = $_GET['id'];

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

require('../model/conexao.php');

$query = "UPDATE `tarefa` SET `titulo`='$titulo',`descricao`='$descricao' WHERE id = $id";

$sql = mysqli_query($conexao, $query);

$_SESSION['mensagem'] = 'tarefa alterada com sucesso!!!!';
$_SESSION['tipomsg'] = 'warning';


header("location: ../view/index.php");

?>