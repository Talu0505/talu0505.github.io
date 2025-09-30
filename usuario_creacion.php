<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$numerodocumento = $_POST['numerodocumento'];
$tipoid = $_POST['tipoid'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$nombreusuario = $_POST['nombreusuario'];
$fechaingreso = $_POST['fechaingreso'];
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios (nombre, direccion, numerodocumento, tipoid, celular, correo, contraseña, nombreusuario, fechaingreso, rol)
        VALUES ('$nombre', '$direccion', $numerodocumento, '$tipoid', $celular, '$correo', '$contraseña', '$nombreusuario', '$fechaingreso', '$rol')";

// Ejecutar la consulta
if ($conexion->query($sql)) {
    header("Location: usuarios-creacion.html");
    exit();
    } else {
        echo "Error: " . $conexion->error;
    $conexion->close();
}
?>