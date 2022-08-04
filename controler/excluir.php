<?php

    $id = $_GET["id"];

    require('../model/conexao.php');

    $query = "DELETE FROM `tarefa` WHERE `tarefa`.`id` = $id";

    $sql = mysqli_query($conexao, $query);

    $_SESSION['mensagem'] = 'tarefa excluida com sucesso!!!!';


    header('location: ../view/index.php');

?>