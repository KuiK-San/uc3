<?php

$servidor = 'localhost';
$bd = 'tarefas';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if(!$conexao){
    echo 'falha ao estabelecer conexão';
}

?>