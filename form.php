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
    <form action="processa.php" method="post">
        <p>
            <label for="" name="titulo">Titulo</label> <br>
            <input type="text" name="titulo" id="">
        </p>
        <p>
            <label for="">Descrição</label> <br>
            <textarea name="descricao" cols="30" rows="10"></textarea>
        </p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>