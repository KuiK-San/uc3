<?php

session_start();

if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);

    header('location: login.php');
}

$logado = $_SESSION['usuario'];

?>


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
    <div class="alerta">
        <?php
        if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
        }
        //session_unset();
        ?>
        <input type="button" value="OK" onclick="Removebuton()">
    </div>

    <h2>CRUD</h2>
    <a href="logout.php">Logout</a><br>
    <form action="../controler/insert.php" method="post">
        <fieldset>
            <legend>Cadastro de tarefas</legend>
            <p>
                <label for="" name="titulo">Titulo</label> <br>
                <input type="text" name="titulo" id="" required>
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
                <td> <a href="alterar.php?id=<?php echo $row['id']?>">Alterar</a>&nbsp; <a
                        href="../controler/excluir.php?id=<?php echo $row['id']?>">excluir </a> </td>

            </tr>
            <?php       
                }
            ?>
        </tbody>
    </table>
    <script>
        const $alerta = document.querySelector('.alerta');

        if($alerta){
            setTimeout(() => {
                $alerta.remove();
            }, 3000);
        }

        function Removebuton(){
            $alerta.remove()
        }
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>