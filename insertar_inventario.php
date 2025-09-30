<?php
$conexion = new mysqli("localhost", "root", "", "prolac");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$producto_id = $_POST['producto_id'];
$cantidad = $_POST['cantidad'];
$fecha_elaboracion = $_POST['fecha_elaboracion'];
$fecha_vencimiento = $_POST['fecha_vencimiento'];
$lote = $_POST['lote'];

$sql = "INSERT INTO inventario (producto_id, cantidad, fecha_elaboracion, fecha_vencimiento, lote)
        VALUES ('$producto_id', '$cantidad', '$fecha_elaboracion', '$fecha_vencimiento', '$lote')";

if ($conexion->query($sql) === TRUE) {
    header("Location: ingresar-productos.html");
    exit();
} else {
    echo " Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>