<?php
session_start();

if ((isset($_SESSION['usuario']) == false) and (isset($_SESSION['senha']) == false)) {
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
    <title>form php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/61b248fb6c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("header.php");?>
    <div class="row" style="margin-top: 2%;">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="..\controler\insert.php" method="post">
                        <div class="form-group">
                            <input type="text" name="titulo" class="form-control" placeholder="Título">
                        </div>
                        <div class="form-group">
                            <textarea name="descricao" cols="30" rows="5" placeholder="Descrição"
                                class="form-control"></textarea>
                        </div>
                        <input type="submit" value="Enviar" class="btn btn-success btn-block">
                    </form>
                </div>

            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Data de criação</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>
                        <?php
            include('..\model\conexao.php');
            $query = "SELECT * FROM `tarefa`";
            $sql = mysqli_query($conexao, $query);
            while ($row = mysqli_fetch_assoc($sql)) {  ?>
                        <tr>
                            <td> <?php echo $row['titulo']; ?> </td>
                            <td> <?php echo $row['descricao']; ?> </td>
                            <td> <?php echo $row['data']; ?> </td>
                            <td>
                                <a href="alterar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="..\controler\excluir.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    const $aviso = document.querySelector(".alerta");
    if ($aviso) {
        setTimeout(() => {
            $aviso.remove();
            <?php
            unset($_SESSION['mensagem'])
            ?>

        }, 2000);

    }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>