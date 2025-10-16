<?php
/*
Hacer tres funciones 
mediaTemperaturas($temp)
temperaturaMinima($temp)
diasCalurosos($temp) = "Temperaturas > 20"
crear archivo con eso que sea temp.txt
*/
function mediaTemperaturas($temp) {
    return array_sum($temp) / count($temp);
}

function temperaturaMinima($temp) {
    return min($temp);
}

function diasCalurosos($temperaturas) {
    $caluroso=[];
    for($i=0; $i<count($temperaturas);$i++) {
        if ($temperaturas[$i] >= 20) {
            $caluroso[] = $temperaturas[$i] . " ";
        }
    }
    return count($caluroso);
}

// Datos de ejemplo
$temperaturas = [14,17,18,20,25,23,16];

// Calcular resultados
$media = mediaTemperaturas($temperaturas);
$min = temperaturaMinima($temperaturas);
$calurosos = diasCalurosos($temperaturas);

// Mostrar en consola
echo "Media: $media\n";
echo "Mínima: $min\n";
echo "Días calurosos (>20): $calurosos\n";

// Guardar en archivo
$f = fopen("temp.txt", "a");
fwrite($f, "Temperaturas: " . implode(", ", $temperaturas) . "\n");
fwrite($f, "Media: $media\n");
fwrite($f, "Mínima: $min\n");
fwrite($f, "Días calurosos (>20): $calurosos\n");
fwrite($f, "--------------------------\n");
fclose($f);
/*
Hacer cuatro funciones
stockTotal($productos)
productoAgotados($productos)
productoMasStock($productos)
reponer($productos, $producto, $cantidad)
crear un archivo productos.txt con eso
*/

$productos = [
    "Teclados" => 20,
    "Ratones" => 3,
    "Monitor" => 7,
    "Impresoras" => 0,
    "Portatiles" => 0,
];

// 1. Sumar el stock total
function stockTotal($productos) {
    return array_sum($productos);
}

// 2. Listar productos con stock 0
function productoAgotados($productos) {
    return array_keys(array_filter($productos, fn($cant) => $cant == 0));
}

// 3. Producto con mayor stock
function productoMasStock($productos) {
    $max = max($productos);
    return array_keys($productos, $max)[0];
}

// 4. Reponer stock a un producto
function reponer(&$productos, $producto, $cantidad) {
    if (isset($productos[$producto])) {
        $productos[$producto] += $cantidad;
    }
}

// Reponer ejemplo (opcional)
reponer($productos, "Portatiles", 5);

// Calcular resultados
$total = stockTotal($productos);
$agotados = productoAgotados($productos);
$masStock = productoMasStock($productos);

// Mostrar en pantalla
echo "Stock total: $total\n";
echo "Agotados: " . implode(", ", $agotados) . "\n";
echo "Producto con más stock: $masStock\n";

// Escribir en productos.txt
$f = fopen("productos.txt", "a");
fwrite($f, "Productos:\n");
foreach ($productos as $nombre => $cantidad) {
    fwrite($f, "- $nombre: $cantidad\n");
}
fwrite($f, "Stock total: $total\n");
fwrite($f, "Agotados: " . (empty($agotados) ? "Ninguno" : implode(", ", $agotados)) . "\n");
fwrite($f, "Producto con más stock: $masStock\n");
fwrite($f, "--------------------------\n");
fclose($f);

/*
password_checker.php
php password_checker.php Password1
Funciones:
tieneLongitud($pass) >= 8 --> true/false
tieneMayusculas($pass) --> true/false
tieneMinusculas($pass) --> true/false
tieneNumeros($pass) --> true/false
tieneSimbolos($pass) --> true/false
esFuerte($pass) --> es debil si cumple 0 o 1, media si cumple 2 o 4, fuerte si cumple 5

crear un archivo recomendaciones.txt con eso
Contraseña:
Fuerza:
Recomendaciones:(Añadir simbolos, añadir numeros, etc)
Que sea con fopen("recomendaciones.txt", "a")
*/


function tieneLongitud($pass) {
    return strlen($pass) >= 8;
}

function tieneMayusculas($pass) {
    return preg_match('/[A-Z]/', $pass);
}

function tieneMinusculas($pass) {
    return preg_match('/[a-z]/', $pass);
}

