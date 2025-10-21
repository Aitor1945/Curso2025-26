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
        echo "Libros disponibles en {$this->nombre}:\n";
        foreach ($this->libros as $libro) {
            if ($libro->estado === "Disponible") {
                $libro->mostrarInformacion();
            }
        }
    }

    public function prestarLibro($titulo) {
        foreach ($this->libros as $libro) {
            if ($libro->titulo === $titulo && $libro->estado === "Disponible") {
                $libro->estado = "Prestado";
                echo "El libro '{$titulo}' ha sido prestado.\n";
                return;
            }
        }
        echo "El libro '{$titulo}' no está disponible.\n";
    }

    public function devolverLibro($titulo) {
        foreach ($this->libros as $libro) {
            if ($libro->titulo === $titulo && $libro->estado === "Prestado") {
                $libro->estado = "Disponible";
                echo "El libro '{$titulo}' ha sido devuelto.\n";
                return;
            }
        }
        echo "El libro '{$titulo}' no se puede devolver (no fue prestado o no existe).\n";
    }
}





