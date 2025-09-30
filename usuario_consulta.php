<?php
$conexion = new mysqli("localhost", "root", "", "prolac"); 

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT id, nombre, direccion, numerodocumento, tipoid, celular, correo, contraseña, nombreusuario, fechaingreso, rol FROM usuarios";
$resultado = $conexion->query($sql);

$usuarios = [];

while ($fila = $resultado->fetch_assoc()) {
    $usuarios[] = $fila;
}

echo json_encode($usuarios);
$conexion->close();
?>