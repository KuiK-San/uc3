<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>