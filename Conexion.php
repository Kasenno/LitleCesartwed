<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Ejecutar una consulta SQL
$consulta = "SELECT * FROM tabla";
$resultado = mysqli_query($conexion, $consulta);

// Procesar los resultados
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $fila['id'] . ", Nombre: " . $fila['nombre'] . "<br>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
