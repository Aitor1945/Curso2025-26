<?php
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



    }


    public function getGanador(){
$texto = "";
return $texto;


    }


    public function getPerdedor() {




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
