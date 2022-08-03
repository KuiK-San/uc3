<?php

if(!isset($_SESSION)){
    session_start(); //verificar se tem seção ativa, se não starta a sessão;
}

$servidor = 'localhost';
$bd = 'tarefas';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if(!$conexao){
    echo 'falha ao estabelecer conexão';
}

?>