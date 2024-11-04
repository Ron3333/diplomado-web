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

// Obtener los últimos artículos
$ultimos_comentarios = $conn->query("SELECT c.id, c.contenido, u.nombre as autor, a.titulo as articulo, c.created_at FROM comentarios c , usuarios u,  articulos a WHERE u.id = c.usuario_id AND c.articulo_id = a.id  ORDER BY c.created_at DESC LIMIT 5");

// Obtener los últimos usuarios
$ultimos_usuarios = $conn->query("SELECT * FROM usuarios ORDER BY created_at DESC LIMIT 5 ");

echo "<h1 align = 'center'>Administración</h1>";

echo "<div class='panel'><span class='stats'>CANTIDAD  USUARIOS: " .$stats['usuarios']."</span> <span class='stats'>CANTIDAD ARTICULOS: ". $stats['articulos']."</span>  <span class='stats'>CANTIDAD COMENTARIOS: " .$stats['comentarios']." </span> </div>";

?>




<h1>Este es mi Dashbord</h1>