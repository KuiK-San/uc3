<?php

$id = $_GET['id'];

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

require('conexao.php');

$query = "UPDATE `tarefa` SET `titulo`='$titulo',`descricao`='$descricao' WHERE id = $id";

$sql = mysqli_query($conexao, $query);

header("location: form.php");

?>