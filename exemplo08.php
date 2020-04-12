<?php

$a = 30;

$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a == $b);

$c = 55.0;

echo "<br>";

var_dump($c == $b);


echo "<br>";
//Verifica se é igual até o tipo
var_dump($c === $b);


//Diferente

echo "<br>";

var_dump($c != $b);

echo "<br>";
//verificando se até o tipo é diferente
var_dump($c !== $b);

//Tipos de operadores exclusivos do php7
echo "<br>";
//spaceship
//se o a for maior 1
//se forem iguais retorna 0
//se o a for menor retorna -1
var_dump($a <=> $b);

//Operador null coalesce

$a = NULL;

$b = NULL;

$c = 10;

echo "<br>";
echo $a ?? $b ?? $c;

echo "<br>";
$b = 7;
echo $a ?? $b ?? $c;

//Operadores incrementais e decrementais
echo "<br>";

$a = 30;

$b = 55;

echo $a++;

echo "<br>";

echo $a;

echo "<br>";

echo ++$a;

echo "<br>";

echo $a;

echo "<br>";

echo $a--;

echo "<br>";

echo $a;

echo "<br>";

echo --$a;

echo "<br>";

echo $a;






?>