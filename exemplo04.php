<?php

$nome = $_GET["a"];

var_dump($nome);

echo "<br>";

//Pega o IP
//$ip = $_SERVER["REMOTE_ADDR"];

//Pega o arquivo acessado durante a seção
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>