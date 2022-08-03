<?php

    $id = $_GET["id"];

    require('../model/conexao.php');

    $query = "DELETE FROM `tarefa` WHERE `tarefa`.`id` = $id";

    $sql = mysqli_query($conexao, $query);

    header('location: ../view/index.php');

?>