<?php
include 'config.php';
include 'funciones.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">

</head>
<body>

<div>
	<ul class="lista">
		<li><a href="/index.php">Inicio</a></li>
		<li><a href="/registro.php">Registro</a></li>
		<li><a href="/login.php">Login</a></li>
		<?php if (isLoggedIn()): ?>
		<li><a href="/logout.php">Cerrar sesión</a></li>
			<?php if (isAdmin()): ?>
				<li><a href="/admin/index.php">Administración</a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
	<?php if (isLoggedIn()): ?>
			<span class="usuario" ><?php echo "Hola ". $_SESSION['user_name'] ?> </span>
	<?php endif; ?>
</div>



