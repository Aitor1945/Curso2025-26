<?php
// suma.php
if (isset($_GET['num1'], $_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    // Verificar que los campos no estén vacíos
    if ($num1 === "" || $num2 === "") {
        echo "<h3>¡Por favor, completa ambos campos!</h3>";
    }
    // Verificar que ambos sean números
    elseif (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<h3>¡Por favor, ingresa números válidos!</h3>";
    } 
    else {
        $suma = $num1 + $num2;
        echo "<h3>La suma es: $suma</h3>";
    }
} else {
    echo "<h3>¡Por favor, completa ambos campos!</h3>";
}
?>
