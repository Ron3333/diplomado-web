<?php

include '../includes/header.php';

if (!isAdmin()) {
    redirect('../index.php');
}

$actualizar = true;

// Crear artículo start
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['crear'])) {

    $titulo = $conn->real_escape_string($_POST['titulo']);
    $contenido = $conn->real_escape_string($_POST['contenido']);
    $usuario_id = $_SESSION['user_id'];

    if ($_FILES["imagen"]["error"] > 0) {
        $error = "Error, ningún archivo de imagen esta seleccionado";
    }else{
        if(empty($titulo) || $titulo == '' || empty($contenido) || $contenido == ''){
            $error = "Error, algunos campos están vacíos";
        }else{  

            $image = $_FILES['imagen']['name'];
            $imageArr = explode('.', $image);
            $rand = rand(1000, 99999);
            $newImageName = $imageArr[0] .$rand . '.' . $imageArr[1];
            $rutaFinal = "../img/" . $newImageName;
            move_uploaded_file($_FILES['imagen']['tmp_name'] ,$rutaFinal);

                $sql = "INSERT INTO articulos (titulo, contenido,imagen, usuario_id) VALUES ('$titulo', '$contenido','$newImageName', $usuario_id)";
                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>Artículo creado con éxito.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                }
        }
    }

}

// Crear artículo end

// Actualizar artículo start

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['actualizar'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $titulo = $conn->real_escape_string($_POST['titulo']);
    $contenido = $conn->real_escape_string($_POST['contenido']);

    if ($_FILES["imagen"]["error"] > 0) {
       
        if(empty($titulo) || $titulo == '' || empty($contenido) || $contenido == ''){
            $error = "Error, algunos campos están vacíos";
        }else{

            $sql = "UPDATE articulos SET titulo='$titulo', contenido='$contenido' WHERE id=$id";
                if ($conn->query($sql) === TRUE) {
                     $actualizar = false;
                    echo "<div align='center'>Artículo actualizado con éxito.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                }
        }
        
    }else{

        if(empty($titulo) || $titulo == '' || empty($contenido) || $contenido == ''){
            $error = "Error, algunos campos están vacíos";
        }else{

            $image = $_FILES['imagen']['name'];
            $imageArr = explode('.', $image);
            $rand = rand(1000, 99999);
            $newImageName = $imageArr[0] .$rand . '.' . $imageArr[1];
            $rutaFinal = "../img/" . $newImageName;
            move_uploaded_file($_FILES['imagen']['tmp_name'] ,$rutaFinal);

                $sql = "UPDATE articulos SET titulo='$titulo', contenido='$contenido', imagen='$newImageName' WHERE id=$id";
                if ($conn->query($sql) === TRUE) {
                
                    echo "<div align='center' >Artículo actualizado con éxito.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                }

        }
    }
}

// Actualizar artículo end

// Eliminar artículo start
if (isset($_GET['eliminar'])) {
    $id = $conn->real_escape_string($_GET['eliminar']);
    $sql = "DELETE FROM articulos WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<div  align='center' >Artículo eliminado con éxito.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
// Eliminar artículo end

// Errores start
    if(!empty($error)){
        echo "<div align='center' style='color:red;' >" . $error . "</div>";
    }
// Errores end

// Leer artículos start

$sql = "SELECT a.*, u.nombre as autor FROM articulos a , usuarios u WHERE a.usuario_id = u.id ORDER BY a.created_at DESC";
$result = $conn->query($sql);

// Leer artículos end

?>

<div align="center">
    <h2>Gestión de Artículos</h2>

    <!-- Formulario para crear artículo start-->
    <h3>Crear nuevo artículo</h3>
    <form method="post"   action=""  enctype="multipart/form-data">
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
        </div>
        <br>
        <div>
            <label for="contenido" >Contenido:</label>
            <textarea  id="contenido" name="contenido" rows="5" required></textarea>
        </div>
        <div>
            <br>
            <label for="imagen" >Imagen:</label>
            <input type="file"  name="imagen" id="imagen" placeholder="Selecciona una imagen">
        </div>
        <br>
        <button type="submit" name="crear">Crear Artículo</button>
    </form>
    <!-- Formulario para crear artículo end-->

    <!-- Tabla de artículos -->
    <h3>Artículos existentes</h3>
    <table border="1px" cellspacing="1px" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Título</th>
                <th>Nombre imagen</th>
                <th>Autor</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td> <img width='50px' height='50px' src='../img/".htmlspecialchars($row['imagen']) . " ' </td>";
                    echo "<td>" . htmlspecialchars($row['titulo']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['imagen']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['autor']) . "</td>";
                    echo "<td>" . $row['created_at'] . "</td>";
                    echo "<td>
                             <a href='?editar=" . $row['id'] . "' class='btn btn-sm btn-warning'>Editar</a>
                            <a href='?eliminar=" . $row['id'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"¿Estás seguro?\")'>Eliminar</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay artículos</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<!-- Formulario para editar artículo start-->

<?php
if (isset($_GET['editar']) && $actualizar) {

    $id = $conn->real_escape_string($_GET['editar']);
    $sql = "SELECT * FROM articulos WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $articulo = $result->fetch_assoc();
?>
<hr style="margin-top:40px;" >
<div align="center" style="margin-top:40px;">
<h3>Editar artículo <?php echo $articulo['id']; ?></h3>
<form method="post" class="mb-4"  action=""  enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?php echo $articulo['id']; ?>">
    <div>
        <label for="titulo">Título</label>
        <input type="text"  id="titulo" name="titulo" value="<?php echo htmlspecialchars($articulo['titulo']); ?>" required>
    </div>
    <div>
        <br>
        <label for="contenido" >Contenido</label>
        <textarea  id="contenido" name="contenido" rows="5" required><?php echo htmlspecialchars($articulo['contenido']); ?></textarea>
    </div>
    <div>
        <br>
        <label for="imagen" class="form-label">Imagen:</label>
        <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Selecciona una imagen">
    </div>
    <div>
        <br>
        <p>Imagen: <?php echo htmlspecialchars($articulo['imagen']); ?> </p>
    </div>

    <br>

    <button type="submit" name="actualizar" class="btn btn-primary">Actualizar Artículo</button>
</form>
</div>
<?php
    }
}
?>

<!-- Formulario para editar artículo end-->



<?php include '../includes/footer.php'; ?>