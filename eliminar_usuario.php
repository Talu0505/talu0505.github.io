<?php
include("conexion.php");

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "DELETE FROM usuarios WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar: " . $conexion->error;
    }
} else {
    echo "ID no proporcionado.";
}
?>