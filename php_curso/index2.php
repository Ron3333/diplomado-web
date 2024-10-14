<?php 

$matriz = [1,2,3,4.4];

echo $matriz[1];
echo "<br>";
var_dump($matriz);
$matriz[2]=50;
echo "<br>";
var_dump($matriz);
$matriz[]=100;
echo "<br>";
var_dump($matriz);

$array2[]= 1;
$array2[]= 10;
$array2[]= 100;
$array2[]= 1000;
$array2[]= 10000;
echo "<br>";
var_dump($array2);

$matriz3 = [10, 'Victor', 15, false];
echo "<br>";
echo $matriz3[1];
echo "<br>";
var_dump($matriz3);


$datos = [
    'nombre' => 'Pepe',
    'apellido'  => 'Trueno',
    'email' => 'pepe@gmail.com'
];

echo "<br>";
echo $datos['nombre'];
echo "<br>";
echo $datos['email'];

?>