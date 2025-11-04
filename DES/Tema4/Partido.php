<?php
require_once "Cuadro.php";
class Partido {
    public $id;
    public $parejaA;
    public $parejaB;
    public $ronda;
    public $marcador;

    public function __construct($id, $parejaA, $parejaB, $ronda) {
        $this->id = $id;
        $this->parejaA = $parejaA;
        $this->parejaB = $parejaB;
        $this->ronda = $ronda;
    }

    public function jugar(){

        $setsA = 0;
        $setsB = 0;
        $sets = [];

        while ($setsA < 2 && $setsB < 2) {
            $ganador = rand(0, 1); 
            $x = rand(0, 4);
            if ($ganador === 0) {
                $sets[] = "6-$x";
                $setsA++;
            } else {
                $sets[] = "$x-6";
                $setsB++;
            }
        }

        $this->marcador = implode(", ", $sets);

    }
    
    public function mostrarResultado() {

        return "[$this->ronda] Partido #$this->id: $this->parejaA vs $this->parejaB -> $this->marcador";

    }


    public function getGanador(){

        $sets = explode(", ", $this->marcador);
        $setsA = 0;
        $setsB = 0;

        foreach ($sets as $set) {
            list($a, $b) = explode("-", $set);
            if ($a == 6){
                $setsA++;
            } elseif ($b == 6) {
                $setsB++;
            }
        }

        return $setsA > $setsB ? $this->parejaA : $this->parejaB;

    }


    public function getPerdedor() {

        return $this->getGanador() === $this->parejaA ? $this->parejaB : $this->parejaA;


    }



}


class PartidoFinal extends Partido {
    public $mvp;
    public function jugar() {
        parent::jugar();
        $ganador = $this->getGanador();
        $this->mvp = "Jugador destacado de $ganador";
    }
}
