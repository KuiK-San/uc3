<?php
//incluir

require('../model/conexao.php');

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$query = "INSERT INTO `tarefa`( `titulo`, `descricao`) VALUES ('$titulo','$descricao')";

$sql = mysqli_query($conexao, $query);

header("location: ../view/index.php");
?>