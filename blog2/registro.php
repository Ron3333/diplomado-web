<?php

include 'includes/header.php';

?>

<h1 align="center">Registro</h1>

<div align="center">
	<form id="formulario"  method="POST">
	    <div class="register">
	        <label for="nombre" >Nombre:</label>
	        <input type="text" id="nombre" name="nombre" required>
	    </div>
	    <div class="register">
	        <label for="email">Email:</label>
	        <input type="email" id="email" name="email" required>
	    </div>
	    <div class="register">
	        <label for="password" >Contraseña:</label>
	        <input type="password"  id="password" name="password" required>
	    </div>
	    <button type="submit">Registrarse</button>
    </form>
</div>

<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' ){

		$nombre = $conn->real_escape_string($_POST['nombre']);
		$email = $conn->real_escape_string($_POST['email']);
		//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$password = $conn->real_escape_string($_POST['password']);

		// Verificar si el email ya existe
        $sqlCheck = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultCheck = $conn->query($sqlCheck);

  		if ($resultCheck->num_rows > 0) {
           exit();
  		}

  		if(empty($nombre) || $nombre == '' || empty($email) || $email == '' || empty($password) || $password ==''){
			echo" <div class='alerta'> Error, algunos campos están vacíos </di>";
			exit();
		}

		$sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

		if ($conn->query($sql) === TRUE) {
		    echo "<div class='exito'>Registro exitoso. Ahora puedes <a href='login.php'>iniciar sesión</a>.</div>";
		} else {
	        echo "<div class='alerta'>Error : " . $conn->error . "</div>";
		}

		$conn->close();

 
	}



?>



<br>
<br>
<br>
<br>

<?php

	include 'includes/footer.php';
?>