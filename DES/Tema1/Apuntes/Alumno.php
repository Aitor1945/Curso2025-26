<?php
class Alumno {
    public $nombre;
    public $email;

public function __construct($nombre, $email) {
    $this->nombre = $nombre;
    $this->email = $email;
}

}

class Usuario extends Alumno {
public $curso;
public $nota = 0;

public function __construct($nombre,$email,$curso){
    parent::__construct($nombre,$email);
    $this->curso = $curso;
}
public function mostrarDatos() {
    echo "Nombre: " . $this->nombre . ", Email: " . $this->email . ", Curso: " . $this->curso;
}
}

$alumno = new Usuario("Aitor", "agj0034", "DAW");


echo $alumno->mostrarDatos();