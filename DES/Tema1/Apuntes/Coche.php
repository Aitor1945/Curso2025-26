<?php
class Coche {
    public $marca;
    public $modelo;
    public $color;
    public $vel = 0;
    public $marcha = null;

    public function __construct($color, $marca, $modelo) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function aumentarVelocidad() {
        if ($this->vel < 100) {
            $this->vel += 10;
            if ($this->vel > 120) {
                $this->vel = 120;
            }
            $this->comprobarMarcha();
        }
    }

    public function reducirVelocidad() {
        if ($this->vel >= 5) {
            $this->vel -= 5;
        } else {
            $this->vel = 0;
        }
        $this->comprobarMarcha();
    }

    public function comprobarMarcha() {
        if ($this->vel > 0 && $this->vel <= 20) {
            $this->marcha = 1;
        } elseif ($this->vel > 20 && $this->vel <= 40) {
            $this->marcha = 2;
        } elseif ($this->vel > 40 && $this->vel <= 60) {
            $this->marcha = 3;
        } elseif ($this->vel > 60 && $this->vel <= 80) {
            $this->marcha = 4;
        } elseif ($this->vel > 80 && $this->vel <= 100) {
            $this->marcha = 5;
        }elseif ($this->vel > 100){
            $this->marcha = 6;
        }
    }


    public function mosatrarInformacion(){
        echo "Marca {$this->marca}\nModelo {$this->modelo}\nColor {$this->color}\nVelocidad {$this->vel}\nMarcha {$this->marcha}\n";
    }


}


class CocheChulo extends Coche {
    public function __construct($color, $marca, $modelo) {
        parent::__construct($color, $marca, $modelo);
    }

    public function aumentarMuchoVelocidad($aumento) {
        if ($this->vel < 120) {
            $this->vel = $this->vel + (10*$aumento);
            if ($this->vel > 120) {
                $this->vel = 120;
            }
            $this->comprobarMarcha();
        }
    }
}