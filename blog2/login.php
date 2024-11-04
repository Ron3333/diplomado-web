<?php
 include 'includes/header.php';
?>

<h1 align="center">Login</h1>

	<h1>Iniciar Sesión</h1>
		<div align="center">
			<form method="POST">
			    <div>
			        <label for="email" >Email</label>
			        <input type="email"  id="email" name="email" required>
			    </div>
			    <br>
			    <div>
			        <label for="password">Contraseña</label>
			        <input type="password" id="password" name="password" required>
			    </div>
			    <br>
			    <button type="submit" >Iniciar sesión</button>
			</form>
		</div>

<?php

	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    $email = $conn->real_escape_string($_POST['email']);
	    $password = $_POST['password'];

	    $sql = "SELECT id, nombre, password, rol FROM usuarios WHERE email = '$email'";
	    $result = $conn->query($sql);
	
	    if ($result->num_rows == 1) {
	        $user = $result->fetch_assoc();
	        //if (password_verify($password, $user['password'])) {
	        if ($password == $user['password']){
	            $_SESSION['user_id'] = $user['id'];
	            $_SESSION['user_name'] = $user['nombre'];
	            $_SESSION['user_role'] = $user['rol'];
	            redirect('index.php');
	        } else {
	            echo "<div class='alerta'>Contraseña incorrecta.</div>";
	        }
	    } else {
	        echo "<div class='alert alert-danger'>Usuario no encontrado.</div>";
	    }
	}

	include 'includes/footer.php';
?>