<?php
// Iniciar la sesión
session_start();

// Credenciales de usuario administrador
$usuario_admin = "administrador";
$contrasena_admin = "12345678";

// Recuperar datos del formulario
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validar las credenciales
if ($usuario === $usuario_admin && $contrasena === $contrasena_admin) {
    // Credenciales correctas, redireccionar a la página principal
    $_SESSION['usuario'] = $usuario_admin; // Guardar el usuario en la sesión
    header("Location: principal.php");
    exit();
} else {
    // Credenciales incorrectas, volver al formulario de inicio de sesión con un mensaje de error
    $_SESSION['mensaje_error'] = "Usuario o contraseña incorrectos";
    header("Location: inicio_sesion.php");
    exit();
}
?>
