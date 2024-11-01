

<?php
	include 'includes/header.php';

	echo "<h1 align='center'>Blog</h1>";

	$sql="SELECT a.*, u.nombre FROM `articulos` a, `usuarios` u WHERE a.usuario_id=u.id ORDER BY a.created_at DESC;";

	$articulos = $conn->query($sql);

	if ($articulos->num_rows > 0) {

		while($row = $articulos->fetch_assoc() ) {
			echo $row['id'];
			echo "<br>";
			echo $row['titulo'];
			echo "<br>";
			echo $row['contenido'];
			echo "<br>";
			echo $row['imagen'];
			echo "<br>";
			echo $row['nombre'];
			echo "<br> <hr>";
		}

	}else{
		echo "No hay artículos";
	}

$conn->close();

include 'includes/footer.php';
?>