function tieneNumeros($pass) {
    return preg_match('/[0-9]/', $pass);
}

function tieneSimbolos($pass) {
    return preg_match('/[\W_]/', $pass); // \W = no alfanumérico, _ incluido
}

function esFuerte($pass) {
    $criterios = 0;
    if (tieneLongitud($pass)) $criterios++;
    if (tieneMayusculas($pass)) $criterios++;
    if (tieneMinusculas($pass)) $criterios++;
    if (tieneNumeros($pass)) $criterios++;
    if (tieneSimbolos($pass)) $criterios++;

    if ($criterios <= 1) {
        return ['debil', $criterios];
    } elseif ($criterios <= 4) {
        return ['media', $criterios];
    } else {
        return ['fuerte', $criterios];
    }
}

function generarRecomendaciones($pass) {
    $recomendaciones = [];

    if (!tieneLongitud($pass)) $recomendaciones[] = "usar al menos 8 caracteres";
    if (!tieneMayusculas($pass)) $recomendaciones[] = "añadir mayúsculas";
    if (!tieneMinusculas($pass)) $recomendaciones[] = "añadir minúsculas";
    if (!tieneNumeros($pass)) $recomendaciones[] = "añadir números";
    if (!tieneSimbolos($pass)) $recomendaciones[] = "añadir símbolos";

    return $recomendaciones;
}

// Ejecutar el script
if ($argc < 2) {
    echo "Uso: php password_checker.php <contraseña>\n";
    exit(1);
}

$password = $argv[1];
list($fuerza, $puntos) = esFuerte($password);
$recomendaciones = generarRecomendaciones($password);

// Mostrar por pantalla
echo "Contraseña: $password\n";
echo "Fuerza: $fuerza\n";
if (!empty($recomendaciones)) {
    echo "Recomendaciones:\n";
    foreach ($recomendaciones as $rec) {
        echo "- $rec\n";
    }
} else {
    echo "Recomendaciones: Ninguna, contraseña fuerte.\n";
}

// Guardar en recomendaciones.txt
$archivo = fopen("recomendaciones.txt", "a");
if ($archivo) {
    fwrite($archivo, "Contraseña: $password\n");
    fwrite($archivo, "Fuerza: $fuerza\n");
    fwrite($archivo, "Recomendaciones:\n");
    if (!empty($recomendaciones)) {
        foreach ($recomendaciones as $rec) {
            fwrite($archivo, "- $rec\n");
        }
    } else {
        fwrite($archivo, "- Ninguna, contraseña fuerte\n");
    }
    fwrite($archivo, "--------------------------\n");
    fclose($archivo);
} else {
    echo "No se pudo abrir el archivo recomendaciones.txt\n";
}


/*
cajero.php
a centimos 
si tengo 12,35 heuros lo paso a 1235 centimos
php cajero.php 43,30
Funciones:
cambio para 43.30
2x20 €
1x5€
1x2€
1x20 centimos
1x10 centimos
aCentimos($euros) --> 1235
desgloseCambio($cantidad, $precio) valor centimos --> cantidad
validarDenominaciones($denominaciones, $cantidad) es array de emteros y ordena de mayor a menor
mostrarDesglose($desglose) imprime el desglose
verificarCambioExacto($cantidad, $precio) true(se puede exacto)/false 
crear un archivo con eso que sea cambio.txt
*/


function aCentimos($euros) {
    return (int)round($euros * 100);
}

function desgloseCambio($euros) {
    $cantidad = aCentimos($euros);
    $denominaciones = [50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1];
    $desglose = [];
    
    foreach ($denominaciones as $denominacion) {
        while ($cantidad >= $denominacion) {
            if (!isset($desglose[$denominacion])) {
                $desglose[$denominacion] = 0;
            }
            $desglose[$denominacion]++;
            $cantidad -= $denominacion;
        }
    }
    
    return $desglose;
}


$archivo = fopen("cambio.txt", "a");
$€ = $argv[1];
fwrite($archivo, "Cambio para $€" . "€ : " . aCentimos($€) . " centimos\n");
fwrite($archivo, "Desglose:\n");
$desglose = desgloseCambio($€);
foreach ($desglose as $valor => $cantidad){
    fwrite($archivo, "$valor centimos: $cantidad\n");
}
fwrite($archivo, "\n");
fclose($archivo);

?>