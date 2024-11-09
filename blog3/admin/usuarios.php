<?php

include '../includes/header.php';
if (!isAdmin()) {
    redirect('../index.php');
}

// Crear usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['crear'])) {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $conn->real_escape_string($_POST['password']);  
    $rol = $conn->real_escape_string($_POST['rol']);

    // Verificar si el email ya existe
        $sqlCheck = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultCheck = $conn->query($sqlCheck);

  	if (!$resultCheck->num_rows > 0) {
            $sql = "INSERT INTO usuarios (nombre, email, password, rol) VALUES ('$nombre', '$email', '$password', '$rol')";
		    if ($conn->query($sql) === TRUE) {
		        echo "<div align='center' >Usuario creado con éxito.</div>";
		    } else {
		        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
		    }
  	}

  
}

// Actualizar usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['actualizar'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $rol = $conn->real_escape_string($_POST['rol']);

    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', rol='$rol' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<divalign='center' >Usuario actualizado con éxito.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

// Eliminar usuario
if (isset($_GET['eliminar'])) {
    $id = $conn->real_escape_string($_GET['eliminar']);
    $sql = "DELETE FROM usuarios WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<div align='center' >Usuario eliminado con éxito.</div>";
    } else {
        echo "<div align='center' >Error: " . $conn->error . "</div>";
    }
}

// Leer usuarios
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<h2 align="center">Gestión de Usuarios</h2>

<!-- Formulario para crear usuario -->
<div align="center">
	<h3>Crear nuevo usuario</h3>
	<form method="post" >
	    <div>
	        <label for="nombre" >Nombre</label>
	        <input type="text" id="nombre" name="nombre" required>        
	    </div>
	    <br>
	    <div>
	        <label for="email" >Email</label>
	        <input type="email" id="email" name="email" required>
	    </div>
	     <br>
	    <div>
	    	
	        <label for="password" >Contraseña</label>
	        <input type="password" id="password" name="password" required>
	         <br>
	    </div>
	    <div>
	    	<br>
	        <label for="rol">Rol</label>
	        <select id="rol" name="rol" required>
	            <option value="usuario">Usuario</option>
	            <option value="admin">Admin</option>
	        </select>
	    </div>
	         <br>
	    <button type="submit" name="crear" >Crear Usuario</button>
	</form>

	<!-- Tabla de usuarios -->
	<h3>Usuarios existentes</h3>
	<table border="1px">
	    <thead>
	        <tr>
	            <th>ID</th>
	            <th>Nombre</th>
	            <th>Email</th>
	            <th>Rol</th>
	            <th>Acciones</th>
	        </tr>
	    </thead>
	    <tbody>
	        <?php
	        if ($result->num_rows > 0) {
	            while($row = $result->fetch_assoc()) {
	                echo "<tr>";
	                echo "<td>" . $row['id'] . "</td>";
	                echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
	                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
	                echo "<td>" . $row['rol'] . "</td>";
	                echo "<td>
	                        <a href='?editar=" . $row['id'] . "' class='btn btn-sm btn-warning'>Editar</a>
	                        <a href='?eliminar=" . $row['id'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"¿Estás seguro?\")'>Eliminar</a>
	                      </td>";
	                echo "</tr>";
	            }
	        } else {
	            echo "<tr><td colspan='5'>No hay usuarios</td></tr>";
	        }
	        ?>
	    </tbody>
	</table>
</div>


<!-- Formulario para editar usuario -->
<?php
if (isset($_GET['editar'])) {
    $id = $conn->real_escape_string($_GET['editar']);
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $usuario = $result->fetch_assoc();
?>
<div align="center">
<h3>Editar usuario</h3>
<form method="post" class="mb-4">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    <div>
        <label for="nombre" >Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($usuario['nombre']); ?>" required>
    </div>
     <br>
    <div>
        <label for="email">Email</label>
        <input type="email"  id="email" name="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" required>
       
    </div>
    <br>
    <div>
        <label for="rol" >Rol</label>
        <select  id="rol" name="rol" required>
            <option value="usuario" <?php echo $usuario['rol'] == 'usuario' ? 'selected' : ''; ?>>Usuario</option>
            <option value="admin" <?php echo $usuario['rol'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
        </select>
    </div>
    <br>
    <button type="submit" name="actualizar" >Actualizar Usuario</button>
</form>
</div>
<?php
    }
}
?>

<?php include '../includes/footer.php'; ?>