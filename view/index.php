<?php

session_start();

if((isset($_SESSION['usee']) == true) and (!isset($_SESSION['senha']))){
    
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <h2>CRUD</h2>
    <form action="../controler/insert.php" method="post">
        <fieldset>
            <legend>Cadastro de tarefas</legend>
            <p>
                <label for="" name="titulo">Titulo</label> <br>
                <input type="text" name="titulo" id="">
            </p>
            <p>
                <label for="">Descrição</label> <br>
                <textarea name="descricao" cols="30" rows="10"></textarea>
            </p>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Data de Criação</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require('../model/conexao.php');
                
                $query = "SELECT * FROM `tarefa`";
                
                $sql = mysqli_query($conexao, $query);

                while ($row = mysqli_fetch_assoc($sql)) { ?>

                    <tr>
                        <td> <?php echo $row['titulo'] ?> </td>
                        <td> <?php echo $row['descricao'] ?> </td>
                        <td> <?php echo $row['data'] ?> </td>
                        <td> <a href="alterar.php?id=<?php echo $row['id']?>">Alterar</a>&nbsp; <a href="../controler/excluir.php?id=<?php echo $row['id']?>">excluir </a> </td>

                    </tr>
            <?php       
                }
            ?>
        </tbody>
    </table>
</body>

</html>