<?php
require_once "Partido.php";
class Cuadro {
    public $parejas;
    public $partidos = [];

    public function __construct($parejas) {
        $this->parejas = $parejas;
    }

    
    public function generarPartidos() {

       for ($i = 0; $i < 8; $i += 2) {
            $id = ($i / 2) + 1;
            $partido = new Partido($id, $this->parejas[$i], $this->parejas[$i + 1], "Cuartos");
            $this->partidos[] = $partido;
        }
    }


    
    public function simularTorneo() {
      $id = 5;
      $ganadoresCuartos = [];

      foreach ($this->partidos as $partido) {
            if ($partido->ronda === "Cuartos") {
                $partido->jugar();
                $ganadoresCuartos[] = $partido->getGanador();
            }
        }
    
      $semis = [
            new Partido($id++, $ganadoresCuartos[0], $ganadoresCuartos[1], "Semifinal"),
            new Partido($id++, $ganadoresCuartos[2], $ganadoresCuartos[3], "Semifinal")
        ];

      $ganadoresSemis = [];

      foreach ($semis as $semi) {
            $semi->jugar();
            $ganadoresSemis[] = $semi->getGanador();
            $this->partidos[] = $semi;
        }

        $final = new PartidoFinal($id, $ganadoresSemis[0], $ganadoresSemis[1], "Final");
        $final->jugar();
        $this->partidos[] = $final;

     return [
          $final->getGanador(),
          $final->getPerdedor(),
          $final->mvp

];



    }    

}   