<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];
$rol = 'Usuario'; // Rol por defecto

// Comprobar si ya existe
$check = $conn->query("SELECT * FROM usuarios WHERE nombre='$nombre'");
if ($check->num_rows > 0) {
    echo "<h3>El nombre de usuario ya existe.</h3>";
    echo "<a href='registro.php'>Volver al registro</a>";
    exit;
}

// Insertar nuevo usuario
$sql = "INSERT INTO usuarios (nombre, contrasena, rol)
        VALUES ('$nombre', MD5('$contrasena'), '$rol')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>Usuario registrado con éxito</h3>";
    echo "<a href='index.php'>Ir al login</a>";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>
