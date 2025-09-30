<?php
session_start();

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "prolac");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$usuario = $_POST['nombreusuario'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para verificar usuario
$sql = "SELECT * FROM usuarios WHERE nombreusuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $usuario_data = $resultado->fetch_assoc();

    if ($contrasena === $usuario_data['contraseña']) { // comparación directa
        $_SESSION['usuario'] = $usuario_data['nombreusuario'];
        header("Location: pagina principal.html");
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$conexion->close();
?>