<?php
class Libro {
    // Atributos
    public $titulo;
    public $autor;
    public $estado = "Disponible";

    // Constructor
    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    // Métodos
    public function donar() {
        $this->estado = "Donado";

    }
    public function mostrarInformacion() {
        echo "- Título: {$this->titulo}, Autor: {$this->autor}, Estado: {$this->estado}\n";
    }
}
