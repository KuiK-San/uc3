<?php

    $id = $_GET["id"];

    require('conexao.php');

    $query = "DELETE FROM `tarefa` WHERE `tarefa`.`id` = $id";

    $sql = mysqli_query($conexao, $query);

    header('location: form.php');

?>