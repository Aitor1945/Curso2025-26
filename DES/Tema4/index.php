<?php
require_once "Cuadro.php";
require_once "Partido.php";
date_default_timezone_set("Europe/Madrid");


//Abrir archivo y escribir fecha del acta
$archivo = fopen("DES\Tema4\acta_torneo.txt", "w");
$lineas = [
    "ACTA DEL TORNEO DE PADEL",
    "Fecha Acta: " . date("Y-m-d H:i:s") . "\n",
    "",
];

fwrite($archivo, implode("\n", $lineas));



// Definir parejas
$parejas = [
    "García / López",
    "Martín / Ruiz",
    "Santos / Ortega",
    "Pérez / Molina",
    "Vega / Navarro",
    "Iglesias / Romero",
    "Crespo / Domínguez",
    "Serrano / Castro",
];

// Crear cuadro y generar partidos
$cuadro = new Cuadro($parejas);
$cuadro->generarPartidos();

// Simular torneo
list($campeon, $subcampeon, $mvp) = $cuadro->simularTorneo();

// Imprimir al archivo 
foreach ($cuadro->partidos as $partido) {

  fwrite($archivo,$partido->mostrarResultado() . "\n");

}

// Mostrar campeon, subcampeon, mvp y fecha guardar en $texto
$texto2 = "\nCampeón: $campeon\n". "Subcampeón: $subcampeon\n" . "MVP de la final: $mvp";
fwrite($archivo,$texto2);
fclose($archivo);


/*
echo date("H:i:s");
echo "\nCampeón: $campeon\n";
echo "Subcampeón: $subcampeon\n";
echo "MVP de la final: $mvp\n";
*/


