<?php
namespace Usuario\Tema6;
class Comversor_temperatura {


    public function celsiusAFahrenheit($celsius) {
        if (is_null($celsius)) {
            return null;
        }elseif (!is_numeric($celsius)) {
            return "No es numérico";
        }
        return ($celsius * 9/5) + 32;
    }


    public function fahrenheitACelsius($fahrenheit) {
        if (is_null($fahrenheit)) {
            return null;
        }if (!is_numeric($fahrenheit)) {
            return "No es numérico";
        }
        return ($fahrenheit - 32) * 5/9;
    }
}
