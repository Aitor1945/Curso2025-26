<?php

/*mysql_connect
// 1. Conexión a la base de datos
$db = mysqli_connect("localhost", "root", "", "julian");

// Verificar conexión
if (!$db) {
    die("Error de conexión: " . mysqli_connect_error());
}

// 2. Consulta SQL
$sql = "SELECT * FROM tabla";  // Cambia "tabla" por tu tabla real
$resultado = mysqli_query($db, $sql);

// Verificar consulta
if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($db));
}

// 3. Obtener filas
while ($fila = mysqli_fetch_assoc($resultado)) {
    // $fila es un array asociativo con los datos de cada fila
    print_r($fila);
}

// 4. Número de filas
$num_filas = mysqli_num_rows($resultado);
echo "Número de filas: " . $num_filas;

// 5. Escapar cadenas (para seguridad)
$cadena_segura = mysqli_real_escape_string($db, "cadena con 'comillas'");
echo $cadena_segura;

// 6. Cerrar conexión
mysqli_close($db);



Ejercicio 1 
Crear formulario POST que tenga usuario y pass
Conectar a la base de datos y comprobar el login OK si OK entonces muesrto una pantalla mostrando su usuario y el rol si no OK me saco un mensaje de error en el formulario de user no found
el formulario es de boostrap

*/





?>