<?php 
$a= 50;

function miFuncion(){

	global $a ;
	$a=20;
}

echo "Valor a: $a <br>";

miFuncion();

echo "Valor a: $a <br>";

$a = 1100;

echo "Valor a: $a <br>";

miFuncion();

echo "Valor a: $a <br>";

?>