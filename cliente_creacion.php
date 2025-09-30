<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];

$sql = "INSERT INTO cliente (nombre, correo, telefono, edad, genero)
        VALUES ('$nombre', '$email', '$telefono', $edad, '$genero')";

if ($conexion->query($sql)) {
    echo "Cliente registrado con éxito";
} else {
    echo "Error: " . $conexion->error;
}
?>