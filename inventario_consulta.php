<?php
include 'conexion.php';

$sql = "SELECT 
            i.id,
            p.ID_Producto AS producto_id,
            p.nombre AS nombre,
            p.presentacion,
            i.cantidad,
            i.fecha_elaboracion,
            i.fecha_vencimiento,
            i.lote
        FROM inventario i
        JOIN productos p ON i.producto_id = p.ID_Producto";

$resultado = $conexion->query($sql);

$datos = [];

while ($fila = $resultado->fetch_assoc()) {
    $datos[] = $fila;
}

echo json_encode($datos);
?>