<?php

include '../includes/header.php';

if (!isAdmin()) {
    redirect('../index.php');
}

/*
$array = ["nombre"=>"Juan", "apellido"=>"Perez"];
var_dump($array["nombre"]);
*/

$stats = [
    'usuarios' => $conn->query("SELECT COUNT(*) as count FROM usuarios")->fetch_assoc()['count'],
    'articulos' => $conn->query("SELECT COUNT(*) as count FROM articulos")->fetch_assoc()['count'],
    'comentarios' => $conn->query("SELECT COUNT(*) as count FROM comentarios")->fetch_assoc()['count'],
];

// Obtener los últimos artículos
$ultimos_articulos = $conn->query("SELECT a.id, a.titulo, u.nombre as autor, a.created_at 
                                   FROM articulos a , usuarios u WHERE a.usuario_id = u.id 
                                   ORDER BY a.created_at DESC LIMIT 5");

// Obtener los últimos comentarios
$ultimos_comentarios = $conn->query("SELECT c.id, c.contenido, u.nombre as autor, a.titulo as articulo, c.created_at FROM comentarios c , usuarios u,  articulos a WHERE u.id = c.usuario_id AND c.articulo_id = a.id  ORDER BY c.created_at DESC LIMIT 5");

// Obtener los últimos usuarios
$ultimos_usuarios = $conn->query("SELECT * FROM usuarios ORDER BY created_at DESC LIMIT 5 ");

echo "<h1 align = 'center'>Administración</h1>";

echo "<div class='panel'><span class='stats'>CANTIDAD  USUARIOS: " .$stats['usuarios']."</span> <span class='stats'>CANTIDAD ARTICULOS: ". $stats['articulos']."</span>  <span class='stats'>CANTIDAD COMENTARIOS: " .$stats['comentarios']." </span> </div>";

?>

<h3 align="center">Articulos</h3>
<div align="center" style="margin-top: 40px;">
     <table class="tabla-articulos" border="1px" cellspacing="1px">
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Fecha</th>
            </tr>
       <?php while ($articulo = $ultimos_articulos->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($articulo['titulo']); ?></td>
                <td><?php echo htmlspecialchars($articulo['autor']); ?></td>
                <td><?php echo $articulo['created_at']; ?></td>
            </tr>
        <?php endwhile; ?>
</table>
</div>
<div style="text-align: center; margin-top: 10px;">
     <a href="articulos.php">Ver todos los articulos</a>
</div>

<hr>



<h3 align="center" style="margin-top: 40px;">Comentarios</h3>
<div align="center" style="margin-top: 40px;">
     <table class="tabla-articulos" border="1px" cellspacing="1px">
            <tr>
                <th>Contenido</th>
                <th>Autor</th>
                <th>Artículo</th>
                <th>Fecha</th>
            </tr>
       <?php while ($comentario = $ultimos_comentarios->fetch_assoc()): ?>
            <tr>
               <td><?php echo htmlspecialchars(substr($comentario['contenido'], 0, 30)) . '...'; ?></td>
               <td><?php echo htmlspecialchars($comentario['autor']); ?></td>
               <td><?php echo htmlspecialchars($comentario['articulo']); ?></td>
               <td><?php echo $comentario['created_at']; ?></td>
            </tr>
        <?php endwhile; ?>
</table>
</div>
<div style="text-align: center; margin-top: 10px;">
     <a href="comentarios.php">Ver todos los comentarios</a>
</div>

<hr>

<h3 align="center" style="margin-top: 40px;">Usarios</h3>
<div align="center" style="margin-top: 40px;">
     <table class="tabla-articulos" border="1px" cellspacing="1px">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha</th>
            </tr>
       <?php while ($usuario = $ultimos_usuarios->fetch_assoc()): ?>
            <tr>
               <td><?php echo htmlspecialchars($usuario['nombre']) ?></td>
               <td><?php echo htmlspecialchars($usuario['email']); ?></td>
               <td><?php echo htmlspecialchars($usuario['rol']); ?></td>
               <td><?php echo $usuario['created_at']; ?></td>
            </tr>
        <?php endwhile; ?>
</table>
</div>
<div style="text-align: center; margin-top: 10px;">
     <a href="usuarios.php">Ver todos los usuarios</a>
</div>

<?php include '../includes/footer.php'; ?>