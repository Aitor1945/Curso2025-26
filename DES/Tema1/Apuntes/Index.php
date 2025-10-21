<?php
require_once 'Coche.php';
$cocheJesus = new Coche("Rojo", "Tesla", "Modelo R");
$cocheChulo = new CocheChulo("Rojo", "Tesla", "Modelo R");

echo $cocheChulo->aumentarMuchoVelocidad(120);
echo $cocheChulo->mosatrarInformacion();

/*
Clase biblioteca


*/