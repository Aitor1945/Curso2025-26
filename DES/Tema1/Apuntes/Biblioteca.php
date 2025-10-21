<?php
require_once 'Libro.php';
class Biblioteca {
    // Atributos
    public $nombre;
    public $libros = [];

    // Constructor
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Métodos
    public function agregarLibro($libro) {
        $this->libros[] = $libro;
    }

    public function mostrarLibrosDisponibles() {
        echo "Libros disponibles en {$this->nombre}:<br>";
        foreach ($this->libros as $libro) {
            if ($libro->estado === "Disponible") {
                $libro->mostrarInformacion();
            }
        }
    }

    public function prestarLibro($libro) {
        if ($libro->estado === "Disponible") {
            $libro->estado = "Prestado";
            echo "El libro '{$libro->titulo}' ha sido prestado.<br>";
        } else {
            echo "El libro '{$libro->titulo}' no está disponible.<br>";
        }
    }


    
        public function devolverLibro($libro) {
        if ($libro->estado === "Prestado") {
            $libro->estado = "Disponible";
            echo "El libro '{$libro->titulo}' ha sido devuleto.<br>";
        } else {
            echo "El libro '{$libro->titulo}' está disponible.<br>";
        }
    }
}





