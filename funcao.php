<?php

$nome = "Fabricio";

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){

	$nome = "João";
	
	echo $nome;

}

teste();

teste2();

?>