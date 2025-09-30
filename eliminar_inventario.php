<?php
include 'conexion.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $stmt = $conexion->prepare("DELETE FROM inventario WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Registro de inventario eliminado correctamente.";
    } else {
        echo "Error al eliminar: " . $conexion->error;
    }

    $stmt->close();
} else {
    echo "ID no proporcionado.";
}

$conexion->close();
?>