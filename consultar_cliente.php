<?php
$conexion = new mysqli("localhost", "root", "", "prolac"); 

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT id, nombre, correo, telefono, edad, genero FROM cliente";
$resultado = $conexion->query($sql);

$cliente = [];

while ($fila = $resultado->fetch_assoc()) {
    $cliente[] = $fila;
}

echo json_encode($cliente);
$conexion->close();
?>