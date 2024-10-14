<?php

function suma($a, $b=10){
	$c = $a + $b;
	return $c;
}



$x = suma(2,5);
echo "El valor de la funcion es : $x <br>";

$x = suma(2);
echo "El valor de la funcion es : $x <br>";

$z = 20;

function miFuncion($z){
		$z= 30;
		echo "Valor de z dentro la funcion $z <br>";
}

miFuncion($z);

echo "Valor de z fuera de la funcion $z <br>";

function concatenar(...$palabras){
    $resultado ='';
    foreach ($palabras as $palabra){
        //$resultado = $resultado . $palabra. " ";
        $resultado .=  $palabra. " ";
    }
    echo $resultado;
}
echo "<br>";
concatenar('Curso', 'de','php','en', 'AEP');





?>