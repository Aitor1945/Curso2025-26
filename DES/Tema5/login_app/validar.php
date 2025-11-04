<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE nombre='$nombre' AND contrasena=MD5('$contrasena')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['rol'] = $row['rol'];

    echo "<h2>Bienvenido, " . htmlspecialchars($row['nombre']) . "!</h2>";
    echo "<p>Tu rol es: <strong>" . htmlspecialchars($row['rol']) . "</strong></p>";

    if ($row['rol'] == 'Administrador') {
        echo "<a href='admin_roles.php'>Ir al panel de administración</a><br>";
    }

    echo "<a href='index.php'>Cerrar sesión</a>";

} else {
    echo "<h3>Usuario o contraseña incorrectos</h3>";
    echo "<a href='index.php'>Volver al login</a>";
}

$conn->close();
?>
