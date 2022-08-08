<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>CRUD</h2>
                    </div>
                    <div class="card-body">
                        <form action="../controler/cadastro_db.php" method="post">
                            <fieldset>
                                <legend>Cadastro</legend>
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuário</label> <br>
                                    <input type="text" name="usuario" class="form-control" required
                                        placeholder="Digite um novo Usuario">
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha</label> <br>
                                    <input type="password" name="senha" class="form-control" required
                                        placeholder="Digite uma nova senha">
                                </div>
                                <div class="mb-3 text-center">
                                    <input type="submit" value="Cadastrar" class="btn btn-primary btn-block"> <br>
                                    <a href="login.php">Já tem uma conta? Entre</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>