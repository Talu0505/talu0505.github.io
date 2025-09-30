<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $presentacion = $_POST['presentacion'];

    $sql = "INSERT INTO productos (nombre, presentacion) VALUES ('$nombre', '$presentacion')";
    
    if ($conexion->query($sql) === TRUE) {
        // Redirige al formulario después de guardar
    header("Location: Crear_Producto.html");
    exit();
    } else {
        echo " Error: " . $conexion->error;
    }

    $conexion->close();
}
?>