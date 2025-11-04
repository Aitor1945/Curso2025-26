<?php
/*
hacer un formulario que reciba dos numeros que lo envia a suma.php si no es un numero que te diga mete un numero 
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de dos números</title>
</head>
<body>
    <h2>Ingrese dos números para sumarlos</h2>
    
    <form method="get" action="suma.php">
        Número 1: <input type="text" name="num1"><br><br>
        Número 2: <input type="text" name="num2"><br><br>
        <input type="submit" value="Sumar">
    </form>
</body>
</html>
