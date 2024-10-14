<?php
declare(strict_types= 1);

//  retornar que sea int, float, string, bool, array. object, null
function sumarEntero(int $entero1, int $entero2):int | float
{
    //return $entero1 + $entero2;
    return ($entero1 + $entero2)/2;
}

$resultado = sumarEntero(2, 5);
echo $resultado;

echo "<br>";