<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>CRUD</h1>
    <form action="../controler/log.php" method="post">
        <p>
            <label for="usuario">Usuário</label><br>
            <input type="text" name="usuario">
        </p>
        <p>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>
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
</body>
</html>