<?php
// Comprobamos si hay datos por POST

/*
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']); // Evita HTML malicioso
    echo "<h2>¡Hola, $nombre! (enviado por POST) 😊</h2>";
}else {
    echo "<p>No hay nada</p>";
}
*/


// Comprobamos si hay datos por GET
if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
    $nombre = htmlspecialchars($_GET['nombre']);
    echo "<h2>¡Hola, $nombre! (enviado por GET) 😊</h2>";
}else {
    echo "<p>No hay nada</p>";
}
?>