<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
	<h1>Estoy en PHP</h1>

<?php 

	/* Variables*/
	$nombre = "Pepe";
	
	echo "<h1>Hola Mundo  $nombre  !!!!</h1>" ;
	echo "<h1>Hola Mundo \" $nombre \" !!!!</h1>" ;
	echo "<h1>Hola Mundo ".$nombre." 2 !!!!</h1>" ;
	echo '<h1>Hola Mundo '.$nombre. ' !!!!</h1>' ;

	$numero = 123;
	$booleano = false;
	$top_speed = 104.87;

	echo $numero;
	echo "<br>";
	echo $booleano;
	echo "<br>";
	var_dump($booleano);
	echo "<br>";
	var_dump($top_speed);

	/* Constantes */

	define("TITLE", "Defining Constants");
	echo "<br>";
	echo TITLE;
	define("PI", 3.1416);
	echo "<br>";
	echo PI;


?>
 
<script>

	 alert("Hola JavaScript "  ); 
</script>




</body>
</html>