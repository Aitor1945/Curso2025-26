<?php
/*
Hacer tres funciones 
mediaTemperaturas($temp)
temperaturaMinima($temp)
diasCalurosos($temp) = "Temperaturas > 20"
crear archivo con eso que sea temp.txt
*/
function mediaTemperaturas($temp) {
    return round(array_sum($temp) / count($temp));
}

function temperaturaMaxima($temp) {
    return max($temp);
}

function temperaturaMinima($temp) {
    return min($temp);
}

function diasCalurosos($temperaturas) {
    $caluroso = [];
    foreach ($temperaturas as $dia => $temp) {
        if ($temp > 20) {
            $caluroso[] = $dia;
        }
    }

    $cantidad = count($caluroso);
    for ($i = 0; $i < $cantidad; $i++) {
        if ($i == $cantidad - 1) {
            echo " y ";
        } elseif ($i > 0) {
            echo ", ";
        }

        echo $caluroso[$i];
    }
}

// Datos de ejemplo
$temperaturas = [
    "Lunes" => 24,
    "Martes" => 27,
    "Miércoles" => 18,
    "Jueves" => 20,
    "Viernes" => 25,
    "Sábado" => 23,
    "Domingo" => 16,
];

echo "Media Temp: " . mediaTemperaturas($temperaturas) . "\n";
echo "Temp Max: ". temperaturaMaxima($temperaturas) . "\n";
echo "Temp Min: ". temperaturaMinima($temperaturas) . "\n";
diasCalurosos($temperaturas) ."\n";
