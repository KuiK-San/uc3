<?php
$senha = "senha";
$criptografia  = '$2y$10$0GU3zwm5sp71EV6k31I8k.IvTR58vNxLRB5C7fKid7bG9BRYMpKRu';
echo $criptografia;

$cripto = password_verify($senha, $criptografia);

var_dump($cripto);
var_dump($senha);

?>