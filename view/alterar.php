<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <?php
    $id = $_GET["id"];

    require('../model/conexao.php');

    $query = "SELECT `id`, `titulo`, `descricao` FROM `tarefa` WHERE `id` = $id";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_assoc($sql);


    $id = $row['id'];   
    $titulo = $row['titulo'];
    $descricao = $row['descricao'];

    ?>
    <h2>CRUD</h2>
    <form action="../controler/update.php?id=<?php echo $id ?>" method="post">
        <fieldset>
            <legend>Cadastro de tarefas</legend>
            <p>
                <label for="">Id</label> <br>
                <input type="text" name="id" id="" value="<?php echo $id ?>" disabled>
            </p>
            <p>
                <label for="" name="titulo">Titulo</label> <br>
                <input type="text" name="titulo" id="" value="<?php echo $titulo?>">
            </p>
            <p>
                <label for="">Descrição</label> <br>
                <textarea name="descricao" cols="30" rows="10"><?php echo $descricao ?></textarea>
            </p>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>

</html>