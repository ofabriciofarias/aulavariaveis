<?php

/*
Tipos básicos de dados
*/
$nome = "LABEX";

$site = 'www.projetoslabex.com.br';

$ano = 2015;

$salario = 400.50;

$bloqueado = false;

/*
Tipos compostos de dados
*/
$frutas = array("abaxaxi", "laranja", "manga");

echo $frutas[2];

echo "<br>";

$nascimento = new DateTime();

var_dump($nascimento);

/*
Tipos especiais de dados
*/
echo "<br>";

$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo);

echo "<br>";

$nulo = NULL;

$vazio = "";

echo $nulo;

echo "<br>";

echo $vazio;
?>