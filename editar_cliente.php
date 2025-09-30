<?php
include("conexion.php");

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];

    $sql = "UPDATE cliente SET nombre='$nombre', correo='$correo', telefono='$telefono', edad=$edad, genero='$genero' WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "Cliente actualizado correctamente.";
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
} else {
    echo "Datos incompletos.";
}
?>