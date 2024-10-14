<?php
$a = true;
$b = false;
$c = true;
$f = true;
 /* Que paso aqui? */
$d = $a and $b;

var_dump($d);

echo "<br>";

$d = $a && $b;

var_dump($d);

echo "<br>";
$d = $f || $b;
var_dump($d);

echo "<br>";
$d = $f or $b;
var_dump($d);

echo "<br>";
$x = ($a && $b) || ($f && $c);
var_dump($x);

?